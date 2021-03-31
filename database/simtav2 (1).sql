-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 08:34 AM
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
('1f0c5269-17a6-4b23-a4bf-e22f5bc656bb', 1, NULL, '2021-03-30 13:31:52', '2021-03-30 14:23:16', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'SI', 'Sistem Informasi', NULL);

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
('55f95e71-2d43-48b0-ad57-729984e42561', 1, NULL, '2021-03-30 14:19:02', '2021-03-30 14:19:02', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', NULL, 'SIBIL', 'Sistem Informasi Bilingual', NULL),
('5f113601-6805-47dd-85c7-00c68bc27e99', 1, NULL, '2021-03-30 13:57:30', '2021-03-30 13:58:33', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'SIREG', 'Sistem Informasi Reguler', NULL);

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
  `person_type_code` int(11) DEFAULT NULL,
  `academic_lecturer_nip` varchar(40) DEFAULT NULL,
  `year_of_education_id` varchar(36) DEFAULT NULL,
  `majors_id` varchar(36) DEFAULT NULL,
  `is_registered_user` tinyint(4) DEFAULT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `nim`, `nip`, `given_name`, `middle_name`, `surname`, `business_entity_id`, `birth_date`, `gender_code`, `person_type_code`, `academic_lecturer_nip`, `year_of_education_id`, `majors_id`, `is_registered_user`, `address`) VALUES
