<?php

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:40 AM
 * To change this template use File | Settings | File Templates.
 */
class Gallery_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function findAll()
    {
        $query = $this->db->get('gallery');
        return $query->result_array();
    }

    public function findById($id)
    {

    }

    public function findByGroup($group)
    {
        $this->db->where('group', $group);
        return $this->db->get('gallery')->result_array();
    }

    public function insert($name, $url_image, $group)
    {
        $data = array(
            'name' => $name,
            'url_image' => $url_image,
            'group' => $group
        );

        $this->db->insert('gallery', $data);
    }

    public function update($name, $url_image, $group)
    {
        $data = array(
            'name' => $name,
            'url_image' => $url_image,
            'group' => $group
        );

        $this->db->update('gallery', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('gallery');
    }
}