<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 4/13/16
 * Time: 9:43 PM
 */
class News_details_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->utilities->loadPropertiesFiles($this->lang);
    }

    public function view($newsId)
    {
        $data['title'] = 'News details';
        $this->load->view('pages/webapp/newsdetails', $data);
    }
}
