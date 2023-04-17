-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : lun. 17 avr. 2023 à 02:37
-- Version du serveur : 8.0.32
-- Version de PHP : 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Pokefight`
--

-- --------------------------------------------------------

--
-- Structure de la table `Combat`
--

CREATE TABLE `Combat` (
  `id_combat` int NOT NULL,
  `user` int NOT NULL,
  `my_poke1` varchar(100) NOT NULL,
  `my_poke2` varchar(100) NOT NULL,
  `poke_ia1` varchar(100) NOT NULL,
  `poke_ia2` varchar(100) NOT NULL,
  `nb_tour` int NOT NULL,
  `points` int NOT NULL,
  `date` varchar(50) NOT NULL,
  `resultat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Combat`
--

INSERT INTO `Combat` (`id_combat`, `user`, `my_poke1`, `my_poke2`, `poke_ia1`, `poke_ia2`, `nb_tour`, `points`, `date`, `resultat`) VALUES
(47, 30, 'salameche', 'pikachu', 'goupix', 'carapuce', 25, 3, '16-04-2023 14:55:04', 'victoire'),
(48, 30, 'goupix', 'feunard', 'voltorbe', 'caninos', 27, 3, '16-04-2023 14:55:34', 'victoire'),
(49, 30, 'galopa', 'electrode', 'tartard', 'lamantine', 13, 0, '16-04-2023 16:35:36', 'défaite'),
(50, 30, 'noeunoeuf', 'ptitard', 'otaria', 'ponyta', 18, 3, '16-04-2023 17:26:36', 'victoire'),
(51, 30, 'noeunoeuf', 'ptitard', 'otaria', 'ponyta', 26, 3, '16-04-2023 17:31:16', 'victoire'),
(52, 30, 'noeunoeuf', 'ptitard', 'otaria', 'ponyta', 18, 3, '16-04-2023 17:31:19', 'victoire'),
(53, 30, 'noeunoeuf', 'ptitard', 'otaria', 'ponyta', 18, 3, '16-04-2023 17:31:25', 'victoire'),
(55, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 37, 0, '16-04-2023 18:52:25', 'défaite'),
(56, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 37, 3, '16-04-2023 18:52:32', 'victoire'),
(57, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 37, 3, '16-04-2023 18:52:35', 'victoire'),
(58, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 37, 3, '16-04-2023 18:52:38', 'victoire'),
(59, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 37, 0, '16-04-2023 18:52:40', 'défaite'),
(60, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 37, 0, '16-04-2023 18:52:43', 'défaite'),
(61, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 37, 3, '16-04-2023 18:52:46', 'victoire'),
(62, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 39, 3, '16-04-2023 18:52:50', 'victoire'),
(63, 32, 'pikachu', 'raichu', 'voltorbe', 'electrode', 37, 3, '16-04-2023 18:52:54', 'victoire'),
(64, 30, 'noeunoeuf', 'voltorbe', 'bulbizare', 'otaria', 28, 3, '16-04-2023 19:10:33', 'victoire'),
(65, 30, 'noeunoeuf', 'voltorbe', 'bulbizare', 'otaria', 28, 3, '16-04-2023 19:10:39', 'victoire'),
(66, 30, 'noeunoeuf', 'voltorbe', 'bulbizare', 'otaria', 32, 3, '16-04-2023 19:10:43', 'victoire'),
(67, 30, 'noeunoeuf', 'voltorbe', 'bulbizare', 'otaria', 28, 3, '16-04-2023 19:10:46', 'victoire'),
(68, 30, 'noeunoeuf', 'voltorbe', 'bulbizare', 'otaria', 28, 3, '16-04-2023 19:10:49', 'victoire'),
(69, 30, 'bulbizare', 'ponyta', 'caninos', 'psykokwak', 25, 0, '16-04-2023 19:12:52', 'défaite'),
(70, 30, 'bulbizare', 'ponyta', 'caninos', 'psykokwak', 31, 0, '16-04-2023 19:12:55', 'défaite'),
(71, 30, 'bulbizare', 'ponyta', 'caninos', 'psykokwak', 18, 0, '16-04-2023 19:13:01', 'défaite'),
(72, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:16:09', 'victoire'),
(73, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:16:15', 'victoire'),
(74, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:16:17', 'victoire'),
(75, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:16:21', 'victoire'),
(76, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:16:26', 'victoire'),
(77, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:16:29', 'victoire'),
(78, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:16:33', 'victoire'),
(79, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:17:08', 'victoire'),
(80, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 9, 3, '16-04-2023 22:17:13', 'victoire'),
(81, 33, 'voltorbe', 'electrode', 'akwakwak', 'lamantine', 10, 3, '16-04-2023 22:17:17', 'victoire'),
(82, 33, 'voltorbe', 'ponyta', 'otaria', 'tetarte', 17, 0, '16-04-2023 22:39:24', 'défaite'),
(83, 33, 'lamantine', 'electrode', 'raichu', 'arcanin', 20, 3, '16-04-2023 22:39:42', 'victoire'),
(84, 33, 'lamantine', 'electrode', 'raichu', 'arcanin', 16, 3, '16-04-2023 22:39:48', 'victoire'),
(85, 33, 'lamantine', 'electrode', 'raichu', 'arcanin', 16, 3, '16-04-2023 22:40:17', 'victoire'),
(86, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 9, 3, '17-04-2023 02:45:49', 'victoire'),
(87, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 10, 3, '17-04-2023 02:46:46', 'victoire'),
(88, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 10, 3, '17-04-2023 02:46:52', 'victoire'),
(89, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 9, 3, '17-04-2023 02:46:56', 'victoire'),
(90, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 9, 3, '17-04-2023 02:47:03', 'victoire'),
(91, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 9, 3, '17-04-2023 02:47:12', 'victoire'),
(92, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 9, 3, '17-04-2023 02:47:15', 'victoire'),
(93, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 9, 3, '17-04-2023 02:47:18', 'victoire'),
(94, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 10, 3, '17-04-2023 02:47:21', 'victoire'),
(95, 34, 'pikachu', 'raichu', 'carapuce', 'tetarte', 10, 3, '17-04-2023 02:47:25', 'victoire'),
(96, 34, 'pikachu', 'raichu', 'akwakwak', 'lamantine', 10, 3, '17-04-2023 02:52:56', 'victoire'),
(97, 34, 'pikachu', 'raichu', 'akwakwak', 'lamantine', 9, 3, '17-04-2023 02:53:02', 'victoire'),
(98, 34, 'pikachu', 'raichu', 'akwakwak', 'lamantine', 9, 3, '17-04-2023 02:53:05', 'victoire'),
(99, 34, 'pikachu', 'raichu', 'akwakwak', 'lamantine', 9, 3, '17-04-2023 02:53:08', 'victoire'),
(100, 34, 'pikachu', 'raichu', 'akwakwak', 'lamantine', 10, 3, '17-04-2023 02:53:12', 'victoire'),
(101, 34, 'pikachu', 'raichu', 'akwakwak', 'lamantine', 10, 3, '17-04-2023 02:53:15', 'victoire'),
(102, 34, 'pikachu', 'raichu', 'akwakwak', 'lamantine', 10, 3, '17-04-2023 02:53:20', 'victoire'),
(103, 36, 'ponyta', 'feunard', 'bulbizare', 'tetarte', 16, 0, '17-04-2023 03:50:04', 'défaite'),
(104, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:50:56', 'victoire'),
(105, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:51:02', 'victoire'),
(106, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:51:05', 'victoire'),
(107, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:51:10', 'victoire'),
(108, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:51:13', 'victoire'),
(109, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:51:21', 'victoire'),
(110, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:51:24', 'victoire'),
(111, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:51:27', 'victoire'),
(112, 36, 'ponyta', 'feunard', 'bulbizare', 'noeunoeuf', 9, 3, '17-04-2023 03:51:33', 'victoire');

-- --------------------------------------------------------

--
-- Structure de la table `Pokemon`
--

CREATE TABLE `Pokemon` (
  `id_pokemon` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `PV` int NOT NULL,
  `PVMax` int NOT NULL,
  `PC` int NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Nb_potions` int NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Pokemon`
--

INSERT INTO `Pokemon` (`id_pokemon`, `nom`, `PV`, `PVMax`, `PC`, `Type`, `Nb_potions`, `img`) VALUES
(1, 'pikachu', 200, 200, 10, 'electro', 1, 'https://www.pokepedia.fr/images/thumb/7/76/Pikachu-DEPS.png/375px-Pikachu-DEPS.png'),
(3, 'bulbizare', 200, 200, 10, 'plante', 1, 'https://www.pokepedia.fr/images/thumb/e/ef/Bulbizarre-RFVF.png/375px-Bulbizarre-RFVF.png'),
(5, 'salameche', 200, 200, 10, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/8/89/Salam%C3%A8che-RFVF.png/375px-Salam%C3%A8che-RFVF.png'),
(7, 'carapuce', 200, 200, 10, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/c/cc/Carapuce-RFVF.png/375px-Carapuce-RFVF.png'),
(9, 'goupix', 200, 200, 10, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/f/f6/Goupix-RFVF.png/375px-Goupix-RFVF.png'),
(11, 'psykokwak', 200, 200, 10, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/4/44/Psykokwak-RFVF.png/375px-Psykokwak-RFVF.png'),
(12, 'raichu', 200, 200, 15, 'electro', 1, 'https://www.pokepedia.fr/images/thumb/7/7d/Raichu-RFVF.png/375px-Raichu-RFVF.png'),
(13, 'feunard', 200, 200, 15, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/0/0c/Feunard-RFVF.png/375px-Feunard-RFVF.png'),
(14, 'akwakwak', 200, 200, 15, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/6/6e/Akwakwak-RFVF.png/375px-Akwakwak-RFVF.png'),
(15, 'caninos', 200, 200, 10, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/e/e2/Caninos-RFVF.png/375px-Caninos-RFVF.png'),
(16, 'arcanin', 200, 200, 15, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/7/7e/Arcanin-RFVF.png/375px-Arcanin-RFVF.png'),
(17, 'ptitard', 200, 200, 10, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/4/4b/Ptitard-RFVF.png/375px-Ptitard-RFVF.png'),
(18, 'tetarte', 200, 200, 12, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/5/54/T%C3%AAtarte-RFVF.png/375px-T%C3%AAtarte-RFVF.png'),
(19, 'tartard', 200, 200, 15, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/3/38/Tartard-RFVF.png/375px-Tartard-RFVF.png'),
(20, 'ponyta', 200, 200, 10, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/8/8f/Ponyta-RFVF.png/375px-Ponyta-RFVF.png'),
(21, 'galopa', 200, 200, 15, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/9/9c/Galopa-RFVF.png/375px-Galopa-RFVF.png'),
(22, 'otaria', 200, 200, 10, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/3/31/Otaria-RFVF.png/375px-Otaria-RFVF.png'),
(23, 'lamantine', 200, 200, 15, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/9/93/Lamantine-RFVF.png/375px-Lamantine-RFVF.png'),
(24, 'voltorbe', 200, 200, 10, 'electro', 1, 'https://www.pokepedia.fr/images/thumb/5/59/Voltorbe-RFVF.png/375px-Voltorbe-RFVF.png'),
(25, 'electrode', 200, 200, 15, 'electro', 1, 'https://www.pokepedia.fr/images/thumb/0/03/%C3%89lectrode-RFVF.png/375px-%C3%89lectrode-RFVF.png'),
(26, 'noeunoeuf', 200, 200, 10, 'plante', 1, 'https://www.pokepedia.fr/images/thumb/3/39/Noeunoeuf-RFVF.png/375px-Noeunoeuf-RFVF.png'),
(27, 'noadkoko', 200, 200, 12, 'plante', 1, 'https://www.pokepedia.fr/images/thumb/1/1f/Noadkoko-RFVF.png/375px-Noadkoko-RFVF.png'),
(28, 'Mewtwo', 200, 200, 20, 'electro', 2, 'https://www.pokepedia.fr/images/thumb/d/d8/Mewtwo-DEPS.png/375px-Mewtwo-DEPS.png'),
(29, 'Mew', 200, 200, 20, 'electro', 2, 'https://www.pokepedia.fr/images/thumb/1/16/Mew-DEPS.png/375px-Mew-DEPS.png'),
(30, 'Electhor', 200, 200, 15, 'electro', 1, 'https://www.pokepedia.fr/images/thumb/8/81/%C3%89lecthor-RFVF.png/375px-%C3%89lecthor-RFVF.png'),
(31, 'Artikodin', 200, 200, 15, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/b/bb/Artikodin-RFVF.png/375px-Artikodin-RFVF.png'),
(32, 'Sulfura', 200, 200, 15, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/d/db/Sulfura-DEPS.png/375px-Sulfura-DEPS.png'),
(33, 'Magicarpe', 200, 200, 5, 'eau', 5, 'https://www.pokepedia.fr/images/thumb/0/06/Magicarpe-RFVF.png/375px-Magicarpe-RFVF.png'),
(34, 'Magneti', 200, 200, 10, 'electro', 1, 'https://www.pokepedia.fr/images/thumb/b/b9/Magn%C3%A9ti-RFVF.png/375px-Magn%C3%A9ti-RFVF.png'),
(35, 'Magneton', 200, 200, 15, 'electro', 1, 'https://www.pokepedia.fr/images/thumb/3/36/Magn%C3%A9ton-RFVF.png/375px-Magn%C3%A9ton-RFVF.png'),
(36, 'Miaouss', 200, 200, 8, 'electro', 3, 'https://www.pokepedia.fr/images/thumb/b/b8/Miaouss-RFVF.png/375px-Miaouss-RFVF.png'),
(37, 'Tortank', 200, 200, 15, 'eau', 1, 'https://www.pokepedia.fr/images/thumb/2/24/Tortank-RFVF.png/375px-Tortank-RFVF.png'),
(38, 'Dracaufeu', 200, 200, 15, 'feu', 1, 'https://www.pokepedia.fr/images/thumb/1/17/Dracaufeu-RFVF.png/375px-Dracaufeu-RFVF.png'),
(39, 'Florizare', 200, 200, 15, 'plante', 1, 'https://www.pokepedia.fr/images/thumb/4/42/Florizarre-RFVF.png/375px-Florizarre-RFVF.png');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id_user` int NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`id_user`, `firstname`, `lastname`, `nickname`, `mail`, `password`) VALUES
(20, 'q', 'q', 'q', 'q@q', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf'),
(22, 'moi', 'moi', 'moi', 'moi@moi', 'a4f0e1d1b5eb23e3482a14b4a9d4e8106e83f7887471e4a73c2557ade280bfe5'),
(23, 'a', 'a', 'a', 'a@a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(24, 'azerty', 'azerty', 'azerty', 'azerty@azerty', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9'),
(29, 'aze', 'aze', 'aze', 'w@w', 'd4b3dfbf113cc8b2f6fd71bcb24b761d04b47c04a59b22a2a7db91b275542892'),
(30, 'michaël', 'benattou', 'mika', 'm.ben@liv.fr', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9'),
(31, 'b', 'b', 'b', 'b@b', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d'),
(32, 'd', 'd', 'd', 'd@d', '18ac3e7343f016890c510e93f935261169d9e3f565436429830faf0934f4f8e4'),
(33, 'Didier', 'Bourdon', 'didier', 'dd@dd.fr', '9b7ecc6eeb83abf9ade10fe38865df4499be3568dcc507ae2ec3b44989cb0093'),
(34, 'Satochi', 'Bourg-palette', 'Sacha', 'Sacha@pokemon.fr', '5982776464b2533a0bd175fd4ec4bdd5540a6552c50e0e7501a5109b709cf6c1'),
(35, 'albert', 'albert', 'albert', 'albert@cimer.com', '5fc6171f625ef967eba2588cd40e85479d7980690b4d7a214e6e56757ba33a20'),
(36, 'diane', 'robert', 'diane', 'd@r', 'a6b988796bd91c209657d13fc7c14b8a7c9652cec0232f97046adb2e916ed5cc');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Combat`
--
ALTER TABLE `Combat`
  ADD PRIMARY KEY (`id_combat`),
  ADD KEY `user` (`user`);

--
-- Index pour la table `Pokemon`
--
ALTER TABLE `Pokemon`
  ADD PRIMARY KEY (`id_pokemon`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Combat`
--
ALTER TABLE `Combat`
  MODIFY `id_combat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `Pokemon`
--
ALTER TABLE `Pokemon`
  MODIFY `id_pokemon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Combat`
--
ALTER TABLE `Combat`
  ADD CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `User` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
