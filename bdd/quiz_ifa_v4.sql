-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 19 Septembre 2017 à 13:35
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quiz_ifa`
--

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id_formation` int(10) NOT NULL,
  `nom_formation` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id_formation`, `nom_formation`) VALUES
(1, 'Responsable Commercial Marketing Digital'),
(2, 'BTS Communication'),
(3, 'BTS Management des Unit&eacute;s Commerciales'),
(4, 'Responsable Commercial - Marketing'),
(5, 'Chef de projets &eacute;v&eacute;nementiels'),
(6, 'Manager des Strat&eacute;gies Communication Marketing'),
(7, 'Acheteur France et International'),
(8, 'Charg&eacute; de Gestion des Ressources Humaines'),
(9, 'Manager en Ressources Humaines'),
(10, 'BTS Comptabilit&eacute; et Gestion'),
(11, 'Dipl&ocirc;me de Comptabilit&eacute; et de Gestion'),
(12, 'Responsable Op&eacute;rationnel de Gestion'),
(13, 'Dipl&ocirc;me Europ&eacute;en d&apos;&Eacute;tudes Sup&eacute;rieures Banque Option Place Financi&egrave;re Luxembourgeoise'),
(14, 'Manager Administratif & Financier');

-- --------------------------------------------------------

--
-- Structure de la table `formations || users`
--

CREATE TABLE `formations || users` (
  `id_formation` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_questions` int(10) NOT NULL,
  `question` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`id_questions`, `question`) VALUES
(1, 'How many times have you been to the U.S.A. ?'),
(2, 'Do I have to show my passport at the German border ?'),
(3, 'Good night. I\'m going...'),
(4, 'Whose phone is this ?'),
(5, 'He would not do that, ...:'),
(6, 'Where have they been ? I\'ve been waiting ... an hour.'),
(7, '\"I don\'t like American food.\" \"No, ...\"'),
(8, 'Ask ... back tomorrow'),
(9, 'Tell her I found the book...'),
(10, 'They could not help...'),
(11, '...entre dans votre entreprise ?'),
(12, '... vous dit merci, vous répondez ?'),
(13, '... vous demande s\'il peut fumer dans l\'enceinte de votre entreprise ?'),
(14, 'Quelle est la bonne traduction ? \"Pourriez-vous m\'épeler votre nom je vous prie ?\"'),
(15, 'Avez-vous besoin que j\'appelle un taxi ?'),
(16, 'Veuillez ne pas quitter, je recherche votre correspondant.'),
(17, 'De quelle société faites-vous partie ?'),
(18, 'Je suis désolé(e), mais le directeur est actuellement en réunion. Puis-je prendre un message ?'),
(19, 'Merci de votre visite et à très bientôt.'),
(20, 'Je vous souhaite une excellente journée.');

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `quiz || formations`
--

CREATE TABLE `quiz || formations` (
  `id_quiz_formations` int(10) NOT NULL,
  `id_quiz` int(10) NOT NULL,
  `id_formation` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `quiz || q/r`
--

CREATE TABLE `quiz || q/r` (
  `id_quiz_q_r` int(10) NOT NULL,
  `id_quiz` int(10) NOT NULL,
  `id_questions` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id_reponses` int(10) NOT NULL,
  `reponses` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_quiz_q_r` int(10) NOT NULL,
  `isTrue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE `resultat` (
  `id_resultat` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_quiz` int(10) NOT NULL,
  `score` int(3) NOT NULL,
  `date_de_realisation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(10) NOT NULL,
  `nom_role` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
(0, 'admin'),
(1, 'eleve');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `formations || users`
--
ALTER TABLE `formations || users`
  ADD KEY `id_formation` (`id_formation`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_questions`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`);

--
-- Index pour la table `quiz || formations`
--
ALTER TABLE `quiz || formations`
  ADD PRIMARY KEY (`id_quiz_formations`),
  ADD KEY `id_quiz` (`id_quiz`),
  ADD KEY `id_formation` (`id_formation`);

--
-- Index pour la table `quiz || q/r`
--
ALTER TABLE `quiz || q/r`
  ADD PRIMARY KEY (`id_quiz_q_r`),
  ADD KEY `id_questions` (`id_questions`),
  ADD KEY `id_quiz` (`id_quiz`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id_reponses`),
  ADD KEY `id_quiz_q_r` (`id_quiz_q_r`);

--
-- Index pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`id_resultat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_quiz` (`id_quiz`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id_formation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_questions` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `quiz || formations`
--
ALTER TABLE `quiz || formations`
  MODIFY `id_quiz_formations` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `quiz || q/r`
--
ALTER TABLE `quiz || q/r`
  MODIFY `id_quiz_q_r` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id_reponses` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `id_resultat` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `formations || users`
--
ALTER TABLE `formations || users`
  ADD CONSTRAINT `formations || users_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formations` (`id_formation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formations || users_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `quiz || formations`
--
ALTER TABLE `quiz || formations`
  ADD CONSTRAINT `quiz || formations_ibfk_1` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quiz || formations_ibfk_2` FOREIGN KEY (`id_formation`) REFERENCES `formations` (`id_formation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `quiz || q/r`
--
ALTER TABLE `quiz || q/r`
  ADD CONSTRAINT `quiz || q/r_ibfk_2` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_ibfk_1` FOREIGN KEY (`id_quiz_q_r`) REFERENCES `quiz || q/r` (`id_quiz_q_r`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `resultat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resultat_ibfk_2` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_quiz`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
