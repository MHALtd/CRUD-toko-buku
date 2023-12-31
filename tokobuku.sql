-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 03:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `release_year` smallint(4) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `discount` decimal(4,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `book_category_id` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `slug`, `release_year`, `author`, `price`, `discount`, `stock`, `cover`, `book_category_id`, `created_at`, `update_at`) VALUES
(1, 'Flower for Algernon', 'flower-for-algernon', 1959, 'Daniel Keyes', 120000, '5.00', 30, '', 1, '2023-06-01 08:55:10', '2023-06-01 08:55:10'),
(2, 'The Fruits of the Earth', 'the-fruits-of-the-earth', 1895, 'André Gide', 180000, '10.00', 25, '', 2, '2023-06-01 09:17:03', '2023-06-01 09:17:03'),
(3, 'The Old Man and the Sea', 'the-old-man-and-the-sea', 1951, 'Ernest Hemingway', 150000, '5.00', 15, '', 1, '2023-06-01 09:20:43', '2023-06-01 09:20:43'),
(4, 'Town Musicians of Bremen', 'town-musicians-of-bremen', 1819, 'Grimm Bersaudara, Wilhelm Carl Grimm', 200000, '0.00', 10, '', 3, '2023-06-01 09:20:43', '2023-06-01 09:20:43'),
(5, '風の又三郎 (Kaze no Matasaburo)', 'kaze-no-matasaburo', 1934, 'Kenji Miyazawa', 160000, '0.00', 17, '', 4, '2023-06-01 09:47:38', '2023-06-01 09:47:38'),
(6, 'The Happy Prince', 'the-happy-prince', 1888, 'Oscar Wilde', 80000, '0.00', 70, '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `book_category_id` int(5) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`book_category_id`, `name_category`) VALUES
(1, 'Novel'),
(2, 'Prosa'),
(3, 'Dongeng'),
(4, 'Cerita Pendek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`book_category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
