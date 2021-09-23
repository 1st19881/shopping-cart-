-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 05:34 PM
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
(4, 'ยอดขายขนม', '150', '2000', '2021-09-23');

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
(1, 'admin4567890000', 'admin@gmail.com', 'admin', 'admin');

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
(3, '555555555555555', 'ddd@gmail.com', '0951838978', '28/11 นครพนม 48000', 'user1', 'user1', 'member'),
(5, 'พัชริดา เตย', 'user1234@gmail.com', '091858888888', '45/11 สกลนคร 47000', 'member1234', 'member1234', 'member');

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
(1, 1, 27, 10, 350),
(2, 2, 24, 20, 600),
(3, 3, 24, 2, 60),
(4, 3, 26, 2, 60),
(5, 3, 27, 2, 70),
(6, 4, 27, 10, 350),
(7, 5, 28, 1, 45),
(8, 5, 27, 1, 35),
(9, 5, 26, 1, 30),
(10, 5, 24, 1, 30),
(11, 6, 24, 20, 600),
(12, 6, 27, 50, 1750),
(13, 6, 28, 50, 2250),
(14, 7, 28, 5, 225),
(15, 7, 27, 5, 175),
(16, 7, 26, 5, 150),
(17, 8, 28, 45, 2025),
(18, 8, 27, 45, 1575),
(19, 8, 26, 95, 2850),
(20, 9, 28, 5, 225),
(21, 9, 27, 5, 175),
(22, 9, 26, 5, 150),
(23, 9, 24, 5, 150),
(24, 10, 28, 5, 225),
(25, 10, 27, 5, 175),
(26, 10, 26, 5, 150),
(27, 10, 24, 5, 150),
(28, 11, 28, 10, 450),
(29, 11, 27, 10, 350),
(30, 11, 26, 10, 300),
(31, 11, 24, 10, 300),
(32, 12, 28, 1, 45),
(33, 12, 27, 1, 35),
(34, 12, 26, 1, 30),
(35, 12, 24, 1, 30),
(36, 13, 28, 10, 450),
(37, 13, 27, 10, 350),
(38, 13, 26, 10, 300),
(39, 14, 28, 1, 45),
(40, 14, 27, 1, 35),
(41, 14, 26, 69, 2070),
(42, 14, 24, 1, 30);

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
(1, 3, '2021-02-27 02:00:23', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 350, 3, 'slip202342372220210916_022236.jpg', '2021-09-16', 350.00, 2, ''),
(2, 3, '2021-09-16 02:00:54', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 600, 4, 'slip158682259120210916_020114.jpg', '2021-09-16', 600.00, 4, ''),
(3, 3, '2021-09-16 02:21:52', 'พัชริดา', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 190, 1, '', '0000-00-00', 0.00, 1, '55555'),
(4, 3, '2021-06-23 02:22:13', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 350, 1, '', '0000-00-00', 0.00, 1, ''),
(5, 3, '2021-09-16 04:36:41', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 140, 3, 'slip107952678620210916_043720.jpg', '2021-09-16', 140.00, 2, ''),
(6, 3, '2021-09-16 14:40:35', 'พัชริดา', '29/11 สกลนคร 47000', 'ddd@gmail.com', '0951838978', 4600, 1, '', '0000-00-00', 0.00, 1, 'รับออเดอร์ พน  เย้นๆ ค่ะ'),
(7, 3, '2019-12-19 01:50:57', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 550, 3, 'slip169748268420210918_015117.jpg', '2021-09-18', 550.00, 2, ''),
(8, 3, '2018-08-16 01:56:08', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 6450, 3, 'slip156142379120210918_015632.jpg', '2021-09-18', 6450.00, 2, ''),
(9, 3, '2021-09-19 23:53:14', 'น้องเตย', '91/123 สกลนคร  47000', 'ddd@gmail.com', '0951838978', 700, 3, 'slip155727432920210919_235347.jpg', '2021-09-19', 700.00, 2, 'รับวันนี้ 4 โมงเย็นจ้า '),
(10, 5, '2021-09-20 01:12:51', 'พัชริดา เตย', '45/11 สกลนคร 47000', 'user1234@gmail.com', '091858888888', 700, 3, 'slip184014466020210920_011302.jpg', '2021-09-20', 700.00, 3, 'หวานน้อยจ่า'),
(11, 3, '2021-09-20 23:26:04', 'replay123456789', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 1400, 3, 'slip40118752120210920_232626.jpg', '2021-09-20', 1400.00, 2, '5555555555555555555'),
(12, 3, '2021-09-23 20:58:58', 'replay123456789', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 140, 3, 'slip185420575220210923_205942.jpg', '2021-09-23', 140.00, 3, ''),
(13, 3, '2021-09-23 22:10:40', '555555555555555', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 1100, 4, 'slip130109841520210923_221356.png', '2021-09-23', 1100.00, 4, ''),
(14, 3, '2021-09-23 22:15:59', '555555555555555', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 2180, 3, 'slip77559614320210923_221655.jpg', '2021-09-23', 2180.00, 2, 'รับวันนี้เย็นๆๆๆ');

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
(24, 2, 'ฝอยทอง', 'ฝอยทอง เป็นขนมไทยอีกชนิดที่มีที่มาพร้อมกับทองหยิบ ทองหยอด โดยใช้วิธีร่อนไข่ที่ผ่านกระบวนการตีฟูด้วยผ้าขาวบาง นำใบตองมาม้วนเป็นกรวย เว้นก้นกรวยให้มีรู หรือใช้กรรไกรตัดให้ไข่สามารถลอดลงหม้อได้ในขนาดที่เป็นเส้นสวยงาม เมื่อใกล้สุกก็เตรียมใช้ไม้ปลายแหลมช้อนขึ้นมา', 30, 98, 'no', '211854198220210910_132814.jpg', '2021-09-10 06:28:14'),
(26, 2, 'ฝอยทอง', 'ฝอยทอง เป็นขนมไทยอีกชนิดที่มีที่มาพร้อมกับทองหยิบ ทองหยอด โดยใช้วิธีร่อนไข่ที่ผ่านกระบวนการตีฟูด้วยผ้าขาวบาง นำใบตองมาม้วนเป็นกรวย เว้นก้นกรวยให้มีรู หรือใช้กรรไกรตัดให้ไข่สามารถลอดลงหม้อได้ในขนาดที่เป็นเส้นสวยงาม เมื่อใกล้สุกก็เตรียมใช้ไม้ปลายแหลมช้อนขึ้นมา', 30, 0, 'no', '53657759820210910_135627.jpg', '2021-09-10 06:40:34'),
(27, 1, 'ขนมถ้วยฟู', 'ฝอยทอง เป็นขนมไทยอีกชนิดที่มีที่มาพร้อมกับทองหยิบ ทองหยอด โดยใช้วิธีร่อนไข่ที่ผ่านกระบวนการตีฟูด้วยผ้าขาวบาง นำใบตองมาม้วนเป็นกรวย เว้นก้นกรวยให้มีรู หรือใช้กรรไกรตัดให้ไข่สามารถลอดลงหม้อได้ในขนาดที่เป็นเส้นสวยงาม เมื่อใกล้สุกก็เตรียมใช้ไม้ปลายแหลมช้อนขึ้นมา', 35, 68, 'no', '89617994620210910_144157.jpg', '2021-09-10 07:38:47'),
(28, 1, 'ขนมถ้วยฟู', 'ขนมถ้วยฟู เป็นขนมโบราณที่นำเข้ามาในเมืองไทยเราโดยคนจีน และเป็นอีก 1 ใน 9 ของขนมมงคลของคนไทย ชาวจีนเรียกขนมถ้วยฟูว่า ฮวดโก้ย หมายถึง มีแต่ความเจริญรุ่งเรือง เฟื่องฟู จึงเป็นอีกขนมหนึ่งที่ขาดไม่ได้ในงานมงคล ชาวจีนและชาวไทย นิยมนำไปไหว้เจ้า หรือประกอบพิธีงานมงคลต่างๆ ในงานแต่งงานนิยมทำขนมถ้วยฟูเป็นสีแดง ใช้ไหว้เจ้าหรืองานมงคลต่างๆนิยมใช้สีชมพู ใช้ในงานอวมงคล หรือไหว้บรรพบุรุษที่ล่วงลับไปแล้วนิยมใช้สีขาว ในปัจจุบันยังหาทานได้ง่าย มีหลากหลายสี เช่น ชมพู เขียว ขาว ฟ้า', 45, 68, 'ขนมหอมหวาน', '136955632920210916_040800.jpg', '2021-09-15 21:08:00');

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
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
