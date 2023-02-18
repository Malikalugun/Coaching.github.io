-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 03:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `role`, `password`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'admin', 'Website Admin', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-29 06:56:35', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(30) NOT NULL,
  `deleted_at` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL,
  `deleted_at` varchar(20) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `name`, `description`, `image_url`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'html', 'html hgjgjh', './image_url/82db3d4891b6fa3ef86affb09ff827d4.jpg', '2022-11-14 06:57:53', '', '', 'Active'),
(2, ',kjkl', 'nnmnm,', './image_url/668afa21069556817c38f694e1c2128d.jpg', '2022-11-14 07:02:05', NULL, '2022-11-14 12:32:05', 'Active'),
(3, 'Html', 'HTML tags have been utilized since the birth of the internet to format elements on a webpage, such as text or images. HTML is part of the backend code, and you can easily view it by right-clicking and selecting View Page Source', './image_url/aeafc4d269af7c04210990472717e5b8.jpg', '2023-02-14 05:30:53', '2023-02-14 11:00:53', NULL, 'Active'),
(4, 'php', 'PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993. ', '', '2022-11-15 05:21:02', '2022-11-15 10:49:04', '2022-11-15 10:51:02', 'Active'),
(5, 'vdhtjyj', '', './image_url/bde9dc970cbb0ba72424a3c274674bc6.jpg', '2022-11-14 15:49:06', NULL, '2022-11-14 21:19:06', 'Active'),
(6, 'Java', 'JAVA was developed by James Gosling at Sun Microsystems Inc in the year 1995, later acquired by Oracle Corporation. It is a simple programming language. Java makes writing, compiling, and debugging programming easy.', './image_url/2a87de90b2078e09e645b3ad3e08787b.jpg', '2023-02-14 05:32:02', '2023-02-14 11:02:02', NULL, 'Active'),
(7, 'nnbmnm', 'bbn', './image_url/28d418da4e8425a0347f93d0029fba18.png', '2022-11-15 09:26:11', NULL, '2022-11-15 14:56:11', 'Active'),
(8, 'gfg', 'dfdfg', './image_url/5ae360984178cc3f9465bd97cd9a9ce3.jpg', '2022-11-15 11:07:30', NULL, '2022-11-15 16:37:30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `date_event` date NOT NULL,
  `description` text NOT NULL,
  `location` varchar(30) NOT NULL,
  `image_url` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(30) DEFAULT NULL,
  `deleted_at` varchar(30) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `title`, `date_event`, `description`, `location`, `image_url`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'kjhk', '2022-11-17', 'yttytiy', 'Ranchi', './image_url/8f42fcd908b321e231500d9496aa9155.jpg', '2022-11-16 06:31:52', '2022-11-16 12:01:52', NULL, 'Active'),
(2, 'bnnn', '2022-11-25', 'mhltlht', 'Simdega', './image_url/43d1dd4f0f433a54ba7b1e60d90fedd1.jpg', '2022-11-16 06:32:39', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(30) DEFAULT NULL,
  `deleted_at` varchar(30) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `type`, `name`, `thumbnail`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'photo', 'photo', 'kbfblg', '2022-11-15 12:25:18', NULL, '2022-11-15 17:55:18', 'Active'),
