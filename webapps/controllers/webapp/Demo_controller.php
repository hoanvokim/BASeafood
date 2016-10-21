<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/17/16
 * Time: 3:38 PM
 */
class Demo_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('utilities');
        $this->load->model('Category_model');
    }

    public function index()
    {
        $data['title'] = 'Product General';
        $data['product_menu'] = $this->Category_model->product_menu();
        $this->load->view('pages/webapp/demo', $data);
    }

}
?>
