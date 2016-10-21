<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/5/16
 * Time: 10:23 AM
 */
class Contact_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->library('utilities');
        $this->utilities->loadPropertiesFiles($this->lang);
    }

    public function index()
    {
        $data['title'] = 'Contact';
        try {
            if ($this->input->post('send_submit')) {
                $consult_name = $this->input->post('consult_name');
                $consult_email = $this->input->post('consult_email');
                $consult_subject = 'Contact from customer';
                $consult_content = "<i>Tên: " . $consult_name . "<br/>"
                    . "Email: " . $consult_email . "<br/>"
                    . "------------------------------------------<br/>"
                    . "<strong>Tiêu đề: " . $consult_subject . "</strong><br/><br/>"
                    . $this->input->post('consult_content');

                //test
                $config1 = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'sup.baseafood1@gmail.com',
                    'smtp_pass' => 'TihHon@16LH',
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'starttls'  => TRUE,
                    'wordwrap' => TRUE,
                    'newline'   => "\r\n"
                );
                $this->load->library('email', $config1);
                $this->email->set_newline("\r\n");

                $this->email->from('sup.baseafood1@gmail.com', $consult_email);
                $this->email->to($this->config->item('contact_email'));
                $this->email->subject($consult_subject);
                $this->email->message($consult_content);
                if (!$this->email->send()) {
                    $data['status'] = $this->email->print_debugger();;
                } else {
                    $data['status'] = 'success';
                }
            } else {
                $data['status'] = '';
            }
        } catch (Exception $e) {
            $data['status'] = $e;
        }
        $data['product_menu'] = $this->Category_model->product_menu();
        $this->load->view('pages/webapp/contact', $data);
    }
}
