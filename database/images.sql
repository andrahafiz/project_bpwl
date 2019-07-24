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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `nama`, `ukuran`, `tipe`, `lokasi`, `status`) VALUES
(1, 'Screenshot (14).png', 756087, 'image/png', 'D:/xampp/htdocs/contoh/public/pages/tables/images/Guru/', 'UKM'),
(2, 'ANDRA HAFIZ.png', 140807, 'image/png', 'D:/xampp/htdocs/contoh/public/pages/tables/images/Guru/', NULL),
(3, 'form.png', 17520, 'image/png', 'D:/xampp/htdocs/contoh/public/pages/tables/images/Guru/', NULL),
(4, 'form.png', 17520, 'image/png', 'D:/xampp/htdocs/contoh/public/pages/tables/images/Guru/', NULL),
(5, 'Jenis Blok Struktru plsql.PNG', 53131, 'image/png', 'D:/xampp/htdocs/contoh/public/pages/tables/images/Guru/', NULL),
(6, 'Jenis Blok Struktru plsql.PNG', 53131, 'image/png', 'D:/xampp/htdocs/contoh/public/pages/tables/images/Guru/', NULL),
(7, 'Jenis Blok Struktru plsql.PNG', 53131, 'image/png', 'images/Guru/', NULL),
(8, 'Screenshot (14).png', 756087, 'image/png', 'images/Guru/', NULL),
(9, 'Screenshot (14).png', 756087, 'image/png', 'images/Guru/', NULL),
(10, 'Jenis Blok Struktru plsql.PNG', 53131, 'image/png', 'images/Guru/', NULL),
(11, 'form.png', 17520, 'image/png', 'images/Guru/', NULL),
(12, 'Jenis Blok Struktru plsql.PNG', 53131, 'image/png', 'images/Guru/', NULL),
(13, 'form.png', 17520, 'image/png', 'images/Guru/', NULL),
(14, 'Jenis Blok Struktru plsql.PNG', 53131, 'image/png', 'images/Guru/', NULL),
(15, 'Jenis Blok Struktru plsql.PNG', 53131, 'image/png', 'images/Guru/', NULL),
(16, 'Jenis Blok Struktru plsql.PNG', 53131, 'image/png', 'images/Guru/', NULL),
(17, 'Screenshot (14).png', 756087, 'image/png', 'images/Guru/', NULL),
(18, 'Screenshot (14).png', 756087, 'image/png', 'images/Guru/', NULL),
(19, 'Screenshot (14).png', 756087, 'image/png', 'images/Guru/', NULL),
(20, 'Screenshot (14).png', 756087, 'image/png', 'images/Guru/', NULL),
(21, '0018 biru-min.jpg', 215453, 'image/jpeg', 'images/Guru/', NULL),
(22, 'KTP.jpeg', 111249, 'image/jpeg', 'images/Guru/', NULL),
(23, 'pcr.jpg', 37350, 'image/jpeg', 'images/Guru/', NULL),
(24, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(25, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(26, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(27, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(28, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(29, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(30, 'erd pbo.JPG', 69527, 'image/jpeg', 'images/Fasilitas/', NULL),
(31, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(32, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(33, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(34, 'pcr.jpg', 37350, 'image/jpeg', 'images/Fasilitas/', NULL),
(35, 'Cut Ruhama.JPG', 18266, 'image/jpeg', 'images/Guru/', NULL),
(36, 'Gita Kartika.JPG', 21449, 'image/jpeg', 'images/Guru/', NULL),
(37, 'Rizal Mahfud.JPG', 22717, 'image/jpeg', 'images/Guru/', NULL),
(38, 'Wina Wulandari.JPG', 18863, 'image/jpeg', 'images/Guru/', NULL),
(39, 'Ismayani.jpg', 11929, 'image/jpeg', 'images/Guru/', NULL),
(40, 'Heri Maryanto.JPG', 13585, 'image/jpeg', 'images/Guru/', NULL),
(41, 'laborfisika.jpg', 19014, 'image/jpeg', 'images/Fasilitas/', NULL),
(42, 'laborbiologi.jpg', 42278, 'image/jpeg', 'images/Fasilitas/', NULL),
(43, 'laborkimia.jpg', 11340, 'image/jpeg', 'images/Fasilitas/', NULL),
(44, 'laborkomputer.jpg', 153884, 'image/jpeg', 'images/Fasilitas/', NULL),
(45, 'perpus.jpg', 13782, 'image/jpeg', 'images/Fasilitas/', NULL),
(46, 'uks.jpg', 58047, 'image/jpeg', 'images/Fasilitas/', NULL),
(47, 'lapangan.jpg', 6967, 'image/jpeg', 'images/Fasilitas/', NULL),
(48, 'P01.jpg', 7899, 'image/jpeg', 'images/Pengumuman/', NULL),
(49, 'P01.jpg', 7899, 'image/jpeg', 'images/Pengumuman/', NULL),
(50, 'P01.jpg', 7899, 'image/jpeg', 'images/Pengumuman/', NULL),
(51, 'P01.jpg', 7899, 'image/jpeg', 'images/Pengumuman/', NULL),
(52, 'p02.JPG', 45815, 'image/jpeg', 'images/Pengumuman/', NULL),
(53, 'p03.JPG', 57466, 'image/jpeg', 'images/Pengumuman/', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
