-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 04:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dawnn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `user_id`, `password`) VALUES
(1, 'Amlan', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(8) NOT NULL,
  `car_id` int(8) NOT NULL,
  `customer_id` int(6) UNSIGNED NOT NULL,
  `starts_from` varchar(80) NOT NULL,
  `ends_to` varchar(80) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `total_days` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `car_id`, `customer_id`, `starts_from`, `ends_to`, `start_date`, `start_time`, `total_days`) VALUES
(1, 9, 0, 'Dhaka', 'Rajshahsi', '2022-08-10', '00:00:00', 6),
(2, 9, 0, '', '', '0000-00-00', '00:00:00', 0),
(9, 14, 26, 'dhaka', 'rajshahi', '2020-09-10', '22:23:00', 2),
(11, 14, 26, 'dhaka', 'Jessore', '2020-09-23', '00:00:00', 3),
(12, 14, 26, 'khulna', 'noakhali', '2020-09-10', '00:00:00', 3),
(13, 14, 29, 'mumbai', 'delhi', '2020-09-16', '14:30:00', 10),
(14, 14, 26, 'dhaka', 'delhi', '2020-09-10', '00:00:00', 3),
(15, 14, 30, 'delhi', 'jaipur', '2020-09-28', '12:45:00', 8),
(16, 14, 26, 'dhaka', 'mumbai', '2012-05-09', '09:00:00', 5),
(17, 14, 35, 'dhanmondi', 'uttara', '2020-11-06', '02:04:00', 15),
(32, 9, 33, 'dhanmondi', 'uttara', '2020-12-04', '18:30:00', 3),
(35, 9, 33, 'dhanmondi', 'uttara', '2020-12-09', '19:42:00', 2),
(36, 9, 33, 'dhanmondi', 'uttara', '2020-12-09', '19:42:00', 2),
(37, 9, 33, 'dhanmondi', 'uttara', '2020-12-09', '19:42:00', 2),
(38, 9, 33, 'dhanmondi', 'uttara', '2020-12-09', '19:42:00', 2),
(39, 9, 1, 'Dhaka', 'Dhaka', '2022-08-11', '00:00:00', 8),
(40, 9, 1, '', 'Dhaka', '2022-08-11', '00:00:00', 0),
(41, 9, 1, '', 'Dhaka', '2022-08-05', '00:00:00', 0),
(42, 9, 2, '', 'Gulshan', '2022-08-11', '00:00:00', 0),
(43, 9, 1, '', 'Gulshan', '2022-08-12', '00:00:00', 0),
(44, 9, 1, '', 'Gulshan', '2022-08-04', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nid_no` varchar(15) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `address` varchar(80) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `name`, `email`, `nid_no`, `phone_number`, `address`, `reg_date`) VALUES
(1, 'Abir', '12345', 'Abir Hasan', 'abir@gmail.com', '', '01716313188', NULL, '2022-08-21 08:14:51'),
(2, 'Munni', '1234', 'Munni Redwan', 'munni@gmail.com', '', '12334556', NULL, '2022-08-21 11:18:39'),
(3, 'test', '123', 'test', 'test@gmail.com', '', '12312312312', NULL, '2022-08-21 14:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `GameID` int(11) NOT NULL,
  `Game_name` varchar(150) NOT NULL,
  `image` varchar(200) NOT NULL,
  `reg_no` varchar(40) NOT NULL,
  `year` float NOT NULL,
  `price` int(11) NOT NULL,
  `pre-order` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`GameID`, `Game_name`, `image`, `reg_no`, `year`, `price`, `pre-order`) VALUES
(1, 'Assassins Creed Valhalla', 'game1.jpg', '00-00001', 2021, 600, 0),
(2, 'Assassins Creed Unity', 'game2.jpg', '11-2233', 2015, 500, 0),
(3, 'Crysis 3', 'game3.jpg', '11-2244', 2011, 500, 0),
(4, 'Doom 2016', 'game4.jpg', '666', 2016, 600, 0),
(5, 'Doom Eternal', 'game5.jpg', '666', 2020, 1000, 0),
(6, 'Elden Ring', 'game6.jpg', '56788', 2022, 500, 0),
(7, 'Forza Horizon 4', 'game7.png', '12366', 2018, 450, 0),
(8, 'God of War 2014', 'game8.jpg', '111555', 2018, 500, 0),
(9, 'The Elder Scrolls : V Skyrim', 'game9.jpg', '661166', 2011, 600, 0),
(10, 'GTA V', 'game10.jpg', '5555', 2011, 600, 0),
(11, 'Mortal Kombat 11', 'game11.jpg', '111111', 2016, 600, 0),
(12, 'Doom Eternal Deluxe Edition', 'game12.jpg', '666', 2021, 800, 0),
(13, 'NFS Heat', 'game13.jpg', '679676', 2021, 600, 0),
(14, 'Sekiro Shadows Die Twice', 'game15.jpg', '222222', 2019, 600, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`GameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `GameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
