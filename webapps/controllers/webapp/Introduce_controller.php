<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class Introduce_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->utilities->loadPropertiesFiles($this->lang);
    }

    public function index()
    {
        $data['title'] = 'Our Company';
        $data['product_menu'] = $this->Category_model->product_menu();
        $this->load->model('generic_information_model');
        $this->load->model('tags_model');
        $data['aboutInformation'] = $this->generic_information_model->findByComponent('aboutInfo');
        $data['tags'] = $this->tags_model->getRandom();
        $this->load->view('pages/webapp/introduce', $data);
    }
}
