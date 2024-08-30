<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Laporan extends CI_Controller
{
    private $module = 'super';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guest');
        $this->load->model('M_unit');
        $this->load->helper(['url', 'download', 'text']);
        $this->load->library(['user_agent', 'template', 'asset']);

        $this->template->set_layout('layout_super')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 1) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan',
            'page_active' => 'laporan',
            'guests' => $this->M_guest->get_guests_by_status('Selesai'),
            'units' => $this->M_unit->get_units()
        ];
        $this->template->build($this->module . '/laporan/index', $data);
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
}
