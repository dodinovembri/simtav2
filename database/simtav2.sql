-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 02:26 AM
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
  `person_type_code` int(11) DEFAULT NULL,
  `academic_lecturer_nip` varchar(40) DEFAULT NULL,
  `year_of_education_id` varchar(36) DEFAULT NULL,
  `majors_id` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `nim`, `nip`, `given_name`, `middle_name`, `surname`, `business_entity_id`, `birth_date`, `gender_code`, `person_type_code`, `academic_lecturer_nip`, `year_of_education_id`, `majors_id`) VALUES
('2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', NULL, NULL, NULL, '09031281520102', NULL, 'Dodi', NULL, 'Novembri', NULL, NULL, NULL, 4, NULL, NULL, NULL),
('862c83c6-5272-4ed1-89e7-b3a1d33b6e4f', 1, NULL, '2021-03-27 04:15:02', '2021-03-27 04:47:18', NULL, NULL, '09031181520124', NULL, 'Tri', 'Ratna', 'Sari', NULL, NULL, NULL, 4, NULL, NULL, NULL),
('aa96d77c-734d-4b4f-b49e-1649a958a7ff', 1, NULL, '2021-03-21 05:02:53', '2021-03-21 05:02:53', NULL, NULL, NULL, '197811172006042001', 'Endang', 'Lestari', 'Ruskan', NULL, NULL, NULL, 3, NULL, NULL, NULL);

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
('0574c119-5f73-4c6a-b13e-576c6c4c891c', 1, NULL, '2021-03-28 14:29:28', '2021-03-28 14:29:28', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '4', '606092c89fa81.png', 'download.png', 4090, 'img/consultation_file/', NULL),
('250af652-db3f-494c-8fd5-2945094ef9cf', 1, NULL, '2021-03-27 07:54:09', '2021-03-27 07:54:09', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '605ee4a1ef2df.png', 'download.png', 4090, 'img/kkt/', NULL),
('30b240d8-760c-4194-9e80-236d7714399d', 0, NULL, '2021-03-27 07:28:08', '2021-03-27 07:53:13', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '605ede885d05f.jpg', 'gnti_ban.jpg', 50812, 'img/kkt/', NULL),
('3a9e5a82-1e46-4a63-a077-61c708e7e000', 0, NULL, '2021-03-27 07:16:53', '2021-03-27 07:18:39', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '605edbe5565e2.png', 'download.png', 4090, 'img/kkt/', NULL),
('4de1030c-0622-4b5a-831f-020cb3080fcf', 1, NULL, '2021-03-28 14:24:27', '2021-03-28 14:24:27', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '4', '6060919b06fb7.png', 'download.png', 4090, 'img/consultation_file/', NULL),
('60eccc4e-7fbe-48df-8cbb-7728fdb7a3eb', 1, NULL, '2021-03-28 14:18:40', '2021-03-28 14:18:40', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '4', '60609040a401e.png', 'download.png', 4090, 'img/consultation_file/', NULL),
('83056195-30f4-4f17-888d-50d6a36f6e4f', 0, NULL, '2021-03-27 07:24:25', '2021-03-27 07:27:22', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '605edda9ae899.jpg', 'kode_ban_mobil.jpg', 8536, 'img/kkt/', NULL),
('921891c9-da28-4ddd-8a53-a074c2ea2888', 0, NULL, '2021-03-27 07:28:08', '2021-03-27 07:53:13', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '605ede8844d7d.jpg', 'ban.jpg', 7255, 'img/kkt/', NULL),
('94ac0ff3-02cf-4f88-b177-db60ffc94325', 0, NULL, '2021-03-27 07:24:25', '2021-03-27 07:27:23', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '605edda9c4439.jpg', 'gnti_ban.jpg', 50812, 'img/kkt/', NULL),
('b42f6fe8-11e7-44da-a37c-501167e56922', 0, NULL, '2021-03-27 07:16:53', '2021-03-27 07:18:39', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '3', '605edbe5b3e58.jpg', 'sisi_luar_ban.jpg', 5724, 'img/kkt/', NULL),
('b48df0df-740d-4308-bf31-3f3b771e1032', 1, NULL, '2021-03-28 14:28:40', '2021-03-28 14:28:40', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '4', '60609298c7c21.png', 'download.png', 4090, 'img/consultation_file/', NULL),
('b5a38033-1f44-4fd9-9d6d-be4f7f9f94f5', 1, NULL, '2021-03-27 07:54:09', '2021-03-27 07:54:09', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '605ee4a1c0244.jpg', 'sisi_luar_ban.jpg', 5724, 'img/kkt/', NULL),
('cefb2040-ef1c-4b7d-b3f2-d5cf2408109a', 0, NULL, '2021-03-27 07:16:53', '2021-03-27 07:18:39', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '605edbe5a9283.jpg', 'ban.jpg', 7255, 'img/kkt/', NULL),
('cf95f090-533b-4207-9716-60e925106312', 0, NULL, '2021-03-27 07:24:25', '2021-03-27 07:27:23', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '605edda990399.png', 'download.png', 4090, 'img/kkt/', NULL),
('d103e4a5-e521-4828-8ddd-5c0b19e4192f', 0, NULL, '2021-03-27 07:28:08', '2021-03-27 07:53:13', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '1', '605ede8826cd1.png', 'download.png', 4090, 'img/kkt/', NULL),
('e2cfa85e-f9f3-4a18-b346-cd883c0d8f9e', 1, NULL, '2021-03-27 16:54:11', '2021-03-27 16:54:11', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '4', '605f6333023de.png', 'download.png', 4090, 'img/consultation_file/', NULL),
('ec719ab6-0a32-4e47-9a7d-479518740ed9', 1, NULL, '2021-03-27 07:54:09', '2021-03-27 07:54:09', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '2', '605ee4a1dfbe4.png', 'download.png', 4090, 'img/kkt/', NULL),
('ef227efb-8bde-41c2-abd1-8674ce7d9f35', 1, NULL, '2021-03-29 14:24:49', '2021-03-29 14:24:49', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '5', '6061e3310f29a.png', 'download.png', 4090, 'img/consultation_file/', NULL);

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
  `is_kkt_file_set` tinyint(4) DEFAULT NULL,
  `thesis_topic_id` varchar(36) DEFAULT NULL,
  `title_of_thesis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_thesis`
