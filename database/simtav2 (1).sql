-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 11:04 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simtav2`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_entity`
--

CREATE TABLE `business_entity` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_entity_document`
--

CREATE TABLE `business_entity_document` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `business_entity_id` varchar(36) NOT NULL,
  `document_id` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comprehensive_requirement`
--

CREATE TABLE `comprehensive_requirement` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `comprehensive_requirement_code` varchar(36) NOT NULL,
  `comprehensive_requirement_name` varchar(256) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `field_of_study`
--

CREATE TABLE `field_of_study` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `field_of_study_code` varchar(36) NOT NULL,
  `field_of_study_name` varchar(256) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `majors_code` varchar(36) NOT NULL,
  `majors_name` varchar(256) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `nim` varchar(40) DEFAULT NULL,
  `nip` varchar(40) DEFAULT NULL,
  `given_name` varchar(128) DEFAULT NULL,
  `middle_name` varchar(128) DEFAULT NULL,
  `surname` varchar(128) DEFAULT NULL,
  `business_entity_id` varchar(36) DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `gender_code` int(11) DEFAULT NULL,
  `person_type_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `status`, `sort`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `nim`, `nip`, `given_name`, `middle_name`, `surname`, `business_entity_id`, `birth_date`, `gender_code`, `person_type_code`) VALUES
('2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', NULL, NULL, NULL, '09031281520102', NULL, 'Dodi', NULL, 'Novembri', NULL, NULL, NULL, 4),
('48a93040-862b-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', NULL, NULL, NULL, '09031181520124', NULL, 'Tri', 'Ratna', 'Sari', NULL, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `person_asset`
--

CREATE TABLE `person_asset` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `person_id` varchar(36) DEFAULT NULL,
  `information_type_code` varchar(36) DEFAULT NULL,
  `file_name` varchar(256) DEFAULT NULL,
  `original_file_name` varchar(256) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_asset`
--

INSERT INTO `person_asset` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `person_id`, `information_type_code`, `file_name`, `original_file_name`, `file_size`, `url`, `description`) VALUES
('20f826d2-3ad9-448a-9465-9019c1dd8e8b', 1, NULL, '2021-03-17 10:04:52', '2021-03-17 10:04:52', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '6051d444373ac.png', 'Screenshot (10).png', 238390, 'img/kkt/', NULL),
('3e0e2f8a-5634-4a8f-a9f8-f424c9e2675f', 1, NULL, '2021-03-17 10:04:52', '2021-03-17 10:04:52', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '6051d4443e1f5.png', 'Screenshot (10).png', 238390, 'img/kkt/', NULL),
('8673e968-7a42-4d02-bbb3-e4299acab933', 1, NULL, '2021-03-17 10:04:52', '2021-03-17 10:04:52', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '6051d4443d140.png', 'Screenshot (10).png', 238390, 'img/kkt/', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proposal_seminar_requirement`
--

CREATE TABLE `proposal_seminar_requirement` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `proposal_seminar_requirement_code` varchar(36) NOT NULL,
  `proposal_seminar_requirement_name` varchar(256) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_thesis`
--

CREATE TABLE `student_thesis` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `lecturer_id` varchar(36) DEFAULT NULL,
  `college_student_id` varchar(36) DEFAULT NULL,
  `total_sks_now` int(11) DEFAULT NULL,
  `total_sks_transkrip` int(11) DEFAULT NULL,
  `is_kkt_file_set` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_thesis`
--

INSERT INTO `student_thesis` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `lecturer_id`, `college_student_id`, `total_sks_now`, `total_sks_transkrip`, `is_kkt_file_set`) VALUES
('d013947f-a26a-4cf8-bf49-462ecea619cb', 1, NULL, '2021-03-17 10:04:52', '2021-03-17 10:04:52', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 12, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thesis_topic`
--

CREATE TABLE `thesis_topic` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `thesis_topic_code` varchar(36) NOT NULL,
  `thesis_topic_name` varchar(256) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `person_id` varchar(36) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `remember_token` varchar(256) DEFAULT NULL,
  `user_type_code` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `person_id`, `username`, `password`, `remember_token`, `user_type_code`) VALUES
('1c53e01a-27f4-4c67-b5fd-31afc55057e7', 1, NULL, '2021-03-16 07:59:21', '2021-03-17 08:33:33', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '09031281520102', '$2y$10$0l4zMMAsqtlBDb7A8UKVDe6Ipqa/4ozmPTc6SngKASALaAzJdlUw6', 'VumOvZetoTkKoHMKG7ZS4dXhZdaUKcCEPnHsSlWOcNYh5KWrLVpnrL6ppZjt', 2),
('695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 1, NULL, '2021-03-16 12:35:00', '2021-03-16 12:35:00', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '09031281520103', '$2y$10$fTCkfy4wDfSHjmXyT35bBOEdnmwatA1eygIM8fy/lzImzVvNa0Qxa', NULL, 4),
('b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', '2021-03-16 12:54:21', NULL, NULL, NULL, 'admin', '$2y$12$YJJKvLXoJqG13lubV4hC8epwGCABPQ7e1VS6N2aNJea7uI3aw2V.i', 'xMmctl3kFAPfhNh6Cqu6N3A5c4yrtU5iBG3zIBTgOPhF3oyGgVl57nxQ7iOn', 1),
('fdd40e9f-ec2c-4987-987b-3024266fbf86', 1, NULL, '2021-03-16 07:59:21', '2021-03-16 07:59:21', NULL, NULL, '48a93040-862b-11eb-8b4d-c0b5d79bd8c4', '09031181520124', '$2y$10$Y0Veggk6CFISpAk5/F9FKeGO5wuny60TeJRAKH6ibLO3NEsL.LlXe', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `year_of_education`
--

CREATE TABLE `year_of_education` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `year_of_education_code` varchar(36) NOT NULL,
  `year_of_education_name` varchar(256) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_entity`
--
ALTER TABLE `business_entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_entity_document`
--
ALTER TABLE `business_entity_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comprehensive_requirement`
--
ALTER TABLE `comprehensive_requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `field_of_study`
--
ALTER TABLE `field_of_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_asset`
--
ALTER TABLE `person_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal_seminar_requirement`
--
ALTER TABLE `proposal_seminar_requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_thesis`
--
ALTER TABLE `student_thesis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thesis_topic`
--
ALTER TABLE `thesis_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_of_education`
--
ALTER TABLE `year_of_education`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
