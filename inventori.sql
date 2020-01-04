-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 02:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `id` int(6) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `supplier_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`id`, `product_name`, `supplier_id`) VALUES
(1, 'MSI GL63', 2),
(2, 'Acer Predator Triton 300', 1),
(3, 'Acer Nitro', 1),
(4, 'Macbook Pro 18', 2),
(6, 'Razer Blade Stealth', 4),
(7, 'MSI GL61', 3);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_tb`
--

CREATE TABLE `suppliers_tb` (
  `supplier_id` int(6) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers_tb`
--

INSERT INTO `suppliers_tb` (`supplier_id`, `company_name`, `address`, `phone`) VALUES
(1, 'PT.DumbWays', 'Jalan Kemana Saja', '0838969669'),
(2, 'PT.WaysDumb', 'Jalanin aja dulu', '08216921212'),
(3, 'PT.Mejik', 'Jl Wonderland', '086921692169'),
(4, 'PT.Sera', 'Jl Nusakambangan', '086921692169'),
(5, 'PT.SUKA HATI', '', '08999327717');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `suppliers_tb`
--
ALTER TABLE `suppliers_tb`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suppliers_tb`
--
ALTER TABLE `suppliers_tb`
  MODIFY `supplier_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD CONSTRAINT `product_tb_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers_tb` (`supplier_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
