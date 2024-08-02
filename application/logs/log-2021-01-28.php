<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-28 09:50:31 --> Severity: Notice --> Undefined index: laporGejalaLain D:\BISKOM\www\shelter_uad\application\modules\pelaporan\controllers\Pelaporan.php 89
ERROR - 2021-01-28 09:50:57 --> 404 Page Not Found: themes
ERROR - 2021-01-28 09:51:04 --> Severity: Notice --> Undefined index: val D:\BISKOM\www\shelter_uad\application\modules\pelaporan\models\M_pelaporan.php 112
ERROR - 2021-01-28 09:51:04 --> Severity: Notice --> Undefined index: val D:\BISKOM\www\shelter_uad\application\modules\pelaporan\models\M_pelaporan.php 125
ERROR - 2021-01-28 09:58:25 --> 404 Page Not Found: pasien
ERROR - 2021-01-28 10:14:20 --> 404 Page Not Found: ../modules/pasien/controllers/Pasien/laporan_datatables
ERROR - 2021-01-28 10:14:40 --> 404 Page Not Found: ../modules/pasien/controllers/Pasien/laporan_datatables
ERROR - 2021-01-28 10:15:19 --> 404 Page Not Found: ../modules/pasien/controllers/Pasien/laporan_datatables
ERROR - 2021-01-28 10:22:51 --> Severity: Notice --> Undefined index: pasienId D:\BISKOM\www\shelter_uad\application\modules\pasien\controllers\Pasien.php 77
ERROR - 2021-01-28 10:22:51 --> Severity: Notice --> Undefined index: pasienId D:\BISKOM\www\shelter_uad\application\modules\pasien\controllers\Pasien.php 85
ERROR - 2021-01-28 10:22:51 --> Severity: Notice --> Undefined index: pasienId D:\BISKOM\www\shelter_uad\application\modules\pasien\controllers\Pasien.php 86
ERROR - 2021-01-28 10:23:00 --> Severity: Notice --> Undefined index: pasienId D:\BISKOM\www\shelter_uad\application\modules\pasien\controllers\Pasien.php 77
ERROR - 2021-01-28 10:23:00 --> Severity: Notice --> Undefined index: pasienId D:\BISKOM\www\shelter_uad\application\modules\pasien\controllers\Pasien.php 85
ERROR - 2021-01-28 10:23:00 --> Severity: Notice --> Undefined index: pasienId D:\BISKOM\www\shelter_uad\application\modules\pasien\controllers\Pasien.php 86
ERROR - 2021-01-28 10:28:12 --> Severity: Error --> Class 'DatetTime' not found D:\BISKOM\www\shelter_uad\application\modules\pasien\controllers\Pasien.php 19
ERROR - 2021-01-28 10:41:01 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 30
ERROR - 2021-01-28 10:41:01 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 30
ERROR - 2021-01-28 10:41:01 --> 404 Page Not Found: themes
ERROR - 2021-01-28 10:41:28 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:41:28 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:41:28 --> 404 Page Not Found: themes
ERROR - 2021-01-28 10:41:39 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:41:39 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:41:39 --> 404 Page Not Found: themes
ERROR - 2021-01-28 10:41:43 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:41:43 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:41:43 --> 404 Page Not Found: themes
ERROR - 2021-01-28 10:42:34 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:42:34 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:42:58 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:42:58 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:43:04 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:43:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:43:55 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:43:55 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:44:44 --> Query error: Table 'shelter_cov19_devel.pasiens' doesn't exist - Invalid query: SELECT `bioNama`, `bioNIK`, `pasienId`, `pasienNomor`, `pasienTanggalMasuk`, `kamarNomor`, `lantaiNama`
FROM `pasiens`
JOIN `pelaporan` ON `laporId` = `pasienLaporId`
JOIN `biodata` ON `bioId` = `laporBioId`
JOIN `kamar` ON `kamarId` = `pasienKamarId`
JOIN `ref_lantai` ON `lantaiId` = `kamarLantaiId`
WHERE `laporStatus` = '1'
AND `pasienStatusRawat` = '1'
AND   (
`bioNama` LIKE '%bejo%' ESCAPE '!'
 )
AND   (
`pasienNomor` LIKE '%bejo%' ESCAPE '!'
 )
ORDER BY `pasienId` ASC
 LIMIT 20
ERROR - 2021-01-28 10:45:52 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:45:52 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:45:52 --> Query error: Table 'shelter_cov19_devel.pasiens' doesn't exist - Invalid query: SELECT `bioNama`, `bioNIK`, `pasienId`, `pasienNomor`, `pasienTanggalMasuk`, `kamarNomor`, `lantaiNama`
FROM `pasiens`
JOIN `pelaporan` ON `laporId` = `pasienLaporId`
JOIN `biodata` ON `bioId` = `laporBioId`
JOIN `kamar` ON `kamarId` = `pasienKamarId`
JOIN `ref_lantai` ON `lantaiId` = `kamarLantaiId`
WHERE `laporStatus` = '1'
AND `pasienStatusRawat` = '1'
ORDER BY `pasienId` ASC
 LIMIT 20
