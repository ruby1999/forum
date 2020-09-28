-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 09 月 28 日 10:53
-- 伺服器版本： 5.7.29-0ubuntu0.18.04.1
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `forumcoffee`
--

-- --------------------------------------------------------

--
-- 資料表結構 `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '類別id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '類別名稱',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '建立日期',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '風雨日記', '2020-08-05 08:18:19', '2020-08-05 08:18:19'),
(2, '優惠活動', '2020-08-05 08:18:19', '2020-08-05 08:18:19'),
(3, '飲品', '2020-08-05 08:18:19', '2020-08-05 08:18:19'),
(4, '甜塔', '2020-08-05 08:18:19', '2020-08-05 08:18:19'),
(5, '戚風', '2020-08-05 08:18:19', '2020-08-05 08:18:19'),
(6, '測試分類', '2020-08-31 06:29:56', '2020-08-31 06:29:56'),
(7, '測試分類', '2020-08-31 06:31:55', '2020-08-31 06:31:55'),
(8, '測試分類', '2020-08-31 06:32:12', '2020-08-31 06:32:12'),
(9, '測試分類', '2020-08-31 06:34:46', '2020-08-31 06:34:46'),
(10, '測試分類', '2020-08-31 06:34:57', '2020-08-31 06:34:57');

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `categoryID`) VALUES
(1, '活動消息', 'post', 0),
(2, '菜單', 'menu', 0),
(3, '關於我們', 'about', 0),
(4, '優惠活動', 'salePost', 1),
(5, '日常消息', 'dailyPost', 1),
(6, '飲料', 'drink', 2),
(7, '甜點', 'dessert', 2),
(8, '冰茶', 'iceTea', 6),
(9, '調飲', 'milktea', 6),
(10, '乳酪', 'cheeseCake', 7),
(11, '鏡面', 'mirrorMousse', 7),
(12, '戚風', 'chiffon', 7),
(13, '聯絡我們', 'contact', 0),
(14, '品牌故事', 'story', 3),
(15, 'Wooly Caffee', 'wooly', 3),
(16, '風雨珈琲', 'forum', 3),
(17, '友美子珈琲', 'yumico', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(55, '2014_10_12_000000_create_users_table', 1),
(56, '2014_10_12_100000_create_password_resets_table', 1),
(57, '2020_07_16_074852_create_categories_table', 1),
(58, '2020_07_16_075801_create_tags_table', 1),
(59, '2020_07_16_075839_create_stores_table', 1),
(60, '2020_07_16_075911_create_posts_table', 1),
(61, '2020_07_16_075942_create_products_table', 1),
(62, '2020_07_16_080200_create_store_tag_table', 1),
(63, '2020_07_16_080300_create_product_tag_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` int(11) DEFAULT NULL,
  `introduct` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoryID` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `tag`, `introduct`, `description`, `address`, `phone`, `facebook`, `instagram`, `categoryID`, `created_at`, `updated_at`) VALUES
(1, '鐵觀音巴斯克', 'tiegunen', NULL, '鐵觀音巴斯克鐵觀音巴斯克', '鐵觀音巴斯克鐵觀音巴斯克', NULL, NULL, NULL, NULL, 10, '2020-08-11 06:44:50', '2020-08-11 06:44:50'),
(2, '芒果鳳梨冰茶', 'pinapple', NULL, '芒果鳳梨冰茶', '芒果鳳梨冰茶芒果鳳梨冰茶', NULL, NULL, NULL, NULL, 8, '2020-08-11 06:44:50', '2020-08-11 06:44:50'),
(3, '優惠貼文', 'sales1', NULL, '優惠貼文', '優惠貼文優惠貼文', NULL, NULL, NULL, NULL, 4, '2020-08-11 06:44:50', '2020-08-11 06:44:50'),
(4, '日常消息', 'daily1', NULL, '日常消息', '日常消息日常消息', NULL, NULL, NULL, NULL, 5, '2020-08-11 06:44:50', '2020-08-11 06:44:50'),
(5, '小宇宙', 'yuchou', NULL, '小宇宙', '小宇宙小宇宙', NULL, NULL, NULL, NULL, 11, '2020-08-11 06:44:50', '2020-08-11 06:44:50');

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '貼文id',
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '貼文名稱',
  `category_id` int(10) UNSIGNED DEFAULT NULL COMMENT '貼文_類別_id',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '貼文圖片',
  `introduction` longtext COLLATE utf8mb4_unicode_ci COMMENT '簡述',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT '描述',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '建立日期',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `image`, `introduction`, `description`, `created_at`, `updated_at`) VALUES
(1, '2020/07/22', 1, '1595398234.jpg', '<p>新鮮無花果大家有吃過嗎？ 淡淡的清甜香味，軟嫩口感激似水蜜桃 較不常見的新鮮無花果 除了營養價值高外售價也偏高 但是為了給大家特別的口味 我們捏大腿也要訂下去😂😂 有看到它在架上就別猶豫了 不是每個地方都吃的到啊！！ 「無花果紅玉戚風」 今天有切片販售～</p>', '<p>新鮮無花果大家有吃過嗎？ 淡淡的清甜香味，軟嫩口感激似水蜜桃 較不常見的新鮮無花果 除了營養價值高外售價也偏高 但是為了給大家特別的口味 我們捏大腿也要訂下去😂😂 有看到它在架上就別猶豫了 不是每個地方都吃的到啊！！ 「無花果紅玉戚風」 今天有切片販售～</p>', '2020-08-05 08:27:26', '2020-08-13 08:39:04'),
(2, '2020/07/23', 1, '1595398234.jpg', '大考結束了！！恭喜所有辛苦的考生們\n            用夏季獨有的香甜滋味來好好慶祝一下吧\n            \n            充滿炭香醇厚的鐵觀音戚風\n            夾層荔枝果凍放入滿滿的荔枝果肉\n            這款清爽系的茶戚風\n            絕對是我們這個夏季自豪的代表作\n            極力推薦給需要慶生蛋糕的朋友們\n            這麼獨特的口味\n            讓壽星驚艷一下許的願望都成真～\n            荔枝盛產季節，歡迎整模預訂喔', '大考結束了！！恭喜所有辛苦的考生們\n            用夏季獨有的香甜滋味來好好慶祝一下吧\n            \n            充滿炭香醇厚的鐵觀音戚風\n            夾層荔枝果凍放入滿滿的荔枝果肉\n            這款清爽系的茶戚風\n            絕對是我們這個夏季自豪的代表作\n            極力推薦給需要慶生蛋糕的朋友們\n            這麼獨特的口味\n            讓壽星驚艷一下許的願望都成真～\n            荔枝盛產季節，歡迎整模預訂喔', '2020-08-05 08:27:26', '2020-08-05 08:27:26'),
(3, '七月份優惠', 2, '1595398234.jpg', '放暑假了! 七月份限定優惠\n            蛋糕搭配飲品折價20元\n            快揪朋友一起來吃甜甜吧', '放暑假了! 七月份限定優惠\n            蛋糕搭配飲品折價20元\n            快揪朋友一起來吃甜甜吧', '2020-08-05 08:27:26', '2020-08-05 08:27:26'),
(4, '八月份優惠', 2, '1595398234.jpg', '爸爸的蛋糕來了～！\n            是說父親節好像比較沒有詢問熱度\n            咖嘛！爸爸也是等同重要的好嗎～\n            \n            說到老爸，當然就是要以茶來入糕呀！\n            焙茶、抹茶、玄米茶都吃過了\n            那麼今年來點不一樣的好嗎\n            嚴選兩款台茶（炭焙烏龍/ 四季春）作為主角\n            與不同食材風味搭配測試\n            推出了一款生乳慕斯及一款戚風給大家選\n            每次都推兩款真是燒光不少腦細胞\n            不過沒關係我們就是那麼誠意十足的甜點狂人！', '爸爸的蛋糕來了～！\n            是說父親節好像比較沒有詢問熱度\n            咖嘛！爸爸也是等同重要的好嗎～\n            \n            說到老爸，當然就是要以茶來入糕呀！\n            焙茶、抹茶、玄米茶都吃過了\n            那麼今年來點不一樣的好嗎\n            嚴選兩款台茶（炭焙烏龍/ 四季春）作為主角\n            與不同食材風味搭配測試\n            推出了一款生乳慕斯及一款戚風給大家選\n            每次都推兩款真是燒光不少腦細胞\n            不過沒關係我們就是那麼誠意十足的甜點狂人！', '2020-08-05 08:27:26', '2020-08-05 08:27:26'),
(20, '荔枝', NULL, NULL, '吼', '吼吼', '2020-08-14 07:14:36', '2020-08-14 07:14:36'),
(21, '荔枝', NULL, NULL, '吼', '吼吼', '2020-08-14 07:18:23', '2020-08-14 07:18:23'),
(22, '完整的10000', NULL, NULL, '完整的10000', '完整的10000', '2020-08-14 07:23:46', '2020-08-14 07:23:46'),
(23, '凡ㄝ', NULL, NULL, '凡ㄝ', '凡ㄝ', '2020-08-14 07:24:06', '2020-08-14 07:24:06'),
(24, '哈哈哈哈', 1, NULL, '哈哈哈哈', '哈哈哈哈', '2020-08-14 07:24:58', '2020-08-14 07:24:58'),
(25, '哈哈哈哈', 1, NULL, '哈哈哈哈', '哈哈哈哈', '2020-08-14 07:26:56', '2020-08-14 07:26:56'),
(26, 'WHYYYY', 1, NULL, 'WHYYYY', 'WHYYYY', '2020-08-14 07:27:21', '2020-08-14 07:27:21'),
(27, 'BBB', 1, NULL, 'BBBBBB', 'BBBBBBBBBB', '2020-08-17 03:15:20', '2020-08-17 03:15:20'),
(28, 'dsfcdsfc', 1, NULL, 'dsfds', 'dvfsv', '2020-08-17 03:20:57', '2020-08-17 03:20:57'),
(29, 'vffsg', 1, NULL, 'dfbdfb', 'dfbbdgf', '2020-08-17 03:25:23', '2020-08-17 03:25:23'),
(30, 'dgfbh', 1, NULL, 'dgfbh', 'gfnbgf', '2020-08-17 03:28:33', '2020-08-17 03:28:33'),
(31, 'fgedgb', 1, NULL, 'dfgbdt', 'dtgfbhndgf', '2020-08-17 03:39:14', '2020-08-17 03:39:14'),
(32, 'fgedgb', 1, NULL, 'dfgbdt', 'dtgfbhndgf', '2020-08-17 03:39:57', '2020-08-17 03:39:57'),
(33, 'fgedgb', 1, NULL, 'dfgbdt', 'dtgfbhndgf', '2020-08-17 03:41:49', '2020-08-17 03:41:49'),
(34, 'dfsvgdfbh', 1, NULL, 'gfbhnrtgfsbhnr', 'nrygsntynty', '2020-08-17 03:41:57', '2020-08-17 03:41:57'),
(35, 'DSDSF', 1, NULL, 'DFASCAESF', 'AFCS', '2020-08-17 04:47:45', '2020-08-17 04:47:45');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '產品id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品名稱',
  `category_id` int(10) UNSIGNED NOT NULL COMMENT '產品_類別_id',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品slug',
  `introduction` longtext COLLATE utf8mb4_unicode_ci COMMENT '簡述',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT '描述',
  `price` int(11) NOT NULL COMMENT '產品價錢',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '產品圖片',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '建立日期',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `tag_id` int(10) UNSIGNED NOT NULL COMMENT '標籤id',
  `product_id` int(10) UNSIGNED NOT NULL COMMENT '產品id',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '建立日期',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '店鋪id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '店鋪名稱',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '店鋪slug',
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '店鋪標籤',
  `introduction` longtext COLLATE utf8mb4_unicode_ci COMMENT '店鋪簡述',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT '店鋪描述',
  `address` text COLLATE utf8mb4_unicode_ci COMMENT '店鋪地址',
  `tel` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '店鋪電話',
  `store_IG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '店鋪IG',
  `store_FB` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '店鋪FB',
  `open_time` time DEFAULT NULL COMMENT '開店時間',
  `colse_time` time DEFAULT NULL COMMENT '閉店時間',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '建立日期',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `store_media`
