-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 28. 06 2019 kl. 09:29:23
-- Serverversion: 10.1.40-MariaDB
-- PHP-version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-1-games`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `games`
--

CREATE TABLE `games` (
  `gameId` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `categoryId` varchar(100) NOT NULL,
  `publisherId` int(2) NOT NULL,
  `imgSrc` varchar(50) NOT NULL,
  `imgAlt` varchar(50) NOT NULL,
  `price` double(10,2) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `games`
--

INSERT INTO `games` (`gameId`, `title`, `content`, `categoryId`, `publisherId`, `imgSrc`, `imgAlt`, `price`, `time`) VALUES
(1, 'Ark survival evolved', 'Frysende, sultende og nøgen – det er dig, strandet på en mystisk ø kaldet ARK. Overvind elementerne, andre spillere og dinosaurer i din kamp for overlevelse.', 'Action, Oplevelser, Online Co-op', 1, 'ark-survival-evolved.jpg', 'Ark survival evolved', 449.00, 1559813037),
(3, 'Call of Duty WW II', 'Vend tilbage til det 20. århundredes mest ikoniske krig og den dramatiske kulisse, der oprindeligt var inspiration for den populære Call of Duty-spilserie.', 'Action, Første person-skyder, Online Multiplayer', 1, 'call-of-duty-ww2.jpg', 'Call of Duty WW II', 449.00, 1560332174),
(7, 'Diablo III', 'Over 13 million players have battled the demonic hordes of Diablo III. Now, it\'s your turn to join the crusade, and take up arms against the enemies of the mortal realms.', 'Action, Rollespil, Online Co-op', 1, 'diablo-3.jpg', 'Diablo III', 449.00, 1560332437),
(8, 'Fallout 76', 'Bethesda, den prisvindende spilproducent, der står bag Skyrim og Fallout, byder dig nu velkommen til Fallout 76. Her skal du for første gang i seriens historie . . .', 'Action, Rollespil', 1, 'fallout-76.jpg', 'Fallout 76', 381.00, 1560332483),
(9, 'Lego Hobbit', 'LEGO The Hobbit giver dig mulighed for at spille dine foretrukne scener fra filmene og følger Hobbit Bilbo Baggins, som får følgeskab af den mægtige Gandalf for . . .', 'Action, Eventyr', 1, 'lego-hobbit.jpg', 'Lego Hobbit', 175.00, 1560332548),
(10, 'Need for Speed', 'Med over 20 års historie i bakspejlet, er Need For Speed tilbage og leverer hvad Need For Speed står inde for: utallige muligheder for at skræddersy . . .', 'Racerløb, Online Multiplayer', 1, 'need-for-speed.jpg', 'Need for Speed', 338.00, 1560332593),
(11, 'Sims 4', 'The Sims 4 er det længe ventede livssimulationsspil, der lader dig gøre livet til en leg som aldrig før. Spil med klogere simmere med unikke udseender . . .', 'Simulator', 1, 'sims-4.jpg', 'Sims 4', 399.00, 1560332636),
(12, 'Star Wars Battlefront 2', 'Drag ud på et endeløst Battlefront-eventyr i denne fortsættelse til den bedst sælgende Star Wars™-computerspilserie nogensinde.', 'Første person-skyder, Online Multiplayer', 1, 'star-wars-battlefront-2.jpg', 'Star Wars Battlefront 2', 319.00, 1560332714);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `userId` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `accessLevel` int(1) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `accessLevel`) VALUES
(1, 'Nickolai', 'nickolai@email.dk', 'nickolai', 1),
(3, 'Level2', 'Level2@email.dk', 'level2', 2),
(7, 'Level3', 'Level3@email.dk', 'level3', 3),
(8, 'JegElskerStarWars', 'jegelskerstarwars@email.dk', 'jegelskerstarwars', 2);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
