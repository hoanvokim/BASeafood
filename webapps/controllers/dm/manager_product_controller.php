<?php    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:23 AM
 * To change this template use File | Settings | File Templates.
 */
class Manager_product_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
        $this->load->model('category_model', '', TRUE);
        $this->load->model('product_model', '', TRUE);
    }

    public function index()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Product administration';
        $categories = $this->category_model->findAll();
        $products_category = array();
        foreach ($categories as $category) {
            $products = $this->product_model->findByCategory($category['id']);
            array_push($products_category, array(
                'id' => $category['id'],
                'name' => $category['name'],
                'products' => $products,
            ));
        }

        $data['categories'] = $products_category;
        $this->load->view('pages/admin/product/index', $data);
    }

    public function create_new()
    {
        $this->load->library('upload');
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $categoryId = $this->uri->segment(2);
        if ($categoryId) {
            $data['category'] = $this->category_model->findById($categoryId);
        }
        $data['title'] = 'Product creation';
        $data['error'] = '';
        $this->load->view('pages/admin/product/create', $data);
    }

    public function post_create_new()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Product creation';
        $this->load->library('form_validation');
        $this->load->library('upload', $this->get_config());
        $categoryId = $this->input->post('cid');
        if ($categoryId) {
            $data['category'] = $this->category_model->findById($categoryId);
        }
        $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[product.name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->upload->do_upload('userfile')) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/products/' . $upload_files['file_name'];
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('pages/admin/product/create', $data);
            } else {
                $this->product_model->insert($this->input->post('name'), $this->input->post('en_name'), $this->input->post('cid'), $file_path, $this->input->post('size'), $this->input->post('packing'));
                redirect('product-manager', 'refresh');
            }
        }
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/product/create', $data);
    }

    private function get_config()
    {
        return array(
            'upload_path' => "./assets/upload/images/products/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "20480000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );

    }

    public function update()
    {
        $this->load->library('upload');
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit product';
        $data['error'] = '';
        $product = $this->product_model->findById($this->uri->segment(3));
        if ($product) {
            $data['product'] = $product;
            $data['category'] = $this->category_model->findById($product['fk_category']);
            $this->load->view('pages/admin/product/update', $data);
            return;
        }
        redirect('product-manager', 'refresh');
    }

    public function post_update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit product';
        $this->load->library('form_validation');
        $this->load->library('upload', $this->get_config());
        $categoryId = $this->input->post('cid');
        if ($categoryId) {
            $data['category'] = $this->category_model->findById($categoryId);
        }
        $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[product.name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->upload->do_upload('userfile')) {
            $upload_files = $this->upload->data();
            $file_path = 'assets/upload/images/products/' . $upload_files['file_name'];
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('pages/admin/product/update', $data);
            } else {
                $this->product_model->update($this->input->post('pid'), $this->input->post('name'), $this->input->post('en_name'), $this->input->post('cid'), $file_path, $this->input->post('size'), $this->input->post('packing'));
                redirect('product-manager', 'refresh');
            }
        }
        $data['error'] = $this->upload->display_errors();
        $this->load->view('pages/admin/product/update', $data);
    }

    public function delete()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Delete product?';
        $product = $this->product_model->findById($this->uri->segment(3));
        if ($product) {
            $data['product'] = $product;
            $this->load->view('pages/admin/product/delete', $data);
            return;
        }
        redirect('product-manager', 'refresh');
    }

    public function post_delete()
    {
        $id = $this->uri->segment(2);
        $product = $this->product_model->findById($id);
        if ($product) {
            @unlink($product['url']);
            $this->product_model->delete($id);
        }
        redirect('product-manager', 'refresh');
    }
}