-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 08, 2018 at 05:36 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `squareboat`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `Name` mediumtext NOT NULL,
  `Email` mediumtext NOT NULL,
  `Password` mediumtext NOT NULL,
  `Qualifications` mediumtext NOT NULL,
  `GPA` mediumtext NOT NULL,
  `Experience` int(100) NOT NULL,
  `Skills` mediumtext NOT NULL,
  `Phone` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `Name`, `Email`, `Password`, `Qualifications`, `GPA`, `Experience`, `Skills`, `Phone`) VALUES
(1, 'Saneer Gera', 'saneergera@gmail.com', '$2y$10$6YF1Sg1LIz7yXQHr8g0q8ur3PIeCPf6QYrQ0InqSyagTNm6RylvS6', 'BTECH', '8.4', 0, 'Web Development', '9023864848'),
(2, 'Rohan Joshi', 'rohanjoshi@gmail.com', '$2y$10$6YF1Sg1LIz7yXQHr8g0q8ur3PIeCPf6QYrQ0InqSyagTNm6RylvS6', 'MCA', '9.4', 2, 'Mobile App Development', '9463964539'),
(3, 'Aditya Bansal', 'adityabansal@gmail.com', '$2y$10$6YF1Sg1LIz7yXQHr8g0q8ur3PIeCPf6QYrQ0InqSyagTNm6RylvS6', 'Bcom', '6.5', 4, 'Software Development', '9888887236');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `Job` int(11) NOT NULL,
  `Seeker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `Job`, `Seeker`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Job`
--

CREATE TABLE `Job` (
  `id` int(11) NOT NULL,
  `Title` mediumtext NOT NULL,
  `Description` mediumtext NOT NULL,
  `Posted_By` mediumtext NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Job`
--

INSERT INTO `Job` (`id`, `Title`, `Description`, `Posted_By`, `salary`) VALUES
(1, 'Intern', 'At Microsoft, our interns work on projects that matter – and your team will rely on your skills and insights to help deliver those projects to market. This is your chance to bring your solutions and ideas to life while working on cutting-edge technology. We offer internships in all job families and solution areas, and it’s open to current students in Bachelor’s, Master’s, MBA, PhD programs.', 'Microsoft', 5),
(2, 'Software Engineer', 'Google\'s software engineers develop the next-generation technologies that change how billions of users connect, explore, and interact with information and one another. Our products need to handle information at massive scale, and extend well beyond web search. We\'re looking for engineers who bring fresh ideas from all areas, including information retrieval, distributed computing, large-scale system design, networking and data storage, security, artificial intelligence, natural language processing, UI design and mobile; the list goes on and is growing every day. As a software engineer, you will work on a specific project critical to Google’s needs with opportunities to switch teams and projects as you and our fast-paced business grow and evolve. We need our engineers to be versatile, display leadership qualities and be enthusiastic to take on new problems across the full-stack as we continue to push technology forward.', 'Google', 11),
(3, 'Dev oops', 'evOps is where any application starts. In today’s increasingly competitive world, the agility to be able to try things out quickly and move on without incurring upfront costs or facing delays while procuring hardware and integrating into your on premises environment is key to being successful. Multiple, disposable, and recreatable environments that are accessible around the globe are a must have for application lifecycle management. Configuration management tools that suits your environment, containers, and choice of development and continuous integration tools are just a few of the things that the modern developer expects to be at their disposal.', 'Google', 12);

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `id` int(11) NOT NULL,
  `Name` varchar(999) NOT NULL,
  `Email` varchar(999) NOT NULL,
  `Password` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`id`, `Name`, `Email`, `Password`) VALUES
(1, 'Microsoft', 'demom@gmail.com', '$2y$10$6YF1Sg1LIz7yXQHr8g0q8ur3PIeCPf6QYrQ0InqSyagTNm6RylvS6'),
(2, 'Google', 'demog@gmail.com', '$2y$10$6YF1Sg1LIz7yXQHr8g0q8ur3PIeCPf6QYrQ0InqSyagTNm6RylvS6'),
(3, 'Flipkart', 'demof@gmail.com', '$2y$10$6YF1Sg1LIz7yXQHr8g0q8ur3PIeCPf6QYrQ0InqSyagTNm6RylvS6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Seeker` (`Seeker`),
  ADD KEY `Job` (`Job`);

--
-- Indexes for table `Job`
--
ALTER TABLE `Job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Job`
--
ALTER TABLE `Job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`Seeker`) REFERENCES `applicant` (`id`),
  ADD CONSTRAINT `applications_ibfk_3` FOREIGN KEY (`Job`) REFERENCES `Job` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
