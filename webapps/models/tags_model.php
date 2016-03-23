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

    public function findById($id)
    {
        $this->db->select('id , name');
        $this->db->from('tags');
        $this->db->where('id =', $id);
        $query = $this->db->get();
        if ($query) {
            foreach ($query->result_array() as $item) {
                return array(
                    'id' => $item['id'],
                    'name' => $item['name'],
                );
            }
        }
        return false;
    }

    public function findByName($name)
    {
        $this->db->where('name =', $name);
        $query = $this->db->get('tags')->result_array();
        if ($query) {
            foreach ($query as $rc) {
                return array(
                    'id' => $rc['id'],
                    'name' => $rc['name'],
                );
            }
        }
    }

    public function insert($name)
    {
        $data = array(
            'name' => $name,
        );
        $this->db->insert('tags', $data);
    }

    public function update($id, $name)
    {
        $data = array(
            'name' => $name,
        );
        $this->db->where('id', $id);
        $this->db->update('tags', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tags');
    }

    public function saveReferenceProduct($tag_name, $product)
    {
        $tags = $this->findByName($tag_name);
        $data = array(
            'fk_product' => $product,
            'fk_tags' => $tags['id'],
        );
        $this->db->insert('product_tags', $data);
    }

    public function saveReferenceNews($tag_name, $news)
    {
        $tags = $this->findByName($tag_name);
        $data = array(
            'fk_news' => $news,
            'fk_tags' => $tags['id'],
        );
        $this->db->insert('news_tags', $data);
    }

    public function findProductsByTags($name)
    {
        $sql = 'select p.* from product as p
                join product_tags as pt on pt.fk_product=p.id
                JOIN tags as t on t.id=pt.fk_tags
                WHERE t.name = ' . $name;
        return $this->db->query($sql)->result_array();
    }

    public function findNewsByTags($name)
    {
        $sql = 'select p.* from news as p
                join news_tags as pt on pt.fk_news=p.id
                JOIN tags as t on t.id=pt.fk_tags
                WHERE t.name = ' . $name;
        return $this->db->query($sql)->result_array();
    }


}