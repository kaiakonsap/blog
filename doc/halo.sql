-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2013 at 11:34 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `halo`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_text` text NOT NULL,
  `comment_author` varchar(225) DEFAULT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_text`, `comment_author`, `post_id`, `comment_time`, `deleted`) VALUES
(1, 'cviohzvciohds"OIghE*"O', 'uvhfu', 39, '2013-09-26 12:17:22', 0),
(2, 'cviohzvciohds"OIghE*"O', 'uvhfu', 39, '2013-09-26 18:06:48', 0),
(3, 'v gvyud', 'cudh', 40, '2013-09-30 19:43:00', 0),
(4, 'cjhcvxj ', 'hcdjhc', 45, '2013-09-30 19:48:01', 0),
(5, 'hcvchcvh', 'vjvj', 40, '2013-09-30 19:48:21', 0),
(6, 'jfxjvf', 'jdvvh', 46, '2013-09-30 19:48:43', 0),
(7, 'millin komm??', '1', 39, '2013-10-01 08:54:49', 0),
(8, 'millin komm??', 'demo', 39, '2013-10-01 08:59:14', 0),
(9, 'uus komm proovime', 'demo', 39, '2013-10-01 08:59:25', 0),
(10, 'miskajsnj?', 'anonymous', 44, '2013-10-01 09:00:23', 0),
(11, 'miskajsnj?', 'anonymous', 44, '2013-10-01 09:01:08', 0),
(12, 'miskajsnj?', 'anonymous', 44, '2013-10-01 09:05:56', 0),
(13, 'miskajsnj?', 'anonymous', 44, '2013-10-01 09:07:21', 0),
(14, 'cjcj', 'anonymous', 48, '2013-10-01 09:20:36', 0),
(15, 'dima', 'anonymous', 39, '2013-10-01 09:29:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `post_subject` varchar(255) NOT NULL,
  `post_text` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_edit_time` timestamp NULL DEFAULT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_subject`, `post_text`, `post_time`, `post_edit_time`, `deleted`) VALUES
(38, 1, 'cccc', 'xx', '2013-07-24 19:04:58', NULL, 1),
(39, 2, 'hei', 'maa', '2013-07-24 19:05:13', NULL, 0),
(40, 1, 'pealkiri1', 'Palju teksti sulle lugemiseks, ma muutsin natuke', '2013-07-24 19:10:19', '2013-07-24 19:10:59', 0),
(41, 1, 'pealkiri2', 'tag on vigane', '2013-07-24 19:12:13', NULL, 1),
(42, 2, 'katkine', 'lisAN', '2013-07-24 19:13:20', NULL, 1),
(43, 1, 'tere', 'kere', '2013-07-24 19:14:42', NULL, 1),
(44, 1, 'pealkiri100', 'this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"', '2013-07-30 15:06:24', NULL, 0),
(45, 2, 'pealkiri100', 'fhvfcjvnfjvk', '2013-07-30 15:07:30', NULL, 0),
(46, 1, 'hfyf', 'ggggg', '2013-09-12 08:18:58', NULL, 0),
(47, 2, 'jbg', 'hghg', '2013-09-12 08:19:17', NULL, 0),
(48, 1, 'mj', 'bhhh', '2013-09-12 08:19:41', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
CREATE TABLE IF NOT EXISTS `post_tags` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `post_id_2` (`post_id`,`tag_id`),
  KEY `tag_id` (`tag_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`) VALUES
(46, 18),
(48, 18),
(39, 19),
(48, 19),
(47, 20),
(48, 20),
(40, 21),
(40, 22),
(44, 23),
(44, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(18, 'tere'),
(19, 'kosmos'),
(20, 'tag1'),
(21, 'tag2'),
(22, 'tag3'),
(23, 'kujundus'),
(24, 'paranda'),
(28, 'kujundus'),
(29, 'paranda'),
(30, 'varsti'),
(31, 'piinlik'),
(32, 'kole');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `deleted`) VALUES
(1, 'demo', 'demo', 0),
(2, 'demo2', 'demo2', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `post_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`);
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
