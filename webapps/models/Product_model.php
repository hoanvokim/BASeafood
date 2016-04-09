<?php

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:40 AM
 * To change this template use File | Settings | File Templates.
 * @property  db
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

    public function findByViName($vi_name)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('vi_name =', $vi_name);
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

    public function findByEnName($en_name)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('en_name =', $en_name);
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
        $this->db->select("*");
        $this->db->from('product');
        $query = $this->db->get();
        return $query->result();
    }

    public function record_count()
    {
        return $this->db->count_all("product");
    }

    public function fetch_data($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("product");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function recordCountByCategory($category)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('fk_category', $category);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function findAllProductByCategory($category)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('fk_category', $category);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function findByCategory($category, $limit, $start)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('fk_category', $category);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function recordCountByCategories($category)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->or_where_in('fk_category', $category);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function findByCategories($category, $limit, $start)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->or_where_in('fk_category', $category);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
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
        if ($url == null) {
            $data = array(
                'vi_name' => $name,
                'en_name' => $en_name,
                'fk_category' => $fk_category,
                'size' => $size,
                'packing' => $packing
            );
        }

        $this->db->where('id', $id);
        $this->db->update('product', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }
}
