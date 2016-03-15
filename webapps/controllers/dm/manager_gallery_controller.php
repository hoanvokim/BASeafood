<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:35 AM
 * To change this template use File | Settings | File Templates.
 */
class Manager_gallery_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
        $this->load->model('gallery_model', '', TRUE);
    }


    public function index()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Gallery administration';
        $data['offices'] = $this->gallery_model->findByGroup('OFFICES');
        $data['factories'] = $this->gallery_model->findByGroup('FACTORIES');
        $this->load->view('pages/admin/gallery/index', $data);
    }

    public function create_new($group)
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $this->load->library('upload');
        $data['title'] = 'Upload image for gallery';
        $data['error'] = '';
        $data['group'] = $group;
        $this->load->view('pages/admin/gallery/create', $data);
    }

    public function post_create_new()
    {
        $this->load->library('form_validation');
        $this->load->library('upload', $this->get_config());
        $this->form_validation->set_rules('en_name', 'en_name', 'trim|required|is_unique[gallery.en_name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        $this->form_validation->set_rules('vi_name', 'vi_name', 'trim|required|is_unique[gallery.vi_name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        $group = $this->input->post('group');
        $en_name = $this->input->post('en_name');
        $vi_name = $this->input->post('vi_name');
        $file_path = null;
        if ($this->form_validation->run() == true) {

            if ($this->upload->do_upload('userfile')) {
                $upload_files = $this->upload->data();
                $file_path = 'assets/upload/images/gallery/' . $upload_files['file_name'];
            }
            if ($file_path) {
                $this->gallery_model->insert($en_name, $vi_name, $file_path, $group);
                redirect('gallery-manager', 'refresh');
            }
        }

        $data['title'] = 'Upload image for gallery';
        $data['error'] = $this->upload->display_errors();
        $data['group'] = $group;
        $this->load->view('pages/admin/gallery/create', $data);
    }

    public function update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit gallery image';
        $data['error'] = '';
        $gallery = $this->gallery_model->findById($this->uri->segment(3));
        if ($gallery) {
            $data['gallery'] = $gallery;
            $this->load->view('pages/admin/gallery/update', $data);
            return;
        }

        redirect('gallery-manager', 'refresh');
    }

    public function post_update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit gallery image';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('en_name', 'en_name', 'trim|required|is_unique[gallery.en_name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        $this->form_validation->set_rules('vi_name', 'vi_name', 'trim|required|is_unique[gallery.vi_name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $en_name = $this->input->post('en_name');
            $vi_name = $this->input->post('vi_name');
            $file_path = null;
            if ($this->upload->do_upload('userfile')) {
                $upload_files = $this->upload->data();
                $file_path = 'assets/upload/images/gallery/' . $upload_files['file_name'];
            }
            if ($file_path) {
                $this->gallery_model->update($en_name, $vi_name, $file_path);
                redirect('gallery-manager', 'refresh');
            }
        }
        $data['title'] = 'Edit gallery';
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/gallery/update', $data);
    }

    public function delete()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Delete image?';
        $image = $this->gallery_model->findById($this->uri->segment(3));
        if ($image) {
            $data['images'] = $image;
            $this->load->view('pages/admin/gallery/delete', $data);
            return;
        }
        redirect('gallery-manager', 'refresh');
    }

    public function post_delete()
    {
        $id = $this->uri->segment(2);
        $images = $this->gallery_model->findById($id);
        @unlink($images['url_image']);
        $this->gallery_model->delete($id);
        redirect('gallery-manager', 'refresh');
    }

    private function get_config()
    {
        return array(
            'upload_path' => "./assets/upload/images/gallery/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "20480000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );

    }
}