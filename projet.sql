-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 20:42
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

CREATE TABLE `carte` (
  `id_carte` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `statut` int(11) NOT NULL,
  `dateCreation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id_carte`, `points`, `statut`, `dateCreation`) VALUES
(21, 0, 0, '17-05-21');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `libelle`) VALUES
(1, 'Tacos'),
(4, 'Burrito'),
(5, 'Cali quasdilla'),
(6, 'Burrito'),
(7, 'Accompagnements'),
(8, 'Desserts');

-- --------------------------------------------------------

--
-- Structure de la table `categoriechef`
--

CREATE TABLE `categoriechef` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categoriechef`
--

INSERT INTO `categoriechef` (`id`, `libelle`) VALUES
(6, 'Chef Burrito'),
(7, 'Chef Tacos'),
(8, 'Chef Cali Quasdilla'),
(9, 'Chef Cuisine');

-- --------------------------------------------------------

--
-- Structure de la table `chef`
--

CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `dateNais` date NOT NULL,
  `categorie` int(50) NOT NULL,
  `local` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `fb` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chef`
--

INSERT INTO `chef` (`id`, `nom`, `prenom`, `email`, `adresse`, `dateNais`, `categorie`, `local`, `img`, `fb`) VALUES
(13, 'Abdelkader', 'Daghrour', 'abdelkader.daghrour@esprit.tn', 'beni khalled nabeul', '2000-11-10', 9, 48, '3.png', 'https://www.facebook.com/profile.php?id=100008911682926'),
(14, 'Achraf', 'Bouslama', 'achraf.bouslama@esprit.tn', 'Hammamet', '1980-12-25', 8, 19, '2.png', 'https://www.facebook.com/profile.php?id=100004907642469'),
(15, 'Myriam', 'Daghrour', 'meryem.daghrour@esprit.tn', 'menzeh 6', '1999-04-29', 7, 21, '1.png', 'https://www.facebook.com/myriam.daghrour.9'),
(16, 'Ahmed', 'Bahrouni', 'ahmeed.bahrouni@esprit.tn', 'cité Nasser', '1950-05-29', 6, 21, '5.png', 'https://www.facebook.com/ahmed.bahrouni.96'),
(17, 'Youssef', 'Hamouda', 'youssef.hamouda@esprit.tn', 'Hammamet', '1990-05-05', 8, 47, '7.png', 'https://www.facebook.com/profile.php?id=100007225937242'),
(20, 'Sessi', 'Rania', 'meryem.daghrour@esprit.tn', 'Hamma Sud', '1997-04-02', 8, 20, '9.png', 'https://www.facebook.com/myriam.daghrour.9');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateNais` varchar(100) NOT NULL,
  `cin` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` int(50) NOT NULL,
  `reduction` int(11) NOT NULL,
  `carte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `dateNais`, `cin`, `email`, `mdp`, `reduction`, `carte`) VALUES
(5, 'Abdelkader', 'daghrour', '10-11-2000', '09891580', 'meryem.daghrour@esprit.tn', 27986111, 0, 21);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `prix_tot` float NOT NULL,
  `client` int(11) NOT NULL,
  `etat` varchar(100) NOT NULL,
  `nomproduit` varchar(100) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `prix_tot`, `client`, `etat`, `nomproduit`, `qte`) VALUES
(1, 24, 5, 'en cours de traitement', 'Orangina s s ', 5),
(2, 20, 5, 'traitée', 'Orangina s s ', 5),
(3, 25, 5, 'en cours de traitement', 'Hard Bard s  ', 5);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `duree` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `img`, `libelle`, `date`, `duree`, `description`, `local`) VALUES
(1, '2.jpg', 'L’INVITÉ SURPRISE', '2021-06-18', 45, 'Une interview improvisée d’une personne influente de l’industrie...', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_fournisseur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` bigint(20) NOT NULL,
  `categorie` int(11) NOT NULL,
  `local` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id_fournisseur`, `nom`, `prenom`, `email`, `tel`, `categorie`, `local`, `img`) VALUES
(8, 'Ahmed', 'Bokri', 'ahmed.bahrouni@esprit.tn', 27986115, 1, 1, '7.jpg'),
(38, 'Haythem', 'Mannoubi', 'haythem.mannoubi@gmail.com', 78451236, 1, 1, '50.jpg'),
(41, 'Daghrour', 'Salah', 'abdelkader.daghrour@esprit.tn', 27986111, 7, 19, '6.jpg'),
(42, 'Hamed', 'Selim', 'haythem.mannoubi@gmail.com', 27986105, 6, 47, '10.jpg'),
(43, 'BenBrahim', 'Celine', 'celine.chennawoui@esprit.tn', 27000111, 6, 20, '9.jpg'),
(44, 'Daghrour', 'Meryem', 'meryem.daghrour@esprit.tn', 27984523, 1, 21, '8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `etat` varchar(100) NOT NULL,
  `frais_livraison` float NOT NULL,
  `local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id`, `client`, `etat`, `frais_livraison`, `local`) VALUES
(4, 5, 'en cours de traitement', 30, 1),
(5, 5, 'traitée', 25, 1),
(6, 5, 'en cours de traitement', 12, 1),
(7, 5, 'en cours de traitement', 13, 1),
(8, 5, 'en cours de traitement', 12, 1),
(9, 5, 'en cours de traitement', 13, 1),
(10, 5, 'en cours de traitement', 18, 21),
(11, 5, 'en cours de traitement', 33, 1);

-- --------------------------------------------------------

--
-- Structure de la table `local`
--

CREATE TABLE `local` (
  `id_local` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `nbTables` int(11) NOT NULL,
  `nbChaises` int(11) NOT NULL,
  `surface` float NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `dateCreation` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `local`
--

INSERT INTO `local` (`id_local`, `adresse`, `nbTables`, `nbChaises`, `surface`, `libelle`, `tel`, `dateCreation`) VALUES
(1, 'Hammamet sud', 15, 45, 180, 'Adresse1', 53445056, '2000-02-21'),
(19, 'Lac 1', 15, 45, 200, 'Adresse 2', 23386656, '2008-05-21'),
(20, 'Jerba', 20, 60, 250, 'Adresse 3', 27986111, '2012-05-21'),
(21, 'Gammarth', 30, 95, 350, 'Adresse 4', 78523641, '2018-06-25'),
(47, 'Touzer', 25, 80, 350, 'Adresse5', 26589214, '2020-02-21'),
(48, 'Sousse', 26, 80, 250, 'Adresse6', 27986121, '2019-02-21');

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `id_materiel` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `date_achat` date NOT NULL,
  `local` int(11) NOT NULL,
  `nbPieces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `libelle`, `date_achat`, `local`, `nbPieces`) VALUES
