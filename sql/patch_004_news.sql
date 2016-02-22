CREATE TABLE `product` (
    `id`                TINYINT       NOT NULL AUTO_INCREMENT,
    `title`             NVARCHAR(100) NOT NULL,
    `content`           TEXT,
    `url_attached_file` NVARCHAR(250),
    `type`              NVARCHAR(100),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;