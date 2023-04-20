-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 08:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_home_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `phone_num`, `email`, `nid`, `password`, `created_at`, `updated_at`) VALUES
(1, 'mayesha', '01747897071', 'm@gmail.com', '123456', 'mayesha', '2023-04-20 11:26:06', '2023-04-20 11:26:06'),
(2, 'mayesha', '01747897071', 'm@gmail.com', '123456', 'mayesha', '2023-04-20 11:28:32', '2023-04-20 11:28:32'),
(3, 'mayesha', '01747897071', 'm@gmail.com', '123456', 'mayesha', '2023-04-20 11:48:02', '2023-04-20 11:48:02'),
(4, 'mayesha', '01747897071', 'm@gmail.com', '123456', 'mayesha', '2023-04-20 11:51:04', '2023-04-20 11:51:04'),
(5, 'mayesha', '01747897071', 'm@gmail.com', '123456', 'mayesha', '2023-04-20 12:03:32', '2023-04-20 12:03:32'),
(6, 'mayesha', '01747897071', 'm@gmail.com', '123456', 'mayesha', '2023-04-20 12:04:21', '2023-04-20 12:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `nid` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
