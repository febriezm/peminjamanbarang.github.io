-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 12:08 AM
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
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(255) NOT NULL,
  `kode_brg` varchar(255) DEFAULT NULL,
  `nama_brg` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `jumlah` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_brg`, `nama_brg`, `kategori`, `merk`, `jumlah`) VALUES
(1, 'HPPVNAE1', 'HP Pavilion Aero 1', 'Laptop', 'HP', 40),
(2, 'MSLGTPROX', 'Mouse Logitech G-PRO X', 'Mouse', 'Logitech', 50),
(3, 'LGTMSPAD', 'Logitech Mouse Pad', 'MousePad', 'Logitech', 70),
(6, 'LNVTH10', 'Thinkplus Lenovo TH10', 'Headphone', 'Lenovo', 60),
(7, 'APPMACM1', 'Apple MacBook Air M1', 'Laptop', 'Apple', 20),
(8, 'LNVY520', 'Lenovo Legion Y520', 'Laptop', 'Lenovo', 30);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(255) NOT NULL,
  `tgl_pinjam` datetime(6) DEFAULT NULL,
  `tgl_kembali` datetime(6) DEFAULT NULL,
  `no_identitas` varchar(255) DEFAULT NULL,
  `kode_barang` varchar(255) DEFAULT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `id_login` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `tgl_pinjam`, `tgl_kembali`, `no_identitas`, `kode_barang`, `jumlah`, `keperluan`, `status`, `id_login`) VALUES
(1, '2024-03-01 00:00:00.000000', '2024-03-14 00:00:00.000000', '123', 'HPPVNAE1', 12, 'sekolah', NULL, NULL),
(2, '2024-03-01 00:00:00.000000', '2024-03-14 00:00:00.000000', '123', 'HPPVNAE1', 40, 'sekolah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `no_identitas` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `no_identitas`, `nama`, `status`, `username`, `password`, `role`) VALUES
(1, '090207', 'Febrie Zaeni Muchtar', 'Admin', 'admin', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'Admin'),
(2, '230507', 'Kairi Vidin', 'Member', 'kai_vidin', '827ccb0eea8a706c4c34a16891f84e7b', 'Member'),
(3, '082348', 'Afif Fadillah', 'Member', 'fadil_apiw', 'e10adc3949ba59abbe56e057f20f883e', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
