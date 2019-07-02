-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2019 at 10:54 AM
-- Server version: 5.6.43-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobpostwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL DEFAULT 'No Name Available',
  `skills` varchar(150) NOT NULL DEFAULT 'No Skills Available',
  `recruitment_type` enum('Walkin','Referral','Selection','Other') DEFAULT 'Walkin',
  `experiance_needed` varchar(50) NOT NULL DEFAULT '0',
  `interview_address` varchar(100) NOT NULL DEFAULT 'Interview Address Unavailable',
  `position` varchar(100) NOT NULL DEFAULT 'Position Unavailable',
  `job_type` enum('Full Time','Part Time','Internship') DEFAULT 'Full Time',
  `job_shift` enum('Day Shift','Night Shift','Rotational') DEFAULT 'Day Shift',
  `job_link` varchar(100) DEFAULT 'No Job Link is There',
  `contact_person_name` varchar(50) DEFAULT 'Not Available',
  `contact_person_position` varchar(50) DEFAULT 'Not Available',
  `contact_person_mobile_no` varchar(10) DEFAULT 'NONE',
  `contact_person_email_id` varchar(50) DEFAULT 'Not Available',
  `posted_by` int(11) NOT NULL,
  `description` varchar(500) DEFAULT 'Not Available',
  `job_locaion` varchar(500) DEFAULT 'Not Available',
  `ctc` varchar(500) DEFAULT 'CTC is not disclosed',
  `interview_date` date DEFAULT NULL,
  `interview_time` time DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `qualification` varchar(500) DEFAULT NULL,
  `cut_off` varchar(50) DEFAULT 'No Cut Off Is there for this job',
  `interview_venue` varchar(500) DEFAULT 'No Venue Available',
  `other_requirment` varchar(500) DEFAULT 'No Other Requirment',
  `rounds` varchar(500) DEFAULT 'No Rounds available',
  `about_company` varchar(2000) DEFAULT 'No data available',
  `vacancy` varchar(200) DEFAULT 'No data available',
  `passing_year` varchar(300) NOT NULL DEFAULT 'Not Provided',
  `specialization` varchar(500) NOT NULL DEFAULT 'Not Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_name`, `skills`, `recruitment_type`, `experiance_needed`, `interview_address`, `position`, `job_type`, `job_shift`, `job_link`, `contact_person_name`, `contact_person_position`, `contact_person_mobile_no`, `contact_person_email_id`, `posted_by`, `description`, `job_locaion`, `ctc`, `interview_date`, `interview_time`, `last_date`, `qualification`, `cut_off`, `interview_venue`, `other_requirment`, `rounds`, `about_company`, `vacancy`, `passing_year`, `specialization`) VALUES
(6, 'SacredBits', 'php, mysql, js', 'Walkin', '0', 'bangluru', 'software developer', 'Full Time', 'Day Shift', 'sdfsd', 'person', 'hr', '9876543210', 'jainamisha566@gmail.com', 1, 'this is a job', 'Not Available', 'CTC is not disclosed', '2019-07-01', '03:00:00', '2019-07-04', NULL, 'No Cut Off Is there for this job', 'No Venue Available', 'No Other Requirment', 'No Rounds available', 'No data available', 'No data available', 'Not Provided', 'Not Available'),
(20, 'google', 'java', 'Referral', '0', 'Interview Address Unavailable', 'founder', 'Part Time', 'Night Shift', 'https://sacredbits.com/jobs', '1234567890', '5', '9876543208', 'job@gmail.com', 3, 'best', 'chakia', '8-12 L', '1111-08-20', '18:43:00', '2019-07-18', 'BE', '75%', '0', 'technical', '3 round', 'google', '7', 'Not Provided', 'Not Available'),
(21, 'Coursecube Private Limited', 'Good Programming Skills, Aptituude & Logical', 'Referral', '0', 'Interview Address Unavailable', 'Trainee Software Engineer', 'Full Time', 'Day Shift', 'https://bit.ly/2RKC18G', '', '', '', '', 1, 'CourseCube Private Limited is hiring for ATMECS Technologies Pvt Ltd (www.atmecs.com)\r\n\r\nNote : *There would be No Registration / Training fee involved. *Free of Cost\r\n           *One Day Process with Offer release.', 'Bengaluru, Hyderabad', '3 LPA', '2019-07-04', '10:00:00', '2019-07-03', ' B.E / B.Tech / M.E / M.Tech / M.C.A / M.Sc', ' 60% throughout Academics', 'Address : 57, 1st Floor, 7th Main, 17th Cross Rd, NS Palya, BTM 2nd Stage, Bengaluru, Karnataka 560076\r\nGoogle Map Location : https://bit.ly/2RiCUVA\r\nLand Marks : Home Needs SuperMarket / SGS Gundu Pulav Hotel.\r\n', '60% throughout Academics\r\nYear of passing 2019 Only', 'Online Test; Group Discussion; Technical Interview & HR', '', '', 'Not Provided', 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `approvedby` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `contactno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `approvedby`, `username`, `password`, `contactno`) VALUES
(1, 'Saurabh', 'Shukla', 'saurabhshukla.developer@gmail.com', 1, 'saurabh', 'admin', '9119145983'),
(2, 'Amisha', 'Jain', 'jainamisha566@gmail.com', 1, 'amisha', 'admin', '8127827104'),
(3, 'Admin', 'Admin', 'abc@gmail.com', 1, 'admin', 'addjob', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posted_by` (`posted_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`posted_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
