-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 07:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

--
-- practise
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'ashraf', 'ashraf'),
(2, 'saidy', 'saidy');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'World News'),
(2, 'Asia News'),
(3, 'Sports'),
(4, 'Showbiz'),
(5, 'Politics'),
(6, 'Cricket'),
(7, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_text` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_text`, `status`) VALUES
(1, 9, 'ashraf', 'ashraf@gmail.com', 'Hi,this  test  comment.', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_date` text NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_keywords` text NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `post_title`, `post_date`, `post_author`, `post_keywords`, `post_image`, `post_content`) VALUES
(6, 3, 'Great great great! Stunning win helps West Indies smile again', '04-01-16', 'saidy.', 'World,News,Bangladesh,Asia,india.', 'bangladesh.jpg', '<p><font style="font-size: 1.2em;">West Indies captain Darren Sammy said he hopes to help Caribbean fans smile again by completing a unique hat-trick at the World Twenty20 after stunning India to reach the final.</font></p>\r\n<p>&nbsp;</p>'),
(7, 3, 'Great great great! Stunning win helps West Indies smile again', '04-01-16', 'Ashraf', 'Australia,West indies,cricket.', 'test.jpg', '<p><font style="font-size: 1.2em;">West Indies captain Darren Sammy said he hopes to help Caribbean fans smile again by completing a unique hat-trick at the World Twenty20 after stunning India to reach the final.After the West Indies won the Under-19 World Cup in February, a double victory in Kolkata on Sunday would seal an unprecedented treble and hint at a cricketing revival for the islands after years of decline.</font></p>'),
(8, 1, 'President Obama to Visit Saudi Arabia in April ', '04-03-16', 'joh doe.', 'Obama,world news,saudi,aribia.', 'barack.jpg', '<p>WASHINGTON&mdash;President <a href="http://topics.wsj.com/person/O/Barack-Obama/4328">Barack Obama</a> will travel to Saudi Arabia next month for a summit with Gulf Arab leaders, the White House said Wednesday, offering them a chance to repair relations strained by last year&rsquo;s nuclear deal with Iran.</p>\r\n<p>The summit with the Gulf Cooperation Council follows one Mr. Obama hosted last year at Camp David in an attempt to ease concerns among U.S. allies over the Iran deal. This year&rsquo;s summit will take place on April 21.</p>\r\n<p>Mr. Obama will also visit Germany and the U.K. in April. While in London, Mr. Obama will meet with Queen Elizabeth II and Prime Minister <a href="http://topics.wsj.com/person/C/David-Cameron/5940">David Cameron</a>. In Germany, he is scheduled to attend the Hannover industrial-technology trade show and meet with Chancellor <a href="http://topics.wsj.com/person/M/Angela-Merkel/5351">Angela Merkel</a>.</p>'),
(9, 2, 'Modi govt will stop infiltration from Bangladesh into Assam: Rajnath Singh', '04-03-16', 'sumon', 'modi,asia,news,bangladesh,assam.', 'rajnathsingh.jpg', '<p><strong>Duliajan, Assam:</strong> Accusing the Congress government in Assam of having failed to stop infiltration from Bangladesh, home minister Rajnath Singh on Wednesday said that the NDA government at the Centre will completely seal the India-Bangladesh border to stop intrusion.</p>\n<p>&ldquo;Intruders have been continuously entering India since the day Bangladesh was created. Bangladeshi intruders are coming to India through the India-Bangladesh border. What is the reason, why didn&rsquo;t you (Congress) stop them? Why didn&rsquo;t you completely seal the India-Bangladesh border?&rdquo; he asked at an election rally in Duliajan.</p>\n<p>Highlighting the steps taken by his government in this regard, Singh said that a few months ago he had visited the India-Bangladesh border and held &ldquo;talks with the Bangladesh government&rdquo;. &ldquo;We just need some time and we will seal the India-Bangladesh border completely so that no Bangladesh intruder can come in,&rdquo; he said.</p>'),
(10, 3, 'Ronaldo the hero as Real Madrid beats Barcelona 2-1 in El Clasico', '04-03-16', 'Hasan.', 'Ronaldo,real  madrid,barcelona,sport,news.', 'real.jpg', '<p>The video, which will be part of the film too, will feature an item number sung by Babul and composed by Samidh and will be shot in the first week of September. "Yes, I will be going to Sri Lanka to shoot the video. The song goes like, Puchki baby and is quite peppy . I really thank my fans for not distinguis</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
