CREATE TABLE IF NOT EXISTS `image_upload` (
  `id` int(11) NOT NULL auto_increment,
  `image` text NOT NULL,
  `thumbnail` text NOT NULL,
  `thumbnail2` text NOT NULL,
  `thumbnail3` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;