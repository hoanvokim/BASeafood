<?php

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:40 AM
 * To change this template use File | Settings | File Templates.
 */
class News_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function findAll()
    {
        $query = $this->db->get('news');
        return $query->result_array();
    }

    public function getAll()
    {

        $this->db->select("*");
        $this->db->from('news');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->from('news');
        $this->db->where('id =', $id);
        $query = $this->db->get();
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'en_title' => $item['en_title'],
                    'vi_title' => $item['vi_title'],
                    'en_content' => $item['en_content'],
                    'vi_content' => $item['vi_content'],
                    'url_image' => $item['url_image'],
                    'url_attached_file' => $item['url_attached_file'],
                    'type' => $item['type']
                );
            }
        }
        return false;
    }

    public function insert($en_title, $vi_title, $en_content, $vi_content, $url_attached_file)
    {
        $data = array(
            'en_title' => $en_title,
            'vi_title' => $vi_title,
            'en_content' => $en_content,
            'vi_content' => $vi_content,
            'url_attached_file' => $url_attached_file,
        );

        $this->db->insert('news', $data);
    }

    public function update($id, $en_title, $vi_title, $en_content, $vi_content, $url_attached_file)
    {
        $data = array(
            'en_title' => $en_title,
            'vi_title' => $vi_title,
            'en_content' => $en_content,
            'vi_content' => $vi_content,
            'url_attached_file' => $url_attached_file,
        );
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news');
    }
}