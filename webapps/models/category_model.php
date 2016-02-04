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
        $this->db->order_by('fk_parent,id');
        $query = $this->db->get('category');
        return $query->result_array();
    }

    public function findByParent($parent)
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('fk_parent =', $parent);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function findById($id)
    {
        $this->db->select('id , name,fk_parent');
        $this->db->from('category');
        $this->db->where('id =', $id);
        $query = $this->db->get();
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'parent' => $item['fk_parent'],
                );
            }
        }
        return false;
    }

    public function findByName($name)
    {
        $this->db->select('id,name');
        $this->db->from('category');
        $this->db->where('name =', $name);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($name, $parentId)
    {
        if (!isset($parentId)) {
            $data = array(
                'name' => $name,
            );
        } else {
            $data = array(
                'name' => $name,
                'fk_parent' => $parentId,
            );
        }

        $this->db->insert('category', $data);
    }

    public function update($id, $name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->where('id', $id);
        $this->db->update('category', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
    }
}