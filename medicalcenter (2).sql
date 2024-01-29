-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 02:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` text NOT NULL,
  `health` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `fname`, `lname`, `email`, `birth`, `gender`, `address`, `phone`, `health`, `date`, `time`, `doctor_name`, `specialization`) VALUES
(32, 'Sanaa', 'naji', 'sanaanaji@gmail.com', '1967-04-21', 'Female', 'Rashaya', '70084751', 'Cadiovascular Disease', '2024-01-22', '10:00:00', 'Dr. Joseph Milad', 'Ophthalmologist'),
(33, 'Kamal', 'naji', 'kamalnaji1@gmail.com', '1957-01-02', 'Male', 'Rashaya', '03837620', 'None', '2024-01-16', '09:30:00', 'Dr. Ali Muhammad', 'Public Health'),
(34, 'Yasmina', 'abu ibrahim', 'wael@gmail.com', '2023-10-09', 'Female', 'Rashaya', '78993030', 'None', '2024-01-18', '12:30:00', 'Dr. Perla Hamza', 'Pediatrician'),
(35, 'Vera', 'Kadamani', 'verakd2@gmail.com', '2003-12-27', 'Female', 'Rashaya', '76524901', 'None', '2024-01-23', '10:30:00', 'Dr. Kayan Khoury', 'Dentist'),
(36, 'Lina', 'Al Kadi', 'linakadi@gmail.com', '2000-12-25', 'Female', 'Ain Ata', '03568923', 'Obesity', '2024-01-19', '11:30:00', 'Dr. Katia Harb', 'Gynecology'),
(37, 'Ali', 'Kadamani', 'ali12kadamani@gmail.com', '1965-11-09', 'Male', 'Rashaya', '81639034', 'Cadiovascular Disease', '2024-01-20', '10:00:00', 'Dr. Karam Karam', 'Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_name`, `specialization`) VALUES
(1, 'Dr.Joseph Milad', 'Ophthalmologist'),
(2, 'Dr.Ali Muhammad', 'Public Health'),
(3, 'Dr.Perla Hamza', 'Pediatrician'),
(4, 'Dr.Kayan Khoury', 'Dentist'),
(5, 'Dr.Katia Harb', 'Gynecology'),
(6, 'Dr.Karam Karam', 'Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'joseph', 'jospeh123'),
(2, 'ali', 'ali123'),
(3, 'perla', 'perla123'),
(4, 'kayan', 'kayan123'),
(5, 'katia', 'katia123'),
(6, 'karam', 'karam123'),
(7, 'nurse', 'nurse123');

-- --------------------------------------------------------

--
-- Table structure for table `patientfile`
--

CREATE TABLE `patientfile` (
  `id` int(11) NOT NULL,
  `ap_id` int(11) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `birth` date DEFAULT NULL,
  `health` varchar(255) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `surgery` enum('Yes','No','','') NOT NULL,
  `type_surgery` varchar(255) NOT NULL,
  `allergies` enum('Yes','No') NOT NULL,
  `type_allergy` varchar(255) NOT NULL,
  `chronic` enum('Yes','No') NOT NULL,
  `type_chronic` varchar(255) NOT NULL,
  `vac` enum('Yes','No') NOT NULL,
  `type_vac` varchar(255) NOT NULL,
  `med` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'jana5naji', 'najijana1234@gmail.com', 'jana5'),
(2, 'jana1', 'jananaji@hotmail.com', 'jana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientfile`
--
ALTER TABLE `patientfile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appo_id` (`ap_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patientfile`
--
ALTER TABLE `patientfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patientfile`
--
ALTER TABLE `patientfile`
  ADD CONSTRAINT `patientfile_ibfk_1` FOREIGN KEY (`ap_id`) REFERENCES `appointment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
