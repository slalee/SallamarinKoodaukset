-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23.04.2024 klo 15:03
-- Palvelimen versio: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autot`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `auto`
--

CREATE TABLE `auto` (
  `autoID` int(11) NOT NULL,
  `Rekisteri` varchar(20) NOT NULL,
  `valmistaja` varchar(50) NOT NULL,
  `Malli` varchar(50) NOT NULL,
  `hinta` varchar(50) NOT NULL,
  `vari` varchar(50) NOT NULL,
  `vuosimalli` varchar(10) NOT NULL,
  `km` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vedos taulusta `auto`
--

INSERT INTO `auto` (`autoID`, `Rekisteri`, `valmistaja`, `Malli`, `hinta`, `vari`, `vuosimalli`, `km`) VALUES
(1, 'VUV-200', 'AUDI', 'A1', '10400', 'punainen', '2012', '180 000'),
(2, 'MIN-018', 'AUDI', 'A8', '123', 'sininen', '2009', '120 000'),
(5, 'joo-123', 'BMW', 'COUPE', '9000', 'vihreä', '2010', '130 999'),
(6, 'KPN-111', 'volvo', 'v70', '123', 'musta', '2009', '376 000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`autoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `autoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
