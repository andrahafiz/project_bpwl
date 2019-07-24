-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 06:38 PM
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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip_guru` varchar(20) NOT NULL,
  `guru_nama` varchar(50) NOT NULL,
  `photo_guru` varchar(100) DEFAULT NULL,
  `guru_singkatan` varchar(10) NOT NULL,
  `guru_pendidikanterakhir` varchar(5) NOT NULL,
  `guru_jabatan` varchar(20) NOT NULL,
  `guru_tmptlahir` varchar(20) NOT NULL,
  `guru_tgllahir` date NOT NULL,
  `guru_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip_guru`, `guru_nama`, `photo_guru`, `guru_singkatan`, `guru_pendidikanterakhir`, `guru_jabatan`, `guru_tmptlahir`, `guru_tgllahir`, `guru_alamat`) VALUES
('1855301001', 'Cut Ruhama, S.Pd.I', 'Cut Ruhama.JPG', 'CRH', 'S1', 'JBT001', 'Medan', '1967-01-09', 'JL. Karya Pembangunan No. 14 Gedung Johor Komp. BLPLP/Dinas Pertanian'),
('1855301002', 'Gita Kartika,  A.Md', 'Gita Kartika.JPG', 'GTA', 'D3', 'JBT004', 'Medan', '1982-06-03', 'Jl. Banyu Urip No. 341 Medan Marelan'),
('1855301003', 'Rizal Mahfud, S.Sos', 'Rizal Mahfud.JPG', 'RMH', 'S1', 'JBT005', 'Lhokseumawe', '1990-04-01', 'Jl. Bunga Pancur I'),
('1855301004', 'Heri Maryanto, S.E', 'Heri Maryanto.JPG', 'HMO', 'S1', 'JBT007', 'P. Brandan', '1967-03-18', 'Jl. Gatsu Gg. Damai No. 1 Medan'),
('1855301005', 'Wina Wulandari, S.Pd', 'Wina Wulandari.JPG', 'WWI', 'S1', 'JBT007', 'Medan', '1988-11-20', 'Jl. Pancing GG. Selamat No. 3 Martubung'),
('1855301006', 'Ismayani, S.Pd', 'Ismayani.jpg', 'ISM', 'S1', 'JBT007', 'Bunut Kisaran', '1987-03-25', 'Jl. Gurilla Gg. Pairan No. 7 Medan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip_guru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
