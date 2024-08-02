<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User_Autologin
 *
 * This model represents user autologin data. It can be used
 * for user verification when user claims his autologin passport.
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class User_Autologin extends CI_Model
{
	private $table_user_autologin			= 'user_autologin';
	private $table_user						= 'user';
	
	private $group_table		= 'group';			// group
	private $group_user_table	= 'user_group';		// user_group
	private $unit_table        = 'unit';

	function __construct()
	{
		parent::__construct();

		$ci =& get_instance();
		$this->table_user_autologin		= $ci->config->item('app_db_table_prefix').$this->table_user_autologin;
		$this->table_user	= $ci->config->item('app_db_table_prefix').$this->table_user;
		
		$this->group_table			= $ci->config->item('app_db_table_prefix').$this->group_table;
		$this->group_user_table		= $ci->config->item('app_db_table_prefix').$this->group_user_table;
		$this->unit_table		      = $ci->config->item('app_db_table_prefix').$this->unit_table;
	}

	/**
	 * Get user data for auto-logged in user.
	 * Return NULL if given key or user ID is invalid.
	 *
	 * @param	int
	 * @param	string
	 * @return	object
	 */
	function get($user_id, $key)
	{
		
		$this->db->select(	$this->table_user .'.*,'.
							$this->group_user_table .'.* ,'.
							$this->group_table .'.* ,'.
							$this->unit_table .'.* ');
		
		$this->db->from($this->table_user);
		$this->db->join($this->table_user_autologin, $this->table_user_autologin.'.user_id = '.$this->table_user.'.UserId');
		$this->db->where($this->table_user_autologin.'.user_id', $user_id);
		$this->db->where($this->table_user_autologin.'.key_id', $key);
		
		$this->db->join($this->group_user_table , $this->group_user_table . ".UserGroupUserId = ". $this->table_user .".UserId AND " . $this->group_user_table . ".UserGroupIsDefault = 'Ya'",'left outer');
		$this->db->join($this->group_table , $this->group_user_table . ".UserGroupGroupId = ". $this->group_table .".GroupId",'left outer');
		$this->db->join($this->unit_table , $this->unit_table . ".UnitId = ". $this->table_user .".UserUnitId",'left outer');
		
		$query = $this->db->get();
		if ($query->num_rows() == 1) return $query->row();
		return NULL;
	}

	/**
	 * Save data for user's autologin
	 *
	 * @param	int
	 * @param	string
	 * @return	bool
	 */
	function set($user_id, $key)
	{
		return $this->db->insert($this->table_user_autologin, array(
			'user_id' 		=> $user_id,
			'key_id'	 	=> $key,
			'user_agent' 	=> substr($this->input->user_agent(), 0, 149),
			'last_ip' 		=> $this->input->ip_address(),
		));
	}

	/**
	 * Delete user's autologin data
	 *
	 * @param	int
	 * @param	string
	 * @return	void
	 */
	function delete($user_id, $key)
	{
		$this->db->where('user_id', $user_id);
		$this->db->where('key_id', $key);
		$this->db->delete($this->table_user_autologin);
	}

	/**
	 * Delete all autologin data for given user
	 *
	 * @param	int
	 * @return	void
	 */
	function clear($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->delete($this->table_user_autologin);
	}

	/**
	 * Purge autologin data for given user and login conditions
	 *
	 * @param	int
	 * @return	void
	 */
	function purge($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->where('user_agent', substr($this->input->user_agent(), 0, 149));
		$this->db->where('last_ip', $this->input->ip_address());
		$this->db->delete($this->table_user_autologin);
	}
}

/* End of file user_autologin.php */
/* Location: ./application/models/auth/user_autologin.php */