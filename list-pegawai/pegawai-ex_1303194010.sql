-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 06:51 AM
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
-- Database: `pegawai-ex_1303194010`
--

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
(21, 'Budi Dermawan', 'budidermawan@hotmail.com', 'Finance', 'Solo, Jawa Tengah'),
(22, 'Royco Sasa', 'roycosasa@outlook.com', 'Marketing', 'Kuningan, DKI Jakarta'),
(23, 'Selamet Sentosa', 'selametsentosa@gmail.com', 'Finance', 'Depok, Yogyakarta'),
(24, 'Paidjo Sartoto', 'paidjosartoto@protonmail.com', 'Finance', 'Semarang, Jawa Tengah'),
(25, 'Supriansyah', 'supriansyah@gmail.com', 'HR', 'Ambarawa, Jawa Tengah'),
(26, 'Betty Sutety', 'bettysutety@outlook.com', 'Finance', 'Serang, Banten'),
(27, 'Jupri Hermansyah', 'juprihermansyah@gmail.com', 'Marketing', 'Karanganyar, Jawa Tengah'),
(28, 'Asep Surecep', 'asepsurecep@hotmail.com', 'HR', 'Tegal, Jawa Tengah'),
(30, 'Markhona Sirana', 'markhonasirana@hotmail.com', 'Marketing', 'Wonosobo, Jawa Tengah'),
(31, 'Siti Mertiti', 'sitimertiti@gmail.com', 'Finance', 'Temanggung, Jawa Tengah'),
(32, 'Mlati Suci', 'mlatisuci@outlook.com', 'Finance', 'Bandung, Jawa Barat'),
(100, 'Sultan Kautsar', 'sultankautsar@gmail.com', 'HR', 'Magelang, Jawa Tengah');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
