-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 09:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `Id` int(7) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `username`, `password`) VALUES
(4, 'DropOut', '$2y$10$BFEBL68vN4ZOTwvAhIB3duXixxv/YLBItOQ.qaD7T5n98bC5Mt.cW'),
(5, 'Tauske', '$2y$10$gOKxrpHdJXwq.wfKyMqjiusQlcmjOffWMVs8KlAZPBvtnPsUyLPb6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Vinland Saga', 500, 'download.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `surname`, `email`, `password`) VALUES
(6, 'hello', 'itsme', 'itsme@gmail.com', '$2y$10$W7Ij.LrV/kn5AUs4flc7SuIAMkZbmjyYm1HVyO8KR5mH8Weo90dSC'),
(8, 'hello', 'itsme', 'fyliqy@tutuapp.bid', '$2y$10$8ML9jo0kl27BybkvBijKL.ozsQ.tMP0YWljPz.frgs1YeCGQ/DLpG'),
(11, 'hello', 'itsme', 'work@gmail.com', '$2y$10$I//JPz0LS.dpXEo627o.sewrA.hTQOlz0wbgSPszQA1z2LF5xOQ/m'),
(15, 'please', 'work', 'work', '$2y$10$Pe4wZvW22HKxTCHm0HSjZeB.lhR1jfTp/jPOprdg5CLLZDIo6VPjC'),
(16, 'anza', 'itsme', 'dell@gmail.com', '$2y$10$Rcl2ky.z8oAPpkZ4VoGdKuUyjsI5rB853WsWZumdmRAb4BBPRuQ.G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
