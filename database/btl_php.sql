-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 07:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `adproducttype`
--

CREATE TABLE `adproducttype` (
  `ma_loaisp` varchar(20) NOT NULL,
  `ten_loaisp` varchar(50) NOT NULL,
  `mota_loaisp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adproducttype`
--

INSERT INTO `adproducttype` (`ma_loaisp`, `ten_loaisp`, `mota_loaisp`) VALUES
('nokia ', 'nokia100fsafs', '               aa siu bên fdafa           ');

-- --------------------------------------------------------

--
-- Table structure for table `ad_product`
--

CREATE TABLE `ad_product` (
  `ma_loaisp` varchar(50) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `gianhap` int(11) NOT NULL,
  `giaxuat` int(11) NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mota_sp` varchar(200) NOT NULL,
  `create_date` date NOT NULL,
  `flag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_product`
--

INSERT INTO `ad_product` (`ma_loaisp`, `masp`, `tensp`, `hinhanh`, `gianhap`, `giaxuat`, `khuyenmai`, `soluong`, `mota_sp`, `create_date`, `flag`) VALUES
('nokia ', '001', 'Điện thoại', 'iphone-11-pro-max.jpg', 1234312, 41241, 4213412, 1234, '                                fdsfsf               ', '2024-11-20', 'nổi bật');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new`
--

CREATE TABLE `tbl_new` (
  `code_new` varchar(20) NOT NULL,
  `title_new` varchar(50) NOT NULL,
  `content_new` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_new`
--

INSERT INTO `tbl_new` (`code_new`, `title_new`, `content_new`) VALUES
('123', 'qưe', 'adada');

-- --------------------------------------------------------

--
-- Table structure for table `ures`
--

CREATE TABLE `ures` (
  `uresname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password_again` varchar(20) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ures`
--

INSERT INTO `ures` (`uresname`, `password`, `password_again`, `role`) VALUES
('tuan0123', '12345', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adproducttype`
--
ALTER TABLE `adproducttype`
  ADD PRIMARY KEY (`ma_loaisp`);

--
-- Indexes for table `ad_product`
--
ALTER TABLE `ad_product`
  ADD PRIMARY KEY (`masp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
