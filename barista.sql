-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 19 2023 г., 19:59
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `barista`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `person` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `phone` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `person`, `date`, `time`, `phone`, `created_at`, `updated_at`) VALUES
(9, '1 person', '2023-12-04', '08:00:00', 5, '2023-12-07 11:08:59', '2023-12-07 11:08:59'),
(10, '1 person', '2023-12-05', '08:00:00', 2, '2023-12-07 11:10:32', '2023-12-07 11:10:32');

-- --------------------------------------------------------

--
-- Структура таблицы `book_dates`
--

CREATE TABLE `book_dates` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `book_dates`
--

INSERT INTO `book_dates` (`id`, `date`, `created_at`, `updated_at`) VALUES
(7, '2023-12-04', NULL, NULL),
(8, '2023-12-05', NULL, NULL),
(9, '2023-12-06', NULL, NULL),
(10, '2023-12-07', NULL, NULL),
(11, '2023-12-08', '2023-12-07 05:51:44', '2023-12-07 05:51:44'),
(12, '2023-12-09', '2023-12-07 05:52:15', '2023-12-07 05:52:15'),
(13, '2023-12-10', '2023-12-07 05:52:59', '2023-12-07 05:52:59');

-- --------------------------------------------------------

--
-- Структура таблицы `book_times`
--

