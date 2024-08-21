<?php
// application/models/M_unit.php
defined('BASEPATH') or exit('No direct script access allowed');

class M_unit extends CI_Model
{
    public function get_units()
    {
        return $this->db->get('units')->result_array(); // Table name should be 'units'
    }

    public function get_unit($id)
    {
        return $this->db->get_where('units', ['id' => $id])->row_array(); // Table name should be 'units'
    }

    public function insert_unit($data)
    {
        return $this->db->insert('units', $data); // Table name should be 'units'
    }

    public function update_unit($id, $data) // Function name corrected to 'update_unit'
    {
        return $this->db->where('id', $id)->update('units', $data); // Table name should be 'units'
    }

    public function delete_unit($id)
    {
        return $this->db->delete('units', ['id' => $id]); // Table name should be 'units'
    }

    public function get_units_by_status($status)
    {
        $this->db->where('status', $status);
        return $this->db->get('units')->result_array(); // Table name should be 'units'
    }
}
