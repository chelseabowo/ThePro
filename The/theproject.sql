-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 01:21 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_sekolah`
--

CREATE TABLE `d_sekolah` (
  `d_sekolah_id` int(5) NOT NULL,
  `sekolah_id` varchar(20) NOT NULL,
  `sekolah_nama` varchar(30) NOT NULL,
  `sekolah_alamat` varchar(100) NOT NULL,
  `sekolah_no_telp` varchar(20) NOT NULL,
  `m_provinsi_id` int(5) NOT NULL,
  `m_kota_id` int(5) NOT NULL,
  `m_kecamatan_id` int(5) NOT NULL,
  `m_kelurahan_id` int(5) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  `updated_date` date NOT NULL,
  `updated_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_sekolah`
--

INSERT INTO `d_sekolah` (`d_sekolah_id`, `sekolah_id`, `sekolah_nama`, `sekolah_alamat`, `sekolah_no_telp`, `m_provinsi_id`, `m_kota_id`, `m_kecamatan_id`, `m_kelurahan_id`, `created_date`, `created_by`, `updated_date`, `updated_by`) VALUES
(12, 'SMPN1BOJONG', 'SMPN 1 BOJONG', 'Jalanin aja dulu siapa tau jodoh', 'sama kaya kemarin', 1, 1, 1, 1, '2018-08-05', 1, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m_kecamatan`
--

CREATE TABLE `m_kecamatan` (
  `m_kecamatan_id` int(5) NOT NULL,
  `m_kota_id` int(5) NOT NULL,
  `kecamatan_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kecamatan`
--

INSERT INTO `m_kecamatan` (`m_kecamatan_id`, `m_kota_id`, `kecamatan_nama`) VALUES
(1, 1, 'KEC. BOJONG');

-- --------------------------------------------------------

--
-- Table structure for table `m_kelurahan`
--

CREATE TABLE `m_kelurahan` (
  `m_kelurahan_id` int(5) NOT NULL,
  `m_kecamatan_id` int(5) NOT NULL,
  `kelurahan_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kelurahan`
--

INSERT INTO `m_kelurahan` (`m_kelurahan_id`, `m_kecamatan_id`, `kelurahan_nama`) VALUES
(1, 1, 'REJOSARI'),
(2, 1, 'WANGANDOWO'),
(3, 1, 'BUKUR'),
(4, 1, 'RANDUMUKTIWAREN');

-- --------------------------------------------------------

--
-- Table structure for table `m_kota`
--

CREATE TABLE `m_kota` (
  `m_kota_id` int(5) NOT NULL,
  `m_provinsi_id` int(5) NOT NULL,
  `kota_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kota`
--

INSERT INTO `m_kota` (`m_kota_id`, `m_provinsi_id`, `kota_nama`) VALUES
(1, 1, 'KAB. PEKALONGAN');

-- --------------------------------------------------------

--
-- Table structure for table `m_provinsi`
--

CREATE TABLE `m_provinsi` (
  `m_provinsi_id` int(5) NOT NULL,
  `provinsi_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_provinsi`
--

INSERT INTO `m_provinsi` (`m_provinsi_id`, `provinsi_nama`) VALUES
(1, 'JAWA TENGAH'),
(2, 'DI YOGYAKARTA');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `m_user_id` int(8) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `user_nama` varchar(35) NOT NULL,
  `user_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`m_user_id`, `user_id`, `user_nama`, `user_password`) VALUES
(1, 'admin', 'Super Admin', 'zxcv'),
(2, 'bowo', 'bowo', 'zxcv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_sekolah`
--
ALTER TABLE `d_sekolah`
  ADD PRIMARY KEY (`d_sekolah_id`);

--
-- Indexes for table `m_kecamatan`
--
ALTER TABLE `m_kecamatan`
  ADD PRIMARY KEY (`m_kecamatan_id`);

--
-- Indexes for table `m_kelurahan`
--
ALTER TABLE `m_kelurahan`
  ADD PRIMARY KEY (`m_kelurahan_id`);

--
-- Indexes for table `m_kota`
--
ALTER TABLE `m_kota`
  ADD PRIMARY KEY (`m_kota_id`);

--
-- Indexes for table `m_provinsi`
--
ALTER TABLE `m_provinsi`
  ADD PRIMARY KEY (`m_provinsi_id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`m_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_sekolah`
--
ALTER TABLE `d_sekolah`
  MODIFY `d_sekolah_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_kecamatan`
--
ALTER TABLE `m_kecamatan`
  MODIFY `m_kecamatan_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_kelurahan`
--
ALTER TABLE `m_kelurahan`
  MODIFY `m_kelurahan_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_kota`
--
ALTER TABLE `m_kota`
  MODIFY `m_kota_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_provinsi`
--
ALTER TABLE `m_provinsi`
  MODIFY `m_provinsi_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `m_user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
