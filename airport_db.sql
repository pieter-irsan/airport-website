-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 07:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport_db`
--
CREATE DATABASE IF NOT EXISTS `airport_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `airport_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `keberangkatan`
--

CREATE TABLE `keberangkatan` (
  `kode_penerbangan` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maskapai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `terminal` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keberangkatan`
--

INSERT INTO `keberangkatan` (`kode_penerbangan`, `waktu`, `tujuan`, `maskapai`, `terminal`, `keterangan`) VALUES
('CG1013', '2021-01-28 20:38:00', 'JOG - Yogyakarta', 'CG - Citilink', '2A', ''),
('ID1248', '2021-01-28 11:30:00', 'CPF - Cepu', 'ID - Batik Air', '2D', ''),
('IW2395', '2021-01-28 11:43:00', 'BDO - Bandung', 'IW - Wings Air', '1A', ''),
('JT1359', '2021-01-28 11:39:00', 'PPJ - Kepulauan Seribu', 'JT - Lion Air', '1B', ''),
('MV1499', '2021-01-28 18:40:00', 'HLP - Jakarta', 'MV - Aviastar Mandiri', '1C', ''),
('QZ1384', '2021-01-28 11:44:00', 'TSY - Tasikmalaya', 'QZ - Air Asia Indonesia', '2B', '');

-- --------------------------------------------------------

--
-- Table structure for table `kedatangan`
--

CREATE TABLE `kedatangan` (
  `kode_penerbangan` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `asal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maskapai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `terminal` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kedatangan`
--

INSERT INTO `kedatangan` (`kode_penerbangan`, `waktu`, `asal`, `maskapai`, `terminal`, `keterangan`) VALUES
('GA2406', '2021-01-28 11:48:00', 'PCB - Pamulang', 'GA - Garuda Indonesia', '1A', ''),
('ID6519', '2021-01-28 13:00:00', 'CGK - Banten', 'ID - Batik Air', '2E', ''),
('JT0001', '2021-01-28 03:30:00', 'DPS - Denpasar', 'JT - Lion Air', '2A', ''),
('JT1350', '2021-01-29 11:45:00', 'SRG - Semarang', 'JT - Lion Air', '2C', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD PRIMARY KEY (`kode_penerbangan`);

--
-- Indexes for table `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD PRIMARY KEY (`kode_penerbangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
