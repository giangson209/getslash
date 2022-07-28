-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2021 lúc 12:35 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bestay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `meta_banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name_vi`, `name_en`, `slug`, `parent_id`, `type`, `desc`, `image`, `banner`, `order`, `meta_banner`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Tên danh mục Tiếng Việt', 'Tên danh mục Tiếng Anh', 'ten-danh-muc-tieng-viet', NULL, 'post_category', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-28 13:17:43', '2021-03-28 13:17:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `customer_id`, `content`, `type`, `title`, `meta`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'ssss', NULL, 'Khách hàng liên hệ', NULL, '1', '2020-12-24 09:12:48', '2020-12-24 09:13:03'),
(2, 6, 'sjkj', NULL, 'Khách hàng liên hệ', NULL, '0', '2021-03-28 17:27:22', '2021-03-28 17:27:22'),
(3, 7, NULL, NULL, 'Khách hàng liên hệ', NULL, '0', '2021-03-29 05:51:47', '2021-03-29 05:51:47'),
(4, 8, NULL, NULL, 'Khách hàng liên hệ', NULL, '0', '2021-03-29 05:51:59', '2021-03-29 05:51:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_province` int(11) DEFAULT NULL,
  `id_district` int(11) DEFAULT NULL,
  `id_ward` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `email`, `phone`, `address`, `id_province`, `id_district`, `id_ward`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Trọng', NULL, NULL, '0987654321', '80 Vũ Trọng Phụng, Thanh Xuân Trung, Thanh Xuân, Hà Nội, Việt Nam', NULL, NULL, NULL, '2020-12-24 08:25:04', '2020-12-24 08:25:04'),
(2, 'First Name Last Name', NULL, NULL, '0987654321', '80 Vũ Trọng Phụng, Thanh Xuân Trung, Thanh Xuân, Hà Nội, Việt Nam', NULL, NULL, NULL, '2020-12-24 08:30:54', '2020-12-24 08:30:54'),
(3, 'First Name Last Name', NULL, 'admin@gmail.com', '0987654321', NULL, NULL, NULL, NULL, '2020-12-24 09:12:48', '2020-12-24 09:12:48'),
(4, 'First Name Last Name', NULL, NULL, '0987654321', '80 Vũ Trọng Phụng, Thanh Xuân Trung, Thanh Xuân, Hà Nội, Việt Nam', NULL, NULL, NULL, '2020-12-24 09:18:03', '2020-12-24 09:18:03'),
(5, 'First Name Last Name', NULL, NULL, '0987654321', '80 Vũ Trọng Phụng, Thanh Xuân Trung, Thanh Xuân, Hà Nội, Việt Nam', NULL, NULL, NULL, '2020-12-24 10:37:09', '2020-12-24 10:37:09'),
(6, 'tr', NULL, 'nv@gmaill.com', '098', NULL, NULL, NULL, NULL, '2021-03-28 17:27:22', '2021-03-28 17:27:22'),
(7, 'First Name Last Name', NULL, 'admin@gmail.com', '0987654321', NULL, NULL, NULL, NULL, '2021-03-29 05:51:47', '2021-03-29 05:51:47'),
(8, 'First Name Last Name', NULL, 'admin@gmail.com', '0987654321', NULL, NULL, NULL, NULL, '2021-03-29 05:51:59', '2021-03-29 05:51:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery_libs`
--

CREATE TABLE `gallery_libs` (
  `id` bigint(20) NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` bigint(20) DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery_libs`
--

INSERT INTO `gallery_libs` (`id`, `model`, `model_id`, `path`, `type`, `created_at`, `updated_at`) VALUES
(11, 'App\\Models\\Styles', 1, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:39:29', '2021-03-28 09:39:29'),
(12, 'App\\Models\\Styles', 1, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:39:29', '2021-03-28 09:39:29'),
(13, 'App\\Models\\Styles', 1, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:39:29', '2021-03-28 09:39:29'),
(14, 'App\\Models\\Styles', 1, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:39:29', '2021-03-28 09:39:29'),
(15, 'App\\Models\\Styles', 1, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:39:29', '2021-03-28 09:39:29'),
(16, 'App\\Models\\Styles', 2, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(17, 'App\\Models\\Styles', 2, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(18, 'App\\Models\\Styles', 2, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(19, 'App\\Models\\Styles', 2, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(20, 'App\\Models\\Styles', 2, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(21, 'App\\Models\\Styles', 3, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(22, 'App\\Models\\Styles', 3, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(23, 'App\\Models\\Styles', 3, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(24, 'App\\Models\\Styles', 3, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(25, 'App\\Models\\Styles', 3, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(26, 'App\\Models\\Styles', 4, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(27, 'App\\Models\\Styles', 4, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(28, 'App\\Models\\Styles', 4, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(29, 'App\\Models\\Styles', 4, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(30, 'App\\Models\\Styles', 4, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(31, 'App\\Models\\Styles', 5, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(32, 'App\\Models\\Styles', 5, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(33, 'App\\Models\\Styles', 5, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(34, 'App\\Models\\Styles', 5, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(35, 'App\\Models\\Styles', 5, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(36, 'App\\Models\\Styles', 6, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(37, 'App\\Models\\Styles', 6, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(38, 'App\\Models\\Styles', 6, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(39, 'App\\Models\\Styles', 6, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(40, 'App\\Models\\Styles', 6, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(41, 'App\\Models\\Styles', 7, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(42, 'App\\Models\\Styles', 7, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(43, 'App\\Models\\Styles', 7, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(44, 'App\\Models\\Styles', 7, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(45, 'App\\Models\\Styles', 7, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(46, 'App\\Models\\Styles', 8, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(47, 'App\\Models\\Styles', 8, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(48, 'App\\Models\\Styles', 8, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(49, 'App\\Models\\Styles', 8, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(50, 'App\\Models\\Styles', 8, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(51, 'App\\Models\\Styles', 9, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(52, 'App\\Models\\Styles', 9, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(53, 'App\\Models\\Styles', 9, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(54, 'App\\Models\\Styles', 9, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(55, 'App\\Models\\Styles', 9, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(56, 'App\\Models\\Styles', 10, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(57, 'App\\Models\\Styles', 10, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(58, 'App\\Models\\Styles', 10, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(59, 'App\\Models\\Styles', 10, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(60, 'App\\Models\\Styles', 10, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(61, 'App\\Models\\Styles', 11, '/bestay/uploads/files/style-1.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(62, 'App\\Models\\Styles', 11, '/bestay/uploads/files/style-2.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(63, 'App\\Models\\Styles', 11, '/bestay/uploads/files/style-3.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(64, 'App\\Models\\Styles', 11, '/bestay/uploads/files/style-4.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(65, 'App\\Models\\Styles', 11, '/bestay/uploads/files/style-5.jpg', 'styles', '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(80, 'App\\Models\\ProjectDetail', 1, '/bestay/uploads/files/pr-1.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(81, 'App\\Models\\ProjectDetail', 1, '/bestay/uploads/files/pr-2.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(82, 'App\\Models\\ProjectDetail', 1, '/bestay/uploads/files/pr-3.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(83, 'App\\Models\\ProjectDetail', 1, '/bestay/uploads/files/pr-4.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(84, 'App\\Models\\ProjectDetail', 1, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(85, 'App\\Models\\ProjectDetail', 1, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(86, 'App\\Models\\ProjectDetail', 1, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(87, 'App\\Models\\ProjectDetail', 2, '/bestay/uploads/files/pr-1.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(88, 'App\\Models\\ProjectDetail', 2, '/bestay/uploads/files/pr-2.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(89, 'App\\Models\\ProjectDetail', 2, '/bestay/uploads/files/pr-3.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(90, 'App\\Models\\ProjectDetail', 2, '/bestay/uploads/files/pr-4.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(91, 'App\\Models\\ProjectDetail', 2, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(92, 'App\\Models\\ProjectDetail', 2, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(93, 'App\\Models\\ProjectDetail', 2, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(94, 'App\\Models\\ProjectDetail', 3, '/bestay/uploads/files/pr-1.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(95, 'App\\Models\\ProjectDetail', 3, '/bestay/uploads/files/pr-2.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(96, 'App\\Models\\ProjectDetail', 3, '/bestay/uploads/files/pr-3.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(97, 'App\\Models\\ProjectDetail', 3, '/bestay/uploads/files/pr-4.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(98, 'App\\Models\\ProjectDetail', 3, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(99, 'App\\Models\\ProjectDetail', 3, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(100, 'App\\Models\\ProjectDetail', 3, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(101, 'App\\Models\\ProjectDetail', 4, '/bestay/uploads/files/pr-1.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(102, 'App\\Models\\ProjectDetail', 4, '/bestay/uploads/files/pr-2.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(103, 'App\\Models\\ProjectDetail', 4, '/bestay/uploads/files/pr-3.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(104, 'App\\Models\\ProjectDetail', 4, '/bestay/uploads/files/pr-4.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(105, 'App\\Models\\ProjectDetail', 4, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(106, 'App\\Models\\ProjectDetail', 4, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(107, 'App\\Models\\ProjectDetail', 4, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(108, 'App\\Models\\ProjectDetail', 5, '/bestay/uploads/files/pr-1.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(109, 'App\\Models\\ProjectDetail', 5, '/bestay/uploads/files/pr-2.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(110, 'App\\Models\\ProjectDetail', 5, '/bestay/uploads/files/pr-3.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(111, 'App\\Models\\ProjectDetail', 5, '/bestay/uploads/files/pr-4.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(112, 'App\\Models\\ProjectDetail', 5, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(113, 'App\\Models\\ProjectDetail', 5, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(114, 'App\\Models\\ProjectDetail', 5, '/bestay/uploads/files/pr-5.jpg', 'project_detail', '2021-03-29 02:11:37', '2021-03-29 02:11:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_group`
--

CREATE TABLE `menu_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_group`
--

INSERT INTO `menu_group` (`id`, `title`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Menu chính', 'Main', '2020-04-14 17:00:00', '2020-04-14 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `class` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_items`
--

INSERT INTO `menu_items` (`id`, `parent_id`, `title`, `title_en`, `url`, `icon`, `position`, `id_group`, `class`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Trang chủ', 'Home', '/', NULL, '0', 1, NULL, '2021-03-29 10:33:50', '2021-03-29 10:33:50'),
(2, NULL, 'Giới thiệu', 'About', '/about', NULL, '0', 1, NULL, '2021-03-29 10:34:09', '2021-03-29 10:34:09'),
(3, NULL, 'Styles', 'Styles', '#', NULL, '0', 1, NULL, '2021-03-29 10:34:27', '2021-03-29 10:34:48'),
(4, NULL, 'Dự án', 'Projects', '#', NULL, '0', 1, NULL, '2021-03-29 10:34:43', '2021-03-29 10:34:43'),
(5, NULL, 'Tin tức', 'Blog', '/news', NULL, '0', 1, NULL, '2021-03-29 10:35:08', '2021-03-29 10:35:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_08_023955_options', 2),
(4, '2020_02_08_044140_create_products_table', 3),
(5, '2020_02_08_045010_create_posts_table', 3),
(7, '2020_02_10_063827_image', 4),
(8, '2020_02_10_084326_menu_group', 5),
(9, '2020_02_10_084501_menu', 5),
(11, '2020_02_10_135818_posts', 7),
(15, '2020_02_11_094510_services', 10),
(16, '2020_02_12_014616_pages', 11),
(17, '2020_02_12_030346_customer', 12),
(18, '2020_02_12_035913_contact', 13),
(22, '2020_02_27_152247_categories', 14),
(23, '2020_04_09_162851_branch', 15),
(24, '2020_04_09_180411_categories', 16),
(26, '2020_04_10_150312_products', 17),
(27, '2020_04_10_161721_product_category', 18),
(28, '2020_04_10_164157_product_image', 19),
(29, '2020_04_12_005547_product_questions', 20),
(30, '2020_04_13_143340_customers', 21),
(31, '2020_04_13_143638_comments', 22),
(32, '2020_04_15_020416_orders', 23),
(33, '2020_04_15_021319_order_detail', 23),
(34, '2020_04_15_065229_filter', 24),
(35, '2020_06_01_094153_post_category', 25),
(36, '2020_06_01_221125_coupons', 26),
(42, '2020_07_31_170021_category_home_display', 28),
(43, '2020_08_04_220333_post_category', 29),
(44, '2021_03_27_214253_init_database', 30),
(45, '2021_03_28_152939_create_styles', 31),
(46, '2014_01_07_073615_create_tagged_table', 32),
(47, '2014_01_07_073615_create_tags_table', 32),
(48, '2016_06_29_073615_create_tag_groups_table', 32),
(49, '2016_06_29_073615_update_tags_table', 32),
(50, '2020_03_13_083515_add_description_to_tags_table', 33);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `type`, `content`, `meta`, `created_at`, `updated_at`) VALUES
(1, 'dev-config', '{\"favicon\":\"\\/vongtay\\/uploads\\/images\\/logo.png\",\"logo\":\"\\/vongtay\\/uploads\\/images\\/logo.png\",\"title\":\"Admin\",\"title_login\":\"Login\"}', NULL, '2020-02-07 17:00:00', '2020-08-05 16:05:57'),
(2, 'general', '{\"favicon\":\"\\/bestay\\/uploads\\/files\\/favicon.jpg\",\"logo\":\"\\/bestay\\/uploads\\/files\\/logo.png\",\"logo_color\":\"\\/bestay\\/uploads\\/files\\/logo-2.jpg\",\"logo_share\":\"\\/bestay\\/uploads\\/files\\/banner.png\",\"code_facebook\":null,\"google_analytics\":null,\"script\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3723.4882974488705!2d105.73741346493307!3d21.05315098598522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454f9de2328cf%3A0xc5685fbea9808d8e!2zTmd1ecOqbiBYw6EsIE1pbmggS2hhaSwgVOG7qyBMacOqbSwgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1599659691049!5m2!1svi!2s\\\" width=\\\"600\\\" height=\\\"450\\\" frameborder=\\\"0\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\" aria-hidden=\\\"false\\\" tabindex=\\\"0\\\"><\\/iframe>\",\"email_admin\":\"nvtrong393@gmail.com\",\"name_company\":\"Befurni\",\"hotline\":\"+84 36 79 78 688\",\"address_vi\":\"Floor 5B, No. 6 Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vi\\u1ec7t Nam\",\"address_en\":\"Floor 5B, No. 6 Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam\",\"email\":\"noithat@befurni.com\",\"desc_sort\":\"Ra \\u0111\\u1eddi v\\u1edbi m\\u1ee5c ti\\u00eau cung c\\u1ea5p c\\u00e1c d\\u1ecbch v\\u1ee5 v\\u00e0 nh\\u1eefng d\\u00f2ng s\\u1ea3n ph\\u1ea9m ch\\u0103m s\\u00f3c\",\"site_title\":\"Befurni\",\"site_description\":\"Befurni - Chuy\\u00ean cung c\\u1ea5p c\\u00e1c s\\u1ea3n ph\\u1ea9m n\\u1ed9i th\\u1ea5t cho ng\\u00f4i nh\\u00e0 c\\u1ee7a b\\u1ea1n\",\"site_keyword\":\"Home Tech - Chuy\\u00ean cung c\\u1ea5p c\\u00e1c s\\u1ea3n ph\\u1ea9m n\\u1ed9i th\\u1ea5t cho ng\\u00f4i nh\\u00e0 c\\u1ee7a b\\u1ea1n\",\"social\":{\"1581316194006\":{\"name\":\"Facebook\",\"icon\":\"fa fa-facebook\",\"link\":\"#\"},\"1581316206439\":{\"name\":\"Youtube\",\"icon\":\"fa fa-youtube-play\",\"link\":\"#\"},\"1608804757608\":{\"name\":\"Twitter\",\"icon\":\"fa fa-twitter\",\"link\":\"#\"},\"1608804787025\":{\"name\":\"Envelope\",\"icon\":\"fa fa-envelope\",\"link\":\"#\"}},\"footer\":{\"desc_vi\":\"<p>NTERIOR BEFURNI always keeps pace with the latest interior design trends, helping every interior space to become the most perfect.<\\/p>\\r\\n\\r\\n<p>BEFURNI INTERIOR - Luxurious, Close and Delicate. TV<\\/p>\",\"desc_en\":\"<p>NTERIOR BEFURNI always keeps pace with the latest interior design trends, helping every interior space to become the most perfect.<\\/p>\\r\\n\\r\\n<p>BEFURNI INTERIOR - Luxurious, Close and Delicate. TA<\\/p>\"}}', NULL, '2020-02-09 17:00:00', '2021-03-29 10:27:45'),
(3, 'smtp-config', '{\"driver\":\"smtp\",\"host\":\"smtp.gmail.com\",\"port\":\"587\",\"encryption\":\"tls\",\"username\":\"bot030093@gmail.com\",\"password\":\"fsthxteyxthvgoeq\",\"name\":\"Home Tech\"}', NULL, '2020-04-09 11:59:51', '2020-12-24 08:32:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_page` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_h1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id`, `type`, `name_page`, `route`, `content`, `image`, `banner`, `title_h1`, `meta_title`, `meta_description`, `meta_keyword`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'recruitments', 'Trang tuyển dụng Tiếng Việt', 'pages.recruitments', '{\"name\":\"Tuy\\u1ec3n d\\u1ee5ng\",\"desc\":\"Yes, we want you !\"}', '/bestay/uploads/files/blog-1.jpg', '/bestay/uploads/files/bn-blog.jpg', NULL, 'Tuyển dụng', 'Tuyển dụng', NULL, 'vi', '2021-03-28 16:23:41', '2021-03-28 16:34:26'),
(2, 'recruitments', 'Trang tuyển dụng Tiếng Anh', 'pages.recruitments', '{\"name\":\"RECRUITMENT\",\"desc\":\"Yes, we want you !\"}', '/bestay/uploads/files/bn-blog.jpg', '/bestay/uploads/files/bn-blog.jpg', NULL, 'RECRUITMENT', NULL, NULL, 'en', '2021-03-28 16:33:03', '2021-03-28 16:33:22'),
(3, 'contact', 'Trang liên hệ Tiếng Việt', 'pages.contact', '{\"name\":\"Li\\u00ean h\\u1ec7\",\"desc\":\"Ready to work with you :)\"}', '/bestay/uploads/files/bn-blog.jpg', '/bestay/uploads/files/bn-blog.jpg', NULL, 'Liên hệ', NULL, NULL, 'vi', '2021-03-28 17:00:27', '2021-03-28 17:05:07'),
(4, 'contact', 'Trang liên hệ Tiếng Anh', 'pages.contact', '{\"name\":\"Contact\",\"desc\":\"Ready to work with you :)\"}', '/bestay/uploads/files/bn-blog.jpg', '/bestay/uploads/files/bn-blog.jpg', NULL, 'Contact', NULL, NULL, 'en', '2021-03-28 17:01:02', '2021-03-28 17:05:39'),
(5, 'news', 'Trang tin tức Tiếng Việt', 'pages.post', '{\"name\":\"Tin t\\u1ee9c\",\"desc\":null}', NULL, '/bestay/uploads/files/bn-blog.jpg', NULL, 'Tin tức', NULL, NULL, 'vi', '2021-03-29 02:55:02', '2021-03-29 02:57:47'),
(6, 'news', 'Trang tin tức Tiếng Anh', 'pages.post', '{\"name\":\"News\",\"desc\":null}', NULL, '/bestay/uploads/files/bn-blog.jpg', NULL, 'News', NULL, NULL, 'en', '2021-03-29 02:55:42', '2021-03-29 02:57:40'),
(7, 'about', 'Trang giới thiệu Tiếng Việt', 'pages.about', '{\"summary\":{\"1616992252890\":{\"title\":\"100\",\"desc\":\"PROJECTS DONE\"},\"1616992259830\":{\"title\":\"80\",\"desc\":\"HAPPY CLIENTS\"},\"1616992265389\":{\"title\":\"1k\",\"desc\":\"WORKING HOURS\"},\"1616992270870\":{\"title\":\"10\",\"desc\":\"TEAMMATES\"}},\"main_content\":{\"1616992750263\":{\"title\":\"ABOUT US\",\"sub_title\":\"We are...\",\"content\":\"<p>INTERIOR BEFURNI is one of the leading prestigious and professional units in the city. Hanoi is in the field of interior design and construction with a team of experienced architects, knowledgeable about all current interior design trends.<\\/p>\\r\\n\\r\\n<p>INTERIOR BEFURNI constantly strives to bring professional interior design and construction services, with reasonable costs, to meet all interior design needs, providing customers with the most perfect living space. .<\\/p>\\r\\n\\r\\n<p>Customer satisfaction is the guideline for all BEFURNI INTERIOR activities.<\\/p>\"},\"1616992764430\":{\"title\":\"WORK PROCESS\",\"sub_title\":\"How we work\",\"content\":\"<h6>00. Approach &amp; reserach<\\/h6>\\r\\n\\r\\n<p>Receive customer requests, consult and agree on needs, design style.<\\/p>\\r\\n\\r\\n<h6>01. deploying 3D DESIGN options<\\/h6>\\r\\n\\r\\n<p>Outlining the basic idea, making an overall 3D design plan according to the requirements and preferences of the customer.<\\/p>\\r\\n\\r\\n<h6>02. EXCHANGE DESIGN options<\\/h6>\\r\\n\\r\\n<p>Present interior design ideas to customers; discuss, adjust (if any) and customers approve design plans.<\\/p>\\r\\n\\r\\n<h6>03. Submit CONSTRUCTION QUOTATION<\\/h6>\\r\\n\\r\\n<p>Submit the quotation for construction of interior decoration according to the interior design plan chosen and implemented by the customer.<\\/p>\\r\\n\\r\\n<h6>04. CONTRACTING<\\/h6>\\r\\n\\r\\n<p>After agreeing the quotation and construction plan, the two parties will sign a contract for interior design and construction, including the start and completion time.<\\/p>\"}},\"jobs\":{\"title\":\"SERVICES\",\"sub_title\":\"This is what we do.\",\"list\":{\"1616993258800\":{\"icon\":\"\\/bestay\\/uploads\\/files\\/srv-1.png\",\"name\":\"Construction\",\"desc\":\"Construction and installation of equipment for new construction works, and repair variety of them.\"},\"1616993260286\":{\"icon\":\"\\/bestay\\/uploads\\/files\\/srv-2.png\",\"name\":\"Design Consultancy\",\"desc\":\"Initial design consulting solutions or many different design options for the same project.\"},\"1616993261468\":{\"icon\":\"\\/bestay\\/uploads\\/files\\/srv-3.png\",\"name\":\"Interior Design\",\"desc\":\"Berfuni\'s complete interior design solution with a closed process is highly appreciated by many customers.\"}}},\"name\":\"befurni\",\"desc\":\"We are based on collective work and shared knowledge\"}', NULL, '/bestay/uploads/files/bn-blog.jpg', NULL, 'Giới thiệu', NULL, NULL, 'vi', '2021-03-29 04:23:44', '2021-03-29 04:53:32'),
(8, 'about', 'Trang giới thiệu Tiếng Anh', 'pages.about', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '2021-03-29 04:24:16', '2021-03-29 04:24:16'),
(9, 'home', 'Trang chủ Tiếng Việt', 'pages.index', '{\"top\":{\"banner\":\"\\/bestay\\/uploads\\/files\\/banner.png\",\"title_1\":\"HANOI, VIETNAM\",\"title_2\":\"Design Together. Creative Together.\",\"desc\":\"We always keeps pace with the latest interior design trends, helping every interior space to become the most perfect.\",\"link\":\"#\"},\"summary\":{\"1617004477770\":{\"title\":\"100\",\"desc\":\"PROJECTS DONE\"},\"1617004489781\":{\"title\":\"80\",\"desc\":\"HAPPY CLIENTS\"},\"1617004493602\":{\"title\":\"1k\",\"desc\":\"WORKING HOURS\"},\"1617004494211\":{\"title\":\"10\",\"desc\":\"TEAMMATES\"}},\"partner\":{\"1617005145062\":{\"logo\":\"\\/bestay\\/uploads\\/files\\/part-1.jpg\",\"name\":\"Logo\",\"link\":\"#\"},\"1617005267727\":{\"logo\":\"\\/bestay\\/uploads\\/files\\/part-2.jpg\",\"name\":\"Logo\",\"link\":\"#\"},\"1617005269128\":{\"logo\":\"\\/bestay\\/uploads\\/files\\/part-3.jpg\",\"name\":\"Logo\",\"link\":\"#\"},\"1617005270224\":{\"logo\":\"\\/bestay\\/uploads\\/files\\/part-4.jpg\",\"name\":\"Logo\",\"link\":\"#\"}}}', NULL, NULL, NULL, NULL, NULL, NULL, 'vi', '2021-03-29 07:39:07', '2021-03-29 08:08:13'),
(10, 'home', 'Trang chủ Tiếng Anh', 'pages.index', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'en', '2021-03-29 07:39:32', '2021-03-29 07:39:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name_vi`, `name_en`, `slug`, `desc_vi`, `content_vi`, `desc_en`, `content_en`, `image`, `type`, `hot`, `status`, `view_count`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `published_at`, `updated_at`) VALUES
(1, 'Trends In The Interior Of 2021?', 'Trends In The Interior Of 2021?', 'trends-in-the-interior-of-2021', 'Economic development, advanced technology and technology come with strict requirements on aesthetics and product quality, especially interior furniture. So what will the 2021 interior trends be?', '<p>Economic development, advanced technology and technology come with strict requirements on aesthetics and product quality, especially interior furniture. So what will the 2021 interior trends be?</p>\r\n\r\n<p>Join Befurni to find out what is the predicted interior trend in 2021!</p>\r\n\r\n<p>Interior trend 2021 with simplicity, intelligence and modernity.</p>\r\n\r\n<p><img alt=\"\" src=\"http://tpl.deployweb.info/bestay/images/detail-1.jpg\" /></p>\r\n\r\n<p>Save space, remove cumbersome details but still ensure sophistication and elegance, your living space will become much more impressive and comfortable.</p>\r\n\r\n<p><img alt=\"\" src=\"http://tpl.deployweb.info/bestay/images/detail-2.jpg\" /></p>\r\n\r\n<p>2021 interior trend ensures maximum convenience and space saving but still brings sharpness to every detail. Therefore, this trend can develop and win over many customers in the next few years.</p>', 'Economic development, advanced technology and technology come with strict requirements on aesthetics and product quality, especially interior furniture. So what will the 2021 interior trends be?', '<p>Economic development, advanced technology and technology come with strict requirements on aesthetics and product quality, especially interior furniture. So what will the 2021 interior trends be?</p>\r\n\r\n<p>Join Befurni to find out what is the predicted interior trend in 2021!</p>\r\n\r\n<p>Interior trend 2021 with simplicity, intelligence and modernity.</p>\r\n\r\n<p><img alt=\"\" src=\"http://tpl.deployweb.info/bestay/images/detail-1.jpg\" /></p>\r\n\r\n<p>Save space, remove cumbersome details but still ensure sophistication and elegance, your living space will become much more impressive and comfortable.</p>\r\n\r\n<p><img alt=\"\" src=\"http://tpl.deployweb.info/bestay/images/detail-2.jpg\" /></p>\r\n\r\n<p>2021 interior trend ensures maximum convenience and space saving but still brings sharpness to every detail. Therefore, this trend can develop and win over many customers in the next few years.</p>', '/bestay/uploads/files/blog-1.jpg', 'blog', 1, 1, 0, NULL, NULL, NULL, '2021-03-28 14:07:02', NULL, '2021-03-28 14:07:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_category`
--

INSERT INTO `post_category` (`id`, `id_category`, `id_post`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2021-03-28 14:07:57', '2021-03-28 14:07:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`id`, `name_vi`, `name_en`, `image`, `slug`, `status`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Bestay Office', 'Bestay Office', '/bestay/uploads/files/bn-blog.jpg', 'bestay-office', 1, NULL, NULL, NULL, '2021-03-29 02:06:21', '2021-03-29 02:06:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `project_details`
--

CREATE TABLE `project_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projects_id` bigint(20) UNSIGNED NOT NULL,
  `name_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `project_details`
--

INSERT INTO `project_details` (`id`, `projects_id`, `name_vi`, `name_en`, `sub_name_vi`, `sub_name_en`, `status`, `banner`, `created_at`, `updated_at`) VALUES
(1, 1, 'SERVICES', 'SERVICES', 'This is what we do.', 'This is what we do.', 1, '/bestay/uploads/files/bn-pr-1.jpg', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(2, 1, 'SERVICES', 'SERVICES', 'This is what we do.', 'This is what we do.', 1, '/bestay/uploads/files/bn-pr-1.jpg', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(3, 1, 'SERVICES', 'SERVICES', 'This is what we do.', 'This is what we do.', 1, '/bestay/uploads/files/bn-pr-1.jpg', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(4, 1, 'SERVICES', 'SERVICES', 'This is what we do.', 'This is what we do.', 1, '/bestay/uploads/files/bn-pr-1.jpg', '2021-03-29 02:11:37', '2021-03-29 02:11:37'),
(5, 1, 'SERVICES', 'SERVICES', 'This is what we do.', 'This is what we do.', 1, '/bestay/uploads/files/bn-pr-1.jpg', '2021-03-29 02:11:37', '2021-03-29 02:11:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitments`
--

CREATE TABLE `recruitments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_desc_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recruitments`
--

INSERT INTO `recruitments` (`id`, `name_vi`, `name_en`, `slug`, `image`, `sort_desc_vi`, `sort_desc_en`, `desc_vi`, `desc_en`, `address_vi`, `address_en`, `qty`, `offers_vi`, `offers_en`, `deadline`, `status`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:20:20'),
(2, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-1', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(3, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-2', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(4, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-3', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(5, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-4', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(6, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-5', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(7, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-6', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(8, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-7', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(9, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-8', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(10, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-9', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(11, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-10', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(12, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-11', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23');
INSERT INTO `recruitments` (`id`, `name_vi`, `name_en`, `slug`, `image`, `sort_desc_vi`, `sort_desc_en`, `desc_vi`, `desc_en`, `address_vi`, `address_en`, `qty`, `offers_vi`, `offers_en`, `deadline`, `status`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(13, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-12', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(14, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-13', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(15, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-14', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(16, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-15', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(17, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-16', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(18, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-17', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(19, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-18', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(20, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-19', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(21, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-20', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(22, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-21', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(23, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-22', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(24, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-23', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23');
INSERT INTO `recruitments` (`id`, `name_vi`, `name_en`, `slug`, `image`, `sort_desc_vi`, `sort_desc_en`, `desc_vi`, `desc_en`, `address_vi`, `address_en`, `qty`, `offers_vi`, `offers_en`, `deadline`, `status`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(25, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-24', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(26, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-25', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(27, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-26', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(28, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-27', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(29, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-28', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23'),
(30, 'Recruiting 2 Interior Design Architects', 'Recruiting 2 Interior Design Architects EN', 'recruiting-2-interior-design-architects-29', '/bestay/uploads/files/blog-1.jpg', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves', 'High income, worthy salary and bonus. Working in a professional, friendly environment and having the opportunity to develop themselves EN', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</li>\r\n</ul>', '<p>✔️ Architectural design and implementation of drawings of industrial works, headquarters, administration, public facilities, complexes, residential areas ... under the company&#39;s projects.</p>\r\n\r\n<p>✔️ Deploy detailed design drawings 2D, 3D, rendering using software such as Autocad, sketchup, 3Dmax, ... or other similar 3D software.</p>\r\n\r\n<p>✔️ Collaborate with project teams, investors</p>\r\n\r\n<p>✔️ Together with the team to develop a project construction plan, then express the project concept with detailed architectural drawings, construction and construction.</p>\r\n\r\n<p>✔️ In a special design compliance with building standards, codes, local (regional) laws, fire protection regulations and other regulations.</p>\r\n\r\n<p>✔️ Make necessary changes throughout the process of joining the project.</p>\r\n\r\n<h5>REQUIREMENTS</h5>\r\n\r\n<p>✔️ Bachelor degree in engineering architecture;</p>\r\n\r\n<p>✔️ Proficient in AutoCad, 3DS Max or Sketchup;</p>\r\n\r\n<p>✔️ Industry experience: 02 years or more;</p>\r\n\r\n<p>✔️ Basic communication English</p>\r\n\r\n<h5>BENEFITS</h5>\r\n\r\n<p>✔️ Salary: 10.000.000 - 20.000.000 VND;</p>\r\n\r\n<p>✔️ Working in a professional, friendly environment and having the opportunity to develop themselves and assert themselves;</p>\r\n\r\n<p>✔️ Many other benefits</p>\r\n\r\n<h5>CONTACT</h5>\r\n\r\n<ul>\r\n	<li>BESTAY PTE. LTD.</li>\r\n	<li>Tel: 094 179 5962</li>\r\n	<li>Email: noithat@befurni.com</li>\r\n	<li>Office: Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam. EN</li>\r\n</ul>', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam', 'Floor 5B, HL Building, No. 6, Lane 82, Duy Tan Street, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam EN', '20', '10.000.000 - 20.000.000 VND', '10.000.000 - 20.000.000 VND EN', 'April 20th, 2021', 1, NULL, NULL, NULL, '2021-03-28 08:16:23', '2021-03-28 08:16:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `styles`
--

CREATE TABLE `styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `styles`
--

INSERT INTO `styles` (`id`, `name_vi`, `name_en`, `slug`, `image`, `desc_vi`, `desc_en`, `content_vi`, `content_en`, `status`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:39:20', '2021-03-28 09:39:20'),
(2, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-1', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(3, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-2', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(4, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-3', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(5, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-4', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(6, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-5', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:52', '2021-03-28 09:41:52'),
(7, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-6', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(8, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-7', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(9, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-8', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(10, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-9', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:53', '2021-03-28 09:41:53'),
(11, 'Modern Interior Design', 'Modern Interior Design', 'modern-interior-design-10', '/bestay/uploads/files/style-1.jpg', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', 'The modern interior design style has captured the hearts of most of those who love the minimalism, modernity, elegance and sophistication.', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', '<p>It can be said that the modern interior design style is the most obvious &quot;break&quot; with the classical interior design room.</p>\r\n\r\n<p>Eliminate all the cumbersome, complicated elements, layouts, motifs in the classic style and replace them with a beautiful minimalism in the modern interior design style.</p>', 1, NULL, NULL, NULL, '2021-03-28 09:41:53', '2021-03-28 09:41:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tagging_tagged`
--

INSERT INTO `tagging_tagged` (`id`, `taggable_id`, `taggable_type`, `tag_name`, `tag_slug`) VALUES
(1, 1, 'App\\Models\\Posts', 'Furniture', 'furniture'),
(2, 1, 'App\\Models\\Posts', 'Create', 'create');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT 0,
  `count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `tag_group_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tagging_tags`
--

INSERT INTO `tagging_tags` (`id`, `slug`, `name`, `suggest`, `count`, `tag_group_id`, `description`) VALUES
(1, 'furniture', 'Furniture', 0, 1, NULL, NULL),
(2, 'create', 'Create', 0, 1, NULL, NULL),
(3, 'desgin', 'Desgin', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tagging_tag_groups`
--

CREATE TABLE `tagging_tag_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `name`, `phone`, `email`, `image`, `email_verified_at`, `google_id`, `facebook_id`, `password`, `status`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, 'gmail@gco.vn', NULL, NULL, NULL, NULL, '$2y$10$O549RcwXL6HhRORTT4zB..oXDpZg4Erai8brr1E7C6Uz.HTKCh96i', 1, 1, NULL, '2020-07-28 09:51:39', '2020-07-28 09:51:39'),
(2, 'admin1', 'duongvu', '0988703355', 'vuk15bktqs@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$FpSVxqOPRiZyv.RdZhV1nOriulucPyYROf00kU7GwrUmkERYHqVnC', 1, 1, NULL, '2020-09-06 01:21:49', '2020-09-06 01:21:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery_libs`
--
ALTER TABLE `gallery_libs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_group`
--
ALTER TABLE `menu_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_category_id_category_foreign` (`id_category`),
  ADD KEY `post_category_id_post_foreign` (`id_post`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_details_projects_id_foreign` (`projects_id`);

--
-- Chỉ mục cho bảng `recruitments`
--
ALTER TABLE `recruitments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Chỉ mục cho bảng `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`),
  ADD KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`);

--
-- Chỉ mục cho bảng `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tag_groups_slug_index` (`slug`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `gallery_libs`
--
ALTER TABLE `gallery_libs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `menu_group`
--
ALTER TABLE `menu_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `project_details`
--
ALTER TABLE `project_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `recruitments`
--
ALTER TABLE `recruitments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `styles`
--
ALTER TABLE `styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `post_category_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_category_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `project_details`
--
ALTER TABLE `project_details`
  ADD CONSTRAINT `project_details_projects_id_foreign` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD CONSTRAINT `tagging_tags_tag_group_id_foreign` FOREIGN KEY (`tag_group_id`) REFERENCES `tagging_tag_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
