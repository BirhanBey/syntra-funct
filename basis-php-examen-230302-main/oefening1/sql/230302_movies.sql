-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2023 at 08:33 PM
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
-- Table structure for table `230302_movies`
--

CREATE TABLE `230302_movies` (
  `id` int(11) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `genre` varchar(9) DEFAULT NULL,
  `studio` varchar(21) DEFAULT NULL,
  `score` varchar(5) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `published` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `230302_movies`
--

INSERT INTO `230302_movies` (`id`, `name`, `genre`, `studio`, `score`, `year`, `published`) VALUES
(1, 'Zack and Miri Make a Porno', 'Romance', 'The Weinstein Company', '70', '2008', 1),
(2, 'Youth in Revolt', 'Comedy', 'The Weinstein Company', '52', '2010', 1),
(3, 'You Will Meet a Tall Dark Stranger', 'Comedy', 'Independent', '35', '2010', 1),
(4, 'When in Rome', 'Comedy', 'Disney', '44', '2010', 1),
(5, 'What Happens in Vegas', 'Comedy', 'Fox', '72', '2008', 1),
(6, 'Water For Elephants', 'Drama', '20th Century Fox', '72', '2011', 1),
(7, 'WALL-E', 'Animation', 'Disney', '89', '2008', 1),
(8, 'Waitress', 'Romance', 'Independent', '67', '2007', 1),
(9, 'Waiting For Forever', 'Romance', 'Independent', '53', '2011', 1),
(10, 'Valentine\'s Day', 'Comedy', 'Warner Bros.', '54', '2010', 1),
(11, 'Tyler Perry\'s Why Did I get Married', 'Romance', 'Independent', '47', '2007', 1),
(12, 'Twilight: Breaking Dawn', 'Romance', 'Independent', '68', '2011', 1),
(13, 'Twilight', 'Romance', 'Summit', '82', '2008', 1),
(14, 'The Ugly Truth', 'Comedy', 'Independent', '68', '2009', 1),
(15, 'The Twilight Saga: New Moon', 'Drama', 'Summit', '78', '2009', 1),
(16, 'The Time Traveler\'s Wife', 'Drama', 'Paramount', '65', '2009', 1),
(17, 'The Proposal', 'Comedy', 'Disney', '74', '2009', 1),
(18, 'The Invention of Lying', 'Comedy', 'Dumb&Dumber', '47', '2009', 1),
(19, 'The Heartbreak Kid', 'Comedy', 'Paramount', '41', '2007', 1),
(20, 'The Duchess', 'Drama', 'Paramount', '68', '2008', 1),
(21, 'The Curious Case of Benjamin Button', 'Fantasy', 'Dumb&Dumber', '81', '2008', 1),
(22, 'The Back-up Plan', 'Comedy', 'CBS', '47', '2010', 1),
(23, 'Tangled', 'Animation', 'Disney', '88', '2010', 1),
(24, 'Something Borrowed', 'Romance', 'Independent', '48', '2011', 1),
(25, 'She\'s Out of My League', 'Comedy', 'Paramount', '60', '2010', 1),
(26, 'Sex and the City Two', 'Comedy', 'Warner Bros.', '49', '2010', 1),
(27, 'Sex and the City 2', 'Comedy', 'Warner Bros.', '49', '2010', 1),
(28, 'Sex and the City', 'Comedy', 'Warner Bros.', '81', '2008', 1),
(29, 'Remember Me', 'Drama', 'Summit', '70', '2010', 1),
(30, 'Rachel Getting Married', 'Drama', 'Independent', '61', '2008', 1),
(31, 'Penelope', 'Comedy', 'Summit', '74', '2008', 1),
(32, 'P.S. I Love You', 'Romance', 'Independent', '82', '2007', 1),
(33, 'Over Her Dead Body', 'Comedy', 'New Line', '47', '2008', 1),
(34, 'Our Family Wedding', 'Comedy', 'Independent', '49', '2010', 1),
(35, 'One Day', 'Romance', 'Independent', '54', '2011', 1),
(36, 'Not Easily Broken', 'Drama', 'Independent', '66', '2009', 1),
(37, 'No Reservations', 'Comedy', 'Warner Bros.', '64', '2007', 1),
(38, 'Nick and Norah\'s Infinite Playlist', 'Comedy', 'Sony', '67', '2008', 1),
(39, 'New Year\'s Eve', 'Romance', 'Warner Bros.', '48', '2011', 1),
(40, 'My Week with Marilyn', 'Drama', 'The Weinstein Company', '84', '2011', 1),
(41, 'Music and Lyrics', 'Romance', 'Warner Bros.', '70', '2007', 1),
(42, 'Monte Carlo', 'Romance', '20th Century Fox', '50', '2011', 1),
(43, 'Miss Pettigrew Lives for a Day', 'Comedy', 'Independent', '70', '2008', 1),
(44, 'Midnight in Paris', 'Romance', 'Sony', '84', '2011', 1),
(45, 'Marley and Me', 'Comedy', 'Fox', '77', '2008', 1),
(46, 'Mamma Mia!', 'Comedy', 'Universal', '76', '2008', 1),
(47, 'Mamma Mia!', 'Comedy', 'Universal', '76', '2008', 1),
(48, 'Made of Honor', 'Comedy', 'Sony', '61', '2008', 1),
(49, 'Love Happens', 'Drama', 'Universal', '40', '2009', 1),
(50, 'Love & Other Drugs', 'Comedy', 'Fox', '55', '2010', 1),
(51, 'Life as We Know It', 'Comedy', 'Independent', '62', '2010', 1),
(52, 'License to Wed', 'Comedy', 'Warner Bros.', '55', '2007', 1),
(53, 'Letters to Juliet', 'Comedy', 'Summit', '62', '2010', 1),
(54, 'Leap Year', 'Comedy', 'Universal', '49', '2010', 1),
(55, 'Knocked Up', 'Comedy', 'Universal', '83', '2007', 1),
(56, 'Killers', 'Action', 'Lionsgate', '45', '2010', 1),
(57, 'Just Wright', 'Comedy', 'Fox', '58', '2010', 1),
(58, 'Jane Eyre', 'Romance', 'Universal', '77', '2011', 1),
(59, 'It\'s Complicated', 'Comedy', 'Universal', '63', '2009', 1),
(60, 'I Love You Phillip Morris', 'Comedy', 'Independent', '57', '2010', 1),
(61, 'High School Musical 3: Senior Year', 'Comedy', 'Disney', '76', '2008', 1),
(62, 'He\'s Just Not That Into You', 'Comedy', 'Warner Bros.', '60', '2009', 1),
(63, 'Good Luck Chuck', 'Comedy', 'Lionsgate', '61', '2007', 1),
(64, 'Going the Distance', 'Comedy', 'Warner Bros.', '56', '2010', 1),
(65, 'Gnomeo and Juliet', 'Animation', 'Disney', '52', '2011', 1),
(66, 'Gnomeo and Juliet', 'Animation', 'Disney', '52', '2011', 1),
(67, 'Ghosts of Girlfriends Past', 'Comedy', 'Warner Bros.', '47', '2009', 1),
(68, 'Four Christmases', 'Comedy', 'Warner Bros.', '52', '2008', 1),
(69, 'Fireproof', 'Drama', 'Independent', '51', '2008', 1),
(70, 'Enchanted', 'Comedy', 'Disney', '80', '2007', 1),
(71, 'Dear John', 'Drama', 'Sony', '66', '2010', 1),
(72, 'Beginners', 'Comedy', 'Independent', '80', '2011', 1),
(73, 'Across the Universe', 'romance', 'Independent', '84', '2007', 1),
(74, 'A Serious Man', 'Drama', 'Universal', '64', '2009', 1),
(75, 'A Dangerous Method', 'Drama', 'Independent', '89', '2011', 1),
(76, '27 Dresses', 'Comedy', 'Fox', '71', '2008', 1),
(77, '(500) Days of Summer', 'comedy', 'Fox', '81', '2009', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `230302_movies`
--
ALTER TABLE `230302_movies`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `230302_movies`
--
ALTER TABLE `230302_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
