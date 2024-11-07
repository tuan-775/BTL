-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 03:51 PM
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
-- Table structure for table `adproduct`
--

CREATE TABLE `adproduct` (
  `ma_loaisp` varchar(50) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `gianhap` int(11) NOT NULL,
  `giaxuat` int(11) NOT NULL,
  `khuyenmai` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mota_sp` varchar(200) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('nokia ', 'nokia100fsafs', '        siu bên fdafa     ');

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
('tuan2606', '12345', '', 0),
('', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adproduct`
--
ALTER TABLE `adproduct`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `adproducttype`
--
ALTER TABLE `adproducttype`
  ADD PRIMARY KEY (`ma_loaisp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
