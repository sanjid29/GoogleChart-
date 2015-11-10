CREATE TABLE IF NOT EXISTS `#__googlechart`
(
	`id` int (10) NOT NULL AUTO_INCREMENT,
	`value1` int (10) NOT NULL,
	`value2` int (10) NOT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


INSERT INTO `#__googlechart` (`value1`, `value2`) VALUES ('40', '60');
INSERT INTO `#__googlechart` (`value1`, `value2`) VALUES ('60', '40');