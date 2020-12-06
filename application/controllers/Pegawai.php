<?php
class Pegawai extends CI_Controller
{
    // include"koneksi.php";
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_m');
    }

    function Beranda()
    {
        $data = array(
            'DataPegawai' =>
            $this->Pegawai_m->get_data_pegawai(),
        );

        $this->load->view('template/header', $data);
        $this->load->view('tampil_data_pegawai');
        $this->load->view('template/footer');
    }

    function add_pegawai()
    {
        $this->load->view('template/header');
        $this->load->view('add_pegawai');
        $this->load->view('template/footer');
    }

    function edit_pegawai($nip)
    {
        $data = array(
            'tampilpegawai' => $this->Pegawai_m->get_data_edit($nip),
        );
        $this->load->view('template/header', $data);
        $this->load->view('edit_pegawai');
        $this->load->view('template/footer');
    }
}
