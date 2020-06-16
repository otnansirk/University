-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 16, 2020 at 04:41 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `harga` mediumint NOT NULL,
  `kode_supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga`, `kode_supplier`) VALUES
('B003', 'Tas Rajut', 200000, '1oksowkris'),
('B004', 'Sepatu sport', 300000, '1oksowkris'),
('B005', 'Kaos kaki sport', 50000, '1oksowkris'),
('B010', 'Kaos Polo', 50000, 'SP003'),
('B121', 'Tas Rajut', 23000, 'SP003'),
('B123', 'Kaos Polo', 120000, '1oksowkris');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `kode_stok` bigint NOT NULL,
  `kode_supplier` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kode_barang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`kode_stok`, `kode_supplier`, `kode_barang`, `jumlah`) VALUES
(2, '1oksowkris', 'B123', 455),
(3, 'SP003', 'B003', 20);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` varchar(255) NOT NULL,
  `nama_supplier` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alamat` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_telepon` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '15'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `no_telepon`) VALUES
('1oksowkris', 'Bandit', 'Yogyakarta', '08675895844'),
('SP003', 'Bangsa Digital', 'Seleman, Yogyakarta', '0857089487333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD UNIQUE KEY `unique_kode_barang` (`kode_barang`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD UNIQUE KEY `unique_kode_stock` (`kode_stok`),
  ADD UNIQUE KEY `kode_stok` (`kode_stok`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD UNIQUE KEY `unique_kode_supplier` (`kode_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `kode_stok` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
