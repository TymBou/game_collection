DROP TABLE IF EXISTS bibliotheque;
DROP TABLE IF EXISTS jeu;
DROP TABLE IF EXISTS utilisateur;

CREATE TABLE utilisateur(
   idUtil int,
   email VARCHAR(50) NOT NULL,
   mdp VARCHAR(100) NOT NULL,
   nomUtil VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL,
   PRIMARY KEY(idUtil)
);



CREATE TABLE jeu(
   idJeu int,
   nomJeu VARCHAR(50) NOT NULL,
   dateSortie DATE NOT NULL,
   editeur VARCHAR(50) NOT NULL,
   plateforme VARCHAR(100) NOT NULL,
   descr TEXT,
   URLCover VARCHAR(150) NOT NULL,
   URLSite VARCHAR(100) NOT NULL,
   PRIMARY KEY(idJeu)
);

CREATE TABLE bibliotheque(
   idBibli SMALLINT,
   heureDeJeu DECIMAL(10,2) NOT NULL,
   idUtil int NOT NULL,
   idJeu int NOT NULL,
   PRIMARY KEY(idBibli),
   FOREIGN KEY(idUtil) REFERENCES UTILISATEUR(idUtil) ON DELETE CASCADE,
   FOREIGN KEY(idJeu) REFERENCES JEU(idJeu) ON DELETE CASCADE
);
--
-- Inserts
--

INSERT INTO UTILISATEUR VALUES(1, 'uneAdresse@mail.com', '$2y$10$wUEZ04LL3KFh0sjCVhOmDeXUMHcjSg49G7DGDDxEYnaVKoF4o9Bie', 'Dubois', 'Jacques'),
								(2, 'uneAutreAdresse@mail.com', '$2y$10$AwUt1Pqa7zSzeKrItFhKJeX7dx6Ox.Vd6cipLjMVPF0lojwTzNwfS', 'Dupond', 'Paul'),
								(3, 'adresse3@mail.com', '$2y$10$ljDOPrIvkesddHdAx9KEg.IF2Pz.wL0o2DxsRJf4vhg8Uipm4F2lK', 'Deschamps', 'Jean');

INSERT INTO JEU VALUES(1, 'Horizon Zero Down', '2017-02-28', 'Guerrilla Games', 'PlayStation5', 'RPG post-apocaliptique', 'https://cdn.akamai.steamstatic.com/steam/apps/1151640/capsule_616x353.jpg?t=1698159193', 'https://www.playstation.com/en-gb/games/horizon-zero-dawn/'),
						(2, 'The Legend of Zelda: Majora s Mask', '2000-04-27', 'Nintendo', 'Nintendo Switch', 'RPG de la saga des zelda', 'https://cdn.gamekult.com/images/gallery/99/993/the-legend-of-zelda-majora-s-mask-n64-1d9cceea.jpg', 'https://www.nintendo.fr/Jeux/Nintendo-64/The-Legend-of-Zelda-Majora-s-Mask-269525.html'),
						(3, 'Minecraft', '2011-11-18', 'Mojang', 'All', 'Sandbox', 'https://static.actugaming.net/media/2016/02/minecraft-889x500.jpg', 'https://www.minecraft.net/fr-fr'),
                  (4, 'Halo: Infinite', '2021-12-08', '3434 Industries', 'XBox/PC', 'FPS', 'https://upload.wikimedia.org/wikipedia/en/1/14/Halo_Infinite.png', 'https://www.xbox.com/fr-FR/games/halo-infinite'),
                  (5, 'Borderlands 3', '2019-09-13', '2K', 'All', 'FPS', 'https://image.api.playstation.com/vulcan/ap/rnd/202010/2323/p50N4PBK9rNanGYKFecTvac5.png', 'https://borderlands.2k.com/fr-FR/borderlands-3/'),
                  (6, 'Stardew Valley', '2016-02-26', 'Chucklefish', 'Nintendo/PC/Playstation', 'RPG', 'https://i0.wp.com/news.qoo-app.com/en/wp-content/uploads/sites/3/2019/11/19111912372580.jpg', 'https://www.stardewvalley.net/'),
                  (7, 'Sea of Thieves', '2018-03-20', 'Xbox Games Studio', 'XBox/PC', 'Pirate', 'https://image.jeuxvideo.com/medias/152240/1522396063-3523-jaquette-avant.jpg', 'https://www.seaofthieves.com/fr');
INSERT INTO BIBLIOTHEQUE VALUES(1, 164.7, 1, 1),
								(2, 258.3, 1, 2),
								(3, 68.4, 2, 2),
								(4, 864.5, 2, 3),
								(5, 157.2, 3, 3);
