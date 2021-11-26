-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 08:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fall2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(25) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(60) NOT NULL,
  `ipaddress` varchar(280) NOT NULL,
  `URL` varchar(100) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mob_no` int(18) NOT NULL,
  `brief` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `ipaddress`, `URL`, `age`, `gender`, `mob_no`, `brief`) VALUES
('karim khan', 'karim@gmail.com', 'hssjA234', '192.168.0.16', 'https://karim.com', 17, 'Male', 1734300000, 'Hi I am karim. I don’t like ******** '),
('mow monira', 'mow.monira@gmail.com', 'lajsgsdg12A', '192.168.0.10', 'http://mm.m.com', 22, 'Female', 1712598624, 'hi my name is mow. **** happy.'),
('rarim hossain', 'rahim@gmail.com', 'ksgduGUI122', '192.168.0.8', 'https://rarim.com', 21, 'Male', 1712598624, '**** happy ****'),
('ali khan', 'ali@gmail.com', 'kjaA252ex', '192.168.0.1', 'https://ali.com', 23, 'Male', 1927364749, 'happy to **** **** hi '),
('binty rahman', 'b@gmail.com', 'hjssnJHG1927', '192.168.0.19', 'http://b.com', 11, 'Female', 1734300000, '**** happy .****.'),
('karim', 'karim@gmail.com', 'aA12shdd', '192.168.0.11', 'karim.com', 18, 'Male', 1734300000, 'Hi I am \r\nkarim. I \r\ndon’t like \r\n*******.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
