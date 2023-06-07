-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2023 at 10:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neptune_again`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_photo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default_dp.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_photo`) VALUES
(1, 'Muhsin', 'penimejoma@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '1.jpg'),
(2, 'lefebahy', 'feja@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '2.jpg'),
(4, 'Farzi', 'foqilap@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_dp.png'),
(5, 'tafavus', 'rajulyc@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_dp.png'),
(7, 'pohily', 'moca@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_dp.png'),
(8, 'Muhsin', 'muhsinstudent12@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '8.jpg'),
(9, 'lujeh', 'wawi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_dp.png'),
(11, 'Lana Mcdowell', 'cicaz@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '11.jpg'),
(12, 'batojysefi', 'xowah@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_dp.png'),
(13, 'Lamia', 'lamia@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_dp.png'),
(14, 'wotyhet', 'noge@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_dp.png'),
(15, 'nunih', 'fahyloki@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_dp.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
