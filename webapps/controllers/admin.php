<?php
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/29/16
 * Time: 11:37 PM
 * To change this template use File | Settings | File Templates.
 */
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Administration Page';

        $this->load->view('layouts/base/header', $data);
        $this->load->view('pages/admin/index', $data);
        $this->load->view('layouts/base/footer');
    }
}