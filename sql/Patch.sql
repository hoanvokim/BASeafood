DROP DATABASE `baseafood`;
CREATE DATABASE `baseafood`;

-- Path 001 : users, menu, category --

CREATE TABLE `baseafood`.`users` (
    `id`       TINYINT(4)   NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(30)  NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

INSERT INTO `baseafood`.`users` (username, password) VALUES ('superadmin', MD5('supersecret'));


CREATE TABLE `baseafood`.`category` (
    `id`      TINYINT       NOT NULL AUTO_INCREMENT,
    `en_name` NVARCHAR(100) NOT NULL,
    `vi_name` NVARCHAR(100) NOT NULL,
    `parent`  TINYINT,
    `slug`    VARCHAR(100)  NOT NULL,
    `number`  INT           NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `category_parent_index` (`parent`),
    FOREIGN KEY (`parent`)
    REFERENCES `baseafood`.`category` (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

CREATE TABLE `baseafood`.`tags` (
    `id`      TINYINT NOT NULL AUTO_INCREMENT,
    `name` NVARCHAR(200),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

CREATE TABLE `baseafood`.`images` (
    `id`        TINYINT       NOT NULL AUTO_INCREMENT,
    `name`      NVARCHAR(100) NOT NULL,
    `url`       NVARCHAR(250) NOT NULL,
    `thumb_url` NVARCHAR(250) NOT NULL,
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

-- Path 003 : products --

CREATE TABLE `baseafood`.`product` (
    `id`          TINYINT       NOT NULL AUTO_INCREMENT,
    `en_name`     NVARCHAR(100) NOT NULL,
    `vi_name`     NVARCHAR(100) NOT NULL,
    `size`        NVARCHAR(100) NOT NULL,
    `packing`     NVARCHAR(100) NOT NULL,
    `url`         NVARCHAR(250) NOT NULL,
    `fk_category` TINYINT,
    PRIMARY KEY (`id`),
    INDEX `product_category_index` (`fk_category`),
    FOREIGN KEY (`fk_category`)
    REFERENCES `baseafood`.`category` (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

-- Path 004 : news --

CREATE TABLE `baseafood`.`news` (
    `id`                TINYINT       NOT NULL          AUTO_INCREMENT,
    `en_title`          NVARCHAR(100) NOT NULL,
    `vi_title`          NVARCHAR(100) NOT NULL,
    `en_content`        TEXT,
    `vi_content`        TEXT,
    `url_attached_file` NVARCHAR(250),
    `created_date`      DATETIME      NULL,
    `updated_date`      DATETIME      NULL,
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

CREATE TRIGGER `baseafood`.`news_INSERT` BEFORE INSERT ON `baseafood`.`news`
FOR EACH ROW BEGIN
    -- Set the creation date
    SET new.created_date = now();

    -- Set the udpate date
    SET new.updated_date = now();
END;

CREATE TRIGGER `baseafood`.`news_UPDATE` BEFORE UPDATE ON `baseafood`.`news`
FOR EACH ROW BEGIN
    -- Set the udpate date
    SET new.updated_date = now();
END;

-- Path 005 : gallery --

CREATE TABLE `baseafood`.`gallery` (
    `id`        TINYINT       NOT NULL AUTO_INCREMENT,
    `en_name`   NVARCHAR(100) NOT NULL,
    `vi_name`   NVARCHAR(100) NOT NULL,
    `url_image` NVARCHAR(250),
    `group`     NVARCHAR(100),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

-- Path 006 : features, sliders --
CREATE TABLE `baseafood`.`features` (
    `id`         TINYINT       NOT NULL AUTO_INCREMENT,
    `en_name`    NVARCHAR(100) NOT NULL,
    `vi_name`    NVARCHAR(100) NOT NULL,
    `icon`       NVARCHAR(100)          DEFAULT 'fa fa-asterisk',
    `en_title`   NVARCHAR(150),
    `vi_title`   NVARCHAR(150),
    `title_icon` NVARCHAR(100)          DEFAULT 'fa fa-asterisk',
    `en_content` NVARCHAR(500),
    `vi_content` NVARCHAR(500),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

CREATE TABLE `baseafood`.`sliders` (
    `id`         TINYINT       NOT NULL AUTO_INCREMENT,
    `img_src`    NVARCHAR(100) NOT NULL,
    `en_content` NVARCHAR(200),
    `vi_content` NVARCHAR(200),
    `url`        NVARCHAR(150),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

CREATE TABLE `baseafood`.`generic_information` (
    `id`         TINYINT NOT NULL AUTO_INCREMENT,
    `type`       VARCHAR(100),
    `order`      TINYINT,
    `en_title`   NVARCHAR(200),
    `vi_title`   NVARCHAR(200),
    `en_content` LONGTEXT
                 CHARACTER SET utf8
                 COLLATE utf8_general_ci,
    `vi_content` LONGTEXT
                 CHARACTER SET utf8
                 COLLATE utf8_general_ci,
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

CREATE TABLE `baseafood`.`product_tags` (
    `id`         TINYINT NOT NULL AUTO_INCREMENT,
    `fk_product` TINYINT,
    `fk_tags`    TINYINT,
    PRIMARY KEY (`id`),
    CONSTRAINT news_tags_fk_product FOREIGN KEY (fk_product) REFERENCES product (id)
        ON DELETE CASCADE,
    CONSTRAINT news_tags_fk_tags FOREIGN KEY (fk_tags) REFERENCES tags (id)
        ON DELETE CASCADE
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

CREATE TABLE `baseafood`.`news_tags` (
    `id`      TINYINT NOT NULL AUTO_INCREMENT,
    `fk_news` TINYINT,
    `fk_tags` TINYINT,
    PRIMARY KEY (`id`),
    CONSTRAINT news_tags_fk_news FOREIGN KEY (fk_news) REFERENCES news (id)
        ON DELETE CASCADE,
    CONSTRAINT news_tags_fk_tags FOREIGN KEY (fk_tags) REFERENCES tags (id)
        ON DELETE CASCADE
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

