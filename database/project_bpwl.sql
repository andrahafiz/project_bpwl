-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 08:12 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


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

CREATE TABLE `guru`
(
  `nip_guru` varchar
(20) NOT NULL,
  `guru_nama` varchar
(50) NOT NULL,
  `photo_guru` varchar
(100) DEFAULT NULL,
  `guru_singkatan` varchar
(10) NOT NULL,
  `guru_pendidikanterakhir` varchar
(5) NOT NULL,
  `guru_jabatan` varchar
(20) NOT NULL,
  `guru_tmptlahir` varchar
(20) NOT NULL,
  `guru_tgllahir` date NOT NULL,
  `guru_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`
nip_guru`,
`guru_nama
`, `photo_guru`, `guru_singkatan`, `guru_pendidikanterakhir`, `guru_jabatan`, `guru_tmptlahir`, `guru_tgllahir`, `guru_alamat`) VALUES
('10210', 'a', 'NULL', 'asd', 'asd', 'asd', 'asd', '2019-07-03', 'asd'),
('18289898', 'andra hafiz hsb', 'Jenis Blok Struktru plsql.PNG', 'AND', ' andr', 'JBT001', 'Medan', '2000-04-03', 'a'),
('asd', 'asd', 'Screenshot (14).png', 'asd', 'S1', 'JBT006', 'asd', '2000-03-03', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images`
(
  `id` int
(11) NOT NULL,
  `nama` varchar
(100) NOT NULL,
  `ukuran` int
(11) NOT NULL,
  `tipe` varchar
(100) NOT NULL,
  `lokasi` text NOT NULL,
  `status` varchar
(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`
id`,
`nama
`, `ukuran`, `tipe`, `lokasi`, `status`) VALUES
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
(22, 'KTP.jpeg', 111249, 'image/jpeg', 'images/Guru/', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan`
(
  `jabatan_id` varchar
(20) NOT NULL,
  `jabatan_nama` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`
jabatan_id`,
`jabatan_nama
`) VALUES
('JBT001', 'Kepala Sekolah'),
('JBT002', 'Wakil Kepala Sekolah'),
('JBT003', 'Wakil Kepala Sekolah Bidang Hubungan Masyarakat'),
('JBT004', 'Wakil Kepala Sekolah Bidang Kurikulum'),
('JBT005', 'Wakil Kepala Sekolah Bidang Kesiswaan'),
('JBT006', 'Wakil Kepala Sekolah Bidang Sarana Prasaran'),
('JBT007', 'Guru Mata Pelajaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
ADD PRIMARY KEY
(`nip_guru`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
ADD PRIMARY KEY
(`jabatan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;


CREATE TABLE `sekolah_profile`
(
  `sekolah_nama` varchar
(100) NOT NULL,
  `sekolah_alamat` text NOT NULL,
  `sekolah_telp` varchar
(20) NOT NULL,
  `sekolah_email` varchar
(50) NOT NULL,
  `sekolah_logo` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah_profile`
--

INSERT INTO `sekolah_profile` (`
sekolah_nama`,
`sekolah_alamat
`, `sekolah_telp`, `sekolah_email`, `sekolah_logo`) VALUES
('SDN 0001 ', 'Jalan Kembang Sari', '0617351010', 'sdn0001.kembangsari@gmail.com', 'logo.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
