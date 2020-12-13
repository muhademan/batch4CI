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
    function delete_pegawai($nip)
    {
        $this->db->where('Nip', $nip);
        $result = $this->db->delete('tbpegawai');
        return $result;
    }
    function get_data_edit($nip)
    {
        $this->db->where('Nip', $nip);
        $result = $this->db->get('tbpegawai')->row_array(); //mengambil hanya satu baris pake row_array()
        return $result;
    }
    function cek_nip($nip)
    {
        $this->db->where('Nip', $nip);
        $result = $this->db->get('tbpegawai')->num_rows(); //mengambil hanya satu baris pake row_array()
        return $result;
    }

    function update_pegawai($nip, $nama, $tempatlahir, $tanggallahir, $alamat)
    {
        $data = array(
            'Nama' => $nama,
            'TempatLahir' => $tempatlahir,
            'TanggalLahir' => $tanggallahir,
            'Alamat' => $alamat
        );
        $this->db->where('Nip', $nip);
        $result = $this->db->update('tbpegawai', $data);
        $result = $this->db->get('tbpegawai')->num_rows(); //mengambil hanya satu baris pake row_array()
        return $result;
    }
}
