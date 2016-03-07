<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class Contact_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (strcasecmp($_SESSION["activeLanguage"], "vi") == 0) {
            $this->lang->load('message', 'vietnamese');
        } else {
            $this->lang->load('message', 'english');
        }
    }

    public function index()
    {
        $data['title'] = 'Contact';
        $this->load->view('pages/webapp/contact', $data);
    }
}
