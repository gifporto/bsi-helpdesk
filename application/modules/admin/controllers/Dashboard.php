<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends APP_Controller
{

    private $module = 'admin';


    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_admin')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));
    }

    public function index(){
        $data['title'] = 'Dashboard Admin';
        $data['page_active'] = 'dashboard';
        $this->template->build($this->module . '/v_dashboard', $data);
    }

}