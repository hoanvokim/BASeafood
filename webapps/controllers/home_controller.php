<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/29/16
 * Time: 10:33 PM
 * To change this template use File | Settings | File Templates.
 */
class Home_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('message', 'english');
        $this->load->model('features_model', '', TRUE);
    }

    public function index()
    {
        $_SESSION["activeLanguage"] = "en";
        $data['title'] = 'Baseafood';

        $features = $this->features_model->findAll();

        $this->load->view('pages/home', $data);
    }
}