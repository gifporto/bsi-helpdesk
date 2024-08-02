<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends APP_Controller
{

    private $module = 'bappeda';


    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_bappeda')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));
    }

    public function pengajuan(){
        $data['title'] = 'Pengajuan';
        $data['page_active'] = 'data';
        $this->template->build($this->module . '/v_pengajuan', $data);
    }

    public function kebutuhandanacsr(){
        $data['title'] = 'Kebutuan Dana CSR';
        $data['page_active'] = 'data';
        $this->template->build($this->module . '/v_kebutuhandanacsr', $data);
    }

}