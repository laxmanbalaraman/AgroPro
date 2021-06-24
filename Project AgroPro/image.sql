-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 04:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agropro`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `filename` text NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`filename`, `user`) VALUES
('bg.jpg', ''),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', ''),
('C:/xampp/htdocs/Project AgroPro/image/dp1.jpg', ''),
('C:/xampp/htdocs/Project AgroPro/image/dp3.jpg', ''),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', ''),
('C:/xampp/htdocs/Project AgroPro/image/dp1.jpg', ''),
('C:/xampp/htdocs/Project AgroPro/image/dp3.jpg', ''),
('C:/xampp/htdocs/Project AgroPro/image/dp2.jpg', 'pa'),
('C:/xampp/htdocs/Project AgroPro/image/dp1.jpg', 'Agro12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
