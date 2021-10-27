-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 05:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorey`
--

CREATE TABLE `categorey` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1025) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorey`
--

INSERT INTO `categorey` (`id`, `name`, `description`, `created`) VALUES
(1, 'Python', 'Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures, combined with dynamic typing and dynamic binding, make it very attractive for Rapid Application Development, as well as for use as a scripting or glue language to connect existing components together. Python\'s simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance. Python supports modules and packages, which encourages program modularity and code reuse. The Python interpreter and the extensive standard library are available in source or binary form without charge for all major platforms, and can be freely distributed.', '2021-10-01 11:00:09'),
(2, 'Javascript', 'JavaScript is a scripting or programming language that allows you to implement complex features on web pages — every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies, two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area..JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else. (Okay, not everything, but it is amazing what you can achieve with a few lines of JavaScript code.)', '2021-10-01 11:20:11'),
(3, 'Wordpress', ' WordPress is the simplest, most popular way to create your own website or blog. In fact, WordPress powers over 40.0% of all the websites on the Internet. Yes – more than one in four websites that you visit are likely powered by WordPress.\r\n\r\nTry a free demo\r\nOn a slightly more technical level, WordPress is an open-source content management system licensed under GPLv2, which means that anyone can use or modify the WordPress software for free. A content management system is basically a tool that makes it easy to manage important aspects of your website – like content – without needing to know anything about programming.\r\n\r\nThe end result is that WordPress makes building a website accessible to anyone – even people who aren’t developers.', '2021-10-01 11:20:46'),
(4, 'php', 'PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994.\r\n\r\nPHP is a recursive acronym for \"PHP: Hypertext Preprocessor\".\r\n\r\nPHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.\r\n\r\nIt is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.\r\n\r\nPHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time.\r\n\r\nPHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time.\r\n\r\nPHP Syntax is C-Like.', '2021-10-09 13:03:08'),
(5, 'github', 'GitHub is a web-based interface that uses Git, the open source version control software that lets multiple people make separate changes to web pages at the same time. As Carpenter notes, because it allows for real-time collaboration, GitHub encourages teams to work together to build and edit their site content.\r\nGitHub allows multiple developers to work on a single project at the same time, reduces the risk of duplicative or conflicting work, and can help decrease production time. With GitHub, developers can build code, track changes, and innovate solutions to problems that might arise during the site development process simultaneously. Non-developers can also use it to create, edit, and update website content, which Carpenter demonstrates in her tutorial.', '2021-10-09 13:03:52'),
(6, 'Mysql', 'MySQL is an Oracle-backed open source relational database management system (RDBMS) based on Structured Query Language (SQL). MySQL runs on virtually all platforms, including Linux, UNIX and Windows. Although it can be used in a wide range of applications, MySQL is most often associated with web applications and online publishing.\r\n\r\nMySQL is an important component of an open source enterprise stack called LAMP. LAMP is a web development platform that uses Linux as the operating system, Apache as the web server, MySQL as the relational database management system and PHP as the object-oriented scripting language. (Sometimes Perl or Python is used instead of PHP.)\r\n\r\nOriginally conceived by the Swedish company MySQL AB, MySQL was acquired by Sun Microsystems in 2008 and then by Oracle when it bought Sun in 2010. Developers can use MySQL under the GNU General Public License (GPL), but enterprises must obtain a commercial license from Oracle.\r\n\r\nToday MySQL is the RDBMS behind many of the top websites in the world', '2021-10-09 13:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(255) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(255) NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(10, 'how to use python', 2, '26', '2021-10-12 13:31:19'),
(34, 'hello123', 1, '28', '2021-10-23 11:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(8) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Msg` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Phone`, `Msg`, `time`) VALUES
(1, 'kk', 'h@h.com', 1234567890, 'HH', '2021-10-25 11:55:41'),
(2, 'vansh', 'hacker181@gmail.com', 1234567890, 'bye bye', '2021-10-25 11:57:24'),
(10, 'pooja', 'p@p.com', 2147483647, 'fdgkjdgf ', '2021-10-25 12:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `title`, `description`, `cat_id`, `user_id`, `time`) VALUES
(1, 'Windows command line to python', 'You can access Python in the Command Line by just typing python , python3 , or python3. 7 , python3.', '1', 26, '2021-10-09 11:56:11'),
(2, 'exception handling in python', 'Python object that represents an error. Python provides a way to handle the exception so that the code can be executed without any interruption', '1', 27, '2021-10-09 12:55:03'),
(11, 'Passing flask textbox value to an infinite while loop', '', '1', 28, '2021-10-12 10:39:26'),
(13, '	 How to login using PDO', '', '4', 26, '2021-10-12 15:39:12'),
(14, 'Issue with $_COOKIE', '', '4', 26, '2021-10-12 15:39:42'),
(15, 'WordPress/Advanced Custom Fields/ PHP Random Help', '', '4', 27, '2021-10-12 15:40:17'),
(16, 'Javascript for game developement path', 'hrej d;safkj dfkl d;fdkslfj ', '2', 27, '2021-10-12 15:41:15'),
(17, 'Script working in Firefox but not Chrome and Safari', '', '2', 28, '2021-10-12 15:41:41'),
(18, 'Trying to get JSON data from API into HTML table', '', '2', 28, '2021-10-12 15:42:24'),
(19, 'Connecting a database to Website', '', '6', 26, '2021-10-12 15:43:33'),
(45, 'gh', 'gh', '1', 28, '2021-10-24 12:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` text NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `pass`, `cpass`, `time`) VALUES
(26, 'john', 'anonymous58007@gmail.com', '$2y$10$f4lV85mJvpX5cAkTiipyfuzKMA1FsUVdomooRy3w.1rl9z.GDVHdG', '$2y$10$6cFLKYUDRuBSMvAUC1pATu0OjtMSX0EWiME8HvmbzrXloDqkCIkuy', '2021-10-19 13:49:36'),
(27, 'vansh', 'Aymous58007@gmail.com', '$2y$10$YERlGPPh7A.eKopaVIl.zekO0K7Qz2g4lrH40jEsq9PBGu4BQJ0mS', '$2y$10$mCdJJM50MhsaMp9eKzcoheGrNV.XbWNotaIQDSzzcylGVQSEroYpu', '2021-10-20 13:08:28'),
(28, 'harry', 'h@h.com', '$2y$10$H7Wxw7cfiVcQ55GkfhCXPuXEpJFjaI5coqWYVXHzqG8lk1vFAWfr2', '$2y$10$zwMdNuMntTgC5n0MCxrVAuMcvvmdizubCokQC6qoDKbyD7aPUbG3u', '2021-10-20 13:44:52'),
(29, 'naitik', 'n@n.com', '$2y$10$TUtd5iV0NLhQJ.FCk0pVm.bWnNrzQrbyQx6Mfi3nf10OwbGgk7xgu', '$2y$10$KopqHhT1aadfDWK2/y62ButfsUkNRy39fDO2JQ7ffxFmHTkOpTgoC', '2021-10-23 11:26:18'),
(30, 'vansh', 'v@v.com', '$2y$10$MUedUeiDaaIsTxUy6G4bJe83BXhklGslphkA3DUsRJaWH0yI9Aphe', '$2y$10$WfhTpbrDGTjS/8pqTDpE/uRXtSBdXx/c3IvoOsUWTmp7EFOmUUfRm', '2021-10-23 18:17:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorey`
--
ALTER TABLE `categorey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `title` (`title`,`description`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorey`
--
ALTER TABLE `categorey`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
