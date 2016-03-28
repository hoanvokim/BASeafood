<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class Form_reader extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function save_userinput()
    {
        //code goes here
        // for example: getting the post values of the form:
        $form_data = $this->input->post();
        // or just the username:
        $tag = $this->input->post("tag");
        echo $tag;
        // then do whatever you want with it :)

    }
}