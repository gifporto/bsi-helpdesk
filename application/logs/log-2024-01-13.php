<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-01-13 05:32:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'bdev'@'10.0.61.212' (using password: YES) /Users/akhsan/public_html/uad/inklusi/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-01-13 05:32:05 --> Unable to connect to the database
ERROR - 2024-01-13 05:35:01 --> Severity: error --> Exception: Unable to locate the model you have specified: M_monev /Users/akhsan/public_html/uad/inklusi/system/core/Loader.php 348
ERROR - 2024-01-13 05:35:53 --> Query error: Table 'pelaporan_inklusi.keaktifan_anggota' doesn't exist - Invalid query:  
         SELECT 
         SUM(aktifJmlAnggotaAktif) AS aktif,
         SUM(aktifJmlAnggotaKurangAktif) AS kurang_aktif,
         SUM(aktifJmlAnggotaTidakAktif) AS tidak_aktif
         FROM keaktifan_anggota
         JOIN ref_tingkat_pimpinan ON aktifTingkatPimpinanId = tpimpId
         JOIN periode ON aktifPeriodeId = periodeId AND periodeIsAktif = 1
         
      
ERROR - 2024-01-13 05:35:53 --> Query error: Table 'pelaporan_inklusi.keaktifan_anggota' doesn't exist - Invalid query:  
         SELECT 
         SUM(aktifJmlAnggotaAktif) AS aktif,
         SUM(aktifJmlAnggotaKurangAktif) AS kurang_aktif,
         SUM(aktifJmlAnggotaTidakAktif) AS tidak_aktif
         FROM keaktifan_anggota
         JOIN ref_tingkat_pimpinan ON aktifTingkatPimpinanId = tpimpId
         JOIN periode ON aktifPeriodeId = periodeId AND periodeIsAktif = 1
         
      
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tpl /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/controllers/Dashboard.php 23
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: info /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 12
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: periode_aktif /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 15
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: periode_aktif /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 15
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 21
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 23
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 25
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 31
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 43
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 43
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 55
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 55
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 55
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 67
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 67
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 67
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 67
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 87
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 96
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 105
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 114
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 123
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 132
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: kegiatan /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 144
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: kegiatan /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 153
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: kemitraan /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 162
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: anggota /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 174
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: anggota /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 183
ERROR - 2024-01-13 05:36:27 --> Severity: Notice --> Undefined variable: anggota /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 192
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tpl /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/controllers/Dashboard.php 23
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: info /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 12
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: periode_aktif /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 15
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: periode_aktif /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 15
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 21
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 23
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 25
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 31
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 43
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 43
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 55
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 55
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 55
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 67
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 67
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 67
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: tingkat /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 67
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 87
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 96
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 105
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 114
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 123
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: amal_usaha /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 132
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: kegiatan /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 144
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: kegiatan /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 153
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: kemitraan /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 162
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: anggota /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 174
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: anggota /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 183
ERROR - 2024-01-13 05:36:28 --> Severity: Notice --> Undefined variable: anggota /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 192
ERROR - 2024-01-13 05:38:04 --> Severity: Notice --> Undefined variable: tpl /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/controllers/Dashboard.php 23
ERROR - 2024-01-13 05:38:04 --> Severity: Notice --> Undefined variable: info /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 12
ERROR - 2024-01-13 05:38:06 --> Severity: Notice --> Undefined variable: tpl /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/controllers/Dashboard.php 23
ERROR - 2024-01-13 05:38:06 --> Severity: Notice --> Undefined variable: info /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/views/v_admin_index.php 12
ERROR - 2024-01-13 05:38:30 --> Severity: Notice --> Undefined variable: tpl /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/controllers/Dashboard.php 23
ERROR - 2024-01-13 05:45:28 --> Severity: Notice --> Undefined variable: tpl /Users/akhsan/public_html/uad/inklusi/application/modules/dashboard/controllers/Dashboard.php 23
ERROR - 2024-01-13 05:48:13 --> Query error: Table 'pelaporan_inklusi.ref_majelis_lembaga' doesn't exist - Invalid query: SELECT `malemId`, `malemNama`
FROM `ref_majelis_lembaga`
ERROR - 2024-01-13 07:48:26 --> Severity: Notice --> Undefined variable: majelis_lembaga /Users/akhsan/public_html/uad/inklusi/application/modules/system/views/v_user_update.php 59
ERROR - 2024-01-13 07:48:27 --> 404 Page Not Found: themes
ERROR - 2024-01-13 07:48:27 --> Severity: Notice --> Undefined variable: majelis_lembaga /Users/akhsan/public_html/uad/inklusi/application/modules/system/views/v_user_update.php 59
ERROR - 2024-01-13 07:48:27 --> 404 Page Not Found: themes
ERROR - 2024-01-13 07:49:07 --> 404 Page Not Found: themes
ERROR - 2024-01-13 07:49:35 --> 404 Page Not Found: system
ERROR - 2024-01-13 07:50:31 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`pelaporan_inklusi`.`sys_user`, CONSTRAINT `fk_tingkat_pimpinan` FOREIGN KEY (`UserTingkatPimpinanId`) REFERENCES `ref_tingkat_pimpinan` (`tpimpId`) ON UPDATE CASCADE) - Invalid query: UPDATE `sys_user` SET `UserRealName` = 'Administrator', `UserName` = 'admin', `UserEmail` = 'admin@uad', `UserFoto` = NULL, `UserTingkatPimpinanId` = '', `UserIsActive` = '1', `UserUpdateTime` = '2024-01-13 07:50:30', `UserUpdateUser` = 'akhsan'
WHERE `UserId` = '1'
ERROR - 2024-01-13 07:53:42 --> Severity: Compile Error --> Can't use method return value in write context /Users/akhsan/public_html/uad/inklusi/application/modules/system/controllers/User.php 334
ERROR - 2024-01-13 07:53:43 --> Severity: Compile Error --> Can't use method return value in write context /Users/akhsan/public_html/uad/inklusi/application/modules/system/controllers/User.php 334
ERROR - 2024-01-13 07:53:43 --> Severity: Compile Error --> Can't use method return value in write context /Users/akhsan/public_html/uad/inklusi/application/modules/system/controllers/User.php 334
ERROR - 2024-01-13 07:55:05 --> Severity: Compile Error --> Can't use method return value in write context /Users/akhsan/public_html/uad/inklusi/application/modules/system/controllers/User.php 334
ERROR - 2024-01-13 07:55:06 --> Severity: Compile Error --> Can't use method return value in write context /Users/akhsan/public_html/uad/inklusi/application/modules/system/controllers/User.php 334
ERROR - 2024-01-13 07:55:07 --> Severity: Compile Error --> Can't use method return value in write context /Users/akhsan/public_html/uad/inklusi/application/modules/system/controllers/User.php 334
ERROR - 2024-01-13 07:55:08 --> Severity: Compile Error --> Can't use method return value in write context /Users/akhsan/public_html/uad/inklusi/application/modules/system/controllers/User.php 334
ERROR - 2024-01-13 07:55:27 --> 404 Page Not Found: themes
ERROR - 2024-01-13 07:55:40 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`pelaporan_inklusi`.`sys_user`, CONSTRAINT `fk_tingkat_pimpinan` FOREIGN KEY (`UserTingkatPimpinanId`) REFERENCES `ref_tingkat_pimpinan` (`tpimpId`) ON UPDATE CASCADE) - Invalid query: UPDATE `sys_user` SET `UserRealName` = 'Administrator', `UserName` = 'admin', `UserEmail` = 'admin@uad', `UserFoto` = NULL, `UserTingkatPimpinanId` = '', `UserIsActive` = '1', `UserUpdateTime` = '2024-01-13 07:55:40', `UserUpdateUser` = 'akhsan'
WHERE `UserId` = '1'
ERROR - 2024-01-13 07:57:08 --> 404 Page Not Found: themes
ERROR - 2024-01-13 08:05:42 --> 404 Page Not Found: system
ERROR - 2024-01-13 08:05:51 --> 404 Page Not Found: system
