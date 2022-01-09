-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 05:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951060773_libraries`
--

-- --------------------------------------------------------

--
-- Table structure for table `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(11) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `gioitinh` varchar(5) NOT NULL,
  `namsinh` date NOT NULL,
  `nghenghiep` varchar(100) NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(111, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội'),
(112, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội'),
(113, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội'),
(114, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội'),
(115, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội'),
(116, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội'),
(117, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội'),
(118, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội'),
(119, 'Nguyễn Văn A', 'Nam', '2012-01-05', 'Bác sĩ', '2022-01-06', '2022-01-20', 'Hà Nội');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
