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
-- Table structure for table `fragrance`
--

CREATE TABLE `fragrance` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fragrance`
--

INSERT INTO `fragrance` (`product_id`, `product_name`, `price`, `product_image`) VALUES
(55, 'Bella Vita Luxury Honey Oud Eau De Parfum', 569, 'image/Fragrance/frag1.png'),
(56, 'Fruity Fresh Perfume', 2950, 'image/Fragrance/frag2.png'),
(57, 'Valmont Storie Veneziane Parfum', 1399, 'image/Fragrance/frag3.png'),
(58, 'Diesel Fuel for Life Fruity Perfume', 302, 'image/Fragrance/frag4.png'),
(59, 'Aretha Fresh Smoky Perfume', 380, 'image/Fragrance/frag5.png'),
(60, 'Colour Me Femme Gold Eau De Parfum', 1445, 'image/Fragrance/frag6.png'),
(61, 'Ajmal Shine Eau De Perfume ', 2250, 'image/Fragrance/frag7.png'),
(62, 'Guese girl belle fuity perfume', 3345, 'image/Fragrance/frag8.png'),
(63, 'Ramsons UR Lovely Fresh Perfume', 1567, 'image/Fragrance/frag9.png'),
(64, 'Jaguar Men Deodrant', 567, 'image/Fragrance/frag10.png'),
(65, 'Valmont Storie Perfume', 316, 'image/Fragrance/frag11.png'),
(66, 'Yardley London Autumn Bloom Perfume', 1115, 'image/Fragrance/frag12.png'),
(67, 'Guess Sedective perfume for women', 2345, 'image/Fragrance/frag13.png'),
(68, 'Dorall Collection Perfume for women', 895, 'image/Fragrance/frag14.png'),
(69, 'Blue wave Fresh Perfume', 639, 'image/Fragrance/frag15.png'),
(70, 'Beautiliss Professional Perfume for women', 999, 'image/Fragrance/frag16.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fragrance`
--
ALTER TABLE `fragrance`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fragrance`
--
ALTER TABLE `fragrance`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;