-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 12:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `content`) VALUES
(3, 'Technology', 'Early blogs were simply manually updated components of common Websites. In 1995, the \"Online Diary\" on the Ty, Inc. Web site was produced and updated manually before any blogging programs were available. Posts were made to appear in reverse chronological order by manually updating text-based HTML code using FTP software in real time several times a day. To users, this offered the appearance of a live diary that contained multiple new entries per day. At the beginning of each new day, new diary entries were manually coded into a new HTML file, and at the start of each month, diary entries were archived into their own folder, which contained a separate HTML page for every day of the month. Then, menus that contained links to the most recent diary entry were updated manually throughout the site. This text-based method of organizing thousands of files served as a springboard to define future blogging styles that were captured by blogging software developed years later.[12]\r\n\r\nThe evolution of electronic and software tools to facilitate the production and maintenance of Web articles posted in reverse chronological order made the publishing process feasible for a much larger and less technically-inclined population. Ultimately, this resulted in the distinct class of online publishing that produces blogs we recognize today. For instance, the use of some sort of browser-based software is now a typical aspect of \"blogging\". Blogs can be hosted by dedicated blog hosting services, on regular web hosting services, or run using blog software.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
