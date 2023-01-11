-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 jan. 2023 à 09:49
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`, `image`) VALUES
(1, 'Bureau', 'cat-bureau.jpg'),
(2, 'Chaise', 'cat-chaise.jpg'),
(3, 'Commode', 'cat-commode.jpg'),
(4, 'Dressing', 'cat-dressing.jpg'),
(5, 'Lit', 'cat-lit.jpg'),
(6, 'Table', 'cat-table.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `categorie_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_id` (`categorie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `price`, `image`, `quantity`, `categorie_id`) VALUES
(1, 'FREDDE', 'Bureau gamer, 140/185x74x146 cm', 299, 'fredde-bureau-gamer-noir__1191947_ph172928_s5_V2.jpg', 16, 1),
(2, 'LAGKAPTEN / ALEX', 'Bureau, effet chêne blanchi/blanc, 120x60 cm', 139, 'lagkapten-alex-bureau-effet-chene-blanchi-blanc__1028367_pe835303_s5.jpg', 5, 1),
(3, 'KALLAX / LINNMON', 'Combinaison bureau, blanc, 77x139x147 cm', 114.98, 'kallax-linnmon-combinaison-bureau-blanc__1097492_pe864988_s5.jpg', 2, 1),
(4, 'INGOLF', 'Chaise, blanc', 79.99, 'ingolf-chaise-blanc__1052477_pe846140_s5.jpg', 8, 2),
(5, 'FANBYN', 'Chaise, blanc/intérieur/extérieur', 89.95, 'fanbyn-chaise-blanc-interieur-exterieur__0615448_pe687273_s5.jpg', 13, 2),
(6, 'EKEDALEN', 'Chaise, motif chêne/Orrsta gris clair', 69.99, 'ekedalen-chaise-motif-chene-orrsta-gris-clair__1084566_pe859695_s5.jpg', 0, 2),
(7, 'MALM', 'Commode 6 tiroirs, blanc, 160x78 cm', 189, 'malm-commode-6-tiroirs-blanc__0823861_pe775996_s5.jpg', 0, 3),
(8, 'KOPPANG', 'Commode 3 tiroirs, blanc, 90x83 cm', 89.99, 'koppang-commode-3-tiroirs-blanc__0778084_pe758829_s5.jpg', 78, 3),
(9, 'BRIMNES', 'Commode 3 tiroirs, blanc/verre givré, 78x95 cm', 99.99, 'brimnes-commode-3-tiroirs-blanc-verre-givre__0859059_pe631488_s5.jpg', 0, 3),
(10, 'PAX', 'Armoire-penderie, blanc, 175x58x201 cm', 378, 'pax-armoire-penderie-blanc__0855930_pe557276_s5.jpg', 32, 4),
(11, 'PAX / TYSSEDAL', 'Armoire-penderie, blanc/verre blanc, 175x60x201 cm', 568, 'pax-tyssedal-armoire-penderie-blanc-verre-blanc__1104084_pe867502_s5.jpg', 15, 4),
(12, 'PAX / BERGSBO', 'Armoire-penderie, blanc/effet chêne blanchi, 250x60x236 cm', 753, 'pax-bergsbo-armoire-penderie-blanc-effet-chene-blanchi__1103593_pe867325_s5.jpg', 86, 4),
(13, 'HEMNES', 'Lit banquette 2 places (structure), blanc, 80x200 cm', 399, 'hemnes-lit-banquette-2-places-structure-blanc__1036901_pe838568_s5.jpg', 74, 5),
(14, 'MALM', 'Cadre de lit haut, blanc, 140x200 cm', 199, 'malm-cadre-de-lit-haut-2-rangements-blanc-luroey__1101598_pe866682_s5.jpg', 63, 5),
(15, 'MALM', 'Cadre de lit, haut, 2 rangements, blanc/Luröy, 140x200 cm', 304, 'malm-cadre-de-lit-haut-blanc__0800857_ph163673_s5.jpg', 74, 5),
(16, 'EKEDALEN', 'Table extensible, bouleau, 120/180x80 cm', 229, 'ekedalen-table-extensible-bouleau__0870811_pe640680_s5.jpg', 86, 6),
(17, 'DOCKSTA / ÄLVSTA', 'Table et 4 chaises, blanc blanc/rotin chromé, 103 cm', 475, 'docksta-aelvsta-table-et-4-chaises-blanc-blanc-rotin-chrome__1116272_pe872447_s5.jpg', 74, 6),
(18, 'SANDSBERG / ADDE', 'Table et 4 chaises, noir/noir, 110x67 cm', 118.95, 'sandsberg-adde-table-et-4-chaises-noir-noir__1027680_pe834977_s5.jpg', 16, 6);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(30) NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `pwd`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
