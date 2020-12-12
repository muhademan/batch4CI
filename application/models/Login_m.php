<?php
class Login_m extends CI_Model
{
    function ceklogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user')->num_rows();
        return $result;
    }
}
