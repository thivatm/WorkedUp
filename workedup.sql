-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 08:16 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workedup`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicName` varchar(50) NOT NULL,
  `prodDescrip` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL DEFAULT '0.00',
  `prodQuantity` int(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Vanilla Toilet Spray', 'Spray.jpeg', 'Lavender Vanilla Toilet Spray\r\n\r\nConcentrated formula\r\n\r\nNatural essential oils\r\n\r\nLavender, vanilla and citrus\r\n\r\nUp to 100 uses\r\n\r\nNo synthetic fragrance, parabens, phthalates, aerosol, alcohol, formaldehyde\r\n\r\nAll stink-fightin\' good stuff!\r\n\r\nToilet friendly\r\n\r\nSpritz The Bowl Before-You-Go and No One Else Will Ever Know!®\r\nBehold... the magic of a Jester with the power of a King. Poo-Pourri Lavender Vanilla is a pure blend of Natural Essential Oils that eliminates bathroom odor before it begins - so you can leave the porcelain throne smelling better than you fund it!', '7.00', 100),
(2, 'White Storage', 'storage.jpg', 'Keep all your bathroom essentials within reach. This 3 tier storage has a simple design which will blend in perfectly into your bathroom or bedroom.\r\n\r\nCare and use instructions:\r\nDon’t wash this. Just wipe it clean with a soft, dry cloth if it gets a little dusty\r\nDon’t use abrasive cleaners as they can spoil the finish\r\n\r\nImportant Information\r\nThe above details have been prepared to help you select suitable products. Products and their ingredients are liable to change.\r\n\r\nYou should always read the label before consuming or using the product and never rely solely on the information presented here.\r\n\r\nIf you require specific advice on any Sainsbury\'s branded product, please contact our Customer Careline on 0800 636262. For all other products, please contact the manufacturer.\r\n\r\nThis information is supplied for your personal use only. It may not be reproduced in any way without the prior consent of Sainsbury\'s Supermarkets Ltd and due acknowledgement.', '26.00', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `userFName` varchar(255) NOT NULL,
  `userSName` varchar(255) NOT NULL,
  `userAddress` varchar(255) NOT NULL,
  `userPostCode` varchar(255) NOT NULL,
  `userTelNo` bigint(20) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) VALUES
(1, 'premium', 'thiva', 'mahen', '12,gghsa', '12334', 5553322344, 'tta@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
