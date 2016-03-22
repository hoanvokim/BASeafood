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
        return $this->db->get("category")->result_array();
    }

    public function findByParent($parent)
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('parent =', $parent);
        return $this->db->get()->result_array();
    }

    public function findById($id)
    {
        $this->db->select('id , en_name,vi_name,fk_parent');
        $this->db->from('category');
        $this->db->where('id =', $id);
        $query = $this->db->get();
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'en_name' => $item['en_name'],
                    'vi_name' => $item['vi_name'],
                    'parent' => $item['parent'],
                );
            }
        }
        return false;
    }

    public function findByName($name)
    {
        $this->db->select('id,en_name,vi_name');
        $this->db->from('category');
        $this->db->where('en_name =', $name);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($en_name, $vi_name, $parentId)
    {
        if (!isset($parentId)) {
            $data = array(
                'en_name' => $en_name,
                'vi_name' => $vi_name,
            );
        } else {
            $data = array(
                'en_name' => $en_name,
                'vi_name' => $vi_name,
                'fk_parent' => $parentId,
            );
        }

        $this->db->insert('category', $data);
    }

    public function update($id, $en_name, $vi_name)
    {
        $data = array(
            'en_name' => $en_name,
            'vi_name' => $vi_name
        );
        $this->db->where('id', $id);
        $this->db->update('category', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
    }

    public function getCategoryTreeForParentId($parent_id)
    {
        $categories = array();
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('parent', $parent_id);
        $result = $this->db->get()->result();
        foreach ($result as $mainCategory) {
            $category = array();
            $category['id'] = $mainCategory->id;
            $category['name'] = $mainCategory->en_name;
            $category['parent_id'] = $mainCategory->parent;
            $category['sub_categories'] = $this->getCategoryTreeForParentId($category['id']);
            $categories[$mainCategory->id] = $category;
        }
        return $categories;
    }
}