ERROR - 2021-01-28 10:45:57 --> Query error: Table 'shelter_cov19_devel.pasiens' doesn't exist - Invalid query: SELECT `bioNama`, `bioNIK`, `pasienId`, `pasienNomor`, `pasienTanggalMasuk`, `kamarNomor`, `lantaiNama`
FROM `pasiens`
JOIN `pelaporan` ON `laporId` = `pasienLaporId`
JOIN `biodata` ON `bioId` = `laporBioId`
JOIN `kamar` ON `kamarId` = `pasienKamarId`
JOIN `ref_lantai` ON `lantaiId` = `kamarLantaiId`
WHERE `laporStatus` = '1'
AND `pasienStatusRawat` = '1'
AND   (
`bioNama` LIKE '%bejo%' ESCAPE '!'
 )
AND   (
`pasienNomor` LIKE '%bejo%' ESCAPE '!'
 )
ORDER BY `pasienId` ASC
 LIMIT 20
ERROR - 2021-01-28 10:46:37 --> Query error: Table 'shelter_cov19_devel.pasiens' doesn't exist - Invalid query: SELECT `bioNama`, `bioNIK`, `pasienId`, `pasienNomor`, `pasienTanggalMasuk`, `kamarNomor`, `lantaiNama`
FROM `pasiens`
JOIN `pelaporan` ON `laporId` = `pasienLaporId`
JOIN `biodata` ON `bioId` = `laporBioId`
JOIN `kamar` ON `kamarId` = `pasienKamarId`
JOIN `ref_lantai` ON `lantaiId` = `kamarLantaiId`
WHERE `laporStatus` = '1'
AND `pasienStatusRawat` = '1'
AND   (
`bioNama` LIKE '%bejo%' ESCAPE '!'
 )
AND   (
`pasienNomor` LIKE '%bejo%' ESCAPE '!'
 )
ORDER BY `pasienId` ASC
 LIMIT 20
ERROR - 2021-01-28 10:47:14 --> Query error: Table 'shelter_cov19_devel.pasiens' doesn't exist - Invalid query: SELECT `bioNama`, `bioNIK`, `pasienId`, `pasienNomor`, `pasienTanggalMasuk`, `kamarNomor`, `lantaiNama`
FROM `pasiens`
JOIN `pelaporan` ON `laporId` = `pasienLaporId`
JOIN `biodata` ON `bioId` = `laporBioId`
JOIN `kamar` ON `kamarId` = `pasienKamarId`
JOIN `ref_lantai` ON `lantaiId` = `kamarLantaiId`
WHERE `laporStatus` = '1'
AND `pasienStatusRawat` = '1'
AND   (
`bioNama` LIKE '%bejo%' ESCAPE '!'
OR  `pasienNomor` LIKE '%bejo%' ESCAPE '!'
 )
ORDER BY `pasienId` ASC
 LIMIT 20
ERROR - 2021-01-28 10:49:18 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:49:18 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:50:33 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:50:33 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:50:47 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:50:47 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:50:55 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:50:55 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:51:31 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:51:31 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:51:37 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:51:37 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:51:45 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:51:45 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:51:53 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:51:53 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:52:21 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:52:21 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:52:34 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:52:34 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:52:46 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:52:46 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:52:57 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:52:57 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:53:11 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:53:11 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:53:25 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:53:25 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:53:33 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:53:33 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:53:54 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:53:54 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:54:05 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:54:05 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:54:11 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:54:11 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:54:51 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:54:51 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:55:28 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:55:28 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:55:38 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 10:55:38 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 11:09:05 --> Severity: Notice --> Undefined variable: jdwl_id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 1
ERROR - 2021-01-28 11:09:05 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 1
ERROR - 2021-01-28 11:09:05 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 6
ERROR - 2021-01-28 11:09:05 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 12
ERROR - 2021-01-28 11:09:05 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 18
ERROR - 2021-01-28 11:09:05 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 23
ERROR - 2021-01-28 11:09:05 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 27
ERROR - 2021-01-28 11:09:05 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 32
ERROR - 2021-01-28 11:09:51 --> Severity: Notice --> Undefined variable: jdwl_id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 1
ERROR - 2021-01-28 11:09:51 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 1
ERROR - 2021-01-28 11:09:51 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 6
ERROR - 2021-01-28 11:09:51 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 12
ERROR - 2021-01-28 11:09:51 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 18
ERROR - 2021-01-28 11:09:51 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 23
ERROR - 2021-01-28 11:09:51 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 27
ERROR - 2021-01-28 11:09:51 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 32
ERROR - 2021-01-28 11:11:05 --> Severity: Notice --> Undefined variable: jdwl_id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 1
ERROR - 2021-01-28 11:11:05 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 1
ERROR - 2021-01-28 11:11:05 --> Severity: Notice --> Undefined variable: data D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 18
ERROR - 2021-01-28 11:11:05 --> Severity: Notice --> Undefined variable: id D:\BISKOM\www\shelter_uad\application\modules\pelaporan\views\v_pelaporan_add.php 23
ERROR - 2021-01-28 11:46:41 --> 404 Page Not Found: themes
ERROR - 2021-01-28 20:18:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
 D:\BISKOM\www\shelter_uad\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2021-01-28 20:18:38 --> Unable to connect to the database
ERROR - 2021-01-28 20:55:29 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 20:55:29 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 21:21:00 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 21:21:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 21:22:58 --> Severity: Notice --> Undefined variable: skema D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
ERROR - 2021-01-28 21:22:58 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\pasien\views\v_pasien_index.php 31
