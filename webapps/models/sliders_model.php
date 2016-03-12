<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/12/16
 * Time: 10:37 AM
 */

class Sliders_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function findAll()
    {
        $this->db->select("*");
        $this->db->from('sliders');
        $this->db->order_by("id","asc");
        $query = $this->db->get();
        return $query->result();
    }
}