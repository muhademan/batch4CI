<?php

class Proses_pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_m');
    }

    function simpan_pegawai()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $tanggallahir = $this->input->post('tanggallahir');
        $tempatlahir = $this->input->post('tempatlahir');
        $alamat = $this->input->post('alamat');
    }
}
