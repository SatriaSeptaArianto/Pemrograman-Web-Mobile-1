-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 03:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `merk_pilihan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `nama`, `merk_pilihan`) VALUES
(1, 'Alex', 'Acer'),
(2, 'Budi', 'Dell'),
(3, 'Luna', 'Toshiba'),
(4, 'Gabriella', 'Asus'),
(5, 'Benaya', 'Lainnya'),
(6, 'Kimi', 'HP'),
(7, 'Olsen', 'Toshiba'),
(8, 'Udin', 'Acer'),
(9, 'Sera', 'Acer'),
(10, 'Gede', 'Dell'),
(11, 'Kai', 'Lainnya'),
(12, 'Ian', 'Lenovo'),
(13, 'Aaron', 'Acer'),
(14, 'David', 'Acer'),
(15, 'Gaiden', 'Lenovo'),
(16, 'Seto', 'Toshiba'),
(17, 'Dino', 'Lainnya'),
(18, 'Kyle', 'Lenovo'),
(19, 'Umar', 'HP'),
(20, 'Bobby', 'Dell'),
(21, 'Michael', 'Lainnya'),
(22, 'Polar', 'Lainnya'),
(23, 'Nino', 'Asus'),
(24, 'Saud', 'Lenovo'),
(25, 'Farrel', 'Lenovo'),
(26, 'Rizky', 'Acer'),
(27, 'Yaya', 'HP'),
(28, 'Erlan', 'Lainnya'),
(29, 'Chris', 'Asus'),
(30, 'John', 'Acer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
