<?php
class M_user extends CI_Model
{
    function create_user($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();;
    }
    function login($username, $password, $user_type)
    {
        $match = array(
            'username'=>$username,
            'password' => sha1($password),
            'user_type' => $user_type
        );
        
        $this->db->select()->from('users')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }
    function get_emails()
    {
        $this->db->select('email');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result_array();
    }
}
