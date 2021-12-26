-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 01:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tideyup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tidepad`
--

CREATE TABLE `tidepad` (
  `id_data` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `beach_orientation` varchar(255) NOT NULL,
  `incoming_wave_angle` varchar(255) NOT NULL,
  `depth` varchar(255) NOT NULL,
  `tidal_condition` varchar(255) NOT NULL,
  `wind_condition` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tidepad`
--

INSERT INTO `tidepad` (`id_data`, `id_user`, `date`, `time`, `location`, `beach_orientation`, `incoming_wave_angle`, `depth`, `tidal_condition`, `wind_condition`, `notes`) VALUES
(1, 123, '2021-12-10', '13:27:00.000000', 'Tanjung Lesung', 'Rocky', '80', '150', 'Normal', 'Normal', ''),
(2, 123, '2021-12-11', '13:29:00.000000', 'Sumba', 'Sandy', '90', '200', 'Normal', 'Normal', ''),
(3, 123, '2021-12-12', '13:29:00.000000', 'Kuta', 'Rocky', '80', '70', 'Normal', 'Normal', ''),
(4, 123, '2021-12-10', '13:30:00.000000', 'Kuta', 'Sandy', '90', '150', 'Normal', 'Normal', ''),
(5, 123, '2021-12-10', '13:31:00.000000', 'Lombok', 'Sandy', '90', '70', 'Normal', 'Normal', ''),
(8, 0, '2022-01-03', '00:00:00.000000', '', '', '', '', '', '', ''),
(9, 0, '2022-01-08', '00:00:00.000000', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kode_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id_user`, `username`, `password`, `kode_user`) VALUES
(123, 'fabilla', '123456', 123),
(456, 'ita', '1234', 456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tidepad`
--
ALTER TABLE `tidepad`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tidepad`
--
ALTER TABLE `tidepad`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
