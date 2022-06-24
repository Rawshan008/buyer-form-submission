-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 04:45 PM
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
(12, 200, 'Buyer 1', 'ReceiptOne', 'Items', 'buyer1@by.co', '::1', 'Notes', 'Dhaka', '8801234567891', '20d9p8W.4LWTo', '2022-06-24', 1),
(13, 400, 'Buyer 1	', 'ReceiptTwo', 'Items', 'buyer2@by.co', '::1', 'Notes', 'Khulna', '8809876543210', '40Ja0O4wvn7qg', '2022-06-24', 2),
(14, 600, 'Buyer 3', 'ReceiptThree', 'Items', 'buyer2@by.co', '::1', 'Notes', 'Rajshahi', '8809876546781', '60.g2PDa6UKgI', '2022-06-24', 3);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
