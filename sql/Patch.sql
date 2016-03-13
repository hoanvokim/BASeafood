DROP DATABASE `baseafood`;
CREATE DATABASE `baseafood`;

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
  `url_attached_file` NVARCHAR(250),
  `created_date`       DATETIME DEFAULT CURRENT_TIMESTAMP,
  `updated_date`       DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)
  ENGINE = MyISAM
  DEFAULT CHARSET = latin1
  AUTO_INCREMENT = 1;

INSERT INTO `baseafood`.`news` (`en_title`,`vi_title`,`en_content`,`vi_content`,`url_image`,`url_attached_file`)
VALUES('Website encourages scrolling' ,'Website tin tức','Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','files/pdf.png','news/download/1.pdf');

INSERT INTO `baseafood`.`news` (`en_title`,`vi_title`,`en_content`,`vi_content`,`url_image`,`url_attached_file`)
VALUES('Website encourages scrolling' ,'Website tin tức','Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','files/pdf.png','news/download/2.pdf');

INSERT INTO `baseafood`.`news` (`en_title`,`vi_title`,`en_content`,`vi_content`,`url_image`,`url_attached_file`)
VALUES('Website encourages scrolling' ,'Website tin tức','Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','files/pdf.png','news/download/3.pdf');

INSERT INTO `baseafood`.`news` (`en_title`,`vi_title`,`en_content`,`vi_content`,`url_image`,`url_attached_file`)
VALUES('Website encourages scrolling' ,'Website tin tức','Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','files/pdf.png','news/download/4.pdf');

INSERT INTO `baseafood`.`news` (`en_title`,`vi_title`,`en_content`,`vi_content`,`url_image`)
VALUES('Website encourages scrolling' ,'Website tin tức','Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','files/news.png');

INSERT INTO `baseafood`.`news` (`en_title`,`vi_title`,`en_content`,`vi_content`,`url_image`)
VALUES('Website encourages scrolling' ,'Website tin tức','Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus','files/news.png');

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
VALUES ('Find Us Easy!', 'Dễ Tìm', 'fa fa-shopping-basket', 'A lot of supermarkets sell our products',
        'Có rất nhiều siêu thị và cửa hàng đang bán sản phẩm của chúng tôi', 'fa fa-shopping-cart big',
        'With a lot of supermarkets and our shop in Vung Tau, that is the reason why you can taste and buy our products easily.',
        'Với rất nhiều cửa hàng và siêu thị tại Vũng Tàu, đó là lý do vì sao các bạn có thể dùng thử và chọn mua các sản phẩm của chúng tôi.');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Fresh Seafood', 'Hải sản tươi ngon', 'fa fa-modx', 'Fresh seafood is good for your own',
        'Hải sản tươi ngon luôn là một sự lựa chọn tốt cho chính bạn', 'fa fa-heartbeat big',
        'Our seafood are filtered in every producing process. We want to bring you a really good food for your health.',
        'Các sản phẩm của chúng tôi được chọn lọc rất kỹ ngay từ khâu chế biến. Chúng tôi muốn mang lại cho bạn những sản phẩm tốt nhất cho chính sức khoẻ của bạn.');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Standardization Factories', 'Xí nhiệp đủ tiêu chuẩn', 'fa fa-hospital-o',
        'Factories in Clean and Cutting Edge technologies',
        'Xí nghiệp xanh và sạch với rất nhiều các công nghệ tiên tiến nhất.', 'fa fa-android big',
        'Our workers are covered by safety stuffs and using cutting edge technologies in production. It satisfies all of standardization certifications.',
        'Các công nhân được mặc các trang bị bảo hộ lao động và sử dụng các công nghệ hiện đại nhất trong sản xuất. Đảm bảo các chứng chỉ về chất lượng sản phẩm.');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES
  ('Contact Us Anywhere', 'Liên lạc bất cứ nơi nào', 'fa fa-phone', 'We are listening!', 'Chúng tôi đang lắng nghe!',
   'fa fa-mobile-phone big',
   'You can contact us really easy. Just text messages on Facebook, Fax or call directly to us. We are waiting for your feedback.',
   'Bạn có thể liên lạc với chúng tôi rất dễ dàng thông qua Facebook, Fax hay Điện thoại trực tiếp với chúng tôi. Chúng tôi lắng nghe những lời góp ý của các bạn.');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Authorised Factory', 'Nhà máy được chứng thực', 'fa fa-certificate', 'We achieved more and more...',
        'Chúng tôi đã và đang đạt đc những chứng chỉ mới...', 'fa fa-certificate big',
        'To bring you a good products, we are satisfied more and more certificated from a lot of countries in the world. Such as: America, Japan, Korea and so on.',
        'Chúng tôi đã hoàn thành các chỉ tiêu khó khăn nhất, để đạt được các chứng chỉ của rất nhiều các quốc gia như: Mỹ, Nhật, Hàn quốc và ...');
