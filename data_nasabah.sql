-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 06:32 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamber`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_nasabah`
--

CREATE TABLE `data_nasabah` (
  `id` int(11) NOT NULL,
  `id_sampah` int(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis` varchar(200) NOT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `debet` varchar(100) DEFAULT NULL,
  `kredit` varchar(100) DEFAULT NULL,
  `saldo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_nasabah`
--

INSERT INTO `data_nasabah` (`id`, `id_sampah`, `tanggal`, `jenis`, `satuan`, `debet`, `kredit`, `saldo`) VALUES
(75, 2, '2023-12-14', 'Plastik', '8kh', 'k', 'cidu', '1222'),
(76, 6, '2023-12-15', 'Logam', '8kh', 'nanti', 'terong', 'asdsd'),
(77, 6, '2023-12-15', 'Logam', '8kh', 'nanti', 'terong', 'asdsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_nasabah`
--
ALTER TABLE `data_nasabah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sampah` (`id_sampah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_nasabah`
--
ALTER TABLE `data_nasabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_nasabah`
--
ALTER TABLE `data_nasabah`
  ADD CONSTRAINT `data_nasabah_ibfk_1` FOREIGN KEY (`id_sampah`) REFERENCES `form_nasabahs` (`id_nasabah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
