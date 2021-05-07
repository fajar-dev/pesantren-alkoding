-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 02:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantren`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(11) NOT NULL,
  `tgl_buat` datetime NOT NULL,
  `pemateri` varchar(255) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `tanggal` date NOT NULL,
  `wkt_mulai` time NOT NULL,
  `wkt_selesai` time NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `tgl_buat`, `pemateri`, `materi`, `deskripsi`, `tanggal`, `wkt_mulai`, `wkt_selesai`, `alamat`, `latitude`, `longitude`) VALUES
(1, '2021-05-02 12:30:26', 'fajar chan', 'Web Fudamental', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, ipsam. Consectetur sequi repellat quas cum sed, iusto odio porro sit. Consequuntur deserunt perspiciatis est nisi eveniet, aperiam harum non quaerat!\r\n', '2021-05-03', '15:00:00', '17:00:00', 'MAPN 4 Medan, Jl jala raya griya martubung', '3.6938731', '98.6903727'),
(9, '2021-05-06 23:58:14', 'Fajar Rivaldi S.T M.Kom', 'frontend web development', 'belajar menggunakan framework vue.js  ', '2021-05-08', '15:00:00', '18:00:00', 'bi coffe', '41.40338', '2.17403'),
(10, '2021-05-07 00:02:23', 'Fajar Rivaldi S.T M.Kom', 'mvc php', 'Belajar Dasar php mvc dengan media CI 3', '2021-05-15', '13:00:00', '16:00:00', 'bi coffe', '5.22009229134386', '97.07035374276451');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `lahir` date NOT NULL,
  `kelamin` enum('pria','wanita') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('murid','guru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `nomor`, `lahir`, `kelamin`, `username`, `password`, `status`) VALUES
(12, 'fajar chan', 'fajarrivaldi2015@gmail.com', '0895611024559', '2021-05-30', 'wanita', 'fajarchan', 'd947da601902ad866d6a027419f4767d', 'guru'),
(14, 'Fajar Rivaldi S.T M.Kom', 'chanofficial2020@gmail.com', '0895611024559', '2021-01-01', 'pria', 'Fajar_chan', 'bb26f2c300764c940a9f24baee217e47', 'guru'),
(15, 'siti maimunah', 'siti1484@gmail.com', '089677885642', '2003-02-06', 'wanita', 'munah', '6eea9b7ef19179a06954edd0f6c05ceb', 'murid'),
(16, 'rizky dayat', 'dayat.rizky18@gmail.com', '081235778564', '2003-07-06', 'pria', 'yayat', '003a2e347a33aa980ee8a4995a54ed08', 'murid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
