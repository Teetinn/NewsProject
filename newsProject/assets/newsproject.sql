-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 02:42 PM
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
-- Database: `newsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `namaDepan` varchar(25) DEFAULT NULL,
  `namaBelakang` varchar(25) DEFAULT NULL,
  `userName` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenisKelamin` char(6) DEFAULT NULL,
  `id` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`namaDepan`, `namaBelakang`, `userName`, `tgl_lahir`, `jenisKelamin`, `id`, `password`) VALUES
('test', 'tis', 'ya', '2021-10-13', 'pria', '615c123c9da1e', '$2y$10$Rw7q7MGdp4q4BKkvpWqJOua6IdktI4gw4ZChMk4Ypy2gxWJKRR1sC'),
('banyu', 'ganteng', 'siap', '2021-10-01', 'pria', '615c33a6a2069', '$2y$10$ifzZWy/0mB1xpGimMO.X7.4U46INBm3lwx/Fv83qihG3lrG7b2M9i'),
('admin', 'admin2', 'admin', '2021-10-01', 'pria', '615c545bb197f', '$2y$10$A1adgKPFjEVWnGh.il87dO4pRHSO0KTwTgplups1yNQz1B17EkkMq'),
('niko', 'alexander', 'nikoo', '2021-10-02', 'wanita', '615d620930f08', '$2y$10$xSjQXGf7hWgLoshPDiaH2ebNsDwg33u6e7SrjSCbc7JgkCZOJeWJO'),
('test', 'test1', 'test02', '2021-10-01', 'pria', '615d664d4e598', '$2y$10$k5oPsnS1s5qYLWjNdww5VO5qyAnIm2KHLHuYvhwf.ocKOh2/lPvF6'),
('michael', 'alex', 'alex', '2021-10-01', 'wanita', '615d95c112ffa', '$2y$10$64Ueugc4Bn5hbr1TScJuAeDZl2Ass8YY4ptx33q9Mwb1zCMVDHOtC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
