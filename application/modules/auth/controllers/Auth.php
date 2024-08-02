<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends Auth_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		if ($message = $this->session->flashdata('message')) {
			$this->template->build( 'auth/general_message', array('message' => $message));
		} else {
			redirect( '/auth/login/' );
		}
	}

	/**
	 * Login user on the site
	 *
	 * @return void
	 */
	 
	function login()
	{
		if ($this->authentication->is_logged_in()) {			
			if (get_backend_user() == 1) {
				redirect($this->config->item('app_admin_controller'));
			} else {
				redirect($this->config->item('app_default_controller'));
			}	
		} else {
				$data['login_by_username'] = $this->config->item('auth_login_by_username');
				$data['login_by_email'] = $this->config->item('auth_login_by_email');
                $this->form_validation->set_rules('login', 'Username', 'required|regex_match[/^[a-z0-9A-Z@._]+$/]');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('remember', 'Remember me', 'integer');

				// Get login for counting attempts to login
				if ($this->config->item('auth_login_count_attempts') AND ($login = $this->input->post('username'))) {
					$login = $this->security->xss_clean($login);
				} else {
					$login = '';
				}
				
				$data['use_recaptcha'] = $this->config->item('auth_use_recaptcha');
				$data['show_captcha'] = FALSE;
				if ($this->authentication->is_max_login_attempts_exceeded($login)) {
					if ($data['use_recaptcha']) {
						
						$this->form_validation->set_rules('recaptcha_response_field', 'Kode keamanan', 'required|callback__check_recaptcha');
					}
					else {
						$this->form_validation->set_rules('captcha', 'Kode keamanan', 'required|callback__check_captcha');
					}
				
				
					$data['show_captcha'] = TRUE;
					if ($data['use_recaptcha']) {
						$data['recaptcha_html'] = $this->_create_recaptcha();
					} else {
						$data['captcha_html'] = $this->_create_captcha();
					}
				}
				$data['errors'] = array();
				$this->form_validation->set_error_delimiters('', '');
				if ($this->form_validation->run()) {
					if ($this->authentication->login( $this->form_validation->set_value('login'), $this->form_validation->set_value('password'), $this->form_validation->set_value('remember'), $data['login_by_username'], $data['login_by_email'])) {								// success
						redirect($this->config->item('app_admin_controller'));
					} else {
						$errors = $this->authentication->get_error_message();
						if(!empty($errors)){
							if (isset($errors['banned'])) {								// banned user
								$this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);
							} else {													// fail
								foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
							}
						} 
					}
				}
				$this->template->set_layout('layout_auth')
							->set_partial('modules_js','modules_js')
							->set_partial('modules_css','modules_css');
				$this->template->set_breadcrumb( 'Login Form' , site_url('login'), 'ace-icon fa fa-lock home-icon blue' );
				$this->template->build( 'auth/login_form', $data);
			//}
			
		} 
	}
	
	function change_group()
	{
		$user_group_id = $this->uri->segment(4);
		if (!$this->authentication->is_logged_in()) {								// not logged in or not activated
			redirect('auth/Auth/login/');
		} else {
			if( $this->authentication->change_user_group( $user_group_id ) ){
				$this->_show_message($this->lang->line('auth_group_changed'));
			} else {
				$this->_show_message($this->lang->line('auth_group_change_failed'));
			}
		}
	}
	
	/**
	 * Logout user
	 *
	 * @return void
	 */
	function logout()
	{
		$this->authentication->logout();
		if( $this->config->item('cas_login_enable') ){
			$this->load->library('cas');
			$this->cas->logout();
		} else {
			$this->_show_message($this->lang->line('auth_message_logged_out'));
		}
	}

	/**
	 * Change user password
	 *
	 * @return void
	 */
	function change_password()
	{
		if (!$this->authentication->is_logged_in()) {								// not logged in or not activated
			redirect('/auth/login/');

		} else {
			$this->form_validation->set_rules('old_password', 'Password Lama', 'required');
			$this->form_validation->set_rules('new_password', 'Password Baru', 'required|min_length['.$this->config->item('auth_password_min_length').']|max_length['.$this->config->item('auth_password_max_length').']');
			$this->form_validation->set_rules('confirm_new_password', 'Konfirmasi password baru', 'required|matches[new_password]');

			$data['errors'] = array();

			$this->form_validation->set_error_delimiters('<div class="help-block col-xs-12 col-sm-reset inline">', '</div>');
			if ($this->form_validation->run()) {								// validation ok
				if ($this->authentication->change_password(
						$this->form_validation->set_value('old_password'),
						$this->form_validation->set_value('new_password'))) {	// success
					$this->session->set_flashdata('message_form', array('status' => 'success', 'title' => 'Informasi', 'message' => $this->lang->line('auth_message_password_changed')));
					redirect('auth/change_password');
				} else {														// fail
					$errors = $this->authentication->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
							
			$this->template->build( 'auth/change_password_form', $data);
		}
	}
	
	/**
	 * Generate reset code (to change password) and send it to user
	 *
	 * @return void
	 */
	function forgot_password()
	{
		if ($this->authentication->is_logged_in()) {									// logged in
			redirect( );

		} elseif ($this->authentication->is_logged_in(FALSE)) {						// logged in, not activated
			redirect('/auth/send_again/');

		} elseif (!$this->config->item('auth.allow_forgot_password')) {				// forgot password is off
			$this->_show_message($this->lang->line('auth_message_forgot_password_disabled'));

		} else {
			$this->form_validation->set_rules('login', 'Email or login', 'trim|required');

			$data['errors'] = array();
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button>', '</div>');
			if ($this->form_validation->run()) {								// validation ok
				if (!is_null($data = $this->authentication->forgot_password(
						$this->form_validation->set_value('login')))) {

					$data['site_name'] = $this->config->item('site.name');

					// Send email with password activation link
					$this->_send_email('forgot_password', $data['email'], $data);

					$this->_show_message($this->lang->line('auth_message_new_password_sent'));

				} else {
					$errors = $this->authentication->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
							
			$this->template->build( 'auth/forgot_password_form', $data);
		}
	}

	/**
	 * Replace user password (forgotten) with a new one (set by user).
	 * User is verified by user_id and authentication code in the URL.
	 * Can be called by clicking on link in mail.
	 *
	 * @return void
	 */
	function reset_password()
	{
		$user_id		= $this->uri->segment(3);
		$new_pass_key	= $this->uri->segment(4);

		$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|min_length['.$this->config->item('auth.password_min_length').']|max_length['.$this->config->item('auth.password_max_length').']|alpha_dash');
		$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|matches[new_password]');

		$data['errors'] = array();

		if ($this->form_validation->run()) {								// validation ok
			if (!is_null($data = $this->authentication->reset_password(
					$user_id, $new_pass_key,
					$this->form_validation->set_value('new_password')))) {	// success

				$data['site_name'] = $this->config->item('site.name');

				// Send email with new password
				$this->_send_email('reset_password', $data['email'], $data);

				$this->_show_message($this->lang->line('auth_message_new_password_activated').' '.anchor('/auth/login/', 'Login'));

			} else {														// fail
				$this->_show_message($this->lang->line('auth_message_new_password_failed'));
			}
		} else {
			// Try to activate user by password key (if not activated yet)
			if ($this->config->item('auth.email_activation')) {
				$this->authentication->activate_user($user_id, $new_pass_key, FALSE);
			}
			
			if (!$this->config->item('auth.allow_forgot_password')) {						// forgot password is off
				$this->_show_message($this->lang->line('auth_message_forgot_password_disabled'));
			}
			
			if (!$this->authentication->can_reset_password($user_id, $new_pass_key)) {
				$this->_show_message($this->lang->line('auth_message_new_password_failed'));
			}
		}
		
		$this->template->build( 'auth/reset_password_form', $data);
	}
	
	/**
	 * Change user email
	 *
	 * @return void
	 */
	function change_email()
	{
		if (!$this->authentication->is_logged_in()) {								// not logged in or not activated
			redirect('/auth/login/');

		} else {
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if (!is_null($data = $this->authentication->set_new_email(
						$this->form_validation->set_value('email'),
						$this->form_validation->set_value('password')))) {			// success

					$data['site_name'] = $this->config->item('app_name');

					// Send email with new email address and its activation link
					$this->_send_email('change_email', $data['new_email'], $data);

					$this->_show_message(sprintf($this->lang->line('auth_message_new_email_sent'), $data['new_email']));

				} else {
					$errors = $this->authentication->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
			
			$this->template->build( 'auth/change_email_form', $data);
		}
	}
	
	/**
	 * Replace user email with a new one.
	 * User is verified by user_id and authentication code in the URL.
	 * Can be called by clicking on link in mail.
	 *
	 * @return void
	 */
	function reset_email()
	{
		$user_id		= $this->uri->segment(3);
		$new_email_key	= $this->uri->segment(4);

		// Reset email
		if ($this->authentication->activate_new_email($user_id, $new_email_key)) {	// success
			$this->authentication->logout();
			$this->_show_message($this->lang->line('auth_message_new_email_activated').' '.anchor('/auth/login/', 'Login'));

		} else {																// fail
			$this->_show_message($this->lang->line('auth_message_new_email_failed'));
		}
	}
	
	/**
	 * Show info message
	 *
	 * @param	string
	 * @return	void
	 */
	function _show_message($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect( $this->config->item('app_admin_controller'));
	}
}

/* End of file auth_php */
/* Location: ./application/controllers/auth_php */