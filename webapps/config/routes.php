<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'home_controller';
$route['admin'] = 'dm/admin_controller/index';
$route['logout'] = 'dm/admin_controller/logout';
$route['verifylogin'] = 'dm/verifylogin_controller/index';

//routing for administration pages
//category administration
$route['category-manager'] = 'dm/manager_category_controller/index';
$route['create-category'] = 'dm/manager_category_controller/create_new/$1';
$route['create-category/:num'] = 'dm/manager_category_controller/create_new/$1';
$route['category-manager/update/:num'] = 'dm/manager_category_controller/update';
$route['category-manager/delete/:num'] = 'dm/manager_category_controller/delete';
$route['create-category-submit'] = 'dm/manager_category_controller/post_create_new';
$route['update-category-submit'] = 'dm/manager_category_controller/post_update';
$route['delete-category-submit/:num'] = 'dm/manager_category_controller/post_delete';

//gallery administration
$route['gallery-manager'] = 'dm/manager_gallery_controller/index';

//upload images administration
$route['upload-manager'] = 'dm/manager_images_controller/index';
$route['upload-image'] = 'dm/manager_images_controller/upload';
$route['upload-manager/update/:num'] = 'dm/manager_images_controller/update';
$route['upload-manager/delete/:num'] = 'dm/manager_images_controller/delete';
$route['upload-image-submit'] = 'dm/manager_images_controller/post_upload';
$route['update-image-submit'] = 'dm/manager_images_controller/post_update';
$route['delete-uploaded-image'] = 'dm/manager_images_controller/post_delete';

//menu administration
$route['menu-manager'] = 'dm/manager_menu_controller/index';

//news administration
$route['news-manager'] = 'dm/manager_news_controller/index';

//product administration
$route['product-manager'] = 'dm/manager_product_controller/index';