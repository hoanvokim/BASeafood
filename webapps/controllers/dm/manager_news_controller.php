<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
        $this->load->model('user_model', '', TRUE);
        $this->load->model('news_model', '', TRUE);
    }

    public function index()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'News administration';
        $data['news_list'] = $this->news_model->findAll();
        $this->load->view('pages/admin/news/index', $data);
    }

    public function create_new()
    {
        $this->load->library('upload');
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'News creation';
        $data['error'] = '';
        $this->load->view('pages/admin/news/create', $data);
    }

    public function post_create_new()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'News creation';
        $this->load->library('form_validation');
        $this->load->library('upload', $this->get_config());
        if ($this->upload->do_upload('userfile')) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/news/' . $upload_files['file_name'];
            $en_title = $this->input->post('en_title');
            $vi_title = $this->input->post('vi_title');
            $en_content = $this->input->post('en_content');
            $vi_content = $this->input->post('vi_content');
            $type = $this->input->post('type');
            $this->news_model->insert($en_title, $vi_title, $en_content,
                $vi_content, $file_path, $file_path, $type);
            redirect('news-manager', 'refresh');
        }
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/news/create', $data);
    }

    public function update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit news';
        $data['error'] = '';
        $news = $this->news_model->findById($this->uri->segment(3));
        if ($news) {
            $data['news'] = $news;
            $this->load->view('pages/admin/news/update', $data);
            return;
        }
        redirect('news-manager', 'refresh');
    }

    public function post_update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit news';
        $this->load->library('form_validation');
        $this->load->library('upload', $this->get_config());
        if ($this->upload->do_upload('userfile')) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/news/' . $upload_files['file_name'];
            $id = $this->input->post('nid');
            $en_title = $this->input->post('en_title');
            $vi_title = $this->input->post('vi_title');
            $en_content = $this->input->post('en_content');
            $vi_content = $this->input->post('vi_content');
            $type = $this->input->post('type');
            $this->news_model->update($id, $en_title, $vi_title, $en_content,
                $vi_content, $file_path, $file_path, $type);
            redirect('news-manager', 'refresh');
        }
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/news/update', $data);
    }

    private function get_config()
    {
        return array(
            'upload_path' => "./assets/upload/images/news/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf|doc|docx",
            'overwrite' => TRUE,
            'max_size' => "20480000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );

    }
}