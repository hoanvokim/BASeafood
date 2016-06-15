<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class News_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->utilities->loadPropertiesFiles($this->lang);
    }

    public function index()
    {
        $data['title'] = 'News and Events';
        $data['product_menu'] = $this->Category_model->product_menu();
        $this->load->model('news_model');
        $this->load->model('tags_model');
        $data['news'] = $this->news_model->getAll();
        $data['tags'] = $this->tags_model->getRandom();
        $this->load->view('pages/webapp/newsandevents', $data);
    }
}
