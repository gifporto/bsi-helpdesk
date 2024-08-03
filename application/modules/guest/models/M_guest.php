<?php
// application/models/M_coba.php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guest extends CI_Model
{
    public function insert_guest($data)
    {
        return $this->db->insert('guests', $data);
    }
}