(3, 'jhjhghj', 'nbhjgj', './thumbnail/0fb971f4cd3e5067610abda704d72b16.jpg', '2022-11-15 12:25:19', NULL, '2022-11-15 17:55:19', 'Active'),
(4, 'jjkkkk', 'kkkk', './thumbnail/0fb971f4cd3e5067610abda704d72b16.jpg', '2022-11-15 12:25:20', '2022-11-15 17:41:36', '2022-11-15 17:55:20', 'Active'),
(5, 'mnmn', ',jkjjklj', './thumbnail/0a68aabd4213b595145c6616af43e03f.png', '2022-11-15 12:25:21', NULL, '2022-11-15 17:55:21', 'Active'),
(6, 'phottttttoooo', 'phtttt', './thumbnail/591609222b60e50e64e0e8f871015324.png', '2022-11-15 12:25:23', NULL, '2022-11-15 17:55:23', 'Active'),
(7, 'photos', 'photoshop', './thumbnail/67fcc004603172341028fa5247498e2e.jpg', '2023-02-10 15:14:07', '2022-12-01 13:12:08', '2023-02-10 20:44:07', 'Active'),
(8, 'image', 'gallery1 ', './thumbnail/2e5de09352a5b627210c872e05ad4a4a.jpg', '2023-02-14 05:33:24', '2023-02-14 11:03:24', NULL, 'Active'),
(9, 'hello', 'coding man ', './thumbnail/6f89b8343f1bbfbe8ffbd72ab934d267.jpg', '2023-02-14 05:34:05', '2023-02-14 11:04:05', NULL, 'Active'),
(10, 'deepa', 'deepika', './thumbnail/76e42a5d3599f30b26131cd812bf04d9.jpg', '2023-02-14 05:34:15', '2023-02-14 11:04:15', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `order_item` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(30) DEFAULT NULL,
  `deleted_at` varchar(30) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `title`, `description`, `image_url`, `order_item`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(4, 'Home Tuition', 'Its a well known fact that home tuition helps students to succeed. ', './image_url/2f8fc0d72ba5e6218c411c60dc5606b3.jpg', 'jakjs', '2022-11-11 11:11:53', '2022-11-11 16:41:53', NULL, 'Active'),
(5, 'Coaching', 'Coaching is a form of development in which an experienced person, called a coach, supports a learner or client in achieving a specific personal or professional goal', '', 'jhdghs', '2022-11-12 06:39:16', '2022-11-12 12:04:56', '2022-11-12 12:09:16', 'Active'),
(6, 'Coaching', 'Coaching is a form of development in which an experienced person.', './image_url/e18b81449196a16bac89af41ba361990.jpg', 'table', '2022-11-12 06:42:17', '2022-11-12 12:12:17', NULL, 'Active'),
(7, 'ygygi', 'jjh', './image_url/78a12817ea6961e081057362ac1dfc52.jpg', 'jkjk', '2022-11-15 06:14:31', '2022-11-15 11:44:22', '2022-11-15 11:44:31', 'Active'),
(8, 'nbbhj', 'kjhkjhk', './image_url/752a79d907a10b825ea9c2873fbc87b9.jpg', 'hjhjh', '2022-11-15 06:58:00', NULL, '2022-11-15 12:28:00', 'Active'),
(9, 'nkj', 'nkn', './image_url/639a54fbc3fff8b1d81b3045b8b9ba33.jpg', 'mn', '2022-11-15 09:25:52', NULL, '2022-11-15 14:55:52', 'Active'),
(10, 'jhh', 'nnbkjhk', './image_url/afe9464b5f212ef7485c53f7451bf6fe.jpg', 'kljkj', '2022-11-16 04:52:16', NULL, '2022-11-16 10:22:16', 'Active'),
(11, 'demo', 'mhkjhkfdg', './image_url/c30fca9ffb855b53ef3b1386dcce4463.png', ',jfkjf', '2023-01-20 08:21:53', NULL, '2023-01-20 13:51:53', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `news` text NOT NULL,
  `image_url` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL,
  `deleted_at` varchar(20) DEFAULT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `news`, `image_url`, `author`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'rjnkr', 'ekrej', './image_url/89807a96094b31623a79fc0daa82d71f.jpg', 'emnrn', '2023-01-12 06:10:14', NULL, '2023-01-12 11:40:14', ''),
(2, 'banner', 'banner of image', './image_url/22237596ac6b582bf0fac9b30c8bfa49.jpg', 'anna', '2023-01-12 06:10:15', NULL, '2023-01-12 11:40:15', ''),
(3, 'Falling asteroid lights up.', 'People in several parts of Europe, including around the English Channel, were treated to a dazzling display as an asteroid burned and exploded overhead.  brilliant fireball that was seen in several parts of Europe.', './image_url/5229a9799cafba6ca138ddf2251f275f.jpg', 'Malika', '2023-02-14 07:08:52', '2023-02-14 12:38:52', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subscription` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` varchar(30) NOT NULL,
  `deleted_at` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice_board`
--

CREATE TABLE `tbl_notice_board` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `notice_date` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `notice` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL,
  `deleted_at` varchar(20) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notice_board`
--

INSERT INTO `tbl_notice_board` (`id`, `type`, `notice_date`, `title`, `notice`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Seminer', '2022-11-24', 'Job related', 'Govt. Job Related Notice. The government has taken necessary initiatives to fulfill the vacant posts in government offices, ', '2023-02-10 15:11:18', '2022-12-30 16:48:48', '2023-02-10 20:41:18', 'Active'),
(2, 'gtgbthnyn', '2022-11-14', 'dgbgnhmj', 'ghnjmk,', '2022-11-14 15:45:51', NULL, '2022-11-14 21:15:51', 'Active'),
(3, 'hj', '2022-11-19', 'uhui', 'hu', '2022-11-15 09:25:32', NULL, '2022-11-15 14:55:32', 'Active'),
(4, 'bjhggh', '2022-11-25', 'babita', 'jfdsbfdlhfdl nskfkhf', '2022-11-16 06:37:26', NULL, '2022-11-16 12:07:26', 'Active'),
(5, 'hjhkhk', '2022-12-02', 'News Report', 'notice', '2023-02-14 06:50:31', '2023-02-10 20:41:26', '2023-02-14 12:20:31', 'Active'),
(6, 'school', '2023-02-04', 'Change School Timing', 'Notice is hereby given that due to the onset of summer, the school time will be from 4 am to 12 pm and 5 pm to 4 pm, the students should be present on time from 2 March, and Students coming from far away come on time.', '2023-02-14 07:00:11', '2023-02-14 12:30:11', NULL, 'Active'),
(7, 'medical', '2023-02-08', 'Blood Donation Camp ', 'The OPD is organizing a Blood Donation Camp on 26th April, 202X, in the society Hall from 02 am. Trained doctors will be available to carry out the process.', '2023-02-14 06:58:58', '2023-02-14 12:28:58', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offer`
--

CREATE TABLE `tbl_offer` (
  `id` int(11) NOT NULL,
  `offer_title` varchar(100) NOT NULL,
  `image_url` text NOT NULL,
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) DEFAULT NULL,
  `deleted_at` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_offer`
--

INSERT INTO `tbl_offer` (`id`, `offer_title`, `image_url`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(13, '', './image_url/f09239899d39883b78c43dbf0fbdc67a.png', '2022-10-13 17:33:30', '2022-10-18 15:49:07', '2022-10-18 15:49:15', 'Active'),
(14, 'anna', './image_url/0adca75877497f1ea978a22eac31356c.jpg', '2022-10-13 17:42:41', '2022-10-19 10:45:11', '2022-10-19 11:00:05', 'Active'),
(15, 'dfgfhf', './image_url/fcdf149645b38ea6563a02b2352ab673.jpg', '2022-10-18 15:49:25', NULL, '2022-10-19 10:45:38', 'Active'),
(16, 'zxnbzxb', './image_url/c45c9cde3e83006e0251df627eeea2c7.jpg', '2022-10-19 10:46:46', '2022-10-19 11:57:13', NULL, 'Active'),
(17, 'nbbmbmn', './image_url/36d9f33aadf3aa2eeb8cb654177d73ac.jpg', '2022-10-19 11:00:00', '2022-10-19 11:56:10', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `id` int(11) NOT NULL,
  `group_id` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `photo_url` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(30) NOT NULL,
  `deleted_at` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `legal_name` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone1` varchar(100) NOT NULL,
  `phone2` varchar(100) NOT NULL,
  `powered_by` varchar(100) NOT NULL,
  `powered_url` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `color_theme_primary` varchar(10) NOT NULL,
  `color_theme_secondary` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `org_name`, `legal_name`, `website`, `email`, `phone1`, `phone2`, `powered_by`, `powered_url`, `year`, `color_theme_primary`, `color_theme_secondary`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', '', '', '', '', '', 'eshuzo', '', '2022', '', '', 'active', '2022-10-13 06:53:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `team_photo` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL,
  `deleted_at` varchar(20) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`id`, `description`, `name`, `bio`, `team_photo`, `phone`, `email`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, ',snsjkf', ',sdnkfjsd', ',fnkjf', './team_photo/62d2a7679ee47178c882eca23bb3d470.jpg', '897897', ',dkjfhkjsf', '2022-11-16 11:56:39', '', '', 'Active'),
(2, ',mcxvn', 'mxcnm,xv', ',mncvmx', './team_photo/abbff95192b7e4afedc07af5460e6c7c.jpg', '87987', 'dnm,n,', '2022-11-16 11:58:51', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image_url` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(30) DEFAULT NULL,
  `deleted_at` varchar(30) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `type`, `name`, `image_url`, `message`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Teacher', 'Malika', './image_url/6c2ca1facf562d3e3ffb3a5a5f8df1e6.jpg', 'course covers core topics essential for a project management professional. It includes topics such as emerging trends, new technologies and practices', '2022-11-16 05:56:47', '2022-11-16 11:26:47', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `group_id` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `video` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL,
  `deleted_at` varchar(20) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `group_id`, `title`, `video`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, '$group_id', '$title', '$video', '2022-11-15 10:29:06', NULL, '2022-11-15 15:59:06', 'Active'),
(2, 'mlkjsdl', 'ksljklsdj', 'shjshdjs', '2022-11-16 05:10:46', '2022-11-15 15:59:17', '2022-11-16 10:40:46', 'Active'),
(3, 'sdksjdf', 'dksdjkld', 'ksdjksdk', '2022-11-16 05:10:44', NULL, '2022-11-16 10:40:44', 'Active'),
(4, 'mp4', 'song', 'https://youtu.be/AAVtTRw44Lw', '2022-11-16 05:13:50', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_content`
--

CREATE TABLE `tbl_web_content` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(20) NOT NULL,
  `deleted_at` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notice_board`
--
ALTER TABLE `tbl_notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_offer`
--
ALTER TABLE `tbl_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_web_content`
--
ALTER TABLE `tbl_web_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notice_board`
--
ALTER TABLE `tbl_notice_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_offer`
--
ALTER TABLE `tbl_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_web_content`
--
ALTER TABLE `tbl_web_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
