drop database `baseafood`;
create database `baseafood`;

-- Path 001 : users, menu, category --

create table `baseafood`.`users` (
    `id`       tinyint(4)   not null auto_increment,
    `username` varchar(30)  not null,
    `password` varchar(100) not null,
    primary key (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;

insert into `baseafood`.`users` (username, password) values ('superadmin', MD5('supersecret'));


create table `baseafood`.`category` (
    `id`        tinyint       not null auto_increment,
    `en_name`   nvarchar(100) not null,
    `vi_name`   nvarchar(100) not null,
    `fk_parent` tinyint,
    primary key (`id`),
    index `category_parent_index` (`fk_parent`),
    foreign key (`fk_parent`)
    references `baseafood`.`category` (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;

-- Path 002 : images --

create table `baseafood`.`images` (
    `id`        tinyint       not null auto_increment,
    `name`      nvarchar(100) not null,
    `url`       nvarchar(250) not null,
    `thumb_url` nvarchar(250) not null,
    primary key (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;

-- Path 003 : products --

create table `baseafood`.`product` (
    `id`          tinyint       not null auto_increment,
    `en_name`     nvarchar(100) not null,
    `vi_name`     nvarchar(100) not null,
    `size`        nvarchar(100) not null,
    `packing`     nvarchar(100) not null,
    `url`         nvarchar(250) not null,
    `fk_category` tinyint,
    primary key (`id`),
    index `product_category_index` (`fk_category`),
    foreign key (`fk_category`)
    references `baseafood`.`category` (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;

-- Path 004 : news --

create table `baseafood`.`news` (
    `id`                tinyint       not null auto_increment,
    `en_title`          nvarchar(100) not null,
    `vi_title`          nvarchar(100) not null,
    `en_content`        text,
    `vi_content`        text,
    `url_image`         varchar(100),
    `url_attached_file` nvarchar(250),
    `created_date`      datetime               default CURRENT_TIMESTAMP,
    `updated_date`      datetime               default CURRENT_TIMESTAMP,
    primary key (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;

insert into `baseafood`.`news` (`en_title`, `vi_title`, `en_content`, `vi_content`, `url_image`, `url_attached_file`)
values ('Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'files/pdf.png', 'news/download/1.pdf');

insert into `baseafood`.`news` (`en_title`, `vi_title`, `en_content`, `vi_content`, `url_image`, `url_attached_file`)
values ('Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'files/pdf.png', 'news/download/2.pdf');

insert into `baseafood`.`news` (`en_title`, `vi_title`, `en_content`, `vi_content`, `url_image`, `url_attached_file`)
values ('Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'files/pdf.png', 'news/download/3.pdf');

insert into `baseafood`.`news` (`en_title`, `vi_title`, `en_content`, `vi_content`, `url_image`, `url_attached_file`)
values ('Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'files/pdf.png', 'news/download/4.pdf');

insert into `baseafood`.`news` (`en_title`, `vi_title`, `en_content`, `vi_content`, `url_image`)
values ('Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'files/news.png');

insert into `baseafood`.`news` (`en_title`, `vi_title`, `en_content`, `vi_content`, `url_image`)
values ('Website encourages scrolling', 'Website tin tức', 'Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'VN __ Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus', 'files/news.png');

-- Path 005 : gallery --

create table `baseafood`.`gallery` (
    `id`        tinyint       not null auto_increment,
    `name`      nvarchar(100) not null,
    `url_image` nvarchar(250),
    `group`     nvarchar(100),
    primary key (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;

-- Path 006 : features, sliders --
create table `baseafood`.`features` (
    `id`         tinyint       not null auto_increment,
    `en_name`    nvarchar(100) not null,
    `vi_name`    nvarchar(100) not null,
    `icon`       nvarchar(100)          default 'fa fa-asterisk',
    `en_title`   nvarchar(150),
    `vi_title`   nvarchar(150),
    `title_icon` nvarchar(100)          default 'fa fa-asterisk',
    `en_content` nvarchar(500),
    `vi_content` nvarchar(500),
    primary key (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;

insert into `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
values ('Find Us Easy!', 'Dễ Tìm', 'fa fa-shopping-basket', 'A lot of supermarkets sell our products',
        'Có rất nhiều siêu thị và cửa hàng đang bán sản phẩm của chúng tôi', 'fa fa-shopping-cart big',
        'With a lot of supermarkets and our shop in Vung Tau, that is the reason why you can taste and buy our products easily.',
        'Với rất nhiều cửa hàng và siêu thị tại Vũng Tàu, đó là lý do vì sao các bạn có thể dùng thử và chọn mua các sản phẩm của chúng tôi.');
insert into `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
values ('Fresh Seafood', 'Hải sản tươi ngon', 'fa fa-modx', 'Fresh seafood is good for your own',
        'Hải sản tươi ngon luôn là một sự lựa chọn tốt cho chính bạn', 'fa fa-heartbeat big',
        'Our seafood are filtered in every producing process. We want to bring you a really good food for your health.',
        'Các sản phẩm của chúng tôi được chọn lọc rất kỹ ngay từ khâu chế biến. Chúng tôi muốn mang lại cho bạn những sản phẩm tốt nhất cho chính sức khoẻ của bạn.');
insert into `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
values ('Standardization Factories', 'Xí nhiệp đủ tiêu chuẩn', 'fa fa-hospital-o',
        'Factories in Clean and Cutting Edge technologies',
        'Xí nghiệp xanh và sạch với rất nhiều các công nghệ tiên tiến nhất.', 'fa fa-android big',
        'Our workers are covered by safety stuffs and using cutting edge technologies in production. It satisfies all of standardization certifications.',
        'Các công nhân được mặc các trang bị bảo hộ lao động và sử dụng các công nghệ hiện đại nhất trong sản xuất. Đảm bảo các chứng chỉ về chất lượng sản phẩm.');
insert into `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
values
    ('Contact Us Anywhere', 'Liên lạc bất cứ nơi nào', 'fa fa-phone', 'We are listening!', 'Chúng tôi đang lắng nghe!',
     'fa fa-mobile-phone big',
     'You can contact us really easy. Just text messages on Facebook, Fax or call directly to us. We are waiting for your feedback.',
     'Bạn có thể liên lạc với chúng tôi rất dễ dàng thông qua Facebook, Fax hay Điện thoại trực tiếp với chúng tôi. Chúng tôi lắng nghe những lời góp ý của các bạn.');
insert into `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
values ('Authorised Factory', 'Nhà máy được chứng thực', 'fa fa-certificate', 'We achieved more and more...',
        'Chúng tôi đã và đang đạt đc những chứng chỉ mới...', 'fa fa-certificate big',
        'To bring you a good products, we are satisfied more and more certificated from a lot of countries in the world. Such as: America, Japan, Korea and so on.',
        'Chúng tôi đã hoàn thành các chỉ tiêu khó khăn nhất, để đạt được các chứng chỉ của rất nhiều các quốc gia như: Mỹ, Nhật, Hàn quốc và ...');
insert into `baseafood`.`features` (`en_name`, `vi_name`, `icon`, `en_title`, `vi_title`, `title_icon`, `en_content`, `vi_content`)
values ('Shipping Anywhere', 'Mang sản phẩm tới bất cứ nơi đâu', 'fa fa-ship', 'Safe shipping',
        'Đảm bảo hàng trong quá trình vận chuyển ra nước ngoài', 'fa fa-ship big',
        'We pack the products carefully, that makes it keep the same quality when you get it.',
        'Chúng tôi đóng gói các sản phẩm rất kỹ để đảm bảo rằng chúng giữ được chất lượng tốt nhất khi đến tay người tiêu dùng.');


create table `baseafood`.`sliders` (
    `id`         tinyint       not null auto_increment,
    `img_src`    nvarchar(100) not null,
    `en_content` nvarchar(200),
    `vi_content` nvarchar(200),
    `url`        nvarchar(150),
    primary key (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;

insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('1.png', 'Fish Tuna #1', 'Cá Ngừ Số 1', 'product/1');
insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('2.jpg', 'Fish Tuna #2', 'Cá Ngừ Số 2', 'product/2');
insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('3.jpg', 'Fish Tuna #3', 'Cá Ngừ Số 3', 'product/3');
insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('4.jpg', 'Fish Tuna #4', 'Cá Ngừ Số 4', 'product/4');
insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('5.jpg', 'Fish Tuna #5', 'Cá Ngừ Số 5', 'product/5');
insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('6.jpg', 'Fish Tuna #6', 'Cá Ngừ Số 6', 'product/6');
insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('7.jpg', 'Fish Tuna #7', 'Cá Ngừ Số 7', 'product/7');
insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('8.jpg', 'Fish Tuna #8', 'Cá Ngừ Số 8', 'product/8');
insert into `baseafood`.`sliders` (`img_src`, `en_content`, `vi_content`, `url`)
values ('9.jpg', 'Fish Tuna #9', 'Cá Ngừ Số 9', 'product/9');

create table `baseafood`.`generic_information` (
    `id`         tinyint not null auto_increment,
    `type`       varchar(100),
    `order`      tinyint,
    `en_title`   nvarchar(200),
    `vi_title`   nvarchar(200),
    `en_content` longtext
                 character set utf8
                 collate utf8_general_ci,
    `vi_content` longtext
                 character set utf8
                 collate utf8_general_ci,
    primary key (`id`)
)
    engine = MyISAM
    default charset = latin1
    auto_increment = 1;


insert into `baseafood`.`generic_information` (`type`, `order`, `en_title`, `vi_title`, `en_content`, `vi_content`)
values ('aboutInfo', 0, 'History of the company', 'Lịch sử hình thành và phát triển'
    , '<p class=""> EN _ Là một doanh nghiệp cổ phần có quy mô lớn được thành lập từ năm 1981. Sau hơn 30 năm xây dựng và phát triển, hiện Công ty có đội ngũ cán bộ quản lý có kinh nghiệm và trình độ chuyên sâu về Chế biến thủy sản, có đội ngũ công nhân lành nghề với trên 1.000 người. Ngoài ra Công ty đã trang bị hệ thống máy móc thiết bị hiện đại có thể chế biến các mặt hàng xuất khẩu có chất lượng cao để có thể đáp ứng được nhu cầu của các thị trường khó tính nhất. Công ty có nhiều xí nghiệp sản xuất đạt tiêu chuẩn Châu Âu DL 34, DL 20, giấy chứng nhận đạt tiêu chuẩn xuất vào các nước hồi giáo HALAL, tiêu chuẩn an toàn vệ sinh thực phẩm Việt Nam HACCP, chứng chỉ ISO 9001: 2008. Sản lượng thành phẩm xuất khẩu hàng năm đạt 9.000 tấn, trong đó 90% xuất khẩu, 10% tiêu thụ nội địa. Các mặt hàng xuất khẩu của Công ty gồm hàng đông các loại như: Tôm, Cá các loại, surimi các loại, Ghẹ, Bạch tuộc, mực nang, mực ống… nguyên con, phi lê, thành phẩm đóng gói nhỏ phục vụ cho các siêu thị. Hàng khô gồm: các loại Cá, Mực… tẩm gia vị và nướng ăn liền…Kim ngạch xuất khẩu hàng năm đạt từ 25 đến 30 triệu USD.
    <br/>
Hiện nay, có trên 40 khách hàng các nước thường xuyên quan hệ mua bán với Công ty. Thị trường lớn nhất là các nước Nhật Bản, Hàn Quốc, Nga, Ukraina, Belarus, Tây Ban Nha, Mỹ, và một số nước thuộc Trung Đông. Mục tiêu kinh doanh của Công ty là luôn chú trọng nâng cao chất lượng sản phẩm. Đầu tư nâng cấp các nhà xưởng, đào tạo đội ngũ công nhân lành nghề, có kinh nghiệm trong sản xuất và coi trọng những yêu cầu về mẫu mã và chất lượng sản phẩm của khách hàng. Công ty luôn giữ uy tín thương hiệu BASEAFOOD trên thị trường Quốc tế.</p>'
    , '<p class=""> Là một doanh nghiệp cổ phần có quy mô lớn được thành lập từ năm 1981. Sau hơn 30 năm xây dựng và phát triển, hiện Công ty có đội ngũ cán bộ quản lý có kinh nghiệm và trình độ chuyên sâu về Chế biến thủy sản, có đội ngũ công nhân lành nghề với trên 1.000 người. Ngoài ra Công ty đã trang bị hệ thống máy móc thiết bị hiện đại có thể chế biến các mặt hàng xuất khẩu có chất lượng cao để có thể đáp ứng được nhu cầu của các thị trường khó tính nhất. Công ty có nhiều xí nghiệp sản xuất đạt tiêu chuẩn Châu Âu DL 34, DL 20, giấy chứng nhận đạt tiêu chuẩn xuất vào các nước hồi giáo HALAL, tiêu chuẩn an toàn vệ sinh thực phẩm Việt Nam HACCP, chứng chỉ ISO 9001: 2008. Sản lượng thành phẩm xuất khẩu hàng năm đạt 9.000 tấn, trong đó 90% xuất khẩu, 10% tiêu thụ nội địa. Các mặt hàng xuất khẩu của Công ty gồm hàng đông các loại như: Tôm, Cá các loại, surimi các loại, Ghẹ, Bạch tuộc, mực nang, mực ống… nguyên con, phi lê, thành phẩm đóng gói nhỏ phục vụ cho các siêu thị. Hàng khô gồm: các loại Cá, Mực… tẩm gia vị và nướng ăn liền…Kim ngạch xuất khẩu hàng năm đạt từ 25 đến 30 triệu USD.
    <br/>
Hiện nay, có trên 40 khách hàng các nước thường xuyên quan hệ mua bán với Công ty. Thị trường lớn nhất là các nước Nhật Bản, Hàn Quốc, Nga, Ukraina, Belarus, Tây Ban Nha, Mỹ, và một số nước thuộc Trung Đông. Mục tiêu kinh doanh của Công ty là luôn chú trọng nâng cao chất lượng sản phẩm. Đầu tư nâng cấp các nhà xưởng, đào tạo đội ngũ công nhân lành nghề, có kinh nghiệm trong sản xuất và coi trọng những yêu cầu về mẫu mã và chất lượng sản phẩm của khách hàng. Công ty luôn giữ uy tín thương hiệu BASEAFOOD trên thị trường Quốc tế.</p>');

insert into `baseafood`.`generic_information` (`type`, `order`, `en_title`, `vi_title`, `en_content`, `vi_content`)
values ('aboutInfo', 1, 'Business Fields', 'Ngành nghề kinh doanh', 'EN _MESSAGE
<ul class="elements ">
<li><i class="fa fa-angle-right"></i>Nuôi trồng, thu mua, chế biến, kinh doanh hàng nông, lâm, thủy sản </li>
<li><i class="fa fa-angle-right"></i>Kinh doanh cây, con giống các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh xe chuyên dùng các loại; kinh doanh xe ôtô tải, xe ôtô khách các lọai; xe môtô các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh máy móc, thiết bị, phụ tùng động cơ các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh hóa chất các loại ( không phải hóa chất có tính độc hại mạnh và cấm kinh doanh );</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh vật liệu xây dựng; Kinh doanh gỗ các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh bao bì các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh dịch vụ ăn uống đầy đủ;</li>
<li><i class="fa fa-angle-right"></i>Dịch vụ đại lý tàu biển; dịch vụ đại lý vận tải đường biển; dịch vụ môi giới hàng hải;</li>
<li><i class="fa fa-angle-right"></i>Mua bán thực phẩm các loại;</li>
<li><i class="fa fa-angle-right"></i>Đại lý mua, bán các loại thực phẩm và đồ uống không cồn;</li>
<li><i class="fa fa-angle-right"></i>Mua bán đồ uống có cồn ( rượu, bia ) ( đối với rượi từ 35 độ cồn trở lên chỉ được mua bán sau khi được Sở Thương mại tỉnh cấp Giấy phép kinh doanh rượu);</li>
<li><i class="fa fa-angle-right"></i>Vận tải hành khách bằng xe ô tô ( trừ taxi, xe buýt );</li>
<li><i class="fa fa-angle-right"></i>Vận tải hàng hóa bằng xe thùng, xe bảo ôn chở thịt thực phẩm;</li>
<li><i class="fa fa-angle-right"></i>Cho thuê kho, bãi;</li>
<li><i class="fa fa-angle-right"></i>Sản xuất và mua bán nước đá ướp lạnh.<li/>
</ul>', ' <ul class="elements ">
<li><i class="fa fa-angle-right"></i>Nuôi trồng, thu mua, chế biến, kinh doanh hàng nông, lâm, thủy sản;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh cây, con giống các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh xe chuyên dùng các loại; kinh doanh xe ôtô tải, xe ôtô khách các lọai; xe môtô các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh máy móc, thiết bị, phụ tùng động cơ các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh hóa chất các loại ( không phải hóa chất có tính độc hại mạnh và cấm kinh doanh );</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh vật liệu xây dựng; Kinh doanh gỗ các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh bao bì các lọai;</li>
<li><i class="fa fa-angle-right"></i>Kinh doanh dịch vụ ăn uống đầy đủ;</li>
<li><i class="fa fa-angle-right"></i>Dịch vụ đại lý tàu biển; dịch vụ đại lý vận tải đường biển; dịch vụ môi giới hàng hải;</li>
<li><i class="fa fa-angle-right"></i>Mua bán thực phẩm các loại;</li>
<li><i class="fa fa-angle-right"></i>Đại lý mua, bán các loại thực phẩm và đồ uống không cồn;</li>
<li><i class="fa fa-angle-right"></i>Mua bán đồ uống có cồn ( rượu, bia ) ( đối với rượi từ 35 độ cồn trở lên chỉ được mua bán sau khi được Sở Thương mại tỉnh cấp Giấy phép kinh doanh rượu);</li>
<li><i class="fa fa-angle-right"></i>Vận tải hành khách bằng xe ô tô ( trừ taxi, xe buýt );</li>
<li><i class="fa fa-angle-right"></i>Vận tải hàng hóa bằng xe thùng, xe bảo ôn chở thịt thực phẩm;</li>
<li><i class="fa fa-angle-right"></i>Cho thuê kho, bãi;</li>
<li><i class="fa fa-angle-right"></i>Sản xuất và mua bán nước đá ướp lạnh.</li>
</ul>');

insert into `baseafood`.`generic_information` (`type`, `order`, `en_title`, `vi_title`, `en_content`, `vi_content`)
values ('aboutInfo', 2, 'Financial Structure', 'Cơ cấu vốn',  'EN _MESSAGE
<ul class="elements ">
<li><i class="fa fa-angle-right"></i>Vốn Nhà nước : 25,74 %</li>
<li><i class="fa fa-angle-right"></i>Vốn của các cổ đông khác : 74,26% </li>
</ul>'
    , '<ul class="elements ">
<li><i class="fa fa-angle-right"></i>Vốn Nhà nước : 25,74 %</li>
<li><i class="fa fa-angle-right"></i>Vốn của các cổ đông khác : 74,26% </li>
</ul>');

