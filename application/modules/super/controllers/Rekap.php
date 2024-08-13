<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap extends CI_Controller
{
    private $module = 'super';

    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_super')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 1) {
            redirect('guest/dashboard/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Rekapitulasi';
        $data['page_active'] = 'rekap';
        $this->template->build($this->module . '/rekap/index', $data);
    }
}
