-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2021 at 07:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

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
(1, 'admin', 'admin@admin.com', 'admin', 'Administrator', 'Active'),
(2, 'zaidan', 'khanzaidan786@gmail.com', 'zaidan', 'Administrator', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `certificate_url` text NOT NULL,
  `date` text NOT NULL,
  `user_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `certificate_url`, `date`, `user_id`) VALUES
(53, 'profiles/2021-08-12/tzqxwa1g.jpg', '2021-08-12', '28');

-- --------------------------------------------------------

--
-- Table structure for table `search_name`
--

CREATE TABLE `search_name` (
  `id` int(11) NOT NULL,
  `search_name_first` text NOT NULL,
  `search_name_last` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_name`
--

INSERT INTO `search_name` (`id`, `search_name_first`, `search_name_last`) VALUES
(1, 'wkc6r18d.php', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `sex` text NOT NULL,
  `language` text NOT NULL,
  `caste` text NOT NULL,
  `sub_caste` text NOT NULL,
  `gothram` text NOT NULL,
  `zodiac_sign` text NOT NULL,
  `star` text NOT NULL,
  `dob` text NOT NULL,
  `pob` text NOT NULL,
  `tob` text NOT NULL,
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
  `status` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `sex`, `language`, `caste`, `sub_caste`, `gothram`, `zodiac_sign`, `star`, `dob`, `pob`, `tob`, `city`, `district`, `state`, `height`, `color`, `eating_habits`, `bad_habbits`, `education`, `job`, `job_location`, `nri`, `annual_income`, `parents_details`, `requirements`, `whatsapp_number`, `phone_number`, `profile_pic`, `status`, `date`) VALUES
(28, 'Rohan', 'Sidhu', 'j@gmail.com', 'Female', 'Marathi', '', '', 'Rohan', 'Gemini', 'Rohan', '', 'ss', '---', 'Rohan', 'rohan', 'Assam', '', 'Medium', 'Non Vegetarian', 'Non-Smoker', 'INTERMEDIATE', 'ss', 'ss', '', 'mnmn', 'jkhjklhjk', 'kjhjkhkjh', '8107296654', '8107296654', 'userdata/vr8xlZK7qwBiS2g/61155cf94da5b.jpg', 'Un-Married', '2021-08-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_name`
--
ALTER TABLE `search_name`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `search_name`
--
ALTER TABLE `search_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
