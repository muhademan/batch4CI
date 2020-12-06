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
        $ceknip = $this->Pegawai_m->cek_nip($nip);
        if ($ceknip > 0) {
            $this->session->set_flashdata('notifikasi', '<div class="alert alert-warning" role="alert">Nip sudah terdaftar</div>');
            redirect(base_url('index.php/pegawai/add_pegawai'));
        }

        $simpan = $this->Pegawai_m->save_pegawai($nip, $nama, $tempatlahir, $tanggallahir, $alamat);
        if ($simpan) {
            $this->session->set_flashdata('notifikasi', '<div class="alert alert-primary" role="alert">Data Berhasil Disimpan</div>');
            redirect(base_url());
        } else {
            $this->session->set_flashdata('notifikasi', 'Data gagal disimpan');
            redirect(base_url('index.php/pegawai/add_pegawai')); //index.php/controler/namamethod
        }
    }

    function hapus_pegawai($nip)
    {
        $hapus = $this->Pegawai_m->delete_pegawai($nip);
        if ($hapus) {
            $this->session->set_flashdata('notifikasi', '<div class="alert alert-primary" role="alert">Data Berhasil dihapus</div>');
            redirect(base_url());
        } else {
            $this->session->set_flashdata('notifikasi', 'Data gagal dihapus');
            redirect(base_url('index.php')); //index.php/controler/namamethod
        }
    }
}
