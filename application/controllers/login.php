<?php

class Login extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $this->load->view('login_view');
    }

    public function proses_login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->m_login->proses_login($user, $pass);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}