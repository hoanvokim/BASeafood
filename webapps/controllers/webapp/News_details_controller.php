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
        $this->load->model('tags_model');
        $this->load->model('news_model');
        $news = $this->news_model->findById($newsId);
        if (strcasecmp($_SESSION["activeLanguage"], "en") == 0) {
            $data['title'] =  $news['en_title'];
        }
        else {
            $data['title'] =  $news['vi_title'];
        }
        $data['new'] = $news;
        $data['tags'] = $this->tags_model->getRandom();
        $this->load->view('pages/webapp/newsdetails', $data);
    }
}
