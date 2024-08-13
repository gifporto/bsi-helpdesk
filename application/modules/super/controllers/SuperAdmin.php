<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuperAdmin extends CI_Controller
{
    private $module = 'super';

    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_super')
        ->set_partial('modules_js', 'modules_js')
        ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        $this->load->model('m_user');
        $this->load->model('m_role');

        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 1) {
            redirect('guest/dashboard/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['page_active'] = 'dashboard';
        $data['users'] = $this->m_user->get_users();
        $this->template->build($this->module . '/index', $data);
    }

    public function create_user()
    {
        $data['title'] = 'Create User';
        $data['page_active'] = 'dashboard';
        $data['roles'] = $this->m_role->get_roles();
        $this->template->build($this->module . '/v_create_user', $data);
    }

    public function store_user()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create_user();
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role_id' => $this->input->post('role_id')
            );
            $this->m_user->create_user($data);
            redirect('superadmin');
        }
    }
}
