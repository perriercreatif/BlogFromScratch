-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 avr. 2019 à 17:12
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `posts`
--
CREATE DATABASE IF NOT EXISTS `posts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `posts`;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `post`, `create_date`) VALUES
(1, 'La Table de Breccan', '<p>Léodagan (à Arthur) : Qu\'est-ce que c\'est que cette lubie de vous faire construire une table ?<br/>Perceval : D\'autant qu\'il y en a déjà une dans la salle à manger !<br/>Arthur : Là, c\'est une table ronde. Pour que tous les chevaliers de Bretagne se réunissent autour. De toute façon, autant vous y faire, parce qu\'à partir de maintenant on va s\'appeler « Les chevaliers de la Table Ronde. »<br/>Perceval : Les chevaliers de la Table Ronde ?<br/>Léodagan : Encore une chance qu\'on se soit pas fait construire un buffet à vaisselle !</p>', '2019-03-24 17:22:05'),
(2, 'Dîner dansant', '<p>Arthur (à Séli) : Et si vous la ramenez, à partir de demain, vous mangez dans la pièce d\'à-côté !<br/>Léodagan : Pourquoi à partir d\'demain ? Maintenant que l\'idée est lancée ?</p>', '2019-03-23 19:47:21'),
(3, 'Le Plat national', '<p>Guethenoc : On devrait l\'appeler le Karadoc !<br/>Karadoc : Nan, c\'est trop long, ma famille m\'appelle \"Kroc\".<br/>Arthur : Le \"Kroc\"... Messieurs.</p>', '2019-03-23 19:37:11'),
(4, 'Les Suppléants', '<p>Le maître d\'armes : Ah, seigneur Perceval, vous tombez bien !<br/>Perceval : Pas spécialement non, enfin, j\'me débrouille toujours pour me rattraper à quelque chose…</p>', '2019-03-23 19:39:25'),
(5, 'Seigneur Caius', '<p>Caius : Hé les connards ! Vous pouvez faire griller un porcelet s’il vous plaît ?<br/>Arthur : Les connards ?<br/>Léodagan : S’il vous plaît ?</p>', '2019-03-23 19:40:18'),
(6, 'Le Sanglier de Cornouailles', '<p>Perceval : Comment ils appellent Lançelot déjà les gens du peuple ?<br/>Karadoc : Beau-trouvé.<br/>Perceval : Ça pète quand même les surnoms.<br/>Karadoc : En Gaule, ils l\'appellent… Blanc Chevalier je crois.<br/>Perceval : Pff… Il a même un surnom en Gaule, vous vous rendez compte ?<br/>Karadoc : Vous en avez bien un vous de surnom ?<br/>Perceval : En Gaule ? Non.<br/>Karadoc : Enfin en Gaule, p\'tète pas.<br/>Perceval : Dans le Languedoc, ils m\'appellent Provençal, mais c\'est moi qui me suis gouré en disant mon nom. Sinon en Bretagne, c\'est le gros faisan au sud et au nord, c\'est juste Ducon.</p>\r\n', '2019-03-23 19:46:58'),
(8, '\"Le Cadeau\"', '<p>Demetra: On se demande vraiment qui vous pr&eacute;f&eacute;rez.<br/>Arthur: Quelle est la diff&eacute;rence entre la ch&egrave;vre et vous&nbsp;?<br />Demetra: Je sais pas, mais je sens qu\'&ccedil;a va pas m\'plaire.<br />Arthur: La ch&egrave;vre, elle a b&ecirc;l&eacute; cinq minutes. Vous, vous r&acirc;lez depuis trois heures. Pensez-y.<br />Demetra: Ah c\'est malin&nbsp;!<br />Arthur: \"Ferme-Ta-Gueule\"&nbsp;!<br />Demetra: Oh et puis ce nom&nbsp;!!!<br />Arthur: Non mais l&agrave; c\'est pour vous.</p>', '2019-03-23 19:51:15'),
(9, 'Le roi Burgonde', '<p>Interpr&egrave;&egrave;&egrave;te? Interpr&egrave;&egrave;&egrave;te, couhill&egrave;re?</p>', '2019-03-24 17:41:40'),
(10, 'Le Maître d\'Armes', '<p>Sire! Mon p&egrave;re est peut-&ecirc;tre unijambiste, mais moi, ma femme n\'a pas de moustache! [...] Alors &ccedil;a vient? p\'tite bite!</p>', '2019-03-24 17:41:47'),
(11, 'L’interprète burgonde', '<p>La culture burgonde ? Je savais m&ecirc;me pas qu&rsquo;y en avait une&hellip; Non, moi je voulais faire grec moderne, mais y avait plus de place. Il restait que burgonde ou anglais. Aaaaanglais ! Mais c&rsquo;est encore moins r&eacute;pandu.</p>', '2019-03-23 19:58:11');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
