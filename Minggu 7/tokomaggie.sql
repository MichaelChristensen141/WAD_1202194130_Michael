-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 08:39 PM
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
-- Database: `tokomaggie`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `no` int(50) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `nama_barang` varchar(500) NOT NULL,
  `kode_barang` varchar(500) NOT NULL,
  `harga_barang` varchar(500) NOT NULL,
  `stock_barang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`no`, `gambar`, `nama_barang`, `kode_barang`, `harga_barang`, `stock_barang`) VALUES
(1, 'VGA RTX 3050.png', 'VGA', 'STRIX3050', 'Rp7.300.000', '50'),
(2, 'VGA RTX 3060.png', 'VGA', 'STRIX3060', 'Rp7.600.000', '50'),
(3, 'VGA RTX 3070.png', 'VGA', 'GBYTX3070', 'Rp7.766.000', '50'),
(4, 'VGA RTX 3080.png', 'VGA', 'STRIX3080', 'Rp26.450.000', '50'),
(5, 'VGA RTX 3090.png', 'VGA', 'STRIX3090', 'Rp39.500.000', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
