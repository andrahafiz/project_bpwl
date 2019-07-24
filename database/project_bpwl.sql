-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 06:37 PM
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
-- Table structure for table `eskul`
--

CREATE TABLE `eskul` (
  `kode_eskul` varchar(20) NOT NULL,
  `nama_eskul` varchar(50) NOT NULL,
  `foto_eskul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eskul`
--

INSERT INTO `eskul` (`kode_eskul`, `nama_eskul`, `foto_eskul`) VALUES
('0101', 'Bola Basket', 'basket.jpg'),
('0102', 'Futsal', 'futsal.jpg'),
('0103', 'Karate', 'karate.jpg'),
('0104', 'Volly', 'voli.png'),
('0105', 'Renang', 'renang.png');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` varchar(100) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `foto_fasilitas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `foto_fasilitas`) VALUES
('F01', 'Laboratorium Fisika', 'laborfisika.jpg'),
('F02', 'Laboratorium Biologi', 'laborbiologi.jpg'),
('F03', 'Laboratorium Kimia', 'laborkimia.jpg'),
('F04', 'Laboratorium Komputer', 'laborkomputer.jpg'),
('F05', 'Perpustakaan', 'perpus.jpg'),
('F06', 'UKS', 'uks.jpg'),
('F07', 'Lapangan Olahraga', 'lapangan.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` varchar(20) NOT NULL,
  `jabatan_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `jabatan_nama`) VALUES
('JBT001', 'Kepala Sekolah'),
('JBT002', 'Wakil Kepala Sekolah'),
('JBT003', 'Wakil Kepala Sekolah Bidang Hubungan Masyarakat'),
('JBT004', 'Wakil Kepala Sekolah Bidang Kurikulum'),
('JBT005', 'Wakil Kepala Sekolah Bidang Kesiswaan'),
('JBT006', 'Wakil Kepala Sekolah Bidang Sarana Prasaran'),
('JBT007', 'Wakil Kepala Sekolah Bidang Administrasi'),
('JBT008', 'Guru Mata Pelajaran');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` varchar(100) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `foto_pengumuman` varchar(100) DEFAULT NULL,
  `waktu_pengumuman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `foto_pengumuman`, `waktu_pengumuman`) VALUES
('P01', 'Peringatan Hari Kebangkitan Nasional', 'Diberitahukan kepada seluruh siswa kelas VII untuk hadir pada peringatan hari Kebangkitan Nasional', 'P01.jpg', '2019-07-24 16:36:57'),
('P02', 'Libur Hari Raya Idul Fitri 1436H dan cuti bersama', 'Sehubungan dengan libur Hari Raya Idul Fitri 1436H dan cuti bersama maka Layanan Perpustakaan diatur menjadi sebagai berikut :', 'p02.JPG', '2019-07-24 16:36:57'),
('P03', 'Peraturan KBM minggu terakhir dan Penerimaan Rapor', 'Berikut jadwal KBM terhitung sejak 13 s.d 16 Desember 2019 dan jadwal penerimaan rapor', 'p03.JPG', '2019-07-24 16:36:57');

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
-- Indexes for table `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`kode_eskul`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip_guru`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `sekolah_profile`
--
ALTER TABLE `sekolah_profile`
  ADD PRIMARY KEY (`sekolah_nama`);

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
