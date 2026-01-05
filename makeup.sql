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
-- Table structure for table `product`
--

CREATE TABLE `makeup` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `makeup` (`product_id`, `product_name`, `price`,`product_image`) VALUES
(1, 'Maybelline Newyork Superstay Liquid Lipstic',1230,'Images/MakeupPage/Lips1.png'),
(2, 'Rom&nd Zero Matte Lipstic-Lust Pink',1580 ,'Images/MakeupPage/Lips2.png'),
(3, 'Maybelline Newyork Liquid Matte Lipstic', 1799, 'Images/MakeupPage/Lips3.png'),
(4, 'Faces Canada Comfy Liquid Matte Lipstic', 1299, 'Images/MakeupPage/Lips4.png'),
(5, 'Maybelline Newyork Fit Me Matte Foundation', 434, 'Images/MakeupPage/Face1.png'),
(6, 'Huda Beauty Cheeky Tint Blush Stick', 2399, 'Images/MakeupPage/Face2.png'),
(7, 'Lakme 9to5 Primer + Liquid Concealer', 382, 'Images/MakeupPage/Face3.png'),
(8, 'SUGAR Ace of Face Foundation Stick', 1099, 'Images/MakeupPage/8.png'),
(9, 'Maybelline Newyork Colossal Eyeliner',354,'Images/MakeupPage/Eyes1.png'),
(10, 'M.A.C Eyebrows Styler',2350,'Images/MakeupPage/Eyes3.png'),
(11, 'Faces Canada Magneteyes Eyeliner',290,'Images/MakeupPage/Eyes7.png'),
(12, 'Colorbar Lash Illusion Mascara Duo',386,'Images/MakeupPage/Eyes4.png');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `makeup`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `makeup`
  MODIFY `product_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
