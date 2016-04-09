<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:35 AM
 * To change this template use File | Settings | File Templates.
 */
class Manager_images_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('images_model', '', TRUE);
    }

    public function index()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Images administration';
        $data['images'] = $this->images_model->findAll();
        $this->load->view('pages/admin/images/index', $data);
    }

    public function upload()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $this->load->library('upload');
        $data['title'] = 'Upload image';
        $data['error'] = '';
        $this->load->view('pages/admin/images/upload', $data);
    }

    public function post_upload()
    {
        $this->load->library('form_validation');
        $this->load->library('upload', $this->get_config());
        if ($this->upload->do_upload('userfile')) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/' . $upload_files['file_name'];
            $this->images_model->insert($upload_files['file_name'], $file_path, $file_path);
            redirect('upload-manager', 'refresh');
        }
        $this->load->library('upload');
        $data['title'] = 'Upload image';
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/images/upload', $data);
    }

    private function get_config()
    {
        return array(
            'upload_path' => "./assets/upload/images/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "20480000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );

    }

    public function delete()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Delete image?';
        $image = $this->images_model->findById($this->uri->segment(3));
        if ($image) {
            $data['images'] = $image;
            $this->load->view('pages/admin/images/delete', $data);
            return;
        }
        redirect('upload-manager', 'refresh');
    }

    public function post_delete()
    {
        $id = $this->uri->segment(2);
        $images = $this->images_model->findById($id);
        @unlink($images['url']);
        $this->images_model->delete($id);
        redirect('upload-manager', 'refresh');
    }

    public function get_image()
    {
        $name = $this->input->post('image_selected');
        $image = $this->images_model->findByName($name);
        echo $image['url'];
    }
}
