-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 09:56 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ts`
--

-- --------------------------------------------------------

--
-- Table structure for table `chil`
--

CREATE TABLE `chil` (
  `id` int(11) NOT NULL,
  `la` varchar(100) NOT NULL,
  `pe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chil`
--

INSERT INTO `chil` (`id`, `la`, `pe`) VALUES
(2, '614259045', '20--'),
(3, '614259039', '2022'),
(7, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cons`
--

CREATE TABLE `cons` (
  `c_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` char(10) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `line` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cons`
--

INSERT INTO `cons` (`c_id`, `email`, `phone`, `facebook`, `line`) VALUES
(1, 'toeey@gmail.com', '0984378180', 'nattanicha panpiemthong', 'nat.ta.ni.cha'),
(2, 'waw@gmail.com', '0845967125', 'Wantana Whankhuam', 'waww'),
(3, 'jam@gmail.com', '0859642587', 'jamjung', 'jammm12'),
(4, '', '', '', ''),
(5, 'toeeyna05@gmail.com', '0984378180', 'nattanicha panpiemthong', 'nat.ta.ni.cha'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `h_id` int(11) NOT NULL,
  `h_number` varchar(100) NOT NULL,
  `swine` varchar(20) NOT NULL,
  `h_dis` varchar(100) NOT NULL,
  `h_per` varchar(100) NOT NULL,
  `hpro` varchar(100) NOT NULL,
  `h_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`h_id`, `h_number`, `swine`, `h_dis`, `h_per`, `hpro`, `h_code`) VALUES
(1, '136', '1', 'à¸«à¹‰à¸§à¸¢à¸¡à¹ˆà¸§à¸‡', 'à¸à¸³à¹à¸žà¸‡à¹à¸ªà¸™', 'à¸™à¸„à¸£à¸›à¸à¸¡', '73180'),
(2, '136', '1', 'à¸«à¹‰à¸§à¸¢à¸¡à¹ˆà¸§à¸‡', 'à¸à¸³à¹à¸žà¸‡à¹à¸ªà¸™', 'à¸™à¸„à¸£à¸›à¸à¸¡', '73180'),
(3, '11', '22', 'à¹à¸•à¸‡à¸à¸§à¸²', 'à¹à¸•à¸‡à¸à¸§à¸²', 'à¹à¸•à¸‡à¸à¸§à¸²', '14859'),
(4, '136', '1', 'à¸«à¹‰à¸§à¸¢à¸¡à¹ˆà¸§à¸‡', 'à¸à¸³à¹à¸žà¸‡à¹à¸ªà¸™', 'à¸™à¸„à¸£à¸›à¸à¸¡', '73180'),
(5, '136', '1', 'à¸«à¹‰à¸§à¸¢à¸¡à¹ˆà¸§à¸‡', 'à¸à¸³à¹à¸žà¸‡à¹à¸ªà¸™', 'à¸™à¸„à¸£à¸›à¸à¸¡', '73180'),
(6, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `p_num` char(13) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`pro_id`, `name`, `lastname`, `gender`, `p_num`, `date`) VALUES
(1, 'à¸“à¸±à¸Žà¸à¸“à¸´à¸Šà¸²', 'à¸›à¸±à¹‰à¸™à¹€à¸›à¸µà¹ˆà¸¢à¸¡à¸—à¸­à¸‡', 'à¸«à¸à¸´à¸‡', '1700401319981', '2000-05-14'),
(2, 'à¸§à¸±à¸™à¸—à¸™à¸²', 'à¸§à¸±à¸™à¸„à¸³', 'à¸«à¸à¸´à¸‡', '1785945263124', '1999-08-12'),
(3, 'à¸›à¸£à¸¡à¸´à¸™', 'à¸ˆà¸£à¸¸à¸¡à¸žà¸£à¸¡', 'à¸Šà¸²à¸¢', '1845967123123', '2020-01-27'),
(4, 'à¸¨à¸´à¸§à¸à¸£', 'à¸£à¸²à¸¡à¹€à¸£à¸·à¸­à¸‡', 'à¸Šà¸²à¸¢', 'à¸žà¹€à¸žà¹€à', '2020-04-29'),
(5, 'à¸“à¸±à¸Žà¸à¸“à¸´à¸Šà¸²', 'à¸›à¸±à¹‰à¸™à¹€à¸›à¸µà¹ˆà¸¢à¸¡à¸—à¸­à¸‡', 'à¸«à¸à¸´à¸‡', '1234567890123', '2020-04-01'),
(6, '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `use_id` int(11) NOT NULL,
  `Student_ID` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`use_id`, `Student_ID`, `status`) VALUES
(1, 'admin1', 'admin'),
(2, '614259012', ''),
(3, '614259045', '');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(11) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_code` varchar(100) NOT NULL,
  `w_mu` varchar(100) NOT NULL,
  `w_tum` varchar(100) NOT NULL,
  `w_per` varchar(100) NOT NULL,
  `w_por` varchar(100) NOT NULL,
  `w_pai` varchar(100) NOT NULL,
  `w_ps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work_id`, `w_name`, `w_code`, `w_mu`, `w_tum`, `w_per`, `w_por`, `w_pai`, `w_ps`) VALUES
(1, 'à¸§à¹ˆà¸²à¸‡', '-', '-', '-', '-', '-', '73180', 'à¸§à¹ˆà¸²à¸‡'),
(2, 'à¸­à¸¡à¸£à¹€à¸—à¸ž', '-', '-', 'à¸šà¸²à¸‡à¹€à¸¥à¸™', 'à¸šà¸²à¸‡à¹€à¸¥à¸™', 'à¸™à¸„à¸£à¸›à¸à¸¡', '-', 'à¸žà¸™à¸±à¸à¸‡à¸²à¸™'),
(3, '--', '-', '-', '-', '-', '-', '-', '--'),
(4, '', '', '', '', '', '', '', ''),
(5, 'à¸šà¹‰à¸²à¸™à¸™à¸™à¸™', '77', '5555', 'à¸—à¹ˆà¸²à¹€à¸ªà¸²', 'à¸à¸³à¹à¸žà¸‡à¹à¸ªà¸™', 'à¸™à¸„à¸£à¸›à¸à¸¡', '73140', 'à¸žà¸™à¸±à¸à¸‡à¸²à¸™'),
(6, '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chil`
--
ALTER TABLE `chil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons`
--
ALTER TABLE `cons`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`use_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chil`
--
ALTER TABLE `chil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cons`
--
ALTER TABLE `cons`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `use_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
