-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 09:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` text,
  `post_text` text,
  `post_url` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_text`, `post_url`) VALUES
(9, 'à¦Ÿà§à¦°à¦¾à¦®à§à¦ª à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà§à¦°à§‡à¦¸à¦¿à¦¡à§‡à¦¨à§à¦Ÿ à¦¨à§Ÿ', 'à¦¤à¦¾à¦à¦°à¦¾ à¦¹à¦¤à¦¾à¦¶, à¦†à¦¤à¦™à§à¦•à¦¿à¦¤, à¦¬à¦¿à¦•à§à¦·à§à¦¬à§à¦§à¥¤ à¦¤à¦¾à¦‡ à¦¸à§à¦¬à¦¤à¦ƒà¦¸à§à¦«à§‚à¦°à§à¦¤ à¦¹à§Ÿà§‡à¦‡ à¦¸à§œà¦•à§‡ à¦¨à§‡à¦®à§‡à¦›à§‡à¦¨à¥¤ à¦®à§à¦¹à§à¦°à§à¦®à§à¦¹à§ à¦¸à§à¦²à§‹à¦—à¦¾à¦¨ à¦¦à¦¿à¦šà§à¦›à§‡à¦¨à¥¤ à¦¬à¦¿à¦•à§à¦·à§‹à¦­à¦•à¦¾à¦°à§€à¦¦à§‡à¦° à¦•à¦£à§à¦ à§‡ à¦¶à§‹à¦¨à¦¾ à¦—à§‡à¦², â€˜à¦Ÿà§à¦°à¦¾à¦®à§à¦ª à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà§à¦°à§‡à¦¸à¦¿à¦¡à§‡à¦¨à§à¦Ÿ à¦¨à§Ÿà¥¤â€™\r\n\r\nà¦°à¦¿à¦ªà¦¾à¦¬à¦²à¦¿à¦•à¦¾à¦¨ à¦ªà¦¾à¦°à§à¦Ÿà¦¿à¦° à¦¡à§‹à¦¨à¦¾à¦²à§à¦¡ à¦Ÿà§à¦°à¦¾à¦®à§à¦ª à¦ªà§à¦°à§‡à¦¸à¦¿à¦¡à§‡à¦¨à§à¦Ÿ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¿à¦¤ à¦¹à¦“à§Ÿà¦¾à§Ÿ à¦¯à§à¦•à§à¦¤à¦°à¦¾à¦·à§à¦Ÿà§à¦°à§‡à¦° à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦¶à¦¹à¦°à§‡ à¦—à¦¤à¦•à¦¾à¦² à¦¬à§à¦§à¦¬à¦¾à¦° à¦¬à¦¿à¦•à§à¦·à§‹à¦­-à¦¸à¦®à¦¾à¦¬à§‡à¦¶ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦ªà§à¦°à¦¤à¦¿à¦¬à¦¾à¦¦à§€ à¦à¦¸à¦¬ à¦¬à¦¿à¦•à§à¦·à§‹à¦­-à¦¸à¦®à¦¾à¦¬à§‡à¦¶ à¦¥à§‡à¦•à§‡ à¦Ÿà§à¦°à¦¾à¦®à§à¦ªà¦¬à¦¿à¦°à§‹à¦§à§€ à¦†à¦“à§Ÿà¦¾à¦œ à¦‰à¦ à§‡à¦›à§‡à¥¤ à¦¸à¦¿à¦à¦¨à¦à¦¨ à¦…à¦¨à¦²à¦¾à¦‡à¦¨à§‡à¦° à¦ªà§à¦°à¦¤à¦¿à¦¬à§‡à¦¦à¦¨à§‡ à¦à¦‡ à¦¤à¦¥à§à¦¯ à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¹à§Ÿà¥¤\r\n\r\nà¦¬à§‹à¦¸à§à¦Ÿà¦¨, à¦²à¦¸ à¦…à§à¦¯à¦¾à¦žà§à¦œà§‡à¦²à§‡à¦¸, à¦¨à¦¿à¦‰à¦‡à§Ÿà¦°à§à¦•, à¦†à¦Ÿà¦²à¦¾à¦¨à§à¦Ÿà¦¾, à¦…à¦¸à§à¦Ÿà¦¿à¦¨, à¦Ÿà§‡à¦•à§à¦¸à¦¾à¦¸, à¦¶à¦¿à¦•à¦¾à¦—à§‹, à¦¡à§‡à¦¨à¦­à¦¾à¦°, à¦«à¦¿à¦²à¦¾à¦¡à§‡à¦²à¦«à¦¿à§Ÿà¦¾, à¦…à¦°à§‡à¦—à¦¨, à¦¸à¦¾à¦¨à¦«à§à¦°à¦¾à¦¨à§à¦¸à¦¿à¦¸à¦•à§‹, à¦¸à¦¿à§Ÿà¦¾à¦Ÿà¦², à¦“à§Ÿà¦¾à¦¶à¦¿à¦‚à¦Ÿà¦¨à§‡ à¦¬à¦¿à¦•à§à¦·à§‹à¦­-à¦¸à¦®à¦¾à¦¬à§‡à¦¶ à¦¹à¦“à§Ÿà¦¾à¦° à¦–à¦¬à¦° à¦ªà¦¾à¦“à§Ÿà¦¾ à¦—à§‡à¦›à§‡à¥¤', ' '),
(10, 'à¦Ÿà§à¦°à¦¾à¦®à§à¦ª à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà§à¦°à§‡à¦¸à¦¿à¦¡à§‡à¦¨à§à¦Ÿ à¦¨à§Ÿ', 'à¦¤à¦¾à¦à¦°à¦¾ à¦¹à¦¤à¦¾à¦¶, à¦†à¦¤à¦™à§à¦•à¦¿à¦¤, à¦¬à¦¿à¦•à§à¦·à§à¦¬à§à¦§à¥¤ à¦¤à¦¾à¦‡ à¦¸à§à¦¬à¦¤à¦ƒà¦¸à§à¦«à§‚à¦°à§à¦¤ à¦¹à§Ÿà§‡à¦‡ à¦¸à§œà¦•à§‡ à¦¨à§‡à¦®à§‡à¦›à§‡à¦¨à¥¤ à¦®à§à¦¹à§à¦°à§à¦®à§à¦¹à§ à¦¸à§à¦²à§‹à¦—à¦¾à¦¨ à¦¦à¦¿à¦šà§à¦›à§‡à¦¨à¥¤ à¦¬à¦¿à¦•à§à¦·à§‹à¦­à¦•à¦¾à¦°à§€à¦¦à§‡à¦° à¦•à¦£à§à¦ à§‡ à¦¶à§‹à¦¨à¦¾ à¦—à§‡à¦², â€˜à¦Ÿà§à¦°à¦¾à¦®à§à¦ª à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà§à¦°à§‡à¦¸à¦¿à¦¡à§‡à¦¨à§à¦Ÿ à¦¨à§Ÿà¥¤â€™\r\n\r\nà¦°à¦¿à¦ªà¦¾à¦¬à¦²à¦¿à¦•à¦¾à¦¨ à¦ªà¦¾à¦°à§à¦Ÿà¦¿à¦° à¦¡à§‹à¦¨à¦¾à¦²à§à¦¡ à¦Ÿà§à¦°à¦¾à¦®à§à¦ª à¦ªà§à¦°à§‡à¦¸à¦¿à¦¡à§‡à¦¨à§à¦Ÿ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¿à¦¤ à¦¹à¦“à§Ÿà¦¾à§Ÿ à¦¯à§à¦•à§à¦¤à¦°à¦¾à¦·à§à¦Ÿà§à¦°à§‡à¦° à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦¶à¦¹à¦°à§‡ à¦—à¦¤à¦•à¦¾à¦² à¦¬à§à¦§à¦¬à¦¾à¦° à¦¬à¦¿à¦•à§à¦·à§‹à¦­-à¦¸à¦®à¦¾à¦¬à§‡à¦¶ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦ªà§à¦°à¦¤à¦¿à¦¬à¦¾à¦¦à§€ à¦à¦¸à¦¬ à¦¬à¦¿à¦•à§à¦·à§‹à¦­-à¦¸à¦®à¦¾à¦¬à§‡à¦¶ à¦¥à§‡à¦•à§‡ à¦Ÿà§à¦°à¦¾à¦®à§à¦ªà¦¬à¦¿à¦°à§‹à¦§à§€ à¦†à¦“à§Ÿà¦¾à¦œ à¦‰à¦ à§‡à¦›à§‡à¥¤ à¦¸à¦¿à¦à¦¨à¦à¦¨ à¦…à¦¨à¦²à¦¾à¦‡à¦¨à§‡à¦° à¦ªà§à¦°à¦¤à¦¿à¦¬à§‡à¦¦à¦¨à§‡ à¦à¦‡ à¦¤à¦¥à§à¦¯ à¦œà¦¾à¦¨à¦¾à¦¨à§‹ à¦¹à§Ÿà¥¤\r\n\r\nà¦¬à§‹à¦¸à§à¦Ÿà¦¨, à¦²à¦¸ à¦…à§à¦¯à¦¾à¦žà§à¦œà§‡à¦²à§‡à¦¸, à¦¨à¦¿à¦‰à¦‡à§Ÿà¦°à§à¦•, à¦†à¦Ÿà¦²à¦¾à¦¨à§à¦Ÿà¦¾, à¦…à¦¸à§à¦Ÿà¦¿à¦¨, à¦Ÿà§‡à¦•à§à¦¸à¦¾à¦¸, à¦¶à¦¿à¦•à¦¾à¦—à§‹, à¦¡à§‡à¦¨à¦­à¦¾à¦°, à¦«à¦¿à¦²à¦¾à¦¡à§‡à¦²à¦«à¦¿à§Ÿà¦¾, à¦…à¦°à§‡à¦—à¦¨, à¦¸à¦¾à¦¨à¦«à§à¦°à¦¾à¦¨à§à¦¸à¦¿à¦¸à¦•à§‹, à¦¸à¦¿à§Ÿà¦¾à¦Ÿà¦², à¦“à§Ÿà¦¾à¦¶à¦¿à¦‚à¦Ÿà¦¨à§‡ à¦¬à¦¿à¦•à§à¦·à§‹à¦­-à¦¸à¦®à¦¾à¦¬à§‡à¦¶ à¦¹à¦“à§Ÿà¦¾à¦° à¦–à¦¬à¦° à¦ªà¦¾à¦“à§Ÿà¦¾ à¦—à§‡à¦›à§‡à¥¤', ' '),
(11, 'Opinion: Trump, the Saviour now? ', '<p>&nbsp;<img src="http://www.thedailystar.net/sites/default/files/styles/very_big_1/public/feature/images/trump-president-electwb.jpg?itok=R_wqpyD_" alt="News Image" width="536" height="300" /></p>\r\n<div class="caption" style="text-align: left;"><strong>Republican presidential elect Donald Trump stunned America and the world November 9, riding a wave of populist resentment to defeat Hillary Clinton in the race to become the 45th president of the United States. Photo: JIM WATSON / AFP</strong></div>\r\n<div class="caption" style="text-align: left;">&nbsp;</div>\r\n<ul style="list-style-type: circle;">\r\n<li class="caption" style="text-align: left;"><strong>Fast Note</strong></li>\r\n<li class="caption" style="text-align: left;"><strong>Secnd Note </strong></li>\r\n</ul>', 'opinion trump the saviour now '),
(12, 'à¦Ÿà§à¦°à¦¾à¦®à§à¦ª à¦†à¦®à¦¾à¦¦à§‡à¦° à¦ªà§à¦°à§‡à¦¸à¦¿à¦¡à§‡à¦¨à§à¦Ÿ à¦¨à§Ÿ', '<p><strong>In this video we going to learn how to create semantic or pretty</strong> url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.</p>', '-'),
(13, 'Clean slug urls are very useful for our website.', '<p><strong>In this video we going to learn how to create semantic or pretty</strong> url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.In this video we going to learn how to create semantic or pretty url in php using .htaccess file. SEO Friendly Url is most important in SEO, it will help in increase presence on search engine, fast indexing our content and incease ranking on search engine. So, Clean slug urls are very useful for our website.</p>', 'clean-slug-urls-are-very-useful-for-our-website-'),
(14, 'Protesters take to US streets over Trump victory', '<p>Clean slug urls are very useful for our website.</p>\r\n<p>Clean slug urls are very useful for our website.</p>\r\n<p>Clean slug urls are very useful for our website.</p>\r\n<p>Clean slug urls are very useful for our website.</p>\r\n<p>Clean slug urls are very useful for our website.</p>', 'protesters-take-to-us-streets-over-trump-victory');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
