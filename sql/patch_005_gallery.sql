CREATE TABLE `gallery` (
    `id`        TINYINT       NOT NULL AUTO_INCREMENT,
    `name`      NVARCHAR(100) NOT NULL,
    `url_image` NVARCHAR(250),
    `group`     NVARCHAR(100),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;