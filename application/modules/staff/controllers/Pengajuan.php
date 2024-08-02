<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends APP_Controller
{

    private $module = 'staff';


    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_staff')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));
    }

    public function index(){
        $data['title'] = 'Verifikasi Registrasi';
        $data['page_active'] = 'pengajuan';
        $this->template->build($this->module . '/v_pengajuan', $data);
    }

}