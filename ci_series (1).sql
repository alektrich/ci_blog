-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2013 at 08:10 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_series`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userID` int(4) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `title`, `post`, `date_added`, `userID`, `active`) VALUES
(2, 'Prvi post', 'Drugi post takodje treba da seasdfasdfasdfasdfasdfasdfasdfasfd obrise, a sledeci ID da prirodno bude onaj koji ide. Medjutim, to se dogodilo nije.', '2013-01-13 13:35:49', 0, 1),
(3, 'Drugi drugi post', 'alalalalalalalalalalal', '2013-01-13 13:36:39', 0, 1),
(4, '3. post', '3. post', '2013-01-13 14:33:26', 0, 1),
(5, 'ahahaha', 'lol', '2013-01-13 14:33:36', 0, 1),
(6, 'trolololo', 'joooooooooooooooooooooooooooooooooooooj', '2013-01-13 14:33:49', 0, 1),
(7, 'ovo treba', 'dide na drugu stranu', '2013-01-13 14:34:07', 0, 1),
(8, 'jajaj', 'kkkkk', '2013-01-13 14:35:36', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','author','user','') NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `username`, `password`, `user_type`) VALUES
(1, 'alektrich@gmail.com', 'alektrich', 'al1806985', 'admin'),
(2, '', 'user', 'user', 'user'),
(3, '', 'author', 'author', 'author');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
