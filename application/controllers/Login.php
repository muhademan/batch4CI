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
        if (!empty($this->session->userdata('username'))) {
            redirect(base_url('index.php/pegawai/beranda'));
        }
        $this->load->view('template/header');
        $this->load->view('pages/login');
        $this->load->view('template/footer');
    }
    function loginproses()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $ceklogin = $this->Login_m->ceklogin($username, $password);
        if ($ceklogin->num_rows() > 0) {
            $resultuser = $ceklogin->row_array();
            // fungsi set session
            $data = array(
                'username' => $username,
                'level' => $resultuser['level']
            );
            $this->session->set_userdata($data);
            redirect(base_url('index.php/pegawai/beranda'));
        } else {
            $this->session->set_flashdata('notifikasi', '<div class="alert alert-danger" role="alert">Username dan Password Salah </div>');
            redirect(base_url('index.php/login/login_v'));
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
