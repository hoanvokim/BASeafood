CREATE TABLE `product` (
  `id`          TINYINT NOT NULL AUTO_INCREMENT,
  `name` nvarchar(100) NOT NULL,
  `en_name` nvarchar(100) NOT NULL,
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