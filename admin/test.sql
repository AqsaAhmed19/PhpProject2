-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 06:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `Name`) VALUES
(1, 'karachi'),
(2, 'Islamabad'),
(3, 'Faisalabad'),
(4, 'Multan'),
(5, 'Sailkot'),
(6, 'Lahore'),
(7, 'Quetta'),
(8, 'Faisalabad');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `historydate` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `historydate`, `note`, `type`, `createat`) VALUES
(1, '-2020', 'hgfgdhg', 'hhnh', '2021-03-10 13:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `socailid` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `maritalstatus` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `tmobile` varchar(255) NOT NULL,
  `thome` varchar(255) NOT NULL,
  `twork` varchar(255) NOT NULL,
  `tfax` varchar(255) NOT NULL,
  `Files` varchar(255) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Files` varchar(225) NOT NULL,
  `Phone` int(11) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `Name`, `Files`, `Phone`, `City`, `Gender`) VALUES
(2, 'Aqsa ', 'img/0036beef8bc1c24cfb923bac65d8f94b.jpg', 312348234, 'Faisalabad', 'female'),
(12, 'Aqsa Ahmed', 'img/a1846377d1b493e7cc84654f17860275.jfif', 312348234, 'karachi', 'female'),
(15, 'Ali Khan', 'img/5a7cb6dd01b9028399a871bb6e442fd8.jfif', 312348234, 'karachi', 'male'),
(16, 'Taiba khalid', 'img/da28d955570bf222e0699c9fba1e7f53.jpg', 345676666, 'Sailkot', 'female'),
(17, 'hassan', 'img/94c50767359823f353fd83c07d29c16e.png', 312348234, 'karachi', 'male'),
(18, 'Aqsa Ahmed hj', 'img/0e55a58cf53560e81a49c09f7b3a5187.png', 312348234, 'karachi', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(225) NOT NULL,
  `admin_username` varchar(225) NOT NULL,
  `admin_password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(225) DEFAULT NULL,
  `order_name` varchar(225) NOT NULL,
  `order_address` varchar(225) NOT NULL,
  `order_email` varchar(225) NOT NULL,
  `order_workphoneNo` int(225) NOT NULL,
  `order_cellNo` int(225) NOT NULL,
  `order_dob` date NOT NULL,
  `order_category` varchar(225) NOT NULL,
  `order_remarks` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(225) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` int(225) NOT NULL,
  `product_qty` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Nationality` varchar(225) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Social_Id` int(11) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `Marital-Status` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Country` varchar(225) NOT NULL,
  `Post_Code` int(11) NOT NULL,
  `Region` varchar(225) NOT NULL,
  `City` varchar(225) NOT NULL,
  `Telephone_Mobile` int(11) NOT NULL,
  `Telephone_Home` int(11) NOT NULL,
  `Telephone_Work` int(11) NOT NULL,
  `Telephone_Fax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Nationality`, `Date_of_Birth`, `Social_Id`, `Gender`, `Marital-Status`, `Address`, `Country`, `Post_Code`, `Region`, `City`, `Telephone_Mobile`, `Telephone_Home`, `Telephone_Work`, `Telephone_Fax`) VALUES
(1, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 12344, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 12467, 'East', 'karachi', 54533773, 373737772, 21343535, 123442245),
(2, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 12344, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 12467, 'East', 'karachi', 54533773, 373737772, 21343535, 123442245),
(3, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 12344, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 12467, 'East', 'karachi', 54533773, 373737772, 21343535, 123442245),
(4, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 22344235, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 23345, 'East', 'karachi', 223566567, 24354456, 423554656, 2147483647),
(5, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 22344235, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 23345, 'East', 'karachi', 223566567, 24354456, 423554656, 2147483647),
(6, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 2435656, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 123234, 'East', 'karachi', 766735472, 321324455, 142345466, 2147483647),
(7, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 2435656, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 123234, 'East', 'karachi', 766735472, 321324455, 142345466, 2147483647),
(8, 'Aqsa Ahmed', 'Pakistani', '2021-02-17', 565423, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 4235656, 'East', 'karachi', 654543423, 2147483647, 54543535, 54435445),
(9, 'Aqsa Ahmed', 'Pakistani', '2021-02-17', 565423, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 4235656, 'East', 'karachi', 654543423, 2147483647, 54543535, 54435445),
(10, 'Aqsa Ahmed', 'Pakistani', '2021-02-17', 565423, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 4235656, 'East', 'karachi', 654543423, 2147483647, 54543535, 544354),
(11, 'Aqsa Ahmed', 'Pakistani', '2000-12-31', 1132, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 12223, 'East', 'Multan', 1234556, 13123242, 234434, 23334),
(12, 'aqsa', 'Pakistani', '2000-11-23', 1234, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 2332342, 'East', 'Multan', 1212321, 233243, 23234, 3213213),
(13, 'aqsa', 'Pakistani', '2000-11-23', 1234, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 2332342, 'East', 'Multan', 1212321, 233243, 23234, 3213213),
(14, '', '', '0000-00-00', 0, '', '', '', '', 0, '', 'Multan', 0, 0, 0, 0),
(15, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 12345, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 1234, 'East', 'karachi', 22232434, 123142334, 3233434, 3232234),
(16, 'Aqsa Ahmed', 'Pakistani', '2000-12-19', 12345, 'female', 'Unmarried', '33/7 A Area karachi.', 'Pakistan', 1234, 'East', 'karachi', 22232434, 123142334, 3233434, 3232234),
(17, 'aqsa', '', '0000-00-00', 0, '', '', '', '', 0, '', '', 0, 0, 0, 0),
(18, 'Aqsa Ahmed', '', '0000-00-00', 0, '', '', '', '', 0, '', '', 0, 0, 0, 0),
(19, 'Aqsa Ahmed', '', '0000-00-00', 0, '', '', '', '', 0, '', '', 0, 0, 0, 0),
(20, 'Taiba khalid', '', '0000-00-00', 0, '', '', '', '', 0, '', '', 0, 0, 0, 0),
(21, '', '', '0000-00-00', 0, '', '', '', '', 0, '', '', 0, 0, 0, 0),
(22, '', '', '0000-00-00', 0, '', '', '', '', 0, '', '', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
