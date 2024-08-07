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

-- Dumping data for table bsi-helpdesk.coba: ~1 rows (approximately)
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

-- Dumping data for table bsi-helpdesk.core_login_attempts: ~1 rows (approximately)
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

-- Dumping data for table bsi-helpdesk.core_user_autologin: ~1 rows (approximately)
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
  `instansi` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) DEFAULT 'Pending',
  `lokasi` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT 'Layanan',
  `catatan` varchar(255) DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.guests: ~16 rows (approximately)
REPLACE INTO `guests` (`id`, `nama`, `instansi`, `telp`, `keperluan`, `created_at`, `status`, `lokasi`, `kategori`, `catatan`, `waktu_selesai`) VALUES
	(1, 'Rahmat Hidayat', 'UAD', '085322462718', 'beli kopi', '2024-08-03 09:17:48', 'Selesai', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(2, 'Amar Al Fatah', 'Biro Sistem Informasi', '085322462718', 'zxcxcfv', '2024-08-03 09:17:48', 'Selesai', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(3, 'Amar Al Fatah', 'Biro Sistem Informasi', '085322462718', 'ssas', '2024-08-03 09:17:48', 'Selesai', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(4, 'Rahmat Hidayat', 'Biro Sistem Informasi', '085322462718', 'anfkasa', '2024-08-03 09:17:48', 'Proses', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(5, 'Asep', 'AKusan', '085322462718', 'Asas', '2024-08-03 09:17:48', 'Pending', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(6, 'adhi', 'Biro Sumber Daya Manusia', '085322462718', 'asasda', '2024-08-03 09:17:48', 'Proses', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(7, 'Adit', 'HAYOLO', '085322462718', 'ghjgj', '2024-08-03 09:17:48', 'Pending', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(8, 'Adittia Nugraga', 'Biro Sumber Daya Manusia', '085322462718', 'Aku mau kopi pasta', '2024-08-03 02:18:36', 'Selesai', NULL, 'Layanan', 'awawaw', '2024-08-07 13:08:18'),
	(9, 'Adit', 'Biro Sumber Daya Manusia', '085713667446', 'ADit beli kkopi', '2024-08-03 03:22:48', 'Selesai', NULL, 'BukuTamu', NULL, '2024-08-07 06:08:58'),
	(10, 'Rahmat Hidayat', 'Biro Sistem Informasi', '085713667446', 'Beli kaure', '2024-08-06 04:47:33', 'Proses', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(11, 'Amarkhan', 'Biro Sumber Daya Manusia', '085322471629', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-08-06 05:00:37', 'Proses', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(12, 'Rahmat Hidayat', 'Biro Sistem Informasi', '085322471629', 'AKU BELUM MANID', '2024-08-06 06:09:57', 'Proses', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(13, 'ADITIA', 'Biro Sistem Informasi', '085322471629', 'AKU BELUM MANID', '2024-08-06 06:19:31', 'Proses', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(14, 'ADITIA', 'Biro Sistem Informasi', '085322471629', 'AKU BELUM MANID', '2024-08-06 06:20:40', 'Proses', NULL, 'Layanan', NULL, '2024-08-07 13:08:18'),
	(15, 'Adit BSI4', 'Biro Sistem Informasi', '085322471629', 'ADIT BELI BASO', '2024-08-07 04:58:11', 'Pending', 'bsi4', 'Layanan', NULL, '2024-08-07 13:08:18'),
	(16, 'ADIT CEKIDOT', 'Biro Sistem Informasi', '085322471629', 'BABAYO', '2024-08-07 05:25:13', 'Pending', 'bsi4', 'Layanan', NULL, '2024-08-07 13:08:18');

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

-- Dumping data for table bsi-helpdesk.migrations: ~1 rows (approximately)
REPLACE INTO `migrations` (`version`) VALUES
	(3);

-- Dumping structure for table bsi-helpdesk.sys_sessions
CREATE TABLE IF NOT EXISTS `sys_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bsi-helpdesk.sys_sessions: ~88 rows (approximately)
REPLACE INTO `sys_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('08c15r6ef0q7vi07jqhdio7ot1j4orm2', '::1', 1722580857, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538303835373b),
	('0glo1g52o6fau4ugsfosc630uouc868u', '::1', 1722585791, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538353738373b),
	('17vgfgmo9ctic5mfbh0hdr7mdcgd2dsq', '::1', 1722583025, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538333032353b),
	('1boq51nnt7jbd2ejnr02qn0e8iqbd7vr', '::1', 1722692319, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323639323331393b),
	('1hmevn57pofvs7btbkfmk2ce0r76ro1l', '::1', 1722652148, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635323134383b),
	('22qset9ii3jll0tc1plsuub70fdo18p7', '::1', 1722925510, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932353531303b),
	('29de9mq2v278smpm7krfslqd3u2s5f1s', '::1', 1722580404, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538303430343b),
	('2e12607acgavp8ulvtktb8pmnoio93n2', '::1', 1722584905, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538343930353b),
	('2ghnq6hnss6cl2th5b911ropd4abd24s', '::1', 1722926287, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932363238373b),
	('2ugkp2hmnucjnld9lv8pne0jle855b3v', '::1', 1722582070, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538323037303b),
	('31voc1vu5hon2bdo8b4duos4niht3b8o', '::1', 1722920883, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932303539323b),
	('3gne5si3e1v0lp6sm97q4papn6m2n8pp', '::1', 1722841504, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834313530343b),
	('515ocr2n6k60hbeiva2pqs1cf47v4c6i', '::1', 1723003905, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030333930353b),
	('5vtmdqi0esalqc164bun5en3kd5105ov', '::1', 1722839384, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323833393338343b),
	('679o08p8obttvvpncufeuvh4th082hlp', '::1', 1722845925, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834353932353b),
	('6cfhgdbebele3bvmo2vajnrf37gdg481', '::1', 1722872415, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323837323431353b),
	('6li98iiktd2acspcqht75sq0k3u3m1nm', '::1', 1722655588, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635353538383b),
	('6snah3u2g7ua5d76shf2ru71rg57m9hf', '::1', 1722950873, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323935303837333b),
	('744ph7cc4nt77o6v9i97ohuqll71qmhc', '::1', 1722579110, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323537393131303b),
	('8akjpv6vn9e8102mus0atllc3jsefu38', '::1', 1722584198, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538343139383b),
	('8cmjcdtkkgo1inhag91hm2r0kds7p5m2', '::1', 1722581346, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538313334363b),
	('8jlhb6g857bq7moul2p1h0v2e75jmpgn', '::1', 1722931435, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323933313431323b),
	('8pedf009vgd7n70gk59hc72mbika5r1a', '::1', 1722930299, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323933303239393b),
	('8qbrt717ck3sdkt1ruke6ljb928l79s7', '::1', 1722918987, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323931383938373b),
	('97tm7v36iakr8uvhpao8mji6b2s7ka3i', '::1', 1723009572, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030393537323b),
	('9u380k31vc4851v0qtgeol05bpbukh1v', '::1', 1722655850, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635353538383b),
	('a5e540t3lic9tchbmq1uger5k8uc1bt1', '::1', 1723010938, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333031303931363b),
	('a5h0br7b30tc9pp928rfmjvu0ld26e5e', '::1', 1722872005, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323837323030353b),
	('av2nbcrd1ii1ce9pusro5ik21kvbd5rg', '::1', 1723010916, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333031303931363b),
	('bolidbh1knjgaemhjt8av4tjkkgu54fp', '::1', 1722573086, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323537333038363b),
	('c9hnirnsh7p3dh0vf8l2gigi5271ohs4', '::1', 1722919998, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323931393939383b),
	('cqvm44pfo87lvmhee65r9i7e11u1he68', '::1', 1723008750, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030383735303b),
	('cr0fnnlblsskr4c4qou6q8a1dkm55pp2', '::1', 1722845925, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834353932353b),
	('d6dp6cjv6ogrkl2250q614p0vkjqluhb', '::1', 1722924889, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932343838393b),
	('dk1i38uk3sil8l9md9mjuj84lvslthbj', '::1', 1722651153, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635313135333b),
	('e4oc8le49f0dpjskdd5br0j5rnupikls', '::1', 1722921165, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932313136353b),
	('eu7ii1paornjgl3aneo8frq0c9qcjnht', '::1', 1722581697, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538313639373b),
	('f7c2a2uo1t83h5e1kus3887qcamdq2ib', '::1', 1723018960, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333031383936303b),
	('fc02j4pfimthm2dqp0jcprrfpruou1md', '::1', 1722838938, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323833383933383b),
	('g593648vta4a913qdq9rd4fuoqhc8tgp', '::1', 1722579878, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323537393837383b),
	('gjddp8ko5mduofn3s02a90itl3312i3n', '::1', 1723003024, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030333032343b),
	('gjpdp33s6lkef59a9tms01i651f8q498', '::1', 1723005723, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030353732333b),
	('grimndee5lugjrd67f187brb0umbnggt', '::1', 1722924565, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932343536353b),
	('iffdo5aktuckiebd8u11vdep3npmrocc', '::1', 1722930909, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323933303930393b),
	('iknurrufqinrhpek3ush8s70nimnq44t', '::1', 1723006869, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030363836393b),
	('j0r013isu1jobvik2g8un1778il9t6s3', '::1', 1723004378, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030343337383b),
	('j3b9e15k9k28jq7bhi4rfpjvq4tq11nf', '::1', 1722923388, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932333338383b),
	('j45a2fqjqpq4f6upcj8ocuq5f6q6js3k', '::1', 1722843716, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834333731363b),
	('jltqsgh1ge8cutkh1mbt8ufoavv7dcld', '::1', 1722653290, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635333239303b),
	('jrb290u8ehh1bg0re0n1i3d4dd22vn09', '::1', 1722839879, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323833393837393b),
	('ju64bgogavg1gii5ns9uv002s3uso3i7', '::1', 1722654352, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635343335323b),
	('k48p6ee0dej4itremnghc16pupg4g0bo', '::1', 1722844076, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834343037363b),
	('kcadjqqe78o76bnma8ciskpge36e7hj2', '::1', 1722692660, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323639323636303b),
	('khtla12lug2idt7h8kemd81sdsln7222', '::1', 1722583535, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538333533353b),
	('km0k9dggkra6le5undtn724apdkiu7ts', '::1', 1722840182, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834303138323b),
	('ktbp8s6i8r7lnqhl8s8p6977mbn42tuc', '::1', 1722654718, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635343731383b),
	('l8b5iu884studtqvmcnjkap1v02a71p4', '::1', 1722920581, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932303538313b),
	('ldov3bu0gnulc5hspbulufqn4sc5mu3p', '::1', 1722655215, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635353231353b),
	('m0fkmbetbcd105qlt6hkka2lq66u7mnq', '::1', 1723008279, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030383237393b),
	('m7efj2vuh6af70ictp755svq71ai0pdg', '::1', 1722692936, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323639323636303b),
	('msojq58pqvpsva9fi001uhfvq81bgors', '::1', 1722573455, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323537333435353b),
	('o4el321pibu6ujju07fbc5u6b4km0b1g', '::1', 1722921159, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932313131383b),
	('ojqv7vfvh3ff4b9k76stl2403ja17suc', '::1', 1722841834, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834313833343b),
	('pf7knt6o3e3kaklvuqs6u0u0b5du4u13', '::1', 1722585787, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538353738373b),
	('q1d9cag2a427n66kopfep7l9j7jsg35u', '::1', 1722691892, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323639313839323b),
	('q6imj4j23poiomesv6bom7f99dre6iff', '::1', 1723005170, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030353137303b),
	('q8on4d93u1j9lkus9qclvaf67sn1crep', '::1', 1722846058, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834363034393b),
	('qhdjccui1cq3sb2put3da9d8iet724bj', '::1', 1722584594, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538343539343b),
	('qmdnrjrj1p92uq2og2ih4qm7hus2486k', '::1', 1723006544, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030363534343b),
	('qqjg3lbo27g463u5sr7i5j1ed851djrf', '::1', 1722872493, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323837323431353b),
	('qt979jfmcfidoesr0q9l6lmu3pahgaf8', '::1', 1722840921, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323834303932313b),
	('qv8dk3s9gon7m4r16appno04kqpbh1d5', '::1', 1722920315, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932303331353b),
	('qvgn7m60kth2nbj50em555k34svuge2a', '::1', 1722921118, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932313131383b),
	('r4ucq30mdd4suvm4qa49od3665d2r4r2', '::1', 1722925195, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932353139353b),
	('r8q8qns6ce61p7k32mpsd9mfcq9juj90', '::1', 1722923778, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932333737383b),
	('rgakuo0do63vtcak53orjj4lsud1r1il', '::1', 1722927935, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932373933353b),
	('rl1r4bp4jda5fu42b7mrbno7cmcrci96', '::1', 1723009266, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030393236363b),
	('sf76qmc50vvpv9gunclqqfdnfjvk008f', '::1', 1722654021, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635343032313b),
	('spmm0f0kh0iut3oqs56bhtcsp932cak0', '::1', 1722652725, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635323732353b),
	('tdhodmhqsqlskkps2niaf0g822n1crgo', '::1', 1722585354, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323538353335343b),
	('toiuab2f46tdksbp3lro2m5n86vfmt80', '::1', 1722931412, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323933313431323b),
	('tspusl2f6dvrlpdtvkknnmhbuv74s2sk', '::1', 1722924174, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932343137343b),
	('tv26e0hfu8e4s4jb4emtt71jq5l50jic', '::1', 1722653683, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635333638333b),
	('udq994go8elmmqc1vaomo9ouj3vgs12f', '::1', 1722919543, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323931393534333b),
	('uvho45i2l42a6cepl3g9kk422s1h4scd', '::1', 1722927115, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932373131353b),
	('v1s0d6h5g26kc75rl5bo1gr83o4u2kar', '::1', 1723004821, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333030343832313b),
	('v7vq42763u2hupe00f8dpqu45o3niue5', '::1', 1722651496, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323635313439363b),
	('vfp7r1qtd4nh3l7ihfisvum00n7l2b23', '::1', 1722950940, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323935303837333b);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
