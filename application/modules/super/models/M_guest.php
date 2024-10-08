<?php
// application/models/M_coba.php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guest extends CI_Model
{
    public function get_guests()
    {
        return $this->db->get('guests')->result_array();
    }

    public function get_guest($id)
    {
        return $this->db->get_where('guests', ['id' => $id])->row_array();
    }

    public function insert_guest($data)
    {
        return $this->db->insert('guests', $data);
    }

    public function update_guests($id, $data)
    {
        return $this->db->where('id', $id)->update('guests', $data);
    }

    public function delete_item($id)
    {
        return $this->db->delete('guests', ['id' => $id]);
    }

    public function get_guests_by_status($status)
    {
        $this->db->where('status', $status);
        $this->db->order_by('created_at', 'DESC'); // Urutkan berdasarkan tanggal terbaru
        return $this->db->get('guests')->result_array();
    }
}
