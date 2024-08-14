<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    private $module = 'super';

    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_super')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        $this->load->library('form_validation');
        $this->load->model('m_user');
        $this->load->model('m_role');

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 1) {
            redirect('guest/dashboard/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Kelola Akun';
        $data['page_active'] = 'akun';
        $data['users'] = $this->m_user->get_users_with_roles();
        $this->template->build($this->module . '/akun/index', $data);
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('super/akun/index');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role_id' => $this->input->post('role_id')
            );

            if ($this->input->post('role_id') == 2 || $this->input->post('role_id') == 3) { // 2 = Admin Role ID
                $data['unit_bsi'] = $this->input->post('unit_bsi');
            }

            $this->m_user->create_user($data);

            // Redirect to a different page after successful save
            $this->session->set_flashdata('success', 'Data successfully saved!');
            redirect('super/akun/index');
        }
    }


    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('super/akun/index');
        } else {
            $id = $this->input->post('id');
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'role_id' => $this->input->post('role_id')
            );

            if ($this->input->post('password')) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            if ($this->input->post('role_id') == 2) { // 2 = Admin Role ID
                $data['unit_bsi'] = $this->input->post('unit_bsi');
            } else {
                $data['unit_bsi'] = null;
            }

            $this->m_user->update_user($id, $data);

            $this->session->set_flashdata('success', 'User berhasil diperbarui');
            redirect('super/akun/index');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->m_user->delete_user($id);

        $this->session->set_flashdata('success', 'User berhasil dihapus');
        redirect('super/akun/index');
    }
}
