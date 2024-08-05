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

        $this->load->model('M_guest');
        $this->load->helper('nohp');
        $this->load->helper('text');
        $this->load->library('user_agent');
    }

    public function index()
    {
        $data['title'] = 'Pengajuan Layanan';
        $data['page_active'] = 'pengajuan';
        $data['guests'] = $this->M_guest->get_guests();
        $this->template->build($this->module . '/v_pengajuan', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'status' => $this->input->post('status'),
        );

        $this->M_guest->update_guests($id, $data);

        return redirect('staff/pengajuan');
    }
}