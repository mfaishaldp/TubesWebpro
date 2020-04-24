-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 03:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kliniksunateuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `uDokter` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipeSunat` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `saldo` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordersunat`
--

CREATE TABLE `ordersunat` (
  `idOrder` int(11) NOT NULL,
  `uPasien` varchar(20) NOT NULL,
  `uDokter` varchar(20) NOT NULL,
  `tglSunat` date NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `uPasien` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `saldo` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipesunat`
--

CREATE TABLE `tipesunat` (
  `tipeSunat` varchar(30) NOT NULL,
  `harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipesunat`
--

INSERT INTO `tipesunat` (`tipeSunat`, `harga`) VALUES
('clamp', 850000),
('Khusus Gendut', 1500000),
('Reguler', 600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`uDokter`),
  ADD KEY `Fk_tipeSunat` (`tipeSunat`);

--
-- Indexes for table `ordersunat`
--
ALTER TABLE `ordersunat`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `Fk_uPasien` (`uPasien`),
  ADD KEY `Fk_uDokter` (`uDokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`uPasien`);

--
-- Indexes for table `tipesunat`
--
ALTER TABLE `tipesunat`
  ADD PRIMARY KEY (`tipeSunat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordersunat`
--
ALTER TABLE `ordersunat`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `Fk_tipeSunat` FOREIGN KEY (`tipeSunat`) REFERENCES `tipesunat` (`tipeSunat`);

--
-- Constraints for table `ordersunat`
--
ALTER TABLE `ordersunat`
  ADD CONSTRAINT `Fk_uDokter` FOREIGN KEY (`uDokter`) REFERENCES `dokter` (`uDokter`),
  ADD CONSTRAINT `Fk_uPasien` FOREIGN KEY (`uPasien`) REFERENCES `pasien` (`uPasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
