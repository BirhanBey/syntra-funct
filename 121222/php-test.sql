-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 12, 2022 at 10:29 AM
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
-- Database: `funcprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `population` int(11) NOT NULL,
  `squarekm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `population`, `squarekm`) VALUES
(1, 'Afghanistan', 38928346, 652860),
(2, 'Albania', 2877797, 27400),
(3, 'Algeria', 43851044, 2381740),
(4, 'Andorra', 77265, 470),
(5, 'Angola', 32866272, 1246700),
(6, 'Antigua and Barbuda', 97929, 440),
(7, 'Argentina', 45195774, 2736690),
(8, 'Armenia', 2963243, 28470),
(9, 'Australia', 25499884, 7682300),
(10, 'Austria', 9006398, 82409),
(11, 'Azerbaijan', 10139177, 82658),
(12, 'Bahamas', 393244, 10010),
(13, 'Bahrain', 1701575, 760),
(14, 'Bangladesh', 164689383, 130170),
(15, 'Barbados', 287375, 430),
(16, 'Belarus', 9449323, 202910),
(17, 'Belgium', 11589623, 30280),
(18, 'Belize', 397628, 22810),
(19, 'Benin', 12123200, 112760),
(20, 'Bhutan', 771608, 38117),
(21, 'Bolivia', 11673021, 1083300),
(22, 'Bosnia and Herzegovina', 3280819, 51000),
(23, 'Botswana', 2351627, 566730),
(24, 'Brazil', 212559417, 8358140),
(25, 'Brunei', 437479, 5270),
(26, 'Bulgaria', 6948445, 108560),
(27, 'Burkina Faso', 20903273, 273600),
(28, 'Burundi', 11890784, 25680),
(29, 'Côte d\'Ivoire', 26378274, 318000),
(30, 'Cabo Verde', 555987, 4030),
(31, 'Cambodia', 16718965, 176520),
(32, 'Cameroon', 26545863, 472710),
(33, 'Canada', 37742154, 9093510),
(34, 'Central African Republic', 4829767, 622980),
(35, 'Chad', 16425864, 1259200),
(36, 'Chile', 19116201, 743532),
(37, 'China', 1439323776, 9388211),
(38, 'Colombia', 50882891, 1109500),
(39, 'Comoros', 869601, 1861),
(40, 'Congo (Congo-Brazzaville)', 5518087, 341500),
(41, 'Costa Rica', 5094118, 51060),
(42, 'Croatia', 4105267, 55960),
(43, 'Cuba', 11326616, 106440),
(44, 'Cyprus', 1207359, 9240),
(45, 'Czechia (Czech Republic)', 10708981, 77240),
(46, 'Democratic Republic of the Congo', 89561403, 2267050),
(47, 'Denmark', 5792202, 42430),
(48, 'Djibouti', 988000, 23180),
(49, 'Dominica', 71986, 750),
(50, 'Dominican Republic', 10847910, 48320),
(51, 'Ecuador', 17643054, 248360),
(52, 'Egypt', 102334404, 995450),
(53, 'El Salvador', 6486205, 20720),
(54, 'Equatorial Guinea', 1402985, 28050),
(55, 'Eritrea', 3546421, 101000),
(56, 'Estonia', 1326535, 42390),
(57, 'Eswatini (fmr. \"Swaziland\")', 1160164, 17200),
(58, 'Ethiopia', 114963588, 1000000),
(59, 'Fiji', 896445, 18270),
(60, 'Finland', 5540720, 303890),
(61, 'France', 65273511, 547557),
(62, 'Gabon', 2225734, 257670),
(63, 'Gambia', 2416668, 10120),
(64, 'Georgia', 3989167, 69490),
(65, 'Germany', 83783942, 348560),
(66, 'Ghana', 31072940, 227540),
(67, 'Greece', 10423054, 128900),
(68, 'Grenada', 112523, 340),
(69, 'Guatemala', 17915568, 107160),
(70, 'Guinea', 13132795, 245720),
(71, 'Guinea-Bissau', 1968001, 28120),
(72, 'Guyana', 786552, 196850),
(73, 'Haiti', 11402528, 27560),
(74, 'Holy See', 801, 0),
(75, 'Honduras', 9904607, 111890),
(76, 'Hungary', 9660351, 90530),
(77, 'Iceland', 341243, 100250),
(78, 'India', 1380004385, 2973190),
(79, 'Indonesia', 273523615, 1811570),
(80, 'Iran', 83992949, 1628550),
(81, 'Iraq', 40222493, 434320),
(82, 'Ireland', 4937786, 68890),
(83, 'Israel', 8655535, 21640),
(84, 'Italy', 60461826, 294140),
(85, 'Jamaica', 2961167, 10830),
(86, 'Japan', 126476461, 364555),
(87, 'Jordan', 10203134, 88780),
(88, 'Kazakhstan', 18776707, 2699700),
(89, 'Kenya', 53771296, 569140),
(90, 'Kiribati', 119449, 810),
(91, 'Kuwait', 4270571, 17820),
(92, 'Kyrgyzstan', 6524195, 191800),
(93, 'Laos', 7275560, 230800),
(94, 'Latvia', 1886198, 62200),
(95, 'Lebanon', 6825445, 10230),
(96, 'Lesotho', 2142249, 30360),
(97, 'Liberia', 5057681, 96320),
(98, 'Libya', 6871292, 1759540),
(99, 'Liechtenstein', 38128, 160),
(100, 'Lithuania', 2722289, 62674),
(101, 'Luxembourg', 625978, 2590),
(102, 'Madagascar', 27691018, 581795),
(103, 'Malawi', 19129952, 94280),
(104, 'Malaysia', 32365999, 328550),
(105, 'Maldives', 540544, 300),
(106, 'Mali', 20250833, 1220190),
(107, 'Malta', 441543, 320),
(108, 'Marshall Islands', 59190, 180),
(109, 'Mauritania', 4649658, 1030700),
(110, 'Mauritius', 1271768, 2030),
(111, 'Mexico', 128932753, 1943950),
(112, 'Micronesia', 548914, 700),
(113, 'Moldova', 4033963, 32850),
(114, 'Monaco', 39242, 1),
(115, 'Mongolia', 3278290, 1553560),
(116, 'Montenegro', 628066, 13450),
(117, 'Morocco', 36910560, 446300),
(118, 'Mozambique', 31255435, 786380),
(119, 'Myanmar (formerly Burma)', 54409800, 653290),
(120, 'Namibia', 2540905, 823290),
(121, 'Nauru', 10824, 20),
(122, 'Nepal', 29136808, 143350),
(123, 'Netherlands', 17134872, 33720),
(124, 'New Zealand', 4822233, 263310),
(125, 'Nicaragua', 6624554, 120340),
(126, 'Niger', 24206644, 1266700),
(127, 'Nigeria', 206139589, 910770),
(128, 'North Korea', 25778816, 120410),
(129, 'North Macedonia', 2083374, 25220),
(130, 'Norway', 5421241, 365268),
(131, 'Oman', 5106626, 309500),
(132, 'Pakistan', 220892340, 770880),
(133, 'Palau', 18094, 460),
(134, 'Palestine State', 5101414, 6020),
(135, 'Panama', 4314767, 74340),
(136, 'Papua New Guinea', 8947024, 452860),
(137, 'Paraguay', 7132538, 397300),
(138, 'Peru', 32971854, 1280000),
(139, 'Philippines', 109581078, 298170),
(140, 'Poland', 37846611, 306230),
(141, 'Portugal', 10196709, 91590),
(142, 'Qatar', 2881053, 11610),
(143, 'Romania', 19237691, 230170),
(144, 'Russia', 145934462, 16376870),
(145, 'Rwanda', 12952218, 24670),
(146, 'Saint Kitts and Nevis', 53199, 260),
(147, 'Saint Lucia', 183627, 610),
(148, 'Saint Vincent and the Grenadines', 110940, 390),
(149, 'Samoa', 198414, 2830),
(150, 'San Marino', 33931, 60),
(151, 'Sao Tome and Principe', 219159, 960),
(152, 'Saudi Arabia', 34813871, 2149690),
(153, 'Senegal', 16743927, 192530),
(154, 'Serbia', 8737371, 87460),
(155, 'Seychelles', 98347, 460),
(156, 'Sierra Leone', 7976983, 72180),
(157, 'Singapore', 5850342, 700),
(158, 'Slovakia', 5459642, 48088),
(159, 'Slovenia', 2078938, 20140),
(160, 'Solomon Islands', 686884, 27990),
(161, 'Somalia', 15893222, 627340),
(162, 'South Africa', 59308690, 1213090),
(163, 'South Korea', 51269185, 97230),
(164, 'South Sudan', 11193725, 610952),
(165, 'Spain', 46754778, 498800),
(166, 'Sri Lanka', 21413249, 62710),
(167, 'Sudan', 43849260, 1765048),
(168, 'Suriname', 586632, 156000),
(169, 'Sweden', 10099265, 410340),
(170, 'Switzerland', 8654622, 39516),
(171, 'Syria', 17500658, 183630),
(172, 'Tajikistan', 9537645, 139960),
(173, 'Tanzania', 59734218, 885800),
(174, 'Thailand', 69799978, 510890),
(175, 'Timor-Leste', 1318445, 14870),
(176, 'Togo', 8278724, 54390),
(177, 'Tonga', 105695, 720),
(178, 'Trinidad and Tobago', 1399488, 5130),
(179, 'Tunisia', 11818619, 155360),
(180, 'Turkey', 84339067, 769630),
(181, 'Turkmenistan', 6031200, 469930),
(182, 'Tuvalu', 11792, 30),
(183, 'Uganda', 45741007, 199810),
(184, 'Ukraine', 43733762, 579320),
(185, 'United Arab Emirates', 9890402, 83600),
(186, 'United Kingdom', 67886011, 241930),
(187, 'United States of America', 331002651, 9147420),
(188, 'Uruguay', 3473730, 175020),
(189, 'Uzbekistan', 33469203, 425400),
(190, 'Vanuatu', 307145, 12190),
(191, 'Venezuela', 28435940, 882050),
(192, 'Vietnam', 97338579, 310070),
(193, 'Yemen', 29825964, 527970),
(194, 'Zambia', 18383955, 743390),
(195, 'Zimbabwe', 14862924, 386850);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;