CREATE TABLE `book_times` (
  `id` bigint UNSIGNED NOT NULL,
  `title` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `book_times`
--

INSERT INTO `book_times` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, '08:00:00', 0, NULL, NULL),
(2, '09:00:00', 0, NULL, NULL),
(3, '10:00:00', 0, NULL, NULL),
(4, '11:00:00', 0, NULL, NULL),
(5, '12:00:00', 0, NULL, NULL),
(6, '13:00:00', 0, '2023-12-07 06:50:56', '2023-12-07 06:50:56'),
(7, '14:00:00', 0, '2023-12-07 06:51:22', '2023-12-07 06:51:22');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', NULL, NULL),
(2, 'Coffee cup', NULL, NULL),
(3, 'Coffee pot', NULL, NULL),
(4, 'Coffee bags', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category_menus`
--

CREATE TABLE `category_menus` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_menus`
--

INSERT INTO `category_menus` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Menu1', NULL, NULL),
(2, 'Menu2', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `category_menu_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `title`, `about`, `price`, `category_menu_id`, `created_at`, `updated_at`) VALUES
(1, 'CAFFE LATTE', 'Fresh brewed coffee and steamed milk', 2.95, 1, NULL, NULL),
(2, 'CAFFE MOCHA', 'Espresso With Milk, and Whipped Cream', 3.67, 1, NULL, NULL),
(3, 'WHITE CHOKOLATE MOCHA', 'Espresso, White Chocolate, Milk, Ice and Cream', 2.79, 1, NULL, NULL),
(4, 'Iced Caramel Latte', 'Espresso, Milk, Ice and Caramel Sauce', 4.67, 2, NULL, NULL),
(5, 'Espresso Macchiato', 'Rich Espresso With Milk and Foam', 2.98, 2, NULL, NULL),
(6, 'Caramel Macchiato', 'Espresso, vanilla-flavored syrup and milk', 2.54, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_06_162529_create_roles_table', 1),
(6, '2023_12_07_044957_create_category_menus_table', 2),
(11, '2023_12_07_045416_create_menu_items_table', 3),
(12, '2023_12_07_064241_create_book_dates_table', 4),
(15, '2023_12_07_091342_create_book_times_table', 5),
(16, '2023_12_07_140048_create_books_table', 6),
(21, '2023_12_08_034945_create_posts_table', 7),
(22, '2023_12_09_105303_create_categories_table', 8),
(25, '2023_12_09_110607_create_products_table', 9),
(26, '2023_12_14_102611_create_order_items_table', 10),
(27, '2023_12_14_102720_create_orders_table', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `order_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` int NOT NULL DEFAULT '0',
  `order_total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int UNSIGNED DEFAULT NULL,
  `product_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int UNSIGNED DEFAULT NULL,
  `product_qty` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/blog/no-image.png',
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `author`, `tag`, `desc`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Expand Your Mind, Change Everything', 'media/blog/1784730505232835.jpg', 'Federico Hickman', 'Enjoyment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat dictum lacus, ut hendrerit mi pulvinar vel. Fusce id nibh at neque eleifend tristique at sit amet libero. In aliquam in nisl nec sollicitudin. Sed consectetur volutpat sem vitae facilisis. Fusce tristique, magna ornare facilisis sagittis, tortor mi auctor libero, non pharetra sem ex eu felis. Aenean egestas ut purus nec vehicula. Morbi eu nisi erat. Nam mattis id lectus sit amet mattis. Suspendisse eget tristique neque', NULL, 1, '2023-12-07 23:38:29', '2023-12-08 11:17:30'),
(2, 'Places to get lost', 'media/blog/1784730618689116.jpg', 'Federico Hickman', 'Enjoyment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat dictum lacus, ut hendrerit mi pulvinar vel. Fusce id nibh at neque eleifend tristique at sit amet libero. In aliquam in nisl nec sollicitudin. Sed consectetur volutpat sem vitae facilisis. Fusce tristique, magna ornare facilisis sagittis, tortor mi auctor libero, non pharetra sem ex eu felis. Aenean egestas ut purus nec vehicula. Morbi eu nisi erat. Nam mattis id lectus sit amet mattis. Suspendisse eget tristique neque', NULL, 1, '2023-12-07 23:38:29', '2023-12-08 11:09:12'),
(3, 'Elevate Your Expectations', 'media/blog/1784730629388983.jpg', 'Federico Hickman', 'Enjoyment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat dictum lacus, ut hendrerit mi pulvinar vel. Fusce id nibh at neque eleifend tristique at sit amet libero. In aliquam in nisl nec sollicitudin. Sed consectetur volutpat sem vitae facilisis. Fusce tristique, magna ornare facilisis sagittis, tortor mi auctor libero, non pharetra sem ex eu felis. Aenean egestas ut purus nec vehicula. Morbi eu nisi erat. Nam mattis id lectus sit amet mattis. Suspendisse eget tristique neque', NULL, 1, '2023-12-07 23:38:29', '2023-12-08 11:09:22');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `price` int UNSIGNED DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int UNSIGNED DEFAULT NULL,
  `dime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `amount` int UNSIGNED DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'media/shop/no-image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `category_id`, `price`, `desc`, `about`, `sku`, `weight`, `dime`, `status`, `amount`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Paper Pouch', 1, 46, 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim', 'Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et', '12', 300, '3 × 60 × 80 in', 1, 10, 'media/shop/1784817403888492.jpg', '2023-12-09 06:59:23', '2023-12-09 10:08:37'),
(2, 'Paper Bag', 1, 79, 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim', 'Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et', '11', 300, '3 × 60 × 80 in', 1, 2, 'media/shop/1784817419491769.jpg', '2023-12-09 06:59:23', '2023-12-19 11:46:21'),
(3, 'Plastic Pouch', 1, 50, 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim', 'Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et', '10', 300, '3 × 60 × 80 in', 1, 6, 'media/shop/1784817433190197.jpg', '2023-12-09 06:59:23', '2023-12-19 11:46:21'),
(4, 'Coffee Pot', 3, 69, 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim.', 'Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et', '09', 300, '3 × 60 × 80 in', 1, 9, 'media/shop/1784825432132665.jpg', '2023-12-09 12:16:13', '2023-12-14 05:46:41'),
(5, 'Tea Pot', 3, 54, 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim.', 'Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et', '08', 300, '3 × 60 × 80 in', 1, 8, 'media/shop/1784825513947664.jpg', '2023-12-09 12:17:31', '2023-12-14 05:52:40'),
(6, 'Paper Cap', 4, 31, 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim', 'Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et', '07', 300, '3 × 60 × 80 in', 1, 10, 'media/shop/1784825580922924.jpg', '2023-12-09 12:18:35', '2023-12-10 09:29:57'),
(7, 'Choco Bites', 4, 63, NULL, NULL, NULL, NULL, NULL, 1, 5, 'media/shop/1784825688681126.jpg', '2023-12-09 12:20:18', '2023-12-09 12:20:18'),
(8, 'Grownd Coffee', 1, 31, NULL, NULL, NULL, NULL, NULL, 1, 5, 'media/shop/1784825738836155.jpg', '2023-12-09 12:21:06', '2023-12-09 12:21:06'),
(9, 'Moka Pot', 3, 18, NULL, NULL, NULL, NULL, NULL, 1, 10, 'media/shop/1784825794300487.jpg', '2023-12-09 12:21:59', '2023-12-09 12:21:59'),
(10, 'Cafe bags', 4, 29, NULL, NULL, NULL, NULL, NULL, 1, 10, 'media/shop/1784825843313156.jpg', '2023-12-09 12:22:46', '2023-12-09 12:22:46'),
(11, 'Tea Cap', 2, 46, NULL, NULL, NULL, NULL, NULL, 1, 8, 'media/shop/1784825890344941.jpg', '2023-12-09 12:23:30', '2023-12-09 12:23:30'),
(12, 'Recycled Bags', 4, 35, NULL, NULL, NULL, NULL, NULL, 1, 4, 'media/shop/1784825936896364.jpg', '2023-12-09 12:24:15', '2023-12-09 12:24:15');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Author', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL DEFAULT '2',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 1, 'admin@gmail.com', NULL, '$2y$10$tAcp.WjpUK4LN5VoKNgN2eSi29D9dhrX6KD4WTvnMeuITEOoboOaq', NULL, '2023-12-06 11:34:25', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book_dates`
--
ALTER TABLE `book_dates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book_times`
--
ALTER TABLE `book_times`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_menus`
--
ALTER TABLE `category_menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `book_dates`
--
ALTER TABLE `book_dates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `book_times`
--
ALTER TABLE `book_times`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `category_menus`
--
ALTER TABLE `category_menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
