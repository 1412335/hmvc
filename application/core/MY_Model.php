<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 3:09 PM
 */

class MY_Model extends CI_Model
{
    protected $table = '';
    protected $prefix_table = '';
    protected $key = '';
    protected $select = '*';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_by_id($id)
    {
        $where = array(
            $this->key => $id
        );
        return $this->get_one($where);
    }

    public function get_one($where = '', $id = NULL)
    {
        if( ! empty($where) )
        {
            $this->db->where($where);
        }
        if($id != NULL)
        {
            $this->db->where($this->key.' != ', $id);
        }
        return $this->db->get($this->table)->row_array();
    }

    public function get_many($where = '', $limit = '')
    {
        if( ! empty($where) )
        {
            $this->db->where($where);
        }
        if( !empty($limit) )
        {
            $this->db->limit($limit);
        }
        return $this->db->get($this->table)->result_array();
    }

    public function get_join($join, $where = NULL, $limit = '')
    {
        if(is_array($join))
        {
            $this->db->join($join['table'], $join['con'], isset($join['type']) ? $join['type'] : '');
        }
        $this->db->select($this->select);
        if(is_array($where))
        {
            $this->db->where($where);
        }
        if( !empty($limit) )
        {
            $this->db->limit($limit);
        }
        return $this->db->get($this->table)->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        $where = array();
        if(is_array($this->key))
        {
            for ($i = 0; $i < count($this->key); $i++)
            {
                $where[$this->key[$i]] = $id[$i];
            }
        }
        else
        {
            $where = array($this->key => $id);
        }
        return $this->update_rule($where, $data);
    }

    public function update_rule($where, $data)
    {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $where = array();
        if(is_array($this->key))
        {
            for ($i = 0; $i < count($this->key); $i++)
            {
                $where[$this->key[$i]] = $id[$i];
            }
        }
        else
        {
            $where = array($this->key => $id);
        }
        return $this->delete_rule($where);
    }

    public function delete_rule($where)
    {
        return $this->db->update($this->table, array($this->prefix_table.'status' => 0), $where);
    }

    public function check_exist($where)
    {
        $this->db->where($where);
        if($this->db->get($this->table)->num_rows() > 0)
        {
            return TRUE;
        }
        return FALSE;
    }

    public function match($key, $term, $mode = 'BOOLEAN MODE', $except = '', $limit = 5)
    {
        $modes = array('BOOLEAN', 'NATURAL LANGUAGE');
        if( ! in_array($mode, $modes))
        {
            $mode = $modes[0];
        }
        $sql = "SELECT $this->select FROM $this->table WHERE MATCH($key) AGAINST(".$this->db->escape($term)." IN $mode MODE)";
        if( ! empty($except))
        {
            $sql .= " AND $this->key != ".$except;
        }
        if( ! empty($limit))
        {
            $sql .= " LIMIT $limit";
        }
        return $this->db->query($sql)->result_array();
    }

    public function count_all()
    {
        return $this->db->get($this->table)->num_rows();
    }

}