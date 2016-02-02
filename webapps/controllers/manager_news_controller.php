<?php   defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:27 AM
 * To change this template use File | Settings | File Templates.
 */
class Manager_news_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model','',TRUE);
    }

    public function index()
    {
        if (!$this->isLogin()) {
            $this->loadLoginView();
            return;
        }
        $data['title'] = 'News administration';
        $this->load->view('pages/admin/news/index', $data);
    }
}