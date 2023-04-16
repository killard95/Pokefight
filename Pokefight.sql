-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : dim. 16 avr. 2023 à 19:11
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
(54, 21, 'noeunoeuf', 'otaria', 'voltorbe', 'ponyta', 21, 0, '16-04-2023 18:18:23', 'défaite'),
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
(71, 30, 'bulbizare', 'ponyta', 'caninos', 'psykokwak', 18, 0, '16-04-2023 19:13:01', 'défaite');

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
(27, 'noadkoko', 200, 200, 12, 'plante', 1, 'https://www.pokepedia.fr/images/thumb/1/1f/Noadkoko-RFVF.png/375px-Noadkoko-RFVF.png');

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
(21, 'w', 'w', 'w', 'w@w', '50e721e49c013f00c62cf59f2163542a9d8df02464efeb615d31051b0fddc326'),
(22, 'moi', 'moi', 'moi', 'moi@moi', 'a4f0e1d1b5eb23e3482a14b4a9d4e8106e83f7887471e4a73c2557ade280bfe5'),
(23, 'a', 'a', 'a', 'a@a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(24, 'azerty', 'azerty', 'azerty', 'azerty@azerty', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9'),
(29, 'aze', 'aze', 'aze', 'w@w', 'd4b3dfbf113cc8b2f6fd71bcb24b761d04b47c04a59b22a2a7db91b275542892'),
(30, 'michaël', 'benattou', 'mika', 'm.ben@liv.fr', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9'),
(31, 'b', 'b', 'b', 'b@b', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d'),
(32, 'd', 'd', 'd', 'd@d', '18ac3e7343f016890c510e93f935261169d9e3f565436429830faf0934f4f8e4');

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
  MODIFY `id_combat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `Pokemon`
--
ALTER TABLE `Pokemon`
  MODIFY `id_pokemon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
