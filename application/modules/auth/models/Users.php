<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class Users extends CI_Model
{
	private $user_table			= 'user';			// user accounts
	private $group_table		   = 'group';			// group
	private $group_user_table	= 'user_group';		// user_group
   private $unit_table        = 'unit';
   private $org_user_table		= 'user_organisasi';
   private $periode_org       = 'periode_organisasi';
   private $periode           = 'periode';
   
	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->user_table			   = $ci->config->item('app_db_table_prefix').$this->user_table;
		$this->group_table			= $ci->config->item('app_db_table_prefix').$this->group_table;
		$this->group_user_table		= $ci->config->item('app_db_table_prefix').$this->group_user_table;
		$this->unit_table		      = $ci->config->item('app_db_table_prefix').$this->unit_table;
		$this->org_user_table		= $ci->config->item('app_db_table_prefix').$this->org_user_table;
	}

	/**
	 * Get user record by Id
	 *
	 * @param	int
	 * @param	bool
	 * @return	object
	 */
	function get_user_by_id($user_id)
	{
		$this->db->where('UserId', $user_id);

		$query = $this->db->get($this->user_table);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Get user record by login (UserName or email)
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_login($login)
	{
		$this->db->select( $this->user_table .'.*,'.
                     $this->group_user_table .'.* ,'.
                     $this->group_table .'.*');
                     
      $this->db->group_start();
      $this->db->where('LOWER('. $this->user_table . '.UserName)=', strtolower($login));
      $this->db->or_where('LOWER('. $this->user_table . '.UserEmail)=', strtolower($login));
      $this->db->group_end();
      $this->db->where('UserIsActive', 1);
      
      $this->db->join($this->group_user_table , $this->group_user_table . ".UserGroupUserId = ". $this->user_table .".UserId AND " . $this->group_user_table . ".UserGroupIsDefault = 'Ya'",'left outer');
      $this->db->join($this->group_table , $this->group_user_table . ".UserGroupGroupId = ". $this->group_table .".GroupId",'left outer');
      
      $query = $this->db->get($this->user_table);
      if ($query->num_rows() == 1) return $query->row();
      return NULL;
	}

	/**
	 * Get user record by user_name
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_username($username)
	{
		$this->db->select(	$this->user_table .'.*,'.
							$this->group_user_table .'.* ,'.
							$this->group_table .'.* ,'.
							$this->unit_table .'.*');
							
		$this->db->where('LOWER('. $this->user_table . '.UserName)=', strtolower($username));
		
		$this->db->join($this->group_user_table , $this->group_user_table . ".UserGroupUserId = ". $this->user_table .".UserId AND " . $this->group_user_table . ".UserGroupIsDefault = 'Ya'",'left outer');
		$this->db->join($this->group_table , $this->group_user_table . ".UserGroupGroupId = ". $this->group_table .".GroupId",'left outer');
		$this->db->join($this->unit_table , $this->unit_table . ".UnitId = ". $this->user_table .".UserUnitId",'left outer');
      
		$query = $this->db->get($this->user_table);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}
	
	/**
	 * Get user record by email
	 *
	 * @param	string
	 * @return	object
	 */
	function get_user_by_email($email)
	{
		
		$this->db->select(	$this->user_table .'.*,'.
							$this->group_user_table .'.* ,'.
							$this->group_table .'.* ,'.
							$this->unit_table .'.*');
							
		$this->db->where('LOWER('. $this->user_table . '.UserEmail)=', strtolower($email));
		
		$this->db->join($this->group_user_table , $this->group_user_table . ".UserGroupUserId = ". $this->user_table .".UserId AND " . $this->group_user_table . ".UserGroupIsDefault = 'Ya'",'left outer');
		$this->db->join($this->group_table , $this->group_user_table . ".UserGroupGroupId = ". $this->group_table .".GroupId",'left outer');
		$this->db->join($this->unit_table , $this->unit_table . ".UnitId = ". $this->user_table .".UserUnitId",'left outer');
      
		$query = $this->db->get($this->user_table);
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}
	
	function get_user( $object = array(), $limit = NULL, $offset = NULL, $order = array(), $select = array(), $group_by = NULL, $status = NULL ){
		if(!is_null($select)) {
			foreach($select as $val)
			{
				$this->db->select($val);
			}
		}
		
		if(!is_null($object)) {
			foreach($object as $row => $val)
			{
				if(preg_match("/(<=|>=|=|<|>)(\s*)(.+)/i", trim($val), $matches))
					$this->db->where( $row .' '.$matches[1], $matches[3]);
				else
					$this->db->where( $row .' LIKE', '%'.$val.'%');
			}
		}	
		
		if(!is_null($limit) && !is_null($offset)){
			$this->db->limit($limit, $offset );
		} 
		
		$this->db->join('sys_unit', 'UserUnitId = UnitId', 'LEFT');
		$this->db->join('sys_role', 'UserRoleId = roleId', 'LEFT');
		$this->db->join('sys_user_group', 'UserGroupUserId = UserId', 'LEFT');
		$this->db->join('sys_group', 'UserGroupGroupId = GroupId', 'LEFT');
		if(!empty($order)){
			foreach($order as $row => $val)
			{
				$ordered = (isset($val)) ? $val : 'ASC';
				$this->db->order_by($row, $val);
			}
		}
		if(!is_null($group_by)){
			$this->db->group_by( $group_by );
		}
		
		if(is_null($status)){
			$query = $this->db->get( 'sys_user' );
			if ( $query->num_rows() > 0 ) return $query;
			return NULL;
		} else if($status == 'counter'){
			return $this->db->count_all_results('sys_user');
		}
	}
	
	/**
	 * Check any user group exist ??
	 *
	 * @param	string
	 * @return	object
	 */
	function is_any_user_group_exist($user_id)
	{
		$this->db->select(	$this->group_user_table .'.UserGroupGroupId AS id_group');
		$this->db->select(	$this->group_table .'.GroupName AS name_group');
		$this->db->join($this->group_table , $this->group_user_table . ".UserGroupGroupId = ". $this->group_table .".GroupId AND " . $this->group_user_table . ".UserGroupUserId = '". $user_id ."'");
		$query = $this->db->get($this->group_user_table);
		if ($query->num_rows() > 1) return $query->result_array();
		return NULL;
	}
	
	/**
	 * Get user group
	 *
	 * @param	array
	 * @return	object
	 */
	function get_user_group_by_array($array)
	{
		$this->db->where($array);
		$query = $this->db->get($this->group_user_table);
		if ($query->num_rows() > 0) return $query;
		return NULL;
	}
	
	/**
	 * Get user group
	 *
	 * @param	array
	 * @return	object
	 */
	function get_group_by_array($array)
	{
		$this->db->where($array);
		$query = $this->db->get($this->group_table);
		if ($query->num_rows() > 0) return $query;
		return NULL;
	}
	
	/**
	 * Check if username available for registering
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_username_available($username, $user = NULL)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(UserName)=', strtolower($username));
		if(!is_null($user)){
			$this->db->where( 'UserId !=', $user );
		}
		
		$query = $this->db->get($this->user_table);
		return $query->num_rows() == 0;
	}

	/**
	 * Check if email available for registering
	 *
	 * @param	string
	 * @return	bool
	 */
	function is_email_available($email, $user = NULL)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(UserEmail)=', strtolower($email));
		if(!is_null($user)){
			$this->db->where( 'UserId !=', $user );
		}
		
		$query = $this->db->get($this->user_table);
		return $query->num_rows() == 0;
	}

	/**
	 * Delete user record
	 *
	 * @param	int
	 * @return	bool
	 */
	function delete_user($user_id)
	{
		$this->db->where('UserId', $user_id);
		$this->db->delete($this->user_table);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Change user password
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function change_password($data)
	{
		$this->db->update($this->user_table, array( 'UserPassword' => $data['UserPassword'], 'UserSalt' => $data['UserSalt'], 'UserPassUpdatedUser' => $data['user_name'], 'UserPassUpdatedTime' => $data['datetime']), array('UserId' => $data['user_id']) ); 
		return $this->db->affected_rows() > 0;
	}
	
	/**
	 * Set new email for user (may be activated or not).
	 * The new email cannot be used for login or notification before it is activated.
	 *
	 * @param	int
	 * @param	string
	 * @param	string
	 * @param	bool
	 * @return	bool
	 */
	function set_new_email($user_id, $new_email, $new_email_key, $banned, $banned_text)
	{
		$this->db->set($activated ? 'UserNewEmail' : 'UserEmail', $new_email);
		$this->db->set('UserNewEmailKey', $new_email_key);
		$this->db->where('UserId', $user_id);
		$this->db->where('UserBanned', $banned ? 1 : 0);
		$this->db->where('UserBanText', $banned_text);

		$this->db->update($this->user_table);
		return $this->db->affected_rows() > 0;
	}

	/**
	 * Activate new email (replace old email with new one) if activation key is valid.
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function activate_new_email($user_id, $new_email_key)
	{
		$this->db->set('UserEmail', 'UserNewEmail', FALSE);
		$this->db->set('UserBanned', 0);
		$this->db->set('UserBanText', NULL);
		$this->db->set('UserNewEmail', NULL);
		$this->db->set('UserNewEmailKey', NULL);
		$this->db->where('UserId', $user_id);
		$this->db->where('UserNewEmailKey', $new_email_key);

		$this->db->update($this->user_table);
		return $this->db->affected_rows() > 0;
	}
	
	/**
	 * Update user login info, such as IP-address or login time, and
	 * clear previously generated (but not activated) passwords.
	 *
	 * @param	int
	 * @param	bool
	 * @param	bool
	 * @return	void
	 */
	function update_login_info($user_id, $record_ip, $record_time)
	{
		if ($record_ip)		$this->db->set('UserLastIp', $this->input->ip_address());
		$time = time();
		if ($record_time)	$this->db->set('UserLastLogin', mdate('%Y-%m-%d %h:%i:%s', $time));

		$this->db->where('UserId', $user_id);
		$this->db->update($this->user_table);
	}

	/**
	 * Ban user
	 *
	 * @param	int
	 * @param	string
	 * @return	void
	 */
	function ban_user($user_id, $reason = NULL)
	{
		$this->db->where('UserId', $user_id);
		$this->db->update($this->user_table, array(
			'UserBanned'		=> 1,
			'UserBanText'	=> $reason,
		));
	}

	/**
	 * Unban user
	 *
	 * @param	int
	 * @return	void
	 */
	function unban_user($user_id)
	{
		$this->db->where('UserId', $user_id);
		$this->db->update($this->user_table, array(
			'UserBanned'		=> 0,
			'UserBanText'	=> NULL,
		));
	}

	function get_unit( $object = array() ){
		if(!is_null($object)) {
			$this->db->where( $object );
		}	
		
		$query = $this->db->get( 'sys_unit' );
		if ( $query->num_rows() > 0 ) return $query;
		return NULL;
	}	
	
	function get_role( $object = array() ){
		if(!is_null($object)) {
			$this->db->where( $object );
		}	
		
		$query = $this->db->get( 'sys_role' );
		if ( $query->num_rows() > 0 ) return $query;
		return NULL;
	}	

	function input_data_user($data){
		$this->db->trans_begin();
		$this->db->insert('sys_user', array( 'UserName' => $data['UserName'], 'UserEmail' => $data['UserEmail'], 'UserRealName' => $data['UserRealName'], 'UserPassword' => $data['UserPassword'], 'UserSalt' => $data['UserSalt'],'UserFoto' => $data['UserFoto'],'UserIsActive' => $data['UserIsActive'],'UserUnitId' => $data['UserUnitId'],'UserRoleId' => $data['UserRoleId'],'UserAddUser' => $data['userAdd'],'UserAddTime' => $data['datetime'], ) ); 		
		$userId = $this->db->insert_id();		
		if(!is_null($data['UserGroup'])){
			foreach($data['UserGroup'] as $val){
				$this->db->query("INSERT INTO sys_user_group (UserGroupUserId,UserGroupGroupId) VALUES ('". $userId ."', '". $val ."') ON DUPLICATE KEY UPDATE UserGroupIsDefault = 'Tidak'"); 
			}
			
			if (in_array($data['UserGroupDefault'], $data['UserGroup'])) {
			   $this->db->update('sys_user_group', array( 'UserGroupIsDefault' => 'Tidak'), array('UserGroupUserId' => $userId ));
			   $this->db->update('sys_user_group', array( 'UserGroupIsDefault' => 'Ya'), array('UserGroupUserId' => $userId, 'UserGroupGroupId' => $data['UserGroupDefault'],  ));
			}
		}
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return FALSE;
		}
		else
		{
			$this->db->trans_commit();
			return TRUE;
		}
	}	
	
	function update_data_user_personal($data){
		$this->db->update($this->user_table, array( 'UserName' => $data['UserName'], 'UserEmail' => $data['UserEmail'], 'UserRealName' => $data['UserRealName'], 'UserUpdateUser' => $data['user'], 'UserUpdateTime' => $data['datetime']), array('UserId' => $data['userId']) ); 
		return $this->db->affected_rows() > 0;
	}	
	
	function update_data_user_setting($data){
		$this->db->trans_begin();
		$this->db->update($this->user_table, array( 'UserUnitId' => $data['UserUnitId'], 'UserRoleId' => $data['UserRoleId'], 'UserUpdateUser' => $data['user'], 'UserUpdateTime' => $data['datetime']), array('UserId' => $data['userId']) ); 
		if(!is_null($data['UserGroup'])){
			$this->db->delete('sys_user_group', array('UserGroupUserId' => $data['userId']));
			foreach($data['UserGroup'] as $val){
				$this->db->query("INSERT INTO sys_user_group (UserGroupUserId,UserGroupGroupId) VALUES ('".$data['userId'] ."', '". $val ."') ON DUPLICATE KEY UPDATE UserGroupIsDefault = 'Tidak'"); 
			}
			
			if (in_array($data['UserGroupDefault'], $data['UserGroup'])) {
			   $this->db->update('sys_user_group', array( 'UserGroupIsDefault' => 'Tidak'), array('UserGroupUserId' => $data['userId'] ));
			   $this->db->update('sys_user_group', array( 'UserGroupIsDefault' => 'Ya'), array('UserGroupUserId' => $data['userId'], 'UserGroupGroupId' => $data['UserGroupDefault'],  ));
			}
		}
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return FALSE;
		}
		else
		{
			$this->db->trans_commit();
			return TRUE;
		}
	}

	function input_data_asesi($params)
	{
		$data = array(
			'asesiNama' => $params['nama'],
			'asesiNIK'	=> $params['nik'],
			'asesiTempatLahir' => $params['tmp_lahir'],
			'asesiTglLahir'	=> $params['tgl_lahir'],
			'asesiJnsKelamin'	=> $params['jns_kelamin'],
			'asesiAlamat'		=> $params['alamat'],
			'asesiEmail'		=> $params['email'],
			'asesiTelp'			=> $params['telp'],
			'asesiHp'			=> $params['hp'],
			'asesiPendidikan'	=> $params['pendidikan'],
			'asesiJurusan'		=> $params['jurusan'],
			'asesiJenjangId'		=> $params['jenjang'],
			'asesiThnLulus'		=> $params['tahun_lulus'],
			'asesiInstansi'	=> $params['instansi'],
			'asesiJabatan'		=> $params['jabatan'],
			'asensiAlamatInstansi'	=> $params['alamat_instansi'],
			'asensiTelpInstansi'	=> $params['telp_instansi'],
			'asesiDateCreated'	=> $params['datetime'],
		);

		$query = $this->db->insert('asesi', $data);
		return $this->db->affected_rows() > 0;
	}	

	function get_jenjang_pendidikan(){
		$this->db->select('jenjangId as id, jenjangKode as singkatan, jenjangNama as jenjang')
				 ->from('ref_jenjang_pendidikan');
		$query = $this->db->get();
		return $query->result_array();
		
	}

   function get_periode_organisasi($id)
   {
      $sql = "
         SELECT `periodeorgId`, `periodeIsAktif`, `periodeorgStatus`
         FROM periode_organisasi
         JOIN periode ON periodeId = periodeorgPeriodeId AND periodeIsAktif = '1'
         WHERE periodeorgOrgId = ?
      ";
      $query = $this->db->query($sql, array($id));
      return $query->row();
   }

}

/* End of file users.php */
/* Location: ./application/models/auth/users.php */
