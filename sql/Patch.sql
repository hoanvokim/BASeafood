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
    `id`        TINYINT       NOT NULL AUTO_INCREMENT,
    `en_name`   NVARCHAR(100) NOT NULL,
    `vi_name`   NVARCHAR(100) NOT NULL,
    `fk_parent` TINYINT,
    PRIMARY KEY (`id`),
    INDEX `category_parent_index` (`fk_parent`),
    FOREIGN KEY (`fk_parent`)
    REFERENCES `baseafood`.`category` (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

-- Path 002 : images --

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
    `id`                TINYINT       NOT NULL AUTO_INCREMENT,
    `en_title`          NVARCHAR(100) NOT NULL,
    `vi_title`          NVARCHAR(100) NOT NULL,
    `en_content`        TEXT,
    `vi_content`        TEXT,
    `url_image`         NVARCHAR(250),
    `url_attached_file` NVARCHAR(250),
    `type`              NVARCHAR(100),
    PRIMARY KEY (`id`)
)
    ENGINE = MyISAM
    DEFAULT CHARSET = latin1
    AUTO_INCREMENT = 1;

-- Path 005 : gallery --

CREATE TABLE `baseafood`.`gallery` (
    `id`        TINYINT       NOT NULL AUTO_INCREMENT,
    `name`      NVARCHAR(100) NOT NULL,
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

INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Find Us Easy!', 'Dễ Tìm', 'fa fa-shopping-basket', 'A lot of supermarkets sell our products', 'Có rất nhiều siêu thị và cửa hàng đang bán sản phẩm của chúng tôi', 'fa fa-shopping-cart big', 'With a lot of supermarkets and our shop in Vung Tau, that is the reason why you can taste and buy our products easily.', 'Với rất nhiều cửa hàng và siêu thị tại Vũng Tàu, đó là lý do vì sao các bạn có thể dùng thử và chọn mua các sản phẩm của chúng tôi.');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Fresh Seafood', 'Hải sản tươi ngon', 'fa fa-modx', 'Fresh seafood is good for your own', 'Hải sản tươi ngon luôn là một sự lựa chọn tốt cho chính bạn', 'fa fa-heartbeat big', 'Our seafood are filtered in every producing process. We want to bring you a really good food for your health.', 'Các sản phẩm của chúng tôi được chọn lọc rất kỹ ngay từ khâu chế biến. Chúng tôi muốn mang lại cho bạn những sản phẩm tốt nhất cho chính sức khoẻ của bạn.');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`) VALUES ('Standardization Factories', 'Xí nhiệp đủ tiêu chuẩn', 'fa fa-hospital-o', 'Factories in Clean and Cutting Edge technologies', 'Xí nghiệp xanh và sạch với rất nhiều các công nghệ tiên tiến nhất.', 'fa fa-android big', 'Our workers are covered by safety stuffs and using cutting edge technologies in production. It satisfies all of standardization certifications.',
                                                                                                                                'Các công nhân được mặc các trang bị bảo hộ lao động và sử dụng các công nghệ hiện đại nhất trong sản xuất. Đảm bảo các chứng chỉ về chất lượng sản phẩm.');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Contact Us Anywhere', 'Liên lạc bất cứ nơi nào', 'fa fa-phone', 'We are listening!', 'Chúng tôi đang lắng nghe!', 'fa fa-mobile-phone big', 'You can contact us really easy. Just text messages on Facebook, Fax or call directly to us. We are waiting for your feedback.', 'Bạn có thể liên lạc với chúng tôi rất dễ dàng thông qua Facebook, Fax hay Điện thoại trực tiếp với chúng tôi. Chúng tôi lắng nghe những lời góp ý của các bạn.');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Authorised Factory', 'Nhà máy được chứng thực', 'fa fa-certificate', 'We achieved more and more...', 'Chúng tôi đã và đang đạt đc những chứng chỉ mới...', 'fa fa-certificate big', 'To bring you a good products, we are satisfied more and more certificated from a lot of countries in the world. Such as: America, Japan, Korea and so on.', 'Chúng tôi đã hoàn thành các chỉ tiêu khó khăn nhất, để đạt được các chứng chỉ của rất nhiều các quốc gia như: Mỹ, Nhật, Hàn quốc và ...');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Shipping Anywhere', 'Mang sản phẩm tới bất cứ nơi đâu', 'fa fa-ship', 'Safe shipping', 'Đảm bảo hàng trong quá trình vận chuyển ra nước ngoài', 'fa fa-ship big', 'We pack the products carefully, that makes it keep the same quality when you get it.', 'Chúng tôi đóng gói các sản phẩm rất kỹ để đảm bảo rằng chúng giữ được chất lượng tốt nhất khi đến tay người tiêu dùng.');


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
