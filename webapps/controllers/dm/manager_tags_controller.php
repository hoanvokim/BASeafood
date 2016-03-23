<?php

/**
 * Created by IntelliJ IDEA.
 * User: ntr
 * Date: 23.03.16
 * Time: 14:00
 */
class Manager_Tags_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', '', TRUE);
        $this->load->model('tags_model', '', TRUE);
    }

    public function index()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Tags administration';
        $data['tags'] = $this->tags_model->findAll();
        $this->load->view('pages/admin/tags/index', $data);
    }

    public function create_new()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Tags creation';
        $this->load->view('pages/admin/tags/create', $data);
    }

    public function post_create_new()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Tags creation';
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[tags.name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/admin/tags/create', $data);
        } else {
            $this->tags_model->insert($this->input->post('name'));
            redirect('tags-manager', 'refresh');
        }
    }

    public function update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit tags';
        $tags = $this->tags_model->findById($this->uri->segment(3));
        if ($tags) {
            $data['tags'] = $tags;
            $this->load->view('pages/admin/tags/update', $data);
            return;
        }
        redirect('tags-manager', 'refresh');
    }

    public function post_update()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Edit tags';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[tags.name]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
        ));
        if ($this->form_validation->run() == FALSE) {
            $tags = array(
                'id' => $this->input->post('did'),
                'name' => $this->input->post('name'),
            );
            $data['tags'] = $tags;
            $this->load->view('pages/admin/tags/update', $data);
        } else {
            $this->tags_model->update($this->input->post('did'), $this->input->post('name'));
            redirect('tags-manager', 'refresh');
        }
    }

    public function delete()
    {
        if (!$this->is_login()) {
            $this->load_login_view();
            return;
        }
        $data['title'] = 'Delete tags?';
        $tags = $this->tags_model->findById($this->uri->segment(3));
        if ($tags) {
            $data['tags'] = $tags;
            $this->load->view('pages/admin/tags/delete', $data);
            return;
        }
        redirect('tags-manager', 'refresh');
    }

    public function post_delete()
    {
        $this->tags_model->delete($this->uri->segment(2));
        redirect('tags-manager', 'refresh');
    }
}