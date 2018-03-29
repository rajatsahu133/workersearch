-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 07:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fn` varchar(30) NOT NULL,
  `ln` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `image` varchar(400) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `about` varchar(600) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fn`, `ln`, `gender`, `address`, `skill`, `email`, `mobile`, `image`, `uid`, `about`, `password`) VALUES
('Bikasgh', 'SAo', 'male', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '452391-bks.jpg', 'uid82766', 'Hi There,this is ranjit.Today i wiil be reviewing galaxy note 69.', ''),
('aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaa', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '581077-bks.jpg', 'uid33014', 'sssssssssssssssssssssssssssssssssssssssss', ''),
('Bikash', 'Sao', 'male', '758031', 'janitor', 'saobikash@gmail.com', '8018504030', '482696-bks.jpg', 'uid81332', 'Hi There,this is ranjit.Today i wiil be reviewing galaxy note 69.', 'password'),
('Bikash1', 'sao1', 'male1', '7580311', 'repairman', 'saobikash1@gmail.com', '', '54984-bks.jpg', 'uid61362', 'Hi There,this is ranjit.Today i wiil be reviewing galaxy note 69.', 'bikash1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
