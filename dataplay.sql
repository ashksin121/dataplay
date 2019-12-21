-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2019 at 08:45 AM
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
(8, 11, 'Jane', 'ashishkirtis@gmail.com', 'Awesomeeee Blog <3\r\n', '2019-12-21 07:32:56'),
(9, 11, 'John', 'ashksin121@gmail.com', 'The blog sucks!!!!!!!!', '2019-12-21 07:33:39'),
(10, 12, 'John', 'ashksin121@gmail.com', 'Now this is lit!!!!!\r\n', '2019-12-21 07:34:48');

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
  `link` varchar(50) DEFAULT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_author`, `course_description`, `course_rating`, `link`, `price`) VALUES
(1, 'Introduction to Statistics', 'Nishant Gupta', 'Desc1', '4.5', 'statistics', 1500),
(2, 'Machine Learning', 'Nishant Gupta', 'Desc2', '4.5', 'ml', 2500),
(3, 'Deep Learning', 'Nishant Gupta', 'Desc3', '4.5', 'dl', 700);

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
('0757c222db505441a3cabb601b95d62c', 3),
('0ae3fd1c2de52680d87ed049293c2907', 1),
('0ae3fd1c2de52680d87ed049293c2907', 2),
('0ae3fd1c2de52680d87ed049293c2907', 3);

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `entry_id` int(11) NOT NULL,
  `entry_name` varchar(255) NOT NULL,
  `entry_body` text NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rating` float NOT NULL DEFAULT 0,
  `count` int(32) NOT NULL DEFAULT 0,
  `sum` int(32) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entry_id`, `entry_name`, `entry_body`, `entry_date`, `rating`, `count`, `sum`) VALUES
(11, 'Jane Doe', '\"John Doe\" (for males) and \"Jane Doe\" (for females) are multiple-use names that are used when the true name of a person is unknown or is being intentionally concealed.In the context of law enforcement in the United States, such names are often used to refer to a corpse whose identity is unknown or unconfirmed. Secondly, such names are also often used to refer to a hypothetical \"everyman\" in other contexts, in a manner similar to \"John Q. Public\" or \"Joe Public\". There are many variants to the above names, including \"John Roe\", \"Richard Roe\", \"Jane Roe\" and \"Baby Doe\", \"Janie Doe\" or \"Johnny Doe\" (for children)', '2019-12-21 07:32:11', 3.5, 2, 7),
(12, 'Digital Fortress', 'When the United States National Security Agency\'s code-breaking supercomputer TRANSLTR encounters a revolutionary new code, Digital Fortress, that it cannot break, Commander Trevor Strathmore calls in head cryptographer Susan Fletcher to crack it. She is informed by Strathmore that it was written by Ensei Tankado, a former NSA employee who became displeased with the NSA\'s intrusion into people\'s private lives. If the NSA doesn\'t reveal TRANSLTR to the public, Tankado intends to auction the code\'s algorithm on his website and have his partner, \"North Dakota\", release it for free if he dies, essentially holding the NSA hostage. Strathmore tells Susan that Tankado in fact died in Seville, of what appears to be a heart attack which he is intend to keep a secret because if Tankado\'s partner finds that he will upload the code. The agency is determined to stop Digital Fortress from becoming a threat to national security.', '2019-12-21 07:34:33', 4, 1, 4);

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
  `price` int(5) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, 'Introduction to Statistics', 'partner_1.png', 1500, '1'),
(2, 'Machine Learning', 'partner_2.png', 2500, '1'),
(3, 'Deep Learning', 'partner_2.png', 700, '1');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `user_id` varchar(32) NOT NULL,
  `post_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`user_id`, `post_id`) VALUES
('0757c222db505441a3cabb601b95d62c', 11),
('0ae3fd1c2de52680d87ed049293c2907', 11),
('0ae3fd1c2de52680d87ed049293c2907', 12);

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
  `user_type` varchar(11) NOT NULL DEFAULT 'user',
  `is_verified` int(1) NOT NULL DEFAULT 0,
  `hash` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`user_first_id`, `user_second_id`, `fname`, `sname`, `email`, `password`, `user_type`, `is_verified`, `hash`) VALUES
(18, '0ae3fd1c2de52680d87ed049293c2907', 'John', 'Doe', 'ashksin121@gmail.com', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', 'user', 1, '07a96b1f61097ccb54be14d6a47439b0'),
(19, '0757c222db505441a3cabb601b95d62c', 'Jane', 'Doe', 'ashishkirtis@gmail.com', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5', 'user', 1, '3416a75f4cea9109507cacd8e2f2aefc');

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`user_id`,`post_id`);

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `user_first_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
