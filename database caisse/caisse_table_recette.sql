
-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `ref_r` varchar(11) NOT NULL,
  `datee_r` date NOT NULL,
  `mtchiffre_r` double NOT NULL,
  `libelleop_r` varchar(180) NOT NULL,
  `mtlettre_r` varchar(150) NOT NULL,
  `signdirection_r` varchar(25) NOT NULL,
  `caissier_r` varchar(25) NOT NULL,
  `benef_r` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
