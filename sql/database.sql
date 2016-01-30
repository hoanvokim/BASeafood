
CREATE TABLE `users` (
 `id` tinyint(4) NOT NULL AUTO_INCREMENT,
 `username` varchar(30) NOT NULL,
 `password` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into users (username, password) values ('superadmin', MD5('supersecret'));

Create table `menu`(
	`id` tinyint not null auto_increment,
	`name` nvarchar(100) not null,
	`fk_parent` tinyint ,
	`url` varchar(1000),
	PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

create table `category`(
   `id` tinyint not null auto_increment,
	`name` nvarchar(100) not null,
	`fk_parent` tinyint ,
	PRIMARY KEY (`id`),
	INDEX `category_parent_index` (`fk_parent`),
    FOREIGN KEY (`fk_parent`) 
        REFERENCES `category`(`id`)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;