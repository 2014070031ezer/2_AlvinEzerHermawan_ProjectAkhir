-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 01:22 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `style_reference`
--

CREATE TABLE `style_reference` (
  `user_id` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `product_category` text COLLATE utf8mb4_general_ci NOT NULL,
  `fashion_style` text COLLATE utf8mb4_general_ci NOT NULL,
  `clothing_size` text COLLATE utf8mb4_general_ci NOT NULL,
  `shoe_size` int NOT NULL,
  `updates_preference` enum('Yes','No') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `style_reference`
--

INSERT INTO `style_reference` (`user_id`, `product_category`, `fashion_style`, `clothing_size`, `shoe_size`, `updates_preference`) VALUES
('ALVIN01', 'Shoes', 'Streetwear', 'XL', 42, 'Yes'),
('HALO', 'Ready-to-wear', 'Minimalist', 'S', 42, 'Yes'),
('JIOJIO', 'Lipstick', 'Streetwear', 'L', 41, 'No'),
('ngoangoa', 'Bags', 'Elegant', 'M', 38, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `age`, `email`, `password`) VALUES
('Alvin', 'alvin01', 17, 'alvinezer528@gmail.com', '$2y$10$exn4FdgOFHzFWqvjjk5jpu/2ifu3tk4thgyklJg3ASlt.TfmsWV1K'),
('alvin', 'Tori', 17, 'alvinezer528@gmail.com', '$2y$10$THw6Dx530sQDuZtCBp5.tOfkpJWKHYYVAuKI6OK.kpkfhy0RWu8M.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `style_reference`
--
ALTER TABLE `style_reference`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
