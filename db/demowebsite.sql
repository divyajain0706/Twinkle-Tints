-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 08:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demowebsite`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hairs`
--

INSERT INTO `hairs` (`product_id`, `product_name`, `price`, `product_image`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `makeup`
--

CREATE TABLE `makeup` (
  `product_id` int(2) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `makeup`
--

INSERT INTO `makeup` (`product_id`, `product_name`, `price`, `product_image`) VALUES
(2, 'Rom&nd Zero Matte Lipstic-Lust Pink', 1580, 'Images/MakeupPage/Lips2.png'),
(3, 'Maybelline Newyork Liquid Matte Lipstic', 1799, 'Images/MakeupPage/Lips3.png'),
(4, 'Faces Canada Comfy Liquid Matte Lipstic', 1299, 'Images/MakeupPage/Lips4.png'),
(5, 'Maybelline Newyork Fit Me Matte Foundation', 434, 'Images/MakeupPage/Face1.png'),
(6, 'Huda Beauty Cheeky Tint Blush Stick', 2399, 'Images/MakeupPage/Face2.png'),
(7, 'Lakme 9to5 Primer + Liquid Concealer', 382, 'Images/MakeupPage/Face3.png'),
(8, 'SUGAR Ace of Face Foundation Stick', 1099, 'Images/MakeupPage/Face8.png'),
(9, 'Maybelline Newyork Colossal Eyeliner', 354, 'Images/MakeupPage/Eyes1.png'),
(10, 'M.A.C Eyebrows Styler', 2350, 'Images/MakeupPage/Eyes3.png'),
(11, 'Faces Canada Magneteyes Eyeliner', 290, 'Images/MakeupPage/Eyes7.png'),
(12, 'Colorbar Lash Illusion Mascara Duo', 386, 'Images/MakeupPage/Eyes4.png');

-- --------------------------------------------------------

--
-- Table structure for table `skinproducts`
--

CREATE TABLE `skinproducts` (
  `product_id` int(2) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `skinproducts`
--

INSERT INTO `skinproducts` (`product_id`, `product_name`, `price`, `product_image`) VALUES
(2, 'Minimalist 10% vitamin B5 face moisturizer.png', 331, 'Images/SkinPage/Moist2.png'),
(3, 'The Derma Co 2% Cojic Acid Face Serum with Rice Water.png', 908, 'Images/SkinPage/Moist3.png'),
(4, 'Reequil Ceramide and Hyaluronic Acid Moisturizer.png', 295, 'Images/SkinPage/Moist4.png'),
(5, 'Bioderma Atoderm Ultra daily Hydrating Moisturizer.png', 660, 'Images/SkinPage/Moist5.png'),
(6, 'Minimalist 10% Niacinamide Face Serum with Matmarine.png', 569, 'Images/SkinPage/Moist6.png'),
(7, 'Neutrogena Hydration and Sunblock Combo.png', 1250, 'Images/SkinPage/Moist7.png'),
(8, 'Plum Smoothe and Hydrate duo Combo.png', 783, 'Images/SkinPage/Moist8.png'),
(9, 'Maybelline Newyork Fit Me Matte Foundation', 234, 'Images/SkinPage/Mask1.png'),
(10, 'Huda Beauty Cheeky Tint Blush Stick', 2350, 'Images/SkinPage/Mask2.png'),
(11, 'Lakme 9to5 Primer + Liquid Concealer', 382, 'Images/SkinPage/Mask3.png'),
(12, 'LOreal Paris Blendable Liquid Foundation', 879, 'Images/SkinPage/Mask4.png'),
(13, 'Xx Revolution Jitter Blush-Bright Peach', 765, 'Images/SkinPage/Mask5.png'),
(14, 'KIRO Daily Dewy Serum Foundation', 712, 'Images/SkinPage/Mask6.png'),
(15, 'Super Dewy Liquid Blush', 639, 'Images/SkinPage/Mask7.png'),
(16, 'SUGAR Ace of Face Foundation Stick', 1099, 'Images/SkinPage/Mask8.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hairs`
--
ALTER TABLE `hairs`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `makeup`
--
ALTER TABLE `makeup`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `skinproducts`
--
ALTER TABLE `skinproducts`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hairs`
--
ALTER TABLE `hairs`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `makeup`
--
ALTER TABLE `makeup`
  MODIFY `product_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `skinproducts`
--
ALTER TABLE `skinproducts`
  MODIFY `product_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
