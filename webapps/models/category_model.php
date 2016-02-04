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
        $this->db->select('id,name');
        $this->db->from('category');
        $this->db->where('id =', $id);
        $query = $this->db->get();
        return $query->result_array();
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

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }
}