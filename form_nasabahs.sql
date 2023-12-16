-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 06:33 AM
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
-- Table structure for table `form_nasabahs`
--

CREATE TABLE `form_nasabahs` (
  `id_nasabah` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `no_rek` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_nasabahs`
--

INSERT INTO `form_nasabahs` (`id_nasabah`, `nama`, `alamat`, `jenis_kelamin`, `pekerjaan`, `no_telp`, `no_rek`) VALUES
(2, 'Ehsan', 'Malaysia', 'Laki-laki', 'Mahasiswa', '098765', '34567'),
(3, 'Susanti', 'Malaysia', 'Perempuan', 'nganggur', '0128392392399', '1234567890'),
(6, 'Jein Grey', 'Malaysia', 'Perempuan', 'Penipu', '098765', '34567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_nasabahs`
--
ALTER TABLE `form_nasabahs`
  ADD PRIMARY KEY (`id_nasabah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_nasabahs`
--
ALTER TABLE `form_nasabahs`
  MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
