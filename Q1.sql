-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221103.3a7b77d22e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 07:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Q1`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `allocation_id` int(20) NOT NULL,
  `complain_id` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`allocation_id`, `complain_id`, `id`) VALUES
(1, 1, 2),
(2, 4, 4),
(3, 2, 2),
(4, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(20) NOT NULL,
  `complain_id` int(20) NOT NULL,
  `complain_name` varchar(100) NOT NULL,
  `complain_des` varchar(200) NOT NULL,
  `product_id` int(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `complain_id`, `complain_name`, `complain_des`, `product_id`, `status`) VALUES
(3, 1, 'Mobile Not Working', 'from few days mobile is not working properly', 3, 'Success'),
(3, 2, 'Mobile Not Working', 'from few days mobile is not working properly', 3, 'Success'),
(1, 4, 'not working', 'not working properly', 1, 'Success'),
(1, 5, 'Mixer Problem', 'Not working properly', 2, 'New'),
(1, 6, 'Mixer stop', 'Stop while in between', 2, 'New'),
(1, 7, 'Mobile Not working', 'Its not working properly', 3, 'Success'),
(1, 8, 'TV Stop working', 'Tv is not working', 1, 'New'),
(1, 9, 'TV Stop working', 'Tv is not working', 1, 'New'),
(3, 10, 'Realme Not working', 'Mobile stop working', 3, 'New'),
(1, 11, 'Mixer stop working', 'mixer not working', 2, 'New'),
(3, 13, 'not working', 'Phn not working', 3, 'New'),
(3, 14, 'Mixer stop', 'Mixer stop working', 2, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_des` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_des`, `product_price`, `product_photo`) VALUES
(1, 'TV', 'Redmi 64inch TV', '52000', 'd41a0d2ff55d59a11be0899dbc1a38ed84.jpg'),
(2, 'Mobile', 'Redmi10 246gb New Model', '20000', 'c3892f623f76c55e899ce15d7902b07c32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `address`, `photo`, `password`, `type`) VALUES
(1, 'himanshi', 'himanshi@gmail.com', 'surat', '34942fe947876ad1b2a5a5594a094acb27.jpg', 'himu123', 'customer'),
(2, 'V', 'v@gmail.com', 'seoul', '6f0655f9408c21cf79b043b5baef5aeb60.jpg', 'v123', 'service provider');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`allocation_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `allocation_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
