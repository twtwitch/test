-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `smoke`
--
CREATE DATABASE IF NOT EXISTS `smoke` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `smoke`;

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`id`, `email`, `password`, `name`) VALUES
(1, '123@123', '202cb962ac59075b964b07152d234b70', '123'),
(2, '453@453', '202cb962ac59075b964b07152d234b70', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `cart`
--

INSERT INTO `cart` (`id`, `name`, `image`, `price`) VALUES
(1, '辣味醬', '../material/img/p-shop__flavors1.svg', '450'),
(2, '芥末醬', '../material/img/p-shop__flavors2.svg', '450'),
(3, '酸辣醬', '../material/img/p-shop__flavors3.svg', '450'),
(4, '海鮮粉', '../material/img/p-shop__flavors4.svg', '300');

-- --------------------------------------------------------

--
-- 資料表結構 `commodities`
--

CREATE TABLE `commodities` (
  `id` int(11) NOT NULL,
  `catogory` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `commodities`
--

INSERT INTO `commodities` (`id`, `catogory`, `name`, `image`, `price`) VALUES
(1, '經典系列', '辣味醬', '../material/img/p-shop__flavors1.svg', '450'),
(2, '經典系列', '芥末醬', '../material/img/p-shop__flavors2.svg', '450'),
(3, '經典系列', '酸辣醬', '../material/img/p-shop__flavors3.svg', '450'),
(4, '經典系列', '海鮮粉', '../material/img/p-shop__flavors4.svg', '300'),
(5, '經典系列', '迷迭香葉', '../material/img/p-shop__flavors5.svg', '300'),
(6, '經典系列', '胡椒鹽', '../material/img/p-shop__flavors6.svg', '300'),
(7, '周邊商品', '十周年T-shit', '../material/img/p-shop__other1.svg', '1000'),
(8, '周邊商品', '雞T-shit', '../material/img/p-shop__other2.svg', '700'),
(9, '周邊商品', '牛T-shit', '../material/img/p-shop__other3.svg', '700'),
(10, '周邊商品', '動物T-shit', '../material/img/p-shop__other4.svg', '700'),
(11, '周邊商品', 'VIP會員卡', '../material/img/p-shop__other5.svg', '500'),
(12, '周邊商品', '普通會員卡', '../material/img/p-shop__other6.svg', '200'),
(13, '精品組合', '醬料組合', '../material/img/p-shop__kit1.svg', '1200'),
(14, '精品組合', '研磨組合', '../material/img/p-shop__kit2.svg', '1200');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `commodities`
--
ALTER TABLE `commodities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
