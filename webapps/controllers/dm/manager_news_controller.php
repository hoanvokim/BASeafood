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
        $this->form_validation->set_rules('en_title', 'en_title', 'trim|required', array(
            'required' => 'You have not provided %s.',
        ));
        $this->form_validation->set_rules('vi_title', 'vi_title', 'trim|required', array(
            'required' => 'You have not provided %s.',
        ));
        if ($this->upload->do_upload('userfile')) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/news/' . $upload_files['file_name'];
            if ($this->form_validation->run() == TRUE) {
                $en_title = $this->input->post('en_title');
                $vi_title = $this->input->post('vi_title');
                $en_content = $this->input->post('en_content');
                $vi_content = $this->input->post('vi_content');
                $this->news_model->insert($en_title, $vi_title, $en_content,
                    $vi_content, $file_path);
                redirect('news-manager', 'refresh');
            }
        }

        $data['en_title'] = $this->input->post('en_title');
        $data['vi_title'] = $this->input->post('vi_title');
        $data['en_content'] = $this->input->post('en_content');
        $data['vi_content'] = $this->input->post('vi_content');
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/news/create', $data);
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
        $this->form_validation->set_rules('en_title', 'en_title', 'trim|required', array(
            'required' => 'You have not provided %s.',
        ));
        $this->form_validation->set_rules('vi_title', 'vi_title', 'trim|required', array(
            'required' => 'You have not provided %s.',
        ));
        if ($this->upload->do_upload()) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/news/' . $upload_files['file_name'];
            if ($this->form_validation->run() == TRUE) {
                $id = $this->input->post('nid');
                $en_title = $this->input->post('en_title');
                $vi_title = $this->input->post('vi_title');
                $en_content = $this->input->post('en_content');
                $vi_content = $this->input->post('vi_content');
                $this->news_model->update($id, $en_title, $vi_title, $en_content, $vi_content, $file_path);
                redirect('news-manager', 'refresh');
            }
        }
        $error = isset($_FILES['userfile']['error']) ? $_FILES['userfile']['error'] : 4;
        $upload_error = false;
        if (sizeof($this->upload->error_msg) == 1 && $error == 4) {
            if ($this->form_validation->run() == TRUE) {
                $id = $this->input->post('nid');
                $en_title = $this->input->post('en_title');
                $vi_title = $this->input->post('vi_title');
                $en_content = $this->input->post('en_content');
                $vi_content = $this->input->post('vi_content');
                $this->news_model->update($id, $en_title, $vi_title, $en_content, $vi_content, null);
                redirect('news-manager', 'refresh');
            }
        } else {
            $upload_error = true;
        }
        if ($upload_error) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = '';
        }
        $news = array(
            'id' => $this->input->post('nid'),
            'en_title' => $this->input->post('en_title'),
            'vi_title' => $this->input->post('vi_title'),
            'en_content' => $this->input->post('en_content'),
            'vi_content' => $this->input->post('vi_content'),
        );
        $data['news'] = $news;
        $this->load->view('pages/admin/news/update', $data);
    }

    public function delete()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Delete news?';
        $news = $this->news_model->findById($this->uri->segment(3));
        if ($news) {
            $data['news'] = $news;
            $this->load->view('pages/admin/news/delete', $data);
            return;
        }
        redirect('news-manager', 'refresh');
    }

    public function post_delete()
    {
        $id = $this->uri->segment(2);
        $news = $this->news_model->findById($id);
        if ($news) {
            @unlink($news['url']);
            $this->news_model->delete($id);
        }
        redirect('news-manager', 'refresh');
    }
}