--

INSERT INTO `student_thesis` (`id`, `status`, `sort`, `created_at`, `updated_at`, `creator_id`, `updater_id`, `lecturer_id`, `college_student_id`, `thesis_status_code`, `total_sks_now`, `total_sks_transkrip`, `is_kkt_file_set`, `thesis_topic_id`, `title_of_thesis`) VALUES
('86d99c0e-7adc-486a-b407-dd15d3a25f1b', 1, NULL, '2021-03-27 07:16:53', '2021-03-29 14:24:49', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 'aa96d77c-734d-4b4f-b49e-1649a958a7ff', '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 8, 12, 12, 1, '2b54d07f-8c89-4fc1-a57c-50dec3c2c006', 'SPK Pemilihan Bujang Gadis Pada Fasilkom Universitas Sriwijaya');

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
('3dc9364c-6f05-4284-b051-d240566bce5e', 1, NULL, '2021-03-28 14:07:53', '2021-03-28 14:07:53', 'b190c023-dda1-42dd-880f-99a647fc616f', NULL, '86d99c0e-7adc-486a-b407-dd15d3a25f1b', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 7, 12, 12, 'sd'),
('5f75b84b-1a6e-41ea-b1d1-3ca50220ea23', 0, NULL, '2021-03-27 07:53:13', '2021-03-27 07:54:10', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', '86d99c0e-7adc-486a-b407-dd15d3a25f1b', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 2, 12, 12, 'males cong'),
('7dc76968-8c9d-4117-8642-3d921dcb3e58', 0, NULL, '2021-03-27 07:27:23', '2021-03-27 07:28:08', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', '86d99c0e-7adc-486a-b407-dd15d3a25f1b', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 2, 12, 12, 'madar'),
('a82aaf07-81c0-4b40-b39c-b9127a6042ce', 0, NULL, '2021-03-27 07:18:40', '2021-03-27 07:24:25', 'b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', '86d99c0e-7adc-486a-b407-dd15d3a25f1b', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 2, 12, 12, 'krs kurang');

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
('07ea02f1-7c2f-44a5-b96f-4c20bfe7e3a9', 1, NULL, '2021-03-28 14:18:40', '2021-03-28 14:18:40', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'aa96d77c-734d-4b4f-b49e-1649a958a7ff', NULL),
('11a039a5-a7e4-4f09-907c-603f3c73fd8b', 1, NULL, '2021-03-28 14:28:40', '2021-03-28 14:28:40', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 'aa96d77c-734d-4b4f-b49e-1649a958a7ff', NULL),
('885af4e1-8746-43e8-a924-10d4b1e56ff8', 1, NULL, '2021-03-28 14:24:26', '2021-03-28 14:24:26', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'aa96d77c-734d-4b4f-b49e-1649a958a7ff', NULL),
('a2a92f97-4476-463c-a010-71d570f18be2', 1, NULL, '2021-03-27 16:54:10', '2021-03-27 16:54:10', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'aa96d77c-734d-4b4f-b49e-1649a958a7ff', NULL),
('aa26a423-4076-4e66-837a-71a41b3badad', 1, NULL, '2021-03-27 11:59:22', '2021-03-27 11:59:22', '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', NULL, '695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 'aa96d77c-734d-4b4f-b49e-1649a958a7ff', NULL);

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
('1c53e01a-27f4-4c67-b5fd-31afc55057e7', 1, NULL, '2021-03-16 07:59:21', '2021-03-27 11:44:03', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', 'pengelola', '$2y$12$wdmMZFDREdMADYtzVqa.bu/1XThATLvAsaAdROBXFQRPUx126G6be', 'IL1A0o7hdQDen4Egab5XrEerzWGWXgr5LWPQKvJk3nzWTREeukXfTUZeeHDl', 2),
('695efb3d-f83d-4f9d-916a-eb8e0228f1d4', 1, NULL, '2021-03-16 12:35:00', '2021-03-29 14:28:33', NULL, NULL, '2e69af03-8628-11eb-8b4d-c0b5d79bd8c4', '09031281520102', '$2y$12$0jjEAd3PaBUJO.SBSRUWquQfwYcaOt6fRo0HFGpsSMjWAP1Qmjcdu', 'GLD5OFj1iVfRJnpO4AqSs8rCqyPDLQBgzZ7qMmCSue2CZCLc10BP6FsQFp8N', 4),
('b190c023-dda1-42dd-880f-99a647fc616f', 1, NULL, '2021-03-21 05:02:54', '2021-03-28 14:08:13', NULL, NULL, 'aa96d77c-734d-4b4f-b49e-1649a958a7ff', '197811172006042001', '$2y$10$gCL8ewBQkBcgRxD2uCTgru6IHwhZKqTBeQd0xtW4Zt9EwKAN7krx2', 'IXyHMWjAYJHILN1FcB2vfk5p5FqejBNGuSfxvcl9GXuUMmxdMT0Zw1Uygng6', 3),
('b6f7a26c-8609-11eb-8b4d-c0b5d79bd8c4', 1, NULL, '2021-03-16 00:00:00', '2021-03-27 16:05:34', NULL, NULL, NULL, 'admin', '$2y$12$YJJKvLXoJqG13lubV4hC8epwGCABPQ7e1VS6N2aNJea7uI3aw2V.i', 'DLSLFSyzfEMNFGDA0gxeZHvgNrRAQXGA3EZDVg9Xfm8FgfgCdacEXOaki5Dw', 1),
('ba2ff0d8-9347-4889-9f5b-55f8524f1f42', 1, NULL, '2021-03-27 04:15:02', '2021-03-27 04:15:02', NULL, NULL, NULL, '09031181520124', '$2y$10$W/eMK5vO0PrjmTmiomGBiOe/i43v500b8pGJWJoUBi4or8lpLwLEW', NULL, 4);

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
