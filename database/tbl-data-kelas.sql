-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 11:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `tbl_data_kelas`
--

CREATE TABLE `tbl_data_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_data_kelas`
--

INSERT INTO `tbl_data_kelas` (`id_kelas`, `nama_kelas`, `deskripsi`, `id_user`, `created_at`, `updated_at`) VALUES
(3, 'Belajar Analisa Oli Mesin', 'Khusus pada mesin tipe Liebherr D9512', 1245, '2024-07-20 06:28:18', '2024-07-20 06:28:18'),
(5, 'Belajar Membuat Database SQL', 'Materi dasar', 3245, '2024-07-20 07:19:32', '2024-07-20 08:51:51'),
(6, 'Cara Mendesain Rumah', 'Menggunakan SkecthUp', 995, '2024-07-20 07:25:51', '2024-07-20 08:58:55'),
(8, 'Memperbaiki Kulkas', 'Tambah freon', 9456, '2024-07-20 08:48:42', '2024-07-20 08:48:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_kelas`
--
ALTER TABLE `tbl_data_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_kelas`
--
ALTER TABLE `tbl_data_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
