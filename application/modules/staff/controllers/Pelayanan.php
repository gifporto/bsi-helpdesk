<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pelayanan extends APP_Controller
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
        $this->load->helper('fonnte_helper');


        if (!$this->session->userdata('logged_in')) {
            redirect('guest/dashboard/login');
        }

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 3) {
            redirect('guest/dashboard/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Pelayanan Buku Tamu';
        $data['page_active'] = 'pelayanan';
        $data['guests'] = $this->M_guest->get_guests();
        $this->template->build($this->module . '/v_pelayanan', $data);
    }

    public function update_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');

        $data = array('status' => $status);
        $this->M_guest->update_guests($id, $data);

        echo json_encode(['success' => true]);
    }



    public function destroy()
    {
        $id = $this->input->post('id');

        if ($this->M_guest->delete_item($id)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Gagal menghapus data.']);
        }
    }

    public function export()
    {
        $this->load->helper('download');

        $data = $this->M_guest->get_guests();

        if (empty($data)) {
            echo "Tidak ada data untuk diekspor";
            exit;
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header kolom
        $sheet->setCellValue('A1', 'Nama');
        $sheet->setCellValue('B1', 'Telepon');
        $sheet->setCellValue('C1', 'Keperluan');
        $sheet->setCellValue('D1', 'Tanggal');
        $sheet->setCellValue('E1', 'Status');
        $sheet->setCellValue('F1', 'Instansi/Eksternal');

        // Data
        $row = 2;
        foreach ($data as $row_data) {
            $sheet->setCellValue('A' . $row, $row_data['nama']);
            $sheet->setCellValue('B' . $row, $row_data['telp']);
            $sheet->setCellValue('C' . $row, $row_data['keperluan']);
            $sheet->setCellValue('D' . $row, $row_data['created_at']);
            $sheet->setCellValue('E' . $row, $row_data['status']);
            $sheet->setCellValue('F' . $row, $row_data['instansi'] ? $row_data['instansi'] : 'Tidak ada');
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
        $data['title'] = 'Pelayanan Buku Tamu Pending';
        $data['page_active'] = 'pelayanan';
        $data['guests'] = $this->M_guest->get_guests_by_status('Pending'); // Ambil data dengan keperluan == teknis atau aduan dan status pending
        $this->template->build($this->module . '/pelayanan/v_pending', $data);
    }

    public function index_respon()
    {
        $data['title'] = 'Pelayanan Buku Tamu Respon';
        $data['page_active'] = 'pelayanan';
        $data['guests'] = $this->M_guest->get_guests_by_status('Respon'); // Ambil data dengan keperluan == teknis atau aduan dan status pending
        $this->template->build($this->module . '/pelayanan/v_respon', $data);
    }

    public function index_proses()
    {
        $data['title'] = 'Pelayanan Buku Tamu Proses';
        $data['page_active'] = 'pelayanan';
        $data['guests'] = $this->M_guest->get_guests_by_status('Proses');
        $this->template->build($this->module . '/pelayanan/v_proses', $data);
    }

    public function index_selesai()
    {
        $data['title'] = 'Pelayanan Buku Tamu Selesai';
        $data['page_active'] = 'pelayanan';
        $data['guests'] = $this->M_guest->get_guests_by_status('Selesai');
        $this->template->build($this->module . '/pelayanan/v_selesai', $data);
    }

    public function send_wa()
    {
        $target = $this->input->post('telp');
        $message = $this->input->post('pesan');
        $token = 'NBnFwCY+zX58mvYh-RtN';

        $response = send_message($target, $message, $token);

        if ($response['status'] == 'success') {
            echo $response['response'];
        } else {
            echo 'Error: ' . $response['message'];
        }
    }

}
