-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 05:48 PM
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
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` varchar(100) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `foto_pengumuman` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `foto_pengumuman`) VALUES
('P01', 'Peringatan Hari Kebangkitan Nasional', 'Diberitahukan kepada seluruh siswa kelas VII untuk hadir pada peringatan hari Kebangkitan Nasional', 'P01.jpg'),
('P02', 'Libur Hari Raya Idul Fitri 1436H dan cuti bersama', 'Sehubungan dengan libur Hari Raya Idul Fitri 1436H dan cuti bersama maka Layanan Perpustakaan diatur menjadi sebagai berikut :', 'p02.JPG'),
('P03', 'Peraturan KBM minggu terakhir dan Penerimaan Rapor', 'Berikut jadwal KBM terhitung sejak 13 s.d 16 Desember 2019 dan jadwal penerimaan rapor', 'p03.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
