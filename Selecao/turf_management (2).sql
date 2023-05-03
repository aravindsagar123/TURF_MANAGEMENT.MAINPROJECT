-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 05:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turf_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `from_date` date NOT NULL DEFAULT current_timestamp(),
  `to_date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `turf_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `from_date`, `to_date`, `customer_id`, `turf_id`, `payment_id`) VALUES
(1, '2023-04-01', '2023-04-02', 18, 13, 2),
(2, '2023-04-04', '2023-04-05', 19, 11, 2),
(3, '2023-04-08', '2023-04-09', 18, 15, 3),
(4, '2023-04-01', '2023-04-02', 18, 17, 4),
(5, '2023-09-01', '2023-09-02', 18, 11, 0),
(6, '2023-04-20', '2023-04-21', 18, 15, 0),
(7, '2023-04-10', '2023-04-11', 18, 15, 0),
(8, '2023-12-11', '2023-12-17', 18, 17, 0),
(9, '2023-05-22', '2023-05-23', 18, 14, 0),
(10, '2023-04-13', '2023-04-12', 18, 14, 0),
(11, '2023-05-29', '2023-05-30', 18, 11, 0),
(12, '2023-05-12', '2023-05-13', 18, 12, 0),
(13, '2023-04-01', '2023-04-02', 18, 14, 0),
(14, '2023-08-07', '2023-08-08', 18, 11, 0),
(15, '2023-07-17', '2023-07-18', 18, 11, 0),
(16, '2023-06-19', '2023-06-20', 18, 17, 4),
(17, '2023-04-01', '2023-04-02', 18, 19, 5),
(18, '2023-07-17', '2023-07-18', 7, 13, 0),
(19, '2023-04-06', '2023-04-07', 7, 13, 7),
(20, '2023-04-01', '2023-04-02', 7, 27, 8),
(21, '2023-04-07', '2023-04-08', 11, 27, 9),
(22, '2023-05-17', '2023-05-10', 7, 13, 11);

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `aproval_status` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`customer_id`, `customer_name`, `dob`, `email`, `contact`, `address`, `aproval_status`, `image`) VALUES
(1, 'arjun p', '2023-04-24', 'arjun@gmail.com', 6282552608, 'malikadavu , kozhikode , kerala', 1, '166944659.jpeg'),
(2, 'akash p ', '2023-04-02', 'akash@gmail.com', 6282556085, 'vengeri , kozhikode , kerala', 1, '289547854.jpeg'),
(3, 'akhilash', '2023-04-03', 'akhilash@gmail.com', 6282552607, 'rani , pattanamthitta , kerala', 1, '474892534.jpeg'),
(4, 'arun c ', '2023-04-05', 'arun@gmail.com', 9400586058, 'canarabank,nadakavu,kozhikode', 1, '1626818972.jpeg'),
(5, 'ashu t', '2023-04-06', 'ashu@gmail.com', 6282556085, 'nadakavu , kozhikode', 1, '1277769762.jpeg'),
(6, 'abi', '2023-04-22', 'abi@gmail.com', 6282556028, 'pavangad , kozhikode ', 1, '1348451778.jpeg'),
(7, 'arun', '2023-04-10', 'arun@gmail.com', 6282556085, 'nadakavu , kozhikode ', 1, '86562026.jpeg'),
(8, 'aravindsagarpt', '2023-04-04', 'aravindsagar201544@gmail.com', 6282552805, 'kumaraswamy , kozhikode ', 0, '590201865.jpeg'),
(9, 'aravindsagarpt', '2023-04-04', 'aravindsagar201544@gmail.com', 6282552805, 'kumaraswamy , kozhikode ', 0, '1322885098.jpeg'),
(10, 'aravindsagarpt', '2023-04-04', 'aravindsagar201544@gmail.com', 6282552805, 'kumaraswamy , kozhikode ', 0, '1315820040.jpeg'),
(11, 'ashley y', '2023-04-15', 'ashley@gmail.com', 6282556805, 'kakkodi , kozhikode ', 1, '536572398.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `message`, `customer_id`, `date`) VALUES
(3, 'really nice brooooo', 17, '2023-04-20'),
(4, ' its a very nice experience for me .', 18, '2023-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`) VALUES
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(1, 'arjun@123', '$2y$10$YANP7YF8fA1NfoUjaPl6VOdhpEwxepbBBb2hTvYgXDVQRmllDVo6G', 'customer'),
(100, 'admin@123', '$2y$10$Bj8d3StvqQRuAvO1YVebN.kmZAvXxE0XrY59aRfJ9Ji7v7/6gBrQG', 'admin'),
(9, 'abinav@123', '$2y$10$JgGM/Es2shDIKhOB55yDDO3j/wGDD1Ax0wUx//zDuiOpnwOsj5Tz.', 'owner'),
(7, 'arun@123', '$2y$10$C9xHfwcucqhCN5lh73sdWOGoNTXhOmApEenjbV5TeiCPSSze3rnlK', 'customer'),
(10, 'sreerag@123', '$2y$10$4otFJJHPMLVTpAO9HT3kL.bjraXOdDIOmM.pEiLZBUObzUqlOgnT6', 'owner'),
(11, 'sreerag@123', '$2y$10$M8rSPIYFWcNR8ZEzq30ug.z5YXROKvEx0Tm3zw8gbJ.c8/rMFMmye', 'owner'),
(12, 'sreerag@123', '$2y$10$V.KPJJax3bufrOlIkhzUxOkmSPDRMlR2EM/5M1n1rojZH/MYu3iy2', 'owner'),
(13, 'hari@123', '$2y$10$m6pGd6YxYDBgDNYpqJamGutewhmUbB6ZsU2Nwz31vjWFkafTJl1zi', 'owner'),
(8, 'aravind@123', '$2y$10$./xXRlx79P2q3WqGBfDeousCG6IOCchHUnSPdTJj4P87MLEpwj4Nu', 'customer'),
(9, 'aravind@123', '$2y$10$bBynDi2jzKsCQ4ut4IbzOOGfj.wPcvTQDWCuM2TZ1O2bTeKCE0m7i', 'customer'),
(10, 'aravind@123', '$2y$10$n1/mCUsOC9ZkLqSqnglICOXHZezuNREdTTxCVr.KPqHAe8gBEepWO', 'customer'),
(11, 'ashley@123', '$2y$10$Ck7BuOMSjWlNMq4dupZ8kuKVewlHC8KJ7tYHKFIQGUCd144Xeue4O', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `notification` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `customer_id`, `notification`) VALUES
(1, 17, 'hello'),
(3, 16, 'hii'),
(4, 18, 'hello world'),
(5, 1, 'hii'),
(6, 1, 'hii'),
(7, 1, ''),
(8, 1, ''),
(9, 1, ''),
(10, 7, 'hello nice to connect with you arun. ');

-- --------------------------------------------------------

--
-- Table structure for table `owner_registration`
--

CREATE TABLE `owner_registration` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `aproval_status` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_registration`
--

INSERT INTO `owner_registration` (`owner_id`, `owner_name`, `address`, `email`, `contact`, `dob`, `aproval_status`, `image`) VALUES
(1, 'abhin s', 'kondotti , malapuram , kerala', 'abhin@gmail.com', 628255905, '2023-04-30', 0, '42048053.jpeg'),
(2, 'vishak p', 'malapuram, kerala', 'vishak@gmail.com', 904456085, '2023-05-01', 0, '1218418098.jpeg'),
(3, 'bharath p', 'kollam , kerala', 'bharath@gmail.com', 6282556075, '2023-04-13', 0, '187864686.jpeg'),
(4, 'abhinav c ', 'meenchanda , kozhikode ', 'abhinav@gmail.com', 6282551205, '2023-04-18', 0, '1638003592.jpeg'),
(5, 'sreerag n', 'maathra , kozhikode ,kerala ', 'sreerag@gmail.com', 6282556075, '2023-04-29', 0, '910022533.jpeg'),
(9, 'abinav c', 'meenchandha,kozhikode,kerala', 'abinav@gmail.com', 6282552806, '2023-05-01', 1, '1808365155.jpeg'),
(10, 'sreerag n', 'maathra , kozhikode , kerala ', 'sreerag@gmail.com', 6282554086, '2023-04-15', 0, '413615177.jpeg'),
(12, 'sreerag n', 'maathra , kozhikode , kerala ', 'sreerag@gmail.com', 6282554086, '2023-04-15', 0, '618813485.jpeg'),
(13, 'hari  p', 'koyilandi ,kozhikode ', 'hariprasd@gmail.com', 6282556045, '2023-04-29', 1, '1910368500.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `booking_id` int(50) NOT NULL,
  `amount` int(110) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_id`, `booking_id`, `amount`, `status`) VALUES
(1, 18, 13, 155, 'paid '),
(2, 18, 15, 150, 'paid '),
(3, 18, 16, 180, 'paid '),
(5, 18, 17, 190, 'paid '),
(6, 7, 19, 160, 'paid '),
(8, 7, 20, 200, 'paid '),
(9, 11, 21, 200, 'paid '),
(10, 7, 22, 160, 'paid ');

-- --------------------------------------------------------

--
-- Table structure for table `turf`
--

CREATE TABLE `turf` (
  `turf_id` int(11) NOT NULL,
  `turf_name` varchar(50) NOT NULL,
  `turf_place` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turf`
--

INSERT INTO `turf` (`turf_id`, `turf_name`, `turf_place`, `image`, `amount`, `owner_id`) VALUES
(11, 'jango loss', 'kozhikode , kummarswamy, kerala ', '295331180.jpg', 150, 0),
(12, 'iris peak', 'olopara,kozhikode,sreenair road ,kerala', '299333532.jpg', 150, 0),
(13, 'mega touch', 'kakkodi,kozhikode,kerala', '2082861052.jpg', 160, 0),
(14, 'one touch football', 'erangikkal kozhikode kerala ', '1019970625.jpeg', 155, 0),
(15, 'hineken rosee', 'erangipalam kozhikode kerala ', '1864791966.jpeg', 165, 0),
(16, 'falcon', 'kollam kerala ', '2031423707.jpg', 180, 0),
(17, 'IMASS ', 'vengali , kozhikode', '355537977.jpeg', 180, 10),
(18, 'silica ', 'cochin , ekm', '1263312210.jpg', 195, 10),
(19, 'nikka', 'nilagiri , kozhikode ', '91617803.jpeg', 190, 14),
(24, 'calicut turf ', 'kumaraswamy , kozhikode ', '1171507114.jpeg', 220, 9),
(25, 'loco ', 'wayanad , kozhikode ', '1234209989.jpeg', 240, 9),
(26, 'barca', 'thamaraserry , kozhikode ', '1656648752.jpeg', 260, 13),
(27, 'camp new', 'erode , tamilnadu ', '2101677485.jpeg', 200, 13);

-- --------------------------------------------------------

--
-- Table structure for table `update_password`
--

CREATE TABLE `update_password` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `owner_registration`
--
ALTER TABLE `owner_registration`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `turf`
--
ALTER TABLE `turf`
  ADD PRIMARY KEY (`turf_id`);

--
-- Indexes for table `update_password`
--
ALTER TABLE `update_password`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `owner_registration`
--
ALTER TABLE `owner_registration`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `turf`
--
ALTER TABLE `turf`
  MODIFY `turf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `update_password`
--
ALTER TABLE `update_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
