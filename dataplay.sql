-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2019 at 03:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataplay`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `entry_id` int(11) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_body` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `entry_id`, `comment_name`, `comment_email`, `comment_body`, `comment_date`) VALUES
(1, 1, 'Ashish', 'ashksin121@gmail.com', 'Test purpose done successfullt!!', '2019-11-09 19:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(32) NOT NULL,
  `course_author` varchar(32) NOT NULL,
  `course_description` varchar(32) NOT NULL,
  `course_rating` varchar(32) NOT NULL,
  `link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_author`, `course_description`, `course_rating`, `link`) VALUES
(1, 'Introduction to Statistics', 'Nishant Gupta', 'Desc1', '4.5', 'statistics'),
(2, 'Machine Learning', 'Nishant Gupta', 'Desc2', '4.5', 'ml'),
(3, 'Deep Learning', 'Nishant Gupta', 'Desc3', '4.5', 'dl');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `user_id` varchar(32) DEFAULT NULL,
  `course_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`user_id`, `course_id`) VALUES
('1f3e84d29ce8e3fdad3d6867ba7b3c1b', 3),
('317ab7c66326bf3690e9201998d05e6a', 2),
('317ab7c66326bf3690e9201998d05e6a', 3),
('a19359d19f56997f6b9e4b6abac2ca2d', 1),
('a19359d19f56997f6b9e4b6abac2ca2d', 3),
('d23f67088519c7660fe7c1740e2289f0', 1),
('d23f67088519c7660fe7c1740e2289f0', 2);

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `entry_id` int(11) NOT NULL,
  `entry_name` varchar(255) NOT NULL,
  `entry_body` text NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entry_id`, `entry_name`, `entry_body`, `entry_date`) VALUES