--

CREATE TABLE `store_media` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'store_media_id',
  `store_id` int(10) UNSIGNED NOT NULL COMMENT '店鋪id',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '店鋪圖片',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '建立日期',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `store_tag`
--

CREATE TABLE `store_tag` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `tag_id` int(10) UNSIGNED NOT NULL COMMENT '標籤id',
  `store_id` int(10) UNSIGNED NOT NULL COMMENT '產品id',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '建立日期',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '標籤id',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標籤名稱',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '建立日期',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- 資料表索引 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- 資料表索引 `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tag_tag_id_index` (`tag_id`),
  ADD KEY `product_tag_product_id_index` (`product_id`);

--
-- 資料表索引 `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stores_slug_unique` (`slug`),
  ADD UNIQUE KEY `stores_tag_unique` (`tag`);

--
-- 資料表索引 `store_media`
--
ALTER TABLE `store_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_media_store_id_index` (`store_id`);

--
-- 資料表索引 `store_tag`
--
ALTER TABLE `store_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_tag_tag_id_index` (`tag_id`),
  ADD KEY `store_tag_store_id_index` (`store_id`);

--
-- 資料表索引 `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '類別id', AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '貼文id', AUTO_INCREMENT=36;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '產品id';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '店鋪id';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `store_media`
--
ALTER TABLE `store_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'store_media_id';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `store_tag`
--
ALTER TABLE `store_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '標籤id';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
