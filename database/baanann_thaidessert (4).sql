-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 08:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baanann_thaidessert`
--

-- --------------------------------------------------------

--
-- Table structure for table `acount_list`
--

CREATE TABLE `acount_list` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_total` varchar(50) NOT NULL,
  `a_price` varchar(50) NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acount_list`
--

INSERT INTO `acount_list` (`a_id`, `a_name`, `a_total`, `a_price`, `a_date`) VALUES
(1, 'ยอดขายขนม', '50', '1500', '2021-09-20'),
(3, 'ยอดขายขนม2', '500', '250000', '2021-09-20'),
(4, 'ยอดขายขนม', '150', '2000', '2021-09-23'),
(5, 'ยอดขายขนม', '600', '1300', '2021-10-02'),
(6, 'ยอดขายขนม', '250', '650', '2021-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `admin_email`, `admin_password`, `level`) VALUES
(1, 'admin4567890000', 'admin@gmail.com', 'admin', 'admin'),
(3, 'admin', 'admin1@gmail.com', 'admin1@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `member_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางลูกค้า';

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`member_id`, `name`, `email`, `phone`, `address`, `username`, `password`, `level`) VALUES
(1, 'drewwy', 'drewwy@gmail.com', '0640232594', '28/11 สกลนคร 47000', 'user1234', 'user1234', 'member'),
(3, '66666666', 'ddd@gmail.com', '0951838978', '28/11 นครพนม 48000', 'user1', 'user1', 'member'),
(5, 'พัชริดา เตย', 'user1234@gmail.com', '091858888888', '45/11 สกลนคร 47000', 'member1234', 'member1234', 'member'),
(6, 'ccc', 'do_do6@msn.com', '0640232594', '45/11 สกลนคร 47000', 'สมาชิก', 'สมาชิก', 'member'),
(7, 'ccc', 'do_do6@msn.com', '0640232594', '45/11 สกลนคร 47000', 'user2', 'user2', 'member'),
(8, 'drew', 'do_do6@msn.com', '0640232594', '45/11 สกลนคร 47000', 'uuu', 'uuu', 'member'),
(9, 'ccc', 'do_do6@msn.com', '0640232594', '45/11 สกลนคร 47000', 'uuu', 'uuu', 'member'),
(10, '', '', '', '', 'uuu', 'uuu', 'member'),
(11, 'ccc', 'a@dddd', '0640232594', '45/11 สกลนคร 47000', 'user', 'user', 'member'),
(12, 'ccc', 'a@dddd', '091858888888', '45/11 สกลนคร 47000', 'uuu', 'uuu', 'member'),
(13, 'พัชริดา', 'djdo19881@gmail.com', '0640232594', '45/11 สกลนคร 47000', '1234', '1234', 'member'),
(14, 'พัชริดา', 'qazwsx19881@gmail.com', '091858888888', '45/11 สกลนคร 47000', '0001', '0001', 'member'),
(15, 'พัชริดา', 'do_do6@msn.com', '0640232594', '45/11 สกลนคร 47000', 'admin00', 'admin00', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(10) NOT NULL,
  `employee_address` varchar(50) NOT NULL,
  `employee_phone` int(10) NOT NULL,
  `employee_gender` varchar(20) NOT NULL,
  `employee_age` int(100) NOT NULL,
  `employee_email` varchar(50) NOT NULL,
  `employee_password` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `employee_address`, `employee_phone`, `employee_gender`, `employee_age`, `employee_email`, `employee_password`, `level`) VALUES
(1, 'employee', '27/11 สกลนคร 47000', 64232594, 'หญิง', 25, 'employee@gmail.com', 'employee', 'employee'),
(2, 'กะทิ แสนสุ', '91/11 สกลนคร 47000', 918688709, 'หญิง', 25, 'employee1@gmail.com', 'employee', 'พนักงาน');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `d_id` int(10) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_subtotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`d_id`, `o_id`, `p_id`, `d_qty`, `d_subtotal`) VALUES
(1, 1, 27, 2, 70),
(2, 1, 24, 2, 60);

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL,
  `member_id` int(11) NOT NULL,
  `o_dttm` datetime NOT NULL,
  `o_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_addr` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `o_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `o_total` float NOT NULL,
  `o_status` int(1) NOT NULL COMMENT '''สถานะ 1 รอชำระเงิน 2 รอยืนยัน 3ชำระเงินแล้ว  4 ยกเลิก''',
  `o_slip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'อัพโหลด สลิป',
  `o_slip_date` date DEFAULT NULL COMMENT 'วันที่อัพสลิป',
  `o_slip_total` float(10,2) NOT NULL DEFAULT 0.00,
  `status_accept` int(1) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_head`
--

INSERT INTO `order_head` (`o_id`, `member_id`, `o_dttm`, `o_name`, `o_addr`, `o_email`, `o_phone`, `o_total`, `o_status`, `o_slip`, `o_slip_date`, `o_slip_total`, `status_accept`, `note`) VALUES
(1, 3, '2021-10-02 12:30:55', '555555555555555', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 130, 3, 'slip48494610020211002_123139.png', '2021-10-02', 130.00, 3, '5655555555');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_detail` text NOT NULL,
  `price_product` int(20) NOT NULL,
  `product_qty` int(20) NOT NULL,
  `note` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `type_id`, `product_name`, `product_detail`, `price_product`, `product_qty`, `note`, `img`, `date`) VALUES
(24, 2, 'ฝอยทอง', 'ฝอยทอง เป็นขนมไทยอีกชนิดที่มีที่มาพร้อมกับทองหยิบ ทองหยอด โดยใช้วิธีร่อนไข่ที่ผ่านกระบวนการตีฟูด้วยผ้าขาวบาง นำใบตองมาม้วนเป็นกรวย เว้นก้นกรวยให้มีรู หรือใช้กรรไกรตัดให้ไข่สามารถลอดลงหม้อได้ในขนาดที่เป็นเส้นสวยงาม เมื่อใกล้สุกก็เตรียมใช้ไม้ปลายแหลมช้อนขึ้นมา', 30, 88, 'no', '211854198220210910_132814.jpg', '2021-09-10 06:28:14'),
(26, 2, 'ฝอยทอง', 'ฝอยทอง เป็นขนมไทยอีกชนิดที่มีที่มาพร้อมกับทองหยิบ ทองหยอด โดยใช้วิธีร่อนไข่ที่ผ่านกระบวนการตีฟูด้วยผ้าขาวบาง นำใบตองมาม้วนเป็นกรวย เว้นก้นกรวยให้มีรู หรือใช้กรรไกรตัดให้ไข่สามารถลอดลงหม้อได้ในขนาดที่เป็นเส้นสวยงาม เมื่อใกล้สุกก็เตรียมใช้ไม้ปลายแหลมช้อนขึ้นมา', 30, 100, 'no', '53657759820210910_135627.jpg', '2021-09-10 06:40:34'),
(29, 1, 'ขนมถ้วยฟู', '00012', 30, 100, '546', '4427683620211002_124310.png', '2021-10-02 05:43:10'),
(30, 1, 'ฝอยทอง', '22', 35, 20, '022', '105845767820211002_124452.png', '2021-10-02 05:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`, `date`) VALUES
(1, 'ขนมแห้ง', '2021-09-15 05:03:46'),
(2, 'ขนมเปียก', '2021-09-15 05:03:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acount_list`
--
ALTER TABLE `acount_list`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acount_list`
--
ALTER TABLE `acount_list`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
