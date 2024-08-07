<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends APP_Controller
{

    private $module = 'guest';
    private $allowed_params = ['bsi1', 'bsi2', 'bsi3', 'bsi4', 'bsi5'];

    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_guest')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        $this->load->model('M_guest');

        $this->load->helper('nohp');
        $this->load->helper('text');
        $this->load->library('user_agent');
    }

    public function index($param = "")
    {
        if (in_array($param, $this->allowed_params)) {
            $data['lokasi'] = $param;
            $data['page_active'] = 'dashboard';
            $this->template->build('guest/v_dashboard', $data);
        } else {
            show_404();
        }
    }


    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'keperluan' => $this->input->post('keperluan'),
            'created_at' => date('Y-m-d H:i:s'),
            'status' => 'Pending',
            'lokasi' => $this->input->post('lokasi'),
        );

        if ($this->input->post('instansi')) {
            $data['instansi'] = $this->input->post('instansi');
        } elseif ($this->input->post('external')) {
            $data['instansi'] = $this->input->post('external');
        } else {
            $data['instansi'] = null;
        }

        $this->M_guest->insert_guest($data);
        redirect('guest/dashboard/sukses');
    }

    public function sukses()
    {
        $data['page_active'] = 'dashboard';
        $this->template->build($this->module . '/v_sukses', $data);
    }

    public function login()
    {
        $data['page_active'] = 'login';
        $this->template->build($this->module . '/v_login', $data);
    }

    public function lupapass()
    {
        $data['page_active'] = 'lupapassword';
        $this->template->build($this->module . '/v_lupapassword', $data);
    }
    public function barupass()
    {
        $data['page_active'] = 'barupassword';
        $this->template->build($this->module . '/v_barupassword', $data);
    }
}
