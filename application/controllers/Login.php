<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_m');
    }
    function index()
    {
        $this->load->view('template/header');
        $this->load->view('pages/home');
        $this->load->view('template/footer');
    }
    function login_v()
    {
        $this->load->view('template/header');
        $this->load->view('pages/login');
        $this->load->view('template/footer');
    }
    function loginproses()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $ceklogin = $this->Login_m->ceklogin($username, $password);
        if ($ceklogin > 0) {
            echo "Login Berhasil";
        } else {
            echo "Username dan password salah";
        }
    }
}
