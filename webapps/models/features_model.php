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
        $this->db->select("*");
        $this->db->from('features');
        $this->db->order_by("id","asc");
        $query = $this->db->get();
        return $query->result();
    }
}