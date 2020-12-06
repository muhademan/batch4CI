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
        $simpan = $this->Pegawai_m->save_pegawai($nip, $nama, $tempatlahir, $tanggallahir, $alamat);
        if ($simpan) {
            $this->session->set_flashdata('');
            redirect(base_url());
        } else {
            redirect(base_url('index.php/pegawai/add_pegawai')); //index.php/controler/namamethod
        }
    }
}
