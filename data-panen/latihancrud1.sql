-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 06:48 AM
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
-- Database: `latihancrud1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_panen`
--

CREATE TABLE `data_panen` (
  `id` int(100) NOT NULL,
  `id_panen` varchar(50) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `hasil_panen` varchar(50) NOT NULL,
  `lama_tanam` varchar(50) NOT NULL,
  `tanggal_panen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_panen`
--

INSERT INTO `data_panen` (`id`, `id_panen`, `nama_tanaman`, `hasil_panen`, `lama_tanam`, `tanggal_panen`) VALUES
(174, '2922564312', 'Jahe', '56', '17', '2021-11-18'),
(175, '4343019906', 'Bengkuang ', '114', '27', '2021-10-30'),
(176, '8584623902', 'Garut ', '29', '7', '2021-08-19'),
(177, '2343082019', 'Ganyong ', '36', '11', '2021-07-04'),
(178, '3979137208', 'Kedawung ', '102', '18', '2021-09-18'),
(179, '6010743901', 'Lengkuas ', '75', '16', '2021-10-02'),
(180, '9925159514', 'Singkong ', '264', '19', '2021-11-06'),
(181, '3150150646', 'Ubi Jalar', '197', '21', '2021-11-25'),
(182, '6095637713', 'Kedondong', '335', '42', '2021-12-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_panen`
--
ALTER TABLE `data_panen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_panen` (`id_panen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_panen`
--
ALTER TABLE `data_panen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
