-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 01:44 AM
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

--
-- Dumping data for table `comprehensive_requirement`
--

INSERT INTO `comprehensive_requirement` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `comprehensive_requirement_code`, `comprehensive_requirement_name`, `description`) VALUES
('e202ae50-a4cf-48ad-ba41-a05b1e0de84f', 1, NULL, '2021-03-18 15:01:13', '2021-03-18 15:23:32', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'TN', 'Transkrip Nilai', NULL);

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

--
-- Dumping data for table `field_of_study`
--

INSERT INTO `field_of_study` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `field_of_study_code`, `field_of_study_name`, `description`) VALUES
('c3854cbe-247a-495f-a799-dfd47ef9feed', 1, NULL, '2021-03-18 12:29:31', '2021-03-18 12:33:13', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'IS', 'Information System', NULL);

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

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `majors_code`, `majors_name`, `description`) VALUES
('a1e70286-d3ab-4072-8c6d-1d8783b81a44', 1, NULL, '2021-03-18 12:07:52', '2021-03-18 12:07:52', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', NULL, 'SI', 'Sistem Informasi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
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

INSERT INTO `person` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `nim`, `nip`, `given_name`, `middle_name`, `surname`, `business_entity_id`, `birth_date`, `gender_code`, `person_type_code`) VALUES
('2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', NULL, NULL, NULL, '09031281520102', NULL, 'Dodi', NULL, 'Novembri', NULL, NULL, NULL, 4),
('aa96d77c-734d-4b4f-b49e-1649a958a7ff', 1, NULL, '2021-03-21 05:02:53', '2021-03-21 05:02:53', NULL, NULL, NULL, '197811172006042001', 'Endang', 'Lestari', 'Ruskan', NULL, NULL, NULL, 3);

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
('0402d2b0-83ee-4a7b-bf9f-072af443c772', 1, NULL, '2021-03-21 05:19:08', '2021-03-21 05:19:08', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '6056d74c87abf.jpg', 'ban.jpg', 7255, 'img/kkt/', NULL),
('6ee98d32-c9ab-4a21-a391-0cbfc1098d80', 1, NULL, '2021-03-21 05:19:08', '2021-03-21 05:19:08', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '6056d74c73866.jpg', 'gnti_ban.jpg', 50812, 'img/kkt/', NULL),
('8dc02faf-187d-492a-a0b2-d6bcfd8ecfad', 1, NULL, '2021-03-21 05:19:08', '2021-03-21 05:19:08', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '6056d74c4fe2a.png', 'download.png', 4090, 'img/kkt/', NULL);

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

--
-- Dumping data for table `proposal_seminar_requirement`
--

INSERT INTO `proposal_seminar_requirement` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `proposal_seminar_requirement_code`, `proposal_seminar_requirement_name`, `description`) VALUES
('eed8b704-6e16-41cd-8d2b-7743f2aab1ad', 1, NULL, '2021-03-18 15:23:06', '2021-03-18 15:23:06', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', NULL, 'KRS', 'Kartu Rancangan Studi', NULL);

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
  `thesis_status_code` tinyint(4) DEFAULT NULL,
  `total_sks_now` int(11) DEFAULT NULL,
  `total_sks_transkrip` int(11) DEFAULT NULL,
  `is_kkt_file_set` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_thesis`
--

INSERT INTO `student_thesis` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `lecturer_id`, `college_student_id`, `thesis_status_code`, `total_sks_now`, `total_sks_transkrip`, `is_kkt_file_set`) VALUES
('78b1ce75-3238-4223-a732-30c4a5677a45', 1, NULL, '2021-03-21 05:19:08', '2021-03-21 15:25:09', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 2, 12, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_thesis_history`
--

CREATE TABLE `student_thesis_history` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `lecturer_id` varchar(36) DEFAULT NULL,
  `college_student_id` varchar(36) DEFAULT NULL,
  `history_code` tinyint(4) DEFAULT NULL,
  `total_sks_now` int(11) DEFAULT NULL,
  `total_sks_transkrip` int(11) DEFAULT NULL,
  `description` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_thesis_history`
--

INSERT INTO `student_thesis_history` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `lecturer_id`, `college_student_id`, `history_code`, `total_sks_now`, `total_sks_transkrip`, `description`) VALUES
('bea7eb89-8bef-4e60-b0b6-6445d787d833', 1, NULL, '2021-03-21 16:38:43', '2021-03-21 16:38:43', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 2, 12, 12, 'ga bagus');

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

--
-- Dumping data for table `thesis_topic`
--

INSERT INTO `thesis_topic` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `thesis_topic_code`, `thesis_topic_name`, `description`) VALUES
('2b54d07f-8c89-4fc1-a57c-50dec3c2c006', 1, NULL, '2021-03-17 15:08:23', '2021-03-17 15:13:49', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'SPK', 'Sistem Pendukung Keputusan', NULL);

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
('1c53e01a-27f4-4c67-b5fd-31afc55057e7', 1, NULL, '2021-03-16 07:59:21', '2021-03-21 04:59:53', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 'pengelola', '$2y$12$wdmMZFDREdMADYtzVqa.bu/1XThATLvAsaAdROBXFQRPUx126G6be', 'SK6gpikhiFARHUaxy9M5AP7ZO9AgSgRrivf81dyOe3T8dOZpPNstBzj5CUa9', 2),
('695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 1, NULL, '2021-03-16 12:35:00', '2021-03-21 05:24:38', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '09031281520102', '$2y$12$0z/e9V4KEPeryJKPR0ikNeO2BJaqp72NNIgacnv5E6zl3MzEEI03q', '55uDUmiILcaMEr6rUKZCGBfsVsqs3RjA729Wc1SVc1JVmlZyZE6zpIwNiL6B', 4),
('b190c023-dda1-42dd-880f-99a647fc616f', 1, NULL, '2021-03-21 05:02:54', '2021-03-21 05:02:54', NULL, NULL, NULL, '197811172006042001', '$2y$10$gCL8ewBQkBcgRxD2uCTgru6IHwhZKqTBeQd0xtW4Zt9EwKAN7krx2', NULL, 3),
('b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', '2021-03-21 05:23:32', NULL, NULL, NULL, 'admin', '$2y$12$YJJKvLXoJqG13lubV4hC8epwGCABPQ7e1VS6N2aNJea7uI3aw2V.i', 'nxG5nsEP7QB42At1K845kTR9h1Ho5TqcNhV2yT0XNsJdKqmnLeJAQQjLj0XR', 1);

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
-- Dumping data for table `year_of_education`
--

INSERT INTO `year_of_education` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `year_of_education_code`, `year_of_education_name`, `description`) VALUES
('6cb0160a-437c-4d4f-8160-18d4f1283c68', 1, NULL, '2021-03-18 12:14:53', '2021-03-18 12:20:12', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '15', '2015', NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `student_thesis_history`
--
ALTER TABLE `student_thesis_history`
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
