-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2019. Már 01. 10:17
-- Kiszolgáló verziója: 5.7.19
-- PHP verzió: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin,
  `price` int(11) NOT NULL,
  `stock` int(5) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `img`) VALUES
(1, 'YEEZY BOOST 350', 'Nunc finibus commodo turpis gravida eleifend. Fusce in ultrices nibh. Fusce sit amet tristique sapien. Proin luctus eu ex id finibus. Donec blandit laoreet finibus. Suspendisse vel dapibus massa. Vestibulum urna sem, commodo non dignissim sed, pharetra vitae libero. Ut accumsan quam condimentum vestibulum elementum.', 4950000, 100, 'https://www.flightclub.com/media/catalog/product/cache/1/image/1600x1140/9df78eab33525d08d6e5fb8d27136e95/8/0/800801_01.jpg'),
(2, 'EIFFEL TOWER 80S SHOULDER JACKET', 'Eiffel Tower 80s Shoulder Jacket in black strassed wool gabardine', 10000, 100, 'public/img/products/balenciaga.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
