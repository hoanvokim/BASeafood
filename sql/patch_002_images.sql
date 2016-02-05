create table `images`(
    `id` tinyint not null auto_increment,
    `name` nvarchar(100) not null,
    `url` nvarchar(250) not null,
    `thumb_url` nvarchar(250) not null,
    PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;