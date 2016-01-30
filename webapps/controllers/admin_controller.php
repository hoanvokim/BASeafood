<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/29/16
 * Time: 11:37 PM
 * To change this template use File | Settings | File Templates.
 */
class Admin_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model','',TRUE);
    }

    public function index()
    {
        $data['title'] = 'Administration Page';
        $this->load->view('layouts/base/header', $data);
        if ($this->isLogin()) {
            $this->load->view('pages/admin/index', $data);
            $this->load->view('layouts/base/footer');
        } else {
            $this->load->helper(array('form'));
            $this->load->view('pages/security/login', $data);
        }
        $this->load->view('layouts/base/footer_js');
    }
}