<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_role extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_roles()
    {
        return $this->db->get('roles')->result();
    }

    public function get_unit_name($unit_id)
    {
        $this->db->select('name');
        $this->db->from('units');
        $this->db->where('id', $unit_id);
        $query = $this->db->get();
        return $query->row()->name;
    }
}
