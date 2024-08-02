<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RekapData extends APP_Controller
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

    public function penawaranperperiode(){
        $data['title'] = 'Penawaran per Periode';
        $data['page_active'] = 'rekapdata';
        $this->template->build($this->module . '/v_penawaranperperiode', $data);
    }

    public function usulandanaperperiode(){
        $data['title'] = 'Usulan Kebutuan Dana CSR per Periode';
        $data['page_active'] = 'rekapdata';
        $this->template->build($this->module . '/v_usulandanaperperiode', $data);
    }
    public function realisasi(){
        $data['title'] = 'Realisasi';
        $data['page_active'] = 'rekapdata';
        $this->template->build($this->module . '/v_realisasi', $data);
    }

}