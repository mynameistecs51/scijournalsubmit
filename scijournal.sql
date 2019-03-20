-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2019 at 03:29 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scijournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0e3a0c35bf9277b91a802ec01b3884c0d7d81580', '::1', 1552110897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323131303839373b),
('6f8b1d81c07c8129d35c6ca9056ab9909b28f976', '::1', 1552110836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323131303833363b757365725f69647c733a313a2232223b757365725f656d61696c7c733a31353a2261646d696e406c6f63616c2e636f6d223b757365725f7072656669786e616d657c733a393a22e0b899e0b8b2e0b8a2223b757365725f6e616d657c733a32363a22e0b984e0b88ae0b8a2e0b8a7e0b8b1e0b892e0b899e0b98c2020223b757365725f6c6173746e616d657c733a31383a22e0b8abe0b8ade0b8a1e0b981e0b8aae0b887223b757365725f706f736974696f6e7c733a34353a22e0b899e0b8b1e0b881e0b8a7e0b8b4e0b88ae0b8b2e0b881e0b8b2e0b8a3e0b8a8e0b8b6e0b881e0b8b2e0b8b2223b757365725f67656e6465727c733a313a2231223b757365725f6465706172746d656e747c733a37353a22e0b8a1e0b8abe0b8b2e0b8a7e0b8b4e0b897e0b8a2e0b8b2e0b8a5e0b8b1e0b8a2e0b8a3e0b8b2e0b88ae0b8a0e0b8b1e0b88ee0b8ade0b8b8e0b894e0b8a3e0b898e0b8b2e0b899e0b8b5223b757365725f7374617475737c733a313a2230223b757365725f616464726573737c733a37353a22e0b8a1e0b8abe0b8b2e0b8a7e0b8b4e0b897e0b8a2e0b8b2e0b8a5e0b8b1e0b8a2e0b8a3e0b8b2e0b88ae0b8a0e0b8b1e0b88fe0b8ade0b8b8e0b894e0b8a3e0b898e0b8b2e0b899e0b8b5223b757365725f74656c6570686f6e657c733a313a222d223b757365725f6d6f62696c657c733a31303a2230383135323031323334223b757365725f67726f75707c733a313a2233223b),
('a4daf28a4b5ad1577d8db60ecc0c1a239ad4a1fc', '::1', 1553092165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333039313931343b757365725f69647c733a313a2233223b757365725f656d61696c7c733a31343a227465737440676d61696c2e636f6d223b757365725f7072656669786e616d657c733a303a22223b757365725f6e616d657c733a373a22686f6d73616e67223b757365725f6c6173746e616d657c733a343a2274657374223b757365725f706f736974696f6e7c733a303a22223b757365725f67656e6465727c733a313a2231223b757365725f6465706172746d656e747c733a343a2274657374223b757365725f7374617475737c733a313a2230223b757365725f616464726573737c733a343a2274657374223b757365725f74656c6570686f6e657c733a303a22223b757365725f6d6f62696c657c733a343a2231313131223b757365725f67726f75707c733a313a2232223b),
('b357467a71c370deb51efd79da962d2d798cbbbf', '::1', 1552902316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535323930323134363b),
('b6403a2f6751929ae55968e66f87bc7d91053d99', '::1', 1553091914, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333039313931343b),
('cabd2728811ccc8894bf93afe057e72a3588f470', '::1', 1553092128, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333039313934353b757365725f69647c733a313a2232223b757365725f656d61696c7c733a31353a2261646d696e406c6f63616c2e636f6d223b757365725f7072656669786e616d657c733a393a22e0b899e0b8b2e0b8a2223b757365725f6e616d657c733a32363a22e0b984e0b88ae0b8a2e0b8a7e0b8b1e0b892e0b899e0b98c2020223b757365725f6c6173746e616d657c733a31383a22e0b8abe0b8ade0b8a1e0b981e0b8aae0b887223b757365725f706f736974696f6e7c733a34353a22e0b899e0b8b1e0b881e0b8a7e0b8b4e0b88ae0b8b2e0b881e0b8b2e0b8a3e0b8a8e0b8b6e0b881e0b8b2e0b8b2223b757365725f67656e6465727c733a313a2231223b757365725f6465706172746d656e747c733a37353a22e0b8a1e0b8abe0b8b2e0b8a7e0b8b4e0b897e0b8a2e0b8b2e0b8a5e0b8b1e0b8a2e0b8a3e0b8b2e0b88ae0b8a0e0b8b1e0b88ee0b8ade0b8b8e0b894e0b8a3e0b898e0b8b2e0b899e0b8b5223b757365725f7374617475737c733a313a2230223b757365725f616464726573737c733a37353a22e0b8a1e0b8abe0b8b2e0b8a7e0b8b4e0b897e0b8a2e0b8b2e0b8a5e0b8b1e0b8a2e0b8a3e0b8b2e0b88ae0b8a0e0b8b1e0b88fe0b8ade0b8b8e0b894e0b8a3e0b898e0b8b2e0b899e0b8b5223b757365725f74656c6570686f6e657c733a313a222d223b757365725f6d6f62696c657c733a31303a2230383135323031323334223b757365725f67726f75707c733a313a2233223b);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_parent` int(11) NOT NULL COMMENT 'อ้างอิงว่ารายการนี้อยู่แถวไหน',
  `menu_level` int(11) NOT NULL,
  `menu_icon` text NOT NULL,
  `menu_url` text NOT NULL,
  `menu_status` enum('ON','OFF') NOT NULL DEFAULT 'OFF',
  `dt_create` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_parent`, `menu_level`, `menu_icon`, `menu_url`, `menu_status`, `dt_create`, `created_by`) VALUES
