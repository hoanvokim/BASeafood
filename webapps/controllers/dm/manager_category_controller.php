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
        if (!$this->isLogin()) {
            $this->loadLoginView();
            return;
        }
        $data['title'] = 'Category administration';
        $data['categories'] = $this->category_model->findAll();
        $categories = array();
        foreach ($data['categories'] as $category) {
            $can_be_deleted = !$this->category_model->findByParent($category['id']);
            array_push($categories, array(
                'id' => $category['id'],
                'name' => $category['name'],
                'fk_parent' => $category['fk_parent'],
                'can_be_deleted' => $can_be_deleted,
            ));
        }
        $data['categories'] = $categories;
        $this->load->view('pages/admin/category/index', $data);
    }

    public function create_new()
    {
        if (!$this->isLogin()) {
            $this->loadLoginView();
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
        if (!$this->isLogin()) {
            $this->loadLoginView();
            return;
        }
        $data['title'] = 'Category creation';
        $this->load->library('form_validation');
        $data['parent'] = '-1';
        $parentId = $this->input->post('pid');
        if ($parentId) {
            $data['parent'] = $this->category_model->findById($parentId);
        }
        $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[category.name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/admin/category/create', $data);
        } else {
            $this->category_model->insert($this->input->post('name'), $this->input->post('pid'));
            redirect('category-manager', 'refresh');
        }
    }

    public function update()
    {
        if (!$this->isLogin()) {
            $this->loadLoginView();
            return;
        }
        $data['title'] = 'Edit category';
        $data['parent'] = -1;
        $category = $this->category_model->findById($this->uri->segment(3));
        if ($category) {
            $data['category'] = $category;
            if ($category['parent']) {
                $data['parent'] = $this->category_model->findById($category['parent']);
            }
            $this->load->view('pages/admin/category/update', $data);
            return;
        }
        redirect('category-manager', 'refresh');
    }

    public function post_update()
    {
        if (!$this->isLogin()) {
            $this->loadLoginView();
            return;
        }
        $data['title'] = 'Edit category';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('dname', 'name', 'trim|required|is_unique[category.name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $category = array(
                'id' => $this->input->post('did'),
                'name' => $this->input->post('dname'),
            );
            $data['category'] = $category;
            $this->load->view('pages/admin/category/update', $data);
        } else {
            $this->category_model->update($this->input->post('did'), $this->input->post('dname'));
            redirect('category-manager', 'refresh');
        }
    }

    public function delete()
    {
        if (!$this->isLogin()) {
            $this->loadLoginView();
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

    function check_existed($name)
    {
        $result = $this->category_model->findByName($name);
        if ($result) {
            $this->form_validation->set_message('check_existed', 'Category existed, please enter another name');
            return true;
        }
        return false;
    }
}