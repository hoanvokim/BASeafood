<?php
/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:40 AM
 * To change this template use File | Settings | File Templates.
 */
class Images_model extends CI_Model
{
    var $id;
    var $url;
    var $name;
    var $thumb_url;

    public function __construct()
    {
        $this->load->database();
    }

    public function findAll()
    {
        return $this->db->get('images')->result_array();
    }

    public function findById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get("images");
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'url' => $item['url'],
                    'thumb_url' => $item['thumb_url'],
                );
            }
        }
        return false;
    }

    public function findByName($name)
    {
        $this->db->where('name', $name);
        $query = $this->db->get("images");
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'url' => $item['url'],
                    'thumb_url' => $item['thumb_url'],
                );
            }
        }
        return false;
    }

    public function insert($name, $url, $thumb_url)
    {
        $data = array(
            'name' => $name,
            'url' => $url,
            'thumb_url' => $thumb_url,
        );
        $this->db->insert('images', $data);
    }

    public function update($id, $name, $url, $thumb_url)
    {
        $data = array(
            'name' => $name,
            'url' => $url,
            'thumb_url' => $thumb_url,
        );
        $this->db->where('id', $id);
        $this->db->update('images', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('images');
    }
}
