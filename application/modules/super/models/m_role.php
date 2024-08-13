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
}
