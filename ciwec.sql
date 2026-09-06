-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2026 at 07:28 AM
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
-- Database: `ciwec`
--

-- --------------------------------------------------------

--
-- Table structure for table `cl_adminmenu_user`
--

CREATE TABLE `cl_adminmenu_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `adminmenu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_adminmenu_user`
--

INSERT INTO `cl_adminmenu_user` (`id`, `user_id`, `adminmenu_id`) VALUES
(1, 3, 1),
(11, 3, 2),
(12, 3, 4),
(13, 3, 5),
(14, 3, 12),
(25, 4, 1),
(26, 4, 2),
(27, 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `cl_admin_menu`
--

CREATE TABLE `cl_admin_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_admin_menu`
--

INSERT INTO `cl_admin_menu` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Manage Banners', '2020-08-16 08:51:13', '2020-08-16 08:51:13'),
(2, 'Manage Posts', '2020-08-16 08:52:23', '2020-08-16 08:52:23'),
(4, 'Manage Photo Gallery', '2020-08-16 08:52:38', '2020-08-16 08:52:38'),
(5, 'Manage Video Gallery', '2020-08-16 08:53:15', '2020-08-16 08:53:15'),
(9, 'Manage Users', '2020-08-16 08:53:49', '2020-08-16 08:53:49'),
(12, 'Settings', '2020-08-16 08:54:22', '2020-08-16 08:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `cl_appointments`
--

CREATE TABLE `cl_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `request_type` varchar(255) NOT NULL DEFAULT 'Appointment',
  `service` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` enum('Pending','Confirmed','Cancelled','Completed','No Show') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_appointments`
--

