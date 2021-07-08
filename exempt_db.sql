-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 02:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exempt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `announcement_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `author_id`, `type`, `title`, `year`, `month`, `note`, `url`, `announcement_key`) VALUES
(40, 30, 'workshop', 'AlexisStories', '2015', '8', 'Automotive', 'www.alexisstories.com', '780'),
(41, NULL, 'book', 'BOOK', '1996', '05', 'HELLO', 'www.book.com', '0102'),
(42, NULL, 'inbook', 'InBook', '1994', '04', 'HI', 'www.inbook.tr', '0201'),
(43, NULL, 'workshop', 'WORKSHOP', '2000', '12', 'GoodBye', 'www.workshop.gr', '1020'),
(44, NULL, 'article', 'ARTICLE', '2015', '09', 'WELCOME', 'www.article.gr', '2010');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `announcement_id` int(11) DEFAULT NULL,
  `journal` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `doi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `id_title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `orcid_url` varchar(255) NOT NULL,
  `url_personal` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `id_title`, `name`, `surname`, `orcid_url`, `url_personal`, `role`) VALUES
(30, 'Mr', 'Epaminondasa', 'Grigoriadis', 'www.alexiskalamata1.gr', 'www.personalurl2.com', 'Researcher');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `announcement_id` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `edition` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `ISBN` varchar(255) DEFAULT NULL,
  `ISSN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `email`, `subject`, `message`) VALUES
('Takis', 'Sougias', 'email@email.gr', '0', 'minima'),
('nikos', 'mpampis', 'email@email.gr', '0', 'minima'),
('nikosa', 'mpampisa', 'fanis@gmail.com', '0', '1231223'),
('nikos', 'mpampis', 'fanis@gmail.com', '0', ''),
('Takis', 'Sougias', 'email@email.gr', '0', 'minima'),
('nikos', 'mpampis', 'email@email.gr', '0', 'minima'),
('nikosa', 'mpampisa', 'fanis@gmail.com', '0', '1231223'),
('nikos', 'mpampis', 'fanis@gmail.com', '0', ''),
('Takis', 'Sougias', 'email@email.gr', '0', 'minima'),
('nikos', 'mpampis', 'email@email.gr', '0', 'minima'),
('nikosa', 'mpampisa', 'fanis@gmail.com', '0', '1231223'),
('nikos', 'mpampis', 'fanis@gmail.com', '0', ''),
('ηιηι', 'ηιιηηιηι', 'mike@gmail.com', '0', 'hihihihih'),
('Fanis', 'Bakitas', 'email@email.gr', '0', 'Kalispera exo provlima me tin ergasia'),
('Fanis', 'Bakitas', 'email@email.gr', 'Thema minimatos1', 'Kalispera exo provlima me tin ergasia1111'),
('George', 'Bastounis', 'email123@email.gr', 'Ergasia', 'Me lene giorgo');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `type` text NOT NULL,
  `school` text NOT NULL,
  `description` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inbook`
--

CREATE TABLE `inbook` (
  `inbook_id` int(11) NOT NULL,
  `announcement_id` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `chapter` varchar(255) DEFAULT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `edition` varchar(255) DEFAULT NULL,
  `ISBN` varchar(255) DEFAULT NULL,
  `ISSN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_role` varchar(20) NOT NULL DEFAULT 'poster',
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_role`, `user_id`, `username`, `name`, `surname`, `password`) VALUES
('2', 1, 'georgename', 'George', 'Bastounis', '1234'),
('1', 2, 'admin', 'admin', '$admin', 'admin'),
('2', 3, '123', '123', '123', '123'),
('2', 4, 'takis123', 'Takis', 'Efstathiou', '1234'),
('2', 5, 'mitsos', 'mitso', 'mits', '1234'),
('guest', 6, '', '', '', ''),
('3', 7, 'kalisperi', 'kalimeri', 'mesimeri', '1234'),
('2', 8, 'user1', 'Panagiotis', 'Xatzipavlou', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `workshop_id` int(11) NOT NULL,
  `announcement_id` int(11) DEFAULT NULL,
  `booktitle` varchar(255) DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `doi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`workshop_id`, `announcement_id`, `booktitle`, `editor`, `volume`, `number`, `series`, `pages`, `address`, `organization`, `publisher`, `doi`) VALUES
(8, 40, 'AlexisVacations', 'Grigoropoulos', '45', '103', '57', '140', 'Chios', 'BigOrg', 'Psixokori', '803');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `announcement_id` (`announcement_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `surname` (`surname`,`url_personal`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `announcement_id` (`announcement_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `inbook`
--
ALTER TABLE `inbook`
  ADD PRIMARY KEY (`inbook_id`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `announcement_id` (`announcement_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`workshop_id`),
  ADD UNIQUE KEY `booktitle` (`booktitle`),
  ADD KEY `announcement_id` (`announcement_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inbook`
--
ALTER TABLE `inbook`
  MODIFY `inbook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `workshop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON DELETE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON DELETE CASCADE;

--
-- Constraints for table `inbook`
--
ALTER TABLE `inbook`
  ADD CONSTRAINT `inbook_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON DELETE CASCADE;

--
-- Constraints for table `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `workshop_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
