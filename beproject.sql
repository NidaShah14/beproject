-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2018 at 01:54 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beproject`
--



-- --------------------------------------------------------

--
-- Table structure for table `requests`
--
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` int(10) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Aadhar` varchar(300) NOT NULL,
  `Verified` enum('1','0','-1','') NOT NULL,
  `Type` enum('Farmer','Warehouse Manager','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `User_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `User_Id` int(10) NOT NULL,
  `Warehouse_Id` int(10) NOT NULL,
  `Name` varchar(350) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_details`
--

CREATE TABLE `warehouse_details` (
  `Warehouse_Id` int(10) NOT NULL,
  `Crop_Name` varchar(100) NOT NULL,
  `Max_Capacity` decimal(10,2) NOT NULL,
  `Used_Capacity` decimal(10,2) NOT NULL,
  `Price` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--
CREATE TABLE `requests` (
  `Request_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL,
  `Warehouse_Id` int(10) NOT NULL,
  `Crop_Name` varchar(300) NOT NULL,
  `Quantity` decimal(10,2) NOT NULL,
  `Status` enum('-1','0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `logs` (
  `Log_Id` int(10) NOT NULL,
  `User_Id` int(10) NOT NULL,
  `Warehouse_Id` int(10) NOT NULL,
  `Crop_Name` varchar(150) NOT NULL,
  `Quantity` decimal(10,2) NOT NULL,
  `Price_Per_Quintal` decimal(10,3) NOT NULL,
  `Total_Price` decimal(10,3) NOT NULL,
  `Status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`Log_Id`),
  ADD KEY `Warehouse_Id Constraint` (`Warehouse_Id`),
  ADD KEY `User Constriant` (`User_Id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`Request_Id`),
  ADD KEY `User_Id Constraint` (`User_Id`),
  ADD KEY `Warehoiuse_Id Constraint` (`Warehouse_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD KEY `Verification Constraint` (`User_Id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`Warehouse_Id`),
  ADD KEY `User-Warehouse Relation` (`User_Id`);

--
-- Indexes for table `warehouse_details`
--
ALTER TABLE `warehouse_details`
  ADD KEY `Warehouse Constraint` (`Warehouse_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `Log_Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `Request_Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `Warehouse_Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `User Constriant` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Warehouse_Id Constraint` FOREIGN KEY (`Warehouse_Id`) REFERENCES `warehouse` (`Warehouse_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `User_Id Constraint` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Warehoiuse_Id Constraint` FOREIGN KEY (`Warehouse_Id`) REFERENCES `warehouse` (`Warehouse_Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `verification`
--
ALTER TABLE `verification`
  ADD CONSTRAINT `Verification Constraint` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `User-Warehouse Relation` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warehouse_details`
--
ALTER TABLE `warehouse_details`
  ADD CONSTRAINT `Warehouse Constraint` FOREIGN KEY (`Warehouse_Id`) REFERENCES `warehouse` (`Warehouse_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
