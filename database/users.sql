-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2024 г., 19:21
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `larvelauth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `admin` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '1718281803.png',
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `gender` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `email`, `email_verified_at`, `password`, `banned`, `remember_token`, `created_at`, `updated_at`, `avatar`, `phone`, `city`, `bio`, `age`, `gender`) VALUES
(1, 'Aaron', NULL, 'Aaron@mail.ru', NULL, '$2y$12$yfvwPabxyOdobLVKBA56VOJX/5K4fXzEr.4Io2xQn000IXRO0lyvO', 0, NULL, '2024-06-13 14:06:02', '2024-06-13 14:06:02', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(2, 'Abraham', NULL, 'Abraham@mail.ru', NULL, '$2y$12$iQFdiFr6XnoIQ9Yv.38W2ukpEc16ocq9v0UeEe66jrXPToubR652q', 0, NULL, '2024-06-13 14:06:17', '2024-06-13 14:06:17', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(3, 'Adam', NULL, 'Adam@mail.ru', NULL, '$2y$12$rx2OIMPi4AiRV04qBwRs9urf1enVizAxo5fRKT.XwEnlDcfs2P.1a', 0, NULL, '2024-06-13 14:06:23', '2024-06-13 14:06:23', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(4, 'Adrian', NULL, 'Adrian@mail.ru', NULL, '$2y$12$l06L5JqtfO03nX7CeF9uUOAiRgLDIMWmZhFjUGdMBt79.wxCQKT7.', 0, NULL, '2024-06-13 14:06:28', '2024-06-13 14:06:28', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(5, 'Aidan', NULL, 'Aidan@mail.ru', NULL, '$2y$12$zHO8UhkZQkOKvvuIG.SmzuIrWIpHAbIGwHoUqw0DZdJj/NKA3nWNO', 0, NULL, '2024-06-13 14:06:33', '2024-06-13 14:06:33', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(6, 'Alan', NULL, 'Alan@mail.ru', NULL, '$2y$12$ue4q2gy8YUOD8sFjk9ZUWOXbim3dJH.cW0nORarACOLQCsBrJbdp6', 0, NULL, '2024-06-13 14:06:37', '2024-06-13 14:06:37', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(7, 'Albert', NULL, 'Albert@mail.ru', NULL, '$2y$12$nen6rFL3B3WcKQtSb0kuiO50KOLIwL/bbBHPajXX5gyAYiu4U5AyW', 0, NULL, '2024-06-13 14:06:40', '2024-06-13 14:06:40', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(8, 'Alejandro', NULL, 'Alejandro@mail.ru', NULL, '$2y$12$P3I4pRN2ySRJTTGbu8WdSeX5koGcX2p8kt6SNQJTnUfFsbBMnZmUi', 0, NULL, '2024-06-13 14:06:45', '2024-06-13 14:06:45', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(9, 'Alex', NULL, 'Alex@mail.ru', NULL, '$2y$12$DCAEHa5zOAdjB5P0C76nZeBRZn2S9LZdTfqxxHP4tbqfmuz2MiTYO', 0, NULL, '2024-06-13 14:06:50', '2024-06-13 14:06:50', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(10, 'Alexander', NULL, 'Alexander@mail.ru', NULL, '$2y$12$afN8wR45Ca2zcy.ePjDlXealTRbgmwdaqzGtrt8xgULBpxYguJwKa', 0, NULL, '2024-06-13 14:06:54', '2024-06-13 14:06:54', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(11, 'Alfred', NULL, 'Alfred@mail.ru', NULL, '$2y$12$X5iDk2qSQ9QyDxer9Rv/deeW/Y0IiPnSMZWE.F.9kE/vePXIx9wPm', 0, NULL, '2024-06-13 14:06:58', '2024-06-13 14:06:58', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(12, 'Andrew', NULL, 'Andrew@mail.ru', NULL, '$2y$12$fd7aIDYyWDI04Rgk9d5WcOV2YMOpSwwr9MssSVBshO16Ss3kFq//y', 0, NULL, '2024-06-13 14:07:02', '2024-06-13 14:07:02', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(13, 'Angel', NULL, 'Angel@mail.ru', NULL, '$2y$12$uzD2z5BGLt53plIfZmuwde/XzIWSikK/I8KH./6adE1wjCe8sTZCO', 0, NULL, '2024-06-13 14:07:05', '2024-06-13 14:07:05', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(14, 'Anthony', NULL, 'Anthony@mail.ru', NULL, '$2y$12$LoCQpYmED4QPpOjME3BJ.uS3uz5LSFpwA1tVZSufTJrp6VpWC.0Jy', 0, NULL, '2024-06-13 14:07:10', '2024-06-13 14:07:10', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(15, 'Antonio', NULL, 'Antonio@mail.ru', NULL, '$2y$12$AO06u8foNs8fykCtL8XxLulbb92e.lH72RyWl/oEChToXHIY.5wTC', 0, NULL, '2024-06-13 14:07:15', '2024-06-13 14:07:15', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(16, 'Ashton', NULL, 'Ashton@mail.ru', NULL, '$2y$12$BLL8JRdk47YvBszkETK.RONOgIdrVvoa/Pgk7nCyvy.teqhU25DXi', 0, NULL, '2024-06-13 14:07:19', '2024-06-13 14:07:19', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(17, 'Austin', NULL, 'Austin@mail.ru', NULL, '$2y$12$9N/NB6OtB0lEfipsSrigXuvhFeK214jfWRbcAFua4KLoL8xtKNLp2', 0, NULL, '2024-06-13 14:07:23', '2024-06-13 14:07:23', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(18, 'Benjamin', NULL, 'Benjamin@mail.ru', NULL, '$2y$12$tNQ2qFt4duaDUos2pYUXTO//zB/5LUQfITxxVLjvr0Prt7HneeUC6', 0, NULL, '2024-06-13 14:07:29', '2024-06-13 14:07:29', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(19, 'Bernard', NULL, 'Bernard@mail.ru', NULL, '$2y$12$6vzPGNfRLo1HjD5qwJj.beUs34f/zmNzEaClNv9K.b7.267OmcJLG', 0, NULL, '2024-06-13 14:07:34', '2024-06-13 14:07:34', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(20, 'Blake', NULL, 'Blake@mail.ru', NULL, '$2y$12$NqgF7PuQlbZ1hZYyvQCAQ.u9.A98iiQYkl0p2UtWwJFOOPu5HPZNO', 0, NULL, '2024-06-13 14:07:37', '2024-06-13 14:07:37', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(21, 'Brandon', NULL, 'Brandon@mail.ru', NULL, '$2y$12$6xn25I81x2TgrcKMdjKfuOji6Ins/lw0KOuMtOVRqfU4HK6OpsulS', 0, NULL, '2024-06-13 14:07:41', '2024-06-13 14:07:41', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(22, 'Brian', NULL, 'Brian@mail.ru', NULL, '$2y$12$PTUPyGuM1UrpV.2gtJgp.eBt2/Jbp.M4MHh5rZXbjbNxB1N1gAM.q', 0, NULL, '2024-06-13 14:07:45', '2024-06-13 14:07:45', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(23, 'Bruce', NULL, 'Bruce@mail.ru', NULL, '$2y$12$2p/25nreYSupBIvsv2OaQ.9/52d5gf5Ml6FVbMMMhNBKsNzkr6vhy', 0, NULL, '2024-06-13 14:07:48', '2024-06-13 14:07:48', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(24, 'Bryan', NULL, 'Bryan@mail.ru', NULL, '$2y$12$JjZ3y/CvM4IsLNgPhCe1H.YOg2vjRH8hSB8c24nB6f8CvjqbR8ixq', 0, NULL, '2024-06-13 14:07:53', '2024-06-13 14:07:53', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(25, 'Cameron', NULL, 'Cameron@mail.ru', NULL, '$2y$12$ot3io0YEsTOxTf44vvl2mOu13Fnd.TuaCmWaqXC6UtiENxlcbrWFa', 0, NULL, '2024-06-13 14:08:05', '2024-06-13 14:08:05', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(26, 'Carl', NULL, 'Carl@mail.ru', NULL, '$2y$12$T8ouNH04Pg8PFSaf.srk0u4JhDbzi2lXRugtKkGQnz8cik.kvODa.', 0, NULL, '2024-06-13 14:08:10', '2024-06-13 14:08:10', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(27, 'Carlos', NULL, 'Carlos@mail.ru', NULL, '$2y$12$WmIwbqi8kx.zJfAHUlUFP.hoThLmRzn7jwAiCRA30AI4me/uY7jAu', 0, NULL, '2024-06-13 14:08:14', '2024-06-13 14:08:14', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(28, 'Charles', NULL, 'Charles@mail.ru', NULL, '$2y$12$yBGiMDeNBe/2keBs0fTvW.jYOvxR1xC4MMKIZm7DXKzPIHTdXt456', 0, NULL, '2024-06-13 14:08:18', '2024-06-13 14:08:18', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(29, 'Christopher', NULL, 'Christopher@mail.ru', NULL, '$2y$12$opjPIFbJigGDj0W4EUEeQu/v6iQxPaf4nR8SxG/qNYH..X81nDK/K', 0, NULL, '2024-06-13 14:08:23', '2024-06-13 14:08:23', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(30, 'Aaliyah', NULL, 'Aaliyah@mail.ru', NULL, '$2y$12$rwZFubY6gScYyYwyHNTRIeDEyPiM8K235SxNaROVGhlWGPZjsWzNq', 0, NULL, '2024-06-13 14:08:27', '2024-06-13 14:08:27', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(31, 'Caroline', NULL, 'Caroline@mail.ru', NULL, '$2y$12$bHd7lfDSSdlPEulfYa55Ie7E/Oaih1qYmK5NZbcFShqNV4tyknJnm', 0, NULL, '2024-06-13 14:08:33', '2024-06-13 14:08:33', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(32, 'Eleanor', NULL, 'Eleanor@mail.ru', NULL, '$2y$12$033GPoDnvUaxbyjFk3I4GuV1str7H7sEyavHQsjAvnQ9WKqe3lTiW', 0, NULL, '2024-06-13 14:08:38', '2024-06-13 14:08:38', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(33, 'Elizabeth', NULL, 'Elizabeth@mail.ru', NULL, '$2y$12$lFuSFSgLk8p74HlitP.SG.cJCyl1Os/qxMKxrxKYODYMyAMCYCGuW', 0, NULL, '2024-06-13 14:08:41', '2024-06-13 14:08:41', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(34, 'Emily', NULL, 'Emily@mail.ru', NULL, '$2y$12$zW9rnN5fVMs27ERQZ/ax5uchpomEmhObzs3ucnJ/JmgIQ363zlx.G', 0, NULL, '2024-06-13 14:08:45', '2024-06-13 14:08:45', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(35, 'Emma', NULL, 'Emma@mail.ru', NULL, '$2y$12$zucmO7ATeBKyg6bXPfcqS.X5oaTqZv0xLW.GgjnyGmo6geJ9zuDAi', 0, NULL, '2024-06-13 14:08:49', '2024-06-13 14:08:49', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(36, 'Erin', NULL, 'Erin@mail.ru', NULL, '$2y$12$M6ccDyp569b1wOPKQ7wzeOi8OZiCy/zH21VI.UEw0FY0L9DRrtXre', 0, NULL, '2024-06-13 14:08:53', '2024-06-13 14:08:53', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(37, 'Evelyn', NULL, 'Evelyn@mail.ru', NULL, '$2y$12$axEOIsV7dFe6nSCi9rAuF.x5ZbxJ9ASepgYM0SWnsL.KutQcui2aC', 0, NULL, '2024-06-13 14:08:57', '2024-06-13 14:08:57', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(38, 'Gloria', NULL, 'Gloria@mail.ru', NULL, '$2y$12$YIBGXdb09rCZ2kVhiKUdb.IdscqlIRGkwZUa.j/R94e8e2BQycwGC', 0, NULL, '2024-06-13 14:09:03', '2024-06-13 14:09:03', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(39, 'Gabriella', NULL, 'Gabriella@mail.ru', NULL, '$2y$12$.gTKQo6FqqA.FeNcgoX7dupU5RYPB1gUdk7CRBHo4licgBQJGCx76', 0, NULL, '2024-06-13 14:09:10', '2024-06-13 14:09:10', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(40, 'Hailey', NULL, 'Hailey@mail.ru', NULL, '$2y$12$9Uji.gWD45fO/Ic5XH1JSeztNCNyRu0.WJnWt3Mr9Q0LbycR4DEg2', 0, NULL, '2024-06-13 14:09:14', '2024-06-13 14:09:14', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(41, 'Haley', NULL, 'Haley@mail.ru', NULL, '$2y$12$uAK7zigKhflvuU3c83K0ouJKIiXtrM9Nr5Is5v0QLDQFRswEXsZz.', 0, NULL, '2024-06-13 14:09:18', '2024-06-13 14:09:18', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(42, 'Jack', NULL, 'Jack@mail.ru', NULL, '$2y$12$c21F.pdgsSrWcZ6ZlY1CSeQ0pOmiCxZKBF9Q/KU3.BWMJRyaBwBWu', 0, NULL, '2024-06-13 14:09:22', '2024-06-13 14:09:22', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(43, 'Jackson', NULL, 'Jackson@mail.ru', NULL, '$2y$12$W9S.XhC/E.Re8KioRNLvs.qYQU4uOEf1bdgBXSWzIJQOEjrB6LgPK', 0, NULL, '2024-06-13 14:09:26', '2024-06-13 14:09:26', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(44, 'Jacob', NULL, 'Jacob@mail.ru', NULL, '$2y$12$gTWrKlPK/y4vXWn10mxpRee4lE1j6OSfJhCj1J3OcOTxLHOd3h426', 0, NULL, '2024-06-13 14:09:29', '2024-06-13 14:09:29', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(45, 'Jaden', NULL, 'Jaden@mail.ru', NULL, '$2y$12$AOKzeX3787dB8n1Pdnk55uhd0b.cvPkS7hS7hBNd2fO1D4C.4D6f.', 0, NULL, '2024-06-13 14:09:34', '2024-06-13 14:09:34', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(46, 'Jake', NULL, 'Jake@mail.ru', NULL, '$2y$12$nqzajrq0tynMYF6JifsKQe8FHy3MymfW4kfcZzJG5KOC9l9KM2kem', 0, NULL, '2024-06-13 14:09:38', '2024-06-13 14:09:38', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(47, 'James', NULL, 'James@mail.ru', NULL, '$2y$12$UaTUJflzeAyudmCl8RLHb.5TlDgJduVlFWvMtqKGkvT0wr07ZqUTy', 0, NULL, '2024-06-13 14:09:43', '2024-06-13 14:09:43', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(48, 'Jason', NULL, 'Jason@mail.ru', NULL, '$2y$12$kWAaq5STTTwinaWoeXoqmO./6aDQoRcoJqyLuUZlTgzZoQC3altZa', 0, NULL, '2024-06-13 14:09:47', '2024-06-13 14:09:47', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(49, 'Kevin', NULL, 'Kevin@mail.ru', NULL, '$2y$12$kA8H9ZZpb5YxwsYg/CCldO.mU.Udf3iXuapwnLVZFD1DRqJQ4uKCK', 0, NULL, '2024-06-13 14:09:53', '2024-06-13 14:09:53', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(50, 'Abus', NULL, 'Abus@mail.ru', NULL, '$2y$12$sgWtBLwV8trx7rXoQzIQmey.IFDjSJ1oFkoVHEFRhiWqxgtfpFMpO', 0, NULL, '2024-06-13 14:10:53', '2024-06-13 14:10:53', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(51, 'Bart_Simpson', NULL, 'Bart_Simpson@mail.ru', NULL, '$2y$12$olzYa9jSwbuR9hlMwqb4AeopU4adeLEgL8BqEbfcW2RIyuEsmQioW', 0, NULL, '2024-06-13 14:12:04', '2024-06-13 14:12:04', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(52, 'Homer_Simpson', NULL, 'Homer_Simpson@mail.ru', NULL, '$2y$12$zXQrN968kRv7UtWXOnv75ulbqtLE7SfDO8ULq3asPkJP//IxvTOLi', 0, NULL, '2024-06-13 14:12:22', '2024-06-13 14:12:22', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(53, 'Marge_Simpson', NULL, 'Marge_Simpson@mail.ru', NULL, '$2y$12$fOKhXoeVtxbJSXeWqQ/bgOtc/mPBDGmgqSiURHPNJ3Pkq1PYqvIs6', 0, NULL, '2024-06-13 14:13:01', '2024-06-13 14:13:01', '1718281803.png', NULL, NULL, NULL, NULL, NULL),
(54, 'Lisa_Simpson', NULL, 'Lisa_Simpson@mail.ru', NULL, '$2y$12$TM4dP9ZLaBckrhPoL0RtTeAZLkX4WmCBdPlbHyhcBtfigPTB6WM7K', 0, NULL, '2024-06-13 14:13:31', '2024-06-13 14:13:31', '1718281803.png', NULL, NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
