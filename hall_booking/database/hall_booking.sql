-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 03:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hall_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_service_details`
--

CREATE TABLE `event_service_details` (
  `services_id` int(20) NOT NULL,
  `services_name` varchar(200) NOT NULL,
  `services_discription` varchar(500) NOT NULL,
  `service_price` varchar(200) NOT NULL,
  `services_photo` varchar(300) NOT NULL,
  `service_catagory_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_service_details`
--

INSERT INTO `event_service_details` (`services_id`, `services_name`, `services_discription`, `service_price`, `services_photo`, `service_catagory_id`) VALUES
(1, 'Building Lilting ', 'Building Lilting  Decoration', '12000', 'hall-light.jpg', '2'),
(2, 'Building Lilting  With Led Line', 'Building Lilting  With Led Line', '8000', 'lights.jpg', '2'),
(3, 'Music Band', 'Music Band with sound system', '6000', 'band.jpg', '3'),
(4, 'Hall', 'Marriage Hall for 200 members', '25000', 'hall.jpg', '4');

-- --------------------------------------------------------

--
-- Table structure for table `hall_details`
--

CREATE TABLE `hall_details` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(50) NOT NULL,
  `hall_address` varchar(300) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `hall_photos` varchar(100) NOT NULL,
  `hall_discription` varchar(300) NOT NULL,
  `perday_cost` int(200) NOT NULL,
  `types_of_hall` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_in_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `security_questions` varchar(200) NOT NULL,
  `security_answer` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_in_id`, `user_name`, `password`, `type`, `security_questions`, `security_answer`, `status`) VALUES
(1, 'admin@gmail.com', '123123', 'admin', 'who r u?', 'admin', 'active'),
(3, 'rakesh@gmail.com', '123123', 'user', ' Your Email ID', 'rakesh@gmail.com', 'Active'),
(4, 'neela@gmail.com', '123123', 'user', ' Your Email ID', 'neela@gmail.com', 'Active'),
(5, 'hegdepriyanka391@gmail.com', '121212', 'user', ' Your Email ID', 'san@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `purchase_id` int(20) NOT NULL,
  `vendor_id` int(20) NOT NULL,
  `service_item_id` int(20) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `purchase_rate` varchar(200) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`purchase_id`, `vendor_id`, `service_item_id`, `quantity`, `purchase_rate`, `purchase_date`) VALUES
