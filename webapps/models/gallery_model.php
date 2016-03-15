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
    public static $GALLERY_GROUP = array(
        'FACTORIES' => 'Factories',
        'OFFICES' => 'Offices'
    );

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
        $this->db->where('id', $id);
        $query = $this->db->get('gallery');
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'en_name' => $item['en_name'],
                    'vi_name' => $item['vi_name'],
                    'url_image' => $item['url_image'],
                    'group' => $item['group'],
                );
            }
        }
    }

    public function findByGroup($group)
    {
        $this->db->where('group', $group);
        return $this->db->get('gallery')->result_array();
    }

    public function insert($en_name, $vi_name, $url_image, $group)
    {
        $data = array(
            'en_name' => $en_name,
            'vi_name' => $vi_name,
            'url_image' => $url_image,
            'group' => $group
        );

        $this->db->insert('gallery', $data);
    }

    public function update($id, $en_name, $vi_name, $url_image)
    {
        $data = array(
            'en_name' => $en_name,
            'vi_name' => $vi_name,
            'url_image' => $url_image,
        );
        $this->db->where('id', $id);
        $this->db->update('gallery', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('gallery');
    }
}