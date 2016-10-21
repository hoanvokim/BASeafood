<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class Home_pro_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('utilities');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('pages/home_pro', $data);
    }

}
