<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 3:39 PM
 */

class Category extends MY_Model
{
    protected $table = 'category';
    protected $prefix_table = 'cat_';
    protected $key = 'cat_id';

    public function get_list_articles($cat_id, $status = '', $offset = 0, $limit = 4)
    {
        $this->db->join('article', 'article_cat_id = cat_id');
        $this->db->where($this->key, $cat_id);
        if($status != NULL)
        {
            $this->db->where('article_status', $status);
        }
        return $this->db->get($this->table, $limit, $offset)->result_array();
    }

    public function get_list_cats($offset = 0, $limit = 0, $status = '')
    {
        $this->db->select('cat.cat_id, cat.cat_name, cat.cat_des, cat.cat_status, cat.cat_created_date, cat.cat_modified_date, cat.cat_parent_id, cat1.cat_name as cat_parent_name');
        $this->db->join($this->table .' AS cat1', 'cat1.cat_id = cat.cat_parent_id', 'LEFT');
        if($status != NULL)
        {
            $this->db->where('cat.'.$this->prefix_table.'status', $status);
        }
        return $this->db->get($this->table . ' AS cat', $limit, $offset)->result_array();
    }

}