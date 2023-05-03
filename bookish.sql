-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 03:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookish`
--

-- --------------------------------------------------------

--
-- Table structure for table `activedirectory`
--

CREATE TABLE `activedirectory` (
  `userName` varchar(11) NOT NULL,
  `password` varchar(6) NOT NULL,
  `role` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `activedirectory`
--

INSERT INTO `activedirectory` (`userName`, `password`, `role`) VALUES
('', '', 'admin'),
('', '', 'admin'),
('raaju', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `title` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `bookImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `author`, `price`, `bookImage`) VALUES
('Coco Goose', 'raaju', '200', 'asset/image/book_1.jpg'),
('Sub Letter', 'Bruce', '200', 'asset/image/book_2.jpg'),
('Westpart', 'Banner', '200', 'asset/image/book_3.jpg'),
('Beautifully', 'Stark', '200', 'asset/image/book_4.jpg'),
('Clever Lands', 'Rissie', '200', 'asset/image/book_5.jpg'),
('Francis S', 'Morty Smith', '200', 'asset/image/book_6.jpg'),
('The Art City', 'Rick', '200', 'asset/image/book_7.png'),
('Music', 'Gilmour', '200', 'asset/image/book_8.png'),
('Free Fall', 'Peter Parker', '200', 'asset/image/book_9.jpg'),
('Kichu Ekta', 'Keo Ekjon', '200', 'asset/image/book_10.png'),
('Boring Girls', 'Sara Taylor', '200', 'asset/image/book_11.jpg'),
('Give Thanks', 'Rick', '200', 'asset/image/book_12.png'),
('West', 'Bannery', '200', 'asset/image/book_13.png'),
('Veggie', 'Anna', '200', 'asset/image/book_14.png'),
('Black History', 'Someone', '200', 'asset/image/book_15.png');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `address`, `gender`, `age`) VALUES
('Stark', 'NYC', 'male', '45'),
('Robi Da', 'Calcutta', 'male', '70');

-- --------------------------------------------------------

--
-- Table structure for table `orderdata`
--

CREATE TABLE `orderdata` (
  `orders` varchar(20) NOT NULL,
  `delivery` varchar(20) NOT NULL,
  `pending` varchar(20) NOT NULL,
  `revenue` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdata`
--

INSERT INTO `orderdata` (`orders`, `delivery`, `pending`, `revenue`) VALUES
('20', '15', '5', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `oderid` varchar(10) NOT NULL,
  `totalbill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`name`, `email`, `oderid`, `totalbill`) VALUES
('Raaju Pahlowan', 'raju@gmail.com', '0001', '200'),
('Stark', 'tony@gmail.com', '002', '250'),
('ali', 'ali@gmail.com', '003', '250');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
