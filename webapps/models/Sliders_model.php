<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 3/12/16
 * Time: 10:37 AM
 */

class Sliders_Model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function findAll()
    {
        $this->db->select("*");
        $this->db->from('sliders');
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->from('sliders');
        $this->db->where('id =', $id);
        $query = $this->db->get();
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'url' => $item['url'],
                    'en_content' => $item['en_content'],
                    'vi_content' => $item['vi_content'],
                    'img_src' => $item['img_src'],
                );
            }
        }
        return false;
    }

    public function insert($en_content, $vi_content, $file_path, $url)
    {
        $data = array(
            'url' => $url,
            'en_content' => $en_content,
            'vi_content' => $vi_content,
            'img_src' => $file_path,
        );

        $this->db->insert('sliders', $data);
    }

    public function update($id, $en_content, $vi_content, $file_path, $url)
    {
        $data = array(
            'url' => $url,
            'en_content' => $en_content,
            'vi_content' => $vi_content,
            'img_src' => $file_path,
        );
        if ($file_path == null) {
            $data = array(
                'url' => $url,
                'en_content' => $en_content,
                'vi_content' => $vi_content,
            );
        }
        $this->db->where('id', $id);
        $this->db->update('sliders', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news');
    }
}
