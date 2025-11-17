-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 03:41 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_psas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_user` int NOT NULL,
  `driver` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `drive_time` text COLLATE utf8mb4_general_ci NOT NULL,
  `rating` int NOT NULL,
  `car_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `car_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_user`, `driver`, `age`, `drive_time`, `rating`, `car_type`, `car_name`) VALUES
(4, 'albert', 17, '1 year', 5, 'Sedan', 'Lamborghini');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` text COLLATE utf8mb4_general_ci NOT NULL,
  `umur` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `umur`, `email`, `password`) VALUES
(5, 'samuel', 'temp', 2, 'aaa@gmail.com', '$2y$10$Pg4j11vjW5HuC9z3vbKuuOABd9T6V6lexeZHHWTYVh6PH6Ym2hoA.'),
(6, 'samuel', 'temp', 2, 'aaa@gmail.com', '$2y$10$eW8hMad88Hr7XUjuWbwyOeCGlTtQdXiNJyHnn2HDbLThbp9NcfMCu'),
(7, '52525', '33542335', 324, '1231@sf', '$2y$10$//oNoxuJ0/OvA/xc0Ko3wOYs2DEwZpU5ROD1dffLDh0z78f2WoHWO'),
(8, '52525', '33542335', 324, '1231@sf', '$2y$10$j1cLIKcoP0/p3s8q6ODqU.f0NmWm1gViW8y8FKBHTM.S4c5uRTrfO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
