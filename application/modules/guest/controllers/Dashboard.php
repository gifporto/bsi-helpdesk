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
        $this->load->helper(['nohp', 'text']);
        $this->load->library('user_agent');
    }

    public function index()
    {
        $data['page_active'] = 'dashboard';
        $this->template->build('guest/v_dashboard', $data);
    }

    public function store()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'keperluan' => $this->input->post('keperluan'),
            'unit_bsi' => $this->input->post('unit_bsi'),
            'status' => 'Pending',
            'created_at' => date('Y-m-d H:i:s'),
        );

        // Memeriksa apakah kategori adalah internal atau eksternal
        $kategori = $this->input->post('kategori');
        if ($kategori === 'Internal') {
            $data['instansi'] = $this->input->post('internal');
        } elseif ($kategori === 'Eksternal') {
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
