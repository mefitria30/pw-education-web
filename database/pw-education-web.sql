-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 07:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw-education-web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_materi`
--

CREATE TABLE `tbl_data_materi` (
  `id_materi` int(11) NOT NULL,
  `id_kelas` varchar(255) DEFAULT NULL,
  `id_pelajaran` varchar(255) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `judul_materi` text DEFAULT NULL,
  `isi_materi` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `status` enum('verification','approved','rejected') DEFAULT NULL,
  `tanggal_dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `approver` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_materi`
--

INSERT INTO `tbl_data_materi` (`id_materi`, `id_kelas`, `id_pelajaran`, `id_user`, `judul_materi`, `isi_materi`, `file`, `status`, `tanggal_dibuat`, `approver`) VALUES
(1, '1', '1', '1', 'lorem lorem', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', NULL, 'approved', '2024-07-19 00:19:28', '1'),
(2, '1', '1', '1', 'lorem lorem', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', NULL, 'approved', '2024-07-19 00:19:28', '1'),
(3, NULL, NULL, NULL, 'test title', 'test subtitle lorem lorem', NULL, NULL, '2024-07-19 00:48:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_materi`
--
ALTER TABLE `tbl_data_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_materi`
--
ALTER TABLE `tbl_data_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
