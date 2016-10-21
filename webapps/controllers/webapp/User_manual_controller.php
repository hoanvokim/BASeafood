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
        $this->load->library('utilities');
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

    public function addUpdateSlider()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/add_update_slider', $data);
    }

    public function sliderManagement()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/slider_management', $data);
    }

    public function addUpdateTag()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/add_update_tag', $data);
    }

    public function tagManagement()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/tag_management', $data);
    }

    public function addUpdateNews()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/add_update_news', $data);
    }

    public function newsManagement()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/news_management', $data);
    }

    public function addUpdateCategory()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/add_update_category', $data);
    }

    public function categoryManagement()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/category_management', $data);
    }

    public function addChildCategory()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/add_child_category', $data);
    }
    public function addUpdateImages()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/add_update_images', $data);
    }

    public function imagesManagement()
    {
        $data['title'] = 'User Manual';
        $this->load->view('pages/usermanual/images_management', $data);
    }
}
