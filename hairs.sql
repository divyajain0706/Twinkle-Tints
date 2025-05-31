-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 09:33 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addtocart`
--

-- --------------------------------------------------------

--
-- Table structure for table `hairs`
--

CREATE TABLE `hairs` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairs`
--

INSERT INTO `hairs` (`product_id`, `product_name`, `price`, `product_image`) VALUES
(1, 'LOReal Paris Hyaluron Moisture Shampoo', 334, 'image/HairPage/shampoo1.png'),
(2, 'LOReal Paris Hyaluron Moisture Conditioner', 334, 'image/HairPage/shampoo2.png'),
(3, 'BBlunt Moisture Shampoo and Conditioner', 598, 'image/HairPage/shampoo3.png'),
(4, 'LOReal Proffessionel Density Expert Shampoo', 790, 'image/HairPage/shampoo4.png'),
(5, 'Olapex Bonding Hair Oil', 2880, 'image/HairPage/hairoil1.png'),
(6, 'Indulekha Bhringa Oil and Shampoo', 2399, 'image/HairPage/hairoil2.png'),
(7, 'SoulFlower Rosemery Oil', 382, 'image/HairPage/hairoil3.png'),
(8, 'OGX Renewing Organ Oil', 1099, 'image/HairPage/hairoil4.png'),
(9, 'Iconic Proffessional Hair Iron Straightner', 354, 'image/HairPage/hairtool1.png'),
(10, 'Iconic Proffessional Blaze Hair Drier', 2350, 'image/HairPage/hairtool2.png'),
(11, 'Alan Compact Blow Brush', 290, 'image/HairPage/hairtool3.png'),
(12, '2-in-1 Roller and Straightner', 386, 'image/HairPage/hairtool4.png');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `hairs`
--
ALTER TABLE `hairs`
  ADD PRIMARY KEY (`product_id`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hairs`
--
ALTER TABLE `hairs`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;