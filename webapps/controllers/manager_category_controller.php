<?php    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:22 AM
 * To change this template use File | Settings | File Templates.
 */
class Manager_Category_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
        $this->load->model('category_model', '', TRUE);
    }

    public function index()
    {
        $data['title'] = 'Category administration';

        if ($this->isLogin()) {
            $data['categories'] = $this->category_model->findAll();
            $this->load->view('pages/admin/category/index', $data);
        } else {
            $this->load->view('layouts/base/header', $data);
            $this->load->helper(array('form'));
            $this->load->view('pages/security/login', $data);
            $this->load->view('layouts/base/footer_js');
        }
    }

    public function create_new()
    {
        $data['title'] = 'Category creation';
        $this->load->helper(array('form'));
        if ($this->isLogin()) {
            $this->load->view('pages/admin/category/create', $data);
        } else {
            $this->load->view('layouts/base/header', $data);
            $this->load->view('pages/security/login', $data);
            $this->load->view('layouts/base/footer_js');
        }
    }

    public function post_create_new()
    {
        $data['title'] = 'Category creation';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[category.name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/admin/category/create');
        } else {
            $this->category_model->insert($this->input->post('name'));
            redirect('category-manager', 'refresh');
        }
    }

    public function delete($id)
    {
        $data['title'] = 'Category creation';
        $this->load->helper(array('form'));
        if ($this->isLogin()) {
            $this->load->view('pages/admin/category/create', $data);
        } else {
            $this->load->view('layouts/base/header', $data);
            $this->load->view('pages/security/login', $data);
            $this->load->view('layouts/base/footer_js');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Category creation';
        $this->load->helper(array('form'));
        if ($this->isLogin()) {
            $this->load->view('pages/admin/category/create', $data);
        } else {
            $this->load->view('layouts/base/header', $data);
            $this->load->view('pages/security/login', $data);
            $this->load->view('layouts/base/footer_js');
        }
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