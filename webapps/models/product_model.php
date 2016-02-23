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
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('fk_category', $category);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($name, $en_name, $fk_category, $url, $size, $packing)
    {
        $data = array(
            'name' => $name,
            'en_name' => $en_name,
            'url' => $url,
            'fk_category' => $fk_category,
            'size' => $size,
            'packing' => $packing
        );
        $this->db->insert('product', $data);
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