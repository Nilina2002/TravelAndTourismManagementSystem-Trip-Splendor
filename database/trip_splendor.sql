-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 02:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip.splendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_service_provider`
--

CREATE TABLE `accommodation_service_provider` (
  `ASP_ID` varchar(15) NOT NULL,
  `F_Name` varchar(20) DEFAULT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `ASP_Address` varchar(50) DEFAULT NULL,
  `ASP_email` varchar(50) NOT NULL
) ;

--
-- Dumping data for table `accommodation_service_provider`
--

INSERT INTO `accommodation_service_provider` (`ASP_ID`, `F_Name`, `L_Name`, `ASP_Address`, `ASP_email`) VALUES
('ASP014', 'Ashwin', 'Perera', 'Hill VIew Road, Kandy, Central Province, Sri Lanka', 'ashwinperera003asp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_Id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `password`) VALUES
('AD1001', 'nilina');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Admin_ID` varchar(15) NOT NULL,
  `Admin_Name` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Admin_email` varchar(50) NOT NULL
) ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Admin_ID`, `Admin_Name`, `DOB`, `Admin_email`) VALUES
('Admin001', 'Pradeep Kumara', '1996-01-31', 'admin001@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `asp_feedback`
--

CREATE TABLE `asp_feedback` (
  `ASP_ID` varchar(15) NOT NULL,
  `Feedback_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asp_feedback`
--

INSERT INTO `asp_feedback` (`ASP_ID`, `Feedback_ID`) VALUES
('ASP014', 'F_ASP1382'),
('ASP014', 'F_ASP1383');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Full_Name` varchar(100) NOT NULL,
  `Name_On_Card` varchar(20) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Addresss` varchar(200) NOT NULL,
  `Payment_Details` varchar(100) NOT NULL,
  `Card_Number` varchar(100) NOT NULL,
  `Exp_Year` varchar(100) NOT NULL,
  `Enter_Amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_c`
--

CREATE TABLE `booking_c` (
  `Payment_ID` varchar(10) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Transportation` varchar(20) NOT NULL,
  `Card_Number` int(10) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_c`
--

INSERT INTO `booking_c` (`Payment_ID`, `F_Name`, `email`, `Address`, `Transportation`, `Card_Number`, `exp_date`, `cvv`) VALUES
('1', 'Nilina Nilaksha', 'asd@gmail.com', '398/1/B,Gammana Road,', 'Car', 123, '0000-00-00', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` varchar(15) NOT NULL,
  `Feedback_Date` date NOT NULL,
  `Comment` varchar(50) DEFAULT NULL,
  `Rating` varchar(30) DEFAULT NULL,
  `Admin_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Feedback_Date`, `Comment`, `Rating`, `Admin_ID`) VALUES
('F_AG1380', '2023-12-25', 'Exceptional service and attention to detail, made ', 'Good', 'Admin001'),
('F_ASP1382', '2023-12-28', 'Friendly staff and comfortable accommodations, wil', 'Excellent', 'Admin001'),
('F_ASP1383', '2024-01-01', 'Fantastic location and top-notch service, exceeded', 'Very Good', 'Admin001'),
('F_USP1379', '2023-12-21', 'Efficient and reliable service, thank you!', 'Excellent', 'Admin001'),
('F_USP1381', '2023-12-25', 'Great customer support, resolved my issue quickly.', 'Very Good', 'Admin001');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_ID` varchar(15) NOT NULL,
  `Hotel_Name` varchar(50) NOT NULL,
  `Location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_ID`, `Hotel_Name`, `Location`) VALUES
('H432', 'Grand Serendib Hotel', 'Kandy, Sri Lanka'),
('H433', 'The Edgware Cabana', 'Nuwara Eliya, Sri Lanka'),
('H434', 'Wild Culture Yala', 'Yala, Sri Lanka'),
('H435', 'Radisson Hotel', 'Colombo, Sri Lanka'),
('H436', '98 Acres Resort & Spa', 'Ella, Sri Lanka');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_Id` int(20) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `date_` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `Package_ID` int(15) NOT NULL,
  `Package_Name` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Start Date` date NOT NULL,
  `End Date` date NOT NULL,
  `Availability` enum('Yes','No') NOT NULL,
  `Destinations` varchar(200) NOT NULL,
  `Transportation` varchar(30) NOT NULL,
  `Accomodations` varchar(200) NOT NULL,
  `Meals` varchar(200) NOT NULL,
  `Activities` varchar(500) NOT NULL,
  `Inclusions` varchar(500) NOT NULL,
  `Exclusions` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_ID` varchar(15) NOT NULL,
  `ASP_ID` varchar(15) NOT NULL,
  `Hotel_ID` varchar(15) NOT NULL,
  `Reservation_Date` date NOT NULL,
  `Checkin_Date` date NOT NULL,
  `Checkout_Date` date NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_ID`, `ASP_ID`, `Hotel_ID`, `Reservation_Date`, `Checkin_Date`, `Checkout_Date`, `total_price`) VALUES
('RES1457', 'ASP014', 'H433', '2024-01-01', '2024-01-14', '2024-01-21', 84500),
('RES1458', 'ASP014', 'H436', '2024-01-01', '2024-02-11', '2024-02-25', 136000),
('RES1459', 'ASP014', 'H433', '2024-01-02', '2024-01-21', '2024-01-30', 84500),
('RES1460', 'ASP014', 'H432', '2024-01-04', '2024-01-07', '2024-01-21', 160000),
('RES1461', 'ASP014', 'H434', '2024-01-04', '2024-02-01', '2024-02-22', 292700);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_hotel`
--

CREATE TABLE `reserve_hotel` (
  `Reservation_ID` varchar(15) NOT NULL,
  `Hotel_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve_hotel`
--

INSERT INTO `reserve_hotel` (`Reservation_ID`, `Hotel_ID`) VALUES
('RES1457', 'H433'),
('RES1458', 'H436'),
('RES1459', 'H433'),
('RES1460', 'H432'),
('RES1461', 'H434');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `Transportation_ID` varchar(15) NOT NULL,
  `Transportation_type` varchar(30) NOT NULL,
  `Rate` varchar(30) DEFAULT NULL,
  `Agent_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`Transportation_ID`, `Transportation_type`, `Rate`, `Agent_ID`) VALUES
('TR1455', 'Van', 'Very Good', 'AG023'),
('TR1456', 'Bus', 'Excellent', 'AG023'),
('TR1457', 'Car', 'Good', 'AG023'),
('TR1458', 'Van', 'Poor', 'AG023'),
('TR1459', 'Car', 'Very Good', 'AG023');

-- --------------------------------------------------------

--
-- Table structure for table `travelagent_feedback`
--

CREATE TABLE `travelagent_feedback` (
  `Agent_ID` varchar(15) NOT NULL,
  `Feedback_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travelagent_feedback`
--

INSERT INTO `travelagent_feedback` (`Agent_ID`, `Feedback_ID`) VALUES
('AG023', 'F_AG1380');

-- --------------------------------------------------------

--
-- Table structure for table `traveller_data`
--

CREATE TABLE `traveller_data` (
  `Traveller_Id` int(15) NOT NULL,
  `F_Name` varchar(20) DEFAULT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Passport_No` varchar(20) NOT NULL,
  `e_mail` varchar(50) NOT NULL
) ;

--
-- Dumping data for table `traveller_data`
--

INSERT INTO `traveller_data` (`Traveller_Id`, `F_Name`, `L_Name`, `City`, `Country`, `DOB`, `Passport_No`, `e_mail`) VALUES
(3, 'Emily', 'Johnson', 'Paris', 'France', '2003-01-02', 'FG2596567', 'emilylc@gmail.com'),
(4, 'Hara', 'Wilson', 'Moscow', 'Russia', '2003-10-12', 'LP35694236', 'wilsonvihara@gmail.com'),
(7, 'anjana', 'liyanagamage', 'New York', 'India', '2024-05-02', 'N123344', 'anajana@gmail.com'),
(8, 'anjana', 'liyanagamage', 'New York', 'India', '2024-05-02', 'N123344', 'anajana@gmail.com'),
(11, 'qwd', 'asd', 'asd', 'asd', '2024-05-09', 'asd', 'asd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `travel_agent`
--

CREATE TABLE `travel_agent` (
  `Agent_ID` varchar(15) NOT NULL,
  `F_Name` varchar(20) DEFAULT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `TA_Address` varchar(50) DEFAULT NULL,
  `TA_email` varchar(50) NOT NULL
) ;

--
-- Dumping data for table `travel_agent`
--

INSERT INTO `travel_agent` (`Agent_ID`, `F_Name`, `L_Name`, `TA_Address`, `TA_email`) VALUES
('AG023', 'Nadil', 'Dulwin', 'Kandy Road, Kiribathgoda, Western Province, Sri La', 'nadildulwinlm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usp_feedback`
--

CREATE TABLE `usp_feedback` (
  `USP_ID` varchar(15) NOT NULL,
  `Feedback_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usp_feedback`
--

INSERT INTO `usp_feedback` (`USP_ID`, `Feedback_ID`) VALUES
('USP224', 'F_USP1379'),
('USP224', 'F_USP1381');

-- --------------------------------------------------------

--
-- Table structure for table `utility_service_provider`
--

CREATE TABLE `utility_service_provider` (
  `USP_ID` varchar(15) NOT NULL,
  `F_Name` varchar(20) DEFAULT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  `USP_Address` varchar(50) DEFAULT NULL,
  `USP_email` varchar(50) NOT NULL
) ;

--
-- Dumping data for table `utility_service_provider`
--

INSERT INTO `utility_service_provider` (`USP_ID`, `F_Name`, `L_Name`, `USP_Address`, `USP_email`) VALUES
('USP224', 'Mithusha', 'Abesingha', 'Gamunu Road, Passara, Uva Province, Sri Lanka', 'abesinghausp@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation_service_provider`
--
ALTER TABLE `accommodation_service_provider`
  ADD PRIMARY KEY (`ASP_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_Id`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `asp_feedback`
--
ALTER TABLE `asp_feedback`
  ADD PRIMARY KEY (`ASP_ID`,`Feedback_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Full_Name`);

--
-- Indexes for table `booking_c`
--
ALTER TABLE `booking_c`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `ADMIN_ID_FK` (`Admin_ID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_Id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ASP_ID`,`Reservation_ID`),
  ADD KEY `HOTEL_ID_FK2` (`Hotel_ID`);

--
-- Indexes for table `reserve_hotel`
--
ALTER TABLE `reserve_hotel`
  ADD PRIMARY KEY (`Reservation_ID`,`Hotel_ID`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`Transportation_ID`),
  ADD KEY `AGENT_ID_FK1` (`Agent_ID`);

--
-- Indexes for table `travelagent_feedback`
--
ALTER TABLE `travelagent_feedback`
  ADD PRIMARY KEY (`Agent_ID`,`Feedback_ID`);

--
-- Indexes for table `traveller_data`
--
ALTER TABLE `traveller_data`
  ADD PRIMARY KEY (`Traveller_Id`);

--
-- Indexes for table `travel_agent`
--
ALTER TABLE `travel_agent`
  ADD PRIMARY KEY (`Agent_ID`);

--
-- Indexes for table `usp_feedback`
--
ALTER TABLE `usp_feedback`
  ADD PRIMARY KEY (`USP_ID`,`Feedback_ID`);

--
-- Indexes for table `utility_service_provider`
--
ALTER TABLE `utility_service_provider`
  ADD PRIMARY KEY (`USP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_Id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `Package_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `traveller_data`
--
ALTER TABLE `traveller_data`
  MODIFY `Traveller_Id` int(15) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `ADMIN_ID_FK` FOREIGN KEY (`Admin_ID`) REFERENCES `administrator` (`Admin_ID`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `ASP_ID_FK1` FOREIGN KEY (`ASP_ID`) REFERENCES `accommodation_service_provider` (`ASP_ID`),
  ADD CONSTRAINT `HOTEL_ID_FK2` FOREIGN KEY (`Hotel_ID`) REFERENCES `hotel` (`Hotel_ID`);

--
-- Constraints for table `transportation`
--
ALTER TABLE `transportation`
  ADD CONSTRAINT `AGENT_ID_FK1` FOREIGN KEY (`Agent_ID`) REFERENCES `travel_agent` (`Agent_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
