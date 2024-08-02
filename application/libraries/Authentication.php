<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Authentication
 *
 * Authentication library for Code Igniter.
 * 
 *
 * @based on	Tank_auth by Ilya Konyukhov (http://konyukhov.com/soft/)	
 * @version		1.0.9
 *
 * @based on	DX Auth by Dexcell (http://dexcell.shinsengumiteam.com/dx_auth)
 * @license		MIT License Copyright (c) 2008 Erick Hartanto
 */
class Authentication
{
	private $ci;
	private $error = array();

	function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('auth/users');
		$this->ci->load->model('auth/user_privilage');
		$this->ci->lang->load('auth/auth');
		$this->ci->load->library(array('session'));
		$this->ci->load->helper(array('url'));

		// Try to autologin
		$this->autologin();

		// Clear cache
		$this->__clear_cache();
	}

	/**
	 * Login user on the site. Return TRUE if login is successful
	 * (user exists and activated, password is correct), otherwise FALSE.
	 *
	 * @param	string	(username or email or both depending on settings in config file)
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function login($login, $password, $remember, $login_by_username, $login_by_email)
	{
		if ((strlen($login) > 0) and (strlen($password) > 0)) {

			// Which function to use to login (based on config)
			if ($login_by_username and $login_by_email) {
				$get_user_func = 'get_user_by_login';
			} else if ($login_by_username) {
				$get_user_func = 'get_user_by_username';
			} else {
				$get_user_func = 'get_user_by_email';
			}

			if (!is_null($user = $this->ci->users->$get_user_func($login))) {	// login ok
				// Does password match hash in database?
				$hash = checkhashSSHA($user->UserSalt,  $password);
				if ($hash == $user->UserPassword) {		// password ok
					if ($user->UserBanned == 1) {									// fail - banned
						$this->error = array('banned' => $user->UserBanText);
					} else {
						$qry_privilage = $this->ci->user_privilage->get_privilage_menu(array('GroupDetailGroupId' => $user->GroupId));

						$this->ci->session->set_userdata(array(
							'user_id'				=> $user->UserId,
							'user_email'			=> $user->UserEmail,
							'user_name'				=> $user->UserName,
							'user_group'			=> $user->GroupId,
							'any_user_group_exist'	=> $this->is_any_user_group_exist($user->UserId),
							'backend_user'		    => $this->is_current_group_backend_user($user->GroupId),
							'menu_privilege'		=> $this->menu_privilege($qry_privilage),
							'action_privilege'		=> $this->action_privilege($qry_privilage),
							'user_real_name'		=> $user->UserRealName,
							'is_logged_in' 			=> TRUE,
							'user_role_id'          => $user->UserRoleId,
							'user_tingkat_pimpinan' => $user->UserTingkatPimpinanId,
							'user_majelis_lembaga' => $user->UserMajelisLembagaId
						));

						if ($remember) {
							$this->create_autologin($user->UserId);
						}
						$this->clear_login_attempts($login);

						$this->ci->users->update_login_info(
							$user->UserId,
							$this->ci->config->item('auth_login_record_ip'),
							$this->ci->config->item('auth_login_record_time')
						);
						return TRUE;
					}
				} else {														// fail - wrong password
					$this->increase_login_attempt($login);
					$this->error = array('password' => 'auth_incorrect_password');
				}
			} else {															// fail - wrong login
				$this->increase_login_attempt($login);
				$this->error = array('login' => 'auth_incorrect_login');
			}
		}
		return FALSE;
	}


	function cas_login($login)
	{
		if (isset($login)) {
			if ($this->cas_allowed_application($login->attributes)) {
				if (!is_null($user = $this->ci->users->get_user_by_username($login->userlogin))) {	// login ok
					if ($user->UserBanned == 1) {									// fail - banned
						$this->error = array('banned' => $user->UserBanText);
					} else {
						$qry_privilage = $this->ci->user_privilage->get_privilage_menu(array('GroupDetailGroupId' => $user->GroupId, 'MenuIsShow' => 'Ya'));
						$this->ci->session->set_userdata(array(
							'user_id'				=> $user->UserId,
							'user_email'			=> $user->UserEmail,
							'user_name'				=> $user->UserName,
							'user_group'			=> $user->GroupId,
							'any_user_group_exist'	=> $this->is_any_user_group_exist($user->UserId),
							'menu_privilege'		=> $this->menu_privilege($qry_privilage),
							'action_privilege'		=> $this->action_privilege($qry_privilage),
							'user_real_name'		=> $user->UserRealName,
							'is_logged_in' 			=> TRUE,
							'user_role_id'          => $user->UserRoleId,
							'user_unit_kode'        => $user->UnitKode,
							'user_unit_id'          => $user->UserUnitId,
							'user_tingkat_pimpinan' => $user->UserTingkatPimpinanId
						));

						$this->ci->users->update_login_info(
							$user->UserId,
							$this->ci->config->item('auth_login_record_ip'),
							$this->ci->config->item('auth_login_record_time')
						);

						return TRUE;
					}
				} else {															// fail - wrong login
					$this->error = array('auth_incorrect_account' => 'auth_incorrect_login');
				}
			} else {
				$this->error = array('auth_incorrect_account' => 'auth_incorrect_login');
			}
		}
		return FALSE;
	}

	function cas_allowed_application($attribute)
	{
		$attrArray = json_decode($attribute['attribute']);
		foreach ($attrArray as $id => $val) {
			if ($val->application == $this->ci->config->item('cas_application_code')) {
				return TRUE;
			}
		}

		return FALSE;
	}

	/**
	 * Logout user from the site
	 *
	 * @return	void
	 */
	function logout()
	{
		$this->delete_autologin();

		// See http://codeigniter.com/forums/viewreply/662369/ as the reason for the next line
		// $this->ci->session->set_userdata(array('user_id' , 'user_name' , 'status' ));

		$this->ci->session->unset_userdata(array('any_user_group_exist', 'user_id', 'user_email', 'user_name', 'user_real_name', 'user_group', 'is_logged_in', 'menu_privilege', 'action_privilege', 'user_role_id', 'user_unit_kode', 'user_unit_id', 'backend_user', 'user_org_id'));
	}

	/**
	 * Check if user logged in. Also test if user is activated or not.
	 *
	 * @param	bool
	 * @return	bool
	 */
	function is_logged_in()
	{
		return $this->ci->session->userdata('is_logged_in');
	}

	/**
	 * Get user_id
	 *
	 * @return	string
	 */
	function get_user_id()
	{
		return $this->ci->session->userdata('user_id');
	}


	/**
	 * Get user_email
	 *
	 * @return	string
	 */
	function get_user_email()
	{
		return $this->ci->session->userdata('user_email');
	}

	/**
	 * Get user_name
	 *
	 * @return	string
	 */
	function get_username()
	{
		return $this->ci->session->userdata('user_name');
	}

	/**
	 * Get user_real_name
	 *
	 * @return	string
	 */
	function get_user_real_name()
	{
		return $this->ci->session->userdata('user_real_name');
	}

	/**
	 * Get user_group
	 *
	 * @return	string
	 */
	function get_user_group()
	{
		return $this->ci->session->userdata('user_group');
	}

	function get_user_role_id()
	{
		return $this->ci->session->userdata('user_role_id');
	}

	function get_user_unit_kode()
	{
		return $this->ci->session->userdata('user_unit_kode');
	}

	function get_user_unit_id()
	{
		return $this->ci->session->userdata('user_unit_id');
	}

	function get_user_org_id()
	{
		return $this->ci->session->userdata('user_org_id');
	}

	function get_user_org()
	{
		return $this->ci->session->userdata('user_org');
	}

	function get_periode_org()
	{
		return $this->ci->session->userdata('periode_org');
	}

	function get_periode_org_status()
	{
		return $this->ci->session->userdata('periode_org_status');
	}

	/**
	 * Get user_group
	 *
	 * @return	string
	 */
	function get_menu_privilege()
	{
		return $this->ci->session->userdata('menu_privilege');
	}

	/**
	 * Get user_group
	 *
	 * @return	string
	 */
	function get_action_privilege()
	{
		return $this->ci->session->userdata('action_privilege');
	}

	function any_user_group_exist()
	{
		return $this->ci->session->userdata('any_user_group_exist');
	}

	function get_backend_user()
	{
		return $this->ci->session->userdata('backend_user');
	}

	/**
	 * Is any other array user_group
	 *
	 * @return	array or null
	 */
	function is_any_user_group_exist($user_id)
	{
		if (!is_null($res = $this->ci->users->is_any_user_group_exist($user_id))) {
			return $res;
		}
		return NULL;
	}

	/**
	 * Apakah user adalah pengguna backend ??
	 *
	 * @return	array or null
	 */
	function is_current_group_backend_user($user_group)
	{
		if (!is_null($res = $this->ci->users->get_group_by_array(array('GroupId' => $user_group)))) {
			if ($res->num_rows() > 0) {
				$group = $res->row();
				if ($group->GroupBackend == 'Y') {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		return FALSE;
	}

	/**
	 * Change user_group
	 *
	 */
	function change_user_group($string)
	{
		// seleksi apakah user grup ada ada atau tidak
		if (!is_null($res = $this->ci->users->get_user_group_by_array(array('UserGroupUserId' => $this->get_user_id(), 'UserGroupGroupId' => $string)))) {
			if ($res->num_rows() == 1) {
				$user = $res->row();
				$qry_privilage = $this->ci->user_privilage->get_privilage_menu(array('GroupDetailGroupId' => $user->UserGroupGroupId, 'MenuIsShow' => 'Ya'));
				$this->ci->session->set_userdata(array(
					'user_group'			=> $user->UserGroupGroupId,
					'menu_privilege'		=> $this->menu_privilege($qry_privilage),
					'action_privilege'		=> $this->action_privilege($qry_privilage),
				));

				return TRUE;
			}
		}
		return FALSE;
	}

	/**
	 * menu_privilege( query )
	 *
	 */
	function menu_privilege($qry)
	{
		$data_menu = NULL;
		if (!is_null($qry)) {
			$MenuId = NULL;
			foreach ($qry as $row) {
				if ($row->MenuIsShow == 'Ya') {
					$data_menu[$row->MenuId] = array('MenuId' => $row->MenuId, 'MenuName' => $row->MenuName, 'MenuParentId' => $row->MenuParentId, 'MenuModule' => $row->MenuModule, 'MenuIcon' => $row->MenuIcon, 'MenuDescription' => $row->MenuDescription, 'MenuIconClass' => $row->MenuIconClass, 'MenuOrder' => $row->MenuOrder, 'MenuStyle' => $row->MenuStyle);
				}
			}
		}
		return $data_menu;
	}

	/**
	 * action_privilege( query )
	 *
	 */
	function action_privilege($qry)
	{
		$data_action = NULL;
		if (!is_null($qry)) {
			foreach ($qry as $row) {
				if (!is_null($row->MenuActionSegmen)) {
					$data_action[] = array('MenuModule' => $row->MenuModule, 'MenuActionName' => $row->MenuActionName, 'MenuActionFunction' => $row->MenuActionFunction, 'MenuActionSegmen' => strtolower($row->MenuActionSegmen));
				}
			}
		}
		return $data_action;
	}

	/**
	 * Password Hasher :
	 *
	 * @param	string
	 */
	function password_hasher($string)
	{
		/* 
		$hasher = new PasswordHash(
					$this->ci->config->item('auth_phpass_hash_strength'),
					$this->ci->config->item('auth_phpass_hash_portable'));
		return $hasher->HashPassword($string); 
		*/

		$return = hashSSHA($string);
		return $return;
	}

	/**
	 * Activate new email, if email activation key is valid.
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function activate_new_email($user_id, $new_email_key)
	{
		if ((strlen($user_id) > 0) and (strlen($new_email_key) > 0)) {
			return $this->ci->users->activate_new_email(
				$user_id,
				$new_email_key
			);
		}
		return FALSE;
	}

	/**
	 * Get error message.
	 * Can be invoked after any failed operation such as login or register.
	 *
	 * @return	string
	 */
	function get_error_message()
	{
		return $this->error;
	}

	/**
	 * Save data for user's autologin
	 *
	 * @param	int
	 * @return	bool
	 */
	private function create_autologin($user_id)
	{
		$this->ci->load->helper('cookie');
		$key = substr(md5(uniqid(rand() . get_cookie($this->ci->config->item('sess_cookie_name')))), 0, 16);

		$this->ci->load->model('auth/user_autologin');
		$this->ci->user_autologin->purge($user_id);

		if ($this->ci->user_autologin->set($user_id, md5($key))) {
			set_cookie(array(
				'name' 		=> $this->ci->config->item('auth_autologin_cookie_name'),
				'value'		=> serialize(array('user_id' => $user_id, 'key' => $key)),
				'expire'	=> $this->ci->config->item('auth_autologin_cookie_life'),
			));
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Clear user's autologin data
	 *
	 * @return	void
	 */
	private function delete_autologin()
	{
		$this->ci->load->helper('cookie');
		if ($cookie = get_cookie($this->ci->config->item('auth_autologin_cookie_name'), TRUE)) {

			$data = unserialize($cookie);

			$this->ci->load->model('auth/user_autologin');
			$this->ci->user_autologin->delete($data['user_id'], md5($data['key']));

			delete_cookie($this->ci->config->item('auth_autologin_cookie_name'));
		}
	}

	/**
	 * Login user automatically if he/she provides correct autologin verification
	 *
	 * @return	void
	 */
	private function autologin()
	{
		if (!$this->is_logged_in() and !$this->is_logged_in(FALSE)) {			// not logged in (as any user)

			$this->ci->load->helper('cookie');
			if ($cookie = get_cookie($this->ci->config->item('auth_autologin_cookie_name'), TRUE)) {

				$data = unserialize($cookie);

				if (isset($data['key']) and isset($data['user_id'])) {

					$this->ci->load->model('auth/user_autologin');
					if (!is_null($user = $this->ci->user_autologin->get($data['user_id'], md5($data['key'])))) {

						// Login user
						$qry_privilage = $this->ci->user_privilage->get_privilage_menu(array('GroupDetailGroupId' => $user->GroupId, 'MenuIsShow' => 'Ya'));
						$this->ci->session->set_userdata(array(
							'user_id'					=> $user->UserId,
							'user_email'				=> $user->UserEmail,
							'user_name'					=> $user->UserName,
							'user_group'				=> $user->GroupId,
							'any_user_group_exist'	=> $this->is_any_user_group_exist($user->UserId),
							'menu_privilege'			=> $this->menu_privilege($qry_privilage),
							'action_privilege'		=> $this->action_privilege($qry_privilage),
							'backend_user'				=> $this->is_current_group_backend_user($user->GroupId),
							'user_real_name'			=> $user->UserRealName,
							'is_logged_in'				=> TRUE,
							'user_role_id'          => $user->UserRoleId,
							'user_unit_kode'        => $user->UnitKode,
							'user_unit_id'          => $user->UserUnitId,
							'user_org_id'				=> $user->userorgOrgId
						));

						// Renew users cookie to prevent it from expiring
						set_cookie(array(
							'name' 		=> $this->ci->config->item('auth_autologin_cookie_name'),
							'value'		=> $cookie,
							'expire'	=> $this->ci->config->item('auth_autologin_cookie_life'),
						));

						$this->ci->users->update_login_info(
							$user->UserId,
							$this->ci->config->item('auth_login_record_ip'),
							$this->ci->config->item('auth_login_record_time')
						);
						return TRUE;
					}
				}
			}
		}
		return FALSE;
	}

	/**
	 * Check if login attempts exceeded max login attempts (specified in config)
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_max_login_attempts_exceeded($login)
	{
		if ($this->ci->config->item('auth_login_count_attempts')) {
			$this->ci->load->model('auth/login_attempts');
			return $this->ci->login_attempts->get_attempts_num($this->ci->input->ip_address(), $login)
				>= $this->ci->config->item('auth_login_max_attempts');
		}
		return FALSE;
	}

	/**
	 * Increase number of attempts for given IP-address and login
	 * (if attempts to login is being counted)
	 *
	 * @param	string
	 * @return	void
	 */
	private function increase_login_attempt($login)
	{
		if ($this->ci->config->item('auth_login_count_attempts')) {
			if (!$this->is_max_login_attempts_exceeded($login)) {
				$this->ci->load->model('auth/login_attempts');
				$this->ci->login_attempts->increase_attempt($this->ci->input->ip_address(), $login);
			}
		}
	}

	/**
	 * Clear all attempt records for given IP-address and login
	 * (if attempts to login is being counted)
	 *
	 * @param	string
	 * @return	void
	 */
	private function clear_login_attempts($login)
	{
		if ($this->ci->config->item('auth_login_count_attempts')) {
			$this->ci->load->model('auth/login_attempts');
			$this->ci->login_attempts->clear_attempts(
				$this->ci->input->ip_address(),
				$login,
				$this->ci->config->item('auth_login_attempt_expire')
			);
		}
	}

	/**
	 * Protect from back button browser
	 *
	 * @return	void
	 */
	public function protect_acct()
	{
		if (!$this->is_logged_in()) {
			if ($this->ci->input->is_ajax_request()) exit('No direct script access allowed');
			redirect('admin', 'refresh');
		}
	}

	/**
	 * Clear all cache
	 *
	 * @return	void
	 */
	private function __clear_cache()
	{
		$this->ci->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->ci->output->set_header("Pragma: no-cache");
	}

	/**
	 * Protect modul by user group
	 *
	 * @param	string
	 */
	public function restrict($module_link = NULL)
	{
		$this->protect_acct();
		$re_class = $this->ci->router->class == 'Admin' ? 'admin' : $this->ci->router->class;

		$module = ($this->ci->router->class != 'Admin') ? $this->ci->router->module . '/' . $this->ci->router->class . '/' . $this->ci->router->method : $this->ci->router->class . '/' . $this->ci->router->module . '/' . $this->ci->router->method;
		$module_do = ($this->ci->router->class != 'Admin') ? $this->ci->router->module . '/' . $this->ci->router->class . '/' . substr_replace($this->ci->router->method, '', 0, 2) : $this->ci->router->class . '/' . $this->ci->router->module . '/' . substr_replace($this->ci->router->method, '', 0, 2);
		$action_privilege = $this->get_action_privilege();

		if (!is_null($module_link)) {
			if (!is_null($action_privilege)) {
				$key = array_search(strtolower($module_link), array_column($action_privilege, 'MenuActionSegmen'));
				if ($key !== FALSE) {
					return TRUE;
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		} else {
			if (!is_null($action_privilege)) {
				if ($module != '') {
					$key = array_search(strtolower($module), array_column($action_privilege, 'MenuActionSegmen'));
					$key_do = array_search(strtolower($module_do), array_column($action_privilege, 'MenuActionSegmen'));
					if ($key !== FALSE or $key_do !== FALSE) {
						return TRUE;
					} else {
						return FALSE;
					}
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
	}

	/**
	 * Change user password (only when user is logged in)
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function change_password($old_pass, $new_pass)
	{
		$user_id = $this->ci->session->userdata('user_id');
		$user_name = $this->ci->session->userdata('user_name');
		if (!is_null($user = $this->ci->users->get_user_by_id($user_id, TRUE))) {
			// Check if old password correct
			$hash = checkhashSSHA($user->UserSalt,  $old_pass);
			if ($user->UserPassword == $hash) {			// success
				// Replace old password with new one
				$new_password_hash = $this->password_hasher($new_pass);
				$this->ci->users->change_password(array('UserSalt' => $new_password_hash['salt'], 'UserPassword' => $new_password_hash['encrypted'], 'user_id' => $user_id, 'user_name' => $user_name, 'datetime' => date("Y-m-d H:i:s")));
				return TRUE;
			} else {															// fail
				$this->error = array('old_password' => 'auth_incorrect_password');
			}
		}
		return FALSE;
	}

	/**
	 * Set new password key for user and return some data about user:
	 * user_id, username, email, new_pass_key.
	 * The password key can be used to verify user when resetting his/her password.
	 *
	 * @param	string
	 * @return	array
	 */
	function forgot_password($login)
	{
		if (strlen($login) > 0) {
			if (!is_null($user = $this->ci->users->get_user_by_login($login))) {

				$data = array(
					'user_id'		=> $user->user_id,
					'user_name'		=> $user->user_name,
					'user_email'	=> $user->user_email,
					'new_pass_key'	=> md5(rand() . microtime()),
				);

				$this->ci->users->set_password_key($user->id, $data['new_pass_key']);
				return $data;
			} else {
				$this->error = array('login' => 'auth_incorrect_email_or_username');
			}
		}
		return NULL;
	}

	/**
	 * Check if given password key is valid and user is authenticated.
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function can_reset_password($user_id, $new_pass_key)
	{
		if ((strlen($user_id) > 0) and (strlen($new_pass_key) > 0)) {
			return $this->ci->users->can_reset_password(
				$user_id,
				$new_pass_key,
				$this->ci->config->item('auth.forgot_password_expire')
			);
		}
		return FALSE;
	}

	/**
	 * Replace user password (forgotten) with a new one (set by user)
	 * and return some data about it: user_id, username, new_password, email.
	 *
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function reset_password($user_id, $new_pass_key, $new_password)
	{
		if ((strlen($user_id) > 0) and (strlen($new_pass_key) > 0) and (strlen($new_password) > 0)) {

			if (!is_null($user = $this->ci->users->get_user_by_id($user_id, TRUE))) {

				if ($this->ci->users->reset_password(
					$user_id,
					MD5($new_password),
					$new_pass_key,
					$this->ci->config->item('auth.forgot_password_expire')
				)) {	// success

					// Clear all user's autologins
					$this->ci->load->model('auth/user_autologin');
					$this->ci->user_autologin->clear($user->user_id);

					return array(
						'user_id'			=> $user_id,
						'user_name'			=> $user->user_name,
						'user_email'		=> $user->user_email,
						'user_new_password'	=> $new_password,
					);
				}
			}
		}
		return NULL;
	}

	public function render_menu($style)
	{
		if ($this->is_logged_in()) {
			$array_menu = $this->get_menu_privilege();
			if (!empty($array_menu)) {
				$data = array();
				foreach ($array_menu as $row) {
					if (is_null($row['MenuParentId'])) {
						$data[0][] = $row;
					} else {
						$data[$row['MenuParentId']][] = $row;
					}
				}

				return $this->build_custom_menu($style, $data, 0);
			}
		}
		return FALSE;
	}

	private function build_custom_menu($style, $data, $parrent)
	{
		// $config_menu = $this->ci->config->item('theme_backend_menu_config') ;

		$str = '';
		if (!empty($data)) {
			$str .= $this->build_cild_custom_menu($style, $data, $parrent);
		}
		$str .= '';

		return $str;
	}

	private function build_cild_custom_menu($style, $data, $parrent)
	{
		$str = '';
		//$module_admin = 'admin/'. $this->ci->router->module;
		$module = $this->ci->router->module . '/' . $this->ci->router->class;
		if (isset($data[$parrent])) {
			foreach ($data[$parrent] as $value) {
				$menuAktif = array();

				$list_menu = $this->search($data, 'MenuModule', $module);
				$child = $this->build_cild_custom_menu($style, $data, $value['MenuId']);
				if ($style == '1' and $value['MenuStyle'] == $style) {
					if ($child) {
						//$mename = ($style == $value['MenuStyle']) ? $value['MenuName'] : 'test';
						$active = '';
						if (!empty($list_menu)) {
							$top_active = $this->search($data, 'MenuId', $list_menu[0]['MenuParentId']);
							if (!empty($top_active))
								$active = ($value['MenuId'] == $top_active[0]['MenuId']) ? 'active open' : '';
						}
						$str .= '
								<li class="menu-item ' . $active . '">
	            				<a class="menu-link" href="#" >
	              					<span class="icon fa ' . $value['MenuIconClass'] . '" ></span>
	              					<span class="title">' . $value['MenuName'] . '</span>
	              					<span class="arrow"></span>
	            				</a>

					            <ul class="menu-submenu">
					              ' . $child . '
					            </ul>
					         </li>
								';
					} else {
						$active = ($module == $value['MenuModule']) ? 'active' : '';
						$str .= '
								<li class="menu-item ' . $active . '">
				               <a class="menu-link" href="' . site_url($value['MenuModule']) . '">
				                  <span class="dot"></span>
				                  <span class="title">' . $value['MenuName'] . '</span>
				               </a>
				            </li>';
					}
				} else if ($style == '2' and $value['MenuStyle'] == $style) {
					if ($child) {

						$active = '';
						if (!empty($list_menu)) {
							$top_active = $this->search($data, 'MenuId', $list_menu[0]['MenuParentId']);
							if (!empty($top_active))
								$active = ($value['MenuId'] == $top_active[0]['MenuId']) ? 'active' : '';
						}

						$str .= '
								<li class="menu-item ' . $active . '">
		              		<a class="menu-link" style="color:white"  href="#">
		               		<span class="title">' . strtoupper($value['MenuName']) . '</span>
		                		<span class="arrow"></span>
		              		</a>
		              			<ul class="menu-submenu">
		                			' . $child . '
									</ul>
								</li>
						';
					} else {
						$active = ($module == $value['MenuModule']) ? 'active' : '';
						$str .= '
								<li class="menu-item ' . $active . '">
			                	<a class="menu-link" href="' . site_url($value['MenuModule']) . '">
			                  	<span class="title">' . $value['MenuName'] . '</span>
			                	</a>
			              	</li>
						';
					}
				}
			}
		}
		//$str .= '</li>';
		return $str;
	}

	function search($array, $key, $value)
	{
		$results = array();
		$this->search_r($array, $key, $value, $results);
		return $results;
	}

	function search_r($array, $key, $value, &$results)
	{
		if (!is_array($array)) {
			return;
		}

		if (isset($array[$key]) && $array[$key] == $value) {
			$results[] = $array;
		}

		foreach ($array as $subarray) {
			$this->search_r($subarray, $key, $value, $results);
		}
	}

	function check_if_active_menu($array, $key)
	{
		if (is_object($array))
			$array = (array)$array;
	}
}

/* End of file auth_php */
/* Location: ./application/libraries/auth_php */
