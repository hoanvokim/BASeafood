<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class Search_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->utilities->loadPropertiesFiles($this->lang);
    }

    public function find($tag_name='')
    {
        // or just the username:
        $tag = $tag_name==''? $this->input->post("name"): urldecode($tag_name);
        $this->load->model("tags_model");
        $products = $this->tags_model->findProductsByTags($tag);
        $news = $this->tags_model->findNewsByTags($tag);
        $data["products"] = $products;
        $data["news"] = $news;
        // then do whatever you want with it :)
        $data['title'] = "Search ".$tag;
        $this->load->view('pages/webapp/result', $data);

    }
}
