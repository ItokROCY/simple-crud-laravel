-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 02:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_tabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `jumlah_barang`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'jeruk', 5, 2500, NULL, NULL),
(3, 'apel malang', 11, 2000, NULL, NULL),
(4, 'apel washington', 3, 7000, NULL, NULL),
(5, 'apel jepang', 5, 6500, NULL, NULL),
(6, 'mangga', 1, 2000, NULL, NULL),
(7, 'mangga manis', 4, 2500, NULL, NULL),
(8, 'mangga merah', 12, 3500, NULL, NULL),
(9, 'jambu', 15, 4000, NULL, NULL),
(10, 'jeruk', 14, 2000, NULL, NULL),
(11, 'jeruk bali', 23, 3500, NULL, NULL),
(12, 'jambu air', 51, 1500, NULL, NULL),
(13, 'jeruk mandarin', 23, 4000, NULL, NULL),
(14, 'semangka tanpa biji', 15, 5000, '2023-07-10 01:10:56', '2023-07-10 01:10:56'),
(15, 'semangka biji kecil', 4, 5000, '2023-07-11 09:11:08', '2023-07-11 09:11:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