(1, 1, 1, '6', '120', '2022-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `service_booking_details`
--

CREATE TABLE `service_booking_details` (
  `service_booking_id` int(30) NOT NULL,
  `service_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `book_date` date NOT NULL,
  `booking_price` int(200) NOT NULL,
  `booking_discription` varchar(300) NOT NULL,
  `booking_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_booking_details`
--

INSERT INTO `service_booking_details` (`service_booking_id`, `service_id`, `user_id`, `book_date`, `booking_price`, `booking_discription`, `booking_status`) VALUES
(1, 1, 1, '2022-07-28', 12000, 'i want this service', 'PAID'),
(2, 3, 1, '2022-07-28', 6000, 'yes', 'Cancled'),
(3, 1, 2, '2022-08-01', 12000, 'acacas', 'Cancled'),
(4, 3, 2, '2022-08-01', 6000, 'abcd', 'Cancled'),
(5, 4, 1, '2022-08-02', 25000, 'abcd', 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `service_catagory_details`
--

CREATE TABLE `service_catagory_details` (
  `service_catagory_id` int(30) NOT NULL,
  `service_catagory_name` varchar(100) NOT NULL,
  `service_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_catagory_details`
--

INSERT INTO `service_catagory_details` (`service_catagory_id`, `service_catagory_name`, `service_photo`) VALUES
(2, 'Lights', 'wedding-lights-170622088.jpg'),
(3, 'Music', 'MUSICjpg.jpg'),
(4, 'Marriage Hall', 'hall.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transportation_bill`
--

CREATE TABLE `transportation_bill` (
  `bill_id` int(10) NOT NULL,
  `tp_id` int(10) NOT NULL,
  `pay_amt` int(10) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation_bill`
--

INSERT INTO `transportation_bill` (`bill_id`, `tp_id`, `pay_amt`, `pay_date`) VALUES
(2, 2, 2000, '2022-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `transportation_provider`
--

CREATE TABLE `transportation_provider` (
  `tp_id` int(10) NOT NULL,
  `tp_name` varchar(100) NOT NULL,
  `tp_address` varchar(200) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation_provider`
--

INSERT INTO `transportation_provider` (`tp_id`, `tp_name`, `tp_address`, `email_id`, `contact_no`) VALUES
(2, 'Toyota CAR', 'Dharwad', 'dwd@gmail.com', '9886631818');

-- --------------------------------------------------------

--
-- Table structure for table `user_bill_details`
--

CREATE TABLE `user_bill_details` (
  `user_bill_id` int(20) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `bill_amount` int(200) NOT NULL,
  `bill_date` date NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bill_details`
--

INSERT INTO `user_bill_details` (`user_bill_id`, `service_type`, `bill_amount`, `bill_date`, `user_id`) VALUES
(16, 'Booking Hall & Services', 37000, '2022-08-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_address` varchar(300) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_address`, `email_id`, `contact_no`, `user_city`, `location`) VALUES
(1, 'Rakesh', 'Dharwad', 'rakesh@gmail.com', '2147483647', 'Dharwad', 'Dharwad'),
(2, 'Neelambika', 'Dharwad', 'neela@gmail.com', '8976545678', 'Dharwad', 'Dharwad'),
(3, 'santosh', 'Vijaynagar-College-583201', 'hegdepriyanka391@gmail.com', '8975432456', 'Dharwad', 'Near Bus Stand');

-- --------------------------------------------------------

--
-- Table structure for table `worker_detail`
--

CREATE TABLE `worker_detail` (
  `w_id` int(10) NOT NULL,
  `w_name` varchar(50) NOT NULL,
  `w_address` varchar(100) NOT NULL,
  `w_contno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_detail`
--

INSERT INTO `worker_detail` (`w_id`, `w_name`, `w_address`, `w_contno`) VALUES
(1, 'Ganesh', 'Dharwad', '9886631817');

-- --------------------------------------------------------

--
-- Table structure for table `worker_salary`
--

CREATE TABLE `worker_salary` (
  `ws_id` int(10) NOT NULL,
  `w_id` int(10) NOT NULL,
  `work_days` int(10) NOT NULL,
  `sal_amt` int(10) NOT NULL,
  `sal_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_salary`
--

INSERT INTO `worker_salary` (`ws_id`, `w_id`, `work_days`, `sal_amt`, `sal_date`) VALUES
(2, 1, 20, 2000, '2022-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_service_details`
--
ALTER TABLE `event_service_details`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `hall_details`
--
ALTER TABLE `hall_details`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_in_id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `service_booking_details`
--
ALTER TABLE `service_booking_details`
  ADD PRIMARY KEY (`service_booking_id`);

--
-- Indexes for table `service_catagory_details`
--
ALTER TABLE `service_catagory_details`
  ADD PRIMARY KEY (`service_catagory_id`);

--
-- Indexes for table `transportation_bill`
--
ALTER TABLE `transportation_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `transportation_provider`
--
ALTER TABLE `transportation_provider`
  ADD PRIMARY KEY (`tp_id`);

--
-- Indexes for table `user_bill_details`
--
ALTER TABLE `user_bill_details`
  ADD PRIMARY KEY (`user_bill_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `worker_detail`
--
ALTER TABLE `worker_detail`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `worker_salary`
--
ALTER TABLE `worker_salary`
  ADD PRIMARY KEY (`ws_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_service_details`
--
ALTER TABLE `event_service_details`
  MODIFY `services_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hall_details`
--
ALTER TABLE `hall_details`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_in_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `purchase_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_booking_details`
--
ALTER TABLE `service_booking_details`
  MODIFY `service_booking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_catagory_details`
--
ALTER TABLE `service_catagory_details`
  MODIFY `service_catagory_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transportation_bill`
--
ALTER TABLE `transportation_bill`
  MODIFY `bill_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transportation_provider`
--
ALTER TABLE `transportation_provider`
  MODIFY `tp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_bill_details`
--
ALTER TABLE `user_bill_details`
  MODIFY `user_bill_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `worker_detail`
--
ALTER TABLE `worker_detail`
  MODIFY `w_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worker_salary`
--
ALTER TABLE `worker_salary`
  MODIFY `ws_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
