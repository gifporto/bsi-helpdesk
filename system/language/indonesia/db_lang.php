<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Tidak dapat menentukan pengaturan database berdasarkan string koneksi yang anda tetapkan.';
$lang['db_unable_to_connect'] = 'Tidak dapat terhubung ke server menggunakan pengaturan yang disediakan.';
$lang['db_unable_to_select'] = 'Tidak dapat memilih database yang ditentukan: %s';
$lang['db_unable_to_create'] = 'Tidak dapat membuat database yang ditentukan: %s';
$lang['db_invalid_query'] = 'Kode query yang anda sampaikan tidak sah.';
$lang['db_must_set_table'] = 'Anda harus menetapkan tabel database yang akan digunakan query anda.';
$lang['db_must_use_set'] = 'Anda harus menggunakan metode "set" untuk memperbaharui entri.';
$lang['db_must_use_index'] = 'Anda harus menentukan indeks untuk mencocokkan selama batch update.';
$lang['db_batch_missing_index'] = 'Satu atau lebih baris dipilih untuk memperbarui batch hilang pada indeks tertentu.';
$lang['db_must_use_where'] = 'Tidak diperbolehkan memperbaharui kecuali terdapat klausa "where".';
$lang['db_del_must_use_where'] = 'Tidak diperbolehkan menghapus kecuali terdapat klausa "where" atau "like".';
$lang['db_field_param_missing'] = 'Untuk fetch field diperlukan nama tabel sebagai parameter.';
$lang['db_unsupported_function'] = 'Fitur ini tidak tersedia untuk database yang anda gunakan.';
$lang['db_transaction_failure'] = 'Transaksi gagal: Rollback telah dilakukan.';
$lang['db_unable_to_drop'] = 'Tidak dapat mendrop database yang ditetapkan.';
$lang['db_unsupported_feature'] = 'Fitur tidak didukung oleh platform database yang digunakan.';
$lang['db_unsupported_compression'] = 'Format kompresi berkas yang dipilih tidak didukung oleh server.';
$lang['db_filepath_error'] = 'Tidak dapat menulis data ke path berkas yang telah ditentukan.';
$lang['db_invalid_cache_path'] = 'Path cache yang anda tetapkan tidak sah atau tidak bisa ditulis.';
$lang['db_table_name_required'] = 'Nama tabel diperlukan untuk operasi tersebut.';
$lang['db_column_name_required'] = 'Nama kolom diperlukan untuk operasi tersebut.';
$lang['db_column_definition_required'] = 'Definisi kolom diperlukan untuk operasi tersebut.';
$lang['db_unable_to_set_charset'] = 'Tidak dapat menetapkan koneksi klien dengan set karakter: %s';
$lang['db_error_heading'] = 'Terjadi Sebuah Kesalahan Database.';
