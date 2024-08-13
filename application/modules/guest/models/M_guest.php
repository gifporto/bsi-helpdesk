<?php
// application/models/M_coba.php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guest extends CI_Model
{
    public function authenticate_user($email, $password)
    {
        // Query untuk mendapatkan data pengguna berdasarkan email
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        // Jika pengguna ditemukan, cek password
        if ($query->num_rows() == 1) {
            $user = $query->row();

            // Verifikasi password
            if (password_verify($password, $user->password)) {
                return $user; // Return user data jika autentikasi berhasil
            }
        }
        return false; // Return false jika autentikasi gagal
    }
}
