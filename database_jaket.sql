-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 04:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_jaket`
--

-- --------------------------------------------------------

--
-- Table structure for table `jaket`
--

CREATE TABLE `jaket` (
  `id_jaket` int(50) NOT NULL,
  `merk_jaket` varchar(50) NOT NULL,
  `color_jaket` varchar(50) NOT NULL,
  `size_jaket` varchar(50) NOT NULL,
  `harga_jaket` varchar(50) NOT NULL,
  `jenis_jaket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jaket`
--

INSERT INTO `jaket` (`id_jaket`, `merk_jaket`, `color_jaket`, `size_jaket`, `harga_jaket`, `jenis_jaket`) VALUES
(1, 'Eiger', 'Merah', 'S,M,L', 'Rp299.000', 'Jaket Gunung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jaket`
--
ALTER TABLE `jaket`
  ADD PRIMARY KEY (`id_jaket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jaket`
--
ALTER TABLE `jaket`
  MODIFY `id_jaket` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
