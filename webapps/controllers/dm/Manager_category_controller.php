<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:22 AM
 */
class Manager_category_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
        $this->load->model('category_model', '', TRUE);
    }

    public function index()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Category administration';
        $data['categories'] = $this->category_model->findAll();
        $categories = array();
        foreach ($data['categories'] as $category) {
            $can_be_deleted = TRUE;
            if ($this->category_model->findByParent($category['id'])) {
                $can_be_deleted = FALSE;
            };
            array_push($categories, array(
                'id' => $category['id'],
                'en_name' => $category['en_name'],
                'vi_name' => $category['vi_name'],
                'fk_parent' => $category['parent'],
                'can_be_deleted' => $can_be_deleted,
            ));
        }
        $data['categories'] = $categories;
        $this->load->view('pages/admin/category/index', $data);
    }

    public function create_new()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Category creation';
        $data['parent'] = -1;
        $parentId = $this->uri->segment(2);
        if ($parentId) {
            $data['parent'] = $this->category_model->findById($parentId);
        }

        $this->load->view('pages/admin/category/create', $data);
    }

    public function post_create_new()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Category creation';
        $this->load->library('form_validation');
        $data['parent'] = '-1';
        $parentId = $this->input->post('pid');
        if ($parentId) {
            $data['parent'] = $this->category_model->findById($parentId);
        }
        $this->form_validation->set_rules('en_name', 'en_name', 'trim|required|is_unique[category.en_name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/admin/category/create', $data);
        } else {
            $this->category_model->insert($this->input->post('en_name'), $this->input->post('vi_name'), $this->input->post('pid'));
            redirect('category-manager', 'refresh');
        }
    }

    public function update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit category';
        $category = $this->category_model->findById($this->uri->segment(3));
        if ($category) {
            $data['category'] = $category;
            $this->load->view('pages/admin/category/update', $data);
            return;
        }
        redirect('category-manager', 'refresh');
    }

    public function post_update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit category';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('en_name', 'en_name', 'trim|required|callback_check_en_name_existed', array(
            'required' => 'You have not provided %s.',
            'check_en_name_existed' => 'This %s already exists.'
        ));
        $this->form_validation->set_rules('vi_name', 'vi_name', 'trim|required|callback_check_vi_name_existed', array(
            'required' => 'You have not provided %s.',
            'check_vi_name_existed' => 'This %s already exists.'
        ));

        if ($this->form_validation->run() == FALSE) {
            $category = array(
                'id' => $this->input->post('did'),
                'en_name' => $this->input->post('en_name'),
                'vi_name' => $this->input->post('vi_name'),
            );
            $data['category'] = $category;
            $this->load->view('pages/admin/category/update', $data);
        } else {
            $this->category_model->update($this->input->post('did'), $this->input->post('en_name'), $this->input->post('vi_name'));
            redirect('category-manager', 'refresh');
        }
    }

    public function delete()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Delete category?';
        $category = $this->category_model->findById($this->uri->segment(3));
        if ($category) {
            $data['category'] = $category;
            $this->load->view('pages/admin/category/delete', $data);
            return;
        }
        redirect('category-manager', 'refresh');
    }

    public function post_delete()
    {
        $this->category_model->delete($this->uri->segment(2));
        redirect('category-manager', 'refresh');
    }

    function check_vi_name_existed($name)
    {
        $id = $this->input->post('did');
        $category = $this->category_model->findById($id);
        if ($category['vi_name'] != $name) {
            $result = $this->category_model->findByViName($name);
            if ($result) {
                $this->form_validation->set_message('check_existed', 'Category existed, please enter another name');
                return false;
            }

        }
        return true;
    }

    function check_en_name_existed($name)
    {
        $id = $this->input->post('did');
        $category = $this->category_model->findById($id);
        if ($category['en_name'] != $name) {
            $result = $this->category_model->findByEnName($name);
            if ($result) {
                $this->form_validation->set_message('check_existed', 'Category existed, please enter another name');
                return false;
            }

        }
        return true;
    }
}
