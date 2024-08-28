<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pelayanan extends APP_Controller
{
    private $module = 'admin';

    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_admin')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->asset->set_theme($this->config->item('theme'));

        $this->load->model('M_guest');
        $this->load->model('M_unit');
        $this->load->helper('nohp');
        $this->load->helper('text');
        $this->load->library('user_agent');

        if (!$this->session->userdata('logged_in')) {
            redirect('guest/dashboard/login');
        }

        if (!$this->session->userdata('logged_in') || $this->session->userdata('role_id') != 2) {
            redirect('guest/dashboard/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Pelayanan Buku Tamu';
        $data['page_active'] = 'pelayanan';
        $data['guests'] = $this->M_guest->get_guests(); // Ambil semua data tamu
        $this->template->build($this->module . '/v_pelayanan', $data);
    }

    public function update_status()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');

        // Update status di database
        $data = array('status' => $status);
        if ($this->M_guest->update_guests($id, $data)) {
            // Set flashdata untuk notifikasi sukses
            $this->session->set_flashdata('notif_message', [
                'aksi' => true,
                'tindakan' => 'memperbarui status',
                'pesan' => 'Status berhasil diperbarui.'
            ]);
            echo json_encode(['success' => true]);
        } else {
            // Set flashdata untuk notifikasi gagal
            $this->session->set_flashdata('notif_message', [
                'aksi' => false,
                'tindakan' => 'memperbarui status',
                'pesan' => 'Gagal memperbarui status.'
            ]);
            echo json_encode(['success' => false, 'message' => 'Gagal memperbarui status.']);
        }
    }


    public function destroy()
    {
        $id = $this->input->post('id');

        if ($this->M_guest->delete_item($id)) {
            // Set flashdata untuk notifikasi sukses
            $this->session->set_flashdata('notif_message', [
                'aksi' => true,
                'tindakan' => 'menghapus data',
                'pesan' => 'Data berhasil dihapus.'
            ]);
            echo json_encode(['success' => true]);
        } else {
            // Set flashdata untuk notifikasi gagal
            $this->session->set_flashdata('notif_message', [
                'aksi' => false,
                'tindakan' => 'menghapus data',
                'pesan' => 'Gagal menghapus data.'
            ]);
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
        $data['guests'] = $this->M_guest->get_all_guests_by_status('Pending');
        $data['units'] = $this->M_unit->get_units();
        $this->template->build($this->module . '/pelayanan/v_pending', $data);
    }

    public function index_selesai()
    {
        $data['title'] = 'Pelayanan Buku Tamu Selesai';
        $data['page_active'] = 'pelayanan';
        $data['guests'] = $this->M_guest->get_guests_by_status('Selesai');
        $data['units'] = $this->M_unit->get_units();
        $this->template->build($this->module . '/pelayanan/v_selesai', $data);
    }

    public function update_jenis_keperluan()
    {
        $guest_id = $this->input->post('guest_id'); // Mengambil guest_id dari form
        $jenis_keperluan = $this->input->post('jenis_keperluan');
        $redirect_to = $this->input->post('redirect_to') ?? 'admin/pelayanan/index_pending'; // Default redirect

        if ($guest_id && $jenis_keperluan) {
            $data = [
                'jenis_keperluan' => $jenis_keperluan
            ];
            $this->M_guest->update_guests($guest_id, $data); // Menggunakan guest_id untuk update
            $this->session->set_flashdata('notification', 'Jenis keperluan berhasil diperbarui!');
            $this->session->set_flashdata('alert_type', 'success');
        } else {
            $this->session->set_flashdata('notification', 'Gagal memperbarui jenis keperluan.');
            $this->session->set_flashdata('alert_type', 'danger');
        }

        redirect($redirect_to);
    }
}
