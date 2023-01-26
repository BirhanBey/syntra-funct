-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 26, 2023 at 08:59 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `functioneelprogrammeren`
--

-- --------------------------------------------------------

--
-- Table structure for table `230126_photos`
--

CREATE TABLE `230126_photos` (
  `id` int(11) NOT NULL,
  `unsplash_id` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `230126_photos`
--

INSERT INTO `230126_photos` (`id`, `unsplash_id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'gKXKBY-C-Dk', 'https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=Mnw0MDE2NjR8MHwxfHNlYXJjaHwxfHxjYXR8ZW58MHwwfHx8MTY3NDY0MTIzOQ&ixlib=rb-4.0.3&q=80&w=1080', '2023-01-26 08:57:39', '2023-01-26 08:57:39'),
(2, 'LEpfefQf4rU', 'https://images.unsplash.com/photo-1519052537078-e6302a4968d4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=Mnw0MDE2NjR8MHwxfHNlYXJjaHwyfHxjYXR8ZW58MHwwfHx8MTY3NDY0MTIzOQ&ixlib=rb-4.0.3&q=80&w=1080', '2023-01-26 08:57:39', '2023-01-26 08:57:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `230126_photos`
--
ALTER TABLE `230126_photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unsplash_id` (`unsplash_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `230126_photos`
--
ALTER TABLE `230126_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;