INSERT INTO `cl_appointments` (`id`, `full_name`, `email`, `phone`, `country`, `request_type`, `service`, `location`, `appointment_date`, `appointment_time`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Shibu Sharma', 'shibusharma807@gmail.com', '9819099126', 'Nepali', 'Health Screening', 'Orthopedics', 'Pokhara', '2026-08-05', '09:00:00', NULL, 'he', 'Pending', '2026-07-29 12:39:04', '2026-07-29 12:39:04'),
(6, 'Shibu Sharma', 'shibusharma807@gmail.com', '9819099126', 'Nepali', 'Health Screening', 'Pediatrics', 'Kathmandu', '2026-07-31', '14:30:00', NULL, 'hiub', 'Pending', '2026-07-29 12:43:07', '2026-07-29 12:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `cl_associated_posts`
--

CREATE TABLE `cl_associated_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `sub_title` varchar(191) DEFAULT NULL,
  `brief` text DEFAULT NULL,
  `composition` longtext DEFAULT NULL,
  `purpose` longtext DEFAULT NULL,
  `information` longtext DEFAULT NULL,
  `thumbnail` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `page_key` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_banner`
--

CREATE TABLE `cl_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `content` varchar(191) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `link_title` varchar(191) DEFAULT 'Learn More',
  `link` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_banner`
--

INSERT INTO `cl_banner` (`id`, `title`, `caption`, `content`, `picture`, `video`, `link_title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'International Standard Healthcare in Nepal', 'Trusted Since 1982', 'Providing world-class travel medicine, family medicine, specialist care and emergency services from Kathmandu and Pokhara for over 40 years.', '', NULL, NULL, NULL, '1', '2020-12-31 08:12:27', '2026-08-02 05:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `cl_career`
--

CREATE TABLE `cl_career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `position` varchar(150) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `cover` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_career`
--

INSERT INTO `cl_career` (`id`, `fname`, `lname`, `email`, `number`, `subject`, `message`, `country`, `position`, `cv`, `cover`, `created_at`, `updated_at`) VALUES
(3, 'Irma Hall', NULL, 'zyfonu@mailinator.com', '55', 'Animi quia sed quid', '1981', 'Colon and White Associates', '18', '1760246751-1mb.pdf', '1760246751-1mb.pdf', '2025-10-11 23:40:51', '2025-10-11 23:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `cl_country`
--

CREATE TABLE `cl_country` (
  `id` int(11) NOT NULL,
  `country` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cl_country`
--

INSERT INTO `cl_country` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', NULL, NULL),
(3, 'Aland Islands', NULL, NULL),
(4, 'Albania', NULL, NULL),
(5, 'Algeria', NULL, NULL),
(6, 'American Samoa', NULL, NULL),
(7, 'Andorra', NULL, NULL),
(8, 'Angola', NULL, NULL),
(9, 'Anguilla', NULL, NULL),
(10, 'Antarctica', NULL, NULL),
(11, 'Antigua ', NULL, NULL),
(12, 'Argentina ', NULL, NULL),
(13, 'Armenia ', NULL, NULL),
(14, 'Aruba ', NULL, NULL),
(15, 'Australia', NULL, NULL),
(16, 'Austria ', NULL, NULL),
(17, 'Azerbaijan', NULL, NULL),
(18, 'Bahamas', NULL, NULL),
(19, 'Bahrain ', NULL, NULL),
(20, 'Bangladesh', NULL, NULL),
(21, 'Barbados', NULL, NULL),
(22, 'Barbuda ', NULL, NULL),
(23, 'Belarus ', NULL, NULL),
(24, 'Belgium ', NULL, NULL),
(25, 'Belize', NULL, NULL),
(26, 'Benin ', NULL, NULL),
(27, 'Bermuda ', NULL, NULL),
(28, 'Bhutan ', NULL, NULL),
(29, 'Bolivia', NULL, NULL),
(30, 'Bosnia ', NULL, NULL),
(31, 'Botswana', NULL, NULL),
(32, 'Bouvet Island', NULL, NULL),
(33, 'Brazil', NULL, NULL),
(34, 'British Indian Ocean Territory', NULL, NULL),
(35, 'Brunei Darussalam ', NULL, NULL),
(36, 'Bulgaria ', NULL, NULL),
(37, 'Burkina Faso ', NULL, NULL),
(38, 'Burundi ', NULL, NULL),
(39, 'Caicos Islands', NULL, NULL),
(40, 'Cambodia ', NULL, NULL),
(41, 'Cameroon ', NULL, NULL),
(42, 'Canada ', NULL, NULL),
(43, 'Cape Verde', NULL, NULL),
(44, 'Cayman Islands', NULL, NULL),
(45, 'Central African Republic ', NULL, NULL),
(46, 'Chad ', NULL, NULL),
(47, 'Chile ', NULL, NULL),
(48, 'China ', NULL, NULL),
(49, 'Christmas Island', NULL, NULL),
(50, 'Cocos (Keeling) Islands ', NULL, NULL),
(51, 'Colombia', NULL, NULL),
(52, 'Comoros', NULL, NULL),
(53, 'Republic of Congo ', NULL, NULL),
(54, 'Democratic Republic of the congo', NULL, NULL),
(55, 'Cook Islands ', NULL, NULL),
(56, 'Costa Rica ', NULL, NULL),
(57, 'Cote d\'Ivoire', NULL, NULL),
(58, 'Croatia ', NULL, NULL),
(59, 'Cuba ', NULL, NULL),
(60, 'Cyprus', NULL, NULL),
(61, 'Czech Republic', NULL, NULL),
(62, 'Denmark ', NULL, NULL),
(63, 'Djibouti ', NULL, NULL),
(64, 'Dominica ', NULL, NULL),
(65, ' Dominican Republic', NULL, NULL),
(66, 'Ecuador ', NULL, NULL),
(67, 'Egypt', NULL, NULL),
(68, 'El Salvador', NULL, NULL),
(69, 'Equatorial Guinea', NULL, NULL),
(70, 'Eritrea', NULL, NULL),
(71, 'Estonia ', NULL, NULL),
(72, 'Ethiopia ', NULL, NULL),
(73, 'Falkland Islands (Malvinas)', NULL, NULL),
(74, 'Faroe Islands  ', NULL, NULL),
(75, 'Fiji', NULL, NULL),
(76, 'Finland ', NULL, NULL),
(77, 'France ', NULL, NULL),
(78, 'French Guiana', NULL, NULL),
(79, 'French Polynesia', NULL, NULL),
(80, 'French Southern Territories ', NULL, NULL),
(81, 'Futuna Islands', NULL, NULL),
(82, 'Gabon  ', NULL, NULL),
(83, 'Gambia ', NULL, NULL),
(84, 'Georgia ', NULL, NULL),
(85, 'Germany ', NULL, NULL),
(86, 'Ghana ', NULL, NULL),
(87, 'Gibraltar ', NULL, NULL),
(88, 'Greece ', NULL, NULL),
(89, 'Greenland', NULL, NULL),
(90, 'Grenada ', NULL, NULL),
(91, 'Guadeloupe', NULL, NULL),
(92, 'Guam ', NULL, NULL),
(93, 'Guatemala', NULL, NULL),
(94, 'Guernsey', NULL, NULL),
(95, 'Guinea ', NULL, NULL),
(96, 'Guinea-Bissau', NULL, NULL),
(97, 'Guyana ', NULL, NULL),
(98, 'Haiti ', NULL, NULL),
(99, 'Heard', NULL, NULL),
(100, 'Herzegovina ', NULL, NULL),
(101, 'Holy See ', NULL, NULL),
(102, 'Honduras', NULL, NULL),
(103, 'Hong Kong', NULL, NULL),
(104, 'Hungary', NULL, NULL),
(105, 'Iceland ', NULL, NULL),
(106, 'India ', NULL, NULL),
(107, 'Indonesia ', NULL, NULL),
(108, 'Iran (Islamic Republic of)', NULL, NULL),
(109, 'Iraq', NULL, NULL),
(110, 'Ireland', NULL, NULL),
(111, 'Isle of Man', NULL, NULL),
(112, 'Israel ', NULL, NULL),
(113, 'Italy', NULL, NULL),
(114, 'Jamaica', NULL, NULL),
(115, 'Jan Mayen Islands', NULL, NULL),
(116, 'Japan ', NULL, NULL),
(117, 'Jersey', NULL, NULL),
(118, 'Jordan ', NULL, NULL),
(119, 'Kazakhstan', NULL, NULL),
(120, 'Kenya', NULL, NULL),
(121, 'Kiribati ', NULL, NULL),
(122, 'Korea ', NULL, NULL),
(123, 'Korea (Democratic)', NULL, NULL),
(124, 'Kuwait ', NULL, NULL),
(125, 'Kyrgyzstan', NULL, NULL),
(126, 'Lao ', NULL, NULL),
(127, 'Latvia', NULL, NULL),
(128, 'Lebanon ', NULL, NULL),
(129, 'Lesotho ', NULL, NULL),
(130, 'Liberia', NULL, NULL),
(131, 'Libyan Arab Jamahiriya', NULL, NULL),
(132, 'Liechtenstein', NULL, NULL),
(133, 'Lithuania ', NULL, NULL),
(134, 'Luxembourg ', NULL, NULL),
(135, 'Macao', NULL, NULL),
(136, 'Macedonia ', NULL, NULL),
(137, 'Madagascar ', NULL, NULL),
(138, 'Malawi ', NULL, NULL),
(139, 'Malaysia ', NULL, NULL),
(140, 'Maldives ', NULL, NULL),
(141, 'Mali', NULL, NULL),
(142, 'Malta ', NULL, NULL),
(143, 'Marshall Islands', NULL, NULL),
(144, 'Martinique ', NULL, NULL),
(145, 'Mauritania ', NULL, NULL),
(146, 'Mauritius', NULL, NULL),
(147, 'Mayotte', NULL, NULL),
(148, 'McDonald Islands', NULL, NULL),
(149, 'Mexico ', NULL, NULL),
(150, 'Micronesia ', NULL, NULL),
(151, 'Miquelon', NULL, NULL),
(152, 'Moldova ', NULL, NULL),
(153, 'Monaco ', NULL, NULL),
(154, 'Mongolia ', NULL, NULL),
(155, 'Montenegro ', NULL, NULL),
(156, 'Montserrat', NULL, NULL),
(157, 'Morocco ', NULL, NULL),
(158, 'Mozambique', NULL, NULL),
(159, 'Myanmar ', NULL, NULL),
(160, 'Namibia ', NULL, NULL),
(161, 'Nauru', NULL, NULL),
(162, 'United States', NULL, NULL),
(163, 'Netherlands', NULL, NULL),
(164, 'Netherlands Antilles ', NULL, NULL),
(165, 'Nevis ', NULL, NULL),
(166, 'New Caledonia', NULL, NULL),
(167, 'New Zealand ', NULL, NULL),
(168, 'Nicaragua', NULL, NULL),
(169, 'Niger ', NULL, NULL),
(170, 'Nigeria', NULL, NULL),
(171, 'Niue', NULL, NULL),
(172, 'Norfolk Island ', NULL, NULL),
(173, 'Northern Mariana Islands ', NULL, NULL),
(174, 'Norway ', NULL, NULL),
(175, 'Oman ', NULL, NULL),
(176, 'Pakistan', NULL, NULL),
(177, 'Palau ', NULL, NULL),
(178, 'Palestinian Territory Occupied', NULL, NULL),
(179, 'Panama ', NULL, NULL),
(180, 'Papua New Guinea', NULL, NULL),
(181, 'Paraguay ', NULL, NULL),
(182, 'Peru ', NULL, NULL),
(183, 'Philippines ', NULL, NULL),
(184, 'Pitcairn ', NULL, NULL),
(185, 'Poland', NULL, NULL),
(186, 'Portugal', NULL, NULL),
(187, 'Principe ', NULL, NULL),
(188, 'Puerto Rico ', NULL, NULL),
(189, 'Qatar ', NULL, NULL),
(190, 'Reunion ', NULL, NULL),
(191, 'Romania ', NULL, NULL),
(192, 'Russian Federation', NULL, NULL),
(193, 'Rwanda ', NULL, NULL),
(194, 'Saint Barthelemy', NULL, NULL),
(195, 'Saint Helena', NULL, NULL),
(196, 'Saint Kitts ', NULL, NULL),
(197, 'Saint Lucia ', NULL, NULL),
(198, 'Saint Martin (French part)', NULL, NULL),
(199, 'Saint Pierre ', NULL, NULL),
(200, 'Saint Vincent ', NULL, NULL),
(201, 'Samoa', NULL, NULL),
(202, 'San Marino ', NULL, NULL),
(203, 'Sao Tome ', NULL, NULL),
(204, 'Saudi Arabia', NULL, NULL),
(205, 'Senegal ', NULL, NULL),
(206, 'Serbia ', NULL, NULL),
(207, 'Seychelles ', NULL, NULL),
(208, 'Sierra Leone', NULL, NULL),
(209, 'Singapore', NULL, NULL),
(210, 'Slovakia', NULL, NULL),
(211, 'Slovenia ', NULL, NULL),
(212, 'Solomon Islands', NULL, NULL),
(213, 'Somalia ', NULL, NULL),
(214, 'South Africa', NULL, NULL),
(215, 'South Georgia ', NULL, NULL),
(216, 'South Sandwich Islands', NULL, NULL),
(217, 'Spain', NULL, NULL),
(218, 'Sri Lanka', NULL, NULL),
(219, 'Sudan', NULL, NULL),
(220, 'Suriname', NULL, NULL),
(221, 'Svalbard ', NULL, NULL),
(222, 'Swaziland ', NULL, NULL),
(223, 'Sweden ', NULL, NULL),
(224, 'Switzerland', NULL, NULL),
(225, 'Syrian Arab Republic', NULL, NULL),
(226, 'Taiwan ', NULL, NULL),
(227, 'Tajikistan ', NULL, NULL),
(228, 'Tanzania ', NULL, NULL),
(229, 'Thailand ', NULL, NULL),
(230, 'The Grenadines ', NULL, NULL),
(231, 'Timor-Leste', NULL, NULL),
(232, 'Tobago', NULL, NULL),
(233, 'Togo ', NULL, NULL),
(234, 'Tokelau', NULL, NULL),
(235, 'Tonga ', NULL, NULL),
(236, 'Trinidad ', NULL, NULL),
(237, 'Tunisia ', NULL, NULL),
(238, 'Turkey ', NULL, NULL),
(239, 'Turkmenistan ', NULL, NULL),
(240, 'Turks Islands ', NULL, NULL),
(241, 'Tuvalu', NULL, NULL),
(242, 'Uganda ', NULL, NULL),
(243, 'Ukraine ', NULL, NULL),
(244, 'United Arab Emirates', NULL, NULL),
(245, 'United Kingdom', NULL, NULL),
(246, 'Afghanistan', NULL, NULL),
(247, 'Uruguay ', NULL, NULL),
(248, 'US Minor Outlying Islands ', NULL, NULL),
(249, 'Uzbekistan ', NULL, NULL),
(250, 'Vanuatu ', NULL, NULL),
(251, 'Vatican City State ', NULL, NULL),
(252, 'Venezuela Vietnam ', NULL, NULL),
(253, 'Virgin Islands (British) ', NULL, NULL),
(254, 'Virgin Islands (US)', NULL, NULL),
(255, 'Wallis ', NULL, NULL),
(256, 'Western Sahara', NULL, NULL),
(257, 'Yemen', NULL, NULL),
(258, 'Zambia', NULL, NULL),
(259, 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_images`
--

CREATE TABLE `cl_gallery_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `picture` varchar(191) NOT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_gallery_images`
--

INSERT INTO `cl_gallery_images` (`id`, `category_id`, `picture`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'about-ciwec-7jjRqrBpFhtfQthVdrh2YiRft.webp', NULL, '1', '2026-07-30 01:49:55', '2026-07-30 01:49:55'),
(2, 2, 'doc2-7LbeViZk37BSMme6SuNoTDIMUlokDD3zJCKF4kxk.webp', 'Cardio Expert', '1', '2026-07-30 02:13:29', '2026-07-30 03:47:53'),
(3, 1, 'history1-ielqcGI9Xax7Keam3sZU8K6otTgCG5txS8cwDEno.webp', NULL, '1', '2026-07-30 02:14:07', '2026-07-30 03:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_image_categories`
--

CREATE TABLE `cl_gallery_image_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) NOT NULL,
  `picture` varchar(191) NOT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_gallery_image_categories`
--

INSERT INTO `cl_gallery_image_categories` (`id`, `category`, `picture`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hospital', '', 'Hospital', '1', '2026-07-30 01:10:41', '2026-07-30 01:12:17'),
(2, 'Doctors', '', 'Doctors', '1', '2026-07-30 01:10:49', '2026-07-30 01:10:49'),
(4, 'Events', '', 'Events', '1', '2026-07-30 01:11:59', '2026-07-30 01:11:59'),
(5, 'Facilities', '', 'Facilities', '1', '2026-07-30 01:12:07', '2026-07-30 01:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_videos`
--

CREATE TABLE `cl_gallery_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_gallery_videos`
--

INSERT INTO `cl_gallery_videos` (`id`, `category_id`, `title`, `video`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'The CIWEC Story', 'https://youtu.be/_BAqxbtYPjw?si=iJLrSKb65m1uTMcR', 'A journey through more than four decades of healthcare excellence.', '1', '2026-07-31 00:00:36', '2026-07-31 00:00:36'),
(2, 3, 'Community Outreach Program', 'https://youtu.be/_BAqxbtYPjw?si=iJLrSKb65m1uTMcR', 'Bringing quality healthcare services beyond hospital walls.', '1', '2026-07-31 00:04:55', '2026-07-31 00:04:55'),
(3, 4, 'Doctor Insights & Awareness', 'https://youtu.be/_BAqxbtYPjw?si=iJLrSKb65m1uTMcR', 'Expert healthcare guidance from CIWEC specialists.', '1', '2026-07-31 00:06:17', '2026-07-31 00:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `cl_gallery_video_categories`
--

CREATE TABLE `cl_gallery_video_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) NOT NULL,
  `video` varchar(191) DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_gallery_video_categories`
--

INSERT INTO `cl_gallery_video_categories` (`id`, `category`, `video`, `caption`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Documentary', NULL, NULL, '1', '2026-07-30 23:55:19', '2026-07-30 23:55:19'),
(3, 'Medical Camp', NULL, NULL, '1', '2026-07-30 23:55:29', '2026-07-30 23:55:29'),
(4, 'Health Education', NULL, NULL, '1', '2026-07-30 23:56:37', '2026-07-30 23:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `cl_init`
--

CREATE TABLE `cl_init` (
  `id` int(11) NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cl_init`
--

INSERT INTO `cl_init` (`id`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, '123', 1, '2018-12-10 04:48:12', '2018-12-11 01:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `cl_inquiry`
--

CREATE TABLE `cl_inquiry` (
  `id` bigint(20) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_inquiry`
--

INSERT INTO `cl_inquiry` (`id`, `full_name`, `email`, `number`, `subject`, `message`, `country`, `created_at`, `updated_at`) VALUES
(8, 'Shibu Sharma', 'shibusharma807@gmail.com', '9819099126', 'sdf', 'sdf', NULL, '2026-07-30 00:04:23', '2026-07-30 00:04:23'),
(9, 'Shibu Sharma', 'shibusharma807@gmail.com', '9819099126', 'sdf', 'sdf', NULL, '2026-07-30 00:04:53', '2026-07-30 00:04:53'),
(10, 'Shibu Sharma', 'shibudsharma807@gmail.com', '98190991264', 'zsdv', 'zsfdv', NULL, '2026-07-30 00:05:15', '2026-07-30 00:05:15'),
(11, 'Shibu Sharma', 'shibusharma807@gmail.com', '9819099126', 'shibu Sharma', 'szdva', NULL, '2026-07-30 00:09:16', '2026-07-30 00:09:16'),
(12, 'Shibu Sharma', 'shibusharma807@gmail.com', '9819099126', 'shibu Sharma', 'szdva', NULL, '2026-07-30 00:09:59', '2026-07-30 00:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `cl_log`
--

CREATE TABLE `cl_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(191) DEFAULT NULL,
  `action_date` datetime DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_banner`
--

CREATE TABLE `cl_multiple_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `banner_id` int(11) DEFAULT 0,
  `title` varchar(191) DEFAULT NULL,
  `caption` varchar(191) DEFAULT NULL,
  `content` varchar(191) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_document`
--

CREATE TABLE `cl_multiple_document` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT 0,
  `key_string` varchar(100) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `document` varchar(191) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_multiple_document`
--

INSERT INTO `cl_multiple_document` (`id`, `post_id`, `key_string`, `title`, `document`, `ordering`, `created_at`, `updated_at`) VALUES
(1, 30, '0mfULK6rQFrY5GhCkw08vKzUUMQHdb9wOwnnJ575', 'Read More', 'news1-6a6c4dd1e944d.pdf', 1, '2026-07-31 01:40:05', '2026-07-31 01:40:05'),
(2, 31, 'EOMmkh8SkOaiZMbeuisfBdo7HFdb4EbcYLgHckTk', 'Learn More', 'news1-6a6c70ad74811.pdf', 2, '2026-07-31 04:06:27', '2026-07-31 04:08:49'),
(3, 35, 'vxv8FvSjiaDmmXFzWM5V3MlHZg7sUT5KqMMob4B5', 'Learn More', 'news1-6a6c73e96d962.pdf', 3, '2026-07-31 04:22:37', '2026-07-31 04:22:37'),
(4, 58, '4B1s3IBeukoPZq8uWtfJ8EWNG1MItMfYYxjK0aNe', 'Complete Guide To Altitude Sickness', 'news1-6a6ee5b713ea5.pdf', 4, '2026-08-02 00:52:43', '2026-08-02 00:52:43'),
(5, 59, 'ZaiAwUJob5KJw6lXsmyvdmD1Yftc4jVpPNmFV9IQ', 'Traveler\'s Health & Safety Guide', 'news2-6a6ee5e285663.pdf', 5, '2026-08-02 00:53:26', '2026-08-02 00:53:26'),
(6, 60, 'FE9bv6ciaSc3NvfXNmlvsDFX0hzqCCRZPTGE3Pl8', 'Travel Vaccination Guide', 'news1-6a6ee6116becf.pdf', 6, '2026-08-02 00:54:13', '2026-08-02 00:54:42'),
(7, 61, 'neE81kCG10iZOhOD3nKhszolkEXiInj8XtbCR4xr', 'Preventive Health Screening Guide', 'news1-6a6ee6469840c.pdf', 7, '2026-08-02 00:55:06', '2026-08-02 00:55:06'),
(8, 148, 'mlHERzPX5EKMG1A7tQDv2QQromOhtptTNwubrMt5', 'Publication letter 2026', 'news1-6a70490197568.pdf', 8, '2026-08-03 02:08:37', '2026-08-03 02:08:37'),
(9, 148, '4xeJWsIstj8Xon1jcQmMdJwKBdbdCFJIaMHB2JbY', 'News Letter 2026', 'news2-6a70490d36d4f.pdf', 9, '2026-08-03 02:08:49', '2026-08-03 02:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_image`
--

CREATE TABLE `cl_multiple_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_multiple_video`
--

CREATE TABLE `cl_multiple_video` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT 0,
  `title` varchar(191) DEFAULT NULL,
  `video` text NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_posts`
--

CREATE TABLE `cl_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(11) DEFAULT 0,
  `visiter` int(11) DEFAULT 0,
  `post_date` datetime DEFAULT NULL,
  `post_author` int(11) NOT NULL DEFAULT 1,
  `template` varchar(191) DEFAULT NULL,
  `template_child` varchar(100) DEFAULT NULL,
  `post_title` text DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `post_content` longtext DEFAULT NULL,
  `post_excerpt` text DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `page_key` varchar(191) NOT NULL DEFAULT '0',
  `post_type` int(11) DEFAULT 0,
  `post_category` int(11) DEFAULT 0,
  `post_parent` int(11) DEFAULT 0,
  `post_order` int(11) DEFAULT 0,
  `home_order` int(11) DEFAULT 0,
  `banner` varchar(191) DEFAULT NULL,
  `page_thumbnail` varchar(191) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `page_video` varchar(191) DEFAULT NULL,
  `meta_keyword` varchar(191) DEFAULT NULL,
  `meta_description` varchar(191) DEFAULT NULL,
  `associated_title` varchar(191) DEFAULT NULL,
  `external_link` varchar(191) DEFAULT NULL,
  `price` varchar(11) DEFAULT NULL,
  `post_tags` varchar(191) DEFAULT NULL,
  `project_status` tinyint(1) DEFAULT 0,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `global_post` tinyint(4) DEFAULT 0,
  `published` enum('1','0') NOT NULL DEFAULT '1',
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `is_draft` enum('1','0') NOT NULL DEFAULT '0',
  `is_trashed` enum('1','0') NOT NULL DEFAULT '0',
  `show_in_home` enum('0','1') DEFAULT '0',
  `is_password_protected` enum('1','0') NOT NULL DEFAULT '0',
  `comment` enum('1','0') NOT NULL DEFAULT '0',
  `lang` enum('en','np') NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_posts`
--

INSERT INTO `cl_posts` (`id`, `uid`, `visiter`, `post_date`, `post_author`, `template`, `template_child`, `post_title`, `sub_title`, `post_content`, `post_excerpt`, `uri`, `page_key`, `post_type`, `post_category`, `post_parent`, `post_order`, `home_order`, `banner`, `page_thumbnail`, `thumbnail`, `icon`, `page_video`, `meta_keyword`, `meta_description`, `associated_title`, `external_link`, `price`, `post_tags`, `project_status`, `status`, `global_post`, `published`, `is_active`, `is_draft`, `is_trashed`, `show_in_home`, `is_password_protected`, `comment`, `lang`, `created_at`, `updated_at`) VALUES
(7, NULL, 61, '2026-08-02 09:54:08', 1, 'posttypeTemplate-gallery', NULL, 'Gallery', 'Photos and hospital highlights', NULL, NULL, 'gallery', '1744347394160352190', 1, NULL, 0, 4, NULL, 'healthinformation-7wLS3kqcdrdOCyJoO0LF2694HDchZVJa4GQoVJBl.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2025-04-10 23:11:34', '2026-08-04 17:21:07'),
(16, NULL, 15, '2026-07-29 04:12:22', 1, 'posttypeTemplate-history', NULL, 'CIWEC History', 'Our journey and achievements', NULL, NULL, 'ciwec-history', '1744786999788262686', 1, NULL, 0, 2, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2025-04-16 01:18:19', '2026-08-04 17:21:12'),
(17, NULL, 11, '2026-07-29 04:11:33', 1, 'posttypeTemplate-about', NULL, 'About us', 'Overview of CIWEC Hospital', NULL, NULL, 'about-us', '1744787025840814990', 1, NULL, 0, 1, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2025-04-16 01:18:45', '2026-08-04 17:21:22'),
(21, NULL, 7, '2026-07-29 04:13:34', 1, 'posttypeTemplate-csr', NULL, 'CIWEC CSR', 'Community and social initiatives', NULL, NULL, 'ciwec-csr', '175999430922192713', 1, NULL, 0, 19, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2025-10-09 01:33:29', '2026-08-03 02:33:54'),
(26, NULL, 62, '2026-07-29 04:14:18', 1, 'posttypeTemplate-services', NULL, 'Services', 'Complete range of healthcare services', NULL, NULL, 'services', '178534168011674438', 2, 0, 0, 23, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-29 10:29:40', '2026-08-03 06:02:41'),
(27, 0, 72, '2026-07-29 04:14:42', 1, 'posttypeTemplate-doctors', NULL, 'Doctors at CIWEC', 'Meet our experienced medical specialists', NULL, NULL, 'doctors-at-ciwec', '1785341701535983202', 2, 0, 0, 24, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-29 10:30:01', '2026-08-03 06:02:51'),
(28, 0, 30, '2026-07-29 04:15:03', 1, 'posttypeTemplate-healthscreening', NULL, 'Family Medicine & Health Screening', 'Preventive care, consultations and wellness checks', NULL, NULL, 'family-medicine-health-screening', '178534171813997728', 2, 0, 0, 25, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-29 10:30:18', '2026-08-03 06:02:55'),
(29, NULL, 14, '2026-07-29 04:15:38', 1, 'posttypeTemplate-altitudesickness', NULL, 'Altitude Illness & Frostbite', 'Specialized mountain and travel medicine care', NULL, NULL, 'altitude-illness-frostbite', '1785341738458456412', 2, NULL, 0, 26, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-29 10:30:38', '2026-08-03 04:04:56'),
(30, 0, 0, '2026-07-31 07:22:53', 1, 'single', NULL, 'Research Publication 2025', NULL, 'Taylor DN, Houston R, Shilm DR, Bhaibulaya M, Ungar BLP, Echeverria P. Etiology of diarrhea among travelers and foreign residents in Nepal. Journal of the American Medical Association 1988;260:1245-1248.\n', 'Research Publication 2025', 'research-publication-2025', '1785482627267497341', 4, 0, 0, 27, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 01:38:47', '2026-07-31 01:38:47'),
(31, 0, 0, '2026-07-31 08:18:34', 1, 'single', NULL, 'Health Information July 2025', NULL, NULL, NULL, 'health-information-july-2025', '1785485931677060762', 3, 0, 0, 28, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 02:33:51', '2026-07-31 02:33:51'),
(32, 0, 0, '2026-07-31 09:37:59', 1, 'single', NULL, 'Report Publication 2026', NULL, ' Shilm DR, Houston R. Helicopter rescues and deaths among trekkers in Nepal. Journal of the American Medical Association 1989;261:1017-1019.', NULL, 'report-publication-2026', '1785490697764423605', 4, 0, 0, 29, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 03:53:17', '2026-07-31 03:53:17'),
(33, NULL, 2, '2026-07-31 09:56:07', 1, 'single', NULL, 'Kathmandu Services', 'Kathmandu Services', 'Kathmandu Services', 'Kathmandu Services', 'kathmandu-services', '1785491739809234699', 2, NULL, 26, 30, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 04:10:39', '2026-08-03 03:53:58'),
(34, NULL, 0, '2026-07-31 09:56:18', 1, 'single', NULL, 'Pokhara Services', 'Pokhara Services', NULL, 'Pokhara Services', 'pokhara-services', '1785491761485247054', 2, NULL, 26, 31, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 04:11:01', '2026-07-31 04:11:24'),
(35, NULL, 0, '2026-07-31 11:39:52', 1, 'single', NULL, 'Health Screening (Kathmandu)', 'Preventive Care', NULL, 'Executive checkups and wellness screening programs.', 'health-screening-kathmandu', '1785491849638098828', 2, NULL, 33, 32, NULL, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-earth-asia', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 04:12:29', '2026-07-31 05:54:58'),
(36, NULL, 0, '2026-07-31 11:40:35', 1, 'single', NULL, 'Health Screening (Pokhara)', 'Health Screening', NULL, 'Executive checkups and wellness screening programs.', 'health-screening-pokhara', '1785491935581566305', 2, NULL, 34, 33, NULL, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-heart-pulse', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 04:13:55', '2026-07-31 05:55:40'),
(37, NULL, 0, '2026-07-31 11:43:56', 1, 'single', NULL, 'Advanced Medical Technology & Facilities', 'World-Class Infrastructure', NULL, 'CIWEC combines experienced healthcare professionals with modern medical technology and advanced facilities to deliver accurate diagnosis and effective treatment.', 'advanced-medical-technology-facilities', '1785498236480553011', 2, NULL, 26, 34, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 05:58:56', '2026-07-31 06:03:50'),
(38, NULL, 0, '2026-07-31 11:56:46', 1, 'single', NULL, 'Advanced Diagnostic Laboratory', 'Featured Facility', 'Pathology Services\r\nBlood Testing\r\nMicrobiology\r\nRapid Reporting', 'Our state-of-the-art laboratory provides comprehensive diagnostic testing with reliable results, supporting accurate diagnosis and timely treatment decisions.', 'advanced-diagnostic-laboratory', '1785498613115151796', 2, NULL, 37, 35, NULL, 'cyclospora-D107tXThEOiIQhautpWoAyHJ7isrqKVaLD7rWwGW.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:05:13', '2026-07-31 06:11:55'),
(39, NULL, 0, '2026-07-31 11:57:00', 1, 'single', NULL, 'Imaging & Radiology', 'Regular Facilities', NULL, 'Modern imaging services supporting accurate diagnosis and treatment planning.', 'imaging-radiology', '1785498660952270662', 2, NULL, 37, 36, NULL, 'immunization-vQ2ikgZ4SNQYgONsIVoUmOnnBueNxxr2gZpW62CV.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:06:00', '2026-07-31 06:12:11'),
(40, NULL, 0, '2026-07-31 11:57:14', 1, 'single', NULL, 'Emergency Department', 'Regular Facilities', NULL, 'Emergency healthcare services available around the clock.', 'emergency-department', '1785498695757702137', 2, NULL, 37, 37, NULL, 'altitude-MvSoCHgluF2BiSHHMJUPTeK95bld3W28yXN04csc.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:06:35', '2026-07-31 06:12:22'),
(41, NULL, 0, '2026-07-31 11:57:26', 1, 'single', NULL, 'Travel Health Clinic', 'Regular Facilities', NULL, 'Specialized travel medicine, vaccinations and consultations.', 'travel-health-clinic', '1785498723359576520', 2, NULL, 37, 38, NULL, 'altitude-expert-doctor-zZ75LNfY9glAPa2gvA1NP984ypl40ZlEQdZ01RnA.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:07:03', '2026-07-31 06:12:41'),
(42, NULL, 0, '2026-07-31 11:57:46', 1, 'single', NULL, 'Vaccination Center', 'Regular Facilities', NULL, 'Comprehensive vaccination and immunization services.', 'vaccination-center', '1785498749716135592', 2, NULL, 37, 39, NULL, 'research-intro-DnSIqw0Fo6ZMqZWWVVxO7jql70So7AKb5UL5R5Bi.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:07:29', '2026-07-31 06:13:02'),
(43, 0, 0, '2026-07-31 11:52:31', 1, 'single', NULL, 'Inpatient Facilities', 'Regular Facilities', NULL, 'Comfortable patient rooms designed for quality recovery.', 'inpatient-facilities', '1785498819119749969', 2, 0, 37, 40, 0, 'cyclospora-1d1Z4SgGIwrEg6B0dEWrZkZ7sfutMoXZesx1m8wK.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:08:39', '2026-07-31 06:08:39'),
(44, 0, 1, '2026-07-31 11:53:43', 1, 'single', NULL, 'Health Screening Center', 'Regular Facilities', NULL, 'Executive and preventive health screening programs.', 'health-screening-center', '178549884878235877', 2, 0, 37, 41, 0, 'immunization-0YCObMaI4wrjTwrjYyCnaRDTezKzgYoUGNtDb6uS.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:09:08', '2026-08-03 03:49:32'),
(45, 0, 1, '2026-07-31 12:18:23', 1, 'single', NULL, 'Find The Right Doctor', 'Medical Specialists', NULL, 'Search our experienced healthcare professionals by name, specialty or location.', 'find-the-right-doctor', '1785500361724110662', 2, 0, 27, 42, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:34:21', '2026-08-03 03:59:09'),
(46, 0, 3, '2026-07-31 12:19:25', 1, 'single', NULL, 'Medical Specialties We Cover', 'Areas Of Expertise', NULL, 'Our multidisciplinary team provides specialized healthcare services across a wide range of medical disciplines to support comprehensive patient care.', 'medical-specialties-we-cover', '1785500388670022029', 2, 0, 27, 43, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:34:48', '2026-08-03 03:38:55'),
(47, NULL, 0, '2026-08-02 04:42:18', 1, 'single', NULL, 'Dr. David R. Shlim', 'Internal Medicine', 'Extensive experience in travel medicine and infectious disease.', 'MD, Medical Director Emeritus', 'dr-david-r-shlim', '1785500453319842474', 2, NULL, 45, 44, NULL, 'david-IMsaOobp4lk4Er82hHTKnU9LoaxxMES6SqAyyURl.webp', '', '', 'Kathmandu', NULL, NULL, NULL, '25+ Years', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:35:53', '2026-08-01 22:57:27'),
(48, NULL, 0, '2026-07-31 12:26:14', 1, 'single', NULL, 'General Practice', 'General Practice', 'Extensive experience in travel medicine and infectious disease.', 'MD, General Practitioner', 'general-practice', '1785500503452473595', 2, NULL, 45, 45, NULL, 'doc2-nLi6F1QECFHWyvfMcmAvpLnGfEyC6unwtNDBRnlN.webp', '', '', 'Pokhara', NULL, NULL, NULL, '10+ Years', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-07-31 06:36:43', '2026-07-31 06:41:19'),
(49, 0, 0, '2026-08-02 04:47:13', 1, 'single', NULL, 'Internal Medicine', NULL, NULL, 'Comprehensive adult healthcare,\r\n                        diagnosis and treatment.', 'internal-medicine', '178564610882411279', 2, 0, 46, 46, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-stethoscope', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:03:28', '2026-08-01 23:03:28'),
(50, NULL, 0, '2026-08-02 04:49:46', 1, 'single', NULL, 'Cardiology', NULL, NULL, 'Heart health, cardiovascular assessment and prevention.', 'cardiology', '1785646142726558619', 2, NULL, 46, 47, NULL, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-heart-pulse', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:04:02', '2026-08-01 23:04:51'),
(51, 0, 0, '2026-08-02 04:49:04', 1, 'single', NULL, 'Pediatrics', NULL, NULL, 'Specialized healthcare for\r\n                        infants, children and adolescents.', 'pediatrics', '1785646178919038171', 2, 0, 46, 48, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-baby', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:04:38', '2026-08-01 23:04:38'),
(52, 0, 0, '2026-08-02 04:49:57', 1, 'single', NULL, 'Travel Medicine', NULL, NULL, 'Vaccinations, travel consultations and preventive care.', 'travel-medicine', '1785646230309690270', 2, 0, 46, 49, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-earth-asia', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:05:30', '2026-08-01 23:05:30'),
(53, NULL, 0, '2026-08-02 04:52:09', 1, 'single', NULL, 'Altitude Medicine', NULL, NULL, 'High-altitude illness prevention and treatment expertise.', 'altitude-medicine', '17856462616649718', 2, NULL, 46, 50, NULL, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-mountain', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:06:01', '2026-08-01 23:07:17'),
(54, NULL, 0, '2026-08-02 04:52:26', 1, 'single', NULL, 'Dermatology', NULL, NULL, 'Diagnosis and treatment of skin-related conditions.', 'dermatology', '1785646288558105676', 2, NULL, 46, 51, NULL, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-allergies', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:06:28', '2026-08-01 23:07:32'),
(55, 0, 0, '2026-08-02 04:51:30', 1, 'single', NULL, 'Pulmonology', NULL, NULL, 'Respiratory care and lung health management.', 'pulmonology', '1785646318399792842', 2, 0, 46, 52, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-lungs', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:06:58', '2026-08-01 23:06:58'),
(56, 0, 0, '2026-08-02 04:52:43', 1, 'single', NULL, 'Neurology', NULL, NULL, 'Specialized care for disorders affecting the nervous system.', 'neurology', '1785646417839715606', 2, 0, 46, 53, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-brain', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:08:37', '2026-08-01 23:08:37'),
(57, NULL, 0, '2026-08-02 05:12:25', 1, 'single', NULL, 'Expert Care Across Multiple Specialties', 'Comprehensive Healthcare', NULL, 'Our collaborative approach allows specialists from different disciplines to work together to provide the best possible outcomes.', 'expert-care-across-multiple-specialties', '1785647545136476510', 2, NULL, 27, 54, NULL, 'altitude-expert-doctor-IC9WHaBFbUX0QP7mg1T5SaRh96cFYM2cYQLJmnGg.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:27:25', '2026-08-01 23:27:41'),
(58, NULL, 0, '2026-08-02 05:50:03', 1, 'single', NULL, 'Complete Guide To Altitude Sickness', 'Altitude Medicine', 'Symptoms Explained\r\nPrevention Strategies\r\nEmergency Warning Signs\r\nTreatment Options', 'Learn how altitude affects the body,\r\n                            understand early warning signs,\r\n                            recognize symptoms and discover\r\n                            proven prevention strategies for\r\n                            safe trekking and mountain travel.', 'complete-guide-to-altitude-sickness', '1785649420748537928', 2, NULL, 62, 55, NULL, 'altitudesickness-OtGkOybGEtXXCAQXxzqe5iKCUM2jf6iKwwTMk0xa.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:58:40', '2026-08-02 00:05:14'),
(59, NULL, 0, '2026-08-02 05:51:00', 1, 'single', NULL, 'Traveler\'s Health & Safety Guide', 'Travel Health', NULL, 'Essential travel health advice, vaccinations and preventive measures.', 'travelers-health-safety-guide', '1785649490541488280', 2, NULL, 62, 56, NULL, 'travel-health-guide-TdrJjxOnqhEZ3TMNALriJeYn4E2lMwnX0EjEWinY.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-01 23:59:50', '2026-08-02 00:06:07'),
(60, NULL, 0, '2026-08-02 05:50:46', 1, 'single', NULL, 'Travel Vaccination Guide', 'Vaccinations', NULL, 'Recommended vaccines, schedules and travel preparation.', 'travel-vaccination-guide', '1785649539276264785', 2, NULL, 62, 57, NULL, 'vaccination-center-HDmkmvCWmcXjH4HNmLiOgmrHBIqnzfyV93KnuKqg.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:00:39', '2026-08-02 00:05:52'),
(61, NULL, 0, '2026-08-02 05:50:28', 1, 'single', NULL, 'Preventive Health Screening Guide', 'Preventive Care', NULL, 'Preventive Health Screening Guide', 'preventive-health-screening-guide', '1785649584756009894', 2, NULL, 62, 58, NULL, 'preventive-guide-JJioMlNsmMFcIfEwTXXmkHzwgvcH5fBP0C4szQ8I.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:01:24', '2026-08-02 00:05:37'),
(62, 0, 0, '2026-08-02 05:49:01', 1, 'single', NULL, 'Essential Health Guides', 'Featured Resources', NULL, 'Explore some of our most frequently accessed health information resources, prepared by CIWEC\'s medical professionals to help you stay informed and healthy.', 'essential-health-guides', '1785649788325326770', 2, 0, 28, 59, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:04:48', '2026-08-02 00:04:48'),
(63, 0, 0, '2026-08-02 05:51:15', 1, 'single', NULL, 'CIWEC Travel Health Center', 'Travel Medicine Expertise', NULL, 'Whether you\'re trekking in the Himalayas, exploring Nepal or travelling internationally, our travel health resources help you prepare, stay healthy and travel safely.', 'ciwec-travel-health-center', '1785649913337520431', 2, 0, 28, 60, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:06:53', '2026-08-02 00:06:53'),
(64, 0, 0, '2026-08-02 05:51:58', 1, 'single', NULL, 'Essential Travel Health Preparation', 'Featured Travel Guide', 'Vaccination Guidance\r\nTrekking Preparation\r\nAltitude Awareness\r\nEmergency Planning', 'Learn everything you need to know before travelling including vaccinations, altitude preparation, food safety, emergency planning and travel health tips.', 'essential-travel-health-preparation', '178565015644099787', 2, 0, 63, 61, 0, 'travel-health-preparation-jFa13oy5IliviEsKEHvZeelMvYJs2q4tqfwwZhRh.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:10:56', '2026-08-02 00:10:56'),
(65, 0, 0, '2026-08-02 05:56:01', 1, 'single', NULL, 'Health Screening FAQs', 'Frequently Asked Questions', NULL, NULL, 'health-screening-faqs', '1785650194244803019', 2, 0, 28, 62, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:11:34', '2026-08-02 00:11:34'),
(66, NULL, 0, '2026-08-02 05:57:24', 1, 'single', NULL, 'What is included in a routine health screening?', NULL, NULL, 'A routine health screening typically includes blood pressure check,\r\n                            blood tests, glucose levels, cholesterol screening and basic physical examination.', 'what-is-included-in-a-routine-health-screening', '1785650244713852314', 2, NULL, 65, 63, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:12:24', '2026-08-02 00:12:29'),
(67, 0, 0, '2026-08-02 05:57:32', 1, 'single', NULL, 'Who should undergo regular health screening?', NULL, NULL, 'Adults above 30 years, individuals with chronic conditions,\r\n                            and those with family history of diseases should undergo regular health screening.', 'who-should-undergo-regular-health-screening', '1785650286819414234', 2, 0, 65, 64, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:13:06', '2026-08-02 00:13:06'),
(68, 0, 0, '2026-08-02 05:58:09', 1, 'single', NULL, 'How often should I do a full body checkup?', NULL, NULL, 'It is generally recommended to undergo a full body checkup once every year,\r\n                            or more frequently if advised by your doctor.', 'how-often-should-i-do-a-full-body-checkup', '1785650312561454888', 2, 0, 65, 65, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:13:32', '2026-08-02 00:13:32'),
(69, 0, 0, '2026-08-02 05:58:35', 1, 'single', NULL, 'Do I need to fast before a health screening?', NULL, NULL, 'Yes, fasting for 8–12 hours may be required for certain blood tests\r\n                            like glucose and lipid profile.', 'do-i-need-to-fast-before-a-health-screening', '1785650338229677829', 2, 0, 65, 66, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:13:58', '2026-08-02 00:13:58'),
(70, 0, 0, '2026-08-02 05:59:00', 1, 'single', NULL, 'Are health screenings painful or risky?', NULL, NULL, 'No, health screenings are safe, simple and minimally invasive,\r\n                            usually involving basic blood tests and physical measurements.', 'are-health-screenings-painful-or-risky', '1785650360187776093', 2, 0, 65, 67, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 00:14:20', '2026-08-02 00:14:20'),
(71, 0, 0, '2026-08-02 07:09:06', 1, 'single', NULL, 'Nepal\'s Trusted Experts In High-Altitude Healthcare', 'Altitude Medicine Excellence', '<div class=\"lg:col-span-7\">\r\n                    <span class=\"section-subtitle text-secondary\">\r\n                        Altitude Medicine Excellence\r\n                    </span>\r\n                    <h2 class=\"section-title\">\r\n                        Nepal\'s Trusted Experts In\r\n                        High-Altitude Healthcare\r\n                    </h2>\r\n                    <p class=\"text-slate-600 mt-8 leading-8\">\r\n                        CIWEC has earned international recognition for its\r\n                        expertise in altitude medicine, expedition healthcare,\r\n                        travel medicine and emergency mountain care. Our team\r\n                        supports thousands of trekkers, climbers and travelers\r\n                        every year.\r\n                    </p>\r\n                    <!-- EXPERTISE GRID -->\r\n                    <div class=\"grid md:grid-cols-2 gap-8 mt-12\">\r\n                        <!-- ITEM -->\r\n                        <div class=\"flex gap-4\">\r\n                            <div class=\"w-14 h-14 bg-primary/10 flex items-center justify-center flex-shrink-0\">\r\n                                <i class=\"fa-solid fa-mountain text-primary text-xl\">\r\n                                </i>\r\n                            </div>\r\n                            <div>\r\n                                <h4 class=\"text-primary text-xl font-black\">\r\n                                    Altitude Illness Care\r\n                                </h4>\r\n                                <p class=\"text-slate-600 mt-2\">\r\n                                    Prevention, diagnosis and treatment\r\n                                    of altitude-related illnesses.\r\n                                </p>\r\n                            </div>\r\n                        </div>\r\n                        <!-- ITEM -->\r\n                        <div class=\"flex gap-4\">\r\n                            <div class=\"w-14 h-14 bg-secondary/10 flex items-center justify-center flex-shrink-0\">\r\n                                <i class=\"fa-solid fa-kit-medical text-secondary text-xl\">\r\n                                </i>\r\n                            </div>\r\n                            <div>\r\n                                <h4 class=\"text-primary text-xl font-black\">\r\n                                    Expedition Medicine\r\n                                </h4>\r\n                                <p class=\"text-slate-600 mt-2\">\r\n                                    Medical support for trekking\r\n                                    groups and expeditions.\r\n                                </p>\r\n                            </div>\r\n                        </div>\r\n                        <!-- ITEM -->\r\n                        <div class=\"flex gap-4\">\r\n                            <div class=\"w-14 h-14 bg-primary/10 flex items-center justify-center flex-shrink-0\">\r\n                                <i class=\"fa-solid fa-earth-asia text-primary text-xl\">\r\n                                </i>\r\n                            </div>\r\n                            <div>\r\n                                <h4 class=\"text-primary text-xl font-black\">\r\n                                    Travel Medicine\r\n                                </h4>\r\n                                <p class=\"text-slate-600 mt-2\">\r\n                                    Vaccinations, travel health\r\n                                    consultations and preparation.\r\n                                </p>\r\n                            </div>\r\n                        </div>\r\n                        <!-- ITEM -->\r\n                        <div class=\"flex gap-4\">\r\n                            <div class=\"w-14 h-14 bg-secondary/10 flex items-center justify-center flex-shrink-0\">\r\n                                <i class=\"fa-solid fa-truck-medical text-secondary text-xl\">\r\n                                </i>\r\n                            </div>\r\n                            <div>\r\n                                <h4 class=\"text-primary text-xl font-black\">\r\n                                    Emergency Response\r\n                                </h4>\r\n                                <p class=\"text-slate-600 mt-2\">\r\n                                    Rapid evaluation and treatment\r\n                                    of severe altitude illnesses.\r\n                                </p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>', 'CIWEC has earned international recognition for its expertise in altitude medicine, expedition healthcare, travel medicine and emergency mountain care. Our team supports thousands of trekkers, climbers and travelers every year.', 'nepals-trusted-experts-in-highaltitude-healthcare', '1785654661239028219', 2, 0, 29, 68, 0, 'altitude-expert-doctor-zTMrPt2Wd9cUoVlAtwm4R4TDWVs0O2d8TydsR54B.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:26:01', '2026-08-02 01:26:01'),
(72, 0, 0, '2026-08-02 07:11:03', 1, 'single', NULL, 'Helping Travelers Explore Nepal Safely', 'International Reputation', NULL, 'From first-time trekkers to experienced mountaineers, our altitude medicine team provides the expertise needed to stay safe and healthy in challenging environments.', 'helping-travelers-explore-nepal-safely', '1785654732132015133', 2, 0, 29, 69, 0, 'trekking-medical-support-64xR8ST3l4wjiHZPHZyLFIAe1Tltfamsd0fqPKse.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:27:12', '2026-08-02 01:27:12'),
(73, 0, 0, '2026-08-02 07:12:15', 1, 'single', NULL, 'Understanding Altitude Risk Levels', 'Altitude Risk Assessment', NULL, 'As altitude increases, oxygen levels decrease and the risk of altitude-related illness rises significantly. Understanding your risk level helps you prepare and travel safely.', 'understanding-altitude-risk-levels', '1785654799477452912', 2, 0, 29, 70, 0, 'mountain-altitude-map-zZhfjAzuWW4SLgbZED4k1DzjuYrAU6pnHAsiXtST.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:28:19', '2026-08-02 01:28:19'),
(74, NULL, 0, '2026-08-02 07:28:46', 1, 'single', NULL, 'Frostbite & Cold Injury Care', 'Cold Injury Awareness', 'Extreme Cold Exposure\r\nHigh Altitude Conditions\r\nWind Chill Effects\r\nEmergency Response Planning', 'High winds, wet clothing, extreme temperatures and prolonged exposure significantly increase the risk of frostbite and hypothermia during trekking and mountaineering activities.', 'frostbite-cold-injury-care', '1785654951305456091', 2, NULL, 29, 71, NULL, 'frostbite-care-WwQNdohbhTrGdATwI2HWlaeAEKTNKXLswkEkSJUD.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:30:51', '2026-08-02 01:43:58'),
(75, NULL, 0, '2026-08-02 07:33:54', 1, 'single', NULL, 'Nepal\'s Leading Travel Medicine & International Healthcare Center', 'About CIWEC', 'Internationally recognized for travel medicine, infectious disease management, preventive healthcare and emergency medical support.', 'CIWEC Hospital has been providing trusted healthcare services for travelers, expatriates, diplomats, aid workers and local communities for more than four decades.', 'nepals-leading-travel-medicine-international-healthcare-center', '1785656034840134795', 1, NULL, 17, 72, NULL, 'about-6Lyucqtadt2AQpe1uH7l333t3qeXso070DIBSGOF.webp', '', '', '', NULL, '42+ Years Of Excellence', NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:48:54', '2026-08-02 01:48:58'),
(76, 0, 0, '2026-08-02 07:34:04', 1, 'single', NULL, 'Message From The Medical Director', 'Leadership Message', NULL, '\"At CIWEC Hospital, our mission is to deliver world-class healthcare with compassion, integrity and innovation.\"', 'message-from-the-medical-director', '1785656113400428460', 1, 0, 17, 73, 0, 'director-K07f06L2n6oTP9gx8TSHRt7O0304hE4LiJ1xLyn3.webp', '', '', '', NULL, 'Dr. Prativa Pandey', 'Medical Director', NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:50:13', '2026-08-02 01:50:13'),
(77, 0, 0, '2026-08-02 07:35:15', 1, 'single', NULL, 'Vision, Mission & Values', 'What Drives Us', NULL, 'Our commitment is built on a strong foundation of patient-centered care, medical excellence and international healthcare standards.', 'vision-mission-values', '1785656151388459353', 1, 0, 17, 74, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:50:51', '2026-08-02 01:50:51'),
(78, 0, 0, '2026-08-02 07:37:00', 1, 'single', NULL, 'Our Vision', NULL, NULL, 'To be recognized globally as a leader in Travel Medicine, International Healthcare, Preventive Care and Medical Innovation, delivering exceptional healthcare services while improving the health and wellbeing of diverse communities.', 'our-vision', '1785656263756461953', 1, 0, 77, 75, 0, '', '', '', '', NULL, NULL, NULL, 'fa-regular fa-eye', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:52:43', '2026-08-02 01:52:43'),
(79, 0, 0, '2026-08-02 07:37:46', 1, 'single', NULL, 'Our Mission', NULL, NULL, 'To provide compassionate, evidence-based, patient-centered healthcare services through highly skilled professionals, advanced medical practices and continuous innovation while maintaining the highest ethical standards.', 'our-mission', '1785656300226269194', 1, 0, 77, 76, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-bullseye', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:53:20', '2026-08-02 01:53:20'),
(80, 0, 0, '2026-08-02 07:38:30', 1, 'single', NULL, 'Our Values', NULL, 'Compassionate Care\r\nIntegrity & Ethics\r\nClinical Excellence\r\nInnovation\r\nInternational Standards', NULL, 'our-values', '1785656361847008470', 1, 0, 77, 77, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-heart', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 01:54:21', '2026-08-02 01:54:21'),
(81, NULL, 0, '2026-08-02 07:51:17', 1, 'single', NULL, 'Trusted By Patients From Around The World', 'Why Choose CIWEC', NULL, 'For more than four decades, CIWEC Hospital has been providing internationally recognized healthcare services for travelers, expatriates, diplomats, aid workers and local communities.', 'trusted-by-patients-from-around-the-world', '1785656847193970206', 1, NULL, 17, 78, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 02:02:27', '2026-08-02 03:41:08'),
(82, 0, 0, '2026-08-02 09:58:32', 1, 'single', NULL, 'Growing With Purpose', 'Evolution Of CIWEC', NULL, 'Over four decades, CIWEC has continuously evolved from a specialized travel medicine clinic into a comprehensive healthcare institution trusted by patients from around the world.', 'growing-with-purpose', '1785664740899730152', 1, 0, 16, 79, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:14:00', '2026-08-02 04:14:00'),
(83, 0, 0, '2026-08-02 09:59:03', 1, 'single', NULL, 'Humble Beginnings', '1982', NULL, 'CIWEC was founded to provide high-quality healthcare services for diplomats, expatriates, aid workers and travelers visiting Nepal.', 'humble-beginnings', '1785664793706985594', 1, 0, 82, 80, 0, 'history1-n5z7pwPBmJnjS47Bi7ia8rMh3geHqZoG3vkjIK9z.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:14:53', '2026-08-02 04:14:53'),
(84, NULL, 0, '2026-08-02 10:01:54', 1, 'single', NULL, 'Expanding Medical Services', '2000', NULL, 'Growing demand led to the expansion of healthcare services, introducing broader medical specialties and enhanced patient care.', 'expanding-medical-services', '1785664825310126740', 1, NULL, 82, 81, NULL, 'history2-zPxr2YobG1YijJ2Jtd9Cmq1glEhdl0nsSNyCFF4y.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:15:25', '2026-08-02 04:16:58'),
(85, 0, 0, '2026-08-02 10:00:37', 1, 'single', NULL, 'Opening Of Pokhara Hospital', '2014', NULL, 'CIWEC expanded its reach by establishing a fully equipped hospital in Pokhara, bringing quality healthcare services closer to western Nepal.', 'opening-of-pokhara-hospital', '178566487254619250', 1, 0, 82, 82, 0, 'history3-BMzlMpOZLY6lvBUMPHUJjsduqeZbJlk8LstqZxAa.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:16:12', '2026-08-02 04:16:12'),
(86, NULL, 0, '2026-08-02 11:22:41', 1, 'single', NULL, 'A Trusted Global Healthcare Partner', 'Today', NULL, 'Today CIWEC serves patients from more than 170 nationalities and continues to be a leader in travel medicine, research, preventive healthcare and international healthcare services.', 'a-trusted-global-healthcare-partner', '1785664901278099432', 1, NULL, 82, 83, NULL, 'emergency-unit-bJ5zTgiDivuUHRiTRhxPzRku5smOMbHNaeQ7gccB.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:16:41', '2026-08-02 05:37:50'),
(87, 0, 0, '2026-08-02 10:02:18', 1, 'single', NULL, 'Moments That Shaped CIWEC', 'Historical Gallery', NULL, 'A visual journey through the milestones, achievements and memorable moments that have defined CIWEC Hospital over the years.', 'moments-that-shaped-ciwec', '178566497964318969', 1, 0, 16, 84, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:17:59', '2026-08-02 04:17:59'),
(88, 0, 0, '2026-08-02 10:03:01', 1, 'single', NULL, 'Foundation Of CIWEC', '1982', NULL, NULL, 'foundation-of-ciwec', '1785665003338416527', 1, 0, 87, 85, 0, 'history1-eIqXLttdRnnwxr1oP3cZcwdSzTz5kgLGU3nDERvm.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:18:23', '2026-08-02 04:18:23'),
(89, 0, 0, '2026-08-02 10:03:56', 1, 'single', NULL, 'Expanding Medical Services in Nepal', '1995', NULL, NULL, 'expanding-medical-services-in-nepal', '1785665078129124407', 1, 0, 87, 86, 0, 'csr-timeline-1-3oOLs5fVShK8kwqmG4bP30iJ2iYOGW9sdd6QP7pJ.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:19:38', '2026-08-02 04:19:38'),
(90, NULL, 0, '2026-08-02 10:05:54', 1, 'single', NULL, 'International Recognition of CIWEC', '2005', NULL, 'Recognition as one of South Asia\'s leading travel medicine centers.', 'international-recognition-of-ciwec', '1785665154618664131', 1, NULL, 87, 87, NULL, 'yourtrustedpartnere-Cm2u6i3C2E7oIZaF0rUQQYxfvkDvy2qflZBGXJVY.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:20:54', '2026-08-02 04:21:00'),
(91, NULL, 0, '2026-08-02 10:08:46', 1, 'single', NULL, 'CIWEC Pokhara Opens', '2014', NULL, 'Expanding healthcare access to western Nepal.', 'ciwec-pokhara-opens', '1785665199448807007', 1, NULL, 87, 88, NULL, 'history3-SejS2gxLhVJ1HBf7z8bJIkkyMJ0sJ51FaDVdZLpq.webp', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:21:39', '2026-08-02 04:24:08'),
(92, 0, 0, '2026-08-02 10:06:55', 1, 'single', NULL, 'World-Class Healthcare', 'Today', NULL, NULL, 'worldclass-healthcare', '1785665248694951833', 1, 0, 87, 89, 0, 'history2-im8Cft76bx5YYYbnrPtF0qs5Vk77X7nzI1AOwQAn.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:22:28', '2026-08-02 04:22:28'),
(93, 0, 0, '2026-08-02 10:07:30', 1, 'single', NULL, 'Continuing Innovation', 'Future', NULL, NULL, 'continuing-innovation', '1785665294797964713', 1, 0, 87, 90, 0, 'research-intro-VumUw4xUqzXQ6XZ3Na5t8hC0C0SJyCDEcJ3zM0qI.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:23:14', '2026-08-02 04:23:14'),
(94, 0, 0, '2026-08-02 10:10:15', 1, 'single', NULL, 'The People Who Shaped CIWEC', 'Leadership Legacy', NULL, 'Behind every milestone stands a team of visionary healthcare professionals whose dedication and leadership helped shape CIWEC into the institution it is today.', 'the-people-who-shaped-ciwec', '1785665438655980660', 1, 0, 16, 91, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:25:38', '2026-08-02 04:25:38'),
(95, 0, 0, '2026-08-02 10:10:45', 1, 'single', NULL, 'Dr. Founder Name', 'Founder', NULL, 'Established CIWEC\'s vision for international healthcare.', 'dr-founder-name', '1785665483163352427', 1, 0, 94, 92, 0, 'director-RWl9KHeUobRajikJbzE3BplZnOp8YBnS1mtF39ZQ.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:26:23', '2026-08-02 04:26:23'),
(96, NULL, 0, '2026-08-02 10:37:15', 1, 'single', NULL, 'Healthcare Beyond Hospital Walls', 'Community Responsibility', 'Through medical camps, blood donation drives, disaster relief efforts, and community partnerships, we help build healthier and stronger communities across Nepal.', 'At CIWEC Hospital, Corporate Social Responsibility is a core part of our mission. We believe quality healthcare should be accessible to everyone, everywhere.', 'healthcare-beyond-hospital-walls', '1785666906457997414', 1, NULL, 21, 93, NULL, 'csr-main-bpUJ7yvnTiqqKCVlPr8XXHz6lfrzSE7fpGaStFHN.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:50:06', '2026-08-02 04:52:29'),
(97, 0, 0, '2026-08-02 10:35:09', 1, 'single', NULL, 'Featured CSR Programs', 'Our Initiatives', NULL, 'Our CSR activities focus on healthcare accessibility, education, emergency preparedness, environmental responsibility, and community wellbeing.', 'featured-csr-programs', '1785666943550020239', 1, 0, 21, 94, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:50:43', '2026-08-02 04:50:43'),
(98, 0, 0, '2026-08-02 10:35:45', 1, 'single', NULL, 'Building Healthier Communities Together', 'Featured Story', 'Every program is designed not only to provide immediate support but also to create long-term positive change for communities throughout Nepal.', 'Over the years, CIWEC\'s CSR initiatives have reached thousands of individuals through free healthcare services, emergency response training, awareness campaigns and community partnerships.', 'building-healthier-communities-together', '1785667015825819628', 1, 0, 21, 95, 0, 'csr-main-8YeqcWmgKpl1B1rBMCBFKMjcLbN5QD11Lt8C48Kw.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:51:55', '2026-08-02 04:51:55'),
(99, 0, 0, '2026-08-02 10:37:35', 1, 'single', NULL, 'Free First Aid Training', 'fa-solid fa-users', 'Training schools, businesses,\r\n                                trekking guides and communities\r\n                                with lifesaving emergency response skills.', '1,500+ Participants Trained', 'free-first-aid-training', '1785667185795819413', 1, 0, 97, 96, 0, 'csr-firstaid-Tzc1CaHPRzcWiLcuvOUSILvJJ3Y7EH7QoBYBFdgK.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-kit-medical', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:54:45', '2026-08-02 04:54:45'),
(100, 0, 0, '2026-08-02 10:39:47', 1, 'single', NULL, 'Blood Donation Camps', 'fa-solid fa-heart', 'Organizing regular donation drives\r\n                                to support emergency care and\r\n                                lifesaving medical treatments.', 'Hundreds Of Lives Supported', 'blood-donation-camps', '1785667251539166831', 1, 0, 97, 97, 0, 'csr-blood-vwNq59GLS0LZ26ZoXbDZT7BuCp9b1iOedHqnw2JJ.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-droplet', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:55:51', '2026-08-02 04:55:51'),
(101, 0, 0, '2026-08-02 10:40:53', 1, 'single', NULL, 'Free Medical Camps', 'fa-solid fa-user-doctor', 'Bringing healthcare services directly\r\n                                to underserved communities throughout Nepal.', 'Rural Healthcare Outreach', 'free-medical-camps', '1785667318727318354', 1, 0, 97, 98, 0, 'csr-medicalcamp-rDfbM9xEt1Fwwo4xJcwQzwXmSkIeIoS2ul72eZs9.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-stethoscope', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:56:58', '2026-08-02 04:56:58'),
(102, 0, 0, '2026-08-02 10:42:00', 1, 'single', NULL, 'Community Support Programs', 'fa-solid fa-handshake-angle', 'Supporting local events,\r\n                                awareness campaigns and\r\n                                community wellbeing initiatives.', 'Strong Local Partnerships', 'community-support-programs', '1785667380211839889', 1, 0, 97, 99, 0, 'csr-community-IQBf4EYWDQGJfqVpCcNAEaqGUls73LZwH41Y4pLj.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-people-group', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 04:58:00', '2026-08-02 04:58:00'),
(104, 0, 0, '2026-08-02 11:16:47', 1, 'single', NULL, 'Specialized Medical Services', 'Centers of Excellence', NULL, NULL, 'specialized-medical-services', '1785669454280324907', 15, 0, 0, 100, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 05:32:34', '2026-08-02 05:32:34'),
(105, NULL, 0, '2026-08-03 05:21:27', 1, 'single', NULL, 'Trusted Healthcare for Travelers and Communities', 'Why Choose CIWEC', NULL, 'More than four decades of excellence in travel medicine, emergency care, diagnostics and specialist healthcare.', 'trusted-healthcare-for-travelers-and-communities', '1785669491873674948', 15, NULL, 0, 101, NULL, 'bg-img1-rpruxpY1Emk0nh2DiXVgk0FaGIdB38Zkzh1PNsaU.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 05:33:11', '2026-08-02 23:36:52'),
(106, 0, 0, '2026-08-02 11:18:13', 1, 'single', NULL, 'Delivering Quality Healthcare To Patients Across The Globe', 'Trusted Worldwide', NULL, 'CIWEC Hospital has served international travelers, diplomats, aid workers, expatriates and local communities for over four decades with trusted healthcare services built on international standards and medical excellence.', 'delivering-quality-healthcare-to-patients-across-the-globe', '1785669702383345536', 15, 0, 0, 102, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 05:36:42', '2026-08-02 05:36:42'),
(107, 0, 0, '2026-08-02 11:25:05', 1, 'single', NULL, 'New Services & Healthcare Innovations', 'What\'s New', NULL, 'Discover the latest healthcare services, specialist programs, diagnostic facilities and patient-focused innovations at CIWEC.', 'new-services-healthcare-innovations', '1785669954345730555', 15, 0, 0, 103, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 05:40:54', '2026-08-02 05:40:54'),
(108, 0, 0, '2026-08-03 04:57:12', 1, 'single', NULL, 'Travel & Tropical Medicine', 'Travel Medicine', 'Internationally recognized expertise in travel medicine, infectious diseases and preventive healthcare.', 'Internationally recognized expertise in travel medicine, infectious diseases and preventive healthcare.', 'travel-tropical-medicine', '1785733121582261031', 15, 0, 104, 104, 0, 'img1-kNmrfACHdiH54oixebW2QswlAWfXkfKiPWNLEu4v.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:13:41', '2026-08-02 23:13:41'),
(109, 0, 0, '2026-08-03 04:58:44', 1, 'single', NULL, 'Family Healthcare', 'Family Medicine', NULL, 'Comprehensive healthcare services for individuals and families of all ages.', 'family-healthcare', '1785733170382438596', 15, 0, 104, 105, 0, 'img11-8cTt9F4y2FcgvVbjFThpLqgMBENA5D1Nf74qATTG.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:14:30', '2026-08-02 23:14:30'),
(110, 0, 0, '2026-08-03 05:00:14', 1, 'single', NULL, 'Travel Medicine Demo', 'Travel Medicine Demo', NULL, 'Internationally recognized expertise in travel medicine, infectious diseases and preventive healthcare.', 'travel-medicine-demo', '1785733263465936194', 15, 0, 104, 106, 0, 'img2-DNSIil9WgvlH0RND1BGmaanmZ6Y0xNEtP8gXnAWG.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:16:03', '2026-08-02 23:16:03'),
(111, 0, 0, '2026-08-03 05:01:17', 1, 'single', NULL, 'Family Medicine demo', 'Family Medicine demo', NULL, 'Comprehensive healthcare services for individuals  and families of all ages.', 'family-medicine-demo', '1785733398443552355', 15, 0, 104, 107, 0, 'img4-CM0jDXlIcmd9G2PXiWcHFBaIAytmkUnxqi2srp50.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:18:18', '2026-08-02 23:18:18'),
(112, 0, 0, '2026-08-03 05:04:26', 1, 'single', NULL, 'Heart & Vascular Care', 'Cardiology', NULL, 'Advanced diagnosis and treatment for heart diseases, hypertension, and cardiovascular conditions.', 'heart-vascular-care', '1785733513133661187', 15, 0, 104, 108, 0, 'img5-lTSrGaYpXRc9BGFNlK5NmhS9rih8NjMY6i9eW434.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:20:13', '2026-08-02 23:20:13'),
(113, NULL, 0, '2026-08-03 05:08:05', 1, 'single', NULL, 'Bone & Joint Care', NULL, NULL, 'Expert care for fractures, arthritis, sports injuries, and musculoskeletal disorders with modern treatments.', 'bone-joint-care', '1785733543462752065', 15, NULL, 104, 109, NULL, 'img6-QvvnBmu49HeliEu64ANVunOLZ0JQwIAvsmCslpY8.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:20:43', '2026-08-02 23:23:10');
INSERT INTO `cl_posts` (`id`, `uid`, `visiter`, `post_date`, `post_author`, `template`, `template_child`, `post_title`, `sub_title`, `post_content`, `post_excerpt`, `uri`, `page_key`, `post_type`, `post_category`, `post_parent`, `post_order`, `home_order`, `banner`, `page_thumbnail`, `thumbnail`, `icon`, `page_video`, `meta_keyword`, `meta_description`, `associated_title`, `external_link`, `price`, `post_tags`, `project_status`, `status`, `global_post`, `published`, `is_active`, `is_draft`, `is_trashed`, `show_in_home`, `is_password_protected`, `comment`, `lang`, `created_at`, `updated_at`) VALUES
(114, 0, 0, '2026-08-03 05:05:45', 1, 'single', NULL, 'Child Healthcare', 'Pediatrics', NULL, 'Compassionate medical care for infants, children, and adolescents, focusing on healthy growth and development.', 'child-healthcare', '1785733586455651915', 15, 0, 104, 110, 0, 'img7-ClhOx5KB8dQxMYoPcxo8RkNMtiXoairiydzLpxrH.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:21:26', '2026-08-02 23:21:26'),
(115, 0, 0, '2026-08-03 05:06:28', 1, 'single', NULL, 'Women\'s Health', 'Gynecology', NULL, 'Comprehensive healthcare services for women, including routine checkups, pregnancy care, and reproductive health.', 'womens-health', '1785733625917137445', 15, 0, 104, 111, 0, 'img11-j0635nknoYVjAchpDlTpDikqfxZUjNwUNEZIkRzF.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:22:05', '2026-08-02 23:22:05'),
(116, 0, 0, '2026-08-03 05:07:10', 1, 'single', NULL, 'Brain & Nerve Care', 'Neurology', NULL, 'Specialized diagnosis and treatment for neurological disorders affecting the brain, spine, and nervous system.', 'brain-nerve-care', '1785733670623673601', 15, 0, 104, 112, 0, 'img4-HzGMSa5xcxrCcOYr3SE07sriSYiprVQhgNU8U47W.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:22:50', '2026-08-02 23:22:50'),
(117, 0, 0, '2026-08-03 05:21:57', 1, 'single', NULL, 'Travel Medicine Expertise', NULL, NULL, NULL, 'travel-medicine-expertise-demo', '1785734638586044670', 15, 0, 105, 113, 0, 'yourtrustedpartnere-4mdosemJYVdRyASJbzwPNYrwpyvvgbDVI8eDT86D.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-earth-asia', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:38:58', '2026-08-02 23:38:58'),
(119, 0, 0, '2026-08-03 05:25:42', 1, 'single', NULL, '80+ Medical Specialists', NULL, NULL, NULL, '80-medical-specialists', '1785734783981139382', 15, 0, 105, 114, 0, 'altitude-expert-doctor-mQ5egUYYLFwrJgJLUy80vI5LopGuaq0JQc5vIXOY.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-user-doctor', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:41:23', '2026-08-02 23:41:23'),
(120, 0, 0, '2026-08-03 05:26:26', 1, 'single', NULL, 'Research & Education', NULL, NULL, NULL, 'research-education', '1785734819485308252', 15, 0, 105, 115, 0, 'research-intro-WiD2sb8i4UmCsr2Bq8UO4c4sSyBODdkO7yLHBxFx.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-microscope', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:41:59', '2026-08-02 23:41:59'),
(121, 0, 0, '2026-08-03 05:27:02', 1, 'single', NULL, 'International Patients', NULL, NULL, NULL, 'international-patients', '1785734869719060826', 15, 0, 105, 116, 0, 'medical-expert-ygdk7QIUtPW5jiaTCVfYVj60M7NdNUA6bEgl072g.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-globe', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:42:49', '2026-08-02 23:42:49'),
(122, 0, 0, '2026-08-03 05:27:52', 1, 'single', NULL, '42+ Years of Excellences  Ciwec', NULL, NULL, NULL, '42-years-of-excellences-ciwec', '1785734925470326376', 15, 0, 105, 117, 0, 'about-ciwec-HSUlR3XiTcs5qCxhpWiqwKab75I3i0c1yA4mqVkV.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-award', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:43:45', '2026-08-02 23:43:45'),
(123, 0, 0, '2026-08-03 05:28:48', 1, 'single', NULL, '170+ Nations Served', NULL, NULL, NULL, '170-nations-served', '1785734975743116498', 15, 0, 105, 118, 0, 'emergency-unit-yDl8zTULyO4aaiD6x4Em67yzjrQ2gnIxYX4z2e2V.webp', '', '', '', NULL, NULL, NULL, 'fa-solid fa-flag', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-02 23:44:35', '2026-08-02 23:44:35'),
(124, 0, 0, '2026-08-03 05:44:42', 1, 'single', NULL, 'Second Opinion Consultation', 'Featured Service', NULL, 'Get expert medical advice from experienced specialists before making important treatment decisions.', 'second-opinion-consultation', '1785735942718191752', 15, 0, 107, 119, 0, 'yourtrustedpartnere-KIH0SZc0IMSAd9pBwusZ6GFWJUkdvmGqDJ2Jifgr.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 00:00:42', '2026-08-03 00:00:42'),
(125, 0, 0, '2026-08-03 05:45:44', 1, 'single', NULL, 'Buy Medicine', NULL, NULL, 'Reliable medication delivered safely to your home with professional pharmacy support.', 'buy-medicine', '1785736173632152116', 15, 0, 107, 120, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-capsules', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 00:04:33', '2026-08-03 00:04:33'),
(126, 0, 0, '2026-08-03 05:49:36', 1, 'single', NULL, 'Labs & Diagnostics', NULL, NULL, 'Comprehensive diagnostic services powered by modern  equipment and expert laboratory professionals.', 'labs-diagnostics', '1785736216635679208', 15, 0, 107, 121, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-flask', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 00:05:16', '2026-08-03 00:05:16'),
(127, 0, 0, '2026-08-03 05:50:18', 1, 'single', NULL, 'Health Screening', NULL, NULL, 'Preventive healthcare programs tailored for individuals, families and corporate clients.', 'health-screening', '1785736252879164995', 15, 0, 107, 122, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-heart-pulse', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 00:05:52', '2026-08-03 00:05:52'),
(128, 0, 0, '2026-08-03 05:50:59', 1, 'single', NULL, 'Specialist Care', NULL, NULL, 'Access expert consultations from experienced doctors across multiple medical specialties.', 'specialist-care', '1785736300762963658', 15, 0, 107, 123, 0, '', '', '', '', NULL, NULL, NULL, 'fa-solid fa-user-doctor', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 00:06:40', '2026-08-03 00:06:40'),
(129, NULL, 0, '2026-08-03 06:49:33', 1, 'single', NULL, 'Healthcare Professionals You Can Trust', 'Meet Our Experts', NULL, 'Our experienced physicians in Kathmandu and Pokhara deliver evidence-based healthcare, travel medicine expertise, preventive care and specialist consultations for patients from Nepal and around the world.', 'healthcare-professionals-you-can-trust', '1785736953940166249', 15, NULL, 0, 124, NULL, 'bg-img1-2fHHhC9qWbtpJ499ZHYyewTS9dwmxtgnNKyJ0tBe.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 00:17:33', '2026-08-03 01:05:14'),
(130, 0, 0, '2026-08-03 06:51:13', 1, 'single', NULL, 'Patient Stories', 'Recovery Stories', NULL, 'CIWEC Hospital has been recognized nationally and internationally for excellence in healthcare, travel medicine and patient care.', 'patient-stories', '1785739932555350074', 15, 0, 0, 125, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:07:12', '2026-08-03 01:07:12'),
(131, 0, 0, '2026-08-03 06:53:46', 1, 'single', NULL, 'Pre-Term Babies', 'Ms Sakshi', NULL, 'https://youtu.be/OcnVl7n27io?si=LCnkbnzVA3UegDXh', 'preterm-babies', '1785740211377026037', 15, 0, 130, 126, 0, '', '', '', '', NULL, NULL, NULL, 'Featured Story', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:11:51', '2026-08-03 01:11:51'),
(132, 0, 0, '2026-08-03 06:56:53', 1, 'single', NULL, 'Liver Failure', 'Baby Bhavika', NULL, 'https://youtu.be/JmsYrP-149U?si=HWC6jClGCre1g6-s', 'liver-failure', '1785740256571124204', 15, 0, 130, 127, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:12:36', '2026-08-03 01:12:36'),
(133, 0, 0, '2026-08-03 06:57:38', 1, 'single', NULL, 'Neurosurgical Treatment', 'Mr Devender Jeet Singh', NULL, 'https://youtu.be/OcnVl7n27io?si=LCnkbnzVA3UegDXh', 'neurosurgical-treatment', '1785740288898272481', 15, 0, 130, 128, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:13:08', '2026-08-03 01:13:08'),
(134, 0, 0, '2026-08-03 06:58:11', 1, 'single', NULL, 'Bone Marrow Transplant', 'Mr Haider', NULL, 'https://youtu.be/OcnVl7n27io?si=LCnkbnzVA3UegDXh', 'bone-marrow-transplant', '1785740321722996883', 15, 0, 130, 129, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:13:41', '2026-08-03 01:13:41'),
(135, 0, 0, '2026-08-03 06:58:43', 1, 'single', NULL, 'Kidney Donation', 'Ms Paluk Sunger', NULL, 'https://youtu.be/OcnVl7n27io?si=LCnkbnzVA3UegDXh', 'kidney-donation', '1785740359506662163', 15, 0, 130, 130, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:14:19', '2026-08-03 01:14:19'),
(136, 0, 1, '2026-08-03 07:27:52', 1, 'single', NULL, 'What Our Patients Say', 'Patient Feedback', NULL, 'Trusted by travelers, expatriates, diplomats and local communities for over four decades.', 'what-our-patients-say', '1785742126454610492', 15, 0, 0, 131, 0, '', '', '', '', NULL, NULL, NULL, '4.9/5 Rating', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:43:46', '2026-08-03 03:37:07'),
(137, NULL, 0, '2026-08-03 07:31:10', 1, 'single', NULL, 'Joris Van Dorpe', NULL, NULL, 'Thank you so much CIWEC Hospital for all your amazing care. All of the staff was super friendly and made me feel at home immediately.', 'joris-van-dorpe', '1785742270111027382', 15, NULL, 136, 132, NULL, 'doc3-4LmWVzJrKZsaMkaVLlS7co3cHZ74MphjlCkOEZQz.webp', '', '', '', NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:46:10', '2026-08-03 01:46:27'),
(138, 0, 0, '2026-08-03 07:31:30', 1, 'single', NULL, 'Ashley Hagaman', NULL, NULL, 'Dr Sandee Gupta cared for me when I took a fall\r\n                                hiking in the Himalayas. He was very professional\r\n                                and showed great concern.', 'ashley-hagaman', '1785742321393753901', 15, 0, 136, 133, 0, 'doc1-xPv7XvqtMGczDuGWjHcEA45e0rmeCNNZJINw1xCE.webp', '', '', '', NULL, NULL, NULL, '5', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:47:01', '2026-08-03 01:47:01'),
(139, 0, 0, '2026-08-03 07:32:04', 1, 'single', NULL, 'Ram Sharma', NULL, NULL, 'Dr Sandee Gupta cared for me when I took a fall\r\n                                hiking in the Himalayas. He was very professional\r\n                                and showed great concern.', 'ram-sharma', '1785742355783825107', 15, 0, 136, 134, 0, 'doc2-9mfIb51fUfReD4ZEl94Dw5u6S8p7KIKMU1XlNtlE.webp', '', '', '', NULL, NULL, NULL, '4', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:47:35', '2026-08-03 01:47:35'),
(140, 0, 0, '2026-08-03 07:32:38', 1, 'single', NULL, 'Hari Adhikari', NULL, NULL, 'Trusted by travelers, expatriates, diplomats and local communities for over four decades.', 'hari-adhikari', '1785742381756079325', 15, 0, 136, 135, 0, 'samrat-KhZCKg1Nj5tmTgmJNyYT3PXGElYq3WHaZfONSMo6.webp', '', '', '', NULL, NULL, NULL, '5', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:48:01', '2026-08-03 01:48:01'),
(141, 0, 0, '2026-08-03 07:33:05', 1, 'single', NULL, 'Sudhan Jha', NULL, NULL, 'Thank you so much CIWEC Hospital for all your amazing care.\r\n                                All of the staff was super friendly and made me feel\r\n                                at home immediately.', 'sudhan-jha', '1785742423209410558', 15, 0, 136, 136, 0, 'david-WDqqZFTOy8k47ul8IYUMKXBl5rSc16ZYAOWttvI4.webp', '', '', '', NULL, NULL, NULL, '4', NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:48:43', '2026-08-03 01:48:43'),
(142, 0, 0, '2026-08-03 07:39:14', 1, 'single', NULL, 'Awards & Recognitions', 'Recognition & Excellence', NULL, 'CIWEC Hospital has received national and international recognition for excellence in healthcare, travel medicine and patient-centered services.', 'awards-recognitions', '1785742828528637580', 15, 0, 0, 137, 0, 'bg-img5-V3jczDTYs0f6R0mfYLXjRrq8K08HMKh3sT424VTc.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:55:28', '2026-08-03 01:55:28'),
(143, 0, 0, '2026-08-03 07:40:33', 1, 'single', NULL, 'Award 1', NULL, NULL, NULL, 'award-1', '1785742853307164052', 15, 0, 142, 138, 0, 'award-1-zqt5erkx0QF4pOJQWltKhOcSnuzUTuxLnO29T9fa.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:55:53', '2026-08-03 01:55:53'),
(144, NULL, 0, '2026-08-03 07:41:08', 1, 'single', NULL, 'Award 2', NULL, NULL, NULL, 'award-2', '1785742868218608926', 15, NULL, 142, 139, NULL, 'award-2-LZu2zSbvucnIpTXg7YwvvGUk0T156LfNVRJ6Aeyo.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:56:08', '2026-08-03 01:56:15'),
(145, 0, 0, '2026-08-03 07:41:17', 1, 'single', NULL, 'Award 3', NULL, NULL, NULL, 'award-3', '1785742892270275688', 15, 0, 142, 140, 0, 'award-3-wXDhfmp11MjVLgOAak7mXmnCwQeR3ml2YpVI22Bo.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:56:32', '2026-08-03 01:56:32'),
(146, 0, 0, '2026-08-03 07:41:35', 1, 'single', NULL, 'Award 4', NULL, NULL, NULL, 'award-4', '178574291978982247', 15, 0, 142, 141, 0, 'award-2-BNWvZGEx3EnhXEz8xCoMNJFoH7e7sg6NEDjcldcv.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:56:59', '2026-08-03 01:56:59'),
(147, 0, 0, '2026-08-03 07:42:02', 1, 'single', NULL, 'Award 5', NULL, NULL, NULL, 'award-5', '1785742936814410654', 15, 0, 142, 142, 0, 'circular-7Ftsh6HcjLgw9UMwBpPsoNwu0q2Fjgsxp6r9pTMs.webp', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 01:57:16', '2026-08-03 01:57:16'),
(148, 0, 0, '2026-08-03 07:50:58', 1, 'single', NULL, 'Newsletters & Publications', 'Publications', NULL, 'Explore healthcare updates, travel medicine insights, research publications and hospital newsletters.', 'newsletters-publications', '1785743559134721613', 15, 0, 0, 143, 0, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '1', 0, '1', '1', '0', '0', '0', '0', '0', 'en', '2026-08-03 02:07:39', '2026-08-03 02:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_categories`
--

CREATE TABLE `cl_post_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_type` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `category_caption` varchar(191) DEFAULT NULL,
  `category_content` text DEFAULT NULL,
  `uri` varchar(191) NOT NULL,
  `ordering` int(11) DEFAULT 0,
  `thumbnail` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_featured_images`
--

CREATE TABLE `cl_post_featured_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `featured_image` varchar(191) DEFAULT NULL,
  `featured_image_caption` varchar(191) DEFAULT NULL,
  `featured_image_status` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_type`
--

CREATE TABLE `cl_post_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` varchar(50) DEFAULT '0',
  `post_type` varchar(191) NOT NULL,
  `uri` varchar(191) NOT NULL,
  `caption` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `ordering` int(11) DEFAULT 0,
  `is_menu` enum('0','1') NOT NULL DEFAULT '0',
  `is_footer_menu` tinyint(1) DEFAULT 0,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_post_type`
--

INSERT INTO `cl_post_type` (`id`, `uid`, `post_type`, `uri`, `caption`, `content`, `meta_keyword`, `meta_description`, `template`, `banner`, `ordering`, `is_menu`, `is_footer_menu`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', 'About Us', 'about', '<div>\r\n<div>Welcome to Ciwec Hospital.</div>\r\n</div>', NULL, 'About Us', 'ABOUT US', 'posttypeTemplate-about', 'history1-1juMkQHu9wWhzf7SS4jur22ZECNQFiVpWmd8hkEp.webp', 1, '1', 1, '1', '2021-05-20 08:13:06', '2026-08-03 06:05:25'),
(2, 'Services', 'Services', 'services', 'Service', 'Service', NULL, NULL, 'posttypeTemplate-services', NULL, 2, '1', 1, '1', NULL, '2026-07-29 09:16:59'),
(3, 'Health Information', 'Health Information', 'health-information', 'Health Information', 'Health Information', NULL, NULL, 'posttypeTemplate-healthinformation', NULL, 3, '1', 1, '1', NULL, '2026-07-29 09:17:21'),
(4, 'Research & Publication', 'Research & Publication', 'research-publication', 'Research & Publication', NULL, NULL, NULL, 'posttypeTemplate-researchpublication', 'research-intro-jgof2kktZiDda0N2QF6V2p38GOuuQjto0BCuCjVQ.webp', 4, '1', 1, '1', NULL, '2026-08-02 04:08:43'),
(5, 'CONTACT US', 'Contact', 'contact', '<h2>Contact with us</h2>', '<p>euismod eu augue. Etiam vel dui arcu. Cras varius mieros pharetra, id aliquam metus venenatis. Donec sollicit</p>', NULL, NULL, 'posttypeTemplate-contact', 'blg-ORGuLNqbHxOqEXqLrmKX9hsO0qKBlcjBiELAxXkc.jpg', 5, '1', 1, '1', '2021-05-20 08:14:35', '2026-07-29 09:18:32'),
(13, 'Book Appointment', 'Book Appointment', 'bookappointment', 'Book Appointment', 'Book Appointments', NULL, NULL, 'posttypeTemplate-bookappointment', 'acceptance-terms-1cOWrFy6VbigRCE0ippw63BbvmQg8y9hVHtOmyCw.webp', 8, '0', 0, '1', NULL, '2026-08-02 05:29:29'),
(14, 'Terms and conditions', 'Terms and conditions', 'terms-and-conditions', 'Terms and conditions', '<h2>Terms & Conditions</h2>  <p> Welcome to CIWEC Hospital. These Terms &amp; Conditions govern your access to and use of our website, digital platforms, appointment services, healthcare interactions, and related communications. By accessing or using our services, you agree to comply with these terms. </p>  <hr>  <h3>Terms Overview</h3>  <p>These terms are intended to:</p>  <ul>     <li>Define the appropriate use of our healthcare services.</li>     <li>Explain the responsibilities of patients and visitors.</li>     <li>Establish guidelines for using our website.</li>     <li>Promote transparency, safety, and legal compliance.</li> </ul>  <hr>  <h3>Responsible Use of Our Website</h3>  <p> We encourage all visitors to use our website responsibly and lawfully. The following guidelines help maintain a secure, reliable, and positive experience for everyone. </p>  <h4>Permitted Use</h4>  <ul>     <li>Browse healthcare information and hospital services.</li>     <li>Request appointments and medical consultations.</li>     <li>Contact the hospital with inquiries or feedback.</li>     <li>Access educational healthcare resources.</li>     <li>Use website features for legitimate and lawful purposes.</li> </ul>  <h4>Prohibited Activities</h4>  <ul>     <li>Attempting unauthorized access to hospital systems.</li>     <li>Uploading malicious software or harmful content.</li>     <li>Disrupting or interfering with website operations.</li>     <li>Providing false, misleading, or fraudulent information.</li>     <li>Violating applicable laws or regulations while using our services.</li> </ul>  <hr>  <h3>Website Integrity</h3>  <p> Following these guidelines helps us maintain a secure, reliable, and accessible digital environment for patients, visitors, and healthcare professionals. </p>  <hr>  <h3>Limitations &amp; Disclaimers</h3>  <p> CIWEC Hospital makes every reasonable effort to provide accurate information, quality healthcare services, and reliable website functionality. However, users acknowledge that certain interruptions, technical issues, or unforeseen circumstances may occasionally occur. </p>  <ul>     <li>Healthcare services are provided in good faith.</li>     <li>We continually improve our website and services.</li>     <li>Temporary service interruptions may occur.</li>     <li>Medical outcomes and individual circumstances may vary.</li> </ul>  <hr>  <h3>Medical Information Disclaimer</h3>  <p> The information available on this website is provided for general educational and informational purposes only. It should not be considered a substitute for professional medical advice, diagnosis, or treatment. </p>  <p> Always consult a qualified healthcare professional regarding any medical condition or healthcare decision. </p>  <hr>  <h3>Appointments &amp; Healthcare Services</h3>  <p> Appointment requests submitted through our website are subject to confirmation by the hospital. While we strive to honor scheduled appointments, changes may occur due to medical emergencies, physician availability, or operational requirements. </p>  <ul>     <li>Appointment requests are subject to confirmation.</li>     <li>Emergency cases may affect scheduling.</li>     <li>Patients should provide accurate personal information.</li>     <li>Hospital policies may apply to cancellations or rescheduling.</li> </ul>  <hr>  <h3>Intellectual Property</h3>  <p> Unless otherwise stated, all website content including text, graphics, images, logos, documents, and other materials are the property of CIWEC Hospital or its licensors and are protected by applicable intellectual property laws. </p>  <p> Unauthorized reproduction, distribution, modification, or commercial use of website content is prohibited without prior written permission. </p>  <hr>  <h3>Privacy</h3>  <p> Your use of our website is also governed by our Privacy Policy. We encourage you to review the Privacy Policy to understand how personal information is collected, used, stored, and protected. </p>  <hr>  <h3>Changes to These Terms</h3>  <p> CIWEC Hospital reserves the right to update or modify these Terms &amp; Conditions at any time without prior notice. Continued use of our website following any updates constitutes acceptance of the revised terms. </p>    <hr>  <p> <strong>Last Updated:</strong> August 2026 </p>', NULL, NULL, 'posttypeTemplate-termsandconditions', NULL, 6, '0', 0, '1', NULL, '2026-08-03 05:11:20'),
(15, 'Home', 'Home', 'home', 'Home', NULL, NULL, NULL, NULL, NULL, 0, '0', 0, '1', NULL, NULL),
(16, 'Privacy Policy', 'Privacy Policy', 'privacy-policy', NULL, '<h2>Privacy Policy</h2>\r\n\r\n<p>\r\nAt CIWEC Hospital, we are committed to protecting your personal and medical\r\ninformation. We recognize that your privacy is important and strive to ensure\r\nthat all information collected is handled responsibly, securely, and in\r\naccordance with applicable laws and healthcare standards.\r\n</p>\r\n\r\n<h3>Our Privacy Commitment</h3>\r\n\r\n<p>We are committed to:</p>\r\n\r\n<ul>\r\n    <li>Maintaining patient confidentiality at all times.</li>\r\n    <li>Protecting information through secure systems and processes.</li>\r\n    <li>Allowing access only to authorized personnel.</li>\r\n    <li>Being transparent about how your information is collected and used.</li>\r\n</ul>\r\n\r\n<hr>\r\n\r\n<h3>Information We Collect</h3>\r\n\r\n<p>We may collect the following information to provide healthcare services:</p>\r\n\r\n<h4>Personal Information</h4>\r\n\r\n<ul>\r\n    <li>Full Name</li>\r\n    <li>Email Address</li>\r\n    <li>Phone Number</li>\r\n    <li>Home Address</li>\r\n    <li>Nationality</li>\r\n</ul>\r\n\r\n<h4>Medical Information</h4>\r\n\r\n<ul>\r\n    <li>Medical History</li>\r\n    <li>Vaccination Records</li>\r\n    <li>Laboratory Results</li>\r\n    <li>Diagnostic Reports</li>\r\n    <li>Treatment Information</li>\r\n</ul>\r\n\r\n<h4>Website Information</h4>\r\n\r\n<ul>\r\n    <li>IP Address</li>\r\n    <li>Browser Information</li>\r\n    <li>Device Information</li>\r\n    <li>Website Usage Data</li>\r\n    <li>Cookie Preferences</li>\r\n</ul>\r\n\r\n<hr>\r\n\r\n<h3>How We Collect Information</h3>\r\n\r\n<p>Information may be collected through:</p>\r\n\r\n<ul>\r\n    <li>Patient registration</li>\r\n    <li>Appointment booking forms</li>\r\n    <li>Medical consultations</li>\r\n    <li>Diagnostic and laboratory services</li>\r\n    <li>Website contact forms</li>\r\n    <li>Email and telephone communications</li>\r\n</ul>\r\n\r\n<hr>\r\n\r\n<h3>How We Use Your Information</h3>\r\n\r\n<p>Your information may be used to:</p>\r\n\r\n<ul>\r\n    <li>Provide medical care and treatment.</li>\r\n    <li>Schedule and manage appointments.</li>\r\n    <li>Maintain accurate medical records.</li>\r\n    <li>Communicate important healthcare information.</li>\r\n    <li>Comply with legal and regulatory obligations.</li>\r\n    <li>Improve our healthcare services.</li>\r\n</ul>\r\n\r\n<hr>\r\n\r\n<h3>Data Security</h3>\r\n\r\n<p>\r\nWe implement appropriate administrative, technical, and physical safeguards to\r\nprotect your personal and medical information against unauthorized access,\r\ndisclosure, alteration, or loss.\r\n</p>\r\n\r\n<hr>\r\n\r\n<h3>Your Rights</h3>\r\n\r\n<p>You may have the right to:</p>\r\n\r\n<ul>\r\n    <li>Request access to your personal information.</li>\r\n    <li>Request correction of inaccurate information.</li>\r\n    <li>Withdraw consent where legally applicable.</li>\r\n    <li>Ask questions regarding our privacy practices.</li>\r\n</ul>\r\n\r\n<hr>\r\n\r\n<h3>Contact Us</h3>\r\n\r\n<p>\r\nIf you have any questions or concerns regarding this Privacy Policy or the way\r\nyour information is handled, please contact us.\r\n</p>', NULL, NULL, 'posttypeTemplate-privacypolicy', 'acceptance-terms-hek5XbORkHXHQwVUbIe3PVuojj9tmgya4PhBLDCe.webp', 7, '0', 0, '1', NULL, '2026-08-03 06:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `cl_post_videos`
--

CREATE TABLE `cl_post_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `featured_video` varchar(191) DEFAULT NULL,
  `featured_video_caption` varchar(191) DEFAULT NULL,
  `featured_video_status` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_roles`
--

CREATE TABLE `cl_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_roles`
--

INSERT INTO `cl_roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', '2018-07-01 09:56:16', '2020-08-16 14:47:31'),
(2, 'Admin', '2018-07-01 09:56:34', '2020-08-16 14:47:43'),
(3, 'General', '2020-08-16 14:47:05', '2020-08-16 14:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `cl_settings`
--

CREATE TABLE `cl_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_of_inquiries` int(11) DEFAULT 0,
  `site_name` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `phone2` varchar(50) DEFAULT NULL,
  `email_primary` varchar(191) DEFAULT NULL,
  `email_secondary` varchar(191) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(191) DEFAULT NULL,
  `linkedin_link` varchar(191) DEFAULT NULL,
  `youtube_link` varchar(191) DEFAULT NULL,
  `twitter_link` varchar(191) DEFAULT NULL,
  `google_plus` varchar(100) DEFAULT NULL,
  `instagram_link` varchar(100) DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `google_map2` text DEFAULT NULL,
  `welcome_title` varchar(255) DEFAULT NULL,
  `welcome_text` text DEFAULT NULL,
  `copyright_text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cl_settings`
--

INSERT INTO `cl_settings` (`id`, `num_of_inquiries`, `site_name`, `phone`, `phone2`, `email_primary`, `email_secondary`, `website`, `address`, `address2`, `facebook_link`, `linkedin_link`, `youtube_link`, `twitter_link`, `google_plus`, `instagram_link`, `meta_key`, `meta_description`, `google_map`, `google_map2`, `welcome_title`, `welcome_text`, `copyright_text`, `created_at`, `updated_at`) VALUES
(1, 0, 'CIWEC Hospital', '+977-1-4524111', '+977-61-453082', 'info@ciwec-clinic.com', 'pkradministrator@ciwec-clinic.com', 'https://ciwechospital.com/', 'G.P.O Box 12895<br>Kapurdhara Marg<br>Kathmandu 44600, Nepal', '14th Street, Lakeside<br>Pokhara-6, Nepal', 'http://facebook.com/', NULL, NULL, 'https://twitter.com/?lang=en', NULL, 'https://www.instagram.com/', 'Ciwec,Hospital, Travellers hospital', 'CIWEC Hospital and Travel Medicine Center is one of the most reputable destination travel medicine hospitals in the world.', '<iframe\r\n                        src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5812.9173464410205!2d85.317739!3d27.7204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191c66b55369%3A0x54f86a9e462d1192!2sCIWEC%20Hospital%20Pvt.%20Ltd.!5e1!3m2!1sen!2snp!4v1779884686270!5m2!1sen!2snp\"\r\n                        class=\"w-full h-full border-0\"\r\n                        loading=\"lazy\">\r\n                    </iframe>', '                    <iframe                         src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5786.639085664441!2d83.959212!3d28.209360000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995951c2ffd853d%3A0xa5dcb30f60d4c9b9!2sCIWEC%20Hospital%20Pokhara!5e1!3m2!1sen!2snp!4v1779884725455!5m2!1sen!2snp\"                         class=\"w-full h-full border-0\"                         loading=\"lazy\">                     </iframe>', 'International Standard Healthcare in Nepal', 'Providing world-class travel medicine, family medicine,\r\n                        specialist care and emergency services from Kathmandu and\r\n                        Pokhara for over 40 years.', 'CIWEC Hospital. All Rights Reserved.', '2026-07-28 01:18:31', '2026-07-28 23:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_03_28_114354_create_cl_post_metas_table', 1),
(5, '2018_03_28_114442_create_cl_post_featured_images_table', 1),
(6, '2018_03_28_114755_create_cl_post_attachments_table', 1),
(7, '2018_03_28_114834_create_cl_post_videos_table', 1),
(9, '2018_03_28_115212_create_cl_post_comments_table', 1),
(10, '2018_03_28_115358_create_cl_categories_table', 1),
(11, '2018_03_28_115432_create_cl_category_metas_table', 1),
(12, '2018_03_29_064328_create_cl_log_table', 1),
(13, '2018_05_08_114118_create_cl_userroles_table', 1),
(14, '2018_05_20_062425_create_cl_members_table', 1),
(15, '2018_06_04_092530_create_cl_roles_table', 1),
(16, '2018_06_06_123826_create_product_category_table', 1),
(17, '2018_06_07_093316_create_post_type_table', 1),
(18, '2018_06_13_071711_create_cl_post_category_table', 1),
(19, '2018_06_21_080700_create_cl_banner_table', 1),
(20, '2018_06_27_053620_create_cl_product_type_table', 2),
(21, '2018_06_28_061103_create_cl_product_brand_table', 3),
(22, '2018_06_28_061256_create_cl_currency_table', 3),
(23, '2018_06_28_061707_create_cl_product_unit_table', 3),
(26, '2018_06_29_051629_create_cl_products_table', 1),
(31, '2018_07_03_014755_create_cl_gallery_image_categories_table', 4),
(32, '2018_07_03_014814_create_cl_gallery_images_table', 4),
(35, '2018_07_03_104330_create_cl_gallery_videos_table', 6),
(37, '2018_07_03_103721_create_cl_gallery_video_categories_table', 7),
(38, '2018_07_04_061117_create_cl_post_type_table', 7),
(39, '2018_03_28_113701_create_cl_posts_table', 8),
(41, '2018_08_06_085514_create_cl_product_tag_table', 9),
(42, '2018_09_20_120321_create_cl_customer_billing_address_table', 10),
(43, '2018_09_20_120340_create_cl_customer_shipping_address_table', 10),
(44, '2018_09_24_094921_create_cl_orders_table', 11),
(45, '2018_09_25_061818_create_cl_country_table', 12),
(46, '2018_09_25_092853_create_order_product_table', 13),
(47, '2018_09_25_100703_create_cl_order_product_table', 14),
(48, '2018_10_02_031657_create_cl_settings_table', 15),
(49, '2018_11_14_092229_create_cl_tender_table', 16),
(51, '2018_11_19_042417_create_cl_tender_category', 18),
(52, '2018_11_19_075448_create_cl_tender_document_table', 19),
(53, '2018_11_16_111624_create_cl_venderdetail_table', 20),
(54, '2018_11_25_060813_create_cl_multiple_video_table', 21),
(55, '2018_11_29_065424_create_cl_multiple_document_table', 22),
(56, '2019_03_13_082841_create_newsletter_signup_table', 23),
(59, '2019_03_14_052123_create_cl_associated_posts_table', 24),
(61, '2019_03_15_090749_create_cl_dwninfo_table', 25),
(62, '2020_08_06_095339_create_cl_multiple_banner_table', 26),
(63, '2020_08_06_120936_add_banner_id_column_at_cl_multiple_banner_table', 26),
(64, '2020_08_07_084648_add_visitor_column_at_posts_table', 26),
(66, '2020_08_11_180220_create_role_user_table', 27),
(67, '2020_08_12_061740_create_foreign_keys_for_role_user_table', 27),
(68, '2020_08_16_130049_crate_admin_menu_table', 28),
(74, '2020_08_16_162623_create_adminmenu_user_table', 29),
(75, '2020_08_16_205219_crate_foreign_keys_for_adminmenu_user_table', 29),
(79, '2020_08_17_062614_add_global_post_cl_posts_table', 30),
(80, '2020_12_10_131852_create_cl_portfolio_table', 31),
(81, '2020_12_10_132930_create_cl_associated_portfolios_table', 31),
(82, '2019_08_19_000000_create_failed_jobs_table', 32),
(84, '2026_07_29_070635_create_jobs_table', 32),
(85, '2026_07_05_053156_create_appointments_table', 33),
(86, '2026_07_30_174021_create_newsletter_subscribers_table', 34);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `unsubscribed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `name`, `email`, `is_active`, `subscribed_at`, `unsubscribed_at`, `created_at`, `updated_at`) VALUES
(1, 'Shibu Sharma', 'shibusharma807@gmail.com', 1, '2026-07-30 11:52:53', NULL, '2026-07-30 11:52:53', '2026-07-30 11:52:53'),
(2, NULL, 'fapa@mailinator.com', 1, '2026-07-30 22:44:01', NULL, '2026-07-30 22:44:01', '2026-07-30 22:44:01'),
(3, NULL, 'fapasdfa@mailinator.com', 1, '2026-07-30 22:45:25', NULL, '2026-07-30 22:45:25', '2026-07-30 22:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 3, 4, NULL, NULL),
(16, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `pin` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `pin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'root@admin.com', '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 8910, 'dTZzbGy7fPEeAhfTJVXSlM45x3UJO0PSU97DI1iynbAnjJmmXUgGmdLlFprr', '2018-06-24 04:33:34', '2018-06-24 04:33:34'),
(3, 'Cyberlink', 'cyberlink@admin.com', '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 8910, 'SoQ9oMbsNywt4tHreLoeMxC6Tfo4JuDU1GtcnDU0b2v5Yv6UpubF5mue41NK', '2020-08-16 10:32:43', '2020-08-16 11:21:35'),
(4, 'User', 'shibusharma807@gmail.com', '$2y$10$bkfjB.2syJg78umiyDc4ruvL1eZQpAlWni1Tml8AdeGmK33xwPdoa', 8910, 'gZ5WJWWPkkNsIdzWgbmJqscWWsk0P22gLUztuE9EpUqK2YlrulTaopEPaJ0V', '2020-08-16 11:22:14', '2021-05-21 02:20:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cl_adminmenu_user_user_id_foreign` (`user_id`),
  ADD KEY `cl_adminmenu_user_adminmenu_id_foreign` (`adminmenu_id`);

--
-- Indexes for table `cl_admin_menu`
--
ALTER TABLE `cl_admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_appointments`
--
ALTER TABLE `cl_appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cl_appointments_appointment_date_appointment_time_index` (`appointment_date`,`appointment_time`),
  ADD KEY `cl_appointments_status_index` (`status`),
  ADD KEY `cl_appointments_email_index` (`email`);

--
-- Indexes for table `cl_associated_posts`
--
ALTER TABLE `cl_associated_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_banner`
--
ALTER TABLE `cl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_career`
--
ALTER TABLE `cl_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_country`
--
ALTER TABLE `cl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_images`
--
ALTER TABLE `cl_gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_image_categories`
--
ALTER TABLE `cl_gallery_image_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_videos`
--
ALTER TABLE `cl_gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_gallery_video_categories`
--
ALTER TABLE `cl_gallery_video_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_init`
--
ALTER TABLE `cl_init`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_inquiry`
--
ALTER TABLE `cl_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_log`
--
ALTER TABLE `cl_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_banner`
--
ALTER TABLE `cl_multiple_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_document`
--
ALTER TABLE `cl_multiple_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_image`
--
ALTER TABLE `cl_multiple_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_multiple_video`
--
ALTER TABLE `cl_multiple_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_posts`
--
ALTER TABLE `cl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_categories`
--
ALTER TABLE `cl_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_featured_images`
--
ALTER TABLE `cl_post_featured_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_post_videos`
--
ALTER TABLE `cl_post_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_roles`
--
ALTER TABLE `cl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_settings`
--
ALTER TABLE `cl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_subscribers_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cl_admin_menu`
--
ALTER TABLE `cl_admin_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cl_appointments`
--
ALTER TABLE `cl_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cl_associated_posts`
--
ALTER TABLE `cl_associated_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cl_banner`
--
ALTER TABLE `cl_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cl_career`
--
ALTER TABLE `cl_career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cl_country`
--
ALTER TABLE `cl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `cl_gallery_images`
--
ALTER TABLE `cl_gallery_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cl_gallery_image_categories`
--
ALTER TABLE `cl_gallery_image_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cl_gallery_videos`
--
ALTER TABLE `cl_gallery_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cl_gallery_video_categories`
--
ALTER TABLE `cl_gallery_video_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_init`
--
ALTER TABLE `cl_init`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_inquiry`
--
ALTER TABLE `cl_inquiry`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cl_log`
--
ALTER TABLE `cl_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_multiple_banner`
--
ALTER TABLE `cl_multiple_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_multiple_document`
--
ALTER TABLE `cl_multiple_document`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cl_multiple_image`
--
ALTER TABLE `cl_multiple_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cl_multiple_video`
--
ALTER TABLE `cl_multiple_video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_posts`
--
ALTER TABLE `cl_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `cl_post_categories`
--
ALTER TABLE `cl_post_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cl_post_featured_images`
--
ALTER TABLE `cl_post_featured_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_post_type`
--
ALTER TABLE `cl_post_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cl_post_videos`
--
ALTER TABLE `cl_post_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_roles`
--
ALTER TABLE `cl_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cl_settings`
--
ALTER TABLE `cl_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cl_adminmenu_user`
--
ALTER TABLE `cl_adminmenu_user`
  ADD CONSTRAINT `cl_adminmenu_user_adminmenu_id_foreign` FOREIGN KEY (`adminmenu_id`) REFERENCES `cl_admin_menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cl_adminmenu_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `cl_roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
