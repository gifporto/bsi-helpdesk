<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
            'kategori' => $this->input->post('kategori'),
        );

        $this->M_guest->update_guests($id, $data);

        return redirect('staff/pengajuan');
    }

    public function add_note()
    {
        $id = $this->input->post('id');

        $data = array(
            'catatan' => $this->input->post('catatan'),
        );

        $this->M_guest->update_guests($id, $data);

        return redirect('staff/pengajuan');
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
}
