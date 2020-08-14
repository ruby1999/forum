SELECT categoryID FROM category WHERE categoryID = 1;
SELECT p.* FROM pages p WHERE categoryID IN (SELECT categoryID FROM category WHERE categoryID = 1)

ANS SELECT p.* FROM pages p WHERE categoryID IN (SELECT id FROM category WHERE categoryID = 1)

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 08 月 13 日 06:32
-- 伺服器版本： 5.7.29-0ubuntu0.18.04.1
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- 資料庫： `forumcoffee`
--

-- --------------------------------------------------------

--
-- 資料表結構 `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
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
(14, '品牌故事', 'mirrorMousse', 7),
(15, 'Wooly Caffee', 'wooly', 3),
(16, '風雨珈琲', 'forum', 3),
(17, '友美子珈琲', 'yumico', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `pages` (`id`, `name`, `tag`, `introduct`, `description`, `address`, `phone`, `facebook`, `instagram`, `categoryID`, `created_at`, `updated_at`) VALUES
(1, '鐵觀音巴斯克', NULL, '鐵觀音巴斯克鐵觀音巴斯克', '鐵觀音巴斯克鐵觀音巴斯克', NULL, NULL, NULL, NULL, 10, '2020-08-11 06:44:50', '2020-08-11 06:44:50'),
(2, '芒果鳳梨冰茶', NULL, '芒果鳳梨冰茶', '芒果鳳梨冰茶芒果鳳梨冰茶', NULL, NULL, NULL, NULL, 8, '2020-08-11 06:44:50', '2020-08-11 06:44:50'),
(3, '優惠貼文1', NULL, '優惠貼文1', '優惠貼文1優惠貼文1', NULL, NULL, NULL, NULL, 4, '2020-08-11 06:44:50', '2020-08-11 06:44:50'),
(4, '日常消息1', NULL, '日常消息', '日常消息日常消息', NULL, NULL, NULL, NULL, 5, '2020-08-11 06:44:50', '2020-08-11 06:44:50'),
(5, '小宇宙', NULL, '小宇宙', '小宇宙小宇宙', NULL, NULL, NULL, NULL, 11, '2020-08-11 06:44:50', '2020-08-11 06:44:50');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- 資料表索引 `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`);
COMMIT;
