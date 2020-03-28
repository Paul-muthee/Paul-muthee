-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2020 at 01:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glo_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(125) NOT NULL,
  `name` varchar(125) NOT NULL,
  `phone` int(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `date_` varchar(65) NOT NULL,
  `admin_` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `date_`, `admin_`) VALUES
(1, 'john', 9832832, 'john@gmail.com', '{6e0b7076126a29d5dfcbd54835387b7b}', '2020-03-09', ''),
(2, 'glo', 899808, 'glo@gmail.com', '{3b011e454d3f4844a92c37ed372a0dff}', '2020-03-10', 'john@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders_`
--

CREATE TABLE `orders_` (
  `order_id` int(65) NOT NULL,
  `drink` varchar(65) NOT NULL,
  `name` varchar(65) NOT NULL,
  `phone` varchar(65) NOT NULL,
  `address` varchar(65) NOT NULL,
  `date` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `d_date` varchar(65) NOT NULL,
  `time` varchar(65) NOT NULL,
  `bottles` varchar(65) NOT NULL,
  `d_method` varchar(65) NOT NULL,
  `fullfilled` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_`
--

INSERT INTO `orders_` (`order_id`, `drink`, `name`, `phone`, `address`, `date`, `email`, `d_date`, `time`, `bottles`, `d_method`, `fullfilled`) VALUES
(1, 'Famous Grouse (750 ml) ', 'john Doe', '9832832', 'kasabuni', '2020-03-10', 'john@gmail.com', '03/11/2020', '8 : 15 AM', '4', 'delivery', 1),
(2, 'Jameson (350 ml) ', 'keke', '0302303', 'Nigeria', '2020-03-10', 'keke@gmail.com', '03/18/2020', '8 : 18 AM', '3', 'pick up', 1),
(4, 'Jameson (350 ml) ', 'RAo', '0930233', 'langata', '2020-03-10', 'rao@gmail.com', '03/18/2020', '9 : 26 AM', '2', 'delivery', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_`
--
ALTER TABLE `orders_`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_`
--
ALTER TABLE `orders_`
  MODIFY `order_id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
