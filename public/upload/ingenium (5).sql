-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 11:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ingenium`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `worksheet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `module_id`, `title`, `description`, `worksheet`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Introduction', 'Hi there, welcome to the Customer Retention Signature Program (CRSP). I am Jennifer Orode, customer relationship management expert, business coach and founder of Ingenium concepts Ltd.\r\n\r\nMy team and I are so excited that you have decided to sign up for this program because, in the next 12 weeks, you will learn how to not only get in contact with customers and potential customers but also retain them.\r\n\r\nPlease pay keen attention as I will be breaking down the structure of the program in this video. \r\n\r\nThe Customer Retention Signature Program (CRSP) as I have mentioned earlier would last for a period of 12weeks. In these 12 weeks, 8 weeks are dedicated to the online self-paced learning and 4 weeks for direct progress monitoring where we ensure the direct impact of your learning experience with us on your business.\r\n\r\nThe learning phase is divided into 4 stages (3DE);\r\nDiscover Stage - This is focused on helping you as an entrepreneur understand your individuality, personality, values and how it aligns with your business and eventually retain the right customers\r\nDesign Stages - Here you start to design or redesign (if you have started your business) frameworks for offering the best services to your customers.\r\nDevelop Stage - In this stage, you learn and implement tasks that helps you build structures around your business operations and customer service.\r\nExecute Stage - Finally, I anticipate that you have learnt so much at this time and would need to execute. The lessons in this module will also guide on the best ways to measure the metrics that matter.\r\n\r\nThe four stages above have a total of 6 modules and 12 lessons broken down into short videos. You can take the lessons at your pace but keep in mind that the modules are timed and therefore must be finished within that time frame. Modules 1 and 2 will span for a week each, Modules 3 and 4 for 2 weeks each and Modules 5 and 6 for 1 week each, making a total of 8 weeks. \r\n\r\nTo ensure the practicality of this program, you and other participants will also join me and my team in a weekly strategy call throughout the program to discuss the tasks, your implementation processes and any other business needs that align with the program. \r\n\r\nPlease note that during the program, you will be required to actively participate by using your task sheet that follows every lesson, communicating with other participants and sharing ideas.\r\n \r\nYour task sheet is designed to guide you to ponder on what we have discussed in a lesson and aid the development of your uniquely individual ideas and aid their implementation directly in your business.  It will be submitted after every lesson and returned to you compiled in one piece at the end of the program for future reference. \r\n\r\nFinally, after the first 8 weeks, the subsequent 4 weeks are for progress monitoring as the team is committed to ensuring that you are making tangible progress with your implementations.\r\n\r\nI am super excited to have you in this Customer Retention Signature Program (CRSP). I look forward to talking with you on our strategy call. Cheers and bye for now!', 'Nill', 1, '2022-05-01 20:27:10', '2022-05-01 20:27:10'),
(2, 1, 'Lesson 1 - Persona & Purpose Discovery', 'This lesson will give you insight into your individuality and personality as a founder. Attention is given to personal unique qualities, skills, beliefs/values, passion and interests.', 'Purpose & Clarity Sheet', 1, '2022-05-01 20:28:52', '2022-05-01 20:28:52'),
(3, 1, 'Lesson 2 - Sectorial & Impact Discovery', 'Understanding the economic sectors, probable problem areas and defining interest area(s) as well as solution points. This will help you create an alliance between professional background, interest and the economy', 'Solution Definition Sheet', 1, '2022-05-01 20:30:03', '2022-05-01 20:30:03'),
(4, 2, 'Lesson 3 - Customer Niche', 'In this lesson, you will understand the customer\'s needs, pain points, and interests while defining your customer persona or avatar.', 'Customer Development Sheet', 1, '2022-05-01 20:31:39', '2022-05-01 20:31:39'),
(5, 2, 'Lesson 4 - Product Niche', 'Defining and designing the best fit product for the identified customer in the chosen sector of interest.', 'Product Development Guide', 1, '2022-05-01 20:34:17', '2022-05-01 20:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_tasks`
--

CREATE TABLE `lesson_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_videos`
--

CREATE TABLE `lesson_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `focusarea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `videourl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lesson_videos`
--

INSERT INTO `lesson_videos` (`id`, `lesson_id`, `focusarea`, `videourl`, `created_at`, `updated_at`) VALUES
(1, 1, 'Welcome to CRSP', 'https://drive.google.com/file/d/1sIH7QT54DcEDQMHdDRXCFwRXdfn9okxK/preview', '2022-05-01 20:37:46', '2022-05-01 20:37:46'),
(2, 2, 'Individuality and personality analysis, understanding personal values, unique skills, passion and interests', 'https://drive.google.com/file/d/1Xf-rfONR_GxB1IvSDbpcK4uxoog2pShB/preview', '2022-05-01 20:38:28', '2022-05-01 20:38:28'),
(3, 3, 'Understanding the economic sectors, identifying key problem areas that align with interest/passion, proposing solutions to identified problem.', 'https://drive.google.com/file/d/1WItbk0w1PKkDFt23hf4XW5WogKrl5kPu/preview', '2022-05-01 20:39:07', '2022-05-01 20:39:07'),
(4, 4, 'Understanding the customer and the core of their need, defining the buyer persona.', 'https://drive.google.com/file/d/17Q2I0LsEcdU7pdF1exbNuyN6J8MoDdnx/preview', '2022-05-01 20:39:41', '2022-05-01 20:39:41'),
(5, 5, 'Defining your exact product/service for the identified customer; specifics of your products, its features, its benefits.', 'https://drive.google.com/file/d/1tMRmlq6KbNu-BPOlrQAaySKYcC7tz2C6/preview', '2022-05-01 20:40:08', '2022-05-01 20:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2019_08_19_000000_create_failed_jobs_table', 1),
(26, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(27, '2022_03_16_082920_create_blogs_table', 1),
(28, '2022_03_16_130436_create_tags_table', 1),
(29, '2022_03_19_154209_create_categories_table', 1),
(30, '2022_04_27_211257_create_profiles_table', 1),
(31, '2022_04_28_190501_create_reviews_table', 1),
(32, '2022_04_28_190517_create_complains_table', 1),
(33, '2022_04_28_212017_create_modules_table', 1),
(34, '2022_04_28_224719_create_lessons_table', 1),
(35, '2022_04_28_224731_create_lesson_videos_table', 1),
(36, '2022_04_29_083234_create_lesson_tasks_table', 1),
(37, '2022_04_29_120751_create_program_categories_table', 1),
(38, '2022_04_29_133736_create_programs_table', 1),
(39, '2022_04_29_185047_create_resource_categories_table', 1),
(40, '2022_04_29_185059_create_resources_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Module 1', 'The Path to my business journey', 1, '2022-05-01 20:20:48', '2022-05-01 20:20:48'),
(2, 'Module 2', 'Defining the business of my customer', 1, '2022-05-01 20:21:17', '2022-05-01 20:21:17'),
(3, 'Module 3', 'Defining and designing the path for growth', 1, '2022-05-01 20:21:40', '2022-05-01 20:21:40'),
(4, 'Module 4', 'Partnerships that work towards growth', 1, '2022-05-01 20:22:07', '2022-05-01 20:22:07'),
(5, 'Module 5', 'The orchestration to success', 1, '2022-05-01 20:22:39', '2022-05-01 20:22:39'),
(6, 'Module 6', 'Appealing to the customer\'s emotion', 1, '2022-05-01 20:23:00', '2022-05-01 20:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `fname`, `lname`, `businessname`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', '', '', '2022-05-01 18:01:14', '2022-05-01 18:01:14'),
(3, 3, '', '', 'Dcode Arena', '', '2022-05-01 18:12:29', '2022-05-01 18:12:29'),
(4, 4, '', '', 'Nora Scent', '', '2022-05-01 18:13:48', '2022-05-01 18:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reglink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_categories`
--

CREATE TABLE `program_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_categories`
--

INSERT INTO `program_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Corporate', '2022-05-01 20:40:44', '2022-05-01 20:40:44'),
(2, 'Entrepreneurs', '2022-05-01 20:41:00', '2022-05-01 20:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resource_categories`
--

CREATE TABLE `resource_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `lesson` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@growwithingenium.com', '$2y$10$UYaAXTCgaw9DzJbvZljADuN501IXIq8kt/vUPkjg2vA44vQ0tbsn2', 1, 1, NULL, '2022-05-01 18:01:14', '2022-05-01 18:01:14'),
(3, 'chinonso247', 'isaacgift70@gmail.com', '$2y$10$ccIw5o6W7SsZkAeovAKXPuEJwiM1pX50Y3/YXKkaUbQAe4hXI/QFy', 2, 0, NULL, '2022-05-01 18:12:29', '2022-05-01 19:53:33'),
(4, 'nora1', 'isaacchinonsogifts@gmail.com', '$2y$10$ofLT7C/32p7hhFIa4.y1ke1XaYVIVjloAlcNHuJeCBZdOTKCqaKve', 2, 0, NULL, '2022-05-01 18:13:48', '2022-05-01 18:13:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_tasks`
--
ALTER TABLE `lesson_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_tasks_lesson_id_foreign` (`lesson_id`);

--
-- Indexes for table `lesson_videos`
--
ALTER TABLE `lesson_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_videos_lesson_id_foreign` (`lesson_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_categories`
--
ALTER TABLE `program_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_categories`
--
ALTER TABLE `resource_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lesson_tasks`
--
ALTER TABLE `lesson_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson_videos`
--
ALTER TABLE `lesson_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_categories`
--
ALTER TABLE `program_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resource_categories`
--
ALTER TABLE `resource_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lesson_tasks`
--
ALTER TABLE `lesson_tasks`
  ADD CONSTRAINT `lesson_tasks_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lesson_videos`
--
ALTER TABLE `lesson_videos`
  ADD CONSTRAINT `lesson_videos_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
