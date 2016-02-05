<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
        $data['images'] = array();
        $this->load->view('pages/admin/images/index', $data);
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
            $data['image'] = $image;
            $this->load->view('pages/admin/images/delete', $data);
            return;
        }
        redirect('upload-manager', 'refresh');
    }

    public function post_delete()
    {
        $this->images_model->delete($this->uri->segment(2));
        redirect('upload-manager', 'refresh');
    }
}