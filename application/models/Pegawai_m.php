<?php
class Pegawai_m extends CI_Model
{
    function get_data_pegawai()
    {
        $result = $this->db->get('tbpegawai')->result_array();
        return $result;
    }
}
