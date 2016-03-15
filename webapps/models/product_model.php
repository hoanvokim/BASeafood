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
        $this->db->from('product');
        $this->db->where('id =', $id);
        $query = $this->db->get();
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'vi_name' => $item['vi_name'],
                    'en_name' => $item['en_name'],
                    'size' => $item['size'],
                    'packing' => $item['packing'],
                    'url' => $item['url'],
                    'fk_category' => $item['fk_category']
                );
            }
        }
        return false;
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
            'vi_name' => $name,
            'en_name' => $en_name,
            'url' => $url,
            'fk_category' => $fk_category,
            'size' => $size,
            'packing' => $packing
        );
        $this->db->insert('product', $data);
    }

    public function update($id, $name, $en_name, $fk_category, $url, $size, $packing)
    {
        $data = array(
            'vi_name' => $name,
            'en_name' => $en_name,
            'url' => $url,
            'fk_category' => $fk_category,
            'size' => $size,
            'packing' => $packing
        );
        $this->db->where('id', $id);
        $this->db->update('product', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }
}