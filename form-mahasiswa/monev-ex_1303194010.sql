-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 06:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monev-ex_1303194010`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nomor_hp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `nomor_hp`) VALUES
(1303193298, 'Budi Doremi', 'Laki-Laki', 'Jakarta Selatan', '2000-07-29', 'Mangga Sepuluh, JakSel', 'budidodododoremimi@gmail.com', '0813827199383'),
(1303194010, 'Sultan Kautsar', 'Laki-Laki', 'Magelang', '03/17/2001', 'Mertoyudan, Magelang', 'skautsar17@gmail.com', '081225459071');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bidang` enum('Finance','Marketing','HR') NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `email`, `bidang`, `alamat`) VALUES
(1, 'Adi Wirawan', 'gmail@gmail.com', 'Marketing', 'Indonesia'),
(2, 'Ani binti Roma', 'gmail@gmail.com', 'Finance', 'Indonesia'),
(3, 'Budi Prasetyo', 'gmail@gmail.com', 'HR', 'Indonesia'),
(4, 'Candra ', 'gmail@gmail.com', 'Finance', 'Indonesia'),
(5, 'Donny', 'gmail@gmail.com', 'Finance', 'Indonesia'),
(6, 'Erlan', 'gmail@gmail.com', 'Finance', 'Indonesia'),
(7, 'Fajar', 'gmail@gmail.com', 'Marketing', 'Indonesia'),
(8, 'Gadjahmada', 'gmail@gmail.com', 'Finance', 'Indonesia'),
(11, 'Eko Candra', 'gmail@gmail.com', 'Finance', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
