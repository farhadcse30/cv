-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2013 at 11:25 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user`, `intro`, `modified`) VALUES
(1, 1, 'You can call me at any time on +44 (0) 7926569744', '2013-03-24 19:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user`, `intro`, `modified`) VALUES
(1, 1, 'I have completed my graduation in Computer Science and Engineering.', '2013-03-24 18:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `education_history`
--

CREATE TABLE IF NOT EXISTS `education_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `education_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startdate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enddate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `result` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptions` text COLLATE utf8_unicode_ci,
  `display_order` int(11) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `education_id_idx` (`education_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `education_history`
--

INSERT INTO `education_history` (`id`, `education_id`, `title`, `level`, `duration`, `startdate`, `enddate`, `result`, `descriptions`, `display_order`, `modified`) VALUES
(1, 1, 'Diploma in Engineering', 'Diploma', '4 years', 'October 2001', 'March 2006', 'First Class', 'Awarded by BTEB', 1, '2013-03-24 23:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE IF NOT EXISTS `hobbies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `intro` text COLLATE utf8_unicode_ci,
  `hobbies` text COLLATE utf8_unicode_ci,
  `interests` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '1',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `user`, `intro`, `hobbies`, `interests`, `status`, `modified`) VALUES
(1, 1, 'I like to visit world heritages.', 'visit new places, watching movies', 'plying cricket, programing', 1, '2013-03-24 15:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `mywork`
--

CREATE TABLE IF NOT EXISTS `mywork` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mywork`
--

INSERT INTO `mywork` (`id`, `user`, `intro`, `modified`) VALUES
(1, 1, 'Currently I am working at University of London as an E-Learning Developer.', '2013-03-24 19:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `user`, `intro`, `description`, `modified`) VALUES
(1, 1, 'My name is Abdul Bashet. I am a citizen of Bangladesh. I grownup in a very old city Dhaka, which is currently capital city of Bangladesh.', 'I will write my whole life history here', '2013-03-24 19:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `user`, `intro`, `modified`) VALUES
(1, 1, 'I have done many projects while I was studying and also in my working period in different companies', '2013-03-25 21:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `project_history`
--

CREATE TABLE IF NOT EXISTS `project_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `project_of` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startdate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enddate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptions` text COLLATE utf8_unicode_ci,
  `contributer` text COLLATE utf8_unicode_ci,
  `url` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_order` int(11) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `work_id_idx` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project_history`
--

INSERT INTO `project_history` (`id`, `project_id`, `title`, `project_of`, `startdate`, `enddate`, `descriptions`, `contributer`, `url`, `display_order`, `modified`) VALUES
(1, 1, 'Moodle Plugin for turnitintool integration', 'SOAS and ULCC', '20-December-2012', '08-Feb-2013', 'This a plugin for moodle which enable SOAS to declare thousands of assessment for students submission over night and also cullect submitted assessments result in every night and export the results history in a sftp location.', 'Abdul Bashet', 'http://www.ulcc.ac.uk', 1, '2013-03-25 23:12:44'),
(2, 1, 'ePrints', 'UAL and ULCC', '20-Feb-2013', 'Runnig', 'The aim of this plugin is to deposit repository directly in to ePrints service (http://alto.arts.ac.uk) from UAL moodle. So all UAL staffs and students don''t have to upload and of their work porofolio multiple times.', 'Abdul Bashet', 'alto.arts.ac.uk', 2, '2013-03-25 23:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intro` text COLLATE utf8_unicode_ci,
  `pic` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastaccess` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `intro`, `pic`, `lastaccess`) VALUES
(1, 'bashet', 'Bashet01+', '<strong>E-Learning Developer at University of London</strong><br><br>A PHP, .NET, C# and JAVA Developer with 3 years of commercial experience across multiple industry sectors, predominantly Banking, Education and Software industry.<br><br>Exceptional design and development skills using a wide range of technologies, most notably .NET, PHP and related technologies. Possesses transferable skills developed on large scale projects and proficient in all aspects of the software development lifecycle (SDLC), with expertise in OO Design and Development, and experience with Agile methodologies.<br><br>Strong business acumen, thrives in diverse and challenging environments, as well as demonstrates a high-level of consistent achievement. Excellent client service skills grant the ability to liaise and negotiate at all levels.', 'images/profilepic.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_history`
--

CREATE TABLE IF NOT EXISTS `work_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `employer` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `startdate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enddate` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptions` text COLLATE utf8_unicode_ci,
  `display_order` int(11) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `work_id_idx` (`work_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `work_history`
--

INSERT INTO `work_history` (`id`, `work_id`, `title`, `employer`, `startdate`, `enddate`, `descriptions`, `display_order`, `modified`) VALUES
(1, 1, 'Maintenance Engineer', 'Southtech Ltd', '02-05-2006', '05-03-2009', 'Employed as Maintenance Engineer on May 2006 and was promoted to team leader in March 2008. There were total of 5 members in my team to provide direct IT and technical support to the clients of Southtech Limited.\r\n\r\nResponsibilities:\r\n*To lead an IT team of Maintenance Engineers.\r\n*Distribute tasks to engineers and provide enough guidelines to complete assigned tasks within dead line.\r\n*Provide motivation to my team members to finish their assigned task.\r\n*Observe my team members activities. \r\n*Prepare and submit task completion report assigned by my line manager.\r\n*Provide IT support and training to the external client of Southtech Limited.', 2, '2013-03-24 22:52:27'),
(2, 1, 'E-Learning Developer', 'University of London', '03-12-2012', 'Current', 'Employed to develop new efficient plugins for Virtual Learning Environment (VLE) such as Moodle. Develop new theme features and solve bugs from existing developments. Also create new features in Mahara (e-portfolio).\r\n\r\nResponsibilities:\r\n*Develop new plugins for Moodle.\r\n*Develop new theme features for Moodle.\r\n*Fix bugs from previously developed plugins of Moodle. \r\n*Create new plugins for integration of turnitintoll and eprints with moodle.\r\n*Create new plugins for Mahara 1.6.\r\n*Fix bugs from existing development in Mahara.\r\n*Add more features on Mahara artefact under resume section.\r\n*Participate in all phases of system life, including solution architecting and client review, spec and development of design documentation, deployment and testing of Moodle instances, custom theming of Moodle sites, loading customer eLearning content, and integration with web sites and other systems\r\n*Provide technical guidance and advice to project teams and decision-makers\r\n*Identify and communicate technical issues\r\n*Provide work breakdown and time estimates for projects, and manage technical implementations to such time and work estimates\r\n*Work directly with both customer personnel and colleagues on projects.\r\n', 1, '2013-03-24 22:55:07');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education_history`
--
ALTER TABLE `education_history`
  ADD CONSTRAINT `education_id` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_history`
--
ALTER TABLE `project_history`
  ADD CONSTRAINT `project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `work_history`
--
ALTER TABLE `work_history`
  ADD CONSTRAINT `work_id` FOREIGN KEY (`work_id`) REFERENCES `mywork` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
