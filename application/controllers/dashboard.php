<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }

    public function index()
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'home_view';
        $isi['judul'] = 'Dashboard';
        $isi['anggota'] = $this->m_dashboard->countAnggota();
        $isi['buku'] = $this->m_dashboard->countBuku();
        $isi['pinjam'] = $this->db->query("SELECT * FROM peminjaman WHERE status = 'Dipinjam'")->num_rows();
        $isi['kembali'] = $this->m_dashboard->countKembali();
        $isi['all_buku'] = $this->m_dashboard->get_all_buku();
        $this->load->view('dash_view', $isi);
    }
}
