-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 03:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIK` int(16) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Jenis Kelamin` varchar(255) DEFAULT NULL,
  `Tanggal Lahir` date DEFAULT NULL,
  `Provinsi` varchar(255) DEFAULT NULL,
  `Kota` varchar(255) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `RT` int(11) DEFAULT NULL,
  `RW` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `NIK`, `Nama`, `Jenis Kelamin`, `Tanggal Lahir`, `Provinsi`, `Kota`, `Alamat`, `RT`, `RW`) VALUES
(1, 3173101, 'Raditya Danu', 'Laki-laki', '1993-08-10', 'DKI Jakarta', 'Jakarta Timur', 'Duren Sawit', 10, 20),
(2, 3173102, 'Udin', 'Laki-laki', '1998-02-05', 'DKI Jakarta', 'Jakarta Timur', 'Kalisari', 6, 4),
(3, 3173103, 'Mena', 'Perempuan', '2008-01-01', 'DKI Jakarta', 'Jakarta Barat', 'Apartment Mediterania', 6, 2),
(4, 3173104, 'Tester', NULL, NULL, 'Jawa Barat', 'Bandung', 'PVJ', 11, 12),
(5, 3173105, 'Nata', 'Perempuan', '2003-08-05', 'Jawa Barat', 'Bekasi', 'Perumahan Bekasi', 1, 1),
(6, 3173106, 'Arzeti', 'Perempuan', '2000-12-21', 'DKI Jakarta', 'Jakarta Pusat', 'Kemayoran', 15, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_penduduk_nik_unique` (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
