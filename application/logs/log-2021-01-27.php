<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-27 08:55:44 --> 404 Page Not Found: pelaporan
ERROR - 2021-01-27 10:31:02 --> 404 Page Not Found: themes
ERROR - 2021-01-27 11:06:04 --> Severity: Notice --> Undefined property: Pelaporan::$M_lp D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 66
ERROR - 2021-01-27 11:06:04 --> Severity: Error --> Call to a member function get_list_laporan() on null D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 66
ERROR - 2021-01-27 11:11:17 --> Query error: Not unique table/alias: 'ref_jenis_gejala' - Invalid query: SELECT `bioNama`, `bioNIK`, `bioAlamat`, `bioHp`, `bioJenis`, `bioTanggalInput`, `laporTglTes`, `laporIsKontakKonfirm`
FROM `pelaporan`
JOIN `biodata` ON `bioId` = `laporBioId`
LEFT JOIN `pelapor_gejala` ON `lapgejLaporId` = `laporId`
LEFT JOIN `ref_jenis_gejala` ON `gjlId` = `lapgejGjlId`
LEFT JOIN `pelapor_komorbid` ON `lapkomLapId` = `laporId`
LEFT JOIN `ref_jenis_gejala` ON `komId` = `lapkomKomId`
WHERE laporStatus IS NULL
GROUP BY `laporId`
ORDER BY `laporId` ASC
 LIMIT 25
ERROR - 2021-01-27 11:11:56 --> Query error: Unknown column 'bioAlamat' in 'field list' - Invalid query: SELECT `bioNama`, `bioNIK`, `bioAlamat`, `bioHp`, `bioJenis`, `bioTanggalInput`, `laporTglTes`, `laporIsKontakKonfirm`
FROM `pelaporan`
JOIN `biodata` ON `bioId` = `laporBioId`
LEFT JOIN `pelapor_gejala` ON `lapgejLaporId` = `laporId`
LEFT JOIN `ref_jenis_gejala` ON `gjlId` = `lapgejGjlId`
LEFT JOIN `pelapor_komorbid` ON `lapkomLapId` = `laporId`
LEFT JOIN `ref_komorbid` ON `komId` = `lapkomKomId`
WHERE laporStatus IS NULL
GROUP BY `laporId`
ORDER BY `laporId` ASC
 LIMIT 25
ERROR - 2021-01-27 11:31:47 --> Severity: Notice --> Undefined index: laporId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 78
ERROR - 2021-01-27 11:31:47 --> Severity: Notice --> Undefined index: bioAlamat D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 80
ERROR - 2021-01-27 11:31:47 --> Severity: Notice --> Undefined index: laporTglHasilTes D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 82
ERROR - 2021-01-27 11:31:47 --> Severity: Notice --> Undefined index: laporTanggalInput D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 83
ERROR - 2021-01-27 11:31:47 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:31:47 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:32:47 --> Severity: Notice --> Undefined index: bioAlamat D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 80
ERROR - 2021-01-27 11:32:47 --> Severity: Notice --> Undefined index: laporTanggalInput D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 83
ERROR - 2021-01-27 11:32:47 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:32:47 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:33:19 --> Severity: Notice --> Undefined index: laporTanggalInput D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 83
ERROR - 2021-01-27 11:33:19 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:33:19 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:33:40 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:33:40 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:34:15 --> Severity: Notice --> Undefined index: UserId D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 84
ERROR - 2021-01-27 11:49:03 --> Severity: Error --> Call to undefined method CI_DB_mysqli_result::arrow_array() D:\BISKOM\www\shelter_uad\application\modules\pelaporan\models\M_pelaporan.php 77
ERROR - 2021-01-27 11:49:14 --> Query error: Unknown column 'gjlgjlNama' in 'field list' - Invalid query: SELECT `gjlgjlNama`
FROM `pelapor_gejala`
JOIN `ref_jenis_gejala` ON `gjlId` = `lapgejGjlId`
WHERE `lapgejLaporId` = '1'
ERROR - 2021-01-27 11:55:16 --> Severity: Notice --> Undefined index: NIK D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 22
ERROR - 2021-01-27 13:20:59 --> Severity: Notice --> Array to string conversion D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 51
ERROR - 2021-01-27 13:47:21 --> 404 Page Not Found: themes
ERROR - 2021-01-27 13:51:19 --> 404 Page Not Found: themes
ERROR - 2021-01-27 13:52:12 --> 404 Page Not Found: themes
ERROR - 2021-01-27 14:16:32 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:06:21 --> Severity: Parsing Error --> syntax error, unexpected '}' D:\BISKOM\www\shelter_uad\application\modules\pelaporan\models\M_pelaporan.php 118
ERROR - 2021-01-27 20:17:35 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:17:48 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:20:50 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:21:02 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:21:14 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:22:25 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:23:06 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:23:19 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:23:59 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:24:07 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:26:02 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:29:56 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:34:31 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:35:29 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:36:12 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:38:21 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:38:34 --> Severity: Notice --> Undefined index: val D:\BISKOM\www\shelter_uad\application\modules\pelaporan\models\M_pelaporan.php 110
ERROR - 2021-01-27 20:38:34 --> Severity: Notice --> Undefined index: kamar D:\BISKOM\www\shelter_uad\application\modules\pelaporan\models\M_pelaporan.php 116
ERROR - 2021-01-27 20:38:34 --> Severity: Notice --> Undefined index: val D:\BISKOM\www\shelter_uad\application\modules\pelaporan\models\M_pelaporan.php 123
ERROR - 2021-01-27 20:39:57 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:48:00 --> Query error: Unknown column 'lkamarId' in 'on clause' - Invalid query: SELECT `kamarId` as `id`, `kamarNomor` AS `nama`, `kamarKapasitas` as `jml`, COUNT(pasienId) AS terpakai
FROM `kamar`
LEFT JOIN `pasien` ON `pasienKamarId` = `lkamarId`
GROUP BY `kamarId`
ERROR - 2021-01-27 20:48:10 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:48:20 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:50:12 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:50:32 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:53:24 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:53:58 --> 404 Page Not Found: themes
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: tpl D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 147
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 16
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 22
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 28
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 34
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 40
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 57
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 58
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 59
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 60
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: gejala D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 69
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: komorbid D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 83
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 97
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 103
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: status D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 111
ERROR - 2021-01-27 20:54:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 111
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: kamar D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 122
ERROR - 2021-01-27 20:54:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 122
ERROR - 2021-01-27 20:54:04 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_update.php 131
ERROR - 2021-01-27 21:00:27 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_rujukan.php 38
ERROR - 2021-01-27 21:00:48 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_rujukan.php 38
ERROR - 2021-01-27 21:04:29 --> 404 Page Not Found: themes
ERROR - 2021-01-27 21:09:36 --> 404 Page Not Found: themes
ERROR - 2021-01-27 21:10:22 --> 404 Page Not Found: themes
ERROR - 2021-01-27 21:11:26 --> Severity: Error --> Call to undefined method CI_Session::unset() D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 154
ERROR - 2021-01-27 21:13:53 --> 404 Page Not Found: themes
ERROR - 2021-01-27 21:31:24 --> 404 Page Not Found: themes
