-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Бер 12 2023 р., 15:37
-- Версія сервера: 10.4.27-MariaDB
-- Версія PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `gotham`
--

-- --------------------------------------------------------

--
-- Структура таблиці `uta2`
--

CREATE TABLE `uta2` (
  `author` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `year` char(4) DEFAULT NULL,
  `pages` smallint(5) UNSIGNED DEFAULT NULL,
  `type` smallint(5) UNSIGNED DEFAULT NULL,
  `isbn` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `uta2`
--

INSERT INTO `uta2` (`author`, `title`, `year`) VALUES
('Jane Austen', 'Pride and Prejudice', '1811'),
('Charles Darwin', 'The Origin of Species', '1856'),
('Charles Dickens', 'The Old Curiosity Shop', '1841'),
('William Shakespeare', 'Romeo and Juliet', '1594'),
('Mark Twain', 'The Tom Sawyer', '1876');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
