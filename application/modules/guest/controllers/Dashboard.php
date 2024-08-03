<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends APP_Controller
{

    private $module = 'guest';


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

    public function index()
    {
        $data['page_active'] = 'dashboard';
        $this->template->build($this->module . '/v_dashboard', $data);
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'keperluan' => $this->input->post('keperluan'),
            'created_at' => date('Y-m-d H:i:s'),
            'status' => 'Pending'
        );

        // Check if 'instansi' or 'external' has a value
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
}