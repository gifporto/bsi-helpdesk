<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pelayanan extends CI_Controller
{
    private $module = 'super';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guest');
        $this->load->model('M_unit');
        $this->load->helper(['url', 'download', 'text']);
        $this->load->library(['user_agent', 'template', 'asset']);
        $this->load->helper('fonnte_helper');

        $this->template->set_layout('layout_super')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 1) {
            redirect('login');
        }
    }

    public function update_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');

        $target = $this->input->post('telp');
        $message = $this->input->post('pesan');
        $token = 'NBnFwCY+zX58mvYh-RtN';
        $redirect_to = $this->input->post('redirect_to') ?? 'staff/pelayanan/index_pending'; // Default redirect

        $response = send_message($target, $message, $token);

        if ($id && $status) {
            $data = ['status' => $status];
            $this->M_guest->update_guests($id, $data);
            redirect($redirect_to);
        } else {
            redirect($redirect_to);
        }
    }

    public function destroy()
    {
        $id = $this->input->post('id');

        if ($id && $this->M_guest->delete_item($id)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Gagal menghapus data.']);
        }
    }

    public function export()
    {
        $data = $this->M_guest->get_guests();

        if (empty($data)) {
            show_error("Tidak ada data untuk diekspor", 404);
            return;
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header kolom
        $headers = ['Nama', 'Telepon', 'Keperluan', 'Tanggal', 'Status', 'Instansi/Eksternal'];
        foreach ($headers as $key => $header) {
            $sheet->setCellValue(chr(65 + $key) . '1', $header);
        }

        // Data
        $row = 2;
        foreach ($data as $row_data) {
            $sheet->setCellValue('A' . $row, $row_data['nama']);
            $sheet->setCellValue('B' . $row, $row_data['telp']);
            $sheet->setCellValue('C' . $row, $row_data['keperluan']);
            $sheet->setCellValue('D' . $row, $row_data['created_at']);
            $sheet->setCellValue('E' . $row, $row_data['status']);
            $sheet->setCellValue('F' . $row, $row_data['instansi'] ?? 'Tidak ada');
            $row++;
        }

        // Simpan file
        $writer = new Xlsx($spreadsheet);
        $filename = 'data_export.xlsx';
        $writer->save($filename);

        force_download($filename, NULL);
    }

    public function index_pending()
    {
        $data = [
            'title' => 'Pelayanan Buku Tamu Pending',
            'page_active' => 'pelayanan',
            'guests' => $this->M_guest->get_guests_by_status('Pending'),
            'units' => $this->M_unit->get_units()
        ];
        $this->template->build($this->module . '/pelayanan/v_pending', $data);
    }

    public function index_respon()
    {
        $data = [
            'title' => 'Pelayanan Buku Tamu Respon',
            'page_active' => 'pelayanan',
            'guests' => $this->M_guest->get_guests_by_status('Respon'),
            'units' => $this->M_unit->get_units()
        ];
        $this->template->build($this->module . '/pelayanan/v_respon', $data);
    }

    public function index_proses()
    {
        $data = [
            'title' => 'Pelayanan Buku Tamu Proses',
            'page_active' => 'pelayanan',
            'guests' => $this->M_guest->get_guests_by_status('Proses'),
            'units' => $this->M_unit->get_units()
        ];
        $this->template->build($this->module . '/pelayanan/v_proses', $data);
    }

    public function index_selesai()
    {
        $data = [
            'title' => 'Pelayanan Buku Tamu Selesai',
            'page_active' => 'pelayanan',
            'guests' => $this->M_guest->get_guests_by_status('Selesai'),
            'units' => $this->M_unit->get_units()
        ];
        $this->template->build($this->module . '/pelayanan/v_selesai', $data);
    }

    public function send_wa()
    {
        $target = $this->input->post('telp');
        $message = $this->input->post('pesan');
        $token = 'NBnFwCY+zX58mvYh-RtN';
        $redirect_to = $this->input->post('redirect_to') ?? 'staff/pelayanan/index_pending'; // Default redirect

        $response = send_message($target, $message, $token);

        if ($response['status'] == 'success') {
            $this->session->set_flashdata('notification', 'Pesan berhasil dikirim!');
            $this->session->set_flashdata('alert_type', 'success');
        } else {
            $this->session->set_flashdata('notification', 'Error: ' . $response['message']);
            $this->session->set_flashdata('alert_type', 'danger');
        }

        // Pastikan redirect_to valid dan aman
        redirect($redirect_to);
    }
}
