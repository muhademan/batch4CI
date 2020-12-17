<?php
class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_m');
    }

    function index()
    {
        $data = array(
            'getmahasiswa' => $this->Mahasiswa_m->getmahasiswa(),
        );
        $this->load->view('mahasiswa_v', $data);
    }

    function getmahasiswa($id)
    {
        $data = array(
            'getmahasiswa' => $this->Mahasiswa_m->getcarimahasiswa($id),
        );
        $this->load->view('mahasiswacari_v', $data);
    }
}
