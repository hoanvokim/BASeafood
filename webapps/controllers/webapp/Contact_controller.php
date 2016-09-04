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
        $this->utilities->loadPropertiesFiles($this->lang);
    }

    public function index()
    {
        $data['title'] = 'Contact';
        try {
            if ($this->input->post('send_submit')) {
                $contact['protocol'] = $this->config->item('protocol');
                $contact['charset'] = $this->config->item('charset');
                $contact['mailtype'] = $this->config->item('mailtype');
                $contact['wordwrap'] = $this->config->item('wordwrap');

                $consult_name = $this->input->post('consult_name');
                $consult_email = $this->input->post('consult_email');

                $consult_content = "<i>Tên: " . $consult_name . "<br/>"
                    . "Email: " . $consult_email . "<br/>"
                    . "------------------------------------------<br/>"
                    . "<strong>Nội dung:</strong><br/><br/>"
                    . $this->input->post('consult_content');

                //test
                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'sup.issiloo@gmail.com',
                    'smtp_pass' => 'TihHon@16LH',
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );

                $this->load->library('email', $config);
                $this->email->initialize($config);
                $this->email->set_newline("\r\n");
                $this->email->from('sup.issiloo@gmail.com', 'Hoan vo');
                $this->email->to('hoan.vokim@gmail.com');
                $this->email->subject('SOME SUBJECT');
                $this->email->message('<p>Some Content</p>');
//                if (!$this->email->send()) {
//                    $data['status'] = 'error';
//                } else {
//                    $data['status'] = 'success';
//                }
                if($this->email->send())
                {
                    echo 'Your email was sent.';
                }

                else
                {
                    show_error($this->email->print_debugger());
                }
            } else {
                $data['status'] = '';
                $data['product_menu'] = $this->Category_model->product_menu();
                $this->load->view('pages/webapp/contact', $data);
            }
        } catch (Exception $e) {
            $data['status'] = $e;
        }
    }
}
