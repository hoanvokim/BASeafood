<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class Photos_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Photos';
        $this->load->view('pages/webapp/photos', $data);
    }

    public function general()
    {
        $data['title'] = 'Photos general';
        $this->load->view('pages/webapp/photos', $data);
    }

    public function factories()
    {
        $data['title'] = 'Photos factories';
        $this->load->view('pages/webapp/photos', $data);
    }
}
