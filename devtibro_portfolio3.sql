-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2025 at 03:20 PM
-- Server version: 10.11.14-MariaDB
-- PHP Version: 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devtibro_portfolio3`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `signature_description` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `signature`, `signature_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 'frontend/assets/img/misc/signature-1.webp', 'Building meaningful digital experiences through creative code.', 'Full-Stack Developer skilled in building and maintaining dynamic web applications. Proficient in Laravel, PHP, HTML, CSS, Bootstrap, JavaScript and jQuery. Adept at problem-solving and collaborating effectively within a team. Possesses strong communication skills, enabling clear and concise interaction with both technical and non-technical stakeholders. Dedicated to delivering high-quality, user-focused solutions while continuously expanding my technical expertise. Seeking a challenging role where I can leverage my full-stack capabilities and contribute to a collaborative environment.', '2025-09-20 01:20:56', '2025-09-20 01:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `academic_excellences`
--

CREATE TABLE `academic_excellences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_excellences`
--

INSERT INTO `academic_excellences` (`id`, `year`, `title`, `sub_title`, `description`, `created_at`, `updated_at`) VALUES
(1, '2025', 'Dhaka Central Polytechnic Institute', 'Diploma Engineering Computer Technology', 'Diploma in Computer Engineering from DCPI. Proficient in Laravel, PHP, and Wordpress. Strong foundation in computer hardware and software.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, '2018', 'Mission International School & Collage', 'Secondary School Certificate', 'Secondary School Certificate from Mission International School & Collage. Proficient in English, Mathematics, Science. Eager to learn and grow.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, '2015', 'Mission International School & Collage', 'Junior School Certificate', 'Junior School Certificate from Mission International School & Collage. Proficient in English, Mathematics, Science. Eager to learn and grow.', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `animation_texts`
--

CREATE TABLE `animation_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animation_texts`
--

INSERT INTO `animation_texts` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Developer', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(2, 'PHP Developer', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(3, 'Web Designer', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(4, 'Web Developer', '2025-09-20 01:20:56', '2025-09-20 01:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `backend_skills`
--

CREATE TABLE `backend_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_skills`
--

INSERT INTO `backend_skills` (`id`, `title`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '95', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'Laravel', '95', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'MySQL', '94', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'laravel', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'Web Design', 'web-design', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'Web Development', 'web-development', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Developer', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'PHP Developer', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'Web Developer', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(4, 'Web Designer', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `cloud_skills`
--

CREATE TABLE `cloud_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cloud_skills`
--

INSERT INTO `cloud_skills` (`id`, `title`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Git', '99', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'AWS', '98', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'cPanel ', '98', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `icon`, `number`, `title`, `created_at`, `updated_at`) VALUES
(1, 'bi bi-trophy', '1', 'Years Experience', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(2, 'bi bi-diagram-3', '5', 'Projects Completed', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(3, 'bi bi-people', '5', 'Happy Clients', '2025-09-20 01:20:56', '2025-09-20 01:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `design_skills`
--

CREATE TABLE `design_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design_skills`
--

INSERT INTO `design_skills` (`id`, `title`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'Figma', '95', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'Photoshop', '96', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'Illustrator', '94', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Why do you prefer Laravel over other PHP frameworks?', 'Laravel provides an elegant syntax and a robust set of tools (Eloquent ORM, Blade templating, Artisan CLI) that dramatically speed up development while ensuring code is maintainable and secure. Its massive ecosystem and strong community support make it the best choice for building modern, scalable web applications.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'How do you handle security in your Laravel applications?', 'Security is a priority. I leverage Laravel\'s built-in protections against common vulnerabilities like SQL injection, Cross-Site Request Forgery (CSRF), and Cross-Site Scripting (XSS). I also implement best practices such as input validation, parameter binding, secure authentication, and proper user role/permission management.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'Can you integrate third-party APIs?', 'Absolutely. I have extensive experience integrating various RESTful and SOAP APIs for payment gateways (Stripe, PayPal), email services (Mailchimp, SendGrid), SMS services, and mapping services (Google Maps) into Laravel applications.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(4, 'Do you work with databases besides MySQL?', 'While MySQL/PostgreSQL are the most common databases used with Laravel, I am also proficient in working with SQLite for development/testing and have experience with MongoDB for NoSQL-based projects.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(5, 'What is your experience with Laravel Livewire or Alpine.js?', 'I have practical experience using both Livewire and Alpine.js to create dynamic, modern interfaces without the complexity of a full frontend framework like Vue or React. This allows me to build highly interactive features while staying within the productive Laravel ecosystem.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(6, 'Do you code designs from scratch or use templates?', 'I am skilled in both. I can expertly convert a Figma/Adobe XD design mockup into clean, semantic HTML/CSS code. I also effectively use and customize Bootstrap 5 templates to accelerate development while ensuring a unique and professional final product that matches your brand.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(7, 'Why do you use Bootstrap 5?', 'Bootstrap 5 provides a powerful, mobile-first grid system and a comprehensive component library. It ensures the websites I build are fully responsive, consistent across browsers, and developed efficiently. I am proficient in customizing it with Sass to match any design language, avoiding the \"generic Bootstrap look.\"', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(8, 'Is the website you build for me going to be responsive?', 'Absolutely. Every website I develop is built with a \"mobile-first\" approach. This means your site will provide an optimal viewing and interaction experience—easy reading and navigation with minimal resizing, panning, and scrolling—across a wide range of devices (from mobile phones to desktop monitors).\"', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(9, 'How do you ensure website performance and fast loading times?', 'I optimize frontend performance by minifying CSS/JS, optimizing images (using modern formats like WebP), leveraging browser caching, and writing efficient code. For Laravel, I use techniques like eager loading, caching queries, and asset compression to ensure swift backend performance.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(10, 'Do you work with JavaScript frameworks like React or Vue.js?', 'My core frontend expertise lies in creating robust interfaces with HTML, CSS, and Bootstrap 5, often enhanced with vanilla JavaScript and Alpine.js for interactivity. For projects requiring a complex Single Page Application (SPA), I can collaborate with a dedicated React/Vue developer or utilize Laravel\'s API capabilities to serve a separate frontend.', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_skills`
--

CREATE TABLE `frontend_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_skills`
--

INSERT INTO `frontend_skills` (`id`, `title`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'HTML/CSS', '98', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'BOOTSTRAP5', '98', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'JavaScript', '95', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_21_084005_create_animation_texts_table', 1),
(5, '2025_08_21_120334_create_tags_table', 1),
(6, '2025_08_21_181053_create_social_icons_table', 1),
(7, '2025_08_22_110500_create_counters_table', 1),
(8, '2025_08_22_175543_create_abouts_table', 1),
(9, '2025_08_23_111241_create_skill_card_titles_table', 1),
(10, '2025_08_24_092048_create_backend_skills_table', 1),
(11, '2025_08_24_092118_create_frontend_skills_table', 1),
(12, '2025_08_24_123645_create_design_skills_table', 1),
(13, '2025_08_24_162643_create_cloud_skills_table', 1),
(14, '2025_08_24_180911_create_certifications_table', 1),
(15, '2025_08_25_091018_create_professional_journeys_table', 1),
(16, '2025_08_25_095706_create_academic_excellences_table', 1),
(17, '2025_08_26_090338_create_services_table', 1),
(18, '2025_08_26_101138_create_section_titles_table', 1),
(19, '2025_08_26_184840_create_categories_table', 1),
(20, '2025_08_27_091600_create_portfolios_table', 1),
(21, '2025_08_27_153216_create_testimonials_table', 1),
(22, '2025_08_27_173117_create_faqs_table', 1),
(23, '2025_08_28_161524_create_subscribers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `thumb_image` varchar(255) NOT NULL,
  `frontend_title` varchar(255) NOT NULL,
  `frontend_description` varchar(255) NOT NULL,
  `preview_title` varchar(255) NOT NULL,
  `preview_description` varchar(255) NOT NULL,
  `live_link` varchar(255) NOT NULL,
  `github_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `category_id`, `thumb_image`, `frontend_title`, `frontend_description`, `preview_title`, `preview_description`, `live_link`, `github_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'frontend/assets/img/portfolio/portfolio-1.png', 'Multi Vendor E-commerce Website', 'Multi-Vendor E-Commerce Hub', 'Multi Vendor E-commerce Website', 'Language : Laravel, PHP, Bootstrap, HTML5, CSS3, JavaScript, jQuery.', 'https://ecommerce.devtibro.com/', 'https://github.com/Tibro0/multi-vendor-ecommerce-website-laravel', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 1, 'frontend/assets/img/portfolio/portfolio-2.png', 'Restaurant Management Website', 'All-in-one restaurant management platform.', 'Restaurant Management Website', 'Language : Laravel, PHP, Bootstrap, HTML5, CSS3, JavaScript, jQuery.', 'https://food-park.devtibro.com/', 'https://github.com/Tibro0/food-park-laravel', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 3, 'frontend/assets/img/portfolio/portfolio-3.png', 'Learning Management System', 'Learn. Track. Succeed. All-in-One.', 'Learning Management System', 'Language : Laravel, PHP, Bootstrap, HTML5, CSS3, JavaScript, jQuery.', 'https://lms.devtibro.com/', '', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(4, 2, 'frontend/assets/img/portfolio/portfolio-4.png', 'Construction Company', 'Crafting Digital Excellence', 'Construction Company', 'Language : HTML5, CSS3, Bootstrap, JavaScript, jQuery.', 'https://tibro0.github.io/Buildx/', 'https://github.com/Tibro0/Buildx', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(5, 2, 'frontend/assets/img/portfolio/portfolio-5.png', 'Charite Website', 'Europe\'s leading research hospital.', 'Charite Website', 'Language : HTML5, CSS3, Bootstrap, JavaScript, jQuery.', 'https://tibro0.github.io/chariteam/', 'https://github.com/Tibro0/chariteam', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(6, 2, 'frontend/assets/img/portfolio/portfolio-6.png', 'Frontend Project', 'Interactive Web App Builder', 'Frontend Project', 'Language : HTML5, CSS3, Bootstrap, JavaScript, jQuery.', 'https://tibro0.github.io/Securex/', 'https://github.com/Tibro0/Securex', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `professional_journeys`
--

CREATE TABLE `professional_journeys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_journeys`
--

INSERT INTO `professional_journeys` (`id`, `year`, `title`, `sub_title`, `description`, `created_at`, `updated_at`) VALUES
(1, '2025 January - 2025 August', 'SoClose Dhaka Limited', 'Full Stack Web Developer (Php & Laravel)', 'Delivering cutting-edge web solutions for businesses of all sizes. From design and development to digital marketing, we drive online success.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, '2025 January - 2025 May', 'Udemy Online Courses - Laravel', 'Web Solution US', 'Delivering cutting-edge web solutions for businesses of all sizes. From design and development to digital marketing, we drive online success.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, '2024 January - 2024 December', 'Shikhbe Shobai', 'Full Stack Web Development - PHP Laravel', 'Shikhbe Shobai: Bangladesh\'s premier IT training institute. Learn in-demand skills: web development, programming, digital marketing, and more.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(4, '2023 January - 2023 December', 'Shikhbe Shobai', 'Full Stack Web Development - Wordpress', 'Shikhbe Shobai: Bangladesh\'s premier IT training institute. Learn in-demand skills: web development, programming, digital marketing, and more.', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `section_titles`
--

CREATE TABLE `section_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` text DEFAULT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_titles`
--

INSERT INTO `section_titles` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'professional_expertise_title', 'Professional Expertise', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(2, 'professional_expertise_description', 'Strategic leader driving tech innovation & growth. Expert in scaling startups to enterprises. Transformative results through agile execution & cross-functional team leadership.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(3, 'professional_journey_title', 'Professional Journey', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(4, 'professional_journey_description', 'I transform complex challenges into innovative digital solutions. Leading agile teams from startup ventures to corporate strategy, I bridge the gap between vision and execution to drive measurable growth.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(5, 'academic_excellences_title', 'Academic Excellence', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(6, 'academic_excellences_description', 'Distinguished by rigorous research, high-impact publications, and a relentless pursuit of knowledge. Proven ability to synthesize complex concepts into innovative, field-advancing contributions.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(7, 'about_main_title', 'About', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(8, 'about_sub_title', 'Tech leader driving growth through innovative solutions and transformative execution.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(9, 'resume_main_title', 'Resume', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(10, 'resume_sub_title', 'Tech leader driving innovation & growth through transformative execution.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(11, 'services_main_title', 'Services', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(12, 'services_sub_title', 'Crafting innovative digital solutions that drive growth and user engagement.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(13, 'portfolio_main_title', 'Portfolio', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(14, 'portfolio_sub_title', 'Innovative tech solutions delivered through strategic leadership and relentless execution.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(15, 'testimonial_main_title', 'Testimonials', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(16, 'testimonial_sub_title', 'Praise for precision and impact—client testimonials highlight delivered excellence.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(17, 'faq_main_title', 'Frequently Asked Questions', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(18, 'faq_sub_title', 'Common questions, clear answers—streamlining your experience.', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(19, 'contact_main_title', 'Contact', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(20, 'contact_sub_title', 'Results-driven innovator building high-performing teams and transformative products.', '2025-09-20 01:20:56', '2025-09-20 01:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'bi bi-filetype-php', 'PHP', 'PHP Development, Custom Web Applications, API Development, CMS Integration, E-commerce Solutions.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'bi bi-browser-edge', 'Laravel', 'Custom Laravel Development, API Integration, E-commerce Solutions, Web App Maintenance, Cloud Deployment.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'bi bi-webcam', 'Web Design', 'Website Design & Development, UI/UX Design, Branding, Logo Design, Responsive Websites.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(4, 'bi bi-browser-chrome', 'Web Development', 'Website Design & Development, E-commerce Solutions, SEO, UI/UX, Mobile-Responsive Websites.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(5, 'bi bi-bootstrap', 'Bootstrap', 'Responsive web design with Bootstrap. Create beautiful, cross-browser compatible websites.', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(6, 'bi bi-filetype-js', 'jQuery', 'jQuery Development, AJAX Interactions, DOM Manipulation, Front-End Animations, Plugin Development.', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0m1Zz2BpM2J1dETNUYbiCl5ZCQja4Kx1E92irtiA', NULL, '43.133.69.37', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUjk5a0RrcjNCRGdLYXZaNGt3RXpHaXRQb0lhSkhLOFM1czVvcVJlNSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMzoiaHR0cDovL3d3dy5kZXZ0aWJyby5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1758359283),
('DotdNrN0Mxzi2PAwzxZ2VjyLBOuHKx8vKsp8jUqN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOWF5cHdHV3JDc1pGQ1RsQVh6RVZVQm5BNUF3OW9PcUxLR1BuVE5pUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9fQ==', 1758353558),
('iBPHqvp3tKBpF3V9viwxSs25lH7BlLbQbecfAOPi', NULL, '103.131.156.210', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTW9YcWlFVHJJNW15MEI5YWFqZ2gxeUdpaDV2a0xDcFJOUUdQUzZMRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMDoiaHR0cHM6Ly9kZXZ0aWJyby5jb20iO319', 1758356986),
('XXKBziC28Bnxj5Qc0nPRj94vP5eCoWEbqaxcQp9h', NULL, '43.157.170.126', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibXNBNEw2MjVPemNyTmpHSzJqeVMxUTNUWjBYcVNpaE9xOXdCZkFEMiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoxOToiaHR0cDovL2RldnRpYnJvLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758358083);

-- --------------------------------------------------------

--
-- Table structure for table `skill_card_titles`
--

CREATE TABLE `skill_card_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_card_titles`
--

INSERT INTO `skill_card_titles` (`id`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(1, 'bi bi-code-slash', 'Frontend Development', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'bi bi-server', 'Backend Development', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'bi bi-palette', 'Design & Tools', '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(4, 'bi bi-cloud', 'Cloud & DevOps', '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_icons`
--

INSERT INTO `social_icons` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'bi bi-github', 'https://github.com/tibro0', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(2, 'bi bi-facebook', 'https://www.facebook.com/faysaltibro', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(3, 'bi bi-linkedin', 'https://www.linkedin.com/in/md-faysal-hossain-tibro-1aa622226/', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(4, 'bi bi-whatsapp', 'https://api.whatsapp.com/send/?phone=8801734449023&text=Hello&type=phone_number&app_absent=0', '2025-09-20 01:20:56', '2025-09-20 01:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'faysaltibro@gmail.com', NULL, 1, '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'hello@russellitsoft.com', 'Joy Bangla Road, BoroBari, Tongi, Bangladesh.', 1, '2025-09-20 01:23:14', '2025-09-20 01:52:03'),
(3, 'ongshon360@gmail.com', 'House #11/7, Sahajuddin Sarkar Road, Tongi, Gazipur-1711, Dhaka, Bangladesh.', 1, '2025-09-20 01:54:37', '2025-09-20 01:54:37'),
(4, 'support@gpisp.net', 'House-7/1, Kadim Jame Masjid Road, Sataish, Tongi, Gazipur.', 1, '2025-09-20 02:00:07', '2025-09-20 02:00:07'),
(5, 'sales@systechdigital.com', 'Uttara, Sector-7.', 1, '2025-09-20 02:04:40', '2025-09-20 02:04:40'),
(6, 'info@nationalitbd.com', 'House: 8 (1st Floor), Road: 1/B, Sector: 9 Uttara, Dhaka.', 1, '2025-09-20 02:06:33', '2025-09-20 02:06:33'),
(7, 'info@abovebd.com', 'House-20,Road-9,Sector-11,Uttara,Dhaka 1230', 1, '2025-09-20 02:08:16', '2025-09-20 02:08:16'),
(8, 'info@unitechbdsoft.com', 'Plot #87, BNS Center (4th floor), Suite No. 507/A, Dhaka - Mymensingh Highway, Sector #07, Uttara Model Town, Dhaka-1230, Bangladesh.', 1, '2025-09-20 02:10:33', '2025-09-20 02:10:33'),
(9, 'sales@unitechbdsoft.com', 'Plot #87, BNS Center (4th floor), Suite No. 507/A, Dhaka - Mymensingh Highway, Sector #07, Uttara Model Town, Dhaka-1230, Bangladesh.', 1, '2025-09-20 02:11:13', '2025-09-20 02:11:13'),
(10, 'info@my-softit.com', '87 BNS Center, Sector:07, Uttara, Dhaka 1230.', 1, '2025-09-20 02:12:24', '2025-09-20 02:12:24'),
(11, 'info@xubisoft.com', 'House-45, Road-7, Sector-4, Uttara, Dhaka 1230.', 1, '2025-09-20 02:13:50', '2025-09-20 02:13:50'),
(12, 'bdinfobiz.ltd@gmail.com', 'House: 19 (3rd floor), Road: 34, Sector: 07, Uttara, Dhaka 1230, Bangladesh.', 1, '2025-09-20 02:15:26', '2025-09-20 02:15:26'),
(13, 'askus@technometrics.net', 'Rangs Naharz, 14 Shah Jalal Avenue, Sector: 04, Uttara, Dhaka, 1230.', 1, '2025-09-20 02:18:25', '2025-09-20 02:18:25'),
(14, 'info@ogroni.com', 'Level# 5, Plot# 71, Sector# 7, Rajuk-Rajib Cosmo Complex, Uttara, Dhaka- 1230, Bangladesh.', 1, '2025-09-20 02:20:03', '2025-09-20 02:20:03'),
(15, 'info@dhakasolution.com', '87, BNS Center, Level 5, Room 611 ,Sector 7, Uttara, Dhaka - 1230. Bangladesh.', 1, '2025-09-20 02:21:44', '2025-09-20 02:21:44'),
(16, 'uithelps@gmail.com', 'BNS Center (Lift- 05), Room- 610, Sector - 07, Uttara, Dhaka-1230.', 1, '2025-09-20 02:22:41', '2025-09-20 02:22:41'),
(17, 'hello@echologyx.com', 'Siaam Tower, Plot 15, Floor 13, Sector 3, Uttara, Dhaka, Bangladesh.', 1, '2025-09-20 02:25:42', '2025-09-20 02:25:42'),
(18, 'sales@cslsoft.com', 'House# 61, Road # 07, Sector #04 Uttara, Dhaka-1230, Bangladesh.', 1, '2025-09-20 02:27:06', '2025-09-20 02:27:06'),
(19, 'info@cslsoft.com', 'House# 61, Road # 07, Sector #04 Uttara, Dhaka-1230, Bangladesh.', 1, '2025-09-20 02:27:51', '2025-09-20 02:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `icon`, `name`, `created_at`, `updated_at`) VALUES
(1, 'bi bi-database', 'Laravel Developer', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(2, 'bi bi-code-slash', 'Web Development', '2025-09-20 01:20:56', '2025-09-20 01:20:56'),
(3, 'bi bi-pc-display-horizontal', 'Web Design', '2025-09-20 01:20:56', '2025-09-20 01:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ratting` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `designation`, `description`, `ratting`, `created_at`, `updated_at`) VALUES
(1, 'frontend/assets/img/person/person-f-1.webp', 'Jane Smith', 'Book Enthusiast', 'Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla quis lorem ut libero malesuada feugiat.', 5, '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(2, 'frontend/assets/img/person/person-m-2.webp', 'Michael Johnson', 'Sci-Fi Blogger', 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus.', 5, '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(3, 'frontend/assets/img/person/person-f-3.webp', 'Emily Davis', 'Book Club President', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada.', 5, '2025-09-20 01:20:57', '2025-09-20 01:20:57'),
(4, 'frontend/assets/img/person/person-m-4.webp', 'Robert Wilson', 'Literary Reviewer', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur.', 5, '2025-09-20 01:20:57', '2025-09-20 01:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '/uploads/avatar.png',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_one` varchar(255) NOT NULL,
  `phone_two` varchar(255) DEFAULT NULL,
  `address_line_one` varchar(255) NOT NULL,
  `address_line_two` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `phone_one`, `phone_two`, `address_line_one`, `address_line_two`, `short_description`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '/uploads/avatar.png', 'MD. Faysal Hossain Tibro', 'faysaltibro@gmail.com', '+8801734449023', NULL, 'House No : 101, Maowlana Vashani Road,', 'Tongi East, Banomala Road.', 'Full-stack developer skilled in Laravel, PHP, JavaScript, and modern frameworks. Adept at building dynamic web apps, problem-solving, and clear team collaboration. Dedicated to delivering high-quality, user-focused solutions.', '2025-09-20 01:20:56', '$2y$12$YL.8XiShHK.UoOahZuMAQuaT1O4/oscM0Z04xLCuWJfM3AiNroM2C', 'IdYWP6OAr7DhBnYEKZ5cnDSGctGgCvZGVWVwnCeeq90G2yR7X8p2tTNKCMyM', '2025-09-20 01:20:56', '2025-09-20 01:20:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_excellences`
--
ALTER TABLE `academic_excellences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animation_texts`
--
ALTER TABLE `animation_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backend_skills`
--
ALTER TABLE `backend_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloud_skills`
--
ALTER TABLE `cloud_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_skills`
--
ALTER TABLE `design_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_skills`
--
ALTER TABLE `frontend_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_category_id_foreign` (`category_id`);

--
-- Indexes for table `professional_journeys`
--
ALTER TABLE `professional_journeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_titles`
--
ALTER TABLE `section_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skill_card_titles`
--
ALTER TABLE `skill_card_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academic_excellences`
--
ALTER TABLE `academic_excellences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `animation_texts`
--
ALTER TABLE `animation_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `backend_skills`
--
ALTER TABLE `backend_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cloud_skills`
--
ALTER TABLE `cloud_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `design_skills`
--
ALTER TABLE `design_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `frontend_skills`
--
ALTER TABLE `frontend_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `professional_journeys`
--
ALTER TABLE `professional_journeys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_titles`
--
ALTER TABLE `section_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill_card_titles`
--
ALTER TABLE `skill_card_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
