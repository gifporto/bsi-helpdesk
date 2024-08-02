<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-26 10:00:55 --> Query error: Table 'shelter_cov19_devel.sys_session' doesn't exist - Invalid query: SELECT `data`
FROM `sys_session`
WHERE `id` = 's1637bjr79240mu1149a5n176h443evr'
ERROR - 2021-01-26 10:01:34 --> 404 Page Not Found: admin
ERROR - 2021-01-26 10:02:59 --> Severity: Error --> Class 'Auth_Controller' not found D:\BISKOM\www\shelter_uad\application\modules\auth\controllers\Auth.php 4
ERROR - 2021-01-26 10:31:26 --> Query error: Table 'shelter_cov19_devel.user' doesn't exist - Invalid query: SELECT `user`.*, `user_group`.*, `group`.*, `unit`.*
FROM `user`
LEFT OUTER JOIN `user_group` ON `user_group`.`UserGroupUserId` = `user`.`UserId` AND `user_group`.`UserGroupIsDefault` = 'Ya'
LEFT OUTER JOIN `group` ON `user_group`.`UserGroupGroupId` = `group`.`GroupId`
LEFT OUTER JOIN `unit` ON `unit`.`UnitId` = `user`.`UserUnitId`
WHERE LOWER(user.UserEmail) = 'admin'
ERROR - 2021-01-26 10:36:03 --> Query error: Table 'shelter_cov19_devel.sys_unit' doesn't exist - Invalid query: SELECT `sys_user`.*, `sys_user_group`.*, `sys_group`.*, `sys_unit`.*, `sys_user_organisasi`.*, `orgNama`
FROM `sys_user`
LEFT OUTER JOIN `sys_user_group` ON `sys_user_group`.`UserGroupUserId` = `sys_user`.`UserId` AND `sys_user_group`.`UserGroupIsDefault` = 'Ya'
LEFT OUTER JOIN `sys_group` ON `sys_user_group`.`UserGroupGroupId` = `sys_group`.`GroupId`
LEFT OUTER JOIN `sys_unit` ON `sys_unit`.`UnitId` = `sys_user`.`UserUnitId`
LEFT JOIN `sys_user_organisasi` ON `UserId` = `userorgUserId`
LEFT JOIN `organisasi` ON `orgId` = `userorgOrgId`
WHERE   (
LOWER(sys_user.UserName) = 'admin'
OR LOWER(sys_user.UserEmail) = 'admin'
 )
AND `UserIsActive` = 1
ERROR - 2021-01-26 11:07:15 --> Query error: Table 'shelter_cov19_devel.sys_unit' doesn't exist - Invalid query: SELECT `sys_user`.*, `sys_user_group`.*, `sys_group`.*, `sys_unit`.*, `sys_user_organisasi`.*, `orgNama`
FROM `sys_user`
LEFT OUTER JOIN `sys_user_group` ON `sys_user_group`.`UserGroupUserId` = `sys_user`.`UserId` AND `sys_user_group`.`UserGroupIsDefault` = 'Ya'
LEFT OUTER JOIN `sys_group` ON `sys_user_group`.`UserGroupGroupId` = `sys_group`.`GroupId`
LEFT OUTER JOIN `sys_unit` ON `sys_unit`.`UnitId` = `sys_user`.`UserUnitId`
LEFT JOIN `sys_user_organisasi` ON `UserId` = `userorgUserId`
LEFT JOIN `organisasi` ON `orgId` = `userorgOrgId`
WHERE   (
LOWER(sys_user.UserName) = 'admin'
OR LOWER(sys_user.UserEmail) = 'admin'
 )
AND `UserIsActive` = 1
ERROR - 2021-01-26 11:08:11 --> Query error: Table 'shelter_cov19_devel.sys_unit' doesn't exist - Invalid query: SELECT `sys_user`.*, `sys_user_group`.*, `sys_group`.*, `sys_user_organisasi`.*
FROM `sys_user`
LEFT OUTER JOIN `sys_user_group` ON `sys_user_group`.`UserGroupUserId` = `sys_user`.`UserId` AND `sys_user_group`.`UserGroupIsDefault` = 'Ya'
LEFT OUTER JOIN `sys_group` ON `sys_user_group`.`UserGroupGroupId` = `sys_group`.`GroupId`
LEFT OUTER JOIN `sys_unit` ON `sys_unit`.`UnitId` = `sys_user`.`UserUnitId`
WHERE   (
LOWER(sys_user.UserName) = 'admin'
OR LOWER(sys_user.UserEmail) = 'admin'
 )
