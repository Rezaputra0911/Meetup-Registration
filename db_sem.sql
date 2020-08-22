-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 05:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `privilage` varchar(20) NOT NULL,
  `user_sem` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `privilage`, `user_sem`) VALUES
('kalbis', '12345', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekap`
--

CREATE TABLE `tbl_rekap` (
  `nama_sem` varchar(100) NOT NULL,
  `jadwal` varchar(25) NOT NULL,
  `penanggungjawab` varchar(15) NOT NULL,
  `jml_pes` int(10) DEFAULT NULL,
  `id_rekap` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seminar`
--

CREATE TABLE `tbl_seminar` (
  `nama_sem` varchar(100) NOT NULL,
  `jadwal` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `narasumber` varchar(50) NOT NULL,
  `penanggungjawab` varchar(40) NOT NULL,
  `jml_peserta` int(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  `paper` varchar(25) DEFAULT NULL,
  `pembayaran` varchar(25) DEFAULT NULL,
  `waktu` varchar(20) NOT NULL,
  `poster` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_rekap`
--
ALTER TABLE `tbl_rekap`
  ADD PRIMARY KEY (`id_rekap`);

--
-- Indexes for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_rekap`
--
ALTER TABLE `tbl_rekap`
  MODIFY `id_rekap` int(10) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
