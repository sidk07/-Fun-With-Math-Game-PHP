-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 03:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funwithmath`
--

-- --------------------------------------------------------

--
-- Table structure for table `div2`
--

CREATE TABLE `div2` (
  `uid` int(11) NOT NULL,
  `highscore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `div2`
--

INSERT INTO `div2` (`uid`, `highscore`) VALUES
(8, 6),
(13, 0),
(14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `div3`
--

CREATE TABLE `div3` (
  `uid` int(20) NOT NULL,
  `highscore` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `div3`
--

INSERT INTO `div3` (`uid`, `highscore`) VALUES
(8, 8),
(13, 0),
(14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `div5`
--

CREATE TABLE `div5` (
  `uid` int(20) NOT NULL,
  `highscore` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `div5`
--

INSERT INTO `div5` (`uid`, `highscore`) VALUES
(8, 15),
(13, 0),
(14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `div10`
--

CREATE TABLE `div10` (
  `uid` int(20) NOT NULL,
  `highscore` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `div10`
--

INSERT INTO `div10` (`uid`, `highscore`) VALUES
(8, 8),
(13, 0),
(14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `uid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `feeback` varchar(200) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uid`, `name`, `feeback`, `rating`) VALUES
(8, 'Abhishek', 'Nice Game...!', 5),
(9, 'Ramesh Jadhav', 'Enjoyable...', 5),
(11, 'Ram Niwas', 'Good Game!!', 4),
(12, 'Vipul Patil', 'Nice...', 5),
(13, 'Roshan', 'Very legendary Game.\r\n', 5),
(14, 'Sahil', 'csd', 5);

-- --------------------------------------------------------

--
-- Table structure for table `prime`
--

CREATE TABLE `prime` (
  `uid` int(20) NOT NULL,
  `highscore` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prime`
--

INSERT INTO `prime` (`uid`, `highscore`) VALUES
(8, 15),
(9, 3),
(11, 4),
(12, 9),
(13, 0),
(14, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sqroot`
--

CREATE TABLE `sqroot` (
  `uid` int(20) NOT NULL,
  `highscore` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sqroot`
--

INSERT INTO `sqroot` (`uid`, `highscore`) VALUES
(8, 4),
(13, 0),
(14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(120) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `password`, `registration_time`) VALUES
(8, 'Abhishek', 'Patil', 'abhishek@gmail.com', '8371f69bdcc49cb926f09c9f4a061082', '2022-04-27 18:11:22'),
(9, 'Ramesh', 'Jadhav', 'ramesh@gmail.com', 'fdf3ab3292c26a4a3a480c0b41bc7a3f', '2022-05-06 10:32:50'),
(10, 'Omkar', 'Garvare', 'omkargarvare1@gmail.com', '8470a3779c5dc746052e4be7b1f23173', '2022-05-06 11:01:13'),
(11, 'Ram', 'Niwas', 'ram@gmail.com', 'b04d6c7efa125fc28ece9ebc04967a8c', '2022-05-09 17:37:54'),
(12, 'Vipul', 'Patil', 'vipul@gmai.com', '028b54a6668f8a8d4a28841a8ff26c34', '2022-05-09 18:05:12'),
(13, 'Roshan', 'Nale', 'roshan@gmail.com', '865705f3d16ae6a06e4c8d9a8c473258', '2022-06-03 06:34:57'),
(14, 'Sahil', 'Patil', 'sahil123@gmail.com', '4c435cacd7518889c0992403aef86208', '2022-06-04 04:46:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `div2`
--
ALTER TABLE `div2`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `div3`
--
ALTER TABLE `div3`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `div5`
--
ALTER TABLE `div5`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `div10`
--
ALTER TABLE `div10`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `prime`
--
ALTER TABLE `prime`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `sqroot`
--
ALTER TABLE `sqroot`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `div2`
--
ALTER TABLE `div2`
  ADD CONSTRAINT `div2_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `div3`
--
ALTER TABLE `div3`
  ADD CONSTRAINT `div3_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `div5`
--
ALTER TABLE `div5`
  ADD CONSTRAINT `div5_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `div10`
--
ALTER TABLE `div10`
  ADD CONSTRAINT `div10_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `prime`
--
ALTER TABLE `prime`
  ADD CONSTRAINT `prime_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON UPDATE NO ACTION;

--
-- Constraints for table `sqroot`
--
ALTER TABLE `sqroot`
  ADD CONSTRAINT `sqroot_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
