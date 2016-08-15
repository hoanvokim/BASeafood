<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/29/16
 * Time: 10:33 PM
 * To change this template use File | Settings | File Templates.
 */
class Home_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->lang->load('message', 'english');
    }

    public function index()
    {
        $_SESSION["activeLanguage"] = "en";
        $data['title'] = 'Baseafood';
        $data['product_menu'] = $this->Category_model->product_menu();
        $this->load->model('features_model');
        $data['features'] = $this->features_model->findAll();
        $this->load->model('sliders_model');
        $data['sliders'] = $this->sliders_model->findAll();
        $this->load->model('news_model');
        $data['news'] = $this->news_model->getAll();
        $this->load->view('pages/home_pro', $data);
//        $this->load->view('pages/home', $data);
    }
}
