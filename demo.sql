-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 01:56 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `message`) VALUES
('s', 's', 's'),
('Sundram Mishra', 'samjio2016@gmail.com', 'ASSS'),
('Sundram Mishra', '', ''),
('Sundram Mishra', 'Bareilly', 'sss'),
('New28Project', 'Noida', 'SFD'),
('New28Project', 'Noida', 'SFD'),
('Sundram Mishra', 'Bareilly', 'SDE'),
('Sundram Mishra', 'Bareilly', 'SDE'),
('Sundram Mishra', 'Bareilly', 'SSS'),
('Sundram Mishra', 'Usawan', 'SDF'),
('Sundram Mishra', 'Bareilly', 'Lean Ent'),
('Sundram Mishra', 'Bareilly', 'SAS'),
('Sundram Mishra', 'Bareilly', 'ss'),
('Sundram Mishra', 's', 's'),
('Sundram Mishra', 'Bareilly', 'sss'),
('Sundram Mishra', 'Bareilly', 'sss');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
