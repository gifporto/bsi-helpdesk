<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
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
        $this->load->model('M_unit', 'unit_model'); // Load the Unit model

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 1) {
            redirect('guest/dashboard/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Kelola Unit';
        $data['page_active'] = 'unit';
        $data['units'] = $this->unit_model->get_units(); // Fetch all units
        $this->template->build($this->module . '/unit/index', $data);
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('super/unit/index');
        } else {
            $data = array(
                'name' => $this->input->post('name')
            );

            $this->unit_model->insert_unit($data);

            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
            redirect('super/unit/index');
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('super/unit/index');
        } else {
            $id = $this->input->post('id');
            $data = array(
                'name' => $this->input->post('name')
            );

            $this->unit_model->update_unit($id, $data); // Correct function name

            $this->session->set_flashdata('success', 'Data berhasil diperbarui');
            redirect('super/unit/index');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->unit_model->delete_unit($id);

        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('super/unit/index');
    }
}
