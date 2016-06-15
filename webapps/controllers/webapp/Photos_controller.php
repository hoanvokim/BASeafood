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
        $this->load->model('Category_model');
        $this->utilities->loadPropertiesFiles($this->lang);
    }

    public function index()
    {
        $data['title'] = 'Photos';
        $data['product_menu'] = $this->Category_model->product_menu();
        $this->load->model('gallery_model', '', TRUE);
        $data['offices'] = $this->gallery_model->findByGroupDisplay('OFFICES');
        $this->load->view('pages/webapp/photos', $data);
    }
}
