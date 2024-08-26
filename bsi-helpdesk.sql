-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table bsi-helpdesk.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int unsigned NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(100) NOT NULL,
  `blog_description` text,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table bsi-helpdesk.blog: ~0 rows (approximately)

-- Dumping structure for table bsi-helpdesk.coba
CREATE TABLE IF NOT EXISTS `coba` (
  `blog_id` int unsigned NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(100) NOT NULL,
  `blog_description` text,
  `id_blod_fk` int DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table bsi-helpdesk.coba: ~0 rows (approximately)
REPLACE INTO `coba` (`blog_id`, `blog_title`, `blog_description`, `id_blod_fk`) VALUES
	(1, 'mantap', 'ini coba dulu', NULL);

-- Dumping structure for table bsi-helpdesk.core_captcha
CREATE TABLE IF NOT EXISTS `core_captcha` (
  `captcha_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- Dumping data for table bsi-helpdesk.core_captcha: ~67 rows (approximately)
REPLACE INTO `core_captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
	(14, 1618972789, '::1', 'P00XU'),
	(15, 1618972798, '::1', 'R0IGV'),
	(16, 1618972811, '::1', '2CEKC'),
	(17, 1618972846, '::1', 'FV3GT'),
	(18, 1618972888, '::1', 'TPQQL'),
	(19, 1618972947, '::1', 'NGVEN'),
	(20, 1618972983, '::1', 'BVNEK'),
	(21, 1618973414, '::1', '1W69L'),
	(22, 1618974043, '::1', '40AZ9'),
	(23, 1618974800, '::1', '3BQHZ'),
	(24, 1618974905, '::1', 'SB11E'),
	(25, 1618975044, '::1', 'SES2G'),
	(26, 1624336623, '127.0.0.1', 'XK54P'),
	(27, 1624336832, '127.0.0.1', 'KAD9L'),
	(28, 1624336891, '127.0.0.1', 'B4IWU'),
	(29, 1624339972, '127.0.0.1', 'XX367'),
	(30, 1624339982, '127.0.0.1', 'I41ED'),
	(31, 1624339988, '127.0.0.1', '04Q5Z'),
	(32, 1624340008, '127.0.0.1', '5UVI1'),
	(33, 1624340417, '127.0.0.1', 'WGV8T'),
	(34, 1624505841, '127.0.0.1', '399D0'),
	(35, 1624505861, '127.0.0.1', 'QTJEB'),
	(36, 1624505877, '127.0.0.1', 'VFG8D'),
	(37, 1624505923, '127.0.0.1', 'MIQC6'),
	(38, 1624505940, '127.0.0.1', 'IKGDG'),
	(39, 1624505946, '127.0.0.1', 'ZKREO'),
	(40, 1624505970, '127.0.0.1', 'S38T4'),
	(41, 1624506003, '127.0.0.1', 'J6Z1X'),
	(42, 1624506021, '127.0.0.1', '3A90J'),
	(43, 1624506040, '127.0.0.1', 'O1GDE'),
	(44, 1624506084, '127.0.0.1', 'UF1I3'),
	(45, 1624506100, '127.0.0.1', '4AC0M'),
	(46, 1624506116, '127.0.0.1', 'J3PH0'),
	(47, 1624506135, '127.0.0.1', 'BXP6F'),
	(48, 1624506187, '127.0.0.1', 'SPV27'),
	(49, 1624506205, '127.0.0.1', 'H6HX3'),
	(50, 1624506332, '127.0.0.1', 'R6BOM'),
	(51, 1624506399, '127.0.0.1', 'CTMAW'),
	(52, 1624506670, '127.0.0.1', 'P9T2R'),
	(53, 1624506702, '127.0.0.1', '8YAVM'),
	(54, 1624507492, '127.0.0.1', 'LTWDY'),
	(55, 1624507500, '127.0.0.1', '3ZKA4'),
	(56, 1624507511, '127.0.0.1', 'HX0I5'),
	(57, 1624507534, '127.0.0.1', 'KACX0'),
	(58, 1624507539, '127.0.0.1', 'P7F15'),
	(59, 1624507805, '127.0.0.1', '3GIZN'),
	(60, 1624507814, '127.0.0.1', '4B7IR'),
	(61, 1624509195, '127.0.0.1', 'D4G8N'),
	(62, 1624509305, '127.0.0.1', 'SVDYG'),
	(63, 1624509331, '127.0.0.1', 'PFSO9'),
	(64, 1624509337, '127.0.0.1', 'RF65D'),
	(65, 1624509434, '127.0.0.1', '3Y1EK'),
	(66, 1624509557, '::1', 'JPTRA'),
	(67, 1624513405, '127.0.0.1', 'G6U0K'),
	(68, 1624515862, '127.0.0.1', 'G2J1J'),
	(69, 1624515956, '127.0.0.1', 'IPVQ8'),
	(70, 1624515969, '127.0.0.1', '2FH9N'),
	(71, 1624516992, '127.0.0.1', '857CA'),
	(72, 1624517091, '10.1.7.17', 'KDY9P'),
	(73, 1624592515, '127.0.0.1', 'HOLJR'),
	(74, 1624592526, '127.0.0.1', '4WJI9'),
	(75, 1624593692, '127.0.0.1', 'CVUBK'),
	(77, 1656037969, '10.1.7.37', 'EOTJ9'),
	(78, 1671841732, '170.64.137.242', 'XWHKH'),
	(79, 1671841740, '170.64.137.242', 'CYWGF'),
	(80, 1671843255, '170.64.153.46', 'YTCX1'),
	(81, 1671844282, '170.64.153.44', '57RNF');

-- Dumping structure for table bsi-helpdesk.core_group
CREATE TABLE IF NOT EXISTS `core_group` (
  `GroupId` int NOT NULL AUTO_INCREMENT,
  `GroupName` varchar(150) DEFAULT NULL,
  `GroupDescription` varchar(255) DEFAULT NULL,
  `GroupIsAdmin` enum('Y','N') DEFAULT NULL,
  `GroupAddUser` varchar(255) DEFAULT NULL,
  `GroupAddTime` datetime DEFAULT NULL,
  `GroupUpdateUser` varchar(255) DEFAULT NULL,
  `GroupUpdateTime` datetime DEFAULT NULL,
  `GroupIconClass` varchar(255) DEFAULT NULL,
  `GroupSlugName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`GroupId`),
  UNIQUE KEY `NewIndex1a` (`GroupName`),
  KEY `NewIndex1as` (`GroupDescription`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table bsi-helpdesk.core_group: ~2 rows (approximately)
REPLACE INTO `core_group` (`GroupId`, `GroupName`, `GroupDescription`, `GroupIsAdmin`, `GroupAddUser`, `GroupAddTime`, `GroupUpdateUser`, `GroupUpdateTime`, `GroupIconClass`, `GroupSlugName`) VALUES
	(1, 'Administrator', 'Group Administrator', 'Y', 'admin', '2020-01-11 11:34:39', NULL, NULL, 'i-Checked-User', 'administrator'),
	(2, 'Member', 'Member', 'N', NULL, NULL, NULL, NULL, 'i-File-Clipboard-File--Text', 'member');

-- Dumping structure for table bsi-helpdesk.core_group_detail
CREATE TABLE IF NOT EXISTS `core_group_detail` (
  `GroupDetailMenuActionId` int NOT NULL,
  `GroupDetailGroupId` int NOT NULL,
  `GroupDetailAddUser` varchar(255) DEFAULT NULL,
  `GroupDetailAddTime` datetime DEFAULT NULL,
  `GroupDetailUpdateUser` varchar(255) DEFAULT NULL,
  `GroupDetailUpdateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`GroupDetailMenuActionId`,`GroupDetailGroupId`),
  KEY `FK_ci_group_menu_dummy_menu` (`GroupDetailMenuActionId`),
  KEY `FK_ci_group_menu_aksi` (`GroupDetailGroupId`),
  CONSTRAINT `FK_sys_group_detail_group` FOREIGN KEY (`GroupDetailGroupId`) REFERENCES `core_group` (`GroupId`) ON UPDATE CASCADE,
  CONSTRAINT `FK_sys_group_detail_menu_action` FOREIGN KEY (`GroupDetailMenuActionId`) REFERENCES `core_menu_action` (`MenuActionId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table bsi-helpdesk.core_group_detail: ~25 rows (approximately)
REPLACE INTO `core_group_detail` (`GroupDetailMenuActionId`, `GroupDetailGroupId`, `GroupDetailAddUser`, `GroupDetailAddTime`, `GroupDetailUpdateUser`, `GroupDetailUpdateTime`) VALUES
	(1, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(6, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(7, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(8, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(9, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(10, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(11, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(12, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(13, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(26, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(27, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(28, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(29, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(128, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(129, 1, NULL, '2020-01-11 11:34:39', 'admin', NULL),
	(130, 1, NULL, '2021-04-15 09:41:32', 'admin', NULL),
	(130, 2, NULL, '2021-06-11 09:45:07', 'admin', '2021-06-11 09:45:07'),
	(131, 2, NULL, '2021-05-03 12:55:35', 'admin', NULL),
	(190, 1, NULL, '2023-03-24 09:45:07', 'admin', NULL),
	(191, 1, NULL, '2023-03-24 09:45:07', 'admin', NULL),
	(192, 1, NULL, '2023-03-24 09:45:07', 'admin', NULL),
	(193, 1, NULL, '2023-03-24 09:45:07', 'admin', NULL),
	(194, 1, NULL, '2023-03-24 09:45:07', 'admin', NULL),
	(195, 1, NULL, '2023-03-31 09:45:07', 'admin', NULL),
	(195, 2, NULL, '2023-03-25 09:45:07', 'admin', NULL);

-- Dumping structure for table bsi-helpdesk.core_login_attempts
CREATE TABLE IF NOT EXISTS `core_login_attempts` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `login` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- Dumping data for table bsi-helpdesk.core_login_attempts: ~0 rows (approximately)
REPLACE INTO `core_login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
	(1, '::1', 'laboran@gmail.com', '2023-06-05 02:33:07');

-- Dumping structure for table bsi-helpdesk.core_menu
CREATE TABLE IF NOT EXISTS `core_menu` (
  `MenuId` int NOT NULL AUTO_INCREMENT,
  `MenuParentId` int DEFAULT NULL,
  `MenuName` varchar(150) DEFAULT NULL,
  `MenuDescription` varchar(250) DEFAULT NULL,
  `MenuModule` varchar(150) DEFAULT NULL,
  `MenuIsShow` enum('Ya','Tidak') DEFAULT 'Ya',
  `MenuIcon` varchar(50) DEFAULT NULL,
  `MenuIconClass` varchar(250) DEFAULT NULL,
  `MenuOrder` int DEFAULT NULL,
  `MenuIsAdmin` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`MenuId`),
  UNIQUE KEY `NewIndex12` (`MenuParentId`,`MenuName`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table bsi-helpdesk.core_menu: ~10 rows (approximately)
REPLACE INTO `core_menu` (`MenuId`, `MenuParentId`, `MenuName`, `MenuDescription`, `MenuModule`, `MenuIsShow`, `MenuIcon`, `MenuIconClass`, `MenuOrder`, `MenuIsAdmin`) VALUES
	(1, NULL, 'System', 'Manajemen System', NULL, 'Tidak', NULL, 'pe-7s-config', 99, 'Y'),
	(3, 1, 'Group', 'Menu dan aksi suatu kelompok pada suatu unit', 'group/Group', 'Tidak', NULL, NULL, 2, 'Y'),
	(4, 1, 'User', 'Pengguna sistem dengan multi group', 'user/User', 'Tidak', NULL, NULL, 3, 'Y'),
	(9, 1, 'Menu Module', 'Generate Menu Module', 'menu/Module', 'Tidak', NULL, NULL, 8, 'Y'),
	(10, NULL, 'Dashboard', 'Admin Dashboard', 'dashboard/Dashboard', 'Tidak', NULL, 'pe-7s-menu', 0, 'Y'),
	(12, NULL, 'Home', 'User Dashboard', 'home/Home', 'Tidak', NULL, 'pe-7s-menu', 0, 'N'),
	(33, NULL, 'Pengaturan User', 'Manajemen semua user yang terdaftar pada sistem', 'superadmin', 'Tidak', NULL, 'nav-link-icon fa fa-database', 0, 'Y'),
	(34, NULL, 'Pengaturan Role Group', 'Manajemen semua group yang terdaftar pada sistem', 'superadmin/roleuser', 'Tidak', NULL, 'nav-link-icon fa fa-edit', 1, 'Y'),
	(35, NULL, 'User', 'Manajemen akun yang memiliki role user', 'action/User', 'Ya', NULL, 'nav-icon mr-2 i-Administrator', 0, 'Y'),
	(36, NULL, 'User', 'User dapat melihat data user lainnya', 'action/User', 'Ya', NULL, 'nav-icon mr-2 i-Administrator', 0, 'N');

-- Dumping structure for table bsi-helpdesk.core_menu_action
CREATE TABLE IF NOT EXISTS `core_menu_action` (
  `MenuActionId` int NOT NULL AUTO_INCREMENT,
  `MenuActionMenuId` int DEFAULT NULL,
  `MenuActionName` varchar(100) DEFAULT NULL,
  `MenuActionFunction` varchar(100) DEFAULT NULL,
  `MenuActionSegmen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`MenuActionId`),
  UNIQUE KEY `UNIQUE_MENU` (`MenuActionMenuId`,`MenuActionSegmen`),
  KEY `FK_ci_dummy_menu_aksi` (`MenuActionMenuId`),
  CONSTRAINT `FK_sys_menu_action_menu` FOREIGN KEY (`MenuActionMenuId`) REFERENCES `core_menu` (`MenuId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table bsi-helpdesk.core_menu_action: ~25 rows (approximately)
REPLACE INTO `core_menu_action` (`MenuActionId`, `MenuActionMenuId`, `MenuActionName`, `MenuActionFunction`, `MenuActionSegmen`) VALUES
	(1, 1, 'View', NULL, NULL),
	(6, 3, 'View', 'index', 'group/Group/index'),
	(7, 3, 'Add', 'add', 'group/Group/add'),
	(8, 3, 'Update', 'update', 'group/Group/update'),
	(9, 3, 'Delete', 'delete', 'group/Group/delete'),
	(10, 4, 'View', 'index', 'user/User/index'),
	(11, 4, 'Add', 'add', 'user/User/add'),
	(12, 4, 'Update', 'update', 'user/User/update'),
	(13, 4, 'Delete', 'delete', 'user/User/delete'),
	(26, 9, 'View', 'index', NULL),
	(27, 9, 'Add', 'add', NULL),
	(28, 9, 'Update', 'update', NULL),
	(29, 9, 'Delete', 'delete', NULL),
	(128, 3, 'Ajax', 'ajax', 'group/Group/ajax'),
	(129, 4, 'Ajax', 'ajax', 'user/User/ajax'),
	(130, 10, 'View', 'index', 'dashboard/Dashboard/index'),
	(131, 12, 'View', 'index', 'home/Home/index'),
	(188, 33, 'Add Process', 'insert', 'superadmin/user/insert'),
	(189, 33, 'Add View', 'add', 'superadmin/user/add'),
	(190, 35, 'Add View', 'create', 'action/user/create'),
	(191, 35, 'Add Process', 'store', 'action/user/store'),
	(192, 35, 'Edit View', 'edit', 'action/user/edit'),
	(193, 35, 'Edit Process', 'update', 'action/user/update'),
	(194, 35, 'Delete Process', 'destroy', 'action/user/destroy'),
	(195, 35, 'Detail View', 'show', 'action/user/show');

-- Dumping structure for table bsi-helpdesk.core_role
CREATE TABLE IF NOT EXISTS `core_role` (
  `roleId` tinyint NOT NULL DEFAULT '0',
  `roleNama` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`roleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table bsi-helpdesk.core_role: ~6 rows (approximately)
REPLACE INTO `core_role` (`roleId`, `roleNama`) VALUES
	(0, 'Super Admin'),
	(1, 'Mahasiswa'),
	(2, 'Dosen'),
	(3, 'lab'),
	(4, 'Admin'),
	(5, 'User');

-- Dumping structure for table bsi-helpdesk.core_sessions
CREATE TABLE IF NOT EXISTS `core_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table bsi-helpdesk.core_sessions: 32 rows
/*!40000 ALTER TABLE `core_sessions` DISABLE KEYS */;
REPLACE INTO `core_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('99emksabj0f57fuesi6ebs1e6o4glu75', '::1', 1722565997, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323536353939363b),
	('kasqjgsgim8f0on3ecnb8kft590j1nvm', '::1', 1722565996, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323536353939363b),
	('m9nl6skvn6k1ohqp3i8dmr49mk4tverf', '::1', 1722521425, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323532313432353b),
	('qbbgfdgsh5iu1k9hh99n7baeae209rti', '::1', 1722521425, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323532313432353b),
	('6ogg8om0lj92vlmbue1qlas0vfv8v2et', '::1', 1722517613, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323531373631333b),
	('470brcki4cv5ip875o6nuv6mad3nkoau', '::1', 1722515712, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323531353731323b),
	('ahbcp3tn8cfa4b7h8t5jqn2kbt267549', '::1', 1722516069, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323531363036393b),
	('ejd4hjk28pibd1et9o2s5tsmfbovmgir', '::1', 1722515503, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323531353530333b),
	('ltg79bodu5tl40f5aplj83c8ot98qkgt', '::1', 1722515082, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323531353038323b),
	('7936mjjrmq396sbibjs1np4c1dpgq8hf', '::1', 1722513554, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323531333535343b),
	('k5dvghhv2mk62u6d4pe6u7g63ikvs7o0', '::1', 1722513154, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323531333135343b),
	('09jvtfi8rqkgosmai3ecqncdee9vfp30', '::1', 1722507274, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323530373237343b),
	('h5juoui41q0dru5rtjrrj1moogmlhtl5', '::1', 1722506966, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323530363936363b),
	('d8c0p1dvi1vuspeq41njksco5h30ufcd', '::1', 1722502423, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323530323432333b),
	('qm7q1557bhnq78j521tiejphh27j0892', '::1', 1722501854, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323530313835343b),
	('fdsjlaa37r5op7qcib5bnfndi7vsg7a7', '::1', 1722500898, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323530303839383b),
	('jcona009nk2pdid6k3tvcntf902addif', '::1', 1722500589, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323530303538393b),
	('dk7d3jodo8atkcnps5no3v8bbcu693vc', '::1', 1722498930, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323439383933303b),
	('ph39p7bmo30tf9jl5ov4f6ct1pffkj6r', '::1', 1721197615, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139373537353b),
	('iu8itj2n7g13kqur5168pc3679039b8m', '::1', 1721197575, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139373537353b),
	('ehb36ok6qi14fsjmgum3eoubrl1apa07', '::1', 1721189392, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313138393339323b),
	('gnm0plug1i9k0s5jpcivejftu2ohmtrp', '::1', 1721190354, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139303335343b),
	('6el62sstvcv2jrqmdec7oa17g21ho6fq', '::1', 1721190673, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139303637333b),
	('oriva38lqk3vvnd6h992tecd55efjq4e', '::1', 1721190975, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139303937353b),
	('bdlhcimkvgb3bs9e16rp9vic09uqd5uv', '::1', 1721191277, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139313237373b),
	('btn29bb0cc5c0eu5vhec03a3karc2t2p', '::1', 1721191627, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139313632373b),
	('pilshalcu3dglm2obdn30svjqbptqvi4', '::1', 1721194419, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139343431393b),
	('r68fammf7svn4ntkd2s184dck07vlk5d', '::1', 1721194987, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139343938373b),
	('qki4unq3ngjm7fnjm546oelqkiin2nj9', '::1', 1721195438, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139353433383b),
	('l39gnro3ocnshhjkhgm6ct82ehop986i', '::1', 1721196228, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139363232383b),
	('stagt9ig3odku188qr36nvivnepfbh21', '::1', 1721196535, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139363533353b),
	('c7e8250fh2ij514c5r97mflgle517r0e', '::1', 1721196882, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732313139363838323b);
/*!40000 ALTER TABLE `core_sessions` ENABLE KEYS */;

-- Dumping structure for table bsi-helpdesk.core_user
CREATE TABLE IF NOT EXISTS `core_user` (
  `UserId` int NOT NULL AUTO_INCREMENT,
  `UserRealName` varchar(250) DEFAULT NULL,
  `UserName` varchar(150) DEFAULT NULL,
  `UserEmail` varchar(150) DEFAULT NULL,
  `UserPassword` varchar(80) DEFAULT NULL,
  `UserWa` varchar(20) DEFAULT NULL,
  `UserKey` varchar(100) DEFAULT NULL,
  `UserFoto` varchar(250) DEFAULT NULL,
  `UserIsActive` enum('1','0') DEFAULT '1',
  `UserRoleId` tinyint DEFAULT NULL,
  `UserBanned` tinyint(1) DEFAULT '0',
  `UserBanText` text,
  `UserLastIp` varchar(45) DEFAULT NULL,
  `UserLastLogin` datetime DEFAULT NULL,
  `UserPassUpdatedUser` varchar(255) DEFAULT NULL,
  `UserPassUpdatedTime` datetime DEFAULT NULL,
  `UserAddUser` varchar(255) DEFAULT NULL,
  `UserAddTime` datetime DEFAULT NULL,
  `UserUpdateUser` varchar(255) DEFAULT NULL,
  `UserUpdateTime` datetime DEFAULT NULL,
  `UserNewPasswordKey` varchar(255) DEFAULT NULL,
  `UserNewPasswordRequested` datetime DEFAULT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `NewIndex1` (`UserName`),
  KEY `FK_sys_userrole` (`UserRoleId`),
  CONSTRAINT `core_user_ibfk_1` FOREIGN KEY (`UserRoleId`) REFERENCES `core_role` (`roleId`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table bsi-helpdesk.core_user: ~2 rows (approximately)
REPLACE INTO `core_user` (`UserId`, `UserRealName`, `UserName`, `UserEmail`, `UserPassword`, `UserWa`, `UserKey`, `UserFoto`, `UserIsActive`, `UserRoleId`, `UserBanned`, `UserBanText`, `UserLastIp`, `UserLastLogin`, `UserPassUpdatedUser`, `UserPassUpdatedTime`, `UserAddUser`, `UserAddTime`, `UserUpdateUser`, `UserUpdateTime`, `UserNewPasswordKey`, `UserNewPasswordRequested`) VALUES
	(1, 'Administrator', 'admin', 'admin@uad', 'dqpTmQCx4cXkN3JfznB3YewaIDya4NnIuqUEnjUGqwVBaaIcBa5di', '08112500800', NULL, 'admin.png', '1', 0, 0, NULL, '114.79.32.220', '2023-02-24 09:47:44', 'admin', '2016-02-03 03:24:30', 'root', '2013-07-04 10:43:46', 'admin', '2017-01-24 14:06:50', NULL, NULL),
	(2, 'John Doe', 'jhdoe', 'jhdoe@email.com', 'MAmIDKWwFVgFY4ysqcd/1OI7pP2p1I5xre.5ytmtDK.X/Mq5z5qDK', NULL, NULL, NULL, '1', NULL, 0, NULL, '127.0.0.1', '2021-04-19 11:35:01', NULL, NULL, NULL, '2021-04-17 12:45:32', NULL, NULL, NULL, NULL);

-- Dumping structure for table bsi-helpdesk.core_user_autologin
CREATE TABLE IF NOT EXISTS `core_user_autologin` (
  `key_id` char(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  `user_agent` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `last_ip` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`),
  KEY `FK_autologin_user` (`user_id`),
  CONSTRAINT `FK_autologin_user` FOREIGN KEY (`user_id`) REFERENCES `core_user` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- Dumping data for table bsi-helpdesk.core_user_autologin: ~0 rows (approximately)
REPLACE INTO `core_user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
	('', 2, '2', '2', '0000-00-00 00:00:00');

-- Dumping structure for table bsi-helpdesk.core_user_group
CREATE TABLE IF NOT EXISTS `core_user_group` (
  `UserGroupId` int NOT NULL AUTO_INCREMENT,
  `UserGroupUserId` int NOT NULL,
  `UserGroupGroupId` int NOT NULL,
  `UserGroupIsDefault` enum('Ya','Tidak') DEFAULT 'Tidak',
  PRIMARY KEY (`UserGroupId`),
  UNIQUE KEY `UNIQUE` (`UserGroupUserId`,`UserGroupGroupId`),
  KEY `FK_ci_user_group` (`UserGroupUserId`),
  KEY `FK_ci_user_groupa` (`UserGroupGroupId`),
  CONSTRAINT `core_user_group_ibfk_1` FOREIGN KEY (`UserGroupUserId`) REFERENCES `core_user` (`UserId`) ON UPDATE CASCADE,
  CONSTRAINT `core_user_group_ibfk_2` FOREIGN KEY (`UserGroupGroupId`) REFERENCES `core_group` (`GroupId`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

-- Dumping data for table bsi-helpdesk.core_user_group: ~2 rows (approximately)
REPLACE INTO `core_user_group` (`UserGroupId`, `UserGroupUserId`, `UserGroupGroupId`, `UserGroupIsDefault`) VALUES
	(1, 1, 1, 'Ya'),
	(2, 2, 2, 'Ya');

-- Dumping structure for table bsi-helpdesk.guests
CREATE TABLE IF NOT EXISTS `guests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `unit_bsi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jenis_keperluan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `waktu_selesai` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=990 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.guests: ~30 rows (approximately)
REPLACE INTO `guests` (`id`, `nama`, `telp`, `instansi`, `unit_bsi`, `jenis_keperluan`, `keperluan`, `status`, `created_at`, `waktu_selesai`) VALUES
	(109, 'Mr. Derick Emmerich', '085713667446', 'Stoltenberg-Padberg', 'BSI 2', 'Aduan', 'perspiciatis suscipit quo aliquam qui ut qui ducimus molestiae ducimus', 'Pending', '2023-11-06 12:52:40', '2024-08-26 07:08:00'),
	(114, 'Dr. Ariel Kirlin', '085713667446', 'Gutmann, Spencer and Rutherford', 'BSI 2', 'Aduan', 'maiores delectus ipsam possimus amet officiis nihil ut excepturi quia', 'Pending', '2024-06-14 14:28:11', '2024-08-26 07:08:00'),
	(159, 'Mr. Gilbert Waters DVM', '085713667446', 'Barrows Group', 'BSI 1', 'Aduan', 'quo blanditiis non reprehenderit delectus hic omnis voluptatem deserunt quibusdam', 'Pending', '2023-09-24 09:42:49', '2024-08-26 07:08:00'),
	(169, 'Devon Dibbert', '085713667446', 'Denesik, Marquardt and Zulauf', 'BSI 4', 'Tamu', 'iusto et quia omnis deleniti mollitia sunt nesciunt voluptatem id', 'Pending', '2023-12-08 21:29:21', '2024-08-26 07:08:00'),
	(207, 'Kevon Kunde', '085713667446', 'Koss Group', 'BSI 2', 'Aduan', 'molestiae pariatur quis eos vel in aut aliquam magnam hic', 'Pending', '2024-05-11 10:21:19', '2024-08-26 07:08:00'),
	(216, 'Mr. Reese Larson Sr.', '085713667446', 'Schoen PLC', 'BSI 2', 'Tamu', 'numquam delectus mollitia et et voluptatibus quam quidem eveniet quaerat', 'Pending', '2024-04-29 05:29:13', '2024-08-26 07:08:00'),
	(292, 'Corrine Wunsch II', '085713667446', 'Lynch, Bins and Hilpert', 'BSI 3', 'Tamu', 'aliquid asperiores pariatur voluptates voluptas quae rerum aut velit modi', 'Pending', '2023-11-25 14:08:54', '2024-08-26 07:08:00'),
	(330, 'Rolando Schneider', '085713667446', 'Stehr-Littel', 'BSI 3', 'Tamu', 'et eveniet et maxime deserunt soluta magni ut est suscipit', 'Pending', '2023-10-10 08:10:05', '2024-08-26 07:08:00'),
	(364, 'Darlene Wunsch', '085713667446', 'Schaden Group', 'BSI 4', 'Aduan', 'repellendus porro laborum in nisi occaecati necessitatibus quas voluptas est', 'Pending', '2023-11-01 12:42:48', '2024-08-26 07:08:00'),
	(371, 'Mr. Brent Hauck', '085713667446', 'Lowe LLC', 'BSI 1', 'Tamu', 'animi molestiae nihil quia id ipsa est perspiciatis consectetur deleniti', 'Pending', '2023-09-25 19:37:31', '2024-08-26 07:08:00'),
	(395, 'Dr. Pat Quigley', '085713667446', 'Bruen and Sons', 'BSI 1', 'Tamu', 'cumque iusto nihil nemo esse quasi sint veritatis quia praesentium', 'Pending', '2024-04-07 05:55:45', '2024-08-26 07:08:00'),
	(425, 'Theresia Hudson IV', '085713667446', 'Braun, Mills and Ritchie', 'BSI 5', 'Aduan', 'quam omnis cupiditate qui cupiditate et officiis ut velit tempore', 'Pending', '2024-06-26 15:04:07', '2024-08-26 07:08:00'),
	(462, 'Toby Marquardt', '085713667446', 'Crona, Spinka and Wehner', 'BSI 1', 'Tamu', 'qui dolorem deserunt quis molestiae temporibus optio nostrum impedit enim', 'Pending', '2023-12-03 09:05:16', '2024-08-26 07:08:00'),
	(492, 'Norwood Tillman', '085713667446', 'Bailey Group', 'BSI 4', 'Aduan', 'commodi eum perferendis illum corrupti recusandae suscipit sunt dolor eligendi', 'Pending', '2023-11-14 08:29:44', '2024-08-26 07:08:00'),
	(496, 'Kara Oberbrunner', '085713667446', 'Kulas-Kutch', 'BSI 1', 'Teknis', 'minima doloribus natus dolores corrupti ut ipsa quae dolorem quibusdam', 'Pending', '2024-07-11 10:01:24', '2024-08-26 07:08:00'),
	(524, 'Dr. Elvis Weimann DVM', '085713667446', 'Stanton and Sons', 'BSI 1', 'Tamu', 'molestiae deleniti quos error quis iusto accusamus et deserunt exercitationem', 'Pending', '2023-10-31 16:03:59', '2024-08-26 07:08:00'),
	(551, 'Evans Fisher', '085713667446', 'Wisoky, Waelchi and Reinger', 'BSI 3', 'Teknis', 'nemo cupiditate laboriosam unde perferendis ab est autem exercitationem est', 'Pending', '2024-05-09 09:45:58', '2024-08-26 07:08:00'),
	(589, 'Mr. Brook Cummings', '085713667446', 'Lesch Group', 'BSI 5', 'Teknis', 'tempora commodi dolores quia voluptatem unde deleniti vel ad qui', 'Pending', '2024-02-24 13:53:04', '2024-08-26 07:08:00'),
	(683, 'Audrey Rippin', '085713667446', 'Witting LLC', 'BSI 1', 'Tamu', 'id mollitia voluptatibus ea veritatis hic omnis nemo vero iste', 'Pending', '2024-05-20 09:57:01', '2024-08-26 07:08:00'),
	(729, 'Prof. Donna Lubowitz', '085713667446', 'Stehr-Upton', 'BSI 2', 'Tamu', 'earum consequuntur voluptas illum iusto omnis et ratione molestiae velit', 'Pending', '2023-11-03 22:05:20', '2024-08-26 07:08:00'),
	(754, 'Emmy Tillman', '085713667446', 'Rutherford-Beahan', 'BSI 1', 'Aduan', 'fugiat sit aut laborum recusandae expedita incidunt iure occaecati voluptas', 'Pending', '2023-09-12 05:56:38', '2024-08-26 07:08:00'),
	(766, 'Kiara Cartwright PhD', '085713667446', 'Nolan LLC', 'BSI 2', 'Tamu', 'qui rerum porro modi enim voluptas provident velit et explicabo', 'Pending', '2024-01-09 13:22:35', '2024-08-26 07:08:00'),
	(849, 'Ona Wyman Sr.', '085713667446', 'Mohr Group', 'BSI 3', 'Teknis', 'dolorum aspernatur veritatis eum atque in aliquid voluptas tenetur sed', 'Pending', '2023-11-15 17:37:21', '2024-08-26 07:08:00'),
	(856, 'Jillian Koepp PhD', '085713667446', 'Rice, Beier and O\'Hara', 'BSI 5', 'Teknis', 'dolorem vel sed error qui ipsam labore id qui et', 'Pending', '2024-06-25 07:58:14', '2024-08-26 07:08:00'),
	(878, 'Prof. Jaime Steuber II', '085713667446', 'Lueilwitz, Halvorson and Schamberger', 'BSI 3', 'Aduan', 'quisquam sunt quisquam ut natus aut aut error ut id', 'Pending', '2024-05-07 00:33:00', '2024-08-26 07:08:00'),
	(928, 'Fredy Schuster', '085713667446', 'Donnelly-Langworth', 'BSI 1', 'Teknis', 'voluptatem voluptatem repellendus voluptates laudantium beatae quo esse alias nihil', 'Pending', '2023-08-31 00:45:33', '2024-08-26 07:08:00'),
	(973, 'Vernice King', '085713667446', 'Macejkovic-Kirlin', 'BSI 4', 'Teknis', 'autem et aut possimus cum ut animi et velit sint', 'Pending', '2023-10-14 14:53:50', '2024-08-26 07:08:00'),
	(974, 'Prof. Brooks Halvorson', '085713667446', 'Hermann and Sons', 'BSI 1', 'Tamu', 'magnam saepe nostrum perferendis laboriosam architecto consectetur ratione dolor non', 'Pending', '2023-12-19 19:47:30', '2024-08-26 07:08:00'),
	(988, 'Dr. Tiana Littel', '085713667446', 'Bradtke, Cremin and Ferry', 'BSI 3', 'Teknis', 'quia omnis animi a nobis tenetur commodi impedit corporis vitae', 'Pending', '2024-05-06 15:04:20', '2024-08-26 07:08:00'),
	(989, 'Bernita Ledner', '085713667446', 'Cruickshank Inc', 'BSI 3', 'Aduan', 'cumque est corporis qui accusantium culpa dolores fuga sunt non', 'Pending', '2024-03-19 21:27:33', '2024-08-26 07:08:00');

-- Dumping structure for table bsi-helpdesk.items
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table bsi-helpdesk.items: ~12 rows (approximately)
REPLACE INTO `items` (`id`, `name`, `description`) VALUES
	(1, 'Item 1', 'Deskripsi untuk Item 1'),
	(2, 'Item 2', 'Deskripsi untuk Item 2'),
	(3, 'Item 3', 'Deskripsi untuk Item 3'),
	(5, 'Item 5', 'Deskripsi untuk Item 5'),
	(6, 'Itemu', 'babayooo'),
	(7, 'Arman Arduino', 'ss'),
	(8, 'Asep', 'dambar'),
	(9, 'Amar Magang Jogja', 'assasin'),
	(10, 'Rahmat', 'Asen'),
	(11, 'aaaa', 'ssasaa'),
	(12, 'ssssss', 'ssasaa'),
	(13, 'aaa', 'ccc');

-- Dumping structure for table bsi-helpdesk.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `version` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table bsi-helpdesk.migrations: ~0 rows (approximately)
REPLACE INTO `migrations` (`version`) VALUES
	(3);

-- Dumping structure for table bsi-helpdesk.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.roles: ~2 rows (approximately)
REPLACE INTO `roles` (`id`, `role_name`) VALUES
	(1, 'Super Admin'),
	(2, 'Admin'),
	(3, 'Staff');

-- Dumping structure for table bsi-helpdesk.sys_sessions
CREATE TABLE IF NOT EXISTS `sys_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.sys_sessions: ~141 rows (approximately)
REPLACE INTO `sys_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('04qp1onv0bptc2a3sbrua0gju7d5vl4b', '::1', 1723606576, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630363537363b),
	('08cgkq0o7tu9vk5j3b9h1ccj5jhh8hrf', '::1', 1724312631, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331323633313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('0h7ogc81uqq9849dt615aklj1832hh14', '::1', 1723752063, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735323036333b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('0m9r67iic3gi88mfpc6ptdc3ob6320vg', '::1', 1724291944, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343239313934343b),
	('0r0lgkqlpm0iq9jq0pmc0kejja77kqhv', '::1', 1724168683, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136383638333b757365725f69647c733a313a2231223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('0ssk9n0f1lc4sag1dtg9kpmkrdihk07k', '::1', 1724312311, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331323331313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('10o19ft0tt14ehkorq7qfpl5c3qvn37e', '::1', 1724622701, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343632323638303b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b746f6173745f6d6573736167657c733a32333a224461746120626572686173696c2064697570646174652e223b5f5f63695f766172737c613a313a7b733a31333a22746f6173745f6d657373616765223b733a333a226f6c64223b7d),
	('12jp5g6i6hejfifpgra5ht4kcta351lc', '::1', 1724166637, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136363633373b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('1741fg0cdp3qh4jeqltbne46hja59elb', '::1', 1724307656, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330373635363b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('1em11r9cf8qajmovd2457jcvo0juo7f5', '::1', 1724097907, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039373930373b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('1ihd0s7iob333rdlvaqjpe2kpld6605j', '::1', 1724227434, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343232373432373b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('1lrmnnn91futrqq8g6nb08bkilrn98id', '::1', 1724203568, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230333433383b6572726f727c733a32353a22456d61696c20617461752070617373776f72642073616c6168223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
	('1sg380f4jvug0bcqogbt8ved4o3g23j9', '::1', 1723756645, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735363634353b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('2idbb12gbiclmkfiiqd0015f73p6q66s', '::1', 1724306841, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330363834313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('2jnokhuenk6rfc6k64kjuga02hrpem4n', '::1', 1723690565, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639303536353b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('2kplgb47u7ikgsc6drp9rm4aq9vnobji', '::1', 1723691944, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639313934343b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('2p0efln65d77ah37bq82jhlfld4idtr8', '::1', 1724167930, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136373933303b757365725f69647c733a313a2231223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('2r88p3kmsa2j89ii2r4cnl6ot5n3b84k', '::1', 1724311776, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331313737363b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('33q1b2nqq8g8rs7e8jlft5o14hss68gp', '::1', 1724168351, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136383335313b757365725f69647c733a313a2231223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('3ibch0t7s74efr13oi44iif7etqodhp8', '::1', 1724309450, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330393435303b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('3kr1poe2bnc5n9345u5jocsh4ch7caq1', '::1', 1724164071, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136343037313b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('3l1nu5j3ddv50buql106n07rtlq13nv2', '::1', 1723754828, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735343832383b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('3usc3meigh936unmnuf5r8foknvestuf', '::1', 1724210094, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231303039343b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32313a225573657220626572686173696c2064696861707573223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('4n03fdarjkeiosd20qo3d51nmco6b6v0', '::1', 1724211555, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231313535353b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('4tcq9b4i51nuero440cqmftdlqvaimjm', '::1', 1723751112, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735313131323b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('51u58f8htpeupfvfa5uddn7gl71ajjip', '::1', 1724210451, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231303435313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32313a225573657220626572686173696c2064696861707573223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('53p45bnk90d568anc25hj127heo7jvon', '::1', 1723754205, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735343230353b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('5ath0mqsgmgvjfk9c6chme8vl8es59ov', '::1', 1724209113, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230393131333b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a2244617461207375636365737366756c6c7920736176656421223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('68lf5ubnblc887hdrifnj62ceojmqkt7', '::1', 1724381483, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343338313438333b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a33363a224a656e6973206b657065726c75616e20626572686173696c206469706572626172756921223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('6jbk0fdkahen7f06mn1pd1f3kff4muvo', '::1', 1724166939, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136363933393b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('6ld8bigj90p45f1d35kup5vpvu28n8et', '::1', 1724303990, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330333939303b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('6nrdmgsc9ptl04r6t6h6pe6bf341fg0p', '::1', 1724216241, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231363232333b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a333a7b733a373a2273756363657373223b733a333a226f6c64223b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d6e6f74696669636174696f6e7c733a373a224572726f723a20223b616c6572745f747970657c733a363a2264616e676572223b),
	('76bn3mku00pbh60i3lhgh2j3s6qpv1r0', '::1', 1724098629, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039383632393b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('7a7nl8557icolhrk1npdnpvgn0l6bsdr', '::1', 1724631222, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343633313139313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f7469665f6d6573736167657c613a333a7b733a343a22616b7369223b623a313b733a383a2274696e64616b616e223b733a31363a226d656d70657262617275692064617461223b733a353a22706573616e223b733a32333a224461746120626572686173696c2064697570646174652e223b7d5f5f63695f766172737c613a313a7b733a31333a226e6f7469665f6d657373616765223b733a333a226f6c64223b7d),
	('7f72ott7stpd0ui4heqghl8g3rcbakpc', '::1', 1724095222, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039353232323b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('7hqgm8410cm9t2h5ael4ba5gc06j05fv', '::1', 1724379975, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343337393937353b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('7iv6uh2ipor8rpjk2h2a47v54leqom30', '::1', 1724098274, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039383237343b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('8k0hmo1h5f74tpqvcg1eet3q9gg9nqg2', '::1', 1724207981, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230373938313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32333a224461746120626572686173696c20646973696d70616e21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('8lgirv194baqs9i8pfrn8jnpnusi28pa', '::1', 1724622035, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343632323033353b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32333a224461746120626572686173696c2064697570646174652e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('90v225o5mr0417h9r50avrklgt170fkj', '::1', 1724164383, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136343338333b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('9883jh9t4nemt0qg1h1uuk9466lmmige', '::1', 1724313460, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331333237373b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('9e22s7ehsrgbqod6bdtk62jgp8hh1hhf', '::1', 1724380776, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343338303737363b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a33343a22476167616c206d656d7065726261727569206a656e6973206b657065726c75616e2e223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a363a2264616e676572223b),
	('9f8crmomvt5h9b7bjnmpctodp47ahplb', '::1', 1724622674, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343632323637343b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32333a224461746120626572686173696c2064697570646174652e223b5f5f63695f766172737c613a323a7b733a373a2273756363657373223b733a333a226f6c64223b733a31333a22746f6173745f6d657373616765223b733a333a226f6c64223b7d746f6173745f6d6573736167657c733a32333a224461746120626572686173696c2064697570646174652e223b),
	('9sfg2rvm0fg1h5gs434fdqa7tsp0r23m', '::1', 1724314123, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331343132333b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('a1jt7t2qdifii3q6ivj8urrnjbbojqat', '::1', 1723609830, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630393633363b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('aaljrnuglflg2e2kicfv5ed9obhbbidt', '::1', 1723755651, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735353635313b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('abh6ehis4a9m7pu3nfmtl5ab7knn3qdp', '::1', 1724215547, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231353534373b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('ahane5omfupcs4efmia54sn3g9j0l3dn', '::1', 1724308836, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330383833363b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('ajtipl72qdp40m3u9lpfet5e24ih7pam', '::1', 1724207205, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230373230353b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32333a224461746120626572686173696c20646973696d70616e21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('ak49l6cld3rvrohhun3qncj5eu4pk7d6', '::1', 1723606122, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630363132323b),
	('anu97vlac0aksva9j2ae2dtfgt5r89fh', '::1', 1723609636, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630393633363b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('aslrnio6erdsh37809qt9k3vs2sgobi5', '::1', 1724096908, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039363930383b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('b0sldbb7qkasg8arh4seg2qeb8tk7nle', '::1', 1724204644, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230343634343b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('bksgsj248gb9ifqj0qhghjqj3e1c3o2u', '::1', 1724209749, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230393734393b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a2244617461207375636365737366756c6c7920736176656421223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('bos5vh9ceo06ngj72c572jffomnebtf1', '::1', 1724304391, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330343339313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('bpkn4sf6qrmtmuujahdg110broacapt3', '::1', 1724312975, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331323937353b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('bqobppptlqrgoqc1cgnr7mvt34c3915f', '::1', 1724314500, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331343433303b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('bvmbl9034d11uvaud743fd3h1pr5ilfl', '::1', 1723751751, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735313735313b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('c01sm8c97b067sakj107dvjeghirn4hc', '::1', 1723765517, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333736353531373b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('cpflki542gmgb9trg5m8rm9mc8pubs7p', '::1', 1723607410, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630373431303b),
	('dih6i18aeavqj6b5u85k1fa3pbksusrr', '::1', 1723605464, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630353434313b757365725f69647c733a313a2231223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b),
	('dle270lnnsenhhd43j3pllj8c0a6lotp', '::1', 1723606903, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630363930333b),
	('dm7ojcai56v3pnqag9b16o5k2r3u0vsk', '::1', 1724227318, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343232373331383b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('ds8519rb27cnrsol61au3oqb9onms9gg', '::1', 1724165413, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136353431333b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('e0ctm21jsg5ddkmi56u9qirrilpohgpq', '::1', 1724096043, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039363034333b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('ehgpug4t0h8m2tpf6fsltciqf1ja0q6g', '::1', 1723708197, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333730383139373b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('ev4u1p398ju38a4qkrdud0f0htu251i8', '::1', 1723707562, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333730373536323b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('f45a5gv487ri1hpbaq5071rf8mg8sjlj', '::1', 1724378933, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343337383933333b757365725f69647c733a313a2232223b6e616d657c733a363a22427520555554223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('femia61g0rpamsgsdhfkdi7n45qtu5jn', '::1', 1724313804, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331333830343b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('fovop6d7fte5sa96bp3tbeig3kib9hu7', '::1', 1724381641, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343338313438343b757365725f69647c733a313a2232223b6e616d657c733a363a22427520555554223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a33363a224a656e6973206b657065726c75616e20626572686173696c206469706572626172756921223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('ft5fo1m066v8rn5r27kiobo9pda4sk6q', '::1', 1723708566, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333730383536363b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('g0sqholv97n4dvd0m24997rrsabkkjp3', '::1', 1723608583, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630383538333b757365725f69647c733a313a2231223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6572726f727c733a32383a22506572616e2070656e6767756e6120746964616b2064696b656e616c223b5f5f63695f766172737c613a323a7b733a353a226572726f72223b733a333a226f6c64223b733a373a2273756363657373223b733a333a226f6c64223b7d737563636573737c733a32313a225573657220626572686173696c2064696861707573223b),
	('g2q4t00v0osq7pj64cum3ohm6cbp1449', '::1', 1724213629, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231333632393b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('g32a1k3qbu6ed5bq4e6e18avkjfkb37t', '::1', 1723708898, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333730383838333b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('g3kd8f5moaduksc4mpu7pq835fsea2u4', '::1', 1724212194, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231323139343b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('gnfpmgiis78sm3s080vvh214h1s56bck', '::1', 1723751450, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735313435303b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('gs70rkbnkbjhvcm2e95l88q0m0uj5qpr', '::1', 1724212565, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231323536353b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('h0nbhd96uh1ar1jii3o5iakhfk08blhv', '::1', 1723753461, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735333436313b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('h4nc82ll4h1n0gm9gkhrhp7rb3h3t9mr', '::1', 1724303648, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330333634383b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('hbd9msuh4q63952mvui1bbcv8oklvsj8', '::1', 1724095591, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039353539313b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('hf2bhf9cdbb4klq06ii2j6pfek3vvpts', '::1', 1724098662, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039383632393b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('hf7co08inqkb6hs9s6ubsp2pj64sulkg', '::1', 1724311417, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331313431373b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('hqqbfjbs5hkkd9fo1nsu7vu6m7p95j0n', '::1', 1724305773, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330353737333b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('hquu9oe4hh0c601ij5o0h9k0lrabe7vb', '::1', 1724206804, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230363830343b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32333a224461746120626572686173696c20646973696d70616e21223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('hu24v1clbb3t0fg3nk9ep6q3osjbgsb4', '::1', 1723688692, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333638383639323b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('hukd14c93tik3t5lnmmora9fi64kr1qc', '::1', 1723605441, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630353434313b757365725f69647c733a313a2231223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b),
	('i5cusq7dgcn8jdv1ps33oaccuptc0lge', '::1', 1724621590, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343632313539303b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32333a224461746120626572686173696c2064697570646174652e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('i61543italqij3iesl35f6fnnkr72lnk', '::1', 1723752452, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735323435323b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('icq3vgeknbuuti73s5b9ueueav98lrcf', '::1', 1724212871, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231323837313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('icu13ol465c94c5vlth57m4d0cmokukb', '::1', 1723641721, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333634313730323b),
	('ihaiitd13d88quse7e1od5jlb65tmev0', '::1', 1724202810, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230323831303b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('iuk36nt7aievaeqh6i6jnp6rif0h6jst', '::1', 1723609261, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630393236313b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('iulpjgc9d158p79dh9655ct6f6turhkg', '::1', 1724595318, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343539353331383b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('j24d91b1hbl6nm70cru1pmnukardngl9', '::1', 1724631191, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343633313139313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('jgdjc7kmemfp8osv22spf36vak9vcd74', '::1', 1723752777, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735323737373b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('jj37bdlgn8a8d1hu6vf7iu2ct2me6593', '::1', 1724305472, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330353437323b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('jnris177r4tmkumfmds4dtpn74ku5rva', '::1', 1724333028, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343333333032383b),
	('jqf7cq2c1hoavrvov38iapii0k691cpt', '::1', 1724210826, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231303832363b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32313a225573657220626572686173696c2064696861707573223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('jtrcdfbgcbfu1apugvbn43nma32pi177', '::1', 1724213213, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231333231333b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('kfsgsngiu2b46nt6tshu49lbdor7fmub', '::1', 1723753082, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735333038323b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('kkjqgtfrcemlmqfic463trck697v5b4m', '::1', 1723706743, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333730363734333b),
	('kmdeuqpoo9ctgqi6qth8ug7jq300qvhg', '::1', 1724313277, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331333237373b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('l6nblse7im9i4h2kl003r5pfht869b42', '::1', 1724214227, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231343232373b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('l9r7c5b6aq9jqq7mrh3vmqefiplgregu', '::1', 1723707223, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333730373232333b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('lofm3rb449vebpoa3tf1oqrd5rr09jmb', '::1', 1723770445, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333737303335353b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('lrk9iu2gnb5nhbd818oi0a7k9a20nl0b', '::1', 1724205056, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230353035363b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('lsniq0v49pfhrhgnk2dgupsh1na2001c', '::1', 1724216223, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231363232333b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a333a7b733a373a2273756363657373223b733a333a226f6c64223b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d6e6f74696669636174696f6e7c733a373a224572726f723a20223b616c6572745f747970657c733a363a2264616e676572223b),
	('md7kjeej2mgn5n9rlgjha9uckth1ebcr', '::1', 1723708883, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333730383838333b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('mg7h0jb9lc5ns0ohg1fr2emlugl48rn3', '::1', 1724094871, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039343837313b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('mlg6a8n1j0847jjn1raa5ebip8kmmoe4', '::1', 1724310371, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331303337313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('n62r2jpsudkieqk0t4trd3c30r9om73q', '::1', 1723691432, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639313433323b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('n9q6o90pe247eqtq1170m99lr483f846', '::1', 1723690954, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639303935343b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('ngkhe1cvi0s6h0g5a81ehrdnr15spt3j', '::1', 1724206500, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230363530303b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('nkgspvolvnanuh959lous198mhgqif71', '::1', 1724305164, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330353136343b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('nrt3itms45cel20fub0pdjeg7ttsdjqi', '::1', 1723770355, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333737303335353b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('o0s2drt5krllikfb1205rv67bg1vqig1', '::1', 1724596812, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343539363633303b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32313a225573657220626572686173696c2064696861707573223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('o1inkvbmgb30vt9459p31s2cefj2ikk6', '::1', 1723754508, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735343530383b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('ogd3g0pkl2dmo1untp2att2tpi5pqoq8', '::1', 1723691944, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639313934343b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('otsqjuv114e6e6o62rm1dqf9j0mqnf58', '::1', 1724306367, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330363336373b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('pfu9cfbicfdgltblf7pu4o14h5121m3s', '::1', 1724309139, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330393133393b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('pkdbp7ne28i6dijdbllgbbtov9efng7l', '::1', 1724596630, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343539363633303b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('po56b1p6ehci4833lpp9hkevs2d0gkvn', '::1', 1723690043, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639303034333b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('pp48pfjsch9utqvf5o6tch0hls6orcv0', '::1', 1724214561, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231343536313b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('qbi5ksrtmhhofgdmkcvj7920d31vpfr7', '::1', 1724310845, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331303834353b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('qfbqif1v55jludoifihe91u2ko6amq27', '::1', 1724211886, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231313838363b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
	('qi0kd48ame23cl23qrh1qhdr0fjd96j2', '::1', 1724309915, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330393931353b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('qqsfdgik7bcs7479bhvrqdjkpd4prjfo', '::1', 1724380376, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343338303337363b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('qu411726da9rgfus0k0gopuc8o3c6j9i', '::1', 1724304693, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330343639333b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('r5h9il4s0ej1bpdkdfcrmk72ek873p6a', '::1', 1724167573, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136373537333b757365725f69647c733a313a2231223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('rk76n27t473vuta3sq6ieahgl1lr65em', '::1', 1723607922, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630373932323b),
	('s08o0gcpbcojj6ju4adosdt2f102mkhh', '::1', 1724308236, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343330383233363b),
	('s3csd20v7g7sd5ava6niph9elg12slcg', '::1', 1724378547, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343337383534373b757365725f69647c733a313a2232223b6e616d657c733a363a22427520555554223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('sp7ij0l5k4a2klj4jqnn5vvdmn1cd271', '::1', 1723756697, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333735363637333b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('stirdsrb04h7nv8uqoi7p0kkgnn2j8d2', '::1', 1724166234, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136363233343b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('surscihcm1rrd1t6fdq04s4p48voirj3', '::1', 1724215853, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231353835333b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a333a7b733a373a2273756363657373223b733a333a226f6c64223b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d6e6f74696669636174696f6e7c733a373a224572726f723a20223b616c6572745f747970657c733a363a2264616e676572223b),
	('td7fl270lejskre6lugbkl6ac5tgdisq', '::1', 1724168810, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136383638333b757365725f69647c733a313a2231223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('tfe34mvk4atau0ie45fcsge13adkt4fj', '::1', 1724097343, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343039373334333b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('tgbmmvaif0koeqnorpkp1a64kc7r21im', '::1', 1724165844, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343136353834343b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('uaqsjq5qk8ga2fgh6rpqilltbijp5nle', '::1', 1723608249, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630383234393b757365725f69647c733a313a2231223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6572726f727c733a32383a22506572616e2070656e6767756e6120746964616b2064696b656e616c223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
	('ve5qgpk4ul81hmn5mma9leh16r0q5ufl', '::1', 1724314430, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343331343433303b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b),
	('vgvbjgssvjpc3ceq7593vb359j5853ev', '::1', 1724203126, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343230333132363b757365725f69647c733a323a223132223b6e616d657c733a363a22537461666620223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b6e6f74696669636174696f6e7c733a32333a22506573616e20626572686173696c2064696b6972696d21223b5f5f63695f766172737c613a323a7b733a31323a226e6f74696669636174696f6e223b733a333a226f6c64223b733a31303a22616c6572745f74797065223b733a333a226f6c64223b7d616c6572745f747970657c733a373a2273756363657373223b),
	('vidsk5knhpd485e5110k195bjm9lgk4m', '::1', 1724215194, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732343231353139343b757365725f69647c733a323a223134223b6e616d657c733a31313a2253757065722041646d696e223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b756e69745f6273697c4e3b6c6f676765645f696e7c623a313b737563636573737c733a32343a225573657220626572686173696c2064697065726261727569223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d);

-- Dumping structure for table bsi-helpdesk.units
CREATE TABLE IF NOT EXISTS `units` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.units: ~5 rows (approximately)
REPLACE INTO `units` (`id`, `name`) VALUES
	(7, 'BSI 1'),
	(8, 'BSI 2'),
	(9, 'BSI 3'),
	(11, 'BSI 5'),
	(12, 'BSI 4');

-- Dumping structure for table bsi-helpdesk.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` int DEFAULT NULL,
  `unit_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `fk_users_unit_id` (`unit_id`),
  CONSTRAINT `fk_users_unit_bsi` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_users_unit_id` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.users: ~3 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `password`, `email`, `role_id`, `unit_id`) VALUES
	(2, 'Bu UUT', '$2y$10$0HPpUBOQ1fnqjndhqRJNouPdT8SnAumB8NdqihfEGIlxC9YJioOBm', 'admin@example.com', 2, 12),
	(12, 'Staff ', '$2y$10$8yadXrrVpC9tnhplkRUKmeBrFIxMz3oufiRkOE4UnDNTJgwrO.B7G', 'staff@example.com', 3, 12),
	(14, 'Super Admin', '$2y$10$jA2YFB5luIkfvnXL4xu/C.zqIY/s7/Zihgaa5n6Ue2OviKpTQbwEu', 'super@example.com', 1, 9);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
