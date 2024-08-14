<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends APP_Controller
{

    private $module = 'staff';


    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_staff')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        if (!$this->session->userdata('logged_in')) {
            redirect('guest/dashboard/login');
        }

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 3) {
            redirect('guest/dashboard/login');
        }
    }

    public function index(){
        $data['title'] = 'Dashboard Staff';
        $data['page_active'] = 'dashboard';
        $this->template->build($this->module . '/v_dashboard', $data);
    }

}