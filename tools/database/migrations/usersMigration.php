<?php

$sqls = [
    'DROP TABLE IF EXISTS users;',

	'CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL UNIQUE,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    )
    COLLATE=`utf8_general_ci` ENGINE=InnoDB;',
];