<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create_user($data)
    {
        return $this->db->insert('users', $data);
    }

    public function get_users()
    {
        return $this->db->get('users')->result();
    }

    public function get_user_by_id($id)
    {
        return $this->db->get_where('users', array('id' => $id))->row();
    }

    public function update_user($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }

    public function get_users_with_units()
    {
        // Memastikan nama kolom dalam query
        $this->db->select('users.*, roles.role_name, units.name as unit_name');
        $this->db->from('users');
        $this->db->join('roles', 'roles.id = users.role_id', 'left');
        $this->db->join('units', 'units.id = users.unit_id', 'left');
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
