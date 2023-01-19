-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 16, 2023 at 02:42 PM
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
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(35) DEFAULT NULL,
  `genre` varchar(9) DEFAULT NULL,
  `studio` varchar(21) DEFAULT NULL,
  `score` varchar(5) DEFAULT NULL,
  `rotten_tomatoes_score` varchar(21) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `genre`, `studio`, `score`, `rotten_tomatoes_score`, `Year`) VALUES
(1, 'Zack and Miri Make a Porno', 'Romance', 'The Weinstein Company', '70', '64', '2008'),
(2, 'Youth in Revolt', 'Comedy', 'The Weinstein Company', '52', '68', '2010'),
(3, 'You Will Meet a Tall Dark Stranger', 'Comedy', 'Independent', '35', '43', '2010'),
(4, 'When in Rome', 'Comedy', 'Disney', '44', '15', '2010'),
(5, 'What Happens in Vegas', 'Comedy', 'Fox', '72', '28', '2008'),
(6, 'Water For Elephants', 'Drama', '20th Century Fox', '72', '60', '2011'),
(7, 'WALL-E', 'Animation', 'Disney', '89', '96', '2008'),
(8, 'Waitress', 'Romance', 'Independent', '67', '89', '2007'),
(9, 'Waiting For Forever', 'Romance', 'Independent', '53', '6', '2011'),
(10, 'Valentine\'s Day', 'Comedy', 'Warner Bros.', '54', '17', '2010'),
(11, 'Tyler Perry\'s Why Did I get Married', 'Romance', 'Independent', '47', '46', '2007'),
(12, 'Twilight: Breaking Dawn', 'Romance', 'Independent', '68', '26', '2011'),
(13, 'Twilight', 'Romance', 'Summit', '82', '49', '2008'),
(14, 'The Ugly Truth', 'Comedy', 'Independent', '68', '14', '2009'),
(15, 'The Twilight Saga: New Moon', 'Drama', 'Summit', '78', '27', '2009'),
(16, 'The Time Traveler\'s Wife', 'Drama', 'Paramount', '65', '38', '2009'),
(17, 'The Proposal', 'Comedy', 'Disney', '74', '43', '2009'),
(18, 'The Invention of Lying', 'Comedy', 'Warner Bros.', '47', '56', '2009'),
(19, 'The Heartbreak Kid', 'Comedy', 'Paramount', '41', '30', '2007'),
(20, 'The Duchess', 'Drama', 'Paramount', '68', '60', '2008'),
(21, 'The Curious Case of Benjamin Button', 'Fantasy', 'Warner Bros.', '81', '73', '2008'),
(22, 'The Back-up Plan', 'Comedy', 'CBS', '47', '20', '2010'),
(23, 'Tangled', 'Animation', 'Disney', '88', '89', '2010'),
(24, 'Something Borrowed', 'Romance', 'Independent', '48', '15', '2011'),
(25, 'She\'s Out of My League', 'Comedy', 'Paramount', '60', '57', '2010'),
(26, 'Sex and the City Two', 'Comedy', 'Warner Bros.', '49', '15', '2010'),
(27, 'Sex and the City 2', 'Comedy', 'Warner Bros.', '49', '15', '2010'),
(28, 'Sex and the City', 'Comedy', 'Warner Bros.', '81', '49', '2008'),
(29, 'Remember Me', 'Drama', 'Summit', '70', '28', '2010'),
(30, 'Rachel Getting Married', 'Drama', 'Independent', '61', '85', '2008'),
(31, 'Penelope', 'Comedy', 'Summit', '74', '52', '2008'),
(32, 'P.S. I Love You', 'Romance', 'Independent', '82', '21', '2007'),
(33, 'Over Her Dead Body', 'Comedy', 'New Line', '47', '15', '2008'),
(34, 'Our Family Wedding', 'Comedy', 'Independent', '49', '14', '2010'),
(35, 'One Day', 'Romance', 'Independent', '54', '37', '2011'),
(36, 'Not Easily Broken', 'Drama', 'Independent', '66', '34', '2009'),
(37, 'No Reservations', 'Comedy', 'Warner Bros.', '64', '39', '2007'),
(38, 'Nick and Norah\'s Infinite Playlist', 'Comedy', 'Sony', '67', '73', '2008'),
(39, 'New Year\'s Eve', 'Romance', 'Warner Bros.', '48', '8', '2011'),
(40, 'My Week with Marilyn', 'Drama', 'The Weinstein Company', '84', '83', '2011'),
(41, 'Music and Lyrics', 'Romance', 'Warner Bros.', '70', '63', '2007'),
(42, 'Monte Carlo', 'Romance', '20th Century Fox', '50', '38', '2011'),
(43, 'Miss Pettigrew Lives for a Day', 'Comedy', 'Independent', '70', '78', '2008'),
(44, 'Midnight in Paris', 'Romence', 'Sony', '84', '93', '2011'),
(45, 'Marley and Me', 'Comedy', 'Fox', '77', '63', '2008'),
(46, 'Mamma Mia!', 'Comedy', 'Universal', '76', '53', '2008'),
(47, 'Mamma Mia!', 'Comedy', 'Universal', '76', '53', '2008'),
(48, 'Made of Honor', 'Comdy', 'Sony', '61', '13', '2008'),
(49, 'Love Happens', 'Drama', 'Universal', '40', '18', '2009'),
(50, 'Love & Other Drugs', 'Comedy', 'Fox', '55', '48', '2010'),
(51, 'Life as We Know It', 'Comedy', 'Independent', '62', '28', '2010'),
(52, 'License to Wed', 'Comedy', 'Warner Bros.', '55', '8', '2007'),
(53, 'Letters to Juliet', 'Comedy', 'Summit', '62', '40', '2010'),
(54, 'Leap Year', 'Comedy', 'Universal', '49', '21', '2010'),
(55, 'Knocked Up', 'Comedy', 'Universal', '83', '91', '2007'),
(56, 'Killers', 'Action', 'Lionsgate', '45', '11', '2010'),
(57, 'Just Wright', 'Comedy', 'Fox', '58', '45', '2010'),
(58, 'Jane Eyre', 'Romance', 'Universal', '77', '85', '2011'),
(59, 'It\'s Complicated', 'Comedy', 'Universal', '63', '56', '2009'),
(60, 'I Love You Phillip Morris', 'Comedy', 'Independent', '57', '71', '2010'),
(61, 'High School Musical 3: Senior Year', 'Comedy', 'Disney', '76', '65', '2008'),
(62, 'He\'s Just Not That Into You', 'Comedy', 'Warner Bros.', '60', '42', '2009'),
(63, 'Good Luck Chuck', 'Comedy', 'Lionsgate', '61', '3', '2007'),
(64, 'Going the Distance', 'Comedy', 'Warner Bros.', '56', '53', '2010'),
(65, 'Gnomeo and Juliet', 'Animation', 'Disney', '52', '56', '2011'),
(66, 'Gnomeo and Juliet', 'Animation', 'Disney', '52', '56', '2011'),
(67, 'Ghosts of Girlfriends Past', 'Comedy', 'Warner Bros.', '47', '27', '2009'),
(68, 'Four Christmases', 'Comedy', 'Warner Bros.', '52', '26', '2008'),
(69, 'Fireproof', 'Drama', 'Independent', '51', '40', '2008'),
(70, 'Enchanted', 'Comedy', 'Disney', '80', '93', '2007'),
(71, 'Dear John', 'Drama', 'Sony', '66', '29', '2010'),
(72, 'Beginners', 'Comedy', 'Independent', '80', '84', '2011'),
(73, 'Across the Universe', 'romance', 'Independent', '84', '54', '2007'),
(74, 'A Serious Man', 'Drama', 'Universal', '64', '89', '2009'),
(75, 'A Dangerous Method', 'Drama', 'Independent', '89', '79', '2011'),
(76, '27 Dresses', 'Comedy', 'Fox', '71', '40', '2008'),
(77, '(500) Days of Summer', 'comedy', 'Fox', '81', '87', '2009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;