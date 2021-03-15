-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 05:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hondadatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username`, `password`, `level`) VALUES
(1000, 'joom', 'joom', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(4) NOT NULL,
  `id_account` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(4) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `price` int(15) NOT NULL,
  `amount` int(10) NOT NULL,
  `name_image` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `productName`, `price`, `amount`, `name_image`) VALUES
('P001', 'Honda Brio', 495000, 10, '/projectPHP/ImageHonda_PHP/HondaBrio.jpg'),
('P002', 'Honda BRIO AMAZE', 579000, 10, '/projectPHP/ImageHonda_PHP/HondaBrioAmaze.jpg'),
('P003', 'Honda CITY', 579000, 10, '/projectPHP/ImageHonda_PHP/HondaCity.jpg'),
('P004', 'Honda JAZZ', 555000, 10, '/projectPHP/ImageHonda_PHP/HondaJazz.png'),
('P005', 'Honda Mobilio', 659000, 10, '/projectPHP/ImageHonda_PHP/HondaMobilio.jpg'),
('P006', 'Honda BR-V', 765000, 10, '/projectPHP/ImageHonda_PHP/HondaBR-V.jpg'),
('P007', 'Honda Civic', 874000, 10, '/projectPHP/ImageHonda_PHP/HondaCivic.jpg'),
('P008', 'Honda Civic Hatchbac', 1229000, 10, '/projectPHP/ImageHonda_PHP/HondaCivicHatchback.jpg'),
('P009', 'Honda HR-V', 949000, 10, '/projectPHP/ImageHonda_PHP/HondaHR-V.png'),
('P010', 'Honda CR-V', 1359000, 10, '/projectPHP/ImageHonda_PHP/HondaCR-V.jpg'),
('P011', 'Honda Accord', 1475000, 10, '/projectPHP/ImageHonda_PHP/HondaAccord.png');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id_sale` int(4) NOT NULL,
  `id_account` int(4) NOT NULL,
  `id_product` int(4) NOT NULL,
  `saleDay` varchar(10) NOT NULL,
  `piece` int(10) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id_sale`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
