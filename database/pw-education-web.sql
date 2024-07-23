-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 04:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_data_materi`
--

INSERT INTO `tbl_data_materi` (`id_materi`, `id_kelas`, `id_pelajaran`, `id_user`, `judul_materi`, `isi_materi`, `file`, `status`, `tanggal_dibuat`, `approver`) VALUES
(1, '1', '1', '1', 'lorem lorem', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', NULL, 'approved', '2024-07-19 00:19:28', '1'),
(2, '1', '1', '1', 'lorem lorem', 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ', NULL, 'approved', '2024-07-19 00:19:28', '1'),
(3, NULL, NULL, NULL, 'test title', 'test subtitle lorem lorem', NULL, NULL, '2024-07-19 00:48:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_user`
--

CREATE TABLE `tbl_data_user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `level_user` enum('admin','user','member') NOT NULL DEFAULT 'user',
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_data_user`
--

INSERT INTO `tbl_data_user` (`id_user`, `nama_user`, `email_user`, `password_user`, `level_user`, `tanggal_dibuat`) VALUES
(3, 'reyhan', 'rey@gmail.com', '$2y$10$xE6orQM5ScKsIv8wc72e7OY5nyHGu5kFA9tREQPk4RKWryIvNlT7O', 'member', '2024-07-20 06:25:55'),
(6, 'Yafi Irsyad Ramadhan', 'yafiirsyad07@gmail.com', '$2y$10$txk.84JrUIuKyJQjKFkagOmfi0IW7RKYV0tGAY.p9UePHhy.QFvnu', 'member', '2024-07-20 07:54:40'),
(7, 'Fitri', 'fitri@gmail.com', '$2y$10$9jGESHXFE4pPhvUZiOQJAeFOJwy1IEYNJgZLLyhZapjfwXUj9p3o6', 'admin', '2024-07-20 07:58:24'),
(8, 'Azmi', 'azmi@gmail.com', '$2y$10$WKzHmojdiURK2UgsWYceKO0bJsU8210oMyRCmdpGwX8YVFh18zsUu', 'user', '2024-07-20 14:26:20');

--
-- Indexes for dumped tables
--
--
-- Table structure for table `tbl_data_pelajaran`
--

CREATE TABLE `tbl_data_pelajaran` (
  `id_pelajaran` int NOT NULL,
  `kode_pelajaran` varchar(10) NOT NULL,
  `nama_pelajaran` varchar(255) NOT NULL,
  `deskripsi` text,
  `kategori` enum('Ilmu Komputer','Ekonomi','Bahasa') NOT NULL,
  `pengajar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_data_pelajaran`
--

INSERT INTO `tbl_data_pelajaran` (`id_pelajaran`, `kode_pelajaran`, `nama_pelajaran`, `deskripsi`, `kategori`, `pengajar`) VALUES
(1, 'PW401', 'Pemograman Web 1', 'Pengenalan HTML', 'Ilmu Komputer', 'Riad Sahara, S.SI, MT'),
(2, 'PLSQL202', 'Pemograman PL/SQL', 'Pemograman PL/SQL Pengenalan Structural Query Language(SQL)', 'Ilmu Komputer', 'Cian Ramadhona Hassolthine,S.Kom,M.Kom');

-- --------------------------------------------------------

--
-- Indexes for table `tbl_data_materi`
--
ALTER TABLE `tbl_data_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_data_pelajaran`
--
ALTER TABLE `tbl_data_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_materi`
--
ALTER TABLE `tbl_data_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_data_pelajaran`
--
ALTER TABLE `tbl_data_pelajaran`
  MODIFY `id_pelajaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
