<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_privilage extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_privilage_menu($array){
		$this->db->select($this->config->item('app_db_table_prefix').'menu_action.*, '. $this->config->item('app_db_table_prefix').'menu.*, '. $this->config->item('app_db_table_prefix').'group_detail.*');
		$this->db->where($array);
		$this->db->order_by('MenuParentId', 'asc');
		$this->db->order_by('MenuOrder', 'asc');
		# $this->db->group_by('MenuId');
		$this->db->join($this->config->item('app_db_table_prefix').'menu_action','GroupDetailMenuActionId=MenuActionId','LEFT');
		$this->db->join($this->config->item('app_db_table_prefix').'menu','MenuActionMenuId=MenuId','LEFT');
		$query = $this->db->get($this->config->item('app_db_table_prefix').'group_detail');
		if ( $query->num_rows() > 0 ) return $query->result();
		return NULL;
		# GroupDetailGroupId=1 AND MenuIsShow='Ya'
	}
}
