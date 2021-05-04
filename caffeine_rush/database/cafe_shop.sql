-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 03:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
use cafe_shop;
CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Coffee'),
(2, 'Tea'),
(3, 'Milk Shakes'),
(4, 'Cakes');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order id` int(20) NOT NULL,
  `Customer Name` varchar(20) NOT NULL,
  `Product Id` int(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Phone No` int(10) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` float(20,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `price`) VALUES
(1, 'Affogato', 'coffee', 165.00),
(2, 'Cold Coffee', 'coffee', 140.00),
(3, 'Cafe Latte', 'coffee', 90.00),
(4, 'Cappuccino', 'coffee', 110.00),
(5, 'Double Espresso', 'coffee', 80.00),
(6, 'Espresso', 'coffee', 65.00),
(7, 'Flat White', 'coffee', 120.00),
(8, 'long Macchiato', 'coffee', 110.00),
(9, 'Long Black', 'coffee', 70.00),
(10, 'Mocha', 'coffee', 120.00),
(11, 'Piccolo Latte', 'coffee', 170.00),
(12, 'Ristretto', 'coffee', 105.00),
(13, 'Short Macchiato', 'coffee', 80.00),
(14, 'Black Tea', 'tea', 50.00),
(15, 'Blooming Tea', 'tea', 45.00),
(16, 'Green Tea', 'tea', 60.00),
(17, 'Herbal Tea', 'tea', 35.00),
(18, 'Mate Tea', 'tea', 65.00),
(19, 'Olong Tea', 'tea', 50.00),
(20, 'Rooibos Tea', 'tea', 40.00),
(21, 'White Tea', 'tea', 30.00),
(22, 'Yellow Tea', 'tea', 55.00),
(23, 'Blueberry', 'milkshake', 210.00),
(24, 'Birthday Cake ', 'milkshake', 250.00),
(25, 'Drumstick', 'milkshake', 180.00),
(26, 'Galaxy', 'milkshake', 280.00),
(27, 'Chocolate', 'milkshake', 260.00),
(28, 'Harvey', 'milkshake', 250.00),
(29, 'Oreo', 'milkshake', 250.00),
(30, 'Monster Candy', 'milkshake', 310.00),
(31, 'Sp. Caffeine Rush', 'milkshake', 340.00),
(32, 'Ultimate Strawberry', 'milkshake', 260.00),
(33, 'Strawberry', 'milkshake', 180.00),
(34, 'Choco Caramel', 'milkshake', 230.00),
(35, 'Choco Fantasy', 'cake', 300.00),
(36, 'Blue Bucks', 'cake', 340.00),
(37, 'Butterscotch', 'cake', 480.00),
(38, 'Strawberry Cake', 'cake', 250.00),
(39, 'Blue Mermaid', 'cake', 675.00),
(40, 'Stovetop  Raspberry', 'cake', 275.00),
(41, 'Fruit Almond', 'cake', 325.00),
(42, 'Rainbow Vanilla', 'cake', 575.00),
(43, 'Purple Marble', 'cake', 750.00),
(44, 'Black Cherry', 'cake', 600.00),
(45, 'Straw Mousse', 'cake', 675.00),
(46, 'Irish Coffee', 'cake', 425.00),
(47, 'Rose Vanilla', 'cake', 350.00),
(48, 'Gummy Bear', 'cake', 425.00),
(49, 'Snicker Chocolate', 'cake', 550.00),
(50, 'Orange Fireball', 'cake', 450.00),
(51, 'Vegan Chocolate', 'cake', 550.00);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `r_id` int(20) NOT NULL,
  `customer name` varchar(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `ratings` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table booking`
--

CREATE TABLE `table booking` (
  `booking_id` int(20) NOT NULL,
  `customer name` varchar(20) NOT NULL,
  `phone no` int(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time from` time(6) NOT NULL,
  `time to` time(6) NOT NULL,
  `persons` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `c_password` varchar(10) NOT NULL,
  `phone_no` bigint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `first_name`, `last_name`, `email`, `password`, `c_password`, `phone_no`) VALUES
(12, 'Cafe', 'Admin', 'admin@gmail.com', 'admin', 'admin', 9624209757),
(13, 'parth', 'pokar', 'parthpokar@gmail.com', 'parth', 'parth', 9624209757),
(14, 'hiren', 'raithatha', 'user@gmail.com', 'user', 'user', 1234567890),
(16, 'prince', 'bhut', 'bhutprince@gmail.com', 'bhut', 'bhut', 134567890),
(17, 'biren', 'chauhan', 'birenchauhan@gmail.com', 'biren', 'biren', 9567865566),
(18, 'raj', 'nakum', 'raj@gmail.com', 'raj', 'raj', 1245789865),
(19, 'kishan', 'patel', 'kishanpatel@gmail.com', 'kishan', 'kishan', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `table booking`
--
ALTER TABLE `table booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
