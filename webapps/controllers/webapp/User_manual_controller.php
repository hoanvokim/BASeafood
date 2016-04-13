<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 4/11/16
 * Time: 9:36 PM
 */
class User_manual_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/user_manual', $data);
    }

    public function addProduct()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/product_add', $data);
    }

    public function removeProduct()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/product_remove', $data);
    }

    public function updateProduct()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/product_update', $data);
    }
    public function managementProduct()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/product_management', $data);
    }
}
