-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 08:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rushi`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mob` int(10) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `medicine` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `email`, `mob`, `city`, `address`, `state`, `medicine`, `category`, `expiry_date`) VALUES
(7, 'Rushikesh  Wagh', 'rushi@demo', 2147483647, 'Maharashtra', 'Government college hostel ', ' Akola ', 'Penicillins', 'antibiotic', '0000-00-00'),
(8, 'Ravi  Lokhande', 'Ravi@demo', 378278279, 'Goa', 'Shivajinagr, Mahem', ' Mahem ', 'dettol', 'antiseptic', '0000-00-00'),
(9, 'Sanket Sakharkar', 'Sanket@demo', 2147483647, 'Karnataka', 'Kattpa Nagar', ' Bangalore ', 'Paracetamol', 'antibiotic', '0000-00-00'),
(10, 'Shri  Patil', 'Shri@demo', 2147483647, 'Gujarat', 'Gandhi Nagar', ' Ahmedabad ', 'doxycycline', 'antibiotic', '0000-00-00'),
(11, 'Abhishek Waghmare', 'Abhishek@demo', 2147483647, 'Delhi', 'Lajpat Nagar', ' Central Delhi ', 'cephalexin', 'antibiotic', '0000-00-00'),
(14, 'Omkar  Patil', 'Omkar@demo', 2147483647, 'Haryana', 'sector 9, krishna Nagar', ' Faridabad ', 'povidone iodine', 'antiseptic', '0000-00-00'),
(15, 'Ajay  Chavan', 'Ajay@123', 2147483647, 'Orissa', 'Ram Nagar', ' Bhubaneswar ', 'Betadine', 'antiseptic', '0000-00-00'),
(16, 'Akshay Darade', 'Akshay@123', 2147483647, 'Jammu & Kashmir', 'Ilafat Nagar', ' Jammu ', 'Betadine Douche', 'antiseptic', '0000-00-00'),
(18, 'Rahul shinde', 'Rahul@123', 2147483647, 'Andhra Pradesh', 'Narang chowk', ' Visakhapatnam ', 'Motrin', 'antipyretics', '0000-00-00'),
(19, 'Dipak  Sonawane', 'Dipak@313', 2147483647, 'Madhya Pradesh', 'Tilak Nagar', ' Jabalpur ', 'acetaminophen', 'antipyretics', '0000-00-00'),
(20, 'VIshal Sonawane', 'Vishal@demo', 324903493, 'Maharashtra', 'Shivajinagar', ' Pune ', 'aspirin', 'antipyretics', '0000-00-00'),
(21, 'Rushi  lalge', 'Rushi@123', 2147483647, 'Assam', 'Bhagat Singh Nagar', ' Guwahati ', 'naproxen', 'antipyretics', '0000-00-00'),
(22, 'Raviraj  Kukde', 'Ravi@4656', 2147483647, 'Himachal Pradesh', 'kulllu Chowk ', ' Kullu ', 'lamotrigine', 'moodstabilizer', '0000-00-00'),
(23, 'Pritesh  Yeul', 'Pritesh@demo', 2147483647, 'Chhattisgarh', 'Rakesh Nagar', ' Raipur ', 'Seroquel', 'moodstabilizer', '0000-00-00'),
(24, 'Aman  Chopde', 'Aman@123', 2147483647, 'West Bengal', 'kalmarg ', ' Kharagpur ', 'Codeine', 'analgesic', '0000-00-00'),
(25, 'Niraj Date', 'Niraj@123', 2147483647, 'Tamil Nadu', 'Mayappa Nagar', ' Chennai ', 'Hydrocodone.', 'analgesic', '0000-00-00'),
(26, 'Rajesh Singh', 'Rajesh@123', 2147483647, 'Andhra Pradesh', 'Himmat Nagar', ' Hyderabad ', 'Methadone', 'analgesic', '0000-00-00'),
(27, 'Rina  Patil', 'Rina@123', 2147483647, 'Rajasthan', 'Maharan Pratap nagar', ' Jaipur ', 'Oxycodone', 'analgesic', '0000-00-00'),
(28, 'Rina  Patil', 'Rina@123', 2147483647, 'Rajasthan', 'Maharan Pratap nagar', ' Jaipur ', 'Oxycodone', 'analgesic', '0000-00-00'),
(29, 'Priti Gayal', 'Priti@123', 2147483647, 'Uttar Pradesh', 'Yogi Nagar', ' Lucknow ', 'Mydayis ', 'stimulant', '0000-00-00'),
(30, 'Riya Kumar', 'Riya@123', 2147483647, 'Bihar', 'Sankalp Nagar', ' Aurangabad ', 'Dexedrine ', 'stimulant', '0000-00-00'),
(31, 'Harsh  Lokhande', 'Harsh@123', 2147483647, 'Maharashtra', 'Pipeline Road', ' Ahmednagar ', 'Tenuate Dospan', 'stimulant', '0000-00-00'),
(32, 'Shashi Kurange', 'Shashi@123', 2147483647, 'Jharkhand', 'Rani Laxmibai Nagar', ' Ranchi ', 'Azstarys ', 'stimulant', '0000-00-00'),
(33, 'Harshal Valvi', 'Harshal@123', 2147483647, 'Maharashtra', 'Gadge Baba Nagar', ' Amravati ', 'Seroquel', 'moodstabilizer', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mob` int(10) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mob`, `state`, `city`) VALUES
(18, 'Bhagini Nivedita Pratishthan', 'Bhagini@123', '1234', 2147483647, 'Maharashtra', ' Pune '),
(19, 'new user', 'snehalkalyani728@gmail.com', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
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
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
