-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 apr 2017 om 14:48
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superfan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `supportersvakken`
--

CREATE TABLE `supportersvakken` (
  `id` int(11) NOT NULL,
  `vak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MACadres` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `supportersvakken`
--

INSERT INTO `supportersvakken` (`id`, `vak`, `MACadres`) VALUES
(4, 'B', '::1'),
(5, 'F', '::1'),
(6, 'H4', '::1'),
(7, 'H4', '::1'),
(8, 'I', '::1');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `supportersvakken`
--
ALTER TABLE `supportersvakken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `supportersvakken`
--
ALTER TABLE `supportersvakken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
