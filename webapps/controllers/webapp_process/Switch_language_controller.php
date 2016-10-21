<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/7/16
 * Time: 1:27 PM
 */
class Switch_language_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('utilities');
    }

    function index()
    {
        $languageToggle = $this->input->post('type');
        if (strcasecmp($languageToggle, "en") == 0 || strcasecmp($languageToggle, "on") == 0) {
            $_SESSION["activeLanguage"] = "en";
        }
        else {
            $_SESSION["activeLanguage"] = "vi";
        }
//        echo $languageToggle;
//        redirect to current page
        if (strcasecmp($this->input->post('redirurl'), "/") == 0) {
            redirect($this->input->post('redirurl') . "home_pro");
        }
        else {
            redirect($this->input->post('redirurl'));
        }
    }

}