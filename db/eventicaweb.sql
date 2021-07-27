-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 08:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventicaweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `city`) VALUES
(1, 'Karachi'),
(2, 'Naran'),
(3, 'Hunza'),
(4, 'Kashmir'),
(5, 'Naltar'),
(6, 'Swat'),
(7, 'Murree'),
(8, 'Chitral');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customize`
--

CREATE TABLE `tbl_customize` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `total_pr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customize`
--

INSERT INTO `tbl_customize` (`id`, `user_id`, `start`, `end`, `duration`, `adult`, `children`, `package_id`, `total_pr`) VALUES
(3, 8, '2020-12-18 00:00:00', '2020-12-19 00:00:00', 1, 3, 2, 3, 400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `start_city` int(11) NOT NULL,
  `tour_city` int(11) NOT NULL,
  `pr_adult` int(11) NOT NULL,
  `pr_child` int(11) NOT NULL,
  `tour_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `start_city`, `tour_city`, `pr_adult`, `pr_child`, `tour_type`) VALUES
(1, 4, 3, 140, 100, 1),
(2, 4, 3, 250, 200, 2),
(3, 1, 7, 100, 50, 1),
(4, 1, 7, 200, 100, 2),
(5, 7, 2, 70, 50, 1),
(6, 7, 2, 150, 100, 2),
(7, 1, 4, 130, 70, 1),
(8, 1, 4, 200, 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `password`, `phone`, `created_at`) VALUES
(1, 'malisa', 'malisa@gmail.com', '$2y$10$gRjulIG7hzHQuFg4xWktL.PiVwCACPA7Y.b1sEhVa.f4lK9PbFqIa', '01112202020', '2020-12-09 16:00:35'),
(2, 'hh', 'msss@gmail.com', '$2y$10$kGAIZjQ4TlH1UjrdTGLFlOQ.U7cQ25iraNTtggtnv0a8QgFuMf2eu', '01112202020', '2020-12-09 16:03:29'),
(3, 'tasha', 'tasha@gmail.com', '$2y$10$1NJxebqP5Yzo8.4qJJ/heuho58ga5CgUYgE9FeKjuw8vYC40WhxfO', '019281901', '2020-12-09 22:26:13'),
(4, 'saa', 'saa@gmail.com', '$2y$10$nB6HIgrUGH5VS885tsOTZ.GSMTE1DQsZfFP0tr2LRR5CUJUmtGNXm', '019201291', '2020-12-09 22:32:27'),
(5, 'ewew', 'ewew@gmail.com', '$2y$10$QA2HHhvjNd6xnnF8w0tWf.tm7bQ1hWkiRsqwOr6l8GtKClctMQbAu', '0920192012', '2020-12-09 22:34:24'),
(6, 'aaaa', 'asa@gmail.com', '$2y$10$ce60i67P4Kl4p6XoZ7JNful1p2QMDWS5nVdsMBQNBetQwtKUlYNs6', '09201210', '2020-12-09 22:35:24'),
(8, 'Arooba Siddiqi', 'siddiqi.arooba@gmail.com', '$2y$10$zbljaHq1UOj2vrkJj6ZdZuBtxxmDfN/y27yhDoUco/Fnra2rzErB6', '090078601', '2020-12-18 19:22:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customize`
--
ALTER TABLE `tbl_customize`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `start_city` (`start_city`),
  ADD KEY `tour_city` (`tour_city`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_customize`
--
ALTER TABLE `tbl_customize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_customize`
--
ALTER TABLE `tbl_customize`
  ADD CONSTRAINT `package_id` FOREIGN KEY (`package_id`) REFERENCES `tbl_package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD CONSTRAINT `start_city` FOREIGN KEY (`start_city`) REFERENCES `tbl_cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tour_city` FOREIGN KEY (`tour_city`) REFERENCES `tbl_cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
