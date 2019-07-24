-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 06:39 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_bpwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `sekolah_profile`
--

CREATE TABLE `sekolah_profile` (
  `sekolah_nama` varchar(100) NOT NULL,
  `sekolah_alamat` text NOT NULL,
  `sekolah_telp` varchar(20) NOT NULL,
  `sekolah_email` varchar(50) NOT NULL,
  `sekolah_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah_profile`
--

INSERT INTO `sekolah_profile` (`sekolah_nama`, `sekolah_alamat`, `sekolah_telp`, `sekolah_email`, `sekolah_logo`) VALUES
('SDN 0001 ', 'Jalan Kembang Sari', '0617351010', 'sdn0001.kembangsari@gmail.com', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sekolah_profile`
--
ALTER TABLE `sekolah_profile`
  ADD PRIMARY KEY (`sekolah_nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
