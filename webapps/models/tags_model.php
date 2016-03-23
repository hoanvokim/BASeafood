<?php

/**
 * Created by IntelliJ IDEA.
 * User: NhuTran
 * Date: 1/31/16
 * Time: 1:42 AM
 * To change this template use File | Settings | File Templates.
 */
class Tags_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function findAll()
    {
        return $this->db->get("tags")->result_array();
    }

    public function findByViName($vi_name)
    {
        $this->db->where('vi_name =', $vi_name);
        $query = $this->db->get('tags')->result_array();
        if ($query) {
            foreach ($query as $rc) {
                return array(
                    'id' => $rc['id'],
                    'vi_name' => $rc['vi_name'],
                    'en_name' => $rc['en_name']
                );
            }
        }
    }

    public function findByEnName($en_name)
    {
        $this->db->where('en_name =', $en_name);
        $query = $this->db->get('tags')->result_array();
        if ($query) {
            foreach ($query as $rc) {
                return array(
                    'id' => $rc['id'],
                    'vi_name' => $rc['vi_name'],
                    'en_name' => $rc['en_name']
                );
            }
        }
    }

    public function insert($en_name, $vi_name)
    {
        $data = array(
            'en_name' => $en_name,
            'vi_name' => $vi_name,
        );
        $this->db->insert('tags', $data);
    }

    public function update($id, $en_name, $vi_name)
    {
        $data = array(
            'en_name' => $en_name,
            'vi_name' => $vi_name,
        );
        $this->db->where('id', $id);
        $this->db->update('tags', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tags');
    }
}