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
    }

    public function index()
    {
        $data['title'] = 'Product General';
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
}
