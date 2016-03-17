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
        $this->load->model("category_model");
        $items = $this->category_model->findAll();
        $this->load->library("multi_menu");
        $this->multi_menu->set_items($items);

        $this->load->library("pagination");
        $this->load->model('product_model');
    }

    public function index()
    {
        $config = array();
        $config["base_url"] = base_url() . "product";
        $total_row = $this->product_model->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 8;
        $config['uri_segment'] = 2;
        $config['num_links'] = 5;

        //bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
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


        $data['title'] = 'Product General';

        //paging
        $this->pagination->initialize($config);
        $page =($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["products"] = $this->product_model->fetch_data($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view('pages/webapp/product', $data);
    }

    public function domestic()
    {
        $data['title'] = 'Product Domestic';
        $this->load->view('pages/webapp/product', $data);
    }

    public function international()
    {
        $data['title'] = 'Product international';
        $this->load->view('pages/webapp/product', $data);
    }

    public function findByCategories($category)
    {
        $this->load->model("category_model");
        $ids = $this->category_model->getCategoryTreeForParentId($category);
        $idList = array();
        $idList = $this->echoText($ids, $idList);
        $this->load->model("product_model");
        $data['title'] = 'abc';
        if (count($idList) == 0) {
            $data['products'] = $this->product_model->findByCategory($category);
        }
        else {
            $data['products'] = $this->product_model->findByCategories($idList);
        }
        $this->load->view('pages/webapp/product', $data);
    }

    public function echoText($ids, $idList)
    {
        while (key($ids) !== NULL) {
            if (is_int(key($ids))) {
                array_push($idList, key($ids));
            }
            if (is_array(current($ids))) {
                $idList = $this->echoText(current($ids), $idList);
            }
            // PHP_EOL
            next($ids);
        }
        return $idList;
    }
}
