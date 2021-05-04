-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 10:37 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cafe_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'deep', 'deep', 'deepramani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `orders` (
`Order id` int(20) NOT NULL,
  `Customer Name` varchar(20) NOT NULL,
  `Product Id` int(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Phone No` int(10) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(10) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` float(20,2) NOT NULL,
  `image` varchar(64) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `price`, `image`) VALUES
(101, 'Blue', 'cake', 260.00, 'blue.jpg'),
(100, 'Black', 'cake', 240.00, 'black.jpg'),
(99, 'Oolong', 'tea', 80.00, 'OOLONG.jpg'),
(98, 'Mate Tea', 'tea', 40.00, 'MATE TEA.jpg'),
(97, 'Long Black', 'tea', 50.00, 'Long Black.jpg'),
(96, 'Herbal Tea', 'tea', 40.00, 'HERBAL TEA.jpg'),
(95, 'Green Tea', 'tea', 40.00, 'GREEN tea.jpg'),
(93, 'Black Tea', 'tea', 80.00, 'black tea.jpg'),
(94, 'BLOOMING TEAS', 'tea', 80.00, 'BLOOMING TEAS.jpg'),
(92, 'Affogato', 'tea', 40.00, 'Affogato.jpg'),
(89, 'Mocha', 'coffee', 80.00, 'Mocha.jpg'),
(88, 'Long Macchiato', 'coffee', 80.00, 'long macchiato.jpg'),
(87, 'Flat White', 'coffee', 100.00, 'Flat White.jpg'),
(86, 'Espresso', 'coffee', 80.00, 'espresso.jpeg'),
(85, 'Double Espresso', 'coffee', 120.00, 'double espresso.jpg'),
(84, 'Cafe Latte', 'coffee', 100.00, 'Cafe Latte.jpg'),
(83, 'Cappuccino', 'coffee', 80.00, 'Cappuccino.jpg'),
(82, 'Cold Coffee', 'coffee', 60.00, 'cold coffee.jpg'),
(81, 'Strawberry', 'milkshake', 150.00, 'strawberry.jpeg'),
(79, 'Harvey', 'milkshake', 250.00, 'harvey.jpg'),
(78, 'Chocolate', 'milkshake', 260.00, 'chocolate.jpeg'),
(77, 'Galaxy', 'milkshake', 250.00, 'galaxy.png'),
(76, 'Drumstick', 'milkshake', 180.00, 'Drumstick.jpg'),
(75, 'Birthday Cake', 'milkshake', 250.00, 'birthday cake.jpeg'),
(74, 'BlueBerry', 'milkshake', 210.00, 'blueberry.jpeg'),
(102, 'Cchoco', 'cake', 320.00, 'cchoco.jpg'),
(103, 'Cherry', 'cake', 400.00, 'cherry.jpg'),
(104, 'Choco', 'cake', 280.00, 'choco.jpg'),
(105, 'Freez', 'cake', 350.00, 'freez.jpg'),
(106, 'Fruit', 'cake', 350.00, 'fruit.jpg'),
(107, 'Mousse', 'cake', 280.00, 'mousse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `r_id` int(20) NOT NULL,
  `customer name` varchar(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `ratings` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table booking`
--

CREATE TABLE IF NOT EXISTS `table booking` (
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

CREATE TABLE IF NOT EXISTS `users` (
`u_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `c_password` varchar(10) NOT NULL,
  `phone_no` bigint(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `first_name`, `last_name`, `email`, `password`, `c_password`, `phone_no`) VALUES
(20, 'deep', 'ramani', 'deepramani@gmail.com', 'deep', 'deep', 9099404287),
(27, 'Ajay', 'Markana', 'ajaymarkana@gmail.com', 'ajay', 'ajay', 9586411019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

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
 ADD PRIMARY KEY (`product_id`), ADD UNIQUE KEY `product_name` (`product_name`);

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
 ADD PRIMARY KEY (`u_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `Order id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