('2565d964-e434-4050-9a18-e0524eb35f80', 1, NULL, '2021-03-30 16:41:14', '2021-03-30 16:41:27', NULL, NULL, NULL, '197811172006042001', 'Endang', 'Lestari', 'Ruskan', NULL, NULL, NULL, 3, NULL, NULL, NULL, 1, 'Palembang'),
('384fbed3-b727-495a-a9c6-d8b7c0c14f29', 1, NULL, '2021-03-30 16:23:27', '2021-03-30 16:53:46', NULL, 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '09031182520124', NULL, 'Tri', 'Ratna', 'Sari', NULL, NULL, NULL, 4, '198706302015041001', '3ad56671-59f3-444e-a890-26c1f7fafddb', '5f113601-6805-47dd-85c7-00c68bc27e99', 1, 'Jakarta Barat'),
('3e6bf132-e192-4764-ad1f-3d04164bc1b4', 1, NULL, '2021-03-30 15:48:19', '2021-03-30 15:48:19', NULL, NULL, NULL, '198201132015042001', 'Dwi', 'Rosa', 'Indah', NULL, NULL, NULL, 3, NULL, NULL, NULL, 1, NULL),
('4f42ea73-7fc2-4994-87af-6d43f600ed30', 1, NULL, '2021-03-30 15:57:39', '2021-03-30 15:57:39', NULL, NULL, NULL, '198305132015109201', 'Allsela', '', 'Meirizia', NULL, NULL, NULL, 3, NULL, NULL, NULL, 1, NULL),
('5656cd73-c09c-4f87-b14a-94fca8ad18e0', 1, NULL, '2021-03-30 15:47:56', '2021-03-30 16:41:32', NULL, 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', NULL, '197107212005011005', 'Jaidan', '', 'Jauhari', NULL, NULL, NULL, 3, NULL, NULL, NULL, 1, NULL),
('aba1df87-cbb5-432f-a44c-b0502bf1c75c', 1, NULL, '2021-03-30 16:01:52', '2021-03-30 16:01:52', NULL, NULL, NULL, '198706302015041001', 'Rahmat', 'Izwan', 'Heroza', NULL, NULL, NULL, 3, NULL, NULL, NULL, 1, NULL),
('faa1de1d-3846-488b-9db1-f5b9bf867c8e', 1, NULL, '2021-03-30 16:23:27', '2021-03-30 16:53:47', NULL, 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '09031281520102', NULL, 'Dodi', NULL, 'Novembri', NULL, NULL, NULL, 4, '198201132015042001', '3ad56671-59f3-444e-a890-26c1f7fafddb', '5f113601-6805-47dd-85c7-00c68bc27e99', 1, 'Jakarta Barat');

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
('5fc1f906-360e-4f2a-bdb2-2f024ff81736', 1, NULL, '2021-03-31 06:15:29', '2021-03-31 06:15:29', 'b7486ac4-ed1a-434f-b376-a137023053a0', NULL, 'faa1de1d-3846-488b-9db1-f5b9bf867c8e', '2', '60641381a2ff0.png', 'Screenshot (6).png', 124066, 'img/kkt/', NULL),
('7ffeef73-0ce0-4fba-aaea-aaa1b4405985', 1, NULL, '2021-03-31 06:15:29', '2021-03-31 06:15:29', 'b7486ac4-ed1a-434f-b376-a137023053a0', NULL, 'faa1de1d-3846-488b-9db1-f5b9bf867c8e', '3', '60641381a3bb0.png', 'Screenshot (25).png', 552245, 'img/kkt/', NULL),
('df1ef8b9-a795-4f03-b372-c8a2c5421940', 1, NULL, '2021-03-31 06:16:30', '2021-03-31 06:16:30', 'b7486ac4-ed1a-434f-b376-a137023053a0', NULL, 'faa1de1d-3846-488b-9db1-f5b9bf867c8e', '4', '606413bead1d4.png', 'Screenshot (10).png', 238390, 'img/consultation_file/', NULL),
('f7982a45-e18b-484c-9aef-69fa7bbfc9ae', 1, NULL, '2021-03-31 06:15:29', '2021-03-31 06:15:29', 'b7486ac4-ed1a-434f-b376-a137023053a0', NULL, 'faa1de1d-3846-488b-9db1-f5b9bf867c8e', '1', '606413819c634.png', 'Screenshot (18).png', 258775, 'img/kkt/', NULL);

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
  `thesis_status_code` tinyint(4) DEFAULT NULL,
  `total_sks_now` int(11) DEFAULT NULL,
  `total_sks_transkrip` int(11) DEFAULT NULL,
  `is_kkt_file_set` tinyint(4) DEFAULT NULL,
  `thesis_topic_id` varchar(36) DEFAULT NULL,
  `title_of_thesis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_thesis`
--

INSERT INTO `student_thesis` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `lecturer_id`, `college_student_id`, `thesis_status_code`, `total_sks_now`, `total_sks_transkrip`, `is_kkt_file_set`, `thesis_topic_id`, `title_of_thesis`) VALUES
('3a295493-f761-4f9a-8b2e-547cf7a5daf9', 1, NULL, '2021-03-31 06:15:29', '2021-03-31 06:33:18', 'b7486ac4-ed1a-434f-b376-a137023053a0', '9ac7c76e-e63e-4d3f-a622-4f28e50469ff', '3e6bf132-e192-4764-ad1f-3d04164bc1b4', 'faa1de1d-3846-488b-9db1-f5b9bf867c8e', 6, 87, 24, 1, '1b47d82e-09ac-44ab-ae72-940de9b69ca8', 'Sistem Pendukung keputusan Pemilihan Topik Tugas Akhir');

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
('36ee1dd7-2bb5-4aa0-9a5d-45271391fcd9', 1, NULL, '2021-03-31 06:16:30', '2021-03-31 06:16:30', 'b7486ac4-ed1a-434f-b376-a137023053a0', NULL, 'faa1de1d-3846-488b-9db1-f5b9bf867c8e', '2565d964-e434-4050-9a18-e0524eb35f80', NULL);

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
('1b47d82e-09ac-44ab-ae72-940de9b69ca8', 1, NULL, '2021-03-30 14:30:25', '2021-03-30 14:31:50', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'SPK', 'Sistem Pendukung Keputusan', NULL),
('1c379f0d-9d48-44ba-91d7-3deda06c81b9', 1, NULL, '2021-03-30 14:32:09', '2021-03-30 14:32:09', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', NULL, 'CRM', 'Customer Relationship Management', NULL);

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
('1c53e01a-27f4-4c67-b5fd-31afc55057e7', 1, NULL, '2021-03-16 07:59:21', '2021-03-30 15:26:12', NULL, 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 'pengelola', '$2y$10$wrKLWT8uvneD20VvrsC7FexwrTJ8wmquWB17ITXuJLiDPXv7G1Fma', 'yYHXIz6TcXHoYDXn75tDHpDNmSpuCtbEz6tfB06xAlMcCXeomjR2uv7u8Pr4', 2),
('42f34444-b2f5-437e-8b02-cbe3db2764dd', 1, NULL, '2021-03-30 15:57:39', '2021-03-30 15:57:39', NULL, NULL, '4f42ea73-7fc2-4994-87af-6d43f600ed30', '198305132015109201', '$2y$10$mSIGkl.AzISn5dTztiw3c.wSaRNlyeDqnTpMC62b.l7qnR6uyO5Fq', NULL, 3),
('64a53a82-8fb7-47e2-80a9-b1f89c571386', 1, NULL, '2021-03-30 16:41:14', '2021-03-30 16:41:14', NULL, NULL, '2565d964-e434-4050-9a18-e0524eb35f80', '197811172006042001', '$2y$10$3.wRQvUSVOmkm5Jms108aOxAJnMhZQATG/8rwayu/gNqvV9UoK9z2', NULL, 3),
('9ac7c76e-e63e-4d3f-a622-4f28e50469ff', 1, NULL, '2021-03-30 15:48:19', '2021-03-31 06:33:29', NULL, NULL, '3e6bf132-e192-4764-ad1f-3d04164bc1b4', '198201132015042001', '$2y$10$bjRhjJuI3Ozki5FOl3fTG.Y8taI3Ax8c.yhAFppygdctxMaIuHMF.', 'MVcsOUR1dJPc3DqzEjKghdHZICkNpDedde8U1FnMafUPaTIyDQTkoVkPrEyK', 3),
('b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', '2021-03-31 06:15:52', NULL, NULL, NULL, 'admin', '$2y$10$6jqZkNklKwDiKTPfDMy60.L7tCppkG47dldgzBAmYUMztMDy4WdxO', 'H7f4bTc0yZlfrPZLD3RVN6OlBHE2WaZG18h27kf141M3TxvKtPUICYkNoRGX', 1),
('b7486ac4-ed1a-434f-b376-a137023053a0', 1, NULL, '2021-03-30 16:53:47', '2021-03-31 06:16:51', NULL, NULL, 'faa1de1d-3846-488b-9db1-f5b9bf867c8e', '09031281520102', '$2y$10$esf22oYUizbSojAgLKPC8.9XPrZE/4tDUdpeUeYVFw0zgLSagbBP6', '0icTJxoLiXjooowOAFWMPTZma5k8gEtAkVtmlCKNLOnuTVOCuzBP2da9bFbs', 4),
('bbb7d7aa-94bc-4e51-8257-bb05cfb9b5d8', 1, NULL, '2021-03-30 15:47:56', '2021-03-30 15:47:56', NULL, NULL, '5656cd73-c09c-4f87-b14a-94fca8ad18e0', '197107212005011005', '$2y$10$9qibf4M19pVmzVA25sn1qeX8PgeIP6hgZ.Jo84xMjCVQin9e/OmjG', NULL, 3),
('c1a9d730-a691-49b7-8269-5dfc8ebd08ca', 1, NULL, '2021-03-30 15:47:27', '2021-03-30 15:47:27', NULL, NULL, '2565d964-e434-4050-9a18-e0524eb35f80', '197811172006042001', '$2y$10$bCFSNi7RrqPbQcri74h2ueQvsdhhYT0CxyvwAli4DxAW8alv4HYCO', NULL, 3),
('c3480e04-885c-4f2d-9b99-48e70f9677ef', 1, NULL, '2021-03-30 16:53:46', '2021-03-30 16:53:46', NULL, NULL, '384fbed3-b727-495a-a9c6-d8b7c0c14f29', '09031182520124', '$2y$10$5reXwlU.gknL3sYUpfXP7Ozn.GJKxwe3pfBhiIDZGt7TQuHHk7p2.', NULL, 4),
('f02e3c85-f470-4f1a-8f31-26f08ac92636', 1, NULL, '2021-03-30 16:01:52', '2021-03-30 16:01:52', NULL, NULL, 'aba1df87-cbb5-432f-a44c-b0502bf1c75c', '198706302015041001', '$2y$10$fhdFUDc3akDstr.8JYVhyOjr.nVQ43qXwuHoso5.kZvV3hunK/R3O', NULL, 3);

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
('3ad56671-59f3-444e-a890-26c1f7fafddb', 1, NULL, '2021-03-30 13:36:42', '2021-03-30 13:37:17', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '15', '2015', NULL);

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
