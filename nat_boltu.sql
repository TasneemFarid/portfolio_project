-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nat_boltu`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(200) COLLATE utf8_estonian_ci NOT NULL,
  `banner_description` text COLLATE utf8_estonian_ci NOT NULL,
  `banner_img` varchar(200) COLLATE utf8_estonian_ci NOT NULL DEFAULT 'banner_img.png',
  `status` varchar(100) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_description`, `banner_img`, `status`) VALUES
(3, 'Est est ', 'Velit duis laborum do esse aute ', 'Est est .png', 'active'),
(4, 'Totam', 'Officia perspiciatis  tenetur perfer Officia perspiciatis  tenetur perfer', 'Totam.png', 'Deactive'),
(5, 'Omnis ', 'Assumenda nesciunt ullamco dolor Assumenda nesciunt ullamco dolor ', 'Omnis .png', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `edu_title` varchar(200) NOT NULL,
  `edu_year` int(100) NOT NULL,
  `edu_percentage` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `edu_title`, `edu_year`, `edu_percentage`, `status`) VALUES
(1, 'Dolor quisquam atque', 1976, 78, 'active'),
(2, 'Illum deserunt ut s', 1977, 45, 'active'),
(3, 'Laborum et excepturi', 1980, 35, 'active'),
(10, 'Alias corporis et oc', 1990, 95, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `fact_icon` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  `fact_count` int(11) NOT NULL,
  `fact_title` varchar(200) COLLATE utf8_estonian_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `fact_icon`, `fact_count`, `fact_title`, `status`) VALUES
(1, 'fa fa-cloud-download', 56, 'Sed beatae vero quod', 'Active'),
(2, 'fa fa-rss', 96, 'Ut aut qui et quasi ', 'Active'),
(3, 'fa fa-users', 37, 'Repudiandae qui volu', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_title` varchar(200) NOT NULL,
  `service_description` text NOT NULL,
  `service_icon` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_description`, `service_icon`, `status`) VALUES
(1, '$service_title', '$service_description', '$service_icon', '$status'),
(2, 'Qui eos temporibus ', 'Et culpa excepteur ', 'fa fa-users', 'active'),
(3, 'Web Design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 'fa fa-bars', 'deactive'),
(4, 'Eos tempor do molest', 'Mollit in expedita a', 'fa fa-user', 'active'),
(9, 'Consectetur error u', 'Excepteur id sed quo', 'fa fa-user', 'Active'),
(10, '', '', '', 'Active'),
(11, '', '', '', 'Active'),
(12, '', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `default_profile_photo` varchar(200) NOT NULL DEFAULT 'default_photo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `default_profile_photo`) VALUES
(1, 'Al-Amin', 'alamin.@gmail.com', 'ajamarmonvalonei', 'default_photo.png'),
(2, 'Ammena', 'ameena@live.com', 'janina@1234#', 'default_photo.png'),
(3, 'fuad', 'fuad@gmail.com', 'sdfasd@132', 'default_photo.png'),
(4, 'Jannatul', 'viqijudyhi@mailinator.com', 'Pa$$w0rd!', 'default_photo.png'),
(5, 'AlAmin', 'wicefa@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(6, 'Indig', 'jacu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(7, 'Sacha', 'pukevac@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(8, 'Lara', 'muvi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(9, 'Alfonso', 'geqysumaj@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(10, 'Catherine', 'mokedimute@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(11, 'Mahin', 'mahi@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(12, 'Fraali', 'celek@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(13, 'Adara', 'xiqysijyb@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'default_photo.png'),
(14, 'Carl', 'wevowaw@mailinator.com', 'Pa$$w0rd!', 'default_photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `work_category` varchar(100) NOT NULL,
  `work_title` varchar(200) NOT NULL,
  `work_img` varchar(200) NOT NULL DEFAULT 'w-1.jpg',
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `work_category`, `work_title`, `work_img`, `status`) VALUES
(1, 'Web Design', 'My Best Work', '', '0'),
(2, 'Web Development', 'Dashboard Project', '', '0'),
(3, 'UI/UX', 'Portrait Design', 'Portrait Design1662563461.jpg', '0'),
(4, 'Web Design', 'My Best Work', 'My Best Work1662563531.jpg', '0'),
(5, 'Web Development', 'Dashboard Project', 'Dashboard Project1662563638.jpg', 'Active'),
(6, 'UI/UX', 'Portrait Design', 'Portrait Design1662563663.jpg', 'Active'),
(7, 'Web Design', 'My Best Work', 'My Best Work1662563679.jpg', 'Active'),
(8, 'UI/UX', 'Portrait Design', 'Portrait Design1662563663.jpg', 'Active'),
(9, 'Web Development', 'Dashboard Project', 'Dashboard Project1662563638.jpg', 'Active'),
(10, 'UI/UX', 'Portrait Design', 'Portrait Design1662563663.jpg', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
