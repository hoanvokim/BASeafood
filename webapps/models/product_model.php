<?php
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:40 AM
 * To change this template use File | Settings | File Templates.
 */
class Product_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function findById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('product')->result_array();
    }

    public function findAll()
    {
        return $this->db->get('product')->result_array();
    }

    public function findByCategory($category)
    {
        $this->db->where('fk_category', $category);
        $query = $this->db->get('product');
        return $query->result_array();
    }

    public function insert($product)
    {

    }

    public function update()
    {

    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }
}