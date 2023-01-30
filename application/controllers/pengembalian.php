<?php

class Pengembalian extends CI_Controller
{
    public function index()
    {
        $isi['content'] = 'pengembalian/kembali_view';
        $isi['judul'] = 'Data Pengembalian Buku';
        $this->load->model('m_kembali');
        $isi['data'] = $this->m_kembali->getAllData();
        $this->load->view('dash_view', $isi);
    }
}
