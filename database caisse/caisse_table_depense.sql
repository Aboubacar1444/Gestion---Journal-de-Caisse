
-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE `depense` (
  `id` int(11) NOT NULL,
  `ref` varchar(11) NOT NULL,
  `datee` date NOT NULL,
  `mtchiffre` double NOT NULL,
  `libelleop` varchar(75) NOT NULL,
  `mtlettre` varchar(75) NOT NULL,
  `signdirection` varchar(20) NOT NULL,
  `caissier` varchar(20) NOT NULL,
  `benef` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
