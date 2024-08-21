<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Memuat autoload Composer agar Faker bisa digunakan
require_once FCPATH . 'vendor/autoload.php';

class Seeder extends CI_Controller
{

    public function index()
    {
        // Inisialisasi Faker
        $faker = Faker\Factory::create();

        // Jumlah data dummy yang ingin di-generate
        $jumlah_data = 30;

        for ($i = 0; $i < $jumlah_data; $i++) {
            $data = [
                'id' => $faker->unique()->numberBetween(100, 999),
                'nama' => $faker->name,
                'telp' => '085713667446',
                'instansi' => $faker->company,
                'unit_bsi' => $faker->randomElement(['BSI 1', 'BSI 2', 'BSI 3', 'BSI 4', 'BSI 5']),
                'jenis_keperluan' => $faker->randomElement(['Tamu', 'Teknis', 'Aduan']),
                'keperluan' => implode(' ', $faker->words(10)), // Menggunakan words untuk menghindari masalah dengan join()
                'status' => 'Pending',
                'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            ];

            // Insert data ke dalam tabel guests
            $this->db->insert('guests', $data);
        }

        echo "Data dummy berhasil dimasukkan!";
    }

    public function clear()
    {
        // Memanggil model jika diperlukan
        // $this->load->model('Your_model'); // Uncomment and replace 'Your_model' if using a model

        // Menghapus semua data dari tabel 'guests'
        $this->db->truncate('guests');

        echo "Semua data dalam tabel 'guests' telah dihapus!";
    }
}
