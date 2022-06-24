-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 11:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buyer-form-submission`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyer`
--

CREATE TABLE `tbl_buyer` (
  `id` bigint(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  `receipt_id` varchar(20) NOT NULL,
  `items` varchar(255) NOT NULL,
  `buyer_email` varchar(50) NOT NULL,
  `buyer_ip` varchar(20) NOT NULL,
  `note` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `hash_key` varchar(255) NOT NULL,
  `entry_at` date NOT NULL,
  `entry_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buyer`
--

INSERT INTO `tbl_buyer` (`id`, `amount`, `buyer`, `receipt_id`, `items`, `buyer_email`, `buyer_ip`, `note`, `city`, `phone`, `hash_key`, `entry_at`, `entry_by`) VALUES
(1, 90808, 'oioiuoiuio', '908080', 'ijiohihijh', 'hkhjk@ra.co', '::1', 'oiuihkjhkj', 'hkjhjkhkjh', '09897897', '90OM2ErPGqM26', '2022-05-22', 989798),
(2, 200, 'buyer1', '123', '4', 'buyer1@by.co', '::1', 'Note1', 'Dhaka', '12345', '20EAfcH0JSFQY', '2022-04-22', 2),
(3, 200, 'buyer1', '123', '4', 'buyer1@by.co', '::1', 'Note1', 'Dhaka', '12345', '20EAfcH0JSFQY', '2022-06-22', 2),
(4, 200, 'buyer2', '1232', '42', 'buyer2@by.co', '::1', 'Note2', 'Dhaka, Dhaka', '12345', '20rTw5DweF3Ps', '2022-03-22', 4),
(5, 55, 'buyer4', '8989', 'Item4', 'buyer4@by.co', '::1', 'Note 2', 'Kulna', '08987876786', '55/nMsO4HG22.', '2022-02-22', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buyer`
--
ALTER TABLE `tbl_buyer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buyer`
--
ALTER TABLE `tbl_buyer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
