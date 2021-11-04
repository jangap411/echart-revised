-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 06:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echart1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `idchart` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `startTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL,
  `patientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`idchart`, `title`, `startTime`, `EndTime`, `patientId`) VALUES
(3, 'Medication Taken', '2019-10-03 00:00:00', '2019-10-03 00:00:00', 3),
(4, 'Medication Taken', '2019-10-01 00:00:00', '2019-10-01 00:00:00', 3),
(5, 'Medication Taken', '2019-10-02 00:00:00', '2019-10-03 00:00:00', 3),
(6, 'Medication Taken', '2019-10-08 00:00:00', '2019-10-09 00:00:00', 3),
(7, 'Medication Taken', '2019-10-09 00:00:00', '2019-10-10 00:00:00', 10),
(8, 'Medication Taken', '2019-10-08 00:00:00', '2019-10-09 00:00:00', 10),
(9, 'Medication Taken', '2019-10-08 00:00:00', '2019-10-09 00:00:00', 4),
(10, 'Medication Taken', '2019-10-02 00:00:00', '2019-10-03 00:00:00', 11);

-- --------------------------------------------------------

--
-- Table structure for table `encounter`
--

CREATE TABLE `encounter` (
  `idEncounter` int(11) NOT NULL,
  `EncounterDateTime` datetime DEFAULT NULL,
  `EncounterEndDateTime` varchar(45) DEFAULT NULL,
  `PrimaryDiagnosis` int(11) NOT NULL,
  `SecondaryDiagnosis` int(11) NOT NULL,
  `PatientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicalstaff`
--

CREATE TABLE `medicalstaff` (
  `idMedicalStaff` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalstaff`
--

INSERT INTO `medicalstaff` (`idMedicalStaff`, `fname`, `lname`, `uname`, `email`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@email.com', 'admin', 'admin'),
(2, 'Francis', 'Mission', 'fmission', 'fmission@email.com', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `idPatient` int(11) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `addr` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `occupantient` varchar(100) DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `age` varchar(5) NOT NULL,
  `city` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idPatient`, `Fname`, `Lname`, `dob`, `addr`, `phone`, `occupantient`, `sex`, `pic_path`, `age`, `city`, `prov`) VALUES
(3, 'John', 'Smith', '1994-11-15', 'Modilon Road', '1234', 'Teacher', 'Male', 'C:\\Users\\Jedidiah Angap\\Documents\\Visual Studio 2017\\Projects\\TBeChartApp\\TBeChart\\images\\indaex.png', '25', 'Madang', 'Madang'),
(4, 'Crystal ', 'Water', '1999-09-15', 'Some in Pom City', '887654321', 'Student', 'Female', 'C:\\Users\\Jedidiah Angap\\Documents\\Visual Studio 2017\\Projects\\TBeChartApp\\TBeChart\\images\\indsex.png', '20', 'POM', 'NCD'),
(5, 'Leoba', 'Horris', '1996-02-06', 'P.O BOX\r\n422\r\n', '675 890584', 'Student', 'Female', 'C:\\Users\\Jedidiah Angap\\Pictures\\phone\\bagarap\\DSC_0546.JPG', '23', 'Madang', 'Madang'),
(6, 'Azril', 'Muno', '1993-04-25', 'Madang', '76543210', 'Student', 'Male', 'C:\\Users\\Jedidiah Angap\\Pictures\\phone\\DSC_0420.JPG', '26', 'Madang', 'Madang'),
(10, 'Justin', 'Bieber', '1963-09-13', 'DWU', '123456789', 'DWU Ranger', 'Male', 'C:\\Users\\Jedidiah Angap\\Documents\\Visual Studio 2017\\Projects\\TBeChartApp\\TBeChart\\images\\2916 (2).jpg', '56', 'Madang', 'Madang'),
(11, 'Peter', 'Oneil', '1969-07-16', 'Some where in NCD', '987654', 'Member', 'Male', 'C:\\Users\\Jedidiah Angap\\Documents\\Visual Studio 2017\\Projects\\TB_App\\eChart\\pic\\po.jpg', '50', 'Port Moresby', 'NCD');

-- --------------------------------------------------------

--
-- Table structure for table `primarydiagnosis`
--

CREATE TABLE `primarydiagnosis` (
  `idconcepts` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `ShortName` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `primarydiagnosis`
--

INSERT INTO `primarydiagnosis` (`idconcepts`, `Name`, `ShortName`, `Description`) VALUES
(1, 'tt', 'tt', 'tt');

-- --------------------------------------------------------

--
-- Table structure for table `seconddiagnosis`
--

CREATE TABLE `seconddiagnosis` (
  `idconcepts` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `ShortName` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`idchart`),
  ADD KEY `fk_chart_Patient1_idx` (`patientId`);

--
-- Indexes for table `encounter`
--
ALTER TABLE `encounter`
  ADD PRIMARY KEY (`idEncounter`),
  ADD KEY `fk_Encounter_concepts_idx` (`PrimaryDiagnosis`),
  ADD KEY `fk_Encounter_concepts_21_idx` (`SecondaryDiagnosis`),
  ADD KEY `fk_Encounter_Patient1_idx` (`PatientId`);

--
-- Indexes for table `medicalstaff`
--
ALTER TABLE `medicalstaff`
  ADD PRIMARY KEY (`idMedicalStaff`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idPatient`);

--
-- Indexes for table `primarydiagnosis`
--
ALTER TABLE `primarydiagnosis`
  ADD PRIMARY KEY (`idconcepts`);

--
-- Indexes for table `seconddiagnosis`
--
ALTER TABLE `seconddiagnosis`
  ADD PRIMARY KEY (`idconcepts`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `idchart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `encounter`
--
ALTER TABLE `encounter`
  MODIFY `idEncounter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicalstaff`
--
ALTER TABLE `medicalstaff`
  MODIFY `idMedicalStaff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `primarydiagnosis`
--
ALTER TABLE `primarydiagnosis`
  MODIFY `idconcepts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seconddiagnosis`
--
ALTER TABLE `seconddiagnosis`
  MODIFY `idconcepts` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chart`
--
ALTER TABLE `chart`
  ADD CONSTRAINT `fk_chart_Patient1` FOREIGN KEY (`patientId`) REFERENCES `patient` (`idPatient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `encounter`
--
ALTER TABLE `encounter`
  ADD CONSTRAINT `fk_Encounter_Patient1` FOREIGN KEY (`PatientId`) REFERENCES `patient` (`idPatient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Encounter_concepts` FOREIGN KEY (`PrimaryDiagnosis`) REFERENCES `primarydiagnosis` (`idconcepts`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Encounter_concepts_21` FOREIGN KEY (`SecondaryDiagnosis`) REFERENCES `seconddiagnosis` (`idconcepts`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
