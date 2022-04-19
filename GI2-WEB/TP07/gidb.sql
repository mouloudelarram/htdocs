-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 déc. 2021 à 21:27
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gidb`
--
CREATE OR REPLACE DATABASE gidb;
-- --------------------------------------------------------

--
-- Structure de la table `users`
--
use gidb;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Déchargement des données de la table `users`
--
insert into users (username, password, score) values ('klowder0', 'F29fBWWsS1Ou', 680);
insert into users (username, password, score) values ('akiln1', 'hHmsoYkk', 13);
insert into users (username, password, score) values ('selie2', '1MmBhlIy', 675);
insert into users (username, password, score) values ('ksutcliffe3', 'ZMMN0hVvFn', 6);
insert into users (username, password, score) values ('ageary4', 'sCPHrX', 290);
insert into users (username, password, score) values ('straske5', 'XABRVmixa7', 110);
insert into users (username, password, score) values ('sdulton6', 'hb79fn37', 682);
insert into users (username, password, score) values ('ayankov7', 'sYwkuk', 794);
insert into users (username, password, score) values ('jprosch8', 'bLtKjgK', 175);
insert into users (username, password, score) values ('lhedditeh9', '8kG0WH', 484);
insert into users (username, password, score) values ('rtiremana', 'W0Nd7R', 306);
insert into users (username, password, score) values ('vomoylaneb', 'Ws0uSj', 809);
insert into users (username, password, score) values ('clukesc', 'mJT7ND', 473);
insert into users (username, password, score) values ('bkleesd', 'YcgHFd2p', 767);
insert into users (username, password, score) values ('meddse', 'kDrFOlrm1e5b', 873);
insert into users (username, password, score) values ('gshevillf', 'xy7IYu3bd', 948);
insert into users (username, password, score) values ('ncraigg', 'HAJzUNsfu', 13);
insert into users (username, password, score) values ('khearnamanh', 'xfqYsbO', 219);
insert into users (username, password, score) values ('acicculii', 'bpZSoAcND', 103);
insert into users (username, password, score) values ('sarnaezj', 'QMfHbUlmZPyD', 86);
insert into users (username, password, score) values ('pdreamerk', 'mqAXgMJ7ov', 395);
insert into users (username, password, score) values ('sgentiryl', 'wS6QuLk', 77);
insert into users (username, password, score) values ('osainsburybrownm', 'sYnnWRS', 274);
insert into users (username, password, score) values ('hmcaughtrien', 'TtTu07Gor', 767);
insert into users (username, password, score) values ('bbraveryo', 'ZGzRiX', 133);
insert into users (username, password, score) values ('kpachtap', '3v9rKQO', 907);
insert into users (username, password, score) values ('acarnihanq', 'Pa6sok2Zm', 521);
insert into users (username, password, score) values ('acollisr', 'Elq8J7fQXf4', 238);
insert into users (username, password, score) values ('degans', 'zeUTTKP', 344);
insert into users (username, password, score) values ('ymansellt', 'SoCXdY', 430);
insert into users (username, password, score) values ('wbagbyu', 'AU4ZXRXtG', 655);
insert into users (username, password, score) values ('jkikv', '0QVhIj', 320);
insert into users (username, password, score) values ('ahussyw', 'HaouXpEY', 740);
insert into users (username, password, score) values ('greubenx', 'qKDzusKm', 373);
insert into users (username, password, score) values ('drexworthyy', 'EV4rDWjna', 940);
insert into users (username, password, score) values ('lmeugensz', 'vsfrTqj3p04z', 21);
insert into users (username, password, score) values ('luden10', 'rTaAC5', 391);
insert into users (username, password, score) values ('ckeeling11', '4Y3CGkL68BNN', 684);
insert into users (username, password, score) values ('ujankowski12', '83cuRw', 14);
insert into users (username, password, score) values ('fstott13', 'S12x1D4s', 485);
insert into users (username, password, score) values ('fgrimes14', 'fDE6GHWaA1', 602);
insert into users (username, password, score) values ('misbell15', 'SONEx5JECg', 20);
insert into users (username, password, score) values ('batyeo16', 'ZCRyrAJ1rB', 296);
insert into users (username, password, score) values ('sruhben17', '8Sr4NhP7R', 543);
insert into users (username, password, score) values ('mwilby18', 'ytLZ94', 192);
insert into users (username, password, score) values ('ilenchenko19', 'TvQznS6', 374);
insert into users (username, password, score) values ('mingleby1a', 'TTCjT5mr7c', 20);
insert into users (username, password, score) values ('giacovielli1b', 'ndblJK', 789);
insert into users (username, password, score) values ('sscotney1c', 'FQ5dwTldjW', 190);
insert into users (username, password, score) values ('cgallard1d', 'N1rbjn4', 246);
insert into users (username, password, score) values ('msilly1e', 'lCBWik', 954);
insert into users (username, password, score) values ('kstotherfield1f', 'rDOgCNGpf', 232);
insert into users (username, password, score) values ('zriches1g', 'I3LW6r', 361);
insert into users (username, password, score) values ('mcolmore1h', 'O4leXGT7', 749);
insert into users (username, password, score) values ('eashwell1i', 'EUiDgOy', 221);
insert into users (username, password, score) values ('mgrosier1j', 'Hp2XzL', 52);
insert into users (username, password, score) values ('ccrossby1k', 'jgIc1Nk', 633);
insert into users (username, password, score) values ('ejablonski1l', 'MiFsZiTgk', 628);
insert into users (username, password, score) values ('fpetlyura1m', 'Ij58Hng', 871);
insert into users (username, password, score) values ('fsowter1n', 'qwoao09FC', 382);
insert into users (username, password, score) values ('fwombwell1o', 'QFNL6OZQ375', 476);
insert into users (username, password, score) values ('tvanderbrug1p', '8YOat7Daqp', 384);
insert into users (username, password, score) values ('lnickell1q', 'Jqz7854', 733);
insert into users (username, password, score) values ('amcgiffin1r', 'eMNLMm8938ZR', 268);
insert into users (username, password, score) values ('blancley1s', 'Rht0Z1zTuwf', 432);
insert into users (username, password, score) values ('ftomasino1t', 'QB1TV3VNQ0', 666);
insert into users (username, password, score) values ('btarbin1u', 'Zl9Eem', 514);
insert into users (username, password, score) values ('atimbridge1v', 'ElVgdX8jppUZ', 251);
insert into users (username, password, score) values ('rhandman1w', '4hNCQTNx2F', 68);
insert into users (username, password, score) values ('gfaint1x', 'J6oiHw0', 313);
insert into users (username, password, score) values ('yonyon1y', 'gLSDWDzJphq', 592);
insert into users (username, password, score) values ('kwhybrow1z', '1RPa9L8sr', 64);
insert into users (username, password, score) values ('mmclleese20', 'j0YoQcMqa', 756);
insert into users (username, password, score) values ('jphalp21', 'cu6hJgAjNdS4', 606);
insert into users (username, password, score) values ('ebrito22', 'ycf7JtTG', 213);
insert into users (username, password, score) values ('rengland23', '0rQ7yHG', 223);
insert into users (username, password, score) values ('ttowndrow24', 'RVOAg91m', 56);
insert into users (username, password, score) values ('jbiggs25', '0eTB8Wj72cS', 218);
insert into users (username, password, score) values ('acutmore26', 'NnmceBpN2Kc', 365);
insert into users (username, password, score) values ('vmazella27', 'puoKoCUJ41', 818);
insert into users (username, password, score) values ('flate28', 'xRJ3uddfj', 245);
insert into users (username, password, score) values ('kconsidine29', '8pyhzo', 936);
insert into users (username, password, score) values ('dpercifull2a', 'VPuGgsITR', 376);
insert into users (username, password, score) values ('mellingworth2b', '9AyanKGxB', 611);
insert into users (username, password, score) values ('ralten2c', 'E37pHrhmsw', 467);
insert into users (username, password, score) values ('evardie2d', 'kB1aLlM', 187);
insert into users (username, password, score) values ('abunney2e', 'MNWVJ505F', 569);
insert into users (username, password, score) values ('cprantl2f', '8S7kuAd', 655);
insert into users (username, password, score) values ('njudson2g', '6v6v9ZLK', 124);
insert into users (username, password, score) values ('mpingston2h', 'fdrUyThjh', 340);
insert into users (username, password, score) values ('acourtes2i', 'X3KmAS', 349);
insert into users (username, password, score) values ('blutz2j', 'iqqiaydSh2', 462);
insert into users (username, password, score) values ('smoorman2k', 'KN1BUqJ2v', 565);
insert into users (username, password, score) values ('tsaveall2l', 'dy1SBGHum4SE', 399);
insert into users (username, password, score) values ('prudolfer2m', 'GR7ENFlWVNcb', 894);
insert into users (username, password, score) values ('hglazyer2n', 'r72LT7mUKQa', 140);
insert into users (username, password, score) values ('nmangeon2o', 'XhvClo26XWo', 224);
insert into users (username, password, score) values ('asudron2p', '8S6LRN', 400);
insert into users (username, password, score) values ('npawnsford2q', 'szKjrEsqCN', 889);
insert into users (username, password, score) values ('bfaier2r', 'Xs29Je', 592);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
