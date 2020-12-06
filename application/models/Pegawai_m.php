<?php
class Pegawai_m extends CI_Model
{
    function get_data_pegawai()
    {
        $result = $this->db->get('tbpegawai')->result_array();
        return $result;
    }
    function save_pegawai($nip, $nama, $tempatlahir, $tanggallahir, $alamat)
    {
        $data = array(
            'Nip' => $nip,
            'Nama' => $nama,
            'TempatLahir' => $tempatlahir,
            'TanggalLahir' => $tanggallahir,
            'Alamat' => $alamat
        );
        $result = $this->db->insert('tbpegawai', $data);
        return $result;
    }
}