(1, 'Fourchette', '2021-05-05', 48, 30),
(2, 'Fourchette', '2021-05-05', 47, 35),
(3, 'Fourchette', '2021-05-05', 21, 30),
(4, 'Fourchette', '2021-05-05', 20, 25),
(5, 'Fourchette', '2021-05-05', 19, 40),
(6, 'Fourchette', '2021-05-05', 1, 35);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `idpanier` int(11) NOT NULL,
  `imgproduit` varchar(100) NOT NULL,
  `nomproduit` varchar(50) NOT NULL,
  `qte` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `produit` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `nb_calories` float NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(500) NOT NULL,
  `categorie` int(11) NOT NULL,
  `fournisseur` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `nb_calories`, `prix`, `description`, `categorie`, `fournisseur`, `img`) VALUES
(4, 'Al pastor', 24, 11, 'Chawarma. Il est le plus souvent accompagné d\'ananas, d\'oignon et de coriandre.', 1, 8, '1.jpg'),
(5, 'Al biria', 36, 11.5, 'La viande de birria est cuite lentement dans le bouillon, ce qui la rend toujours moelleuse et tendre.', 1, 8, '2.jpg'),
(6, 'Barbaco', 12.5, 12.5, 'Avec de la viande de chèvre ou de mouton.', 1, 8, '3.jpg'),
(7, 'Carnitas', 245, 13.5, 'Ce taco est composé d\'épaule de porc râpée et un certain nombre d\'herbes et d\'épices différentes.', 1, 8, '4.jpg'),
(8, 'Lengua Taco', 125, 11.95, 'La viande de langue de bœuf est généralement cuite lentement, ce qui donne une texture très douce et lisse.', 1, 8, '5.jpg'),
(9, 'Tinga', 458, 14.5, ' Les piments chipotle fumés sont au cœur de la délicieuse saveur des tacos au poulet tinga.', 1, 8, '6.jpg'),
(12, 'Breakfast', 20, 11.5, 'Le burrito se compose une tortilla farcie d\'ingrédients tels que des œufs, du bacon et des pommes de terre.', 6, 8, '7.png'),
(13, 'California', 12, 11.5, 'Le burrito se compose généralement d\'une tortilla de farine farcie de carne asada, de grandes quantités de fromage, de frites, de crème sure et de guacamole.', 6, 8, '8.png'),
(14, 'Carne asada', 12, 16.5, 'Le plat se compose d\'une grande tortilla de farine garnie de viande de carne asada, de pico de gallo et de guacamole.', 6, 8, '9.png'),
(15, 'Mission', 32, 15.9, 'Le burrito est assez gros et consiste en une tortilla cuite à la vapeur, rempli de haricots au lard, de riz et de laitue râpée.', 6, 8, '10.jpg'),
(16, 'SpicyBeef', 12, 11.95, 'Ce taco combine des haricots frits et du bœuf haché assaisonné avec des poivrons frais.', 6, 8, '11.jpg'),
(17, 'Wet', 17, 14.5, 'Le burrito humide est recouvert de sauce au chili rouge et de tas de fromage fondu. Il peut être rempli du bœuf râpé aux haricots et au riz.', 6, 8, '12.jpg'),
(18, 'Borocli', 8, 15.5, 'Le brocoli et l\'ail sautés, le fromage cheddar fort, l\'avocat écrasé et l\'aneth frais en font une quesadilla moyenne.', 5, 8, '13.jpg'),
(19, 'Caprese', 22, 12.5, 'Un déjeuner délicieux et facile qui se prépare rapidement et ne contient que cinq ingrédients!', 5, 8, '14.jpg'),
(20, 'Greek', 33, 16.5, 'Grecque-mex plus légère, servie avec un côté traditionnel de sauce tzatziki fraîche et acidulée', 5, 8, '15.jpg'),
(21, 'Guacamole', 42, 13.5, 'Les tièdes de la poêle, fraîchement grillés et suintants avec du guacamole chaud emballé à l\'avocat.', 5, 8, '16.jpg'),
(22, 'Potato', 16, 11.5, 'Les patates douces sont cuites dans un mélange de chipotles, de jus de citron vert et de miel, ce qui en fait la combinaison épicée.', 5, 8, '17.jpg'),
(23, 'Tomato Quesadilla', 32, 13.5, 'Quesadillas aux épinards et aux tomates. Il regorge de vitamines K et A, B2 et B6, C, de calcium et de potassium.', 5, 8, '18.jpg'),
(24, 'Chilly Frites', 29, 6, 'Plat délicieux d\'accompagnements ', 7, 8, '19.jpg'),
(25, 'Curved Frites ', 38, 9, 'Plat délicieux d\'accompagnements ', 7, 8, '20.jpg'),
(26, 'Hard Bard', 56, 5, 'Plat délicieux d\'accompagnements ', 7, 8, '21.jpg'),
(27, 'Ohoboho', 44, 6, 'Plat délicieux d\'accompagnement ', 7, 8, '22.jpg'),
(28, 'Poutine', 124, 9, 'Plat déliceiux d\'accompagnements ', 7, 8, '23.jpg'),
(29, 'Saucy', 145, 8.5, 'Plat déliceiux d\'accompagnements ', 7, 8, '24.jpg'),
(30, 'Flan', 19, 8.5, 'Desserts flan ', 8, 8, '25.jpg'),
(31, 'Churros ', 229, 7.5, 'Desserts sucrés ', 8, 8, '26.jpg'),
(32, 'Orangina ', 8, 4.5, 'Desserts goûts orange. ', 8, 8, '27.jpg'),
(33, 'Chocolata', 25, 6.5, 'Desserts goût chocolat.', 8, 8, '28.jpg'),
(34, 'Don taco', 111, 9.5, 'Desserts specialités rey del mexico.', 8, 8, '29.jpg'),
(35, 'Peki', 45, 8.5, 'Desserts fruites.', 8, 8, '30.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_reclamation` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `sujet` varchar(500) NOT NULL,
  `statut` int(11) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `message`, `sujet`, `statut`, `client`) VALUES
