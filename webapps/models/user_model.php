<?php

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/30/16
 * Time: 9:57 AM
 * To change this template use File | Settings | File Templates.
 */
class User_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function login($username, $password)
    {
    }

    public function insert($data)
    {
        return $this->db->insert('news', $data);
    }
}