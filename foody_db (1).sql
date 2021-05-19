-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 03:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foody_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `target_file` varchar(200) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `unit`, `target_file`, `user_id`, `status`) VALUES
(1, 'Adoboxxxx', 'Adobong Manok w/ Spicy', '45', 'Serve', 'upload/3-01.jpg', '3', 'Available'),
(2, 'Adobo', 'sasas', '45', 'Serve', 'upload/3-win_20201222_112726.jpg', '3', 'Available'),
(3, 'Tinula', 'sasas', '45', 'Serve', 'upload/3-win_20201214_104603.jpg', '3', 'Available'),
(4, 'Adobo', 'sas', '45', 'Serve', 'upload/3-k.e..png', '3', 'Available'),
(5, 'sas', 'sasas', 'sas', 'sas', 'upload/3-118121467_802238623855358_1113571214940281267_n.jpg', '3', 'Not Available'),
(6, 'Bulad', 'Lamiun', '78.00', 'Serve', 'upload/3-02.jpg', '3', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `register_store`
--

CREATE TABLE `register_store` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `register_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `target_file` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_store`
--

INSERT INTO `register_store` (`id`, `user_id`, `register_name`, `address`, `target_file`, `contact`, `email`, `status`) VALUES
(2, '3', 'Weweng Home-based Business', 'Molave, Zamboanga del Sur', 'upload/3-win_20201214_104603.jpg', '09559067491', 'rubiaarwinneil@gmail.com', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart`
--

CREATE TABLE `temp_cart` (
  `id` int(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `store` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_cart`
--

INSERT INTO `temp_cart` (`id`, `product`, `store`, `user_id`, `price`, `quantity`, `unit`, `date`) VALUES
(1, '4', '3', '4', '45', '78', 'Serve', '1621428531'),
(2, '4', '3', '4', '45', '1', 'Serve', '1621430102');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bday` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_type`, `gender`, `bday`, `contact`, `address`, `email`) VALUES
(3, 'Rubia*Arwin Neil*Navarro', 'Seller', 'Male', '1996-06-21', '09559067491', 'Molave, Zamboanga del Sur', 'rubiaarwinneil@gmail.com'),
(4, 'Pagatpat*Grace*Jaictin', 'Consumer', 'Female', '1996-04-19', '09366544539', 'Molave, Zamboanga del Sur', 'gracy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `user_type`, `username`, `password`, `user_id`) VALUES
(1, 'Seller', 'seller', 'seller', '3'),
(2, 'Consumer', 'customer', 'customer', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_store`
--
ALTER TABLE `register_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_cart`
--
ALTER TABLE `temp_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register_store`
--
ALTER TABLE `register_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp_cart`
--
ALTER TABLE `temp_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
