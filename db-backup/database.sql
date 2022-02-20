-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2022 at 09:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sls_next`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_accomplishment`
--

CREATE TABLE `driver_accomplishment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_transaction_id` bigint(20) NOT NULL,
  `deriver_id` bigint(20) NOT NULL,
  `date_delivered` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `profile_img` text DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `remarks` varchar(225) DEFAULT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `email`, `dob`, `phone`, `city`, `zip`, `profile_img`, `address`, `remarks`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Driver 4', 'd4@gmail.cpm', '2022-02-11', '897786456', 'Kathmandu', '64542', 'uploads/drivers/c4b6010608670491e067f9f1c653cbe7.jpg', '0', '0', 'driver', '2022-02-19 09:12:58', '2022-02-20 06:39:12'),
(2, 'Driver 3', 'd3@gmail.cpm', '2022-02-19', '75667568', 'hjbhjv', '76865778', 'uploads/drivers/838682f05f008bb098773645ff3456cb.jpg', '0', '0', 'driver', '2022-02-19 10:08:51', '2022-02-20 06:38:58'),
(3, 'Driver 2', 'd2@gmail.cpm', '2022-02-04', '8265654', 'KAth', '64678', 'uploads/drivers/9beff46adb3bb6f39a8def51ef697f79.jpg', '0', '0', 'driver', '2022-02-19 10:09:29', '2022-02-20 06:38:45'),
(4, 'Driver 1', 'd1@gmail.cpm', '2022-02-10', '876789', 'Kathmandu', '44600', 'uploads/drivers/e48c560559c3b3a39f21978b16ea8a6d.jpg', '0', '0', 'driver', '2022-02-19 10:19:05', '2022-02-20 06:38:32'),
(9, 'customer2', 'customer2@gmail.com', NULL, '+9779865544017', 'Kathmandu', '44600', 'defaults/profile.jpg', 'Balaju,ktm Nepal', 'b', 'customer', '2022-02-19 13:16:28', '2022-02-20 06:46:32'),
(11, 'Customer 1', 'c1@gmail.com', NULL, '9865544017', 'Kathmandu', '44600', 'defaults/profile.jpg', 'Balaju,ktm Nepal', 'fgbgnhmj,', 'customer', '2022-02-19 13:17:33', '2022-02-20 06:39:29'),
(13, 'Shipper 1', 'shipper1@gmail.com', '2022-02-24', '9865544017', 'Kathmandu', '44600', 'uploads/drivers/861ca20717ddb29eaa89493e3d3e5373.jpg', NULL, NULL, 'shipper', '2022-02-19 13:37:06', '2022-02-20 06:47:51'),
(14, 'customer 3', 'customer3@gmail.com', NULL, '7857', 'bgfy', '2343546', 'defaults/profile.jpg', 'hfj,bv', ' gcj nbv', 'customer', '2022-02-20 06:47:08', '2022-02-20 06:47:08'),
(15, 'Shipper2', 'shipper2@gmail.com', '2022-02-08', '5647', 'gnvhj', '45', 'uploads/drivers/7696d90e5deb3c97360516f4e7e7a86e.jpg', NULL, NULL, 'shipper', '2022-02-20 06:48:29', '2022-02-20 06:48:29'),
(16, 'd5', 'd4@gmail.com', '2022-02-20', '6678', 'mbs', '657', 'uploads/drivers/c2118143739a3b626bba1c792371628e.jpg', NULL, NULL, 'driver', '2022-02-20 08:03:37', '2022-02-20 08:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_transaction`
--

CREATE TABLE `shipping_transaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_code` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `shipping_details` text NOT NULL,
  `shipper_name` varchar(50) NOT NULL,
  `pickup_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `drivers_free` varchar(20) NOT NULL,
  `transation_amount` varchar(20) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_transaction`
--

INSERT INTO `shipping_transaction` (`id`, `shipping_code`, `customer_name`, `shipping_details`, `shipper_name`, `pickup_date`, `delivery_date`, `driver_name`, `contact_number`, `drivers_free`, `transation_amount`, `remarks`, `status`, `created_at`, `updated_at`) VALUES
(3, '67435445', '11', 'bxvyvdzv', '15', '2022-02-15', '2022-03-02', '2', '7677187656', '100', '100', 'nbvjgsd', 'To Ship', '2022-02-20 06:19:24', '2022-02-20 06:49:51'),
(4, '45644', '11', 'vbchgkj,b', '13', '2022-02-01', '2022-02-21', '4', '345465', '342', '345', 'bnvh', 'Delivered', '2022-02-20 06:50:42', '2022-02-20 07:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` text NOT NULL,
  `account_type` varchar(20) NOT NULL DEFAULT 'encoder',
  `account_status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `contact_number`, `email`, `password`, `account_type`, `account_status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '8765679', 'admin@sls_next.com', '$2y$10$mYS28nJfN3IDb4ZUz3i4u.DpfAqaCWcYegRAQQT5l9RyEmH9FWoKm', 'Encoder', 'Activated', '2022-02-18 17:04:15', '2022-02-18 17:04:15'),
(4, ' VBB GHJJ NB', 'bnm ', '56758658', 'sdfg@dfg.b', '$2y$10$mYS28nJfN3IDb4ZUz3i4u.DpfAqaCWcYegRAQQT5l9RyEmH9FWoKm', 'Encoder', 'Deactivated', '2022-02-20 02:11:30', '2022-02-20 02:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `vehicals`
--

CREATE TABLE `vehicals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `vehicale_type` varchar(20) NOT NULL,
  `fuel_type` varchar(20) NOT NULL,
  `plate_number` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `mileage` varchar(20) NOT NULL,
  `plate_expiry` date NOT NULL,
  `last_inspection` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicals`
--

INSERT INTO `vehicals` (`id`, `owner_name`, `vehicale_type`, `fuel_type`, `plate_number`, `weight`, `mileage`, `plate_expiry`, `last_inspection`, `created_at`, `updated_at`) VALUES
(2, 'owner 1', '2 willer', '23', '1232', '23', '23', '2022-02-09', '2022-02-24', '2022-02-19 16:38:19', '2022-02-19 16:38:19'),
(3, 'owner 2', '4 willer', 'petrol', '345', '12', '12', '2022-02-08', '2022-03-03', '2022-02-19 16:48:51', '2022-02-19 16:48:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_accomplishment`
--
ALTER TABLE `driver_accomplishment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `shipping_transaction`
--
ALTER TABLE `shipping_transaction`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `vehicals`
--
ALTER TABLE `vehicals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver_accomplishment`
--
ALTER TABLE `driver_accomplishment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `shipping_transaction`
--
ALTER TABLE `shipping_transaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicals`
--
ALTER TABLE `vehicals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
