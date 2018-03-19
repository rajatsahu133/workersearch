-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 02:45 PM
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
  `uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fn`, `ln`, `gender`, `address`, `skill`, `email`, `mobile`, `image`, `uid`) VALUES
('Bikash', 'Sao', 'male', 'jhumpura', 'janitor', 'saobikash@gmail.com', '', '', ''),
('Bikash', 'Sao', 'male', 'jhumpura', 'janitor', 'saobikash@gmail.com', '', '', ''),
('Bikash', 'Sao', 'male', 'jhumpura', 'janitor', 'saobikash@gmail.com', '', '', ''),
('Bikash', 'Sao', 'male', 'jhumpura', 'janitor', 'saobikash@gmail.com', '', '', ''),
('Bikash', 'Sao', 'male', 'jhumpura', 'janitor', 'saobikash@gmail.com', '', '', ''),
('Bikash', 'Sao', 'male', '', 'janitor', 'saobikash@gmail.com', '', '', ''),
('Bikash', 'Sao', 'male', 'jhumpura', 'janitor', 'saobikash@gmail.com', '', '', ''),
('Bikash', 'Sao', 'male', 'jhumpura', 'janitor', 'saobikash@gmail.com', '8018504030', '', ''),
('demo', 'demo', 'demo', 'demo', 'janitor', 'demo@demo.com', 'demo', '', ''),
('a', 'a', 'a', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '', ''),
('radha', 'rani', 'female', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '', ''),
('rani', 'radha', 'ma', '758031', 'janitor', 'saobikash@gmail.com', '3238993199', '', ''),
('johnny', 'sins', 'male', '758031', 'repairman', 'saobikash@gmail.com', '3238993199', '', ''),
('Bikash', 'Sao', 'male', '758031', 'driver', 'saobikash@gmail.com', '3238993199', '836407-', 'uid12076'),
('Bikash', 'Sao', 'male', '758031', 'driver', 'saobikash@gmail.com', '3238993199', '265993-', 'uid6076'),
('Bikash', 'Sao', 'male', '758031', 'driver', 'saobikash@gmail.com', '3238993199', '13438-', 'uid62094'),
('sasa', 'Sao', 'sa', '758031', 'janitor', 'saobikash@gmail.com', '89898989898', '698636-', 'uid59039'),
('sasa', 'Sao', 'sa', '758031', 'janitor', 'saobikash@gmail.com', '89898989898', '828541-', 'uid65365'),
('aaa', 'aaa', 'aaa', 'aaaa', 'janitor', 'aa@f', 'sasasas', '996312-', 'uid77948'),
('a', 'a', 'a', 'aaaa', 'janitor', 'aa@f', 'aaaaaaaaaaaaaaaa', '924453-', 'uid20987'),
('aa', 'aa', 'aaaa', 'aaaa', 'janitor', 'aa@f', 'aaaaaaaaaaaaaaaa', '691685-', 'uid29389'),
('a', 'a', 'a', 'aaaa', 'janitor', 'aa@f', 'a', '696136-', 'uid79077'),
('a', 'a', 'a', 'a', 'janitor', 'aa@f', 'a', '691441-', 'uid58173'),
('1', '1', '1', '1', 'janitor', '1@1.1', '1', '916496-', 'uid22571'),
('1', '1', '1', '1', 'janitor', '1@1.1', '1', '486324-', 'uid65668'),
('a', 'aa', 'aa', 'aa', 'janitor', 'aa@f', 'sasasas', '610528-', 'uid82324'),
('a', 'aa', 'aa', 'aa', 'janitor', 'aa@f', 'sasasas', '393612-', 'uid19754'),
('sasa', 'sasa', 'sasas', 'sasas', 'janitor', 'sas@h.h', '97979797979', '8957-', 'uid28504');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
