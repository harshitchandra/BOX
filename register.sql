-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 11:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `academicyear` varchar(4) NOT NULL,
  `course` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bio` varchar(5000) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `rollno`, `academicyear`, `course`, `gender`, `password`, `email`, `bio`, `trn_date`) VALUES
(1, 'Jyoti', '191500372', '2019', 'Bachelor of Technology', 'Female', 'df94a43b8b71fc3f95395863add77e8d', 'js06786@gmail.com', 'I like oreo.', '2021-11-29 05:04:29'),
(2, 'Harshit', '191500323', '2019', 'Bachelor of Technology', 'Male', 'f91f6d7aa0cd39dd0d5a38983a48d6a8', 'harshitchndr@gmail.com', '...', '2021-11-29 05:29:47'),
(3, 'nayan', '123', '2019', 'Bachelor of Technology', 'Male', '34446d84c36419a19ff2a09e5579e028', 'nayandeep@gla.ac.in', '123', '2021-11-29 05:49:14'),
(8, 'Abc', '191500372', '2019', 'Bachelor of Technology', 'Female', '30301643694da3ed025624aa913b57a7', 'abc@gla.ac', 'abc', '2021-11-29 07:07:14'),
(9, 'Jyotisingh', '191500372', '2019', 'Bachelor of Technology', 'Female', '4f53eeab135c3479ffefbbf33a21229c', 'jyotisingh@gla.ac.in', '1343ewsdfg', '2021-11-29 07:09:46'),
(10, 'Jyoti', '-191500372', '-201', '-Bachelor of Technology', '-Female', '908337a45aac348d482b029cf4b6d48e', 'abc@gla.ac.in', 'abc', '2021-11-29 07:20:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