(4, 'hhhhhhhhhhhhhhhhh', 'hhhhhhhh', 0, 5),
(5, 'hhhhhhhhhhhhhhh', 'hhhhhhhh', 0, 5),
(6, 'hhhhhhhhhhhhhhh', 'hhhhhhhh', 0, 5),
(7, 'hhhhhhhhhhhhhhh', 'hhhhhhhhh', 0, 5),
(8, 'hhhhhhhhhhhhhhh', 'hhhhhh', 0, 5),
(9, 'aaaaaaaaaaaaaaaaaaaa', 'hhhhhhhh', 0, 5),
(10, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbdddddddddddddddddddddddd', 'hhhhhhhh875', 0, 5),
(11, '875llllllllllllllll', 'hhhhhhhh', 0, 5),
(12, '875llllllllllllllll', 'pppppppppppppppp', 0, 5),
(13, 'ahla', 'hhhh', 0, 5),
(14, 'ahmed', 'lolo', 0, 5),
(15, 'koli', 'hhhh', 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `date` date NOT NULL,
  `nb_perso` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `statut` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `date`, `nb_perso`, `message`, `statut`, `client`, `local`) VALUES
(1, '2021-05-19', 2, 'avec un ami', 0, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `cin` int(11) NOT NULL,
  `login_user` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `mdp_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`cin`, `login_user`, `adresse`, `mdp_user`) VALUES
(9891599, 'meryemdagh', 'beni khalled nabeul', 9891599);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carte`
--
ALTER TABLE `carte`
  ADD PRIMARY KEY (`id_carte`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `categoriechef`
--
ALTER TABLE `categoriechef`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chef_ibfk_1` (`local`),
  ADD KEY `categorie` (`categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `carte` (`carte`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `client` (`client`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `local` (`local`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_fournisseur`),
  ADD KEY `fournisseur_ibfk_1` (`categorie`),
  ADD KEY `fournisseur_ibfk_2` (`local`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client` (`client`),
  ADD KEY `local` (`local`);

--
-- Index pour la table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id_local`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`id_materiel`),
  ADD KEY `local` (`local`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`idpanier`),
  ADD KEY `client` (`client`),
  ADD KEY `local` (`local`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fournisseur` (`fournisseur`),
  ADD KEY `categorie` (`categorie`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_reclamation`),
  ADD KEY `client` (`client`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `client` (`client`),
  ADD KEY `local` (`local`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carte`
--
ALTER TABLE `carte`
  MODIFY `id_carte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `categoriechef`
--
ALTER TABLE `categoriechef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id_fournisseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `local`
--
ALTER TABLE `local`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `id_materiel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `idpanier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_reclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chef`
--
ALTER TABLE `chef`
  ADD CONSTRAINT `chef_ibfk_1` FOREIGN KEY (`local`) REFERENCES `local` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chef_ibfk_2` FOREIGN KEY (`categorie`) REFERENCES `categoriechef` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`carte`) REFERENCES `carte` (`id_carte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `evenement_ibfk_1` FOREIGN KEY (`local`) REFERENCES `local` (`id_local`);

--
-- Contraintes pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD CONSTRAINT `fournisseur_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fournisseur_ibfk_2` FOREIGN KEY (`local`) REFERENCES `local` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `livraison_ibfk_3` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `livraison_ibfk_4` FOREIGN KEY (`local`) REFERENCES `local` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD CONSTRAINT `materiel_ibfk_1` FOREIGN KEY (`local`) REFERENCES `local` (`id_local`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`local`) REFERENCES `local` (`id_local`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`fournisseur`) REFERENCES `fournisseur` (`id_fournisseur`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id_categorie`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`local`) REFERENCES `local` (`id_local`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
