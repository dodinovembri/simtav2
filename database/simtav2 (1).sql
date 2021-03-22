-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 07:02 AM
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
('08fdd8ab-8c0b-4138-b7f8-436e055209eb', 0, NULL, '2021-03-22 03:10:15', '2021-03-22 03:11:17', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '60580a974b714.png', 'user.png', 7150, 'img/kkt/', NULL),
('2cf05e97-87a6-484e-8ce7-802495dfad00', 0, NULL, '2021-03-22 03:10:15', '2021-03-22 03:11:17', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '60580a9747c2f.png', 'user.png', 7150, 'img/kkt/', NULL),
('97f67756-4216-4435-a601-e1b1d8e144bc', 1, NULL, '2021-03-22 03:12:16', '2021-03-22 03:12:16', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '60580b10869d2.png', 'user.png', 7150, 'img/kkt/', NULL),
('c34e5ca3-9129-4845-bc41-5e23394c4119', 1, NULL, '2021-03-22 03:12:16', '2021-03-22 03:12:16', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '60580b108b240.png', 'user.png', 7150, 'img/kkt/', NULL),
('c74565fe-971d-4361-b9bf-a6923ac2c5c9', 0, NULL, '2021-03-22 03:07:02', '2021-03-22 03:07:19', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '605809d670048.png', 'user.png', 7150, 'img/kkt/', NULL),
('d0147b30-4143-4f91-b302-b195dc593168', 0, NULL, '2021-03-22 03:07:02', '2021-03-22 03:07:19', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '605809d6773c8.png', 'user.png', 7150, 'img/kkt/', NULL),
('d7cf6cb0-0f7f-402d-bbb7-a5d7c67eb58a', 0, NULL, '2021-03-22 03:07:02', '2021-03-22 03:07:19', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '605809d6781d0.png', 'user.png', 7150, 'img/kkt/', NULL),
('ec61af68-e1db-45ac-90bf-1d3c47ee5708', 1, NULL, '2021-03-22 03:12:16', '2021-03-22 03:12:16', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '60580b108a211.png', 'user.png', 7150, 'img/kkt/', NULL),
('f18ba194-1926-45d0-9eaa-9f0fd7170ba7', 0, NULL, '2021-03-22 03:10:15', '2021-03-22 03:11:17', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '60580a974a6f2.png', 'user.png', 7150, 'img/kkt/', NULL);

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
('abcbeeb9-1257-4255-90e2-074e1b457283', 1, NULL, '2021-03-22 03:07:02', '2021-03-22 03:27:49', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 4, 1231, 12, 1);

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
  `student_thesis_id` varchar(36) DEFAULT NULL,
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

INSERT INTO `student_thesis_history` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `student_thesis_id`, `lecturer_id`, `college_student_id`, `history_code`, `total_sks_now`, `total_sks_transkrip`, `description`) VALUES
('c260d38a-f8f7-41a8-a10a-615551c8939b', 0, NULL, '2021-03-22 03:07:19', '2021-03-22 03:10:15', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'abcbeeb9-1257-4255-90e2-074e1b457283', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 2, 123, 12, 'ga bagus'),
('c9631845-fdfc-4419-8cc0-efc85fccfe9d', 0, NULL, '2021-03-22 03:11:17', '2021-03-22 03:12:16', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'abcbeeb9-1257-4255-90e2-074e1b457283', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 2, 123, 12, 'males');

-- --------------------------------------------------------

--
-- Table structure for table `student_thesis_supervisor`
--

CREATE TABLE `student_thesis_supervisor` (
  `id` varchar(36) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `updater_id` varchar(36) DEFAULT NULL,
  `college_student_id` varchar(36) DEFAULT NULL,
  `lecturer_id` varchar(36) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_thesis_supervisor`
--

INSERT INTO `student_thesis_supervisor` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `college_student_id`, `lecturer_id`, `description`) VALUES
('1872c064-b6a0-4957-ad59-d903ec466e76', 1, NULL, '2021-03-22 05:57:32', '2021-03-22 05:57:32', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'aa96d77c-734d-4b4f-b49e-1649a958a7ff', NULL);

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
('1c53e01a-27f4-4c67-b5fd-31afc55057e7', 1, NULL, '2021-03-16 07:59:21', '2021-03-22 04:21:37', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 'pengelola', '$2y$12$wdmMZFDREdMADYtzVqa.bu/1XThATLvAsaAdROBXFQRPUx126G6be', 'LSmdJWmFP5dR2HZjgs0h9CIbjNo2mx9WIR86RcB1FdFUQlkyJmV3kHdJhua3', 2),
('695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 1, NULL, '2021-03-16 12:35:00', '2021-03-22 04:20:59', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '09031281520102', '$2y$12$0z/e9V4KEPeryJKPR0ikNeO2BJaqp72NNIgacnv5E6zl3MzEEI03q', 'czJwkWzhynkdvqR0zMucOnkxQ0Qu9sOu9m4KzerYJpkAYP061YPhdo1OB7nM', 4),
('b190c023-dda1-42dd-880f-99a647fc616f', 1, NULL, '2021-03-21 05:02:54', '2021-03-22 03:50:02', NULL, NULL, NULL, '197811172006042001', '$2y$10$gCL8ewBQkBcgRxD2uCTgru6IHwhZKqTBeQd0xtW4Zt9EwKAN7krx2', 'txjYWiHWASaes7gJjGS5K5sEOYkGo3GkH06R2ZrO5yXDe6AIOVJwkdDkXXb5', 3),
('b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', '2021-03-22 04:21:13', NULL, NULL, NULL, 'admin', '$2y$12$YJJKvLXoJqG13lubV4hC8epwGCABPQ7e1VS6N2aNJea7uI3aw2V.i', 'SWWeNKs3Sw7trLHe5AaqGx5SIngZHfevwG30X4JJ5pfIlvk2jkiWK1CyuNjK', 1);

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
-- Indexes for table `student_thesis_supervisor`
--
ALTER TABLE `student_thesis_supervisor`
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
