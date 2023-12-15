--
-- Base de données : `gamecollection`
--
-- Structure de la table `bibliotheque`
--
DROP TABLE IF EXISTS BIBLIOTHEQUE;

CREATE TABLE `BIBLIOTHEQUE` (
  `idJeux` int(11) NOT NULL,
  `eMail` varchar(100) NOT NULL,
  `heureDeJeu` DECIMAL(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `jeux`
--
DROP TABLE IF EXISTS JEUX;

CREATE TABLE `JEUX` (
  `idJeux` int(11) NOT NULL,
  `nomJeux` varchar(100) NOT NULL,
  `dateSorti` date NOT NULL,
  `editeur` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `URLCover` varchar(150) NOT NULL,
  `URLSite` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `jouabilite`
--
DROP TABLE IF EXISTS JOUABILITE;

CREATE TABLE `JOUABILITE` (
  `idPlat` int(11) NOT NULL,
  `idJeux` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `plateforme`
--
DROP TABLE IF EXISTS PLATEFORME;

CREATE TABLE `PLATEFORME` (
  `idPlat` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `utilisateur`
--
DROP TABLE IF EXISTS UTILISATEUR;

CREATE TABLE `UTILISATEUR` (
  `eMail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nomUtil` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index
--
ALTER TABLE `BIBLIOTHEQUE`
  ADD PRIMARY KEY (`idJeux`,`eMail`),
  ADD KEY `eMail` (`eMail`);

ALTER TABLE `JEUX`
  ADD PRIMARY KEY (`idJeux`),
  MODIFY `idJeux` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `JOUABILITE`
  ADD PRIMARY KEY (`idPlat`,`idJeux`),
  ADD KEY `idJeux` (`idJeux`);

ALTER TABLE `PLATEFORME`
  ADD PRIMARY KEY (`idPlat`);

ALTER TABLE `UTILISATEUR`
  ADD PRIMARY KEY (`eMail`);


--
-- Contraintes
--
ALTER TABLE `BIBLIOTHEQUE`
  ADD CONSTRAINT `bibliotheque_ibfk_1` FOREIGN KEY (`idJeux`) REFERENCES `JEUX` (`idJeux`),
  ADD CONSTRAINT `bibliotheque_ibfk_2` FOREIGN KEY (`eMail`) REFERENCES `UTILISATEUR` (`eMail`);

ALTER TABLE `JOUABILITE`
  ADD CONSTRAINT `jouabilite_ibfk_1` FOREIGN KEY (`idPlat`) REFERENCES `PLATEFORME` (`idPlat`),
  ADD CONSTRAINT `jouabilite_ibfk_2` FOREIGN KEY (`idJeux`) REFERENCES `JEUX` (`idJeux`);