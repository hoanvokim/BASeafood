<?php
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:39 AM
 * To change this template use File | Settings | File Templates.
 */
class Category_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function findAll()
    {
        $query = $this->db->get('category');
        return $query->result_array();
    }

    public function findById($id)
    {
    }

    public function findByName($name)
    {
    }

    public function insert($name)
    {
        $data = array(
            'name' => $name,
        );
        $this->db->insert('category', $data);
    }

    public function update($category)
    {
    }

    public function delete($category)
    {
    }
}