AND `UserIsActive` = 1
ERROR - 2021-01-26 11:08:25 --> Query error: Unknown table 'sys_user_organisasi' - Invalid query: SELECT `sys_user`.*, `sys_user_group`.*, `sys_group`.*, `sys_user_organisasi`.*
FROM `sys_user`
LEFT OUTER JOIN `sys_user_group` ON `sys_user_group`.`UserGroupUserId` = `sys_user`.`UserId` AND `sys_user_group`.`UserGroupIsDefault` = 'Ya'
LEFT OUTER JOIN `sys_group` ON `sys_user_group`.`UserGroupGroupId` = `sys_group`.`GroupId`
WHERE   (
LOWER(sys_user.UserName) = 'admin'
OR LOWER(sys_user.UserEmail) = 'admin'
 )
AND `UserIsActive` = 1
ERROR - 2021-01-26 11:09:26 --> Severity: Error --> Call to undefined function checkhashSSHA() D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 59
ERROR - 2021-01-26 11:17:04 --> Severity: Error --> Call to undefined function checkhashSSHA() D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 59
ERROR - 2021-01-26 11:17:23 --> Severity: Notice --> Undefined property: stdClass::$userorgOrgId D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 66
ERROR - 2021-01-26 11:17:23 --> Query error: Table 'shelter_cov19_devel.periode_organisasi' doesn't exist - Invalid query: 
         SELECT `periodeorgId`, `periodeIsAktif`, `periodeorgStatus`
         FROM periode_organisasi
         JOIN periode ON periodeId = periodeorgPeriodeId AND periodeIsAktif = '1'
         WHERE periodeorgOrgId = NULL
      
