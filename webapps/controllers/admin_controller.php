<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/29/16
 * Time: 11:37 PM
 * To change this template use File | Settings | File Templates.
 */
class Admin_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model','',TRUE);
    }

    public function index()
    {
        if (!$this->isLogin()) {
           $this->loadLoginView();
            return;
        }
        $data['title'] = 'Administration Page';
        $this->load->view('pages/admin/index', $data);
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('admin', 'refresh');
    }
}