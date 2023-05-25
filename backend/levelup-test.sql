-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 10:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `levelup-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `id` int(11) NOT NULL,
  `card_number` varchar(19) NOT NULL,
  `expiration_date` varchar(5) NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `card_holder_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`id`, `card_number`, `expiration_date`, `cvv`, `card_holder_name`) VALUES
(1, '0568794532654712', '', '365', ''),
(2, '0568794532654712', '05/26', '365', 'Miguel Murua'),
(3, '', '/', '', ''),
(4, '', '/', '', ''),
(5, '', '/', '', ''),
(6, '', '/', '', ''),
(7, '', '/', '', ''),
(8, '', '/', '', ''),
(9, '', '/', '', ''),
(10, '', '/', '', ''),
(11, '', '/', '', ''),
(12, '', '/', '', ''),
(13, '1654789641231456', '12/26', '123', 'test test'),
(14, '89865789632144321', '12/26', '123', 'test test'),
(15, '4321569874659843', '12/26', '321', 'test test'),
(16, '4321569874659843', '12/26', '321', 'test test'),
(17, '4321432143214321', '05/28', '123', 'test test'),
(18, '2178158399784273', '05/28', '1235', 'test test'),
(19, '8456632145678945', '08/26', '654', 'test test'),
(20, '8796654123456874', '08/26', '563', 'test test'),
(21, '2356654879456321', '08/28', '654', 'test3 test3'),
(22, '2314567894654789', '05/26', '654', 'test test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
