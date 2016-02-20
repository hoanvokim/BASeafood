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
        $this->load->model('images_model', '', TRUE);
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
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $categoryId = $this->uri->segment(2);
        if ($categoryId) {
            $data['category'] = $this->category_model->findById($categoryId);
        }
        $images = $this->images_model->findAll();
        $options = array();
        $selected = -1;
        $default_image = '';
        foreach ($images as $image) {
            array_push($options, array(
                'fk_images' => $image['name']
            ));
            if ($selected == -1) {
                $selected = $image['name'];
                $default_image = base_url() . $image['url'];
            }
        }
        $data['selected'] = $selected;
        $data['images'] = $options;
        $data['title'] = 'Product creation';
        $data['default_image'] = $default_image;
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
        $categoryId = $this->input->post('cid');
        if ($categoryId) {
            $data['category'] = $this->category_model->findById($categoryId);
        }
        $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[product.name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $images = $this->images_model->findAll();
            $options = array();
            $selected = -1;
            $default_image = '';
            foreach ($images as $image) {
                array_push($options, array(
                    'fk_images' => $image['name']
                ));
                if ($selected == -1) {
                    $selected = $image['name'];
                    $default_image = base_url() . $image['url'];
                }
            }
            $data['selected'] = $selected;
            $data['images'] = $options;
            $data['title'] = 'Product creation';
            $data['default_image'] = $default_image;
            $this->load->view('pages/admin/product/create', $data);
        } else {
            $image = $this->images_model->findByName($this->input->post('product_image'));
            $this->product_model->insert($this->input->post('name'), $this->input->post('en_name'), $this->input->post('cid'), $image['id'], $this->input->post('size'), $this->input->post('packing'));
            redirect('product-manager', 'refresh');
        }
    }
}