-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2020 lúc 05:15 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `coffe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `status` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa Giao Hàng',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_user`, `address`, `district`, `city`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(2, 25, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 100000, 'Chưa Giao Hàng', '2020-08-16 09:13:46', '2020-08-16 09:13:46'),
(3, 25, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 345000, 'Chưa Giao Hàng', '2020-08-16 09:42:41', '2020-08-16 09:42:41'),
(4, 25, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 75000, 'Chưa Giao Hàng', '2020-08-16 10:05:05', '2020-08-16 10:05:05'),
(5, 5, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 39000, 'Chưa Giao Hàng', '2020-08-17 04:12:18', '2020-08-17 04:12:18'),
(6, 5, 'Quảng Ninh', '1', 'Uong Bi', 78000, 'Đã Giao Hàng', '2020-08-17 04:18:42', '2020-08-18 02:16:18'),
(7, 5, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 103000, 'Đã Giao Hàng', '2020-08-17 04:19:55', '2020-08-18 02:15:56'),
(8, 5, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 103000, 'Đã xử lý', '2020-08-17 06:57:18', '2020-08-18 02:14:16'),
(9, 11, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 29000, 'Đã xử lý', '2020-08-18 01:54:24', '2020-08-18 02:10:30'),
(10, 11, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 29000, 'Đã xử lý', '2020-08-18 01:55:29', '2020-08-18 02:06:22'),
(11, 25, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 128000, 'Đã Giao Hàng', '2020-08-18 03:42:44', '2020-08-18 04:12:53'),
(12, 25, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 109000, 'Đã Giao Hàng', '2020-08-18 03:50:07', '2020-08-18 08:11:14'),
(13, 11, 'Quảng Ninh', 'Vang Danh', 'Uong Bi', 58000, 'Đã Giao Hàng', '2020-08-18 08:19:23', '2020-08-18 08:22:14'),
(14, 11, 'Ha noi', 'DOng lac', 'Ha npoi', 156000, 'Đã Giao Hàng', '2020-08-20 04:42:47', '2020-08-20 05:04:54'),
(15, 11, 'mam', 'Tay Ho', 'Hano', 195000, 'Chưa Giao Hàng', '2020-08-20 13:11:28', '2020-08-20 13:11:28'),
(16, 11, 'An Duong Vuong', 'Nhat Tan', 'Tay ho', 78000, 'Chưa Giao Hàng', '2020-08-21 03:13:24', '2020-08-21 03:13:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `id_bill`, `id_product`, `quantity`, `price`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 2, 12, 1, 25000, 100000, '2020-08-16 09:13:46', '2020-08-16 09:13:46'),
(2, 3, 12, 1, 25000, 345000, '2020-08-16 09:42:41', '2020-08-16 09:42:41'),
(3, 4, 13, 1, 30000, 75000, '2020-08-16 10:05:05', '2020-08-16 10:05:05'),
(4, 5, 11, 1, 39000, 39000, '2020-08-17 04:12:18', '2020-08-17 04:12:18'),
(9, 11, 7, 1, 29000, 128000, '2020-08-18 03:42:44', '2020-08-18 03:42:44'),
(10, 11, 6, 1, 25000, 128000, '2020-08-18 03:42:44', '2020-08-18 03:42:44'),
(11, 11, 8, 1, 35000, 128000, '2020-08-18 03:42:44', '2020-08-18 03:42:44'),
(12, 11, 9, 1, 39000, 128000, '2020-08-18 03:42:44', '2020-08-18 03:42:44'),
(13, 12, 8, 2, 35000, 109000, '2020-08-18 03:50:07', '2020-08-18 03:50:07'),
(14, 12, 9, 1, 39000, 109000, '2020-08-18 03:50:07', '2020-08-18 03:50:07'),
(15, 13, 7, 2, 29000, 58000, '2020-08-18 08:19:23', '2020-08-18 08:19:23'),
(16, 14, 11, 2, 39000, 156000, '2020-08-20 04:42:47', '2020-08-20 04:42:47'),
(17, 14, 19, 2, 39000, 156000, '2020-08-20 04:42:47', '2020-08-20 04:42:47'),
(18, 15, 11, 4, 39000, 195000, '2020-08-20 13:11:28', '2020-08-20 13:11:28'),
(19, 15, 18, 1, 39000, 195000, '2020-08-20 13:11:28', '2020-08-20 13:11:28'),
(20, 16, 18, 2, 39000, 78000, '2020-08-21 03:13:24', '2020-08-21 03:13:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `link_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `id_user`, `link_image`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(6, 28, 'https://bit.ly/3aD4Gpm', 'Full moon in August with VGC coffee', 'This Mid-Autumn Festival, the House is pleased to present to you and your family the collection of moon cakes - The Tale of Cuoi with 6 new delicious flavors. The small cakes containing all the enthusiasm of the members of the House just wish you happy to hold in hand and welcome a prosperous moon with your family and loved ones.\r\n\r\nThis year\'s moon season, Home sends you the cake flavors:\r\n\r\n- Fragrant Coffee Cake\r\n\r\n- Sweet Taro Cake\r\n\r\n- Black Sesame Cake\r\n\r\n- Lotus Seed Red Apple Cake\r\n\r\n- Bat Buu Mixed Cake\r\n\r\n- Roasted Chicken Cake with Vi Fish\r\n\r\nNot only having fresh taste, but also house cakes are contained in luxury boxes, which are suitable precious gifts for you to send to relatives, partners or friends. Especially for those who are far away from their hometown, the moon cake is a special bonding gift for family reunification.\r\n\r\nMooncakes are packed with 3 different boxes, which you can choose from according to your gifting needs. In particular, in each box of cake, House also sends you a little taste of coffee, with the hope that the story of your tray and your family will be warmer.', 1, '2020-08-19 16:17:00', '2020-08-19 16:17:00'),
(7, 9, 'http://coffeeluck.themerex.net/wp-content/uploads/2016/08/image-1.jpg', '3 SURPRISING HEALTH BENEFITS OF COFFEE', 'Lorem ipsum dolor sit amet, cum errem mucius fabellas ne, in vim falli latine electram, nusquam definitionem te nec. Quidam salutandi et mea. Ut novum propriae expetendis cum, numquam constituto per ut, mel dicat dolores scripserit ne. Eu vivendo nostrum per. Vix ex hinc percipitur, putent appareat evertitur no pri.\r\n\r\nId mundi utamur voluptua has, his id feugiat denique sensibus. Ut eos nibh erant officiis, aeque dictas copiosae ea vis. Eos feugiat feugait iracundia ad. Eam te nobis consulatu, te vero eruditi has. Soleat putant an qui, ex vis utinam fierent, populo menandri sadipscing eos at.\r\n\r\nPro ea aliquid alienum comprehensam. Vocent oblique usu et, everti ceteros iudicabit ea ius, sit no tota ludus electram. An erant tibique erroribus mei, est legendos electram mediocrem an. Ex paulo deterruisset quo, cetero delenit consequat ius te. Dolore regione recteque nec ex, erant equidem recusabo ne ius.\r\n\r\nCausae inermis corpora te mel, vel meis integre antiopam eu. Ius ut movet tritani eruditi, te per elit vidit assentior. Mel antiopam pericula expetenda an, no dicam copiosae inciderint eos, vim ea nibh dicat sanctus. Eu qui laoreet pertinax definiebas, aliquid insolens duo eu, te vel nihil fabellas recteque.', 1, '2020-08-19 16:22:18', '2020-08-20 16:22:18'),
(8, 25, 'http://coffeeluck.themerex.net/wp-content/uploads/2016/08/image-5.jpg', 'HOW MANY CUPS OF COFFEE CAN YOU DRINK A DAY', 'Pro ea aliquid alienum comprehensam. Vocent oblique usu et, everti ceteros iudicabit ea ius, sit no tota ludus electram. An erant tibique erroribus mei, est legendos electram mediocrem an. Ex paulo deterruisset quo, cetero delenit consequat ius te. Dolore regione recteque nec ex, erant equidem recusabo ne ius.\r\n\r\nCausae inermis corpora te mel, vel meis integre antiopam eu. Ius ut movet tritani eruditi, te per elit vidit assentior. Mel antiopam pericula expetenda an, no dicam copiosae inciderint eos, vim ea nibh dicat sanctus. Eu qui laoreet pertinax definiebas, aliquid insolens duo eu, te vel nihil fabellas recteque.\r\n\r\nNo mundi commune petentium vel, usu lorem omnesque mnesarchum ut. His ad simul doming, eu vis accusata splendide intellegebat. Offendit lucilius at ius. Volumus constituam theophrastus cu pro, vis virtute quaeque definiebas id.', 1, '2020-08-20 16:22:18', '2020-08-20 16:22:18'),
(9, 29, 'https://barista.qodeinteractive.com/wp-content/uploads/2016/03/blog-standard-img-1.jpg', 'EXPAND YOUR MIND, CHANGE EVERYTHING', 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril.\r\n\r\nLorem ipsum dolor sit amet, te ridens gloriatur temporibus qui, per enim veritus probatus ad. Quo eu etiam exerci dolore, usu ne omnes referrentur. Ex eam diceret denique, ut legimus similique vix, te equidem apeirian definitionem eos. Ei movet elitr mea. Vis legendos conceptam ad. Fabulas vituperata sadipscing ei quo.', 1, '2020-08-20 16:35:14', '2020-08-20 16:35:14'),
(10, 20, 'http://hotcoffee.themerex.net/wp-content/uploads/2016/01/post-4.jpg', 'ENGLISH COFFEEHOUSES IN THE 17TH CENTURY', 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', 1, '2020-08-19 16:47:58', '2020-08-19 16:47:58'),
(11, 25, 'http://hotcoffee.themerex.net/wp-content/uploads/2016/01/post-6.jpg', 'WHAT MAKES A CAPPUCCINO', 'A cappuccino contains equal parts of espresso, steamed and milk froth. The coffee cup for a cappuccino is smaller than a latte cup, usually between 150 and 180 ml. The size of your cup is very important to get the right flavour balance between your espresso and the right amount of milk.\r\nThe foam of a cappuccino and be dry or velvety. Dry foam has large, airy bubbles and lots of volume, while with velvety foam (or micro foam) the bubbles are barely visible.', 1, '2020-08-28 16:48:59', '2020-08-29 16:48:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Coffee', 0, 1, '2020-08-11 15:49:06', '2020-08-20 04:52:16', NULL),
(8, 'Smoothie', 0, 1, '2020-08-11 15:49:26', '2020-08-20 04:52:03', NULL),
(9, 'Tea', 0, 1, '2020-08-11 15:49:33', '2020-08-20 04:51:43', NULL),
(10, 'Western Coffee', 7, 1, '2020-08-11 15:49:44', '2020-08-20 04:51:24', NULL),
(11, 'Ice blended drinks', 0, 1, '2020-08-11 15:50:03', '2020-08-20 04:51:02', NULL),
(12, 'Fruit juice', 0, 1, '2020-08-11 15:50:19', '2020-08-20 04:50:45', NULL),
(13, 'Yogurt', 0, 1, '2020-08-11 15:50:29', '2020-08-20 04:50:28', NULL),
(14, 'Other drinks', 0, 1, '2020-08-11 15:50:35', '2020-08-20 04:49:38', NULL),
(15, 'Snacks', 0, 1, '2020-08-11 15:50:50', '2020-08-20 04:48:56', NULL),
(16, 'Capuccino', 8, 1, '2020-08-11 15:51:15', '2020-08-20 12:44:19', NULL),
(17, 'test', 0, 1, '2020-08-16 08:41:37', '2020-08-16 08:42:32', '2020-08-16 08:42:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_billdetail` int(10) UNSIGNED DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `id_user`, `id_billdetail`, `content`, `status`, `created_at`, `updated_at`) VALUES
(2, 33, NULL, 'Got the Pods to use with my nanopresso (with the NS adapter) and it was gleaming! Between these and the battle bags I can get a quality brew in minutes few regardless of where I am. Also love the mug, really great quality as expected from Contact Coffee.', 1, '2020-08-20 09:45:27', NULL),
(3, 9, NULL, 'Mega. Makes your beard grow thicker and quicker than normal nespresso pods. Proven increases in virility, do not consume if you do not want to participate in bare knuckle fighting, welding or lumberjacking.  Drink responsibly', 1, '2020-08-21 09:51:31', NULL),
(4, 20, NULL, '\r\nAwesome product, squares my morning routine right away.Can you tell everyone in our office loves a good cuppa? Lovely blend and super easy to make a really great coffee without the admin, spilt grounds and swearing. Can\'t see 100 pods lasting us long at all.', 1, '2020-08-25 09:51:31', NULL),
(5, 19, NULL, 'My partner is obsessed with all things Contact Contact. From t-shirts to Nespresso pods, he is making his way through the entire range and fast. He recommends the coffee to anyone who listens. He loves his new club member mug too. 😊', 1, '2020-08-22 09:53:22', NULL),
(6, 28, NULL, 'I’m basically on par with George Clooney now.Awesome brew, no faff, no mess. What\'s not to like?', 1, '2020-08-24 09:53:22', NULL),
(7, 30, NULL, 'Bloody hell gent\'s! After years of shift work and consuming gallons of gash coffee (range bombs and cook house/ police station brews) I have pretty much become inured to coffee. Its more a habit now than anything else. Until this morning when I brewed up my first batch of Red on. Smells great, tastes even better, then it hit. Its been a fair few years since I\'ve had a buzz from a brew let alone the caffiene sledgehammer that is Red On.  Gen kick with a fantastic taste. Well done troops.\r\n', 1, '2020-08-27 09:53:22', NULL),
(8, 33, NULL, 'I was quick off the mark ordering this bombers mug when it was released. When it got delivered the Mrs thought I’d bought it for her. After I called her a stupid wench for thinking this, she downed 2 mugs of Contact Coffee Co Red On and i woke up 3 days later recovering in hospital. i now need another mug. *Drink with caution*', 1, NULL, NULL),
(9, 25, NULL, 'This is by far definitely the best coffee on the market. Have tried the whole range and still to be disappointed. The handy bags are also brilliant for taking on your travels. 1st class coffee and 1st class service', 1, '2020-08-08 09:53:22', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `slug`, `deleted_at`) VALUES
(1, 'Menu100', 0, '2020-08-05 01:36:41', '2020-08-05 01:37:43', 'menu100', '2020-08-05 01:37:43'),
(2, 'Menu100', 0, '2020-08-06 15:26:29', '2020-08-06 15:56:24', 'menu100', '2020-08-06 15:56:24'),
(3, 'Coffe Luffy Sua 1', 0, '2020-08-06 15:56:34', '2020-08-10 08:07:07', 'coffe-luffy-sua-1', NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_22_174308_create_roles_table', 1),
(5, '2020_07_22_174347_create_categories_table', 1),
(6, '2020_07_22_174404_create_products_table', 1),
(7, '2020_07_22_174425_create_bills_table', 1),
(8, '2020_07_22_174433_create_bill_details_table', 1),
(9, '2020_07_22_174444_create_feedback_table', 1),
(10, '2020_07_22_174501_create_blogs_table', 1),
(11, '2020_07_26_105627_add_cloumn_deleted_at_table_categories', 1),
(12, '2020_07_27_081917_create_menus_table', 1),
(13, '2020_07_27_094620_add_column_slug_to_menus_table', 1),
(14, '2020_07_27_141721_add_column_soft_delete_to_menus_table', 1),
(15, '2020_07_29_165507_add_column_feature_image_name', 1),
(16, '2020_08_03_093848_create_settings_table', 1),
(17, '2020_08_03_135637_add_column_type_settings_table', 1),
(18, '2020_08_04_101610_create_permissions_table', 1),
(19, '2020_08_04_101721_create_table_user_role', 1),
(20, '2020_08_04_101844_create_table_permission_role', 1),
(21, '2020_08_05_142114_add_column_parent_id_permissions', 2),
(22, '2020_08_05_153241_add_column_key_permissions_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vipvigame@gmail.com', '$2y$10$M1uuxpfmez7IEIJ2DppQEe.PbztIAdF/95fUG9Vif4TPvCvILP7JG', '2020-08-07 10:01:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `key_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `parent_id`, `key_code`, `created_at`, `updated_at`) VALUES
(2, 'category', 'category', 0, NULL, '2020-08-05 15:17:11', '2020-08-05 15:17:11'),
(3, 'list', 'list', 2, 'category_list', '2020-08-05 15:17:11', '2020-08-05 15:17:11'),
(4, 'add', 'add', 2, 'category_add', '2020-08-05 15:17:11', '2020-08-05 15:17:11'),
(5, 'edit', 'edit', 2, 'category_edit', '2020-08-05 15:17:11', '2020-08-05 15:17:11'),
(6, 'delete', 'delete', 2, 'category_delete', '2020-08-05 15:17:11', '2020-08-05 15:17:11'),
(7, 'product', 'product', 0, NULL, '2020-08-05 15:18:06', '2020-08-05 15:18:06'),
(8, 'list', 'list', 7, 'product_list', '2020-08-05 15:18:06', '2020-08-05 15:18:06'),
(9, 'add', 'add', 7, 'product_add', '2020-08-05 15:18:07', '2020-08-05 15:18:07'),
(10, 'edit', 'edit', 7, 'product_edit', '2020-08-05 15:18:07', '2020-08-05 15:18:07'),
(11, 'delete', 'delete', 7, 'product_delete', '2020-08-05 15:18:07', '2020-08-05 15:18:07'),
(12, 'menu', 'menu', 0, NULL, '2020-08-05 15:18:18', '2020-08-05 15:18:18'),
(13, 'list', 'list', 12, 'menu_list', '2020-08-05 15:18:18', '2020-08-05 15:18:18'),
(14, 'add', 'add', 12, 'menu_add', '2020-08-05 15:18:18', '2020-08-05 15:18:18'),
(15, 'edit', 'edit', 12, 'menu_edit', '2020-08-05 15:18:18', '2020-08-05 15:18:18'),
(16, 'delete', 'delete', 12, 'menu_delete', '2020-08-05 15:18:18', '2020-08-05 15:18:18'),
(17, 'setting', 'setting', 0, NULL, '2020-08-05 15:18:22', '2020-08-05 15:18:22'),
(18, 'list', 'list', 17, 'setting_list', '2020-08-05 15:18:22', '2020-08-05 15:18:22'),
(19, 'add', 'add', 17, 'setting_add', '2020-08-05 15:18:22', '2020-08-05 15:18:22'),
(20, 'edit', 'edit', 17, 'setting_edit', '2020-08-05 15:18:22', '2020-08-05 15:18:22'),
(21, 'delete', 'delete', 17, 'setting_delete', '2020-08-05 15:18:22', '2020-08-05 15:18:22'),
(22, 'user', 'user', 0, NULL, '2020-08-05 15:18:26', '2020-08-05 15:18:26'),
(23, 'list', 'list', 22, 'user_list', '2020-08-05 15:18:26', '2020-08-05 15:18:26'),
(24, 'add', 'add', 22, 'user_add', '2020-08-05 15:18:26', '2020-08-05 15:18:26'),
(25, 'edit', 'edit', 22, 'user_edit', '2020-08-05 15:18:26', '2020-08-05 15:18:26'),
(26, 'delete', 'delete', 22, 'user_delete', '2020-08-05 15:18:26', '2020-08-05 15:18:26'),
(27, 'role', 'role', 0, NULL, '2020-08-05 15:18:29', '2020-08-05 15:18:29'),
(28, 'list', 'list', 27, 'role_list', '2020-08-05 15:18:29', '2020-08-05 15:18:29'),
(29, 'add', 'add', 27, 'role_add', '2020-08-05 15:18:29', '2020-08-05 15:18:29'),
(30, 'edit', 'edit', 27, 'role_edit', '2020-08-05 15:18:29', '2020-08-05 15:18:29'),
(31, 'delete', 'delete', 27, 'role_delete', '2020-08-05 15:18:29', '2020-08-05 15:18:29'),
(32, 'blog', 'blog', 0, NULL, '2020-08-11 14:32:56', '2020-08-11 14:32:56'),
(33, 'list', 'list', 32, 'blog_list', '2020-08-11 14:32:56', '2020-08-11 14:32:56'),
(34, 'add', 'add', 32, 'blog_add', '2020-08-11 14:32:56', '2020-08-11 14:32:56'),
(35, 'edit', 'edit', 32, 'blog_edit', '2020-08-11 14:32:56', '2020-08-11 14:32:56'),
(36, 'delete', 'delete', 32, 'blog_delete', '2020-08-11 14:32:56', '2020-08-11 14:32:56'),
(37, 'order', 'order', 0, NULL, '2020-08-19 01:39:08', '2020-08-19 01:39:08'),
(38, 'list', 'list', 37, 'order_list', '2020-08-19 01:39:08', '2020-08-19 01:39:08'),
(39, 'add', 'add', 37, 'order_add', '2020-08-19 01:39:08', '2020-08-19 01:39:08'),
(40, 'edit', 'edit', 37, 'order_edit', '2020-08-19 01:39:08', '2020-08-19 01:39:08'),
(41, 'admin', 'admin', 0, NULL, '2020-08-19 03:40:42', '2020-08-19 03:40:42'),
(42, 'list', 'list', 41, 'admin_list', '2020-08-19 03:40:42', '2020-08-19 03:40:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 7, 2, NULL, NULL),
(2, 7, 3, NULL, NULL),
(3, 7, 4, NULL, NULL),
(10, 7, 5, NULL, NULL),
(11, 5, 28, NULL, NULL),
(12, 5, 29, NULL, NULL),
(13, 5, 30, NULL, NULL),
(14, 5, 31, NULL, NULL),
(15, 5, 23, NULL, NULL),
(16, 5, 24, NULL, NULL),
(17, 5, 25, NULL, NULL),
(18, 5, 26, NULL, NULL),
(41, 3, 23, NULL, NULL),
(45, 3, 28, NULL, NULL),
(55, 1, 3, NULL, NULL),
(56, 1, 4, NULL, NULL),
(57, 1, 5, NULL, NULL),
(58, 1, 6, NULL, NULL),
(59, 1, 8, NULL, NULL),
(60, 1, 9, NULL, NULL),
(61, 1, 10, NULL, NULL),
(62, 1, 11, NULL, NULL),
(63, 1, 13, NULL, NULL),
(64, 1, 14, NULL, NULL),
(65, 1, 15, NULL, NULL),
(66, 1, 16, NULL, NULL),
(67, 1, 18, NULL, NULL),
(68, 1, 19, NULL, NULL),
(69, 1, 20, NULL, NULL),
(70, 1, 21, NULL, NULL),
(71, 1, 23, NULL, NULL),
(72, 1, 24, NULL, NULL),
(73, 1, 25, NULL, NULL),
(74, 1, 26, NULL, NULL),
(75, 1, 28, NULL, NULL),
(76, 1, 29, NULL, NULL),
(77, 1, 30, NULL, NULL),
(78, 1, 31, NULL, NULL),
(81, 3, 13, NULL, NULL),
(82, 3, 18, NULL, NULL),
(87, 3, 24, NULL, NULL),
(88, 3, 25, NULL, NULL),
(89, 3, 26, NULL, NULL),
(90, 3, 29, NULL, NULL),
(91, 3, 30, NULL, NULL),
(92, 3, 31, NULL, NULL),
(95, 3, 3, NULL, NULL),
(96, 3, 8, NULL, NULL),
(97, 3, 9, NULL, NULL),
(98, 3, 10, NULL, NULL),
(99, 3, 11, NULL, NULL),
(102, 8, 3, NULL, NULL),
(103, 8, 4, NULL, NULL),
(104, 8, 5, NULL, NULL),
(105, 8, 6, NULL, NULL),
(106, 8, 8, NULL, NULL),
(107, 8, 9, NULL, NULL),
(108, 8, 10, NULL, NULL),
(109, 8, 11, NULL, NULL),
(110, 8, 13, NULL, NULL),
(111, 8, 14, NULL, NULL),
(112, 8, 15, NULL, NULL),
(113, 8, 16, NULL, NULL),
(114, 8, 18, NULL, NULL),
(115, 8, 19, NULL, NULL),
(116, 8, 20, NULL, NULL),
(117, 8, 21, NULL, NULL),
(118, 8, 23, NULL, NULL),
(119, 8, 24, NULL, NULL),
(120, 8, 25, NULL, NULL),
(121, 8, 26, NULL, NULL),
(122, 8, 28, NULL, NULL),
(123, 8, 29, NULL, NULL),
(124, 8, 30, NULL, NULL),
(125, 8, 31, NULL, NULL),
(126, 9, 3, NULL, NULL),
(127, 9, 4, NULL, NULL),
(128, 9, 5, NULL, NULL),
(129, 9, 6, NULL, NULL),
(130, 9, 8, NULL, NULL),
(131, 9, 9, NULL, NULL),
(132, 9, 10, NULL, NULL),
(133, 9, 11, NULL, NULL),
(134, 9, 13, NULL, NULL),
(135, 9, 14, NULL, NULL),
(136, 9, 15, NULL, NULL),
(137, 9, 16, NULL, NULL),
(138, 9, 18, NULL, NULL),
(139, 9, 19, NULL, NULL),
(140, 9, 20, NULL, NULL),
(141, 9, 21, NULL, NULL),
(142, 9, 23, NULL, NULL),
(143, 9, 24, NULL, NULL),
(144, 9, 25, NULL, NULL),
(145, 9, 26, NULL, NULL),
(146, 9, 28, NULL, NULL),
(147, 9, 29, NULL, NULL),
(148, 9, 30, NULL, NULL),
(149, 9, 31, NULL, NULL),
(154, 3, 4, NULL, NULL),
(155, 3, 5, NULL, NULL),
(156, 3, 6, NULL, NULL),
(157, 4, 33, NULL, NULL),
(158, 4, 34, NULL, NULL),
(159, 4, 35, NULL, NULL),
(160, 4, 36, NULL, NULL),
(161, 1, 38, NULL, NULL),
(166, 1, 39, NULL, NULL),
(167, 1, 40, NULL, NULL),
(168, 1, 33, NULL, NULL),
(169, 1, 34, NULL, NULL),
(170, 1, 35, NULL, NULL),
(171, 1, 36, NULL, NULL),
(172, 1, 42, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `name_product` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_image_path` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_category`, `name_product`, `link_image`, `feature_image_name`, `feature_image_path`, `price`, `content`, `status`, `created_at`, `updated_at`) VALUES
(6, 7, 'Vina-Cano', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/vinacano-s.jpg', NULL, NULL, 25000, 'Vina-Cano - Vietnamese Americano - an innovative variation of Americano and Vietnamese coffee with filter, creating a drink with a rich aroma that is both modern and imbued with the traditional spirit of the nation.', 1, '2020-08-11 15:57:54', '2020-08-12 07:20:23'),
(7, 7, 'Black Coffee', 'https://cong-news.appwifi.com/wp-content/uploads/2020/08/%C4%91en-%C4%91a%CC%81.jpg', NULL, NULL, 29000, 'It will be a pity if you do not taste Vietnamese coffee once. Intense aroma, bitter taste, mild sweetness, a combination of sophistication and enjoyment', 1, '2020-08-12 07:29:15', '2020-08-12 07:29:15'),
(8, 7, 'Brown Coffee', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/nâu-đá.jpg', NULL, NULL, 35000, 'You will not find anywhere else but Vietnam a cup of Brown Coffee - a strange but perfect combination between bitter black coffee and a little sweet condensed milk.', 1, '2020-08-12 07:34:40', '2020-08-12 07:34:40'),
(9, 7, 'Faint silver', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/bạc-xỉu-s.jpg', NULL, NULL, 39000, 'Its own special Bac Bo is made up of pure coffee and thick coconut milk. Not as bold coffee taste as iced brown, Bac Si is sweet and easy to drink.', 1, '2020-08-12 07:36:12', '2020-08-12 07:36:12'),
(10, 7, 'Coffee W. Fresh Milk', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/caphesuatuoi-s.jpg', NULL, NULL, 35000, 'A light mixture of pure black coffee with local-produced milk brings an exquisite drink to light up the day!', 1, '2020-08-12 07:56:45', '2020-08-12 07:56:45'),
(11, 7, 'Saigoneer Iced Coffee W. Milk', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/suadasaigon-s.jpg', NULL, NULL, 39000, 'Saigoneer Iced Coffee with Milk is a pride of Saigon. A touch of ice combining with the bitterness of black coffee and the creaminess of milk make this drink linger between your conversation with your companion.', 1, '2020-08-12 07:58:10', '2020-08-12 07:58:10'),
(12, 9, 'Lipton Tea', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/tra-lipton-đá.jpg', NULL, NULL, 25000, 'A soft drink with Tea extract and Peace Juice with sugars, Lipton is the best-selling tea branch in the world', 1, '2020-08-12 08:00:49', '2020-08-12 08:00:49'),
(13, 9, 'Vietnamese Green Tea', 'https://cong-news.appwifi.com/wp-content/uploads/2020/08/trà-mạn.jpg', NULL, NULL, 30000, 'Vietnamese Green Tea is a household name for every Vietnamese people. With a high focus on delicate serving quality, Vietnamese Green Tea in Cong Caf&eacute; will be served with Peanut Candy and Mung Bean Cake from the city Hai Duong, suitable for meeting and group discussion.', 1, '2020-08-12 08:02:33', '2020-08-12 08:02:33'),
(14, 9, 'Honey Kumquat Tea', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/traquatmatong.jpg', NULL, NULL, 45000, 'Kumquat and Honey bring a breath of fresh air to traditional tea. Honey Kumquat Tea is the favorite beverage in Cong Caf&eacute; when summer is in full swing.', 1, '2020-08-12 08:03:26', '2020-08-12 08:03:26'),
(15, 9, 'Cinnamon Tea W. Orange', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/tracamque.jpg', NULL, NULL, 45000, 'This is the gateway for you to escape a dull day. A bit of cinnamon is enough to reinvigorate your body, and the fairly sourness from oranges will bring serenity to your day.', 1, '2020-08-12 08:05:03', '2020-08-12 08:05:03'),
(16, 9, 'Peach Tea W. Passion Fruit', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/tradaochanhleo-đá.jpg', NULL, NULL, 45000, 'The flawless blend of Peach with Passion Fruit creates a rich in sweetness and sourness flavor, making this a hard-to-be-missed type of tea in the summer.', 1, '2020-08-12 08:06:17', '2020-08-12 08:06:17'),
(17, 10, 'Espresso', 'https://cong-news.appwifi.com/wp-content/uploads/2020/08/việt-xô.jpg', NULL, NULL, 30000, 'Espresso has a concentrated and sweet flavor of finely ground roasted coffee beans, an ageless beverage for coffee lovers.', 1, '2020-08-12 08:19:32', '2020-08-12 08:19:32'),
(18, 10, 'Americano', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/vinacano-s.jpg', NULL, NULL, 39000, 'Americano is an ideal choice for ones who desire a light flavor of bitterness sourness from the classic Arabica coffee, while still remaining the distinct scent of an Italian espresso cup.', 1, '2020-08-12 08:20:33', '2020-08-12 08:20:33'),
(19, 10, 'Iced Espresso W. Condensed Milk', 'https://cong-news.appwifi.com/wp-content/uploads/2020/08/xô-sữa-đá.jpg', NULL, NULL, 39000, 'Iced Espresso with Condensed Milk: A mixture of sweetness, bitterness and sourness of finely grounded coffee beans and condensed milk create an explosion of flavor on the tip of the tongue.', 1, '2020-08-12 08:23:50', '2020-08-12 08:23:50'),
(20, 10, 'Cappuchino', 'https://cong-news.appwifi.com/wp-content/uploads/2020/08/capuccino.jpg', NULL, NULL, 45000, 'Cappuccino: brewed from an exact ratio of espresso, heated milk and steamed milk foam. The bitterness of coffee and the rich billowy milk are enough to melt the stone of heart.', 1, '2020-08-12 08:24:40', '2020-08-12 08:24:40'),
(21, 10, 'Latte', 'https://cong-news.appwifi.com/wp-content/uploads/2020/08/latte-nóng.jpg', NULL, NULL, 45000, 'Latte: Latte is brewed from freshly grounded coffee beans and heated whole milk, decorating with the Latte Art, making Latte as the &ldquo;muse&rdquo; in the coffee village.', 1, '2020-08-12 08:25:30', '2020-08-12 08:25:30'),
(22, 8, 'Mango', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/xoài.jpg', NULL, NULL, 59000, 'Prepared from the biggest and sweetest mangoes, milk and skimmed milk are added to bring you the delicious and refreshing Mango Smoothie.', 1, '2020-08-12 08:35:47', '2020-08-12 08:35:47'),
(23, 8, 'Avocado', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/bơ.jpg', NULL, NULL, 59000, 'The creamy texture of Avocado, mixing with the sweetness of condensed milk with a touch of ice will melt your heart right away.', 1, '2020-08-12 08:37:38', '2020-08-12 08:37:38'),
(24, 12, 'Fresh Lime', 'https://cong-news.appwifi.com/wp-content/uploads/2020/08/chanh-tuoi.jpg', NULL, NULL, 39000, 'When summer is in full swing, a cup of fresh lime is an optimal choice for hydration and invigoration.', 1, '2020-08-12 08:39:13', '2020-08-12 08:39:13'),
(25, 12, 'Watermelon', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/dua-hau.jpg', NULL, NULL, 49000, 'Rich in nutrition, uplifting and invigorating, Watermelon Juice not only brings you a refreshing sensation but also improves your immune system.', 1, '2020-08-12 08:39:58', '2020-08-12 08:39:58'),
(26, 12, 'Passion Fruit', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/chanh-leo.jpg', NULL, NULL, 49000, 'This is an antioxidant-rich source, providing you with Vitamin A and Vitamin C, Passion Fruit Juice is eager to be your best friend in the summer.', 1, '2020-08-12 08:40:45', '2020-08-12 08:40:45'),
(27, 12, 'Ambarella (Seasonal)', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/cóc.jpg', NULL, NULL, 55000, 'Ambarella Juice is a unique and must-try beverage. It will be served with &Ocirc; mai, only in Cong Caf&eacute;.', 1, '2020-08-12 08:41:55', '2020-08-12 08:41:55'),
(28, 12, 'Mixed: Carrot & Orange', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/cam-carot.jpg', NULL, NULL, 59000, 'An interesting combination of Orange and Carrot will provide you an antioxidant-rich beverage.', 1, '2020-08-12 08:42:44', '2020-08-12 08:42:44'),
(29, 12, 'Orange', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/cam.jpg', NULL, NULL, 65000, 'Orange Juice is a refreshing soft drink and an abundant vitamin C source for the Summer.', 1, '2020-08-12 08:43:37', '2020-08-12 08:43:37'),
(30, 11, 'Passion Fruit Freeze', 'https://cong-news.appwifi.com/wp-content/uploads/2020/08/chanh-leo-tuyết.jpg', NULL, NULL, 55000, 'Passion Fruit flavor is bright and tropical with just the right amount of tartness to balance out the sweetness.', 1, '2020-08-12 08:46:05', '2020-08-12 08:53:26'),
(31, 11, 'Fresh Lime Freeze', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/chanh-tuoi-tuyet.jpg', NULL, NULL, 55000, 'Nothing beats a cold,icy lime sherbet freeze on a hot summer day!Let\'s Fresh Lime Freeze light you up', 1, '2020-08-12 08:54:11', '2020-08-13 14:57:53'),
(32, 15, 'Sunflower Seeds', 'https://cong-news.appwifi.com/wp-content/uploads/2019/03/huongduong.jpg', NULL, NULL, 25000, '', 1, '2020-08-12 08:56:11', '2020-08-12 08:56:11'),
(33, 15, 'Roasted Peanuts', 'https://cong-news.appwifi.com/wp-content/uploads/2019/03/lac.jpg', NULL, NULL, 25000, '', 1, '2020-08-12 08:56:55', '2020-08-12 08:56:55'),
(34, 15, 'Spicy Corn', 'https://cong-news.appwifi.com/wp-content/uploads/2019/03/ngocay.jpg', NULL, NULL, 25000, '', 1, '2020-08-12 08:59:20', '2020-08-12 08:59:20'),
(35, 15, 'Mung Bean Cake/Peanut Candy', 'https://cong-news.appwifi.com/wp-content/uploads/2019/03/dauxanhkeolac.jpg', NULL, NULL, 25000, '', 1, '2020-08-12 09:00:43', '2020-08-12 09:00:43'),
(36, 15, 'Bread/Croissant W. Sweetened Condensed Milk', 'https://cong-news.appwifi.com/wp-content/uploads/2019/03/banhsungbo.jpg', NULL, NULL, 25000, '', 1, '2020-08-12 09:01:40', '2020-08-12 09:01:40'),
(37, 15, 'Vietnamese Dried Beef', 'https://cong-news.appwifi.com/wp-content/uploads/2019/03/bokho.jpg', NULL, NULL, 40000, '', 1, '2020-08-12 09:02:22', '2020-08-12 09:02:22'),
(38, 15, 'Fresh Fruit Platter', 'https://cong-news.appwifi.com/wp-content/uploads/2019/03/Trái-cây-chấm-muối-ớt.jpg', NULL, NULL, 25000, '', 1, '2020-08-12 09:03:24', '2020-08-12 09:03:24'),
(39, 14, 'Hanoi Dracontomelon', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/hanoi-sau.jpg', NULL, NULL, 39000, '', 1, '2020-08-12 09:03:49', '2020-08-12 09:05:15'),
(40, 14, 'Saigon Salted Kumquat', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/saigontacximuoi.jpg', NULL, NULL, 39000, '', 1, '2020-08-12 09:06:25', '2020-08-12 09:06:25'),
(41, 14, 'Salted Lime W. Soda', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/soda-chanh-muoi.jpg', NULL, NULL, 45000, 'Examples are better than 1000 words. Examples are often easier to understand than text explanations. This tutorial supplements all explanations with clarifying \"Try it Yourself\" examples.', 1, '2020-08-12 09:07:24', '2020-08-15 03:19:38'),
(42, 14, 'Vietnam Tapioca', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/botsan.jpg', NULL, NULL, 35000, 'We recommend reading this tutorial, in the sequence listed in the menu.\r\nIf you have a large screen, the menu will always be present on the left.\r\nIf you have a small screen, open the menu by clicking the top menu sign&nbsp;☰.', 1, '2020-08-12 09:10:27', '2020-08-15 03:18:33'),
(43, 14, 'Cacao', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/cacaoda.jpg', NULL, NULL, 59000, 'JavaScript is the world\'s most popular programming language.\r\nJavaScript is the programming language of the Web.\r\nJavaScript is easy to learn.\r\nThis tutorial will teach you JavaScript from basic to advanced.', 1, '2020-08-12 09:12:02', '2020-08-15 03:17:51'),
(44, 14, 'Chocolate', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/socola-da.jpg', NULL, NULL, 59000, 'JavaScript is the world\'s most popular programming language.\r\nJavaScript is the programming language of the Web.\r\nJavaScript is easy to learn.\r\nThis tutorial will teach you JavaScript from basic to advanced.', 1, '2020-08-12 09:14:32', '2020-08-15 03:18:11'),
(45, 13, 'W.Ice', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/schua-da.jpg', NULL, NULL, 35000, 'Plain Yoghurt is very nutritious,and eating it regularly may boost several aspects of your health such as heart disease,osteoporosis as well as aid in weight management.', 1, '2020-08-12 09:16:00', '2020-08-13 14:57:15'),
(46, 13, 'W. Cocoa', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/schua-cacao-1.jpg', NULL, NULL, 35000, 'Rich, creamy and light bitter, this Yogurt W. Cocoa is delicious for a bright day.', 1, '2020-08-12 09:17:59', '2020-08-13 14:57:00'),
(47, 13, 'W. Coffee', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/schua-caphe.jpg', NULL, NULL, 40000, 'Yogurt W. Coffee has a perfect combination of sweetness and tartness with an addictive aroma and bitterness from coffee.', 1, '2020-08-12 09:19:07', '2020-08-13 14:56:49'),
(48, 13, 'W. Fresh Fruit', 'https://cong-news.appwifi.com/wp-content/uploads/2020/07/schua-hoa-qua.jpg', 'nen-tang-aspnet-mvc.png', '/storage/products/5/HiVCSUe6hfL6Sx9bsXrS.png', 55000, 'Plain yoghurt combined with fresh,delicious fruits is ready to help you beat the heat in the summer.', 1, '2020-08-12 09:20:54', '2020-08-16 08:46:16'),
(52, 16, 'Coffee Association', 'https://cdn.cnn.com/cnnnext/dam/assets/150929101049-black-coffee-stock-exlarge-169.jpg', NULL, NULL, 200, 'Coffee has also been shown to reduce the risk of many diseases, including type 2 diabetes, liver disease, colorectal cancer, Alzheimer\'s and skin cancer, too.\r\n\r\n\"Coffee is loaded with antioxidants,\" said Joe DeRupo, a spokesman for the National Coffee Association. \"Many are naturally occurring antioxidants found in the coffee bean, while others are created during the roasting process. It\'s these compounds that science links with positive effects in reducing the risk of several diseases.\"\r\n', 1, '2020-08-20 12:46:43', '2020-08-20 12:46:43'),
(53, 16, 'COOL BEANS', 'https://www.sciencenews.org/wp-content/uploads/2015/09/100315_coffee_opener_NEW_0.jpg', NULL, NULL, 500, 'For a historically mistrusted drink, coffee is proving to be a healthy addiction. Scientific findings in support of coffee&rsquo;s nutritional attributes have been arriving at a steady drip since the 1980s, when Norwegian researchers reported that&nbsp;coffee seemed to fend off&nbsp;liver disease. Since then, the dark brown beverage has shown value against liver cancer, too, as well as type 2 diabetes, heart disease and stroke. Coffee even appears to protect against depression, Parkinson&rsquo;s and Alzheimer&rsquo;s diseases', 1, '2020-08-20 12:48:27', '2020-08-20 12:48:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Quản Trị Hệ Thống', NULL, NULL),
(2, 'guest', 'Khách Hàng', NULL, NULL),
(3, 'dev', 'Phát Triển Hệ Thống', NULL, NULL),
(4, 'content', 'Chỉnh sửa nội dung', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(3, 4, 1, NULL, NULL),
(5, 7, 1, NULL, NULL),
(6, 7, 2, NULL, NULL),
(9, 1, 4, NULL, NULL),
(10, 7, 3, NULL, NULL),
(11, 7, 4, NULL, NULL),
(23, 9, 1, NULL, NULL),
(24, 10, 1, NULL, NULL),
(27, 11, 1, NULL, NULL),
(29, 5, 2, NULL, NULL),
(30, 31, 2, '2020-08-19 07:38:20', '2020-08-19 07:38:20'),
(31, 32, 2, '2020-08-19 15:12:05', '2020-08-19 15:12:05'),
(32, 33, 2, '2020-08-19 17:34:51', '2020-08-19 17:34:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `config_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `config_key`, `config_value`, `created_at`, `updated_at`, `type`) VALUES
(3, 'phone_contact', '0355882001', '2020-08-06 13:55:41', '2020-08-16 10:17:33', 'text'),
(4, 'about_contact', 'A small river named Duden flows by their place and supplies.', '2020-08-17 02:44:04', '2020-08-17 02:44:04', 'textarea'),
(5, 'addressDetail_contact', 'Số 8 Tôn Thất Thuyết , Nam Từ Liêm , Mỹ Đình , Hà Nội', '2020-08-17 02:44:47', '2020-08-17 02:45:10', 'text'),
(6, 'address_contact', 'Số 8 Tôn Thất Thuyết', '2020-08-17 02:45:29', '2020-08-17 02:45:29', 'text'),
(7, 'open_door', 'Monday-Saturday', '2020-08-17 02:46:49', '2020-08-17 02:46:49', 'text'),
(8, 'time-open-close', '8:00am - 11:00pm', '2020-08-17 02:47:32', '2020-08-17 02:47:32', 'text'),
(9, 'email_contact_1', 'longpvth1907014@fpt.edu.vn', '2020-08-17 02:54:49', '2020-08-17 02:57:49', 'text'),
(10, 'email_contact_2', 'minhnghianmth1907015@fpt.edu.vn', '2020-08-17 02:58:18', '2020-08-17 02:58:18', 'text'),
(11, 'Made-by_footer', 'VGC', '2020-08-17 02:59:38', '2020-08-17 02:59:38', 'text'),
(12, 'link instagram', 'sdfa', '2020-08-17 08:32:17', '2020-08-17 08:32:30', 'text');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CMTND` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `birthday`, `gender`, `address`, `district`, `city`, `CMTND`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Test', '', '0000-00-00', '0', '', '', '', '', 0, 'test@gmail.com', NULL, '$2y$10$1iYK5tUpE3k6/2KP0GQyTOzB6FWNiwIIUnBl/GPT2sNcxpAFFrV32', NULL, '2020-08-04 10:14:57', '2020-08-19 04:02:27'),
(9, 'Long', '', '0000-00-00', '0', '', '', '', '', 0, 'phivanlong@gmail.com', NULL, '$2y$10$AUIL6WkBjFjZRVRdISNL3.5Ja16P1vT39Sz6bUGOAy5Nx3g6tloJK', 'ICrCIoLeKHoOFFqnbDOUbBafH6kbCPkCn4yqDiWDHS0vl6gJmfqqDXo9FNMv', '2020-08-07 10:18:01', '2020-08-13 10:09:14'),
(11, 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$BEC3DPVx4AoukRy8EFphcut3GHgp16QmUTyDYmYrDcVn0eD/h9JGq', NULL, '2020-08-13 13:36:34', '2020-08-13 13:36:34'),
(12, 'Menu100', NULL, '2020-08-05', 'Nam', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '12456547', 355882001, 'vipvigame@gmail.com', NULL, '$2y$10$aFC9W0fBe8uPUlS.rPdl1uTtIgwBqChpj00a6EHe2UidtRoJz/0IO', NULL, '2020-08-14 08:37:42', '2020-08-14 08:37:42'),
(13, 'Long123', NULL, '2020-08-04', 'Nu', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '12456547124', 355882001, 'vipvigame12345@gmail.com', NULL, '$2y$10$SUKCYTSx/WoBEaEzAR0SMuJZ2DlSWIfUwvCUg2jmFrvgw.Qxpu1d2', NULL, '2020-08-14 08:44:38', '2020-08-14 08:44:38'),
(14, 'Nam', NULL, '2020-08-18', 'Nu', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '124565471243', 355882001, 'vipvigame1@gmail.com', NULL, '$2y$10$3Xb1Sk8yfE29B6rNNKu9Zu8TWQoy9oGb2Gy0kAP4A0jUYEZTujHKe', NULL, '2020-08-14 08:45:57', '2020-08-14 08:45:57'),
(16, 'Nam', NULL, '2020-08-18', 'Nu', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '124565471243', 355882001, 'vipvigame1111@gmail.com', NULL, '$2y$10$czmKF3seJ21TYfZXFl5xP.7GhH19PAGnGFoMh6TuCrhXrgT905qZ.', NULL, '2020-08-14 08:46:50', '2020-08-14 08:46:50'),
(18, 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test1111111111@gmail.com', NULL, '$2y$10$v1QHpIYVjtCEZqEnc6BIAOu9GjsdKsQX1bV8PqbOA8er79gofST3S', NULL, '2020-08-14 08:49:39', '2020-08-14 08:49:39'),
(19, 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test1111111111111111@gmail.com', NULL, '$2y$10$ijkJa2.0itXm.bO24cpSiOAWZyTQeREdgeEaPzFobhZM0jsTluDQ6', NULL, '2020-08-14 08:50:18', '2020-08-14 08:50:18'),
(20, 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test11111111111@gmail.com', NULL, '$2y$10$tTRdvbNZyArf4gUNinQOK.AIZ0udzAyhAd0tm2Q.M0IquJchWu9Ea', NULL, '2020-08-14 08:50:34', '2020-08-14 08:50:34'),
(24, 'Nam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trinhduckthanh@gmail.com', NULL, '$2y$10$ejPlP.KfDNIs2MMQ/9mMXeQtaEYasBRrPNtpOn8OQaxd2UcIQftwC', NULL, '2020-08-14 09:09:51', '2020-08-14 09:09:51'),
(25, 'Longne', 'Phi Van Long', '2001-09-01', 'Nam', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '1245654712', 355882001, 'longpvth1907014@fpt.edu.vn', NULL, '$2y$10$DXoBNXSm4ByEvP3uaNusZeYEJuZwfsuDhiFv8tGLGCvylnKchdYga', NULL, '2020-08-16 09:03:22', '2020-08-16 09:03:22'),
(27, 'Long123123', NULL, '2020-08-21', 'Nam', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '12456547', 355882001, 'test1111@gmail.com', NULL, '$2y$10$qB/jRef1IpM3fhufhukxueuKyNSQFmCUEio8ZzhtSSpZIWMWjXEhy', NULL, '2020-08-19 07:17:08', '2020-08-19 07:17:08'),
(28, 'Thiem Phu', NULL, '2020-08-21', 'Nam', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '12456547', 355882001, 'tes12345@gmail.com', NULL, '$2y$10$vjLFePqoZ.23G4UUQ3NlMOEEp0ObafyvOFrE8X.Rw21ysfbnk7sh6', NULL, '2020-08-19 07:31:55', '2020-08-19 07:31:55'),
(29, 'Thiem Phu1', NULL, '2020-08-20', 'Nam', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '12456547', 355882001, 'tes123345@gmail.com', NULL, '$2y$10$/TrE6W5uwImpqr.BSnl.8ePRUCTFGnaKCyaRx6qVeUT.RWNmWt0IO', NULL, '2020-08-19 07:33:57', '2020-08-19 07:33:57'),
(30, 'ThiPhu12', NULL, '2020-08-20', 'Nam', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '12456547', 355882001, 'tes12334564@gmail.com', NULL, '$2y$10$f1sj3OhTO.8DQevv61MGVOgpQyGf7uVnqU.kVZyGrMsopZpm6saAe', NULL, '2020-08-19 07:35:01', '2020-08-19 07:35:01'),
(31, 'Thihu12', NULL, '2020-08-20', 'Nam', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '12456547', 355882001, 'tes123345645@gmail.com', NULL, '$2y$10$T6x6DaWlliitiYXLYQpEaunKnfCXax6vooNzhVuoCwtFS8vvzHEv.', NULL, '2020-08-19 07:38:20', '2020-08-19 07:38:20'),
(32, 'khach hang', NULL, '2020-08-22', 'Nam', 'Quảng Ninh', 'Vang Danh', 'Uong Bi', '033388201', 355882001, 'khachhang@gmail.com', NULL, '$2y$10$fCLvP0lFnCgpG2Dd0j95fOuw.lsz6rt5DRAxVtU3xO/8aFNl7r.ky', NULL, '2020-08-19 15:12:05', '2020-08-19 15:12:05'),
(33, 'dung', NULL, '2020-08-06', 'Nam', 'Thu Dau', 'Canh To', 'Mu', '147228369', 14789632, 'dung@gmail.com', NULL, '$2y$10$j.jhtD32boHzwLE600UNQu2U.L/feoTgJMuk9G7R23ZV6BXG2uZwe', NULL, '2020-08-19 17:34:51', '2020-08-19 17:34:51');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_id_bill_foreign` (`id_bill`),
  ADD KEY `bill_details_id_product_foreign` (`id_product`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_id_user_foreign` (`id_user`),
  ADD KEY `feedback_id_billdetail_foreign` (`id_billdetail`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_category_foreign` (`id_category`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_details_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_id_billdetail_foreign` FOREIGN KEY (`id_billdetail`) REFERENCES `bill_details` (`id`),
  ADD CONSTRAINT `feedback_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
