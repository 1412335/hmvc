<?php
/**
 * Created by PhpStorm.
 * User: CPU01702-local
 * Date: 1/30/2018
 * Time: 5:20 PM
 */

class User extends MY_Model
{
    protected $table = 'user';
    protected $prefix_table = 'user_';
    protected $key = 'user_id';

    public function login($email, $password, $token = '')
    {
        $where = array(
            $this->prefix_table.'email' => $email,
        );
        if(($user = $this->get_one($where)) != null)
        {
            if($user[$this->prefix_table.'status'] == 2)
            {
                return $this->return_user($user);
            }
            elseif ($this->verify_password($password, $user[$this->prefix_table.'password']))
            {
                return $this->return_user($user);
            }
            return false;
        }
        return false;
    }

    public function login_social($user)
    {
        $where = array(
            $this->prefix_table.'email' => $user['email']
        );
        if($this->check_exist($where) != true)
        {
            $new_user = array(
                $this->prefix_table.'name' => $user['name'],
                $this->prefix_table.'email' => $user['email'],
                $this->prefix_table.'status' => 2,
            );
            return $this->insert($new_user);
        }
        return true;
    }

    public function register($name, $email, $password)
    {
        $where = array(
            $this->prefix_table.'email' => $email
        );
        if($this->check_exist($where) != true)
        {
            $new_user = array(
                $this->prefix_table.'name' => $name,
                $this->prefix_table.'email' => $email,
                $this->prefix_table.'password' => $this->hash_password($password),
                $this->prefix_table.'status' => 1,
            );
            return $this->insert($new_user);
        }
        return false;
    }

    private function hash_password($password)
    {
        return password_hash($password, 1);
    }

    private function verify_password($password, $hash)
    {
        return password_verify($password, $hash);
    }

    private function return_user($user)
    {
        $return = array();
        $return['name'] = $user[$this->prefix_table.'name'];
        $return['email'] = $user[$this->prefix_table.'email'];
        return $return;
    }

}