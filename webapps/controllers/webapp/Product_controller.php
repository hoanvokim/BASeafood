<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class Product_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->utilities->loadPropertiesFiles($this->lang);
        //init pagination
        $this->load->library("pagination");
        $this->load->helper('text');
        $this->load->model('product_model');

        //load categories
        $this->load->model("category_model");
        $items = $this->category_model->findAll();
        $this->load->library("multi_menu");
        $this->multi_menu->set_items($items);
        $this->load->model("Tags_model");

    }

    public function index()
    {
       /* $total_row = $this->product_model->record_count();
        //bootstrap pagination
        $config = $this->initPaginationBootstrap($total_row);
        //paging
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["products"] = $this->product_model->fetch_data($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['total'] = $total_row;
        $data['title'] = 'Products';
        $this->load->view('pages/webapp/product', $data);  */
    }

    function initPaginationBootstrap($count,$cateId)
    {
        $config = array();
        $config["base_url"] = base_url() . "product/findByCategories/$cateId";
        $config["total_rows"] = $count;
        $config["per_page"] = 12;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        return $config;
    }


    public function findByCategories($category)
    {
        //recursive categories from parent
        $this->load->model("category_model");
        //$ids = $this->category_model->getCategoryTreeForParentId($category);
        //$idList = array();
        //$idList = $this->exportIds($ids, $idList);
        $this->load->model("product_model");

        $null_parent = $this->Category_model->getLargestParent($category);

        $data['product_menu'] = $this->Category_model->product_menu();

        $color_number = -1;
        $aFirst = $this->Category_model->getFirstLevelSubMenu($null_parent, $color_number);
        $treeSubMenu = array();
        $cnt = 0;
        $color_number = 1;
        foreach($aFirst as $first){
            $treeSubMenu[$cnt]['id'] = $first['id'];
            $treeSubMenu[$cnt]['en_name'] = $first['en_name'];
            $treeSubMenu[$cnt]['vi_name'] = $first['vi_name'];
            $treeSubMenu[$cnt]['icon-col'] = $first['icon-col'];
            if($color_number > 6){
                $color_number = 1;
            }
            $treeSubMenu[$cnt]['color_num'] = $color_number++;
            $treeSubMenu[$cnt]['sub_menu'] = $this->Category_model->getFirstLevelSubMenu($first['id'],$color_number);
            $cnt++;
        }

        $data['tree_sub_menu'] = $treeSubMenu;

        $aCat = array();
        $aCat[] = $category;
        $this->Category_model->getAllSubMenu($category,$aCat);
        $total_row = $this->product_model->getToTalRowsByCatCollection($aCat);
        $config = $this->initPaginationBootstrap($total_row,$category);
        $this->pagination->initialize($config);
        $index_record = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $aProduct = $this->product_model->getProductsByCatCollection($aCat, $index_record, $config["per_page"]);

        $products = array();
        $cnt = 0;
        foreach($aProduct as $item){
            $products[$cnt]['id'] = $item['id'];
            $products[$cnt]['en_name'] = $item['en_name'];
            $products[$cnt]['vi_name'] = $item['vi_name'];
            $products[$cnt]['size'] = $item['size'];
            $products[$cnt]['packing'] = $item['packing'];
            $products[$cnt]['url'] = $item['url'];
            $products[$cnt]['fk_category'] = $item['fk_category'];
            $products[$cnt]['cat_en_name'] = $item['cat_en_name'];
            $products[$cnt]['cat_vi_name'] = $item['cat_vi_name'];
            $products[$cnt]['atag'] = $this->Tags_model->getTagNameByProductId($item['id']);
            $cnt++;
        }

        $data['products'] = $products;


       /* if (count($idList) == 0) {
            $total_row = $this->product_model->recordCountByCategory($category);
            //bootstrap pagination
            $config = $this->initPaginationBootstrap($total_row,$category);
            //paging
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
            $data['products'] = $this->product_model->findByCategory($category, $config["per_page"], $page);
        } else {
            $total_row = $this->product_model->recordCountByCategories($idList);
            //bootstrap pagination
            $config = $this->initPaginationBootstrap($total_row,$category);
            //paging
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
            $data['products'] = $this->product_model->findByCategories($idList, $config["per_page"], $page);
        } */

        $data["total"] = $total_row;
        $data["links"] = $this->pagination->create_links();
        $data["title"] = "Category";
        $data["category"] = $this->category_model->findById($category);
        $data['subTitle'] = 'Domestic';
        $this->load->view('pages/webapp/productLayout', $data);
    }

    public function exportIds($ids, $idList)
    {
        while (key($ids) !== NULL) {
            if (is_int(key($ids))) {
                array_push($idList, key($ids));
            }
            if (is_array(current($ids))) {
                $idList = $this->exportIds(current($ids), $idList);
            }
            // PHP_EOL
            next($ids);
        }
        return $idList;
    }

    public function domestic()
    {
        $total_row = $this->product_model->record_count();
        //bootstrap pagination
        $config = $this->initPaginationBootstrap($total_row,1);
        //paging
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["products"] = $this->product_model->fetch_data($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['total'] = $total_row;
        $data['title'] = 'Products';
        $data['subTitle'] = 'Domestic';
        $this->load->view('pages/webapp/productLayout', $data);
    }
}
