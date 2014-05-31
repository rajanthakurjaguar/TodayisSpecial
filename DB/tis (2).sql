-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 05:25 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tis`
--
CREATE DATABASE IF NOT EXISTS `tis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tis`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `Event_id` int(250) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `age_gp_id` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `infono` int(200) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `dateofoccurence` date NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `opt1` varchar(250) NOT NULL,
  `opt2` varchar(250) NOT NULL,
  `opt3` varchar(250) NOT NULL,
  `opt4` varchar(250) NOT NULL,
  PRIMARY KEY (`Event_id`,`category`),
  UNIQUE KEY `infono` (`infono`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_id`, `category`, `date`, `age_gp_id`, `type`, `infono`, `information`, `dateofoccurence`, `ques`, `answer`, `opt1`, `opt2`, `opt3`, `opt4`) VALUES
(1, 'history', '2014-04-16', 1, 'music', 1, 'Giacomo Meyerbeer''s opera Le prophète, premieres in Paris', '1849-04-16', 'In which year premiere of Giacomo Meyerbeer''s opera Le prophète was conducted', '1849', '1856', '1859', '1849', '1846'),
(2, 'history', '2014-04-16', 2, 'music', 2, 'Heitor Villa-Lobos'' opera "Izaht" premieres in Rio de Janeiro', '1940-04-16', 'Heitor Villa-Lobos'' opera "Izaht" premieres were conducted in which city', 'Rio de Janeiro', 'New york', 'South Wales', 'Rio de Janeiro', 'Gotham'),
(3, 'history', '2014-04-16', 2, 'music', 3, '"Words & Music" opens at John Golden Theater NYC for 127 performances', '1974-04-16', 'How many performances were conducted at "Words & Music" in the opening at John Golden Theater NYC ', '127', '127', '128', '129', '130'),
(4, 'history', '2014-04-16', 2, 'music', 4, '41st CMT Music Awards: Carrie Underwood & Kenny Chesney wins', '2007-04-16', 'Who won at 41st CMT Music Awards ?', 'Carrie Underwood & Kenny Chesney wins', 'George strait', 'Jason Aldean', 'Luke Bryan', 'Eric Church'),
(5, 'sports', '2014-04-16', 2, 'sports', 5, 'Toronto Maple became the first NHL team to win three straight Stanley Cups titles.', '1949-04-16', 'In 1949 which team became the first NHL team to win three straight Stanley Cups titles.', 'Toronto Maple ', 'Toronto Maple ', 'Alluca Tores', 'Malice Fixers', 'Trages Trogens '),
(6, 'sports', '2014-04-16', 3, 'football', 6, 'Retired Footballer Rafael Benítez Maudes was born', '1960-04-16', 'Rafael Benítez Maudes was born in which yesr?', '1960', '1959', '1962', '1961', '1960'),
(7, 'history', '2014-04-18', 2, 'music', 7, 'Rome/Auerbach/Horwitt''s musical "\r\nCall Me Mister" premieres in NYC', '1946-04-18', 'Rome/Auerbach/Horwitt''s musical "\r\nCall Me Mister" was premiered in which city', 'New York', 'Chicago', 'Houston', 'New York', 'San Antonio'),
(8, 'histroy', '2014-04-18', 2, 'music', 8, '"Side by Side" by Stephen Sondheim opens at Music Box NYC for 390 perfs', '1977-04-18', 'How many performances were conducted at "Side by Side" by Stephen Sondheim at Music Box NYC in the year 1977 ?', '390', '380', '389', '370', '390'),
(9, 'history', '2014-04-18', 2, 'music', 9, 'Edward Jones,Composer, dies at the age of 72', '1824-04-18', 'At what age did the famous Composer Edward Jones died?', '72', '73', '80', '72', '85'),
(10, 'history', '2014-04-19', 2, 'music', 10, 'CW Glucks opera "Iphigenia in Aulis" premieres in Paris', '1774-04-19', 'CW Glucks opera "Iphigenia in Aulis" premiere was conducted at which city', 'Paris', 'Poitiers', 'Perpignan', 'Paris', 'Epinal'),
(11, 'history', '2014-04-19', 2, 'music', 11, 'Beatles sign a contract to stay together for 10 years', '1967-04-19', 'In the year 1967 Beatles signed a contract for how many years?', '10', '15', '10', '9', '7'),
(12, 'history', '2014-04-22', 2, 'sports', 12, 'Michael Moorer became the first left-handed heavyweight champion. ', '1994-04-22', 'In which year Michael Moorer Became the first heavyweight champion? ', '1994', '1985', '1996', '1989', '1994'),
(13, 'hitory', '2014-04-22', 2, 'sports', 13, 'The Atlanta Braves ended their 13-game winning streak to start the season. It was the longest streak of wins at the beginning of the season in major league baseball history.', '1982-04-22', 'I which yesr Atlanta Braves 13-game winning streak was broken?', '1982', '1982', '1983', '1984', '1981'),
(14, 'histroy', '2014-04-22', 2, 'sports', 14, 'The Toronto Maple Leafs defeated the Detroit Red Wings, 2-1 in Game Seven of the Stanley Cup finals. ', '1945-04-22', 'In which game of the Stanley Cup finals in the yesr 1945 did Toronto Maple Leafs defeated the Detroit Red Wings?', '7th', '10th', '8th', '7th', '9th'),
(16, 'history', '2014-04-22', 2, 'sports', 15, 'Eight baseball teams began the inaugural season of the National League. In the first game Boston beat Philadelphia 6-5. ', '1876-04-22', 'National League for Baseball started in which year?', '1876', '1879', '1878', '1877', '1876'),
(17, 'history', '2014-04-22', 2, 'sports', 16, 'The NFL Draft was aired in prime time for the first time.', '2010-04-22', 'NFL Draft was aired in prime time for the first time in which year?', '2010', '2011', '2010', '2009', '2008'),
(18, 'history', '2014-04-22', 2, 'music', 17, 'Composer Giuseppe Torelli was born. ', '1658-04-22', 'Composer Giuseppe Torelli was born in which year? ', '1658', '1635', '1657', '1645', '1658'),
(20, 'history', '2014-04-22', 2, 'music', 18, 'Herb Alpert debuted "This Guy''s in Love With You" on his CBS-TV special', '1968-04-22', 'Herb Alpert debuted "This Guy''s in Love With You" on his CBS-TV special in which year?', '1968', '1967', '1968', '1969', '1970'),
(21, 'history', '2014-04-22', 2, 'music', 19, 'Guns N'' Roses released  the Balled "Patience."', '1989-04-22', 'Balled "Patience" by Guns N'' Roses released in which year?', '1989', '1989', '1990', '1991', '1992'),
(22, 'history', '2014-04-24', 2, 'music', 20, 'Gilbert & Sullivan''s opera "Patience" produced in London', '1881-04-24', 'In the year 1881 Gilbert & Sullivan''s opera "Patience" produced in which city?', 'London', 'Liverpool', 'Newham', 'London', 'Sandwell'),
(23, 'history', '2014-04-23', 2, 'music', 21, 'Jerry Bock & S Harnick''s musical "She Loves Me" premieres in NYC', '1963-04-24', 'Jerry Bock & S Harnick''s musical "She Loves Me" premiere in which year?', '1963', '1961', '1962', '1963', '1964'),
(27, 'history', '2014-04-23', 2, 'music', 22, 'Mihael Omerza, the composer, dies at 62', '1742-04-24', 'The composer Mihael Omerza died at what age?', '62', '64', '63', '62', '65'),
(28, 'history', '2014-04-23', 2, 'sports', 23, 'Claude Carter, South African slow lefty cricketer, was born. ', '1881-04-24', 'Which south african cricketer was born in the year 1881?', 'Claude Carter', 'David Miller', 'Claude Carter', 'George Aubrey Faulkner', 'Graeme Pollock'),
(29, 'history', '2014-04-23', 2, 'sports', 24, 'Betsy Rawls wins LPGA Carrollton Golf Open', '1955-04-24', 'Who won LPGA Carrollton Golf Open in 1955?', 'Betsy Rawls', 'Betsy Rawls', 'Rausl Chakosti', 'Mukesh Chudhary', 'Allex peter '),
(30, 'history', '2014-04-23', 2, 'sports', 25, 'Amy Alcott wins LPGA American Defender Golf Classic', '1978-04-24', 'In Which year Amy Alcott won LPGA American Defender Golf Classic?', '1978', '1968', '1974', '1978', '1981'),
(31, 'history', '2014-04-23', 2, 'literature', 26, 'According to tradition, the great English dramatist and poet William Shakespeare is born in Stratford-on-Avon on April 24, 1564. ', '1564-04-24', 'he great English dramatist and poet William Shakespeare was born in which year?', '1564', '1563', '1564', '1565', '1566'),
(33, 'history', '2014-04-23', 2, 'art', 27, 'American Academy of Arts & Letters formed', '1904-04-24', 'American Academy of Arts & Letters was constituted in which year?', '1904', '1907', '1909', '1904', '1901'),
(35, 'history', '2014-04-23', 2, 'industry', 28, 'MCA Inc. is expected to name former Viacom Inc. Chief Executive Frank J. Biondi Jr. today as its chairman and chief executive, filling the last major gap in the entertainment company''s management ranks following its acquisition last year by spirits giant Seagram Co., industry sources said. Biondi, 51, will fill the position left vacant by Hollywood legend Lew Wasserman, who became chairman emeritus after Seagram paid $5.7 billion for 80% of MCA in June.', '1996-04-24', 'Frank Biondi begins work at Seagram Co. Ltd.''s MCA in which year?', '1996', '1990', '1989', '1996', '1990'),
(37, 'history', '2014-04-23', 2, 'history', 29, 'Turkey becomes the first country to celebrate Children''s Day as a national holiday', '1929-04-24', 'Which was the first country to celebrate children''s day as a National holiday?', 'Turkey', 'India', 'Turkey', 'Germany', 'England'),
(38, 'history', '2014-04-23', 2, 'sports', 30, 'Namibia becomes the 160th member of the United Nations and the 50th member of the Commonwealth of Nations.', '1990-04-24', 'Which country was the 160th member of United Nations and 50th member of Commonwealth games in 1990?', 'Namibia', 'South Africa', 'Namibia', 'India', 'Sri Lanka'),
(39, 'history', '2014-04-23', 2, 'history', 31, 'World Book Day or World Book and Copyright Day (also known as International Day of the Book or World Book Days) is a yearly event on 23 April, organized by UNESCO to promote reading, publishing and copyright. In the United Kingdom, the day is instead recognised on the first Thursday in March.World Book Day was celebrated for the first time on 23 April 1995.', '1995-04-23', 'Which day is celebrated as World Book day?', '23rd April', '22nd February ', '22nd April', '23rd April', '22nd March'),
(40, 'history', '2014-04-23', 2, 'sports', 32, 'West Indian cricketer, Chris Gayle, smashes the fastest century in history (30 balls) in ipl 6 2013.', '2013-04-23', 'Who smashed the fastest century in IPL and in how many balls?', 'Chris gayle(30 balls)', 'Corey anderson (35 balls)', 'Yusuf pathan(37 balls)', 'Chris gayle(30 balls)', 'Chris Gayle (32 balls)');