(1, 'DEMO', 'testing', '2019-11-05 02:50:48'),
(2, 'Actual Demo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel felis vestibulum, venenatis tellus in, mattis nisl. Proin lectus tortor, pulvinar at nisi nec, tempor lobortis mauris. Vestibulum molestie nisl in ante vehicula, sit amet sagittis sem luctus. Aenean laoreet urna quis ipsum scelerisque bibendum. Aenean non augue condimentum, rutrum magna eget, vestibulum eros. Ut velit magna, efficitur eu pulvinar sed, egestas eu magna. Mauris vulputate maximus nisl, eu volutpat augue placerat eu. Aliquam erat volutpat. Quisque accumsan augue eu urna efficitur, ac commodo ipsum egestas. Ut tincidunt metus in diam facilisis consectetur. Aenean at venenatis est. Vestibulum varius, dolor id ullamcorper dictum, enim magna venenatis enim, id pretium magna nunc at mauris. Ut iaculis nisl nec odio ornare viverra a posuere metus. Phasellus mauris magna, tempor vitae elit nec, fringilla sodales diam. Phasellus purus felis, rhoncus at tempor id, accumsan ornare leo.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Ut placerat vel metus eget fringilla. Vivamus sed libero sed nisi imperdiet rutrum. Pellentesque eu purus felis. Curabitur ut hendrerit metus. Donec augue tortor, egestas et dui in, laoreet ultrices magna. Donec bibendum pellentesque ante, eget porttitor diam dapibus ac. Ut rutrum imperdiet sem, sed sodales nisi placerat quis.\r\n\r\nMorbi scelerisque varius enim, et consectetur lectus tempus vel. Integer at porta elit. Ut efficitur, arcu a pharetra lobortis, lacus libero pretium ligula, vel tristique tellus quam vitae ipsum. Cras purus elit, volutpat vitae nibh nec, lobortis ultrices felis. Aliquam quis nibh viverra, porta eros eget, blandit quam. Sed varius eu nibh sed rhoncus. Nunc tincidunt, enim nec aliquet aliquet, neque massa ultricies diam, quis rutrum enim libero quis elit. In porta placerat turpis, id malesuada tellus consequat ut. Sed quis ullamcorper massa. Ut molestie elit dolor, egestas vehicula lacus elementum ut. Donec molestie hendrerit tellus, semper iaculis arcu interdum fermentum. Duis at nunc imperdiet, facilisis metus rhoncus, posuere augue. Suspendisse potenti.\r\n\r\nDonec et nisi eu sem lobortis malesuada eu vitae quam. Praesent quis massa dui. Pellentesque quis elit ornare, molestie lectus ac, commodo est. Curabitur quis dui ligula. Proin ullamcorper orci tortor, quis auctor tortor ullamcorper ac. Maecenas tincidunt blandit rhoncus. Praesent laoreet augue vitae nulla dignissim, id mattis libero sodales. Maecenas neque orci, consectetur non suscipit in, sagittis at mauris. Ut vehicula lorem et velit pharetra pulvinar. Phasellus tristique nisl et lacus rhoncus, in pellentesque mauris vulputate. Ut tincidunt mauris in ante venenatis egestas. Integer at elementum turpis. Maecenas tincidunt lacinia vehicula. Vivamus eu scelerisque magna.\r\n\r\nEtiam mi justo, egestas sed tortor in, accumsan porttitor justo. Etiam commodo convallis augue eu iaculis. Suspendisse ut rutrum nibh, efficitur varius leo. Sed semper ex id vehicula tristique. Aenean finibus odio quam. Vestibulum dignissim scelerisque arcu, eu pellentesque metus facilisis sit amet. Nulla magna libero, mattis nec erat id, luctus sagittis augue. Suspendisse commodo vitae eros at maximus. Suspendisse in cursus nulla. Aenean magna metus, mattis quis nisl id, eleifend hendrerit ligula. Etiam efficitur sem sit amet dui tempus, vel volutpat ex aliquet. Phasellus maximus odio urna, a porttitor nulla porta id. Proin ultricies quis augue quis lacinia. Etiam viverra ligula at mauris porttitor dapibus.', '2019-11-06 11:15:20'),
(3, 'udsvnjsdnvjsndvj', 'jefnjsenfjsnfjsnfikjsndifukjsnifj', '2019-11-07 11:23:03'),
(4, 'udsvnjsdnvjsndvj', 'jefnjsenfjsnfjsnfikjsndifukjsnifj', '2019-11-07 11:23:13'),
(5, 'Hello World', '', '2019-11-07 11:24:22'),
(6, 'Hello World', 'Blog sent from site', '2019-11-07 11:24:51'),
(7, 'another one', 'hello feom the other side', '2019-11-07 11:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `link_id` int(24) NOT NULL,
  `course` varchar(32) NOT NULL,
  `link` varchar(500) NOT NULL,
  `link_text` varchar(100) NOT NULL,
  `link_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`link_id`, `course`, `link`, `link_text`, `link_description`) VALUES
(1, 'ml', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ukzFI9rgwfU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.  Praesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(2, 'ml', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GwIo3gDZCVQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.  Praesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(3, 'ml', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9f-GarcDY58\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.  Praesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(4, 'ml', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JMUxmLyrhSk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.  Praesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(5, 'ml', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/E5RjzSK0fvY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.  Praesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(6, 'dl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-E2N1kQc8MM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(7, 'dl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ukzFI9rgwfU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(8, 'dl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6M5VXKLf4D4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(9, 'dl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/DooxDIRAkPA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(10, 'dl', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GwIo3gDZCVQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(11, 'stats', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0r2o2Okpt3A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(12, 'stats', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xxpc-HPKN28\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(13, 'stats', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/74oUwKezFho\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(14, 'stats', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YGObRCEZiC8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.'),
(15, 'stats', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XcLO4f1i4Yo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Video 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus dui quis turpis ultricies hendrerit. Duis quis eros a massa eleifend posuere vel non nulla. Nam at justo porttitor ipsum fringilla faucibus quis eu metus. In a aliquet tortor. Pellentesque a vestibulum odio. Phasellus sapien tortor, dictum ut finibus vitae, finibus quis arcu. Phasellus ornare, dui nec fringilla consectetur, odio metus viverra metus, sit amet fringilla urna urna vitae tellus. Nunc dapibus euismod massa nec vestibulum.\r\n\r\nPraesent mattis egestas eros at hendrerit. In varius consequat dolor non tempor. Donec eu mollis elit, eu placerat magna. Proin at nisl sed nunc mollis laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non dignissim nunc. In hac habitasse platea dictumst.');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, 'Introduction to Statistics', 'partner_1.png', 1.00, '1'),
(2, 'Machine Learning', 'partner_2.png', 25.00, '1'),
(3, 'Deep Learning', 'partner_2.png', 1.00, '1');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `user_first_id` int(12) NOT NULL,
  `user_second_id` varchar(32) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `sname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `user_type` varchar(11) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`user_first_id`, `user_second_id`, `fname`, `sname`, `email`, `password`, `user_type`) VALUES
(1, 'a19359d19f56997f6b9e4b6abac2ca2d', 'Kaus', 'Pathak', 'kaus.pathak@gmail.com', '76c430e61c7451d25d214f0367593bb464e5010db6ee79e81122df60f8947b03', 'user'),
(2, 'd23f67088519c7660fe7c1740e2289f0', 'Ashish', 'Singh', 'ashksin121@gmail.com', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', 'user'),
(3, '1f3e84d29ce8e3fdad3d6867ba7b3c1b', 'Demo', 'Demo', 'demo@demo.com', '2a97516c354b68848cdbd8f54a226a0a55b21ed138e207ad6c5cbb9c00aa5aea', 'user'),
(4, '317ab7c66326bf3690e9201998d05e6a', 'Test', 'Test', 'test@test.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD UNIQUE KEY `user_id` (`user_id`,`course_id`);

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`user_first_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `link_id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `user_first_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
