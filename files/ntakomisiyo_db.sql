-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 09:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntakomisiyo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ntakomisiyo_items`
--

CREATE TABLE `ntakomisiyo_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(128) NOT NULL,
  `item_image` varchar(128) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_specification` text NOT NULL,
  `item_owner_email` varchar(128) NOT NULL,
  `item_owner_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ntakomisiyo_items`
--

INSERT INTO `ntakomisiyo_items` (`item_id`, `item_name`, `item_image`, `item_price`, `item_specification`, `item_owner_email`, `item_owner_address`) VALUES
(1, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(2, 'Computer HP', 'pc1.jpg', 97000, '<br><br>Battery: 7800mAh<br><br>\r\n\r\nHDD: 500GB<br><br>\r\n\r\nRAM: 8GB<br><br>', 'admin@gmail.com', '<br><br>Phone: 0736754238<br><br>\r\n\r\nWhatsApp: 07891191764<br><br>\r\n\r\nLocation: Huye<br><br>'),
(3, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(4, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(5, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(6, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(7, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(8, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(9, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(10, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(11, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(12, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(13, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>'),
(14, 'iPhone S8', 'phone1.jpg', 25000, '<br><br>Battery: 4000mAh<br><br>\r\n\r\nROM: 32GB<br><br>\r\n\r\nRAM: 2GB<br><br>', '1', '<br><br>\r\nPhone: 0735177666<br><br>\r\nWhatsApp: 0735177666<br><br>\r\nLocation: Kigali<br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `ntakomisiyo_users`
--

CREATE TABLE `ntakomisiyo_users` (
  `user_id` int(11) NOT NULL,
  `user_names` varchar(128) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ntakomisiyo_users`
--

INSERT INTO `ntakomisiyo_users` (`user_id`, `user_names`, `user_email`, `user_password`) VALUES
(1, 'Datch', '1', '1'),
(2, 'David', '2', '2'),
(3, 'Emmy', '3', '3'),
(4, 'Deny', '4@', '4@'),
(5, 'Admin David', 'admin@gmail.com', 'admin'),
(6, '', '', ''),
(7, 'Monchel Emmy', 'emmy@gmail.com', 'emmy'),
(8, 'Ockello', 'ockello@gmail.com', 'ockello'),
(9, 'rutembeza', 'yvesrutembeza@gmail.com', 'bobo'),
(10, '', '', ''),
(11, 'man', 'man', 'man'),
(12, 'Sibomana', 'sibomana@gmail.com', 'sibo'),
(13, 'rra', 'yvesrutembeza@gmail.com', '123'),
(14, '', '', ''),
(15, 'Good', 'good@gmail.com', 'good'),
(16, 'Deny', 'admin@gmail.com', '123'),
(17, 'Developer', 'dev@gmail.com', 'dev');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ntakomisiyo_items`
--
ALTER TABLE `ntakomisiyo_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `ntakomisiyo_users`
--
ALTER TABLE `ntakomisiyo_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ntakomisiyo_items`
--
ALTER TABLE `ntakomisiyo_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ntakomisiyo_users`
--
ALTER TABLE `ntakomisiyo_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
