-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 22 mei 2024 om 09:41
-- Serverversie: 5.7.44
-- PHP-versie: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boeken`
--

CREATE TABLE `boeken` (
  `id` int(255) NOT NULL,
  `users_id` int(255) NOT NULL,
  `userdata_id` int(255) NOT NULL,
  `verblijven_id` int(255) NOT NULL,
  `dossier-id` int(255) NOT NULL,
  `bankgegevens` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reizen`
--

CREATE TABLE `reizen` (
  `id` int(255) NOT NULL,
  `verblijven_id` int(255) NOT NULL,
  `vlucht_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userdata`
--

CREATE TABLE `userdata` (
  `id` int(255) NOT NULL,
  `users_id` int(255) NOT NULL,
  `users_email` varchar(50) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `achternaam` varchar(30) NOT NULL,
  `telefoonnummer` int(12) NOT NULL,
  `geboorte-datum` date NOT NULL,
  `nationaliteit` varchar(50) NOT NULL,
  `huisnummer` int(5) NOT NULL,
  `postcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rol` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `rol`) VALUES
(1, 'anke@anke.nl', 'password', 1),
(2, 'ruveyda@ruveyda.nl', 'password', 1),
(3, 'rens@rens.nl', 'password', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verblijven`
--

CREATE TABLE `verblijven` (
  `id` int(255) NOT NULL,
  `type-verblijf` int(3) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `informatie` varchar(200) NOT NULL,
  `prijs` int(10) NOT NULL,
  `zwembad` tinyint(1) NOT NULL,
  `airco` tinyint(1) NOT NULL,
  `wasmachine` tinyint(1) NOT NULL,
  `land-van-verblijf` varchar(50) NOT NULL,
  `slaapplekken` int(5) NOT NULL,
  `strand` tinyint(1) NOT NULL,
  `all-inclusive` tinyint(1) NOT NULL,
  `half-pension` tinyint(1) NOT NULL,
  `vol-pension` tinyint(1) NOT NULL,
  `glijbanen` tinyint(1) NOT NULL,
  `animatie-kinderen` tinyint(1) NOT NULL,
  `adult-only` tinyint(1) NOT NULL,
  `spa` tinyint(1) NOT NULL,
  `sport-plaats` tinyint(1) NOT NULL,
  `bars` tinyint(1) NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `restaurant` tinyint(1) NOT NULL,
  `hoeveelheid-personen` int(30) NOT NULL,
  `beoordeling` float NOT NULL,
  `vertrek-datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `verblijven`
--

INSERT INTO `verblijven` (`id`, `type-verblijf`, `naam`, `informatie`, `prijs`, `zwembad`, `airco`, `wasmachine`, `land-van-verblijf`, `slaapplekken`, `strand`, `all-inclusive`, `half-pension`, `vol-pension`, `glijbanen`, `animatie-kinderen`, `adult-only`, `spa`, `sport-plaats`, `bars`, `internet`, `restaurant`, `hoeveelheid-personen`, `beoordeling`, `vertrek-datum`) VALUES
(1, 1, 'Hotel Allsun Merana Beach', 'nog niks', 456, 1, 1, 0, 'Playa De Palma - Mallorca - Spanje', 2, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 2, 7.8, '2024-05-07'),
(2, 1, 'Hotel Sindbad Club', 'nog niks', 536, 1, 1, 1, 'Hurghada - Rode Zee - Egypte', 3, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 4, 8.4, '2024-06-19'),
(3, 2, 'Appartement Morena Resort', 'nog niks', 873, 1, 1, 0, 'Jan Thiel - Curacao - Curacao', 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 5, 6.2, '2024-06-05');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vlucht`
--

CREATE TABLE `vlucht` (
  `id` int(255) NOT NULL,
  `reizen_id` int(255) NOT NULL,
  `plaats-vertrek` varchar(30) NOT NULL,
  `vertrek-datum` datetime NOT NULL,
  `plaats-aankomst` varchar(30) NOT NULL,
  `aankomst-datum` datetime NOT NULL,
  `duur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `vlucht`
--

INSERT INTO `vlucht` (`id`, `reizen_id`, `plaats-vertrek`, `vertrek-datum`, `plaats-aankomst`, `aankomst-datum`, `duur`) VALUES
(1, 1, 'Amsterdam', '2024-05-22 09:15:40', 'Palma Mallorca', '2024-05-29 11:15:40', 'De duur van de vlucht is 3.15 uur\r\nDe duur van het verblijf is 7 dagen');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `boeken`
--
ALTER TABLE `boeken`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reizen`
--
ALTER TABLE `reizen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `verblijven`
--
ALTER TABLE `verblijven`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vlucht`
--
ALTER TABLE `vlucht`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `boeken`
--
ALTER TABLE `boeken`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reizen`
--
ALTER TABLE `reizen`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `verblijven`
--
ALTER TABLE `verblijven`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `vlucht`
--
ALTER TABLE `vlucht`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
