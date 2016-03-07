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
    }

    function index()
    {
        $languageToggle = $this->input->post('languageToggle');
        if (strcasecmp($languageToggle, "on") == 0) {
            $_SESSION["activeLanguage"] = "en";
        }
        else {
            $_SESSION["activeLanguage"] = "vi";
        }
        //redirect to current page
        redirect(substr($this->input->post('redirurl'), 10));

    }

}