-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 08:36 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE `category_info` (
  `item_name` varchar(10) DEFAULT NULL,
  `id` varchar(10) NOT NULL,
  `category_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`item_name`, `id`, `category_name`) VALUES
('Laptop', '0001', 'hp'),
('Laptop', '0002', 'asus'),
('Laptop', '001', 'hp'),
('Laptop', '002', 'asus');

-- --------------------------------------------------------

--
-- Table structure for table `create_user`
--

CREATE TABLE `create_user` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `con_pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_user`
--

INSERT INTO `create_user` (`email`, `password`, `con_pass`) VALUES
('aks.kamrujjaman@gmail.com', '222', '222'),
('info@gmail.com', '123', '123'),
('osman@gmail.com', '321', '321');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` varchar(15) NOT NULL,
  `customer_name` varchar(15) DEFAULT NULL,
  `customer_details` varchar(25) DEFAULT NULL,
  `customer_con` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `customer_name`, `customer_details`, `customer_con`) VALUES
('001', 'knmdskn', '<p>adcASc</p>', 'acaSv');

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE `item_info` (
  `id` varchar(20) NOT NULL,
  `item_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`id`, `item_name`) VALUES
('0001', 'Laptop'),
('0002', 'Desktop'),
('0003', 'Mouse');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `Item_name` varchar(15) DEFAULT NULL,
  `Category_name` varchar(15) DEFAULT NULL,
  `Product_id` varchar(15) DEFAULT NULL,
  `Product_name` varchar(15) NOT NULL,
  `Product_price` varchar(20) DEFAULT NULL,
  `product_details` varchar(20) DEFAULT NULL,
  `Product_stock` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`Item_name`, `Category_name`, `Product_id`, `Product_name`, `Product_price`, `product_details`, `Product_stock`) VALUES
('000', '000', '000', '000', '000', '000', '000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_info`
--
ALTER TABLE `category_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_user`
--
ALTER TABLE `create_user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `item_info`
--
ALTER TABLE `item_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`Product_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
