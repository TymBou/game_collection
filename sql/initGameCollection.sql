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

--
-- Inserts
--

INSERT INTO UTILISATEUR VALUES('uneAdresse@mail.com', '$2y$10$wUEZ04LL3KFh0sjCVhOmDeXUMHcjSg49G7DGDDxEYnaVKoF4o9Bie', 'Dubois', 'Jacques'),
								('uneAutreAdresse@mail.com', '$2y$10$AwUt1Pqa7zSzeKrItFhKJeX7dx6Ox.Vd6cipLjMVPF0lojwTzNwfS', 'Dupond', 'Paul'),
								('adresse3@mail.com', '$2y$10$ljDOPrIvkesddHdAx9KEg.IF2Pz.wL0o2DxsRJf4vhg8Uipm4F2lK', 'Deschamps', 'Jean');

INSERT INTO JEUX VALUES(1, 'Horizon Zero Down', '2017-02-28', 'Guerrilla Games', 'RPG post-apocaliptique', 'https://cdn.akamai.steamstatic.com/steam/apps/1151640/capsule_616x353.jpg?t=1698159193', 'Guerrilla_Games/Horizon_Zero_Down'),
						(2, 'The Legend of Zelda: Majora s Mask', '2000-04-27', 'Nintendo', 'RPG de la saga des zelda', 'https://cdn.gamekult.com/images/gallery/99/993/the-legend-of-zelda-majora-s-mask-n64-1d9cceea.jpg', 'Nintendo/The_Legend_of_Zelda_Majoras_Mask'),
						(3, 'Minecraft', '2011-11-18', 'Mojang', 'Sandbox', 'https://static.actugaming.net/media/2016/02/minecraft-889x500.jpg', 'Mojang/Minecraft');

INSERT INTO BIBLIOTHEQUE VALUES(1, 'uneAdresse@mail.com', 164.7),
								(2, 'uneAdresse@mail.com', 258.3),
								(2, 'uneAutreAdresse@mail.com', 68.4),
								(3, 'uneAutreAdresse@mail.com', 864.5),
								(3, 'adresse3@mail.com', 157.2);

INSERT INTO JOUABILITE VALUES(1, 1),
								(4, 1),
								(3, 2),
								(1, 3),
								(2, 3)
								(3, 3)
								(4, 3);

INSERT INTO PLATEFORME VALUES(1, 'Playstation'),
								(2, 'Xbox'),
								(3, 'Nintendo'),
								(4, 'PC');
