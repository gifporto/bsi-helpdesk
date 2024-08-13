<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends APP_Controller
{
    private $module = 'guest';

    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_guest')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        $this->load->model('m_guest');
        $this->load->helper(['nohp', 'text']);
        $this->load->library(['session', 'user_agent']);
    }

    public function index()
    {
        $data['page_active'] = 'dashboard';
        $this->template->build('v_login', $data);
    }

    public function authenticate()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Panggil model untuk memverifikasi pengguna
        $user = $this->m_guest->authenticate_user($email, $password);

        if ($user) {
            // Set sesi pengguna
            $this->session->set_userdata([
                'user_id' => $user->id,
                'email' => $user->email,
                'role_id' => $user->role_id,
                'logged_in' => true
            ]);

            // Redirect ke halaman dashboard
            redirect('/super/superadmin');
        } else {
            // Jika login gagal, tampilkan pesan error
            $this->session->set_flashdata('error', 'email atau password salah');
            redirect('/guest/login');
        }
    }

    public function logout()
    {
        // Hapus sesi pengguna
        $this->session->sess_destroy();
        redirect('/guest/login');
    }
}
