-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 10:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `user_id`, `post_id`, `created_date`, `modified_date`) VALUES
(1, 'xz', 2, 25, '2022-02-09', '2022-02-09'),
(2, 'ggggggg', 2, 25, '2022-02-09', '2022-02-09'),
(3, '', 2, 25, '2022-02-09', '2022-02-09'),
(4, 'aaa', 2, 25, '2022-02-09', '2022-02-09'),
(5, 'lllllll', 2, 25, '2022-02-09', '2022-02-09'),
(6, 'll', 1, 25, '2022-02-09', '2022-02-09'),
(7, ',', 1, 25, '2022-02-09', '2022-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `like_data`
--

CREATE TABLE `like_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_data`
--

INSERT INTO `like_data` (`id`, `user_id`, `post_id`) VALUES
(23, 1, 22),
(27, 1, 25),
(28, 1, 24),
(29, 2, 25),
(30, 2, 24),
(31, 3, 25),
(32, 3, 26);

-- --------------------------------------------------------

--
-- Table structure for table `online_user`
--

CREATE TABLE `online_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `active_date` datetime NOT NULL,
  `login_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_user`
--

INSERT INTO `online_user` (`id`, `user_id`, `active_date`, `login_date`) VALUES
(5, 1, '2022-02-09 15:02:43', '2022-02-09 03:02:43'),
(7, 1, '2022-02-09 15:05:40', '2022-02-09 03:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_photo` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `user_id`, `post_photo`, `created_date`, `modified_date`) VALUES
(20, 'dddd ee', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat null', 2, 'capitan-america-lanzando-escudo-8768.jpg', '2022-02-07', '2022-02-07'),
(21, 'xx sss kjkjkjk bbbbbbbbbbb', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat null', 2, '22-46-57-057.png', '2022-02-07', '2022-02-07'),
(22, 'kk', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat null', 1, '2SiFgd.jpg', '2022-02-07', '2022-02-07'),
(24, 'jjjjj', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 2, '', '2022-02-07', '2022-02-07'),
(25, 'ssss', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat null', 1, 'capitan-america-lanzando-escudo-8768.jpg', '2022-02-07', '2022-02-08'),
(26, 'HULK', 'lllllluu uuuuuuuuuuuuu\r\nsamdmlsdlksl l]as aa\r\ndadma,md,mdldlasdklsd \r\namdaldladns,fsaa.,smdsldsla;aslmdlsds', 3, '_1e3fee26-2078-11e9-abd9-895ad40f6f04.jpg', '2022-02-08', '2022-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `cpassword`, `phone`, `dob`, `gender`, `photo`, `address`, `created_date`, `modified_date`) VALUES
(1, 'mgmg', 'mgmg@gmail.com', '123', '123', '', '0000-00-00', '', 'empty.png', '', '0000-00-00', '0000-00-00'),
(2, 'khonzaw', 'aungthawhtetnaing1@gmail.com', '123', '123', '097787887877', '2001-02-22', 'male', '2SiFgd.jpg', 'yagon', '2022-02-03', '2022-02-03'),
(3, 'minthant', 'aungthawhtetnaing1@gmail.com', '123', '123', '097787887877', '1111-11-11', 'male', 'capitan-america-lanzando-escudo-8768.jpg', 'sss', '2022-02-03', '2022-02-03'),
(4, 'aaa', 'aungthawhtetnaing1@gmail.com', '123', '123', '097787887877', '2001-11-11', 'female', '22-46-57-057.png', '', '2022-02-07', '2022-02-07'),
(5, 'aungthaw', 'athaw2666@gmail.com', '000', '000', '097787887877', '2001-04-04', 'male', 'unnamed.jpg', 'ynadf', '2022-02-07', '2022-02-07'),
(6, 'tthhtht', 'aungthawhtetnaing1@gmail.com', '567', '567', '097787887877', '9111-03-31', 'male', '5673734.jpg', '85', '2022-02-07', '2022-02-07'),
(7, 'kk', 'aim133383@gmail.com', '444', '444', '097787887877', '2001-02-22', 'male', 'capitan-america-lanzando-escudo-8768.jpg', 'eeeeeeeee', '2022-02-07', '2022-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_data`
--
ALTER TABLE `like_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_user`
--
ALTER TABLE `online_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `like_data`
--
ALTER TABLE `like_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
