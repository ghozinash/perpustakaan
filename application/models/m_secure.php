<?php

class M_secure extends CI_Model {

    public function getSecure()
    {
        $username = $this->session->userdata('username');
        if(empty($username)){
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}