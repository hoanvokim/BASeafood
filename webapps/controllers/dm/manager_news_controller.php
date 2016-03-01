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
        $this->form_validation->set_rules('title', 'title', 'trim|required|is_unique[news.title]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->upload->do_upload('userfile')) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/news/' . $upload_files['file_name'];
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('pages/admin/news/create', $data);
            } else {
                $this->product_model->insert($this->input->post('title'), $this->input->post('content'), $file_path, $file_path, $this->input->post('type'));
                redirect('news-manager', 'refresh');
            }
        }
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/news/create', $data);
    }
}