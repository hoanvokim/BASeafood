<?php    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:23 AM
 * To change this template use File | Settings | File Templates.
 */
class Manager_Product_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model','',TRUE);
    }

    public function index()
    {
        $data['title'] = 'Product administration';

        if ($this->isLogin()) {
            $this->load->view('pages/admin/product/index', $data);
        } else {
            $this->load->view('layouts/base/header', $data);
            $this->load->helper(array('form'));
            $this->load->view('pages/security/login', $data);
            $this->load->view('layouts/base/footer_js');
        }
    }
}