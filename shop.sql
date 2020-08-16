-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 17, 2019 at 02:00 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `anvanum` text NOT NULL,
  `gin` int(11) NOT NULL,
  `nkar` text NOT NULL,
  `detal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `anvanum`, `gin`, `nkar`, `detal`) VALUES
(1, 'Christmas Tree', 80, 'tree.jpg', 'Beautiful tree for Christmas. Decorate your house, decorate your soul! '),
(2, 'Santa Claus', 500, 'santa.jpg', 'Buy Santa Claus service for an hour, make your children happy.'),
(3, 'Candle', 20, 'candle.jpg', 'Colorful and aromatic (lavanda) for decorating your house and Christmas tree.'),
(4, 'Socks', 10, 'socks.jpg', '100 % cotton, beautiful socks. Make your own Christmas on your legs.'),
(5, 'Lights', 35, 'lights.jpg', 'Colorful lights for tree and room.'),
(6, 'Mandarin', 5, 'mandarin.jpg', 'Mandarin orange. Make your Christmas mood with this tasty fruit.'),
(7, 'Toy', 3, 'toy.jpg', 'Different, beautiful, colorful. Decorate your tree with toys like decorating your life with friends.'),
(8, 'Candy', 3, 'candy.jpg', 'Sweet, tasty, colorful, candies. Make your table happy.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