-- --------------------------------------------------------

--
-- Table structure for table `history_events`
--

CREATE TABLE IF NOT EXISTS `history_events` (
  `Event_id` int(250) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `age_gp_id` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `dateofoccurence` date NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `opt1` varchar(250) NOT NULL,
  `opt2` varchar(250) NOT NULL,
  `opt3` varchar(250) NOT NULL,
  `opt4` varchar(250) NOT NULL,
  PRIMARY KEY (`Event_id`,`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `history_events`
--

INSERT INTO `history_events` (`Event_id`, `category`, `date`, `age_gp_id`, `type`, `information`, `dateofoccurence`, `ques`, `answer`, `opt1`, `opt2`, `opt3`, `opt4`) VALUES
(1, 'histroy_events', '2014-04-15', 1, 'music', 'Premiere in London of "Serse", an Italian opera by George Frederic Handel.', '1738-04-15', 'Premiere of "Serse" in London was done in which year?', '1738', '1739', '1738', '1745', '1749'),
(2, 'histroy_events', '2014-04-15', 1, 'music', '"Music Man" closes at Majestic Theater NYC after 1375 performances', '1961-04-15', 'How many performances did "Music Man" completed before its last event at at Majestic Theater NYC?', '1375', '1375', '1600', '1597', '2641'),
(3, 'histroy_events', '2014-04-15', 1, 'music', 'Aftermath, released April 1966 by Decca Records, is the fourth British studio album by the Rolling Stones.', '1966-04-15', 'Name of the album released by Rolling Stones in the year 1966 was...', 'Aftermath', 'Dukles', 'The man who sold his Ferrari', 'My first day at college', 'Aftermanth');

-- --------------------------------------------------------

--
-- Table structure for table `question_setup`
--

CREATE TABLE IF NOT EXISTS `question_setup` (
  `userid` varchar(200) NOT NULL,
  `Event_id` int(250) NOT NULL,
  `type` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `infono` int(250) NOT NULL,
  `visit_no` int(100) NOT NULL,
  PRIMARY KEY (`userid`,`Event_id`,`type`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_setup`
--

INSERT INTO `question_setup` (`userid`, `Event_id`, `type`, `date`, `infono`, `visit_no`) VALUES
('dharani', 2, 'music', '2014-04-16', 2, 10),
('dharani', 3, 'music', '2014-04-16', 3, 10),
('dharani', 7, 'music', '2014-04-18', 7, 12),
('dharani', 8, 'music', '2014-04-18', 8, 12),
('dharani', 10, 'music', '2014-04-19', 10, 13),
('dharani', 11, 'music', '2014-04-19', 11, 13),
('dharani', 12, 'sports', '2014-04-22', 12, 25),
('dharani', 13, 'sports', '2014-04-22', 13, 25),
('dharani', 14, 'sports', '2014-04-22', 14, 25),
('dharani', 16, 'sports', '2014-04-22', 15, 25),
('dharani', 17, 'sports', '2014-04-22', 16, 25),
('dharani', 18, 'music', '2014-04-22', 17, 25),
('dharani', 20, 'music', '2014-04-22', 18, 25),
('dharani', 21, 'music', '2014-04-22', 19, 25),
('dharani', 22, 'music', '2014-04-23', 20, 51),
('dharani', 23, 'music', '2014-04-23', 21, 51),
('dharani', 27, 'music', '2014-04-23', 22, 51),
('dharani', 28, 'sports', '2014-04-23', 23, 65),
('dharani', 29, 'sports', '2014-04-23', 24, 65),
('dharani', 30, 'sports', '2014-04-23', 25, 65),
('dharani', 31, 'literature', '2014-04-23', 26, 65),
('dharani', 33, 'art', '2014-04-23', 27, 51),
('dharani', 35, 'industry', '2014-04-23', 28, 74),
('dharani', 37, 'history', '2014-04-23', 29, 51),
('dharani', 38, 'sports', '2014-04-23', 30, 65),
('dharani', 39, 'history', '2014-04-23', 31, 51),
('dharani', 40, 'sports', '2014-04-23', 32, 65),
('jetti', 7, 'music', '2014-04-18', 7, 10),
('jetti', 8, 'music', '2014-04-18', 8, 10),
('jetti', 9, 'music', '2014-04-18', 9, 10),
('manish', 10, 'music', '2014-04-19', 10, 7),
('manish', 11, 'music', '2014-04-19', 11, 7),
('manish', 12, 'sports', '2014-04-22', 12, 5),
('manish', 13, 'sports', '2014-04-22', 13, 5),
('manish', 14, 'sports', '2014-04-22', 14, 5),
('manish', 16, 'sports', '2014-04-22', 15, 5),
('manish', 17, 'sports', '2014-04-22', 16, 5),
('manish', 18, 'music', '2014-04-22', 17, 8),
('manish', 20, 'music', '2014-04-22', 18, 8),
('manish', 21, 'music', '2014-04-22', 19, 8),
('mky', 12, 'sports', '2014-04-22', 12, 1),
('mky', 13, 'sports', '2014-04-22', 13, 1),
('mky', 14, 'sports', '2014-04-22', 14, 1),
('mky', 16, 'sports', '2014-04-22', 15, 1),
('mky', 17, 'sports', '2014-04-22', 16, 1),
('mky', 18, 'music', '2014-04-22', 17, 2),
('mky', 20, 'music', '2014-04-22', 18, 2),
('mky', 21, 'music', '2014-04-22', 19, 2),
('r', 22, 'music', '2014-04-23', 20, 1),
('r', 23, 'music', '2014-04-23', 21, 1),
('r', 27, 'music', '2014-04-23', 22, 1),
('r', 28, 'sports', '2014-04-23', 23, 1),
('r', 29, 'sports', '2014-04-23', 24, 1),
('r', 30, 'sports', '2014-04-23', 25, 1),
('r', 31, 'literature', '2014-04-23', 26, 1),
('r', 33, 'art', '2014-04-23', 27, 1),
('r', 35, 'industry', '2014-04-23', 28, 1),
('r', 37, 'history', '2014-04-23', 29, 1),
('r', 38, 'sports', '2014-04-23', 30, 1),
('r', 39, 'history', '2014-04-23', 31, 1),
('r', 40, 'sports', '2014-04-23', 32, 1),
('rajan', 1, 'music', '2014-04-16', 1, 1),
('rajesh', 7, 'music', '2014-04-18', 7, 1),
('rajesh', 8, 'music', '2014-04-18', 8, 1),
('rajesh', 9, 'music', '2014-04-18', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_performance`
--

CREATE TABLE IF NOT EXISTS `quiz_performance` (
  `userid` varchar(250) NOT NULL,
  `quiz_no` int(11) NOT NULL,
  `performance` float(10,0) NOT NULL,
  PRIMARY KEY (`userid`,`quiz_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_performance`
--

INSERT INTO `quiz_performance` (`userid`, `quiz_no`, `performance`) VALUES
('dharani', 1, 100),
('dharani', 2, 50),
('dharani', 3, 0),
('dharani', 4, 0),
('dharani', 5, 0),
('dharani', 6, 50),
('dharani', 7, 100),
('dharani', 8, 100),
('dharani', 9, 100),
('dharani', 10, 75),
('dharani', 11, 75),
('dharani', 12, 50),
('dharani', 13, 100),
('dharani', 14, 100),
('dharani', 15, 100),
('dharani', 16, 50),
('dharani', 17, 50),
('dharani', 18, 50),
('dharani', 19, 75),
('dharani', 20, 25),
('dharani', 21, 25),
('dharani', 22, 25),
('dharani', 23, 25),
('dharani', 24, 25),
('dharani', 25, 25),
('dharani', 26, 25),
('dharani', 27, 75),
('dharani', 28, 100),
('dharani', 29, 75),
('dharani', 30, 75),
('dharani', 31, 83),
('dharani', 32, 83),
('dharani', 33, 67),
('dharani', 34, 67),
('dharani', 35, 67),
('dharani', 36, 50),
('dharani', 37, 67),
('dharani', 38, 67),
('dharani', 39, 67),
('dharani', 40, 67),
('dharani', 41, 67),
('dharani', 42, 0),
('dharani', 43, 67),
('dharani', 44, 0),
('dharani', 45, 0),
('dharani', 46, 0),
('dharani', 47, 0),
('dharani', 48, 0),
('dharani', 49, 0),
('dharani', 50, 67),
('dharani', 51, 67),
('dharani', 52, 50),
('dharani', 53, 0),
('dharani', 54, 0),
('dharani', 55, 83),
('dharani', 56, 67),
('dharani', 57, 0),
('dharani', 58, 0),
('dharani', 59, 100),
('dharani', 60, 0),
('dharani', 61, 83),
('dharani', 62, 0),
('dharani', 63, 100),
('dharani', 64, 100),
('dharani', 65, 83),
('dharani', 66, 50),
('dharani', 67, 33),
('dharani', 68, 50),
('dharani', 69, 100),
('dharani', 70, 50),
('dharani', 71, 0),
('dharani', 72, 67),
('dharani', 73, 100),
('dharani', 74, 100),
('dharani', 75, 83),
('dharani', 76, 100),
('dharani', 77, 0),
('dharani', 78, 67),
('dharani', 79, 0),
('dharani', 80, 83),
('dharani', 81, 0),
('dharani', 82, 83),
('dharani', 83, 83),
('dharani', 84, 100),
('dharani', 85, 100),
('dharani', 86, 67),
('dharani', 87, 67),
('dharani', 88, 79),
('dharani', 89, 21),
('dharani', 90, 21),
('dharani', 91, 21),
('dharani', 92, 21),
('dharani', 93, 21),
('dharani', 94, 70),
('dharani', 95, 40),
('dharani', 96, 40),
('dharani', 97, 20),
('dharani', 98, 0),
('dharani', 99, 0),
('dharani', 100, 0),
('dharani', 101, 0),
('dharani', 102, 20),
('dharani', 103, 50),
('dharani', 104, 50),
('dharani', 105, 50),
('dharani', 106, 30),
('jetti', 1, 67),
('jetti', 2, 67),
('jetti', 3, 67),
('manish', 1, 0),
('manish', 2, 40),
('mky', 1, 0),
('r', 1, 60),
('rajan', 1, 0),
('rajan', 2, 0),
('rajan', 3, 0),
('rajesh', 1, 67),
('rajesh', 2, 100),
('rajesh', 3, 33);

-- --------------------------------------------------------

--
-- Table structure for table `science_events`
--

CREATE TABLE IF NOT EXISTS `science_events` (
  `Event_id` int(250) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `age_gp_id` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `year` year(4) NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `opt1` varchar(250) NOT NULL,
  `opt2` varchar(250) NOT NULL,
  `opt3` varchar(250) NOT NULL,
  `opt4` varchar(250) NOT NULL,
  PRIMARY KEY (`Event_id`,`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sports_events`
--

CREATE TABLE IF NOT EXISTS `sports_events` (
  `Event_id` int(250) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `age_gp_id` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `year` year(4) NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `opt1` varchar(250) NOT NULL,
  `opt2` varchar(250) NOT NULL,
  `opt3` varchar(250) NOT NULL,
  `opt4` varchar(250) NOT NULL,
  PRIMARY KEY (`Event_id`,`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `agegp` varchar(50) DEFAULT NULL,
  `user_gp_id` int(11) NOT NULL,
  `visit_count` int(11) NOT NULL,
  PRIMARY KEY (`userid`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `agegp`, `user_gp_id`, `visit_count`) VALUES
('aayush', 'aayush', 'fiftothirty', 2, 1),
('asd', 'asd', 'below15', 1, 1),
('dharani', 'dharani', 'fiftothirty', 2, 78),
('jetti', 'srikanth', 'fiftothirty', 2, 22),
('manish', 'manish', 'fiftothirty', 2, 16),
('mky', 'mky', 'fiftothirty', 2, 9),
('r', 'r', 'fiftothirty', 2, 8),
('rajan', 'jaguar', 'below15', 1, 25),
('rajesh', '123', 'fiftothirty', 2, 23),
('reshma', 'thakur', 'above30', 3, 0),
('suresh', 'patidar', 'below15', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
