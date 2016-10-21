<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/7/16
 * Time: 1:27 PM
 */
class Sentmail_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('utilities');
    }

    function index()
    {
        if ($this->input->post('send_submit')) {
            $consult_name = $this->input->post('name');
            $consult_email = $this->input->post('email');
            $consult_subject = 'Contact from customer';
            $consult_content = "<i>Tên: " . $consult_name . "<br/>"
                . "Email: " . $consult_email . "<br/>"
                . "------------------------------------------<br/>"
                . "<strong>Tiêu đề: " . $consult_subject . "</strong><br/><br/>"
                . $this->input->post('message');

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
            redirect($this->input->post('redirurl'));
        }
    }

}