-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 06:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `username` varchar(200) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `carrate` double NOT NULL,
  `temporate` double NOT NULL,
  `lorryrate` double NOT NULL,
  `quantity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`username`, `latitude`, `longitude`, `carrate`, `temporate`, `lorryrate`, `quantity`) VALUES
('', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('', 13.103923199999999, 80.2095104, 10, 0, 11, 0),
('pa', 13.103923199999999, 80.2095104, 5, 16, 0, 3),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('pa', 12.898003300000001, 80.1730151, 3, 4, 0, 5),
('', 0, 0, 0, 0, 0, 1.5),
('', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('', 13.087070779015482, 80.18950249239155, -2.5, 0, 0, 1.5),
('pa', 13.087070779015482, 80.18950249239155, -2.5, 0, 0, 1.5),
('pa', 13.087071658418818, 80.18950374953815, 0, 0, 0, 1.5),
('pa', 13.087071780934101, 80.18950433377707, 0, 0, 0, 1),
('pa', 13.087071999999997, 80.18950408050513, 1, 0.5, 0.5, 2.5),
('Agro12', 13.087072319015068, 80.18950544578219, 0, 0, 0, 3.5),
('Agro12', 13.08707053919486, 80.18950257630122, 50, 100, 20, 5),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 1, 0, 1.5, 1),
('vinod', 12.9859584, 80.2357248, 10, 25, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `farmeruser`
--

CREATE TABLE `farmeruser` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `farmlocation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmeruser`
--

INSERT INTO `farmeruser` (`firstname`, `lastname`, `username`, `password`, `email`, `phonenumber`, `farmlocation`) VALUES
('x', 'l', 'abc', '$2y$10$N4LhPhdfA1AluMmSGO77Fu7b3.iOfYWoaIE/MCgAILe0vcZUVgDAe', 'abc@gmail.com', 9967543213, 'no 10-chennai outer india'),
('v', 's', 'cde', '$2y$10$BwqdbTCE97JLvR6NhizHKOlmOR0rUo7fRPAxeP94Q2lhcCBG3DZWe', 'ac@gmail.com', 9888765432, 'velaban djfn chennai'),
('p', 'a', 'pa', '$2y$10$qY8QLEHca7H2hkGnGUgfh.4BHXp3sG6XaH94bIdOnT36Hl7yKo5aO', 'p@gmail.com', 9888755432, 'vengaivasal'),
('Laxman', 'B', 'r', '$2y$10$ZD4ozljQhRGJQLvFIherAe.NjCkEhPZL3.vLtBe5gZRH6ZXJhSnk.', 'laxmanr.b2019@vitstudent.ac.in', 9884383965, 'r'),
('vinod', 'v', 'v1', '$2y$10$OtrtxayO./b09dV4yW6N8.nVPYEG5dkVeETp8h2B1zSWnWioLTpp.', 'vinod2019@vitstudent.ac.in', 9884383965, 'v'),
('Agro', 'pro', 'Agro12', '$2y$10$t578u0ichaD7hnVa3IB.bOmdDqaBfxB84mSQz8sN7NvQwgyn/pFXG', 'Agropro@gmail.com', 9123456789, 'Address'),
('vinod', 'a', 'vinod', '$2y$10$uLIRgEHAnxEA5jZ3gkMN3OPxePNhDng81ZkaMLzk4aSyqR16m81di', 'asdfghjk@gmail.com', 902345678, 'asdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `filename` text NOT NULL,
  `user` text NOT NULL,
  `cropname` varchar(500) NOT NULL,
  `croptotalquantity` double NOT NULL,
  `cropprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`filename`, `user`, `cropname`, `croptotalquantity`, `cropprice`) VALUES
('bg.jpg', '', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', '', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/dp1.jpg', '', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/dp3.jpg', '', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', '', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/dp1.jpg', '', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/dp3.jpg', '', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/dp2.jpg', 'pa', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/dp1.jpg', 'Agro12', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'Agro12', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', '', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', ' rice', 0, 0),
('C:/xampp/htdocs/Project AgroPro/image/bg.jpg', 'vinod', ' rice', 15, 40);

-- --------------------------------------------------------

--
-- Table structure for table `shopuser`
--

CREATE TABLE `shopuser` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopuser`
--

INSERT INTO `shopuser` (`firstname`, `lastname`, `username`, `password`, `email`, `phoneno`, `location`) VALUES
('u', 'v', 'abc', '$2y$10$t7jW6EhXbNr0upBvBbm3kueOaGtCH/8F2rDxZlJNYixtzc4O8ysHC', 'abc@gmail.com', 9888765436, 'sampath nagar erode'),
('s', 's', 'a', '$2y$10$seClfxtZYiHpeHiVFxDMueWt1TGu18N2xHtA9ib3HQYbpVCHMI5Um', 's@gmail.com', 123456789, 'hi'),
('cat', 'dog', 'dan', '$2y$10$VU6Mm88HaOZMtdffj3rb2u3Vhd3TeOeLp.V7I80X8ikme4N0k1Hnu', 'dan@gmail.com', 9888765437, 'hello'),
('v', 'v', 'v', '$2y$10$PVSdnlcVBQ8zslhyWzfNY.7KMdFnO490WvzDXEMB5Lr3GvjMbLxr.', 'v@gmail.com', 9888765438, 'chennai'),
('Laxman', 'B', 'l', '$2y$10$bcsTZJwBGCW4Wy6ILTuNv.7NoKn/bQhq07fECp7nucezA9jubLhv2', 'laxman.b2019@vitstudent.ac.in', 1, 'l'),
('Laxman', 'B', 'l2', '$2y$10$SX8MLLej3CxcDir7sXHz/u8K90/y5xp5KtSSQHcn/ZpDDAaiywdgW', 'laxman2.b2019@vitstudent.ac.in', 7, 'l'),
('vinod', 'v', 'vinod', '$2y$10$Cd8Sk8Wf8egr6RLkFIcR6.LxCVlfJO92zBSZjIG6c0OU0Ggl6r/uW', 'vinod2019@vitstudent.ac.in', 9884383965, 'hi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
