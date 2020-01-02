
CREATE TABLE IF NOT EXISTS `client` (
  `id_c` varchar(8) NOT NULL,
  `nom_c` varchar(20) NOT NULL,
  `prenom_c` varchar(20) NOT NULL,
  `tel_c` varchar(8) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(10) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-----------------------------------------------------------

CREATE TABLE IF NOT EXISTS `jours` (
  `id_j` int(11) NOT NULL,
  `nom_j` varchar(10) NOT NULL,
  PRIMARY KEY (`id_j`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `menu_jour` (
  `id_m` int(11) NOT NULL,
  `id_j` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  PRIMARY KEY (`id_m`),
  KEY `id_j` (`id_j`),
  KEY `id_p` (`id_p`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `menu_jour`
  ADD CONSTRAINT `menu_jour_ibfk_1` FOREIGN KEY (`id_j`) REFERENCES `jours` (`id_j`),
  ADD CONSTRAINT `menu_jour_ibfk_2` FOREIGN KEY (`id_p`) REFERENCES `plat` (`id_p`);
------------------------------------------------------------------------------------------

  CREATE TABLE IF NOT EXISTS `categorie_plat` (
    `id_categ` varchar(20) NOT NULL,
    `lib_categ` int(11) NOT NULL,
    PRIMARY KEY (`id_categ`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  -------------------------------------------------------------------------------------------

  CREATE TABLE IF NOT EXISTS `reservation` (
    `id_r` int(11) NOT NULL,
    `date_r` date NOT NULL,
    `nb_p` int(11) NOT NULL,
    `id_t` int(11) NOT NULL,
    `id_c` varchar(8) NOT NULL,
    PRIMARY KEY (`id_r`),
    KEY `reservation_ibfk_1` (`id_t`),
    KEY `id_c` (`id_c`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  ALTER TABLE `reservation`
    ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `client` (`id_c`),
    ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_t`) REFERENCES `table` (`id_t`);

-----------------------------------------------------------------------------------------

    CREATE TABLE IF NOT EXISTS `table` (
      `id_t` int(50) NOT NULL,
      `nb_p` int(6) NOT NULL,
      `statut` varchar(10) NOT NULL,
      PRIMARY KEY (`id_t`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-------------------------------------------------------------------------------------


CREATE TABLE IF NOT EXISTS `plat` (
  `id_p` int(11) NOT NULL,
  `nom_p` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` blob NOT NULL,
  `id_categ` varchar(20) NOT NULL,
  PRIMARY KEY (`id_p`),
  KEY `id_categ` (`id_categ`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `plat`
  ADD CONSTRAINT `plat_ibfk_1` FOREIGN KEY (`id_categ`) REFERENCES `categorie_plat` (`id_categ`);
---------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `commande` (
  `id_r` int(11) NOT NULL,
  `id_m` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id_r`,`id_m`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
