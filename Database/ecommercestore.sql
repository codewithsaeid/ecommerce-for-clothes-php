-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 05:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `pid` int(250) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_code` varchar(250) NOT NULL,
  `p_category` varchar(250) NOT NULL,
  `p_price` varchar(250) NOT NULL,
  `p_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`pid`, `p_name`, `p_code`, `p_category`, `p_price`, `p_img`) VALUES
(4, 'Shirt', 'P12', 'Man', '$30', '12.jpg'),
(5, 'Shirt', 'P13', 'Man', '$30', '13.jpg'),
(6, 'L.Shirt', 'P14', 'Women', '$30', '15.jpg'),
(8, 'L shirt', '320BC', 'Man', '234', '16.jpg'),
(15, 'x-man', '007', 'Man', '40', '14064049_176753079400705_617919488227609300_n.jpg'),
(16, 'x-man', '007', 'women', '40', '14064049_176753079400705_617919488227609300_n.jpg'),
(17, 'x-man', '007', 'kids', '40', '14064049_176753079400705_617919488227609300_n.jpg'),
(18, 'x-man', '007', 'accessories', '40', '14064049_176753079400705_617919488227609300_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(100) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `admin_pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_email`, `admin_pass`) VALUES
(1, 'admin@gmail.com', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `pid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