INSERT INTO `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
VALUES ('Shipping Anywhere', 'Mang sản phẩm tới bất cứ nơi đâu', 'fa fa-ship', 'Safe shipping',
        'Đảm bảo hàng trong quá trình vận chuyển ra nước ngoài', 'fa fa-ship big',
        'We pack the products carefully, that makes it keep the same quality when you get it.',
        'Chúng tôi đóng gói các sản phẩm rất kỹ để đảm bảo rằng chúng giữ được chất lượng tốt nhất khi đến tay người tiêu dùng.');


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

INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('1.png', 'Fish Tuna #1','Cá Ngừ Số 1','product/1');
INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('2.jpg', 'Fish Tuna #2','Cá Ngừ Số 2','product/2');
INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('3.jpg', 'Fish Tuna #3','Cá Ngừ Số 3','product/3');
INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('4.jpg', 'Fish Tuna #4','Cá Ngừ Số 4','product/4');
INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('5.jpg', 'Fish Tuna #5','Cá Ngừ Số 5','product/5');
INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('6.jpg', 'Fish Tuna #6','Cá Ngừ Số 6','product/6');
INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('7.jpg', 'Fish Tuna #7','Cá Ngừ Số 7','product/7');
INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('8.jpg', 'Fish Tuna #8','Cá Ngừ Số 8','product/8');
INSERT INTO `baseafood`.`sliders` (`img_src`,`en_content`,`vi_content`,`url`)
VALUES('9.jpg', 'Fish Tuna #9','Cá Ngừ Số 9','product/9');

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


INSERT INTO `baseafood`.`generic_information` (`type`, `order`, `en_title`, `vi_title`, `en_content`, `vi_content`)
VALUES ('aboutInfo', 0, 'History of the company', 'Lịch sử hình thành và phát triển'
  , 'EN _ Là một doanh nghiệp cổ phần có quy mô lớn được thành lập từ năm 1981. Sau hơn 30 năm xây dựng và phát triển, hiện Công ty có đội ngũ cán bộ quản lý có kinh nghiệm và trình độ chuyên sâu về Chế biến thủy sản, có đội ngũ công nhân lành nghề với trên 1.000 người. Ngoài ra Công ty đã trang bị hệ thống máy móc thiết bị hiện đại có thể chế biến các mặt hàng xuất khẩu có chất lượng cao để có thể đáp ứng được nhu cầu của các thị trường khó tính nhất. Công ty có nhiều xí nghiệp sản xuất đạt tiêu chuẩn Châu Âu DL 34, DL 20, giấy chứng nhận đạt tiêu chuẩn xuất vào các nước hồi giáo HALAL, tiêu chuẩn an toàn vệ sinh thực phẩm Việt Nam HACCP, chứng chỉ ISO 9001: 2008. Sản lượng thành phẩm xuất khẩu hàng năm đạt 9.000 tấn, trong đó 90% xuất khẩu, 10% tiêu thụ nội địa. Các mặt hàng xuất khẩu của Công ty gồm hàng đông các loại như: Tôm, Cá các loại, surimi các loại, Ghẹ, Bạch tuộc, mực nang, mực ống… nguyên con, phi lê, thành phẩm đóng gói nhỏ phục vụ cho các siêu thị. Hàng khô gồm: các loại Cá, Mực… tẩm gia vị và nướng ăn liền…Kim ngạch xuất khẩu hàng năm đạt từ 25 đến 30 triệu USD.
    <br/>
Hiện nay, có trên 40 khách hàng các nước thường xuyên quan hệ mua bán với Công ty. Thị trường lớn nhất là các nước Nhật Bản, Hàn Quốc, Nga, Ukraina, Belarus, Tây Ban Nha, Mỹ, và một số nước thuộc Trung Đông. Mục tiêu kinh doanh của Công ty là luôn chú trọng nâng cao chất lượng sản phẩm. Đầu tư nâng cấp các nhà xưởng, đào tạo đội ngũ công nhân lành nghề, có kinh nghiệm trong sản xuất và coi trọng những yêu cầu về mẫu mã và chất lượng sản phẩm của khách hàng. Công ty luôn giữ uy tín thương hiệu BASEAFOOD trên thị trường Quốc tế.'
  , 'Là một doanh nghiệp cổ phần có quy mô lớn được thành lập từ năm 1981. Sau hơn 30 năm xây dựng và phát triển, hiện Công ty có đội ngũ cán bộ quản lý có kinh nghiệm và trình độ chuyên sâu về Chế biến thủy sản, có đội ngũ công nhân lành nghề với trên 1.000 người. Ngoài ra Công ty đã trang bị hệ thống máy móc thiết bị hiện đại có thể chế biến các mặt hàng xuất khẩu có chất lượng cao để có thể đáp ứng được nhu cầu của các thị trường khó tính nhất. Công ty có nhiều xí nghiệp sản xuất đạt tiêu chuẩn Châu Âu DL 34, DL 20, giấy chứng nhận đạt tiêu chuẩn xuất vào các nước hồi giáo HALAL, tiêu chuẩn an toàn vệ sinh thực phẩm Việt Nam HACCP, chứng chỉ ISO 9001: 2008. Sản lượng thành phẩm xuất khẩu hàng năm đạt 9.000 tấn, trong đó 90% xuất khẩu, 10% tiêu thụ nội địa. Các mặt hàng xuất khẩu của Công ty gồm hàng đông các loại như: Tôm, Cá các loại, surimi các loại, Ghẹ, Bạch tuộc, mực nang, mực ống… nguyên con, phi lê, thành phẩm đóng gói nhỏ phục vụ cho các siêu thị. Hàng khô gồm: các loại Cá, Mực… tẩm gia vị và nướng ăn liền…Kim ngạch xuất khẩu hàng năm đạt từ 25 đến 30 triệu USD.
    <br/>
Hiện nay, có trên 40 khách hàng các nước thường xuyên quan hệ mua bán với Công ty. Thị trường lớn nhất là các nước Nhật Bản, Hàn Quốc, Nga, Ukraina, Belarus, Tây Ban Nha, Mỹ, và một số nước thuộc Trung Đông. Mục tiêu kinh doanh của Công ty là luôn chú trọng nâng cao chất lượng sản phẩm. Đầu tư nâng cấp các nhà xưởng, đào tạo đội ngũ công nhân lành nghề, có kinh nghiệm trong sản xuất và coi trọng những yêu cầu về mẫu mã và chất lượng sản phẩm của khách hàng. Công ty luôn giữ uy tín thương hiệu BASEAFOOD trên thị trường Quốc tế.');

INSERT INTO `baseafood`.`generic_information` (`type`, `order`, `en_title`, `vi_title`, `en_content`, `vi_content`)
VALUES ('aboutInfo', 1, 'Business Fields', 'Ngành nghề kinh doanh', 'EN _ - Nuôi trồng, thu mua, chế biến, kinh doanh hàng nông, lâm, thủy sản;
- Kinh doanh cây, con giống các lọai;<br/>
- Kinh doanh xe chuyên dùng các loại; kinh doanh xe ôtô tải, xe ôtô khách các lọai; xe môtô các lọai;<br/>
- Kinh doanh máy móc, thiết bị, phụ tùng động cơ các lọai;<br/>
- Kinh doanh hóa chất các loại ( không phải hóa chất có tính độc hại mạnh và cấm kinh doanh );<br/>
- Kinh doanh vật liệu xây dựng; Kinh doanh gỗ các lọai;<br/>
- Kinh doanh bao bì các lọai;<br/>
- Kinh doanh dịch vụ ăn uống đầy đủ;<br/>
- Dịch vụ đại lý tàu biển; dịch vụ đại lý vận tải đường biển; dịch vụ môi giới hàng hải;<br/>
- Mua bán thực phẩm các loại;<br/>
- Đại lý mua, bán các loại thực phẩm và đồ uống không cồn;<br/>
- Mua bán đồ uống có cồn ( rượu, bia ) ( đối với rượi từ 35 độ cồn trở lên chỉ được mua bán sau khi được Sở Thương mại tỉnh cấp Giấy phép kinh doanh rượu);<br/>
- Vận tải hành khách bằng xe ô tô ( trừ taxi, xe buýt );<br/>
- Vận tải hàng hóa bằng xe thùng, xe bảo ôn chở thịt thực phẩm;<br/>
- Cho thuê kho, bãi;<br/>
- Sản xuất và mua bán nước đá ướp lạnh.', '- Nuôi trồng, thu mua, chế biến, kinh doanh hàng nông, lâm, thủy sản;<br/>
- Kinh doanh cây, con giống các lọai;<br/>
- Kinh doanh xe chuyên dùng các loại; kinh doanh xe ôtô tải, xe ôtô khách các lọai; xe môtô các lọai;<br/>
- Kinh doanh máy móc, thiết bị, phụ tùng động cơ các lọai;<br/>
- Kinh doanh hóa chất các loại ( không phải hóa chất có tính độc hại mạnh và cấm kinh doanh );<br/>
- Kinh doanh vật liệu xây dựng; Kinh doanh gỗ các lọai;<br/>
- Kinh doanh bao bì các lọai;<br/>
- Kinh doanh dịch vụ ăn uống đầy đủ;<br/>
- Dịch vụ đại lý tàu biển; dịch vụ đại lý vận tải đường biển; dịch vụ môi giới hàng hải;<br/>
- Mua bán thực phẩm các loại;<br/>
- Đại lý mua, bán các loại thực phẩm và đồ uống không cồn;<br/>
- Mua bán đồ uống có cồn ( rượu, bia ) ( đối với rượi từ 35 độ cồn trở lên chỉ được mua bán sau khi được Sở Thương mại tỉnh cấp Giấy phép kinh doanh rượu);<br/>
- Vận tải hành khách bằng xe ô tô ( trừ taxi, xe buýt );<br/>
- Vận tải hàng hóa bằng xe thùng, xe bảo ôn chở thịt thực phẩm;<br/>
- Cho thuê kho, bãi;<br/>
- Sản xuất và mua bán nước đá ướp lạnh.<br/>');

INSERT INTO `baseafood`.`generic_information` (`type`, `order`, `en_title`, `vi_title`, `en_content`, `vi_content`)
VALUES ('aboutInfo', 2, 'Financial Structure', 'Cơ cấu vốn', 'EN _ - Vốn Nhà nước : 25,74 %<br/>
- Vốn của các cổ đông khác : 74,26% ', '- Vốn Nhà nước : 25,74 %<br/>
- Vốn của các cổ đông khác : 74,26% ');

