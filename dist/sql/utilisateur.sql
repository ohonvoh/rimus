-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 28 juil. 2023 à 13:22
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `password`, `nom`, `prenoms`, `verrouillage`, `level`, `premiereconnexion`, `createAt`, `updateAt`) VALUES
('gnounagnon@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'NOUNAGNON', 'Gildas', 0, 0, 0, '2023-07-26 17:05:15', '2023-07-26 17:05:15'),
('hnondichao@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'NONDICHAO', 'Hachirou', 0, 0, 0, '2023-07-28 10:43:48', '2023-07-28 10:43:48'),
('lsalanon@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'SALANON', 'Landry', 1, 0, 0, '2023-07-27 10:59:25', '2023-07-27 10:59:25'),
('nbocovo@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'BOCOVO', 'Nicaise', 0, 0, 0, '2023-07-28 11:40:01', '2023-07-28 11:40:01'),
('ohonvoh@gouv.bj', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'HONVOH', 'Oméga', 0, 2, 0, '2023-07-25 08:23:04', '2023-07-25 08:23:04'),
('szanvo@gouv.bj', '9d4085ffd414cb441a6944459299ed851e43eb74', 'ZANVO', 'S. K. Hervé', 0, 0, 0, '2023-07-26 17:26:17', '2023-07-26 17:26:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
