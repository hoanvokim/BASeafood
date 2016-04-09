<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class User_home_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->utilities->loadPropertiesFiles($this->lang);
    }

    public function index()
    {
        $data['title'] = 'Baseafood';
        $this->load->model('features_model');
        $data['features'] = $this->features_model->findAll();
        $this->load->model('sliders_model');
        $data['sliders'] = $this->sliders_model->findAll();
        $this->load->model('news_model');
        $data['news'] = $this->news_model->getAll();
        $this->load->view('pages/home', $data);
    }

}
