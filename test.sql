-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 08 月 10 日 09:47
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
-- 資料表結構 `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `tests`
--

INSERT INTO `tests` (`id`, `name`, `categoryID`) VALUES
(1, '活動消息', 0),
(2, '關於我們', 0),
(3, '菜單', 0),
(4, '優惠活動', 1),
(5, '日常消息', 1),
(6, '飲料', 2),
(7, '甜點', 2),
(8, '冰茶', 3),
(9, '調飲', 3),
(10, '乳酪', 4),
(11, '鏡面', 4),
(12, '戚風', 4);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
