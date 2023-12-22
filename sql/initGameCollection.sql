CREATE TABLE UTILISATEUR(
   idUtil int,
   email VARCHAR(50) NOT NULL,
   mdp VARCHAR(100) NOT NULL,
   nomUtil VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   PRIMARY KEY(idUtil)
);

CREATE TABLE JEU(
   idJeux int,
   nomJeux VARCHAR(50) NOT NULL,
   dateSorti DATE NOT NULL,
   editeur VARCHAR(50) NOT NULL,
   descr TEXT,
   URLCover VARCHAR(150) NOT NULL,
   URLSite VARCHAR(100) NOT NULL,
   PRIMARY KEY(idJeux)
);

CREATE TABLE BIBLIOTHEQUE(
   idBibli SMALLINT,
   heureDeJeu DECIMAL(4,2) NOT NULL,
   idUtil int NOT NULL,
   idJeux int NOT NULL,
   PRIMARY KEY(idBibli),
   FOREIGN KEY(idUtil) REFERENCES UTILISATEUR(idUtil),
   FOREIGN KEY(idJeux) REFERENCES JEU(idJeux)
);
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
