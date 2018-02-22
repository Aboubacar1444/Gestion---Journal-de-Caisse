
--
-- Index pour les tables exportées
--

--
-- Index pour la table `depense`
--
ALTER TABLE `depense`
  ADD PRIMARY KEY (`id`,`ref`),
  ADD UNIQUE KEY `ref` (`ref`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`,`ref_r`),
  ADD UNIQUE KEY `ref` (`ref_r`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refdepense` (`refdepense`);

--
-- Index pour la table `relationr`
--
ALTER TABLE `relationr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refrecette` (`refrecette`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `depense`
--
ALTER TABLE `depense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `relation`
--
ALTER TABLE `relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `relationr`
--
ALTER TABLE `relationr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `relation`
--
ALTER TABLE `relation`
  ADD CONSTRAINT `ref_dep_fk` FOREIGN KEY (`refdepense`) REFERENCES `depense` (`ref`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `relationr`
--
ALTER TABLE `relationr`
  ADD CONSTRAINT `ref_rec_fk` FOREIGN KEY (`refrecette`) REFERENCES `recette` (`ref_r`) ON DELETE NO ACTION ON UPDATE CASCADE;
