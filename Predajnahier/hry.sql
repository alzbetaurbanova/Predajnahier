-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Pi 24.Máj 2019, 15:08
-- Verzia serveru: 10.1.40-MariaDB
-- Verzia PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `hry`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `games`
--

CREATE TABLE `games` (
  `ID` int(10) NOT NULL,
  `Nazov` varchar(30) COLLATE utf8_slovak_ci NOT NULL,
  `Popisok` varchar(10000) COLLATE utf8_slovak_ci NOT NULL,
  `Obrazok` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `Platforma` varchar(20) COLLATE utf8_slovak_ci NOT NULL,
  `Typ` varchar(30) COLLATE utf8_slovak_ci NOT NULL,
  `Cena` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `games`
--

INSERT INTO `games` (`ID`, `Nazov`, `Popisok`, `Obrazok`, `Platforma`, `Typ`, `Cena`) VALUES
(1, 'The Walking Dead: Season One', 'Prvá séria hry The Walking Dead. Obsahuje 5 epizód.', 'twds1.jpg', 'PC', 'Steam key', 10),
(2, 'The Walking Dead: Season Two', 'Druhá séria hry The Walking Dead od Telltale Games. Obsahuje 5 epizód.', 'twds2.jpg', 'PC', 'Steam key', 13),
(3, 'Rocket League', 'Multiplayerová hra', 'rocketl.jpg', 'PC', 'Steam key', 18),
(4, 'Outlast', 'Prvá hra zo série Outlast - hororová hra', 'outlast.jpg', 'PC', 'CD + key', 6),
(5, 'Life is Strange', 'Prvá hra - obsahuje 5 epizód', 'lis.png', 'XBOX', 'CD', 7),
(6, 'The Last of Us', 'Postapokalypticka hra', 'tlou.jpg', 'PS4', 'CD', 20),
(7, 'Far Cry 5', 'Veľmi populárna hra', 'farcry5.jpg', 'PC', 'Uplay key', 35),
(8, 'The Walking Dead: Final Season', 'Posledná časť so série The Walking Dead od Telltale Games. Obsahuje 4 epizódy.', 'twds4.jpg', 'PC', 'Steam key', 75),
(9, 'GTA V', 'Piata hra Grand Theft Auto', 'gta5.jpg', 'PS4', 'Aktivačný key', 30),
(10, 'Mafia II', 'Druhá hra Mafia', 'mafia2.jpg', 'PC', 'Steam key', 11),
(11, 'Undertale', 'You are going to have a good time.', 'ut.jpg', 'PC', 'Steam key', 6),
(12, 'Until Dawn', 'Príbehová hra', 'untildawn.jpg', 'PS4', 'CD', 15);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `meno` varchar(64) COLLATE utf8_slovak_ci NOT NULL,
  `heslo` varchar(64) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`id`, `meno`, `heslo`) VALUES
(1, 'admin', 'betka'),
(2, 'Noob', 'patricia');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `games`
--
ALTER TABLE `games`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `games`
--
ALTER TABLE `games`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
