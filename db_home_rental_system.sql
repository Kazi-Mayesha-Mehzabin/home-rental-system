-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 10:59 AM
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
-- Table structure for table `booking_flats`
--

CREATE TABLE `booking_flats` (
  `id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `flat_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_flats`
--

INSERT INTO `booking_flats` (`id`, `renter_id`, `flat_id`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 2, '2023-05-02 12:22:34', '2023-05-02 12:22:34'),
(2, 1, 9, 3, '2023-05-03 12:18:36', '2023-05-03 12:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `flat_name` varchar(30) NOT NULL,
  `flat_no` varchar(30) NOT NULL,
  `road_no` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL,
  `rent` int(11) NOT NULL,
  `available_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `room_num` int(11) NOT NULL,
  `bathroom_num` int(11) NOT NULL,
  `lift` varchar(50) NOT NULL,
  `house_length` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `floor_num` varchar(50) NOT NULL,
  `charge` int(11) NOT NULL,
  `location_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `owner_id`, `flat_name`, `flat_no`, `road_no`, `area`, `division`, `rent`, `available_date`, `image`, `created_at`, `updated_at`, `room_num`, `bathroom_num`, `lift`, `house_length`, `details`, `floor_num`, `charge`, `location_link`) VALUES
(9, 1, 'Deanmur', '2A', '3', 'Amtala', 'Khulna', 14000, '2023-05-04 19:12:31', '12room2.jpg', '2023-04-28 11:34:18', '2023-05-04 13:12:31', 2, 2, 'Available', '1600', 'A three Bed room with attached balcony', '3rd', 2500, 'https://www.google.com/maps/place/Khulna/data=!4m2!3m1!1s0x39ff9071cb47152f:0xf04b212290718952?sa=X&ved=2ahUKEwi4lZTUr9T-AhVTZWwGHclHDEwQ8gF6BAgIEAI'),
(12, 1, 'Lewis Building', '3C', '3', 'Dhanmondi', 'Dhaka', 12000, '2023-05-21 18:00:00', '1682951142_explore1.png', '2023-05-01 08:25:42', '2023-05-01 08:25:42', 2, 1, 'Available', '1100', 'A two-bed flat with available lift.', '6th', 1500, ''),
(13, 1, 'Lake Ripple', '3B', '5', 'Dhanmondi', 'Dhaka', 25000, '2023-05-23 18:00:00', '1682952421_explore2.png', '2023-05-01 08:47:01', '2023-05-01 08:47:01', 3, 3, 'Available', '1800', 'A three bed flat with attached bathroom.', '2nd', 4500, 'https://www.google.com/maps/place/23%C2%B046\'02.0%22N+90%C2%B022\'05.0%22E/@23.7671737,90.3678945,17z'),
(14, 1, 'Kazi and Sheikh', '2D', '7', 'Dhanmondi', 'Dhaka', 30000, '2023-05-05 06:50:33', '1682953278_room4.jpg', '2023-05-01 09:01:18', '2023-05-01 09:01:18', 3, 3, 'Available', '1900', 'Attached Dining and balcony.', '8th', 4500, 'https://www.google.com/maps/place/Dhanmondi,+Dhaka+1205/@23.7470306,90.375862,15z/data=!3m1!4b1!4m6!3m5!1s0x3755b8b33cffc3fb:0x4a826f475fd312af!8m2!3d23.7461495!4d90.3742307!16s%2Fm%2F02phgcq'),
(15, 1, 'Parzi Kavin', '5C', '6', 'Gulshan,2', 'Dhaka', 13000, '2023-05-17 18:00:00', '1683130209_roomNew.jpg', '2023-05-03 10:10:09', '2023-05-03 10:10:09', 2, 1, 'Available', '1000', 'A family friendly Flat', '7th', 1200, 'https://www.google.com/maps/place/Gulshan,+Dhaka/data=!4m2!3m1!1s0x3755c7a0f70deb73:0x30c36498f90fe23?sa=X&ved=2ahUKEwiWjOOzxNn-AhX7XmwGHR_6CnwQ8gF6BAgIEAI'),
(17, 1, 'The Hilliyard', '8A', '3', 'Mirpur,2', 'Dhaka', 35000, '2023-06-06 18:00:00', '1683270178_room8.jpg', '2023-05-05 01:02:58', '2023-05-05 01:02:58', 4, 3, 'Available', '2100', 'A luxurious family flat.', '8th', 5000, 'https://www.google.com/maps/place/Mirpur-2,+Dhaka/data=!4m2!3m1!1s0x3755c0c5074ec8db:0x1450dad46461cbe8?sa=X&ved=2ahUKEwjXhu_5zd3-AhW77zgGHSqEAFEQ8gF6BAgIEAI'),
(18, 1, 'Abohani Ville', '3D', '6', 'Bashundhara R/A', 'Dhaka', 16000, '2023-05-24 18:00:00', '1683270408_explore4.png', '2023-05-05 01:06:48', '2023-05-05 01:06:48', 2, 1, 'Not Available', '1300', 'A family friendly Flat', '3rd', 1000, 'https://www.google.com/maps/place/Basundhara+Residential+Area,+Dhaka/@23.8195442,90.4543555,14z/data=!3m1!4b1!4m6!3m5!1s0x3755c62fce7d991f:0xacfaf1ac8e944c05!8m2!3d23.8191441!4d90.4525954!16s%2Fg%2F1yfdrwxvj'),
(19, 1, 'Sheikh Bari', '5A', '3', 'Bashundhara R/A', 'Dhaka', 9000, '2023-05-28 18:00:00', '1683270669_explore3.png', '2023-05-05 01:11:09', '2023-05-05 01:11:09', 1, 1, 'Available', '1000', 'A student Friendly Flat', '5th', 900, 'https://www.google.com/maps/place/Basundhara+Residential+Area,+Dhaka/@23.8195442,90.4543555,14z/data=!3m1!4b1!4m6!3m5!1s0x3755c62fce7d991f:0xacfaf1ac8e944c05!8m2!3d23.8191441!4d90.4525954!16s%2Fg%2F1yfdrwxvj');

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
(10, 'Kazi Ayesha Tahzib', '01551103616', 'ayesha@gmail.com', '5432178', 'ayesha', '2023-05-04 09:54:58', '2023-05-04 09:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(30) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `method`, `renter_id`, `created_at`, `updated_at`) VALUES
(1, 12000, 'Online Payment', 1, '2023-05-02 12:06:54', '2023-05-02 12:06:54'),
(2, 12000, 'Online Payment', 1, '2023-05-02 12:22:34', '2023-05-02 12:22:34'),
(3, 10000, 'Online Payment', 1, '2023-05-03 12:18:36', '2023-05-03 12:18:36');

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
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`id`, `name`, `phone_num`, `nid`, `password`, `profession`, `created_at`, `updated_at`) VALUES
(1, 'Anika Mahmud', '0175678901', '21567811', 'Anika', 'Teacher', '2023-04-28 10:14:28', '2023-04-28 10:14:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_flats`
--
ALTER TABLE `booking_flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
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
-- AUTO_INCREMENT for table `booking_flats`
--
ALTER TABLE `booking_flats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
