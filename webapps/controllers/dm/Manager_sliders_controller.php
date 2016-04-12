<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 4/12/16
 * Time: 6:45 AM
 * To change this template use File | Settings | File Templates.
 */
class Manager_sliders_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
        $this->load->model('sliders_model', '', TRUE);
    }

    public function index()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Slider administration';
        $data['sliders'] = $this->sliders_model->findAll();
        $this->load->view('pages/admin/sliders/index', $data);
    }

    public function create_new()
    {
        $this->load->library('upload');
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Sliders creation';
        $data['error'] = '';
        $this->load->view('pages/admin/sliders/create', $data);
    }

    public function post_create_new()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Slider creation';
        $this->load->library('form_validation');
        $this->load->library('upload', $this->get_config());
        $this->form_validation->set_rules('url', 'url', 'trim|required', array(
            'required' => 'You have not provided %s.',
        ));
        if ($this->upload->do_upload('userfile')) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/sliders/' . $upload_files['file_name'];
            if ($this->form_validation->run() == TRUE) {
                $url = $this->input->post('url');
                $en_content = $this->input->post('en_content');
                $vi_content = $this->input->post('vi_content');
                $this->sliders_model->insert($en_content,
                    $vi_content, $file_path, $url);
                redirect('sliders-manager', 'refresh');
            }
        }

        $data['url'] = $this->input->post('url');
        $data['en_content'] = $this->input->post('en_content');
        $data['vi_content'] = $this->input->post('vi_content');
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/sliders/create', $data);
    }

    private function get_config()
    {
        return array(
            'upload_path' => "./assets/upload/images/sliders/",
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
        $data['title'] = 'Edit sliders';
        $data['error'] = '';
        $sliders = $this->sliders_model->findById($this->uri->segment(3));
        if ($sliders) {
            $data['sliders'] = $sliders;
            $this->load->view('pages/admin/sliders/update', $data);
            return;
        }
        redirect('sliders-manager', 'refresh');
    }

    public function post_update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit sliders';
        $this->load->library('form_validation');
        $this->load->library('upload', $this->get_config());
        $this->form_validation->set_rules('url', 'url', 'trim|required', array(
            'required' => 'You have not provided %s.',
        ));
        if ($this->upload->do_upload()) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/sliders/' . $upload_files['file_name'];
            if ($this->form_validation->run() == TRUE) {
                $id = $this->input->post('nid');
                $url = $this->input->post('url');
                $en_content = $this->input->post('en_content');
                $vi_content = $this->input->post('vi_content');
                $this->news_model->update($id, $en_content, $vi_content, $file_path, $url);
                redirect('sliders-manager', 'refresh');
            }
        }
        $error = isset($_FILES['userfile']['error']) ? $_FILES['userfile']['error'] : 4;
        $upload_error = false;
        if (sizeof($this->upload->error_msg) == 1 && $error == 4) {
            if ($this->form_validation->run() == TRUE) {
                $id = $this->input->post('nid');
                $url = $this->input->post('url');
                $en_content = $this->input->post('en_content');
                $vi_content = $this->input->post('vi_content');
                $this->news_model->update($id, $en_content, $vi_content, null, $url);
                redirect('sliders-manager', 'refresh');
            }
        } else {
            $upload_error = true;
        }
        if ($upload_error) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = '';
        }
        $slider = array(
            'id' => $this->input->post('nid'),
            'url' => $this->input->post('url'),
            'en_content' => $this->input->post('en_content'),
            'vi_content' => $this->input->post('vi_content'),
        );
        $data['slider'] = $slider;
        $this->load->view('pages/admin/sliders/update', $data);
    }

    public function delete()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Delete sliders?';
        $slider = $this->sliders_model->findById($this->uri->segment(3));
        if ($slider) {
            $data['slider'] = $slider;
            $this->load->view('pages/admin/sliders/delete', $data);
            return;
        }
        redirect('sliders-manager', 'refresh');
    }

    public function post_delete()
    {
        $id = $this->uri->segment(2);
        $slider = $this->sliders_model->findById($id);
        if ($slider) {
            @unlink($slider['url']);
            $this->sliders_model->delete($id);
        }
        redirect('sliders-manager', 'refresh');
    }
}