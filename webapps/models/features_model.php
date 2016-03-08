<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/8/16
 * Time: 4:35 PM
 */
class Features_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function findAll()
    {
        return $this->db->get('features')->result_array();
    }
}