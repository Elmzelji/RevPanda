DROP TABLE IF EXISTS `A`;
CREATE TABLE `A` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `B`;
CREATE TABLE `B` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `C`;
CREATE TABLE `C` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `A` (`id`, `data`) VALUES
(1, 'testing'),
(2, '12'),
(3, 'another test');

INSERT INTO `B` (`id`, `data`) VALUES
(1, 13),
(2, 44),
(3, 45),
(4, 8475),
(5, 344);

INSERT INTO `C` (`id`, `data`) VALUES
(1, 'tableC data'),
(2, 'test C'),
(3, '55f'),
(4, 'cc');