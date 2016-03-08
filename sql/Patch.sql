CREATE DATABASE `baseafood`;

-- Path 001 : users, menu, category --

CREATE TABLE `baseafood`.`users` (
 `id` TINYINT(4) NOT NULL AUTO_INCREMENT,
 `username` VARCHAR(30) NOT NULL,
 `password` VARCHAR(100) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `baseafood`.`users` (username, password) VALUES ('superadmin', MD5('supersecret'));

CREATE TABLE `baseafood`.`menu`(
	`id` TINYINT NOT NULL AUTO_INCREMENT,
	`name` nvarchar(100) NOT NULL,
	`fk_parent` TINYINT ,
	`url` VARCHAR(1000),
	`order` INT,
	PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE `baseafood`.`category` (
   `id` TINYINT NOT NULL AUTO_INCREMENT,
	`en_name` nvarchar(100) NOT NULL,
	`vi_name` nvarchar(100) NOT NULL,
	`fk_parent` TINYINT ,
	PRIMARY KEY (`id`),
	INDEX `category_parent_index` (`fk_parent`),
    FOREIGN KEY (`fk_parent`) 
        REFERENCES `category`(`id`)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- Path 002 : images --

CREATE TABLE `baseafood`.`images`(
    `id` TINYINT NOT NULL AUTO_INCREMENT,
    `name` nvarchar(100) NOT NULL,
    `url` nvarchar(250) NOT NULL,
    `thumb_url` nvarchar(250) NOT NULL,
    PRIMARY KEY (`id`)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- Path 003 : products --

CREATE TABLE `baseafood`.`product` (
  `id`          TINYINT NOT NULL AUTO_INCREMENT,
  `en_name` nvarchar(100) NOT NULL,
  `vi_name` nvarchar(100) NOT NULL,
  `size` nvarchar(100) NOT NULL,
  `packing` nvarchar(100) NOT NULL,
  `url` nvarchar(250) not null,
  `fk_category` TINYINT,
  PRIMARY KEY (`id`),
  INDEX `product_category_index` (`fk_category`),
  FOREIGN KEY (`fk_category`)
  REFERENCES `category` (`id`)
)
  ENGINE =MyISAM
  DEFAULT CHARSET =latin1
  AUTO_INCREMENT =1;

-- Path 004 : news --

CREATE TABLE `baseafood`.`news` (
    `id`                TINYINT       NOT NULL AUTO_INCREMENT,
    `title`             nvarchar(100) NOT NULL,
    `content`           TEXT,
    `url_image`         nvarchar(250),
    `url_attached_file` nvarchar(250),
    `type`              nvarchar(100),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

-- Path 005 : gallery --

CREATE TABLE `baseafood`.`gallery` (
    `id`        TINYINT       NOT NULL AUTO_INCREMENT,
    `name`      nvarchar(100) NOT NULL,
    `url_image` nvarchar(250),
    `group`     nvarchar(100),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

-- Path 006 : features, sliders --
CREATE TABLE `baseafood`.`features` (
    `id`        TINYINT       NOT NULL AUTO_INCREMENT,
    `en_name`      nvarchar(100) NOT NULL,
    `vi_name`      nvarchar(100) NOT NULL,
    `icon`      nvarchar(100) DEFAULT 'fa fa-asterisk',
    `en_title` nvarchar(150),
    `vi_title` nvarchar(150),
    `title_icon` nvarchar(100) DEFAULT 'fa fa-asterisk',
    `en_content`     nvarchar(500),
    `vi_content`     nvarchar(500),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

CREATE TABLE `baseafood`.`sliders` (
    `id`        TINYINT       NOT NULL AUTO_INCREMENT,
    `img_src`      nvarchar(100) NOT NULL,
    `en_content`      nvarchar(200),
    `vi_content`      nvarchar(200),
    `url` nvarchar(150),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;
