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
        $this->load->model('Category_model');
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

    public function getToTalRowsByCatCollection($aCat){
       // $aSubCate = array();
       // $aSubCate[] = $cateId;
       // $this->Category_model->getAllSubMenu($cateId,$aSubCate);
        $sql = "select count(*) as total_row from product where fk_category in (";
        $n = count($aCat);
        for($i=0;$i<=($n-2);$i++){
            $sql = $sql . $aCat[$i] . ',';
        }
        $sql = $sql . $aCat[$n-1] . ')';
        $result = $this->db->query($sql)->result_array();
        return $result[0]['total_row'];
    }

    public function getProductsByCatCollection($aCat, $index_record, $limit){
        if($aCat && count($aCat) > 0){
            $sql = "select product.*, category.en_name as cat_en_name, category.vi_name as cat_vi_name from product, category where fk_category in (";
            $cnt = count($aCat);
            for ($i = 0; $i < $cnt - 1; $i++) {
                $sql = $sql . $aCat[$i] . ",";
            }
            $sql = $sql . $aCat[$cnt - 1] . ") and fk_category = category.id order by id DESC limit $index_record,$limit";
            return $this->db->query($sql)->result_array();
        }
        return array();
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
