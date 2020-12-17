<?php
class Mahasiswa_m extends CI_Model
{

    function getmahasiswa()
    {
        $this->db->limit(1);
        $result = $this->db->get('mahasiswa')->result_array();
        return $result;
    }
    function getcarimahasiswa($id)
    {
        $this->db->like('nim', $id);
        $this->db->or_like('nama', $id);
        $this->db->or_like('email', $id);
        $this->db->or_like('alamat', $id);
        $this->db->limit(3);
        $result = $this->db->get('mahasiswa')->result_array();
        return $result;
    }
}