(1, 'ลงทะเบียนบทความ', 0, 1, '<i class=\"menu-icon fa fa-file-text-o\" aria-hidden=\"true\"></i>', 'index.php/regisjournal/regis', 'ON', '2019-02-18 09:00:00', 0),
(2, 'ชำระค่าลงทะเบียน', 0, 1, '<i class=\"menu-icon fa fa-credit-card\" aria-hidden=\"true\"></i>', 'index.php/payment/', 'ON', '2019-02-18 09:00:00', 0),
(3, 'จัดการสิทธิ์', 0, 1, '<i class=\"menu-icon fa fa-cogs\" aria-hidden=\"true\"> </i> \r\n\r\n', '#', 'ON', '0000-00-00 00:00:00', 0),
(4, 'เช็คการชำระค่าลงทะเบียน', 0, 1, '<i class=\"menu-icon fa fa-list\" aria-hidden=\"true\"> </i> ', 'index.php/payment/checkpayment', 'ON', '0000-00-00 00:00:00', 0),
(5, 'รายงานผู้เข้าร่วม', 0, 1, '<i class=\"menu-icon fa fa-file\" aria-hidden=\"true\"></i>', '#', 'ON', '0000-00-00 00:00:00', 0),
(6, 'วิทยาศาสตร์สุขภาพ', 5, 2, '<i class=\"menu-icon fa fa-heart\" aria-hidden=\"true\"></i>', 'index.php/report/health', 'ON', '0000-00-00 00:00:00', 0),
(7, 'วิทยาการคอมฯ', 5, 2, '<i class=\"fa fa-wifi\"></i>', 'index.php/report/csit', 'ON', '0000-00-00 00:00:00', 0),
(8, 'วิทยาศาสตร์ชีวภาพ', 5, 2, '<i class=\"fa fa-warning\"></i>', 'index.php/report/life', 'ON', '0000-00-00 00:00:00', 0),
(9, 'วิทยาศาสตร์กายภาพ', 5, 2, '	<i class=\"fa fa-universal-access\"></i>', 'index.php/report/physical', 'ON', '0000-00-00 00:00:00', 0),
(10, 'สิทธิ์การเข้าถึง', 3, 2, '<i class=\"menu-icon fa fa-wrench\" aria-hidden=\"true\"></i>\r\n', 'index.php/settingrole', 'ON', '0000-00-00 00:00:00', 0),
(11, 'กำหนดบทบาท', 3, 2, '<i class=\"menu-icon fa fa-user-secret\" aria-hidden=\"true\"></i>\r\n', 'index.php/settingrole/role', 'ON', '0000-00-00 00:00:00', 0),
(12, 'จัดการข้อมูลส่วนตัว', 0, 1, '<i class=\"menu-icon fa fa-users\" aria-hidden=\"true\"></i>', 'index.php/datame', 'ON', '0000-00-00 00:00:00', 0),
(13, 'Download Template', 0, 1, '<i class=\"menu-icon fa fa-download\" aria-hidden=\"true\"></i>\r\n', 'index.php/template/', 'ON', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_config`
--

CREATE TABLE `menu_config` (
  `menuconf_id` int(11) NOT NULL,
  `usergroup_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menuconf_btnAdd` int(11) NOT NULL,
  `menuconf_btnEdit` int(11) NOT NULL,
  `menuconf_btnView` int(11) NOT NULL,
  `menuconf_status` enum('ON','OFF') NOT NULL DEFAULT 'OFF',
  `dt_create` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_config`
--

INSERT INTO `menu_config` (`menuconf_id`, `usergroup_id`, `menu_id`, `menuconf_btnAdd`, `menuconf_btnEdit`, `menuconf_btnView`, `menuconf_status`, `dt_create`, `created_by`) VALUES
(8, 3, 1, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(9, 3, 2, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(12, 2, 1, 0, 0, 0, 'ON', '2019-02-18 16:58:32', 2),
(13, 2, 2, 0, 0, 0, 'ON', '2019-02-18 16:58:32', 2),
(14, 1, 1, 0, 0, 0, 'ON', '2019-02-20 14:30:23', 2),
(15, 3, 3, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(16, 3, 4, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(17, 1, 4, 0, 0, 0, 'ON', '2019-02-23 21:16:34', 2),
(18, 3, 5, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(19, 3, 6, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(20, 3, 7, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(21, 3, 8, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(22, 3, 9, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(23, 3, 10, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(24, 3, 11, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(25, 3, 12, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(26, 3, 13, 0, 0, 0, 'ON', '0000-00-00 00:00:00', 0),
(27, 2, 12, 0, 0, 0, 'ON', '2019-03-20 21:28:48', 2),
(28, 2, 13, 0, 0, 0, 'ON', '2019-03-20 21:28:48', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_bank` text NOT NULL,
  `pay_time` varchar(100) NOT NULL,
  `pay_detail` text NOT NULL,
  `pay_file` text NOT NULL,
  `pay_status` enum('SUCCESS','NONE','WAIT') NOT NULL DEFAULT 'NONE',
  `regis_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dt_create` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_bank`, `pay_time`, `pay_detail`, `pay_file`, `pay_status`, `regis_id`, `user_id`, `dt_create`, `created_by`) VALUES
(3, 'testsssss', '11:12', '', '140219_100543.jpg', 'SUCCESS', 3, 2, '2019-02-25 21:23:36', 0),
(5, 'test', '11:11', '', '270219_110242.png', 'SUCCESS', 7, 3, '2019-02-27 11:04:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `regisjournal`
--

CREATE TABLE `regisjournal` (
  `regis_id` int(11) NOT NULL,
  `regis_prenamehead` varchar(100) NOT NULL,
  `regis_namehead` varchar(200) NOT NULL,
  `regis_lastnamehead` varchar(200) NOT NULL,
  `regis_prenameteam` varchar(100) NOT NULL,
  `regis_nameteam` varchar(200) NOT NULL,
  `regis_lastnameteam` varchar(200) NOT NULL,
  `regis_prenameadvisor` varchar(100) NOT NULL,
  `regis_nameadvisor` varchar(200) NOT NULL,
  `regis_projectnameThai` text NOT NULL,
  `regis_projectnameEng` text NOT NULL,
  `regis_lastnameadvisor` varchar(200) NOT NULL,
  `regis_walkin` enum('1','2','3') NOT NULL COMMENT '1=บรรยาย ,2=โปสเตอร์,3=เข้าร่วมไม่นำเสนอ',
  `title_id` int(11) NOT NULL,
  `regis_file` text NOT NULL,
  `regis_status` enum('SUCCESS','NONE') NOT NULL DEFAULT 'NONE',
  `user_id` int(11) NOT NULL,
  `dt_create` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regisjournal`
--

INSERT INTO `regisjournal` (`regis_id`, `regis_prenamehead`, `regis_namehead`, `regis_lastnamehead`, `regis_prenameteam`, `regis_nameteam`, `regis_lastnameteam`, `regis_prenameadvisor`, `regis_nameadvisor`, `regis_projectnameThai`, `regis_projectnameEng`, `regis_lastnameadvisor`, `regis_walkin`, `title_id`, `regis_file`, `regis_status`, `user_id`, `dt_create`, `created_by`) VALUES
(3, 'นาย', 'ไชยวัฒน์', 'หอมแสง', 'นาย', 'ขยัน', 'พัฒนา', 'อาจารย์', 'ที่', 'ระบบลงทะเบียนนำเสนองานวิจัยที่ใช้ทดแทนการใช้สมัครแบบกระดาษ', 'test', 'ปรึกษา', '2', 4, '', 'SUCCESS', 2, '2019-02-18 10:47:54', 0),
(7, '', 'homsang', 'test', '', '', '', '', '', 'test', 'test', '', '1', 1, '270219_112232.pdf', 'SUCCESS', 3, '2019-02-27 11:22:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `title_id` int(11) NOT NULL,
  `title_group` varchar(5) NOT NULL,
  `title_name` varchar(200) NOT NULL,
  `dt_create` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`title_id`, `title_group`, `title_name`, `dt_create`, `created_by`) VALUES
(1, 'A', 'วิทยาศาสตร์กายภาพ', '2019-01-30 00:00:00', 0),
(2, 'B', 'วิทยาศาสตร์ชีวภาพ', '2019-01-30 00:00:00', 0),
(3, 'C', 'วิทยาศาสตร์สุขภาพ', '2019-01-30 00:00:00', 0),
(4, 'D', 'วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ', '2019-01-30 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL COMMENT 'id',
  `user_email` varchar(100) NOT NULL COMMENT 'email',
  `user_password` varchar(50) NOT NULL COMMENT 'password',
  `user_prefixname` varchar(200) NOT NULL,
  `user_name` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `user_lastname` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `user_position` varchar(100) NOT NULL COMMENT 'ตำแหน่ง',
  `user_gender` enum('0','1') NOT NULL COMMENT 'เพศ 0 = หญิง, 1= ชาย',
  `user_department` text NOT NULL COMMENT 'หน่วยงาน',
  `user_status` enum('0','1','2','3','4') NOT NULL COMMENT 'สถานนะ 0=นักวิจัย/นักวิชาการ, 1= อาจารย์, 2=นศ.ปริญญาตรี, 3= นศ.ปริญญาโท, 4= นศ.ปริญญาเอก',
  `user_address` text NOT NULL COMMENT 'ที่อยู่',
  `user_telephone` varchar(10) NOT NULL COMMENT 'โทรศัพท์',
  `user_mobile` varchar(11) NOT NULL COMMENT 'มือถือ',
  `user_group` int(3) NOT NULL,
  `dt_create` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_prefixname`, `user_name`, `user_lastname`, `user_position`, `user_gender`, `user_department`, `user_status`, `user_address`, `user_telephone`, `user_mobile`, `user_group`, `dt_create`, `created_by`) VALUES
(1, 'te@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'chaiwat', 'หอมแสง', 'นักวิชาการศึกษา', '1', 'มรภ.อุดรธานี', '0', 'มรภ.อุดรธานี', '', '0815920456', 1, '2019-02-28 00:08:47', 0),
(2, 'admin@local.com', '81dc9bdb52d04dc20036dbd8313ed055', 'นาย', 'ไชยวัฒน์  ', 'หอมแสง', 'นักวิชาการศึกาา', '1', 'มหาวิทยาลัยราชภัฎอุดรธานี', '0', 'มหาวิทยาลัยราชภัฏอุดรธานี', '-', '0815201234', 3, '2019-03-09 12:40:09', 0),
(3, 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'homsang', 'test', '', '1', 'test', '0', 'test', '', '1111', 2, '2019-02-28 00:08:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `usergroup_id` int(11) NOT NULL,
  `usergroup_name` varchar(200) NOT NULL,
  `usergroup_status` varchar(100) NOT NULL,
  `dt_create` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`usergroup_id`, `usergroup_name`, `usergroup_status`, `dt_create`, `created_by`) VALUES
(1, 'ADMIN', 'ON', '0000-00-00 00:00:00', 0),
(2, 'USER', 'ON', '0000-00-00 00:00:00', 0),
(3, 'SUPER USER', 'ON', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menu_config`
--
ALTER TABLE `menu_config`
  ADD PRIMARY KEY (`menuconf_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `regisjournal`
--
ALTER TABLE `regisjournal`
  ADD PRIMARY KEY (`regis_id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`usergroup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_config`
--
ALTER TABLE `menu_config`
  MODIFY `menuconf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regisjournal`
--
ALTER TABLE `regisjournal`
  MODIFY `regis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `usergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
