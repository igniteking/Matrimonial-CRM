-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 11:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `admin_name` text NOT NULL,
  `email` text NOT NULL,
  `admin_password` text NOT NULL,
  `user` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `email`, `admin_password`, `user`, `status`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'Administrator', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `sex` text NOT NULL,
  `language` text NOT NULL,
  `caste` text NOT NULL,
  `sub_caste` text NOT NULL,
  `gothram` text NOT NULL,
  `zodiac_sign` text NOT NULL,
  `star` text NOT NULL,
  `dob` date NOT NULL,
  `pob` text NOT NULL,
  `tob` datetime NOT NULL,
  `city` text NOT NULL,
  `district` text NOT NULL,
  `state` text NOT NULL,
  `height` text NOT NULL,
  `color` text NOT NULL,
  `eating_habits` text NOT NULL,
  `bad_habbits` text NOT NULL,
  `education` text NOT NULL,
  `job` text NOT NULL,
  `job_location` text NOT NULL,
  `nri` text NOT NULL,
  `annual_income` text NOT NULL,
  `parents_details` text NOT NULL,
  `requirements` text NOT NULL,
  `whatsapp_number` text NOT NULL,
  `phone_number` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `sex`, `language`, `caste`, `sub_caste`, `gothram`, `zodiac_sign`, `star`, `dob`, `pob`, `tob`, `city`, `district`, `state`, `height`, `color`, `eating_habits`, `bad_habbits`, `education`, `job`, `job_location`, `nri`, `annual_income`, `parents_details`, `requirements`, `whatsapp_number`, `phone_number`, `profile_pic`, `status`) VALUES
(1, 'zaidan', 'khan', 'male', 'English', 'pata nahi', 'hai hi nahi', 'nahi dunga', 'its complicated', 'i am', '2004-07-22', 'home', '2004-07-22 11:45:56', 'jaipur', '', 'rajasthan', 'bhut bada hai', 'krdo', 'sexy af', 'hai hi nahi', 'bhut pada likha', 'krta hi nai', 'jb krta nahi to kyu bataun', 'nahi hun abhi tk to', 'job nahi hai', 'nahi bataunga', 'bhut hai ', '7976156986', '7976156986', '', '0'),
(2, 'Ayet', 'Noor', 'female', 'Bihari', 'pata nahi', 'hai hi nahi', 'nahi degi', 'Sagitarious', 'i have one', '2000-12-13', 'fauziya hospital', '2000-12-13 11:45:56', 'mumbai', '', 'Maharashtra', 'choti si', 'nahi bata rahi', 'not sexy but cute enought', 'hai hi nahi', 'mt pucho', 'krta hi nai', 'jb krta nahi to kyu bataun', 'nahi hun abhi tk to', 'job nahi hai', 'nahi bataunga', 'bhut hai ', '8890705905', '8890705905', '', '0'),
(3, 'rohan', 'khan', 'male', 'English', 'pata nahi', 'hai hi nahi', 'nahi dunga', 'its complicated', 'i am', '2000-08-28', 'home', '2004-07-22 11:45:56', 'jaipur', '', 'rajasthan', 'bhut bada hai', 'krdo', 'sexy af', 'hai hi nahi', 'bhut pada likha', 'krta hi nai', 'jb krta nahi to kyu bataun', 'nahi hun abhi tk to', 'job nahi hai', 'nahi bataunga', 'bhut hai ', '7976156986', '7976156986', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
