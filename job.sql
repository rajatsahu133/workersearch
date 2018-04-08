-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 08:56 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(50) NOT NULL,
  `apassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `apassword`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `sid` varchar(30) NOT NULL,
  `skill` varchar(40) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`sid`, `skill`, `isactive`) VALUES
('sid1234', 'janitor', 1),
('', 'Dhobi', 0),
('sid42838', 'Dhobi', 1),
('sid42020', 'Dhobi', 1),
('sid43555', 'Janitor', 1),
('sid85135', 'Painter', 1),
('sid90814', 'Plumber', 1),
('sid14548', 'Repairman', 1),
('sid12439', 'Plumber', 1),
('sid3235', 'BIkash', 0),
('sid12448', 'BIkash', 0),
('sid69348', 'bikash', 0),
('sid46909', 'yaya', 0),
('sid50186', 'Janitor', 1),
('sid52850', 'Architect', 1),
('sid13987', 'Carpenter', 1),
('sid38733', 'Chef', 1),
('sid78311', 'Electrician', 1),
('sid90777', 'Fisherman', 1),
('sid79306', 'Jeweler', 1),
('sid64844', 'Lawer', 1),
('sid5643', 'Lawyer', 1),
('sid26166', 'Mechanic', 1),
('sid67868', 'Painter', 1),
('sid24353', 'Plumber', 1),
('sid73404', 'Doctor', 1),
('sid68390', 'Psycologist', 1),
('sid1548', 'Salesman', 1),
('sid1636', 'Receptionist', 1),
('sid78470', 'Secretary', 1),
('sid76825', 'Surgeon', 1),
('sid52219', 'Teacher', 1),
('sid31067', 'Veterinarian', 1),
('sid67715', 'Waiter', 1),
('sid60846', 'Waiteress', 1),
('sid27030', 'Waiteress', 1);

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
  `password` varchar(100) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fn`, `ln`, `gender`, `address`, `skill`, `email`, `mobile`, `image`, `uid`, `about`, `password`, `isactive`) VALUES
('Bikasgh', 'SAo', 'male', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '452391-bks.jpg', 'uid82766', 'Hi There,this is ranjit.Today i wiil be reviewing galaxy note 69.', '', 0),
('aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaa', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '581077-bks.jpg', 'uid33014', 'sssssssssssssssssssssssssssssssssssssssss', '', 0),
('Bikash', 'Sao', 'male', '758031', 'janitor', 'saobikash@gmail.com', '8018504030', '482696-bks.jpg', 'uid81332', 'Hi There,this is ranjit.Today i wiil be reviewing galaxy note 69.', 'password', 0),
('Bikash1', 'sao1', 'male1', '7580311', 'janitor', 'saobikash1@gmail.com', '', '54984-bks.jpg', 'uid61362', 'Hi There,this is ranjit.Today i wiil be reviewing galaxy note 69.', 'bikash1', 0),
('sa', 'asa', 'sas', 'asa', 'janitor', 'saobikash@gmail.com', '3238993199', '90327-bks.jpg', 'uid62881', 'sas', 'as', 0),
('Bikash', 'sao', 'male', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '932655-bg.jpg', 'uid90618', 'about1', 'password', 0),
('Bikash', 'sao', 'male', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '785676-bg.jpg', 'uid99185', 'about1', 'aaa', 0),
('bikkkkkk', 'kkkkkkkash', 'male', '758031', 'janitor', 'About', '', '717781-bks.jpg', 'uid49481', '', 'password', 0),
('bikkkkkk', 'kkkkkkkash', 'male', '758031', 'janitor', 'saobikash@gmail.com', '', '877198-bks.jpg', 'uid72922', 'About', 'password', 0),
('Bikash', 'Sao', 'male', '758031', 'janitor', 'saobikash@gmail.com', '', '362302-bks.jpg', 'uid52423', 'Hi There,this is ranjit.Today i wiil be reviewing galaxy note 69.', 'password', 0),
('as', 'as', 'sa', '1', 'janitor', 'saobikash@gmail.com', '', '928966-', 'uid38480', 'assssssssssssssssssssssssssssssssssssssssss', 'as', 1),
('Bikash', 'Sao', 'male', '1', 'janitor', 'saobikash@gmail.com', '', '711989-bks.jpg', 'uid8106', 'sasas', '1', 1),
('s', 'Sao', 'sa', '1', 'janitor', 'saobikash@gmail.com', '', '848175-bks.jpg', 'uid98239', 'a', 'a', 1),
('a', 'a', 'a', '1', 'janitor', 'saobikash@gmail.com', '', '429130-bks.jpg', 'uid65558', 's', 'a', 1),
('Bikash sao', 'sao', 'male', '758031', 'janitor', 'saobikash@gmail.com', '', '992074-bks.jpg', 'uid15573', 'About', 'password', 1),
('Bikash sao', 'sao', 'male', '758031', 'janitor', 'saobikash@gmail.com', '8018504030', '117338-bks.jpg', 'uid34', 'About', 'password', 1),
('Bikash sao', 'sao', 'male', '758031', 'Architect', 'saobikash@gmail.com', '', '73250-bks.jpg', 'uid95349', 'abouttttt', 'password', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
