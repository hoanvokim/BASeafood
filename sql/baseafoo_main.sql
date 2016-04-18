-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2016 at 09:19 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET NAMES utf8 */;

--
-- Database: `baseafoo_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `en_name` varchar(100) NOT NULL,
  `vi_name` varchar(100) NOT NULL,
  `parent` tinyint(4) DEFAULT NULL,
  `slug` varchar(100) CHARACTER SET latin1 NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_parent_index` (`parent`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `en_name`, `vi_name`, `parent`, `slug`, `number`) VALUES
(1, 'Domestic', 'Nội địa', NULL, 'Item-0', 1),
(2, 'International', 'Xuất Khẩu', NULL, 'Item-1', 2),
(3, 'Frozen', 'Đông lạnh', 1, 'Item-0-1', 1),
(4, 'Dry', 'Khô', 1, 'Item-0-2', 2),
(5, 'Fish', 'Cá', 3, 'Item-0-1-1', 1),
(6, 'Shellfish', 'Giáp sát', 3, 'Item-0-1-2', 2),
(7, 'Molluscs', 'Nhuyễn thể', 3, 'Item-0-1-3', 3),
(8, 'Others', 'Khác', 3, 'Item-0-1-4', 4),
(9, 'Frozen', 'Đông lạnh', 2, 'Item-1-1', 1),
(10, 'Dry', 'Khô', 2, 'Item-1-2', 2),
(11, 'Fish', 'Cá', 9, 'Item-1-1-1', 1),
(12, 'Shellfish', 'Giáp sát', 9, 'Item-1-1-2', 2),
(13, 'Molluscs', 'Nhuyễn thể', 9, 'Item-1-1-3', 3),
(14, 'Others', 'Khác', 9, 'Item-1-1-4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `en_name` varchar(100) NOT NULL,
  `vi_name` varchar(100) NOT NULL,
  `icon` varchar(100) DEFAULT 'fa fa-asterisk',
  `en_title` varchar(150) DEFAULT NULL,
  `vi_title` varchar(150) DEFAULT NULL,
  `title_icon` varchar(100) DEFAULT 'fa fa-asterisk',
  `en_content` varchar(500) DEFAULT NULL,
  `vi_content` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`) VALUES
(1, 'Find Us Easy!', 'Dễ Tìm', 'fa fa-shopping-basket', 'A lot of supermarkets sell our products', 'Có rất nhiều siêu thị và cửa hàng đang bán sản phẩm của chúng tôi', 'fa fa-shopping-cart big', 'With a lot of supermarkets and our shop in Vung Tau, that is the reason why you can taste and buy our products easily.', 'Với rất nhiều cửa hàng và siêu thị tại Vũng Tàu, đó là lý do vì sao các bạn có thể dùng thử và chọn mua các sản phẩm của chúng tôi.'),
(2, 'Fresh Seafood', 'Hải sản tươi ngon', 'fa fa-modx', 'Fresh seafood is good for your own', 'Hải sản tươi ngon luôn là một sự lựa chọn tốt cho chính bạn', 'fa fa-heartbeat big', 'Our seafood are filtered in every producing process. We want to bring you a really good food for your health.', 'Các sản phẩm của chúng tôi được chọn lọc rất kỹ ngay từ khâu chế biến. Chúng tôi muốn mang lại cho bạn những sản phẩm tốt nhất cho chính sức khoẻ của bạn.'),
(3, 'Standardization Factories', 'Xí nhiệp đủ tiêu chuẩn', 'fa fa-hospital-o', 'Factories in Clean and Cutting Edge technologies', 'Xí nghiệp xanh và sạch với rất nhiều các công nghệ tiên tiến nhất.', 'fa fa-android big', 'Our workers are covered by safety stuffs and using cutting edge technologies in production. It satisfies all of standardization certifications.', 'Các công nhân được mặc các trang bị bảo hộ lao động và sử dụng các công nghệ hiện đại nhất trong sản xuất. Đảm bảo các chứng chỉ về chất lượng sản phẩm.'),
(4, 'Contact Us Anywhere', 'Liên lạc bất cứ nơi nào', 'fa fa-phone', 'We are listening!', 'Chúng tôi đang lắng nghe!', 'fa fa-mobile-phone big', 'You can contact us really easy. Just text messages on Facebook, Fax or call directly to us. We are waiting for your feedback.', 'Bạn có thể liên lạc với chúng tôi rất dễ dàng thông qua Facebook, Fax hay Điện thoại trực tiếp với chúng tôi. Chúng tôi lắng nghe những lời góp ý của các bạn.'),
(5, 'Authorised Factory', 'Nhà máy được chứng thực', 'fa fa-certificate', 'We achieved more and more...', 'Chúng tôi đã và đang đạt đc những chứng chỉ mới...', 'fa fa-certificate big', 'To bring you a good products, we are satisfied more and more certificated from a lot of countries in the world. Such as: America, Japan, Korea and so on.', 'Chúng tôi đã hoàn thành các chỉ tiêu khó khăn nhất, để đạt được các chứng chỉ của rất nhiều các quốc gia như: Mỹ, Nhật, Hàn quốc và ...'),
(6, 'Shipping Anywhere', 'Mang sản phẩm tới bất cứ nơi đâu', 'fa fa-ship', 'Safe shipping', 'Đảm bảo hàng trong quá trình vận chuyển ra nước ngoài', 'fa fa-ship big', 'We pack the products carefully, that makes it keep the same quality when you get it.', 'Chúng tôi đóng gói các sản phẩm rất kỹ để đảm bảo rằng chúng giữ được chất lượng tốt nhất khi đến tay người tiêu dùng.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `en_name` varchar(100) NOT NULL,
  `vi_name` varchar(100) NOT NULL,
  `url_image` varchar(250) DEFAULT NULL,
  `group` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `generic_information`
--

CREATE TABLE IF NOT EXISTS `generic_information` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `order` tinyint(4) DEFAULT NULL,
  `en_title` varchar(200) DEFAULT NULL,
  `vi_title` varchar(200) DEFAULT NULL,
  `en_content` longtext,
  `vi_content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `generic_information`
--

INSERT INTO `generic_information` (`id`, `type`, `order`, `en_title`, `vi_title`, `en_content`, `vi_content`) VALUES
(1, 'aboutInfo', 0, 'History of the company', 'Lịch sử hình thành và phát triển', '<p class=""> EN _ Là một doanh nghiệp cổ phần có quy mô lớn được thành lập từ năm 1981. Sau hơn 30 năm xây dựng và phát triển, hiện Công ty có đội ngũ cán bộ quản lý có kinh nghiệm và trình độ chuyên sâu về Chế biến thủy sản, có đội ngũ công nhân lành nghề với trên 1.000 người. Ngoài ra Công ty đã trang bị hệ thống máy móc thiết bị hiện đại có thể chế biến các mặt hàng xuất khẩu có chất lượng cao để có thể đáp ứng được nhu cầu của các thị trường khó tính nhất. Công ty có nhiều xí nghiệp sản xuất đạt tiêu chuẩn Châu Âu DL 34, DL 20, giấy chứng nhận đạt tiêu chuẩn xuất vào các nước hồi giáo HALAL, tiêu chuẩn an toàn vệ sinh thực phẩm Việt Nam HACCP, chứng chỉ ISO 9001: 2008. Sản lượng thành phẩm xuất khẩu hàng năm đạt 9.000 tấn, trong đó 90% xuất khẩu, 10% tiêu thụ nội địa. Các mặt hàng xuất khẩu của Công ty gồm hàng đông các loại như: Tôm, Cá các loại, surimi các loại, Ghẹ, Bạch tuộc, mực nang, mực ống… nguyên con, phi lê, thành phẩm đóng gói nhỏ phục vụ cho các siêu thị. Hàng khô gồm: các loại Cá, Mực… tẩm gia vị và nướng ăn liền…Kim ngạch xuất khẩu hàng năm đạt từ 25 đến 30 triệu USD.\r\n    <br/>\r\nHiện nay, có trên 40 khách hàng các nước thường xuyên quan hệ mua bán với Công ty. Thị trường lớn nhất là các nước Nhật Bản, Hàn Quốc, Nga, Ukraina, Belarus, Tây Ban Nha, Mỹ, và một số nước thuộc Trung Đông. Mục tiêu kinh doanh của Công ty là luôn chú trọng nâng cao chất lượng sản phẩm. Đầu tư nâng cấp các nhà xưởng, đào tạo đội ngũ công nhân lành nghề, có kinh nghiệm trong sản xuất và coi trọng những yêu cầu về mẫu mã và chất lượng sản phẩm của khách hàng. Công ty luôn giữ uy tín thương hiệu baseafoo_main trên thị trường Quốc tế.</p>', '<p class=""> Là một doanh nghiệp cổ phần có quy mô lớn được thành lập từ năm 1981. Sau hơn 30 năm xây dựng và phát triển, hiện Công ty có đội ngũ cán bộ quản lý có kinh nghiệm và trình độ chuyên sâu về Chế biến thủy sản, có đội ngũ công nhân lành nghề với trên 1.000 người. Ngoài ra Công ty đã trang bị hệ thống máy móc thiết bị hiện đại có thể chế biến các mặt hàng xuất khẩu có chất lượng cao để có thể đáp ứng được nhu cầu của các thị trường khó tính nhất. Công ty có nhiều xí nghiệp sản xuất đạt tiêu chuẩn Châu Âu DL 34, DL 20, giấy chứng nhận đạt tiêu chuẩn xuất vào các nước hồi giáo HALAL, tiêu chuẩn an toàn vệ sinh thực phẩm Việt Nam HACCP, chứng chỉ ISO 9001: 2008. Sản lượng thành phẩm xuất khẩu hàng năm đạt 9.000 tấn, trong đó 90% xuất khẩu, 10% tiêu thụ nội địa. Các mặt hàng xuất khẩu của Công ty gồm hàng đông các loại như: Tôm, Cá các loại, surimi các loại, Ghẹ, Bạch tuộc, mực nang, mực ống… nguyên con, phi lê, thành phẩm đóng gói nhỏ phục vụ cho các siêu thị. Hàng khô gồm: các loại Cá, Mực… tẩm gia vị và nướng ăn liền…Kim ngạch xuất khẩu hàng năm đạt từ 25 đến 30 triệu USD.\r\n    <br/>\r\nHiện nay, có trên 40 khách hàng các nước thường xuyên quan hệ mua bán với Công ty. Thị trường lớn nhất là các nước Nhật Bản, Hàn Quốc, Nga, Ukraina, Belarus, Tây Ban Nha, Mỹ, và một số nước thuộc Trung Đông. Mục tiêu kinh doanh của Công ty là luôn chú trọng nâng cao chất lượng sản phẩm. Đầu tư nâng cấp các nhà xưởng, đào tạo đội ngũ công nhân lành nghề, có kinh nghiệm trong sản xuất và coi trọng những yêu cầu về mẫu mã và chất lượng sản phẩm của khách hàng. Công ty luôn giữ uy tín thương hiệu baseafoo_main trên thị trường Quốc tế.</p>'),
(2, 'aboutInfo', 1, 'Business Fields', 'Ngành nghề kinh doanh', 'EN _MESSAGE\r\n<ul class="elements ">\r\n<li><i class="fa fa-angle-right"></i>Nuôi trồng, thu mua, chế biến, kinh doanh hàng nông, lâm, thủy sản </li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh cây, con giống các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh xe chuyên dùng các loại; kinh doanh xe ôtô tải, xe ôtô khách các lọai; xe môtô các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh máy móc, thiết bị, phụ tùng động cơ các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh hóa chất các loại ( không phải hóa chất có tính độc hại mạnh và cấm kinh doanh );</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh vật liệu xây dựng; Kinh doanh gỗ các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh bao bì các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh dịch vụ ăn uống đầy đủ;</li>\r\n<li><i class="fa fa-angle-right"></i>Dịch vụ đại lý tàu biển; dịch vụ đại lý vận tải đường biển; dịch vụ môi giới hàng hải;</li>\r\n<li><i class="fa fa-angle-right"></i>Mua bán thực phẩm các loại;</li>\r\n<li><i class="fa fa-angle-right"></i>Đại lý mua, bán các loại thực phẩm và đồ uống không cồn;</li>\r\n<li><i class="fa fa-angle-right"></i>Mua bán đồ uống có cồn ( rượu, bia ) ( đối với rượi từ 35 độ cồn trở lên chỉ được mua bán sau khi được Sở Thương mại tỉnh cấp Giấy phép kinh doanh rượu);</li>\r\n<li><i class="fa fa-angle-right"></i>Vận tải hành khách bằng xe ô tô ( trừ taxi, xe buýt );</li>\r\n<li><i class="fa fa-angle-right"></i>Vận tải hàng hóa bằng xe thùng, xe bảo ôn chở thịt thực phẩm;</li>\r\n<li><i class="fa fa-angle-right"></i>Cho thuê kho, bãi;</li>\r\n<li><i class="fa fa-angle-right"></i>Sản xuất và mua bán nước đá ướp lạnh.<li/>\r\n</ul>', ' <ul class="elements ">\r\n<li><i class="fa fa-angle-right"></i>Nuôi trồng, thu mua, chế biến, kinh doanh hàng nông, lâm, thủy sản;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh cây, con giống các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh xe chuyên dùng các loại; kinh doanh xe ôtô tải, xe ôtô khách các lọai; xe môtô các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh máy móc, thiết bị, phụ tùng động cơ các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh hóa chất các loại ( không phải hóa chất có tính độc hại mạnh và cấm kinh doanh );</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh vật liệu xây dựng; Kinh doanh gỗ các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh bao bì các lọai;</li>\r\n<li><i class="fa fa-angle-right"></i>Kinh doanh dịch vụ ăn uống đầy đủ;</li>\r\n<li><i class="fa fa-angle-right"></i>Dịch vụ đại lý tàu biển; dịch vụ đại lý vận tải đường biển; dịch vụ môi giới hàng hải;</li>\r\n<li><i class="fa fa-angle-right"></i>Mua bán thực phẩm các loại;</li>\r\n<li><i class="fa fa-angle-right"></i>Đại lý mua, bán các loại thực phẩm và đồ uống không cồn;</li>\r\n<li><i class="fa fa-angle-right"></i>Mua bán đồ uống có cồn ( rượu, bia ) ( đối với rượi từ 35 độ cồn trở lên chỉ được mua bán sau khi được Sở Thương mại tỉnh cấp Giấy phép kinh doanh rượu);</li>\r\n<li><i class="fa fa-angle-right"></i>Vận tải hành khách bằng xe ô tô ( trừ taxi, xe buýt );</li>\r\n<li><i class="fa fa-angle-right"></i>Vận tải hàng hóa bằng xe thùng, xe bảo ôn chở thịt thực phẩm;</li>\r\n<li><i class="fa fa-angle-right"></i>Cho thuê kho, bãi;</li>\r\n<li><i class="fa fa-angle-right"></i>Sản xuất và mua bán nước đá ướp lạnh.</li>\r\n</ul>'),
(3, 'aboutInfo', 2, 'Financial Structure', 'Cơ cấu vốn', 'EN _MESSAGE\r\n<ul class="elements ">\r\n<li><i class="fa fa-angle-right"></i>Vốn Nhà nước : 25,74 %</li>\r\n<li><i class="fa fa-angle-right"></i>Vốn của các cổ đông khác : 74,26% </li>\r\n</ul>', '<ul class="elements ">\r\n<li><i class="fa fa-angle-right"></i>Vốn Nhà nước : 25,74 %</li>\r\n<li><i class="fa fa-angle-right"></i>Vốn của các cổ đông khác : 74,26% </li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(250) NOT NULL,
  `thumb_url` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `en_title` varchar(100) NOT NULL,
  `vi_title` varchar(100) NOT NULL,
  `en_content` text CHARACTER SET latin1,
  `vi_content` text CHARACTER SET latin1,
  `url_attached_file` varchar(250) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `en_title`, `vi_title`, `en_content`, `vi_content`, `url_attached_file`, `created_date`, `updated_date`) VALUES
(1, 'Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'news/download/1.pdf', NULL, NULL),
(2, 'Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'news/download/2.pdf', NULL, NULL),
(3, 'Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'news/download/3.pdf', NULL, NULL),
(4, 'Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'news/download/4.pdf', NULL, NULL),
(5, 'Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', NULL, NULL, NULL),
(6, 'Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_tags`
--

CREATE TABLE IF NOT EXISTS `news_tags` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `fk_news` tinyint(4) DEFAULT NULL,
  `fk_tags` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_tags_fk_news` (`fk_news`),
  KEY `news_tags_fk_tags` (`fk_tags`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `en_name` varchar(100) NOT NULL,
  `vi_name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `packing` varchar(100) NOT NULL,
  `url` varchar(250) NOT NULL,
  `fk_category` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_index` (`fk_category`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `en_name`, `vi_name`, `size`, `packing`, `url`, `fk_category`) VALUES
(1, 'Auxis Thazard', 'Cá ngừ chù nguyên con đông lạnh', '300-500 gr/pc <br/> 500-800 gr/pc <br/> 800-up gr/pc', 'IQF, 1pc/PE x 10/CTN', 'bonito.jpg', 5),
(2, 'Nemipterus virgatus', 'Cá đổng nguyên con đông lạnh', 'U4 pc/kg 250-up gr/pc <br/> 4-6 pc/kg 200-250 gr/pc <br/>6-8 pc/kg 150-200 gr/pc <br/> 10-12 pc/kg 5', 'IQF, 1kg/PE x 10/CTN', 'GoldenThreadfinBream.jpg', 5),
(3, 'Selaroides leptolepis', 'Cá chỉ vàng nguyên con đông lạnh', '25-30 pc/kg <br/> 30-35 pc/kg <br/> 35-40 pc/kg', 'IQF, 1kg/PE x 10/CTN', 'Yellowstriptrevally.jpg', 5),
(4, 'Rastrelliger kanagurta', 'Cá bạc má nguyên con đông lạnh', 'U4      pc/kg   250-up   gr/pc <br/> 4-6     pc/kg   200-250 gr/pc <br/> 6-8     pc/kg   150-200 gr/', 'IQF, 1kg/PE x 10/CTN', 'IndianMackerel.jpg', 5),
(5, 'Selar crumenophthalmus', 'Cá tráo nguyên con đông lạnh', 'U4      pc/kg   250-up   gr/pc <br/> 4-6     pc/kg   200-250 gr/pc <br/> 6-8     pc/kg   150-200 gr/', 'IQF, 1kg/PE x 10/CTN', 'Bigeyescad.jpg', 5),
(6, 'Saurida tumbil', 'Khô Cá Mối Cắt Đầu', '6-12 cm/miếng <br/> 12-17 cm/miếng', '', 'Lizardfish.jpg', 4),
(7, 'Saurida tumbil', 'Khô Cá Mối Fillet Bướm Cắt Khúc', '6-8 cm/miếng', '', 'LizarfishPieces.jpg', 4),
(8, 'Plectorynchus macracanthus', 'Khô Cá Mắt Kiếng cắt đầu lột da', ' 5-7 cm/miếng <br/> 7-9 cm/miếng', '', 'khocamatkien.jpg', 4),
(9, 'Plectorynchus macracanthus', 'Khô Cá Mắt Kiếng Fillet Bướm còn da', '5-7 cm/miếng <br/> 7-9 cm/miếng', '', 'khocamatkien2.jpg', 4),
(10, 'Hermiramphidae', 'Khô Cá Lìm Kìm Fillet Bướm', '8-12 cm/miếng <br/> 12-17 cm/miếng', '', 'khocaliemphile.jpg', 4),
(11, 'Khô Cá Đuối ghép nướng ăn liền.', 'Khô Cá Đuối ghép nướng ăn liền.', '', '', 'khocaduoinuonganlien.jpg', 4),
(12, 'Khô Cá Bống ghép nướng ăn liền.', 'Khô Cá Bống ghép nướng ăn liền.', '', '', 'khocaboghepnuong.jpg', 4),
(13, 'Sardinella gibbosa', 'Khô Cá Trích Fillet', ' 4-6 cm/miếng <br/> 6-8 cm/miếng', '', 'filletcatrich.jpg', 4),
(14, 'Nemipterus virgatus', 'Khô Cá Đổng Fillet Bướm', '5-7 cm/miếng <br/> 7-9 cm/miếng', '', 'khocadong.jpg', 4),
(15, 'Selaroides leptolepis', 'Khô Cá Chỉ Vàng Fillet Bướm', '5-7 cm/miếng <br/> 7-9 cm/miếng', '', 'cachivangfillet.jpg', 4),
(16, 'Tuna fillet', 'Cá ngừ vây vàng fillet đông lạnh', '+ Loại: A  (L: 12-17 cm / W:  4 – 6 cm /H: 2.5- 4 cm) <br/> Khối lượng: 200-350 grs/pc <br/> + Loại:', 'IQF, IVP, 10kgs N.W./carton.', 'tunafillet.jpg', 11),
(17, 'Mix seafood', 'Hải sản hỗn hợp', 'Thành phần phối trộn:<br/>1. Tôm PUD<br/>2. Chả cá<br/>3. Vẹm<br/>4. Nghêu trắng / lụa<br/>5. Đầu mự', 'thùng 10 kg<br/>họăc: túi nhỏ (70gr, 150gr, 300gr, 500gr, 1000gr / túi)', 'mixseafood.jpg', 14),
(18, 'Mix seafood ball', 'Chả cá hỗn hợp', 'Các sản phẩm Chả cá:<br/>1. Chả cá Đổng 100%, 70%, 50%, 30%<br/>2. Chả cá Mối 100%<br/>3. Chả cá các', '10kg/khối x 2/thùng carton', 'seafoodball.jpg', 14),
(19, 'Hermiramphidae', 'Khô Cá Lìm Kìm Fillet Bướm', '8-12 cm/miếng <br/> 12-17 cm/miếng', '', 'khocaliemphile.jpg', 10),
(20, 'Selaroides leptolepis', 'Khô Cá Chỉ Vàng Fillet Bướm', '', '', 'khocachivangfillet.jpg', 10),
(21, 'Sardinella gibbosa', 'Khô Cá Trích Fillet', '', '', 'filletcatrich.jpg', 10),
(22, 'Khô Cá Ngân fillet', 'Khô Cá Ngân fillet', '', '', 'khocangan.jpg', 10),
(23, 'Saurida tumbil', 'Khô Cá Mối Cắt Đầu', '', '', 'Lizardfish.jpg', 10),
(24, 'Saurida tumbil', 'Khô Cá Mối Fillet Miếng', '', '', 'khocamoimieng.jpg', 10),
(25, 'Plectorynchus macracanthus', 'Khô Cá Mắt Kiếng cắt đầu lột da', '', '', 'khocamatkien.jpg', 10),
(26, 'Plectorynchus macracanthus', 'Khô Cá Mắt Kiếng Fillet Bướm còn da', '', '', 'khocamatkien2.jpg', 10),
(27, 'Nemipterus virgatus', 'Khô Cá Đổng Fillet Bướm', '', '', 'khocadong.jpg', 10),
(28, 'Khô cá bò ghép', 'Khô cá bò ghép', '', '', 'khocabo.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE IF NOT EXISTS `product_tags` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `fk_product` tinyint(4) DEFAULT NULL,
  `fk_tags` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_tags_fk_product` (`fk_product`),
  KEY `news_tags_fk_tags` (`fk_tags`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `fk_product`, `fk_tags`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(7, 4, 2),
(6, 4, 1),
(8, 5, 1),
(9, 5, 2),
(10, 6, 1),
(11, 6, 2),
(12, 29, 1),
(13, 4, 3),
(14, 4, 3),
(15, 5, 3),
(16, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `img_src` varchar(100) NOT NULL,
  `en_content` varchar(200) DEFAULT NULL,
  `vi_content` varchar(200) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img_src`, `en_content`, `vi_content`, `url`) VALUES
(6, '5.jpg', 'Safety gears during processing packing', 'Sử dụng đồ bảo hộ suốt quá trình đóng gói', NULL),
(5, '4.jpg', 'Automatic process', 'Dây chuyền hoạt động tự động', NULL),
(4, '3.jpg', 'Open factory space', 'Không gian mở ở xưởng làm việc', NULL),
(3, '2.jpg', 'Working space in factory', 'Môi trường làm việc tại nhà máy', NULL),
(2, '1.jpg', 'Overview the company', 'Tổng quan công ty', NULL),
(7, '6.jpg', 'Guaranty truly right weight', 'Đảm bảo đúng trọng lượng cho từng sản phẩm', NULL),
(8, '7.jpg', 'Safety gears during processing', 'Dụng cụ bảo hộ lao đông được đưa vào sử dụng trong quá trình sản xuất', NULL),
(9, '8.jpg', 'Really good raw material', 'Nguyên liệu tươi và tốt nhất', NULL),
(10, '9.jpg', 'Really good raw material', 'Nguyên liệu tươi và tốt nhất', NULL),
(11, '10.jpg', 'Our customers visit us', 'Các đối tác đến tham quan', NULL),
(12, '11.jpg', 'Our customers visit us', 'Các đối tác đến tham quan', NULL),
(13, '12.jpg', 'Boiled squid', 'Mực hấp', NULL),
(14, '10.jpg', 'Our customers visit us', 'Các đối tác đến tham quan', NULL),
(15, '11.jpg', 'Our customers visit us', 'Các đối tác đến tham quan', NULL),
(1, '12.jpg', 'Grand opening Baseafood1', 'Khai trương baseafood1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'fish'),
(2, 'dry fish'),
(3, 'cá');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'superadmin', '9a618248b64db62d15b300a07b00580b');
