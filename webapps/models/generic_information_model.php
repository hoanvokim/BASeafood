<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/10/16
 * Time: 10:23 PM
 */
class Generic_Information_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function findByComponent($component)
    {
        $this->db->select("*");
        $this->db->from('generic_information');
        $this->db->where("type='".$component."'");
        $this->db->order_by("order","asc");
        $query = $this->db->get();
        return $query->result();
    }
}