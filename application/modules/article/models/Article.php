<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 2:44 PM
 */

class Article extends MY_Model
{

    protected $table = 'article';
    protected $prefix_table = 'article_';
    protected $key = 'article_id';

    public function get_list_articles()
    {
        return $this->get_join(array(
            'table'	=> 'category',
            'con'	=> 'cat_id = article_cat_id',
        ));
    }

    public function get_by_id($id)
    {
        $result = $this->get_join(array(
            'table'	=> 'category',
            'con'	=> 'cat_id = article_cat_id',
        ), array($this->key => $id));
        if(empty($result))
        {
            return NULL;
        }
        return $result[0];
    }

    private function _get_all_combinations($array, $str = "", &$collect = array())
    {
        if($str != "")
        {
            $collect[] = $str;
        }
        foreach ($array as $key => $item)
        {
            $tmp_array = $array;
            $el = array_splice($tmp_array, $key, 1);
            if(count($tmp_array) > 0)
            {
                $this->_get_all_combinations($tmp_array, $str . '%' . $el[0] . '%', $collect);
            }
            else
            {
                $collect[] = $str . '%' . $el[0] . '%';
            }
        }
    }

    public function get_related_to($article_id, $limit = 5, $term = 'category')
    {
        $article = $this->db->get_where($this->table, array($this->key => $article_id))->row_array();
        if($article)
        {
            if($term == 'category')
            {
                $this->db->where('article_cat_id', $article['article_cat_id']);
                $this->db->where('article_id != ', $article_id);
                return $this->db->get($this->table, $limit)->result_array();
            }
            elseif ($term == 'tags')
            {
                $return = array();
                $this->_get_all_combinations(explode(',', $article['article_tags']), "", $tags);
                usort($tags, function ($a, $b) {
                    return strlen($a) >= strlen($b);
                });
                while (count($tags) > 0 && count($return) < $limit)
                {
                    $this->db->where('article_id != ', $article_id);
                    $this->db->where('article_tags LIKE ', array_pop($tags));
                    foreach ($this->db->get($this->table)->result_array() as $item)
                    {
                        if(count($return) < $limit)
                        {
                            $return[] = $item;
                        }
                        else
                        {
                            break;
                        }
                    }
                }
                return $return;
            }
        }
        return NULL;
    }

    public function get_related_to_2($article_id, $limit = 5, $term = 'category')
    {
        $article = $this->db->get_where($this->table, array($this->key => $article_id))->row_array();
        if($article)
        {
            if($term == 'category')
            {
                return $this->get_related_to($article_id, $limit);
            }
            elseif ($term == 'tags')
            {
                $key = $this->prefix_table.'tags';
                $terms = explode(",", $article[$key]);
                $terms = implode(" ", $terms);
                return $this->match($key, $terms, '', $article_id);
            }
        }
        return NULL;
    }

}