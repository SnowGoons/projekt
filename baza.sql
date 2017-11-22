CREATE TABLE IF NOT EXISTS `uzytkownicy` (
   `id` int(10) NOT NULL AUTO_INCREMENT,
   `login` varchar(255) NOT NULL,
   `haslo` varchar(255) NOT NULL,
   `haslo2` varchar(255) NOT NULL,
   `email` varchar(255) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `haslo2`, `email`)
   VALUES (1, 'admin', 'password', 'password', 'admin@admin.pl');
