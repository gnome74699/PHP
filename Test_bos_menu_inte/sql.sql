CREATE TABLE `interruptions` (
`id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du timer sur cg',
`stamp_maj` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`transport` varchar(32) NOT NULL COMMENT 'transport affecte',
`type` int(1) NOT NULL DEFAULT '0' COMMENT 'type d intervention : 0 intervention programme 1 incident down 2 incident ralenti',
`description` text COMMENT 'description destin au support de l''interruption',
`stamp_begin` int(10) unsigned NOT NULL COMMENT 'date de debut de l incident',
`stamp_end` int(10) NOT NULL COMMENT 'date de fin de l incident',
`active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'activité du tuple 0 inactif 1 actif',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1