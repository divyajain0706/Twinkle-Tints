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

CREATE TABLE `skinproducts` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `skinproducts` (`product_id`, `product_name`, `price`,`product_image`) VALUES
(2, 'Minimalist 10% vitamin B5 face moisturizer.png', 331, 'Images/SkinPage/Moist2.png'),
(3, 'The Derma Co 2% Cojic Acid Face Serum with Rice Water.png', 908, 'Images/SkinPage/Moist3.png'),
(4, 'Reequil Ceramide and Hyaluronic Acid Moisturizer.png', 295, 'Images/SkinPage/Moist4.png'),
(5, 'Bioderma Atoderm Ultra daily Hydrating Moisturizer.png', 660, 'Images/SkinPage/Moist5.png'),
(6, 'Minimalist 10% Niacinamide Face Serum with Matmarine.png', 569, 'Images/SkinPage/Moist6.png'),
(7, 'Neutrogena Hydration and Sunblock Combo.png', 1250, 'Images/SkinPage/Moist7.png'),
(8, 'Plum Smoothe and Hydrate duo Combo.png', 783, 'Images/SkinPage/Moist8.png'),
(9, 'Maybelline Newyork Fit Me Matte Foundation',234,'Images/SkinPage/Mask1.png'),
(10, 'Huda Beauty Cheeky Tint Blush Stick',2350,'Images/SkinPage/Mask2.png'),
(11, 'Lakme 9to5 Primer + Liquid Concealer',382,'Images/SkinPage/Mask3.png'),
(12, 'LOreal Paris Blendable Liquid Foundation',879,'Images/SkinPage/Mask4.png'),
(13, 'Xx Revolution Jitter Blush-Bright Peach',765,'Images/SkinPage/Mask5.png'),
(14, 'KIRO Daily Dewy Serum Foundation',712,'Images/SkinPage/Mask6.png'),
(15, 'Super Dewy Liquid Blush',639,'Images/SkinPage/Mask7.png'),
(16, 'SUGAR Ace of Face Foundation Stick',1099,'Images/SkinPage/Mask8.png');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `skinproducts`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `skinproducts`
  MODIFY `product_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