ERROR - 2021-01-26 11:18:17 --> Severity: Notice --> Undefined property: stdClass::$userorgOrgId D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 66
ERROR - 2021-01-26 11:18:17 --> Query error: Table 'shelter_cov19_devel.periode_organisasi' doesn't exist - Invalid query: 
         SELECT `periodeorgId`, `periodeIsAktif`, `periodeorgStatus`
         FROM periode_organisasi
         JOIN periode ON periodeId = periodeorgPeriodeId AND periodeIsAktif = '1'
         WHERE periodeorgOrgId = NULL
      
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$GroupBackend D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 322
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:18:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\BISKOM\www\shelter_uad\system\core\Exceptions.php:271) D:\BISKOM\www\shelter_uad\system\helpers\url_helper.php 564
ERROR - 2021-01-26 11:24:47 --> Severity: error --> Exception: Unable to locate the model you have specified: M_laporan D:\BISKOM\www\shelter_uad\system\core\Loader.php 348
ERROR - 2021-01-26 11:26:29 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:26:29 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:26:29 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:26:29 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:26:29 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:26:29 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:26:29 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:27:07 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:27:07 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:27:07 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:27:07 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:27:07 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:27:07 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:27:07 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:27:40 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:27:40 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:27:40 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:27:40 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:27:41 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:27:41 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:27:41 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 188
ERROR - 2021-01-26 11:27:41 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 188
ERROR - 2021-01-26 11:27:41 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:28:07 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:28:07 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:28:07 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:28:07 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:28:07 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:28:07 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:28:07 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 188
ERROR - 2021-01-26 11:28:07 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 188
ERROR - 2021-01-26 11:28:07 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:28:39 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:28:39 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:28:39 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:28:39 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:28:39 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:28:39 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:28:39 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:28:39 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:28:39 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:29:04 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:29:04 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:29:04 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:29:04 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:29:04 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:29:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:29:04 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:29:04 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:29:04 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:29:13 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:29:13 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:29:13 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:29:13 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:29:13 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:29:13 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:29:13 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:29:13 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:29:13 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:31:15 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:31:15 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:31:15 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:31:15 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:31:15 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:31:15 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:31:15 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:31:15 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:31:15 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:31:45 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:31:45 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:31:45 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:31:45 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:31:45 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:31:45 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:31:45 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:31:45 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:31:45 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:35:49 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:35:49 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:35:49 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:35:49 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:35:49 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:35:49 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:35:49 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:35:49 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:35:49 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:35:56 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:35:56 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:35:56 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:35:56 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:35:56 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:35:56 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:35:56 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:35:56 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:35:56 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:36:06 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:36:06 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:36:06 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:36:06 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:36:06 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:36:06 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:36:06 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:36:06 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:36:06 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:36:29 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:36:29 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:36:29 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:36:29 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:36:29 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:36:29 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:36:29 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:36:30 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:36:53 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:36:53 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:36:53 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:36:53 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:36:53 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:36:53 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:36:53 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:36:53 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:36:59 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:36:59 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:36:59 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:36:59 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:36:59 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:36:59 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:36:59 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:36:59 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:36:59 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:39:48 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:39:48 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:39:48 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:39:48 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:39:48 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:39:48 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:39:48 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:39:48 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:39:48 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:39:53 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:39:53 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:39:53 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:39:53 --> Severity: Notice --> Undefined variable: penyerapan_anggaran D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 82
ERROR - 2021-01-26 11:39:53 --> Severity: Notice --> Undefined variable: proposal_status D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:39:53 --> Severity: Warning --> Invalid argument supplied for foreach() D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 109
ERROR - 2021-01-26 11:39:53 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:39:53 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 187
ERROR - 2021-01-26 11:39:54 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:41:27 --> Severity: Notice --> Undefined variable: jml_organisasi D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 23
ERROR - 2021-01-26 11:41:27 --> Severity: Notice --> Undefined variable: total_pagu D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 38
ERROR - 2021-01-26 11:41:27 --> Severity: Notice --> Undefined variable: anggaran_digunakan D:\BISKOM\www\shelter_uad\application\modules\dashboard\views\v_admin_index.php 53
ERROR - 2021-01-26 11:41:27 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:41:27 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:41:27 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:41:59 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:41:59 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:41:59 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:42:18 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:42:18 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:09 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:09 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:13 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:13 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:23 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:23 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:30 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:30 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:30 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:43:31 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:31 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:31 --> 404 Page Not Found: assets
ERROR - 2021-01-26 11:43:42 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:42 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:58 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:43:58 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:44:21 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:44:21 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:46:05 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:46:05 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:46:27 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:46:27 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:46:41 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:46:41 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:47:08 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:47:08 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:49:36 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:49:36 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:50:22 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:50:22 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:51:07 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:51:07 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:51:23 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:51:23 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 184
ERROR - 2021-01-26 11:57:05 --> 404 Page Not Found: login
ERROR - 2021-01-26 11:58:16 --> 404 Page Not Found: login
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Notice --> Undefined property: stdClass::$MenuStyle D:\BISKOM\www\shelter_uad\application\libraries\Authentication.php 369
ERROR - 2021-01-26 11:58:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\BISKOM\www\shelter_uad\system\core\Exceptions.php:271) D:\BISKOM\www\shelter_uad\system\helpers\url_helper.php 564
ERROR - 2021-01-26 13:10:11 --> Severity: Notice --> Undefined property: MY_Loader::$notifications D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 97
ERROR - 2021-01-26 13:10:11 --> Severity: Error --> Call to a member function show() on null D:\BISKOM\www\shelter_uad\themes\theadmin\views\layouts\layout_admin.php 97
ERROR - 2021-01-26 13:12:19 --> Severity: error --> Exception: Unable to locate the model you have specified: M_pendaftar D:\BISKOM\www\shelter_uad\system\core\Loader.php 348
ERROR - 2021-01-26 13:14:57 --> 404 Page Not Found: lapor
ERROR - 2021-01-26 13:15:27 --> 404 Page Not Found: lapor
ERROR - 2021-01-26 13:37:46 --> 404 Page Not Found: themes
ERROR - 2021-01-26 14:25:24 --> 404 Page Not Found: assets
ERROR - 2021-01-26 14:25:24 --> 404 Page Not Found: assets
ERROR - 2021-01-26 14:25:59 --> 404 Page Not Found: assets
ERROR - 2021-01-26 14:25:59 --> 404 Page Not Found: assets
ERROR - 2021-01-26 14:26:08 --> 404 Page Not Found: assets
ERROR - 2021-01-26 14:26:31 --> Severity: Error --> Call to undefined function img_path() D:\BISKOM\www\shelter_uad\application\modules\home\views\v_home_index.php 27
ERROR - 2021-01-26 14:26:48 --> Severity: Error --> Call to undefined function img_path() D:\BISKOM\www\shelter_uad\application\modules\home\views\v_home_index.php 27
ERROR - 2021-01-26 14:27:12 --> Severity: Error --> Call to undefined function imgage_path() D:\BISKOM\www\shelter_uad\application\modules\home\views\v_home_index.php 27
ERROR - 2021-01-26 14:27:19 --> 404 Page Not Found: assets
ERROR - 2021-01-26 14:27:19 --> 404 Page Not Found: assets
ERROR - 2021-01-26 14:36:25 --> 404 Page Not Found: lapor
ERROR - 2021-01-26 14:58:48 --> 404 Page Not Found: pasien
ERROR - 2021-01-26 15:01:59 --> 404 Page Not Found: amdin
ERROR - 2021-01-26 15:15:50 --> 404 Page Not Found: themes
ERROR - 2021-01-26 15:15:50 --> Query error: Table 'shelter_cov19_devel.sys_user_organisasi' doesn't exist - Invalid query: SELECT `sys_user`.*, IF(UserBanned=1, "Tidak", "Aktif") AS BannedText, GROUP_CONCAT(sys_group.GroupName) AS NamaGroup, `orgNama` AS `UserOrganisasi`
FROM `sys_user`
LEFT JOIN `sys_role` ON `roleId`=`UserRoleId`
LEFT JOIN `sys_user_group` ON `UserGroupUserId`=`UserId`
LEFT JOIN `sys_group` ON `UserGroupGroupId`=`GroupId`
LEFT JOIN `sys_user_organisasi` ON `userorgUserId`=`UserId`
LEFT JOIN `organisasi` ON `userorgOrgId`=`orgId`
WHERE `UserGroupGroupId` NOT IN(0, 1)
GROUP BY `sys_user`.`UserName`
ERROR - 2021-01-26 15:16:03 --> 404 Page Not Found: themes
ERROR - 2021-01-26 15:16:03 --> Query error: Table 'shelter_cov19_devel.sys_user_organisasi' doesn't exist - Invalid query: SELECT `sys_user`.*, IF(UserBanned=1, "Tidak", "Aktif") AS BannedText, GROUP_CONCAT(sys_group.GroupName) AS NamaGroup, `orgNama` AS `UserOrganisasi`
FROM `sys_user`
LEFT JOIN `sys_role` ON `roleId`=`UserRoleId`
LEFT JOIN `sys_user_group` ON `UserGroupUserId`=`UserId`
LEFT JOIN `sys_group` ON `UserGroupGroupId`=`GroupId`
LEFT JOIN `sys_user_organisasi` ON `userorgUserId`=`UserId`
LEFT JOIN `organisasi` ON `userorgOrgId`=`orgId`
WHERE `UserGroupGroupId` NOT IN(0, 1)
GROUP BY `sys_user`.`UserName`
ERROR - 2021-01-26 16:02:28 --> 404 Page Not Found: login
ERROR - 2021-01-26 16:07:12 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:09:58 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:10:10 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:11:59 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:12:55 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:14:16 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:14:50 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:15:07 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:18:09 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:19:50 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:20:00 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:20:35 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:20:50 --> 404 Page Not Found: themes
ERROR - 2021-01-26 16:22:59 --> 404 Page Not Found: lapor
ERROR - 2021-01-26 16:23:39 --> 404 Page Not Found: lapor
