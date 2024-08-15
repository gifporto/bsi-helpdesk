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
  `nama` varchar(100) NOT NULL,
  `telp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `unit_bsi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `waktu_selesai` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.guests: ~6 rows (approximately)
REPLACE INTO `guests` (`id`, `nama`, `telp`, `instansi`, `keperluan`, `unit_bsi`, `status`, `created_at`, `waktu_selesai`) VALUES
	(19, 'Amar Al Fatah', '085861209132', 'Biro Sistem Informasi', 'Teknis', '1', 'Proses', '2024-08-13 13:11:57', '2024-08-13 20:11:57'),
	(20, 'Rahmat Hidayat', '085861209132', 'Biro Sumber Daya Manusia', 'Aduan', '2', 'Selesai', '2024-08-13 13:12:13', '2024-08-13 20:12:13'),
	(21, 'Aditya Dika', '085861209132', 'PWM', 'Tamu', '3', 'ACC', '2024-08-13 13:12:34', '2024-08-13 20:12:34'),
	(22, 'Amar Al Fatah', '085861209132', '', 'Tamu', '4', 'ACC', '2024-08-13 13:13:16', '2024-08-13 20:13:16'),
	(24, 'Lalu Bagas', '085861209132', 'Biro Sistem Informasi', 'Aduan', '5', 'Proses', '2024-08-14 03:29:20', '2024-08-14 10:29:20'),
	(25, 'Rina Nose', '085861209132', 'Biro Sistem Informasi', 'Teknis', '6', 'Pending', '2024-08-14 03:29:47', '2024-08-14 10:29:47'),
	(26, 'Amar Al Fatah', '085861209132', 'TK 2 Jogja', 'Tamu', '1', 'ACC', '2024-08-15 02:35:51', '2024-08-15 09:35:51'),
	(27, 'Rahmat Hidayat', '085861209132', 'Biro Sumber Daya Manusia', 'Tamu', '1', 'ACC', '2024-08-15 03:10:32', '2024-08-15 10:10:32');

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

-- Dumping data for table bsi-helpdesk.sys_sessions: ~13 rows (approximately)
REPLACE INTO `sys_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('04qp1onv0bptc2a3sbrua0gju7d5vl4b', '::1', 1723606576, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630363537363b),
	('2jnokhuenk6rfc6k64kjuga02hrpem4n', '::1', 1723690565, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639303536353b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('2kplgb47u7ikgsc6drp9rm4aq9vnobji', '::1', 1723691944, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639313934343b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('a1jt7t2qdifii3q6ivj8urrnjbbojqat', '::1', 1723609830, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630393633363b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('ak49l6cld3rvrohhun3qncj5eu4pk7d6', '::1', 1723606122, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630363132323b),
	('anu97vlac0aksva9j2ae2dtfgt5r89fh', '::1', 1723609636, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630393633363b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('cpflki542gmgb9trg5m8rm9mc8pubs7p', '::1', 1723607410, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630373431303b),
	('dih6i18aeavqj6b5u85k1fa3pbksusrr', '::1', 1723605464, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630353434313b757365725f69647c733a313a2231223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b),
	('dle270lnnsenhhd43j3pllj8c0a6lotp', '::1', 1723606903, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630363930333b),
	('g0sqholv97n4dvd0m24997rrsabkkjp3', '::1', 1723608583, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630383538333b757365725f69647c733a313a2231223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6572726f727c733a32383a22506572616e2070656e6767756e6120746964616b2064696b656e616c223b5f5f63695f766172737c613a323a7b733a353a226572726f72223b733a333a226f6c64223b733a373a2273756363657373223b733a333a226f6c64223b7d737563636573737c733a32313a225573657220626572686173696c2064696861707573223b),
	('hu24v1clbb3t0fg3nk9ep6q3osjbgsb4', '::1', 1723688692, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333638383639323b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('hukd14c93tik3t5lnmmora9fi64kr1qc', '::1', 1723605441, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630353434313b757365725f69647c733a313a2231223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b),
	('icu13ol465c94c5vlth57m4d0cmokukb', '::1', 1723641721, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333634313730323b),
	('iuk36nt7aievaeqh6i6jnp6rif0h6jst', '::1', 1723609261, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630393236313b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('kkjqgtfrcemlmqfic463trck697v5b4m', '::1', 1723706295, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333730363239353b),
	('n62r2jpsudkieqk0t4trd3c30r9om73q', '::1', 1723691432, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639313433323b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('n9q6o90pe247eqtq1170m99lr483f846', '::1', 1723690954, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639303935343b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('ogd3g0pkl2dmo1untp2att2tpi5pqoq8', '::1', 1723691944, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639313934343b757365725f69647c733a323a223132223b656d61696c7c733a31373a227374616666406578616d706c652e636f6d223b726f6c655f69647c733a313a2233223b6c6f676765645f696e7c623a313b),
	('po56b1p6ehci4833lpp9hkevs2d0gkvn', '::1', 1723690043, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333639303034333b757365725f69647c733a313a2232223b656d61696c7c733a31373a2261646d696e406578616d706c652e636f6d223b726f6c655f69647c733a313a2232223b6c6f676765645f696e7c623a313b),
	('rk76n27t473vuta3sq6ieahgl1lr65em', '::1', 1723607922, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630373932323b),
	('uaqsjq5qk8ga2fgh6rpqilltbijp5nle', '::1', 1723608249, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333630383234393b757365725f69647c733a313a2231223b656d61696c7c733a31373a227375706572406578616d706c652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b6572726f727c733a32383a22506572616e2070656e6767756e6120746964616b2064696b656e616c223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d);

-- Dumping structure for table bsi-helpdesk.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` int DEFAULT NULL,
  `unit_bsi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.users: ~3 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `password`, `email`, `role_id`, `unit_bsi`) VALUES
	(1, 'Super Admin', '$2y$10$Sj.UcJdrA5y5KKCGsBRt1.XwgWliTVUoec0DMdXXMmiQs7ywZbaPu', 'super@example.com', 1, NULL),
	(2, 'Bu UUT', '$2y$10$EIBBQb2oQ53rL.a3P6Fbl.4eAHAxyeVf/c/4EJZPYIWPJe7nEXcOa', 'admin@example.com', 2, '1'),
	(4, 'Admin B', '$2y$10$uYLPhS907hF6mbq0HjclcuPrUkTCFIJQq4YX/e723.vRbW2.wAjua', 'adminb@example.com', 2, '3'),
	(12, 'Staff ', '$2y$10$Mjy2lOCW85iJhephh/kdh.J6bWJCglAI7tZfXg8EWdMtpB.WQOg.a', 'staff@example.com', 3, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
