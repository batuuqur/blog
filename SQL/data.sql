-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Eyl 2022, 15:22:15
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `header` varchar(250) NOT NULL,
  `blog_contents` longtext NOT NULL,
  `blog_author` varchar(100) NOT NULL,
  `blog_category` varchar(100) NOT NULL,
  `blog_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `data`
--

INSERT INTO `data` (`id`, `header`, `blog_contents`, `blog_author`, `blog_category`, `blog_image`) VALUES
(4, 'DASD', 'we do what we please', 'Sanzuman', 'category', 'gandalf.jpeg'),
(22, 'awfefwer', 'dgfhfghgh', 'fghfghfg', 'category', 'asdasd.jpg'),
(23, 'uykyuk', 'yukyhmg', 'ghjghjghj', 'ghjghjgh', 'gandalf.jpeg'),
(24, 'ılghfjhkg', 'fgdhjhdjhgfd', 'ndfgnndghfn', 'nhdngfhdngfhn', 'gandalf.jpeg'),
(27, 'djasdfsdf', 'sdfsdfsdf', 'sdfsadf', 'dsfsdaf', 'asdasd.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
