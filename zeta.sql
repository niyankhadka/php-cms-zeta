-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 09:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(0, 'Uncategorized'),
(3, 'Education'),
(12, 'Graphic'),
(17, 'Fashion'),
(18, 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_user` varchar(255) NOT NULL,
  `comment_user_role` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_subject` varchar(255) NOT NULL,
  `comment_message` text NOT NULL,
  `comment_status` int(3) NOT NULL,
  `comment_year` varchar(255) NOT NULL,
  `comment_month` varchar(255) NOT NULL,
  `comment_day` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_user`, `comment_user_role`, `comment_email`, `comment_subject`, `comment_message`, `comment_status`, `comment_year`, `comment_month`, `comment_day`) VALUES
(10, 3, 'nirajan babu khadka', 'subscriber', 'niyankhadka.nk@gmail.com', 'hello', 'this is the new comment for the first ', 1, '2018', 'Nov', '18'),
(11, 3, 'Saloni Giri', 'subscriber', 'girisaloni3333@gmail.com', 'ghghngh', ' t tgrt hrt rt rtg rtg rtgrt rt rtg rthrt hrt hrth rthrt hrt\r\nrt hrth rthrthrthrth rt', 1, '2018', 'Nov', '18'),
(12, 6, 'nirajan babu khadka', 'subscriber', 'niyankhadka.nk@gmail.com', 'hello', 'tr rtg rtgrt rt rtrt hrthrtrt hrth rthrt hrth rthrth rth rthrt hrthrsh sgfbfdb dfbrt he rh h whh rthrthrth rt tyjfhdh fhr', 1, '2018', 'Nov', '18'),
(13, 8, 'Saloni Giri', 'subscriber', 'girisaloni3333@gmail.com', 'hello', 'rth rthrt hrth rthrt hrt', 0, '2018', 'Nov', '18'),
(15, 9, 'Saloni Giri', 'subscriber', 'girisaloni3333@gmail.com', 'hello', 'trhytrhrty', 1, '2019', 'Jan', '4'),
(16, 9, 'bhnau', 'subscriber', 'bhanu@gmail.com', 'bhanu title', 'bhanu comment here', 1, '2019', 'Jan', '4'),
(17, 9, 'nirajan babu khadka', 'subscriber', 'niyankhadka.nk@gmail.com', 'sub', 'this is the comment message.', 1, '2019', 'Mar', '17'),
(18, 6, 'hfgbhfg', 'subscriber', 'hello@gmail.com', 'nice', 'this is bnice one', 0, '2019', 'May', '26');

-- --------------------------------------------------------

--
-- Table structure for table `footer_copyright`
--

CREATE TABLE `footer_copyright` (
  `footer_copyright_id` int(3) NOT NULL,
  `footer_copyright_text` varchar(255) NOT NULL,
  `footer_copyright_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_copyright`
--

INSERT INTO `footer_copyright` (`footer_copyright_id`, `footer_copyright_text`, `footer_copyright_date`) VALUES
(1, ' All rights reserved', '2018-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `footer_widget`
--

CREATE TABLE `footer_widget` (
  `footer_widget_id` int(3) NOT NULL,
  `footer_widget_title` text NOT NULL,
  `footer_widget_bg_title` varchar(255) NOT NULL,
  `footer_widget_description` varchar(255) NOT NULL,
  `footer_widget_bg_image` text NOT NULL,
  `footer_widget_button_text` varchar(255) NOT NULL,
  `footer_widget_button_link` varchar(255) NOT NULL,
  `footer_widget_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_widget`
--

INSERT INTO `footer_widget` (`footer_widget_id`, `footer_widget_title`, `footer_widget_bg_title`, `footer_widget_description`, `footer_widget_bg_image`, `footer_widget_button_text`, `footer_widget_button_link`, `footer_widget_date`) VALUES
(1, 'footer title1', 'N', 'this is the description for the footer widget1', 'contact_background.jpg', 'button text1', 'link1', '2018-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `home_section1`
--

CREATE TABLE `home_section1` (
  `section1_id` int(3) NOT NULL,
  `section1_title` varchar(255) NOT NULL,
  `section1_subtitle` varchar(255) NOT NULL,
  `section1_description` varchar(255) NOT NULL,
  `section1_image` text NOT NULL,
  `section1_button_text` varchar(255) NOT NULL,
  `section1_button_link` varchar(255) NOT NULL,
  `section1_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section1`
--

INSERT INTO `home_section1` (`section1_id`, `section1_title`, `section1_subtitle`, `section1_description`, `section1_image`, `section1_button_text`, `section1_button_link`, `section1_date`) VALUES
(1, 'Rameh dai ', 'Below Title 1', 'All the thing you have to think about it.1', 'attractive-1846127_1920.jpg', 'View More1', 'www.twitter.com/1', '2018-10-26'),
(2, 'Header Title 2', 'Below Title 2', 'Thing you have to think about 2', 'beautiful-1274361_1920.jpg', 'View More 2', 'www.link2.com', '2018-10-26'),
(3, 'Header Title 3', 'Below Title 3', 'Thing you have to think about 3', 'woman-3287956_1920.jpg', 'View More 3', 'www.link3.com', '2018-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `home_section2`
--

CREATE TABLE `home_section2` (
  `section2_id` int(3) NOT NULL,
  `section2_title` varchar(255) NOT NULL,
  `section2_description` varchar(255) NOT NULL,
  `section2_icon` text NOT NULL,
  `section2_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section2`
--

INSERT INTO `home_section2` (`section2_id`, `section2_title`, `section2_description`, `section2_icon`, `section2_date`) VALUES
(1, 'title here 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam 11', 'icon_1.svg', '2018-08-02'),
(2, 'title 22', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam 22', 'icon_2.svg', '2018-08-02'),
(3, 'title 33', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum 33', 'icon_3.svg', '2018-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `home_section3`
--

CREATE TABLE `home_section3` (
  `section3_id` int(255) NOT NULL,
  `section3_title` varchar(255) NOT NULL,
  `section3_description` varchar(255) NOT NULL,
  `section3_bg_image` text NOT NULL,
  `section3_signature` text NOT NULL,
  `section3_bg_text` varchar(255) NOT NULL,
  `section3_pb_text1` varchar(255) NOT NULL,
  `section3_pb_value1` varchar(255) NOT NULL,
  `section3_pb_text2` varchar(255) NOT NULL,
  `section3_pb_value2` varchar(255) NOT NULL,
  `section3_pb_text3` varchar(255) NOT NULL,
  `section3_pb_value3` varchar(255) NOT NULL,
  `section3_pb_text4` varchar(255) NOT NULL,
  `section3_pb_value4` varchar(255) NOT NULL,
  `section3_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section3`
--

INSERT INTO `home_section3` (`section3_id`, `section3_title`, `section3_description`, `section3_bg_image`, `section3_signature`, `section3_bg_text`, `section3_pb_text1`, `section3_pb_value1`, `section3_pb_text2`, `section3_pb_value2`, `section3_pb_text3`, `section3_pb_value3`, `section3_pb_text4`, `section3_pb_value4`, `section3_date`) VALUES
(1, 'about the title', 'the long detail may be here on the way', 'about_background.jpg', 'signiture.png', 'Np', 'text 11', '0.55', 'text 22', '0.66', 'text 33', '0.77', 'text 33', '0.77', '2018-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `home_section4`
--

CREATE TABLE `home_section4` (
  `section4_id` int(3) NOT NULL,
  `section4_title` varchar(255) NOT NULL,
  `section4_bg_title` varchar(255) NOT NULL,
  `section4_client_image` text NOT NULL,
  `section4_client_name` varchar(255) NOT NULL,
  `section4_client_role` varchar(255) NOT NULL,
  `section4_client_view` varchar(255) NOT NULL,
  `section4_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section4`
--

INSERT INTO `home_section4` (`section4_id`, `section4_title`, `section4_bg_title`, `section4_client_image`, `section4_client_name`, `section4_client_role`, `section4_client_view`, `section4_date`) VALUES
(1, 'Testimonials', 'V1', 'test_user.jpg', 'Name1', 'Client Role1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum1', '2018-08-04'),
(2, '', '', 'test_user.jpg', 'client 22', 'role 22', 'view 2 are great for the web page.2', '2018-08-04'),
(3, '', '', 'test_user.jpg', 'client 33', 'role 33', 'view 3 are awful for the web page.3', '2018-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `home_section5`
--

CREATE TABLE `home_section5` (
  `section5_id` int(3) NOT NULL,
  `section5_bg_image` text NOT NULL,
  `section5_button_text` varchar(255) NOT NULL,
  `section5_button_link` varchar(255) NOT NULL,
  `section5_title` varchar(255) NOT NULL,
  `section5_description` varchar(255) NOT NULL,
  `section5_icon` text NOT NULL,
  `section5_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_section5`
--

INSERT INTO `home_section5` (`section5_id`, `section5_bg_image`, `section5_button_text`, `section5_button_link`, `section5_title`, `section5_description`, `section5_icon`, `section5_date`) VALUES
(1, 'services_parallax.jpg', 'View More', 'www.link1.com', 'title1', 'this is the description for title 1', 'icon_1.svg', '2018-08-04'),
(2, '', '', '', 'title2', 'this is the description for the title 2', 'icon_2.svg', '2018-08-04'),
(3, '', '', '', 'title3', 'this is the description for the tile 3', 'icon_3.svg', '2018-08-04'),
(4, '', '', '', 'title4', 'this is the section for the title 4', 'icon_4.svg', '2018-08-04'),
(5, '', '', '', 'title5', 'this is the description for the title 5', 'icon_5.svg', '2018-08-04'),
(6, '', '', '', 'title6', 'this is the title for the description title 6', 'icon_6.svg', '2018-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_image` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(3) NOT NULL,
  `post_status` int(2) NOT NULL,
  `post_year` varchar(10) NOT NULL,
  `post_month` varchar(10) NOT NULL,
  `post_day` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_content`, `post_image`, `post_tags`, `post_comment_count`, `post_status`, `post_year`, `post_month`, `post_day`) VALUES
(3, 0, 'Women shop', 'admin', 'dcsdcsd ss d d', 'summer_hat_women.jpg', 'women, fashion, dress', 1, 1, '2018', 'Nov', '25'),
(6, 3, 'Jeans Fashions', 'admin123', 'scsc s ss', 'white_gadget.jpg', 'women, fashion', 1, 1, '2018', 'Nov', '25'),
(7, 3, 'New blog for the post', 'Admin', 'This is the dummy text for the blog. I hope you understand that. New post will be added soon. Wait for a while. Thanks a lot for your concern. This is the dummy text for the blog. I hope you understand that. New post will be added soon. Wait for a while. Thanks a lot for your concern. This is the dummy text for the blog. I hope you understand that. New post will be added soon. Wait for a while. Thanks a lot for your concern.', 'flowerly_gadget.jpg', 'new post, blog', 1, 1, '2018', 'Nov', '25'),
(8, 18, 'Today title', 'admin', 'This is the dummy content for the post', 'hipster-mum-236832-unsplash.jpg', 'information, technology', 0, 1, '2018', 'Nov', '25'),
(9, 3, 'Bhanu ademo trial', 'Bhanu', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 'photographer-407068_1280.jpg', 'bhnau tags', 3, 1, '2019', 'Jan', '4'),
(10, 3, 'Hello world1', 'Roshan', 'This is the content.dfgvbdfbvdf dfg dffg', '56011734_6117398389266_7381120839724302336_n.png', 'hello world', 0, 0, '2019', 'May', '26');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_gallery`
--

CREATE TABLE `sidebar_gallery` (
  `gallery_id` int(3) NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `gallery_year` varchar(255) NOT NULL,
  `gallery_month` varchar(255) NOT NULL,
  `gallery_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidebar_gallery`
--

INSERT INTO `sidebar_gallery` (`gallery_id`, `gallery_image`, `gallery_year`, `gallery_month`, `gallery_day`) VALUES
(1, 'flowerly_gadget.jpg', '2018', 'Dec', '12'),
(2, 'hipster-mum-236832-unsplash.jpg', '2015', 'Jan', '15'),
(3, 'summer_hat_women.jpg', '2016', 'Nov', '05'),
(4, 'white_gadget.jpg', '2017', 'Jun', '19');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `social_links_id` int(3) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `dribble` varchar(255) NOT NULL,
  `behance` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `social_links_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`social_links_id`, `pinterest`, `facebook`, `twitter`, `dribble`, `behance`, `linkedin`, `social_links_date`) VALUES
(1, 'https://pinterest.com', 'https://fb.com', 'https://twitter.com', 'https://dribble.com', 'https://behance.com', 'https://linkedin.com', '2019-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `top_header`
--

CREATE TABLE `top_header` (
  `top_header_id` int(3) NOT NULL,
  `title_text` varchar(255) NOT NULL,
  `bg_title_text` varchar(255) NOT NULL,
  `subtitle_text` varchar(255) NOT NULL,
  `top_header_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_header`
--

INSERT INTO `top_header` (`top_header_id`, `title_text`, `bg_title_text`, `subtitle_text`, `top_header_date`) VALUES
(1, 'Demo', 'D', 'Site', '2018-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `footer_copyright`
--
ALTER TABLE `footer_copyright`
  ADD PRIMARY KEY (`footer_copyright_id`);

--
-- Indexes for table `footer_widget`
--
ALTER TABLE `footer_widget`
  ADD PRIMARY KEY (`footer_widget_id`);

--
-- Indexes for table `home_section1`
--
ALTER TABLE `home_section1`
  ADD PRIMARY KEY (`section1_id`);

--
-- Indexes for table `home_section2`
--
ALTER TABLE `home_section2`
  ADD PRIMARY KEY (`section2_id`);

--
-- Indexes for table `home_section3`
--
ALTER TABLE `home_section3`
  ADD PRIMARY KEY (`section3_id`);

--
-- Indexes for table `home_section4`
--
ALTER TABLE `home_section4`
  ADD PRIMARY KEY (`section4_id`);

--
-- Indexes for table `home_section5`
--
ALTER TABLE `home_section5`
  ADD PRIMARY KEY (`section5_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `sidebar_gallery`
--
ALTER TABLE `sidebar_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`social_links_id`);

--
-- Indexes for table `top_header`
--
ALTER TABLE `top_header`
  ADD PRIMARY KEY (`top_header_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `footer_copyright`
--
ALTER TABLE `footer_copyright`
  MODIFY `footer_copyright_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_widget`
--
ALTER TABLE `footer_widget`
  MODIFY `footer_widget_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_section1`
--
ALTER TABLE `home_section1`
  MODIFY `section1_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_section2`
--
ALTER TABLE `home_section2`
  MODIFY `section2_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_section3`
--
ALTER TABLE `home_section3`
  MODIFY `section3_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_section4`
--
ALTER TABLE `home_section4`
  MODIFY `section4_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_section5`
--
ALTER TABLE `home_section5`
  MODIFY `section5_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sidebar_gallery`
--
ALTER TABLE `sidebar_gallery`
  MODIFY `gallery_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `social_links_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `top_header`
--
ALTER TABLE `top_header`
  MODIFY `top_header_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
