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
-- Table structure for table `brushesandtools`
--

CREATE TABLE `brushesandtools` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brushesandtools`
--

INSERT INTO `brushesandtools` (`product_id`, `product_name`, `price`, `product_image`) VALUES
(39, 'PAC Concealer Brush', 382, 'image/BrushesTools/brush1.png'),
(40, 'Huda Beauty Double Ended Foundation Brush', 2950, 'image/BrushesTools/brush2.png'),
(41, 'MARS Arsenal Brush Set', 1399, 'image/BrushesTools/brush3.png'),
(42, 'Majestique Makeup Foundation Brush', 302, 'image/BrushesTools/brush4.png'),
(43, 'Bronson Diamond Shape Foundation Brush', 380, 'image/BrushesTools/brush5.png'),
(44, 'Majestique 2-In-1 Brush and Sponge', 164, 'image/BrushesTools/brush6.png'),
(45, 'Daily Life Forever Foundation Brush', 249, 'image/BrushesTools/brush7.png'),
(46, 'Plum Smoothe and Hydrate duo Combo', 780, 'image/BrushesTools/brush8.png'),
(47, 'PAC Small Sizza Puff', 236, 'image/BrushesTools/Blender1.png'),
(48, 'Tulips Cotton Pads', 200, 'image/BrushesTools/Cottonpads.png'),
(49, 'PAC Olive Cut Blender', 316, 'image/BrushesTools/Blender2.png'),
(50, 'PAC EyeLoveLashes Combo', 1115, 'image/BrushesTools/eyecurlercombo.png'),
(51, 'Majestique Soft Heart Shape Makeup Blender', 765, 'image/BrushesTools/Blender3.png'),
(52, 'PAC Get-Set-Go Brush Bag', 895, 'image/BrushesTools/brushbag.png'),
(53, 'RENEE Master Blender', 639, 'image/BrushesTools/blender4.png'),
(54, 'Beautiliss Professional Eyelashes Curler', 199, 'image/BrushesTools/eyecurler.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brushesandtools`
--
ALTER TABLE `brushesandtools`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brushesandtools`
--
ALTER TABLE `brushesandtools`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;