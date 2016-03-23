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

    public function saveReferenceProduct($tag, $product)
    {
        $data = array(
            'fk_product' => $product,
            'fk_tags' => $tag,
        );
        $this->db->insert('product_tags', $data);
    }

    public function saveReferenceNews($tag, $news)
    {
        $data = array(
            'fk_news' => $news,
            'fk_tags' => $tag,
        );
        $this->db->insert('news_tags', $data);
    }

    public function findProductsByViTags($vi_name)
    {
        $sql = 'select p.* from product as p
                join product_tags as pt on pt.fk_product=p.id
                JOIN tags as t on t.id=pt.fk_tags
                WHERE t.vi_name = ' . $vi_name;
        return $this->db->query($sql)->result_array();
    }

    public function findProductsByEnTags($en_name)
    {
        $sql = 'select p.* from product as p
                join product_tags as pt on pt.fk_product=p.id
                JOIN tags as t on t.id=pt.fk_tags
                WHERE t.en_name = ' . $en_name;
        return $this->db->query($sql)->result_array();
    }

    public function findNewsByViTags($vi_name)
    {
        $sql = 'select p.* from news as p
                join news_tags as pt on pt.fk_news=p.id
                JOIN tags as t on t.id=pt.fk_tags
                WHERE t.vi_name = ' . $vi_name;
        return $this->db->query($sql)->result_array();
    }

    public function findNewsByEnTags($en_name)
    {
        $sql = 'select p.* from news as p
                join news_tags as pt on pt.fk_news=p.id
                JOIN tags as t on t.id=pt.fk_tags
                WHERE t.en_name = ' . $en_name;
        return $this->db->query($sql)->result_array();
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