<?php

class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pinjam');
    }

    public function index()
    {
        $isi['content'] = 'peminjaman/pinjam_view';
        $isi['judul'] = 'Data Peminjaman Buku';
        $isi['data'] = $this->m_pinjam->get_data_peminjaman();
        $this->load->view('dash_view', $isi);
    }

    public function tambah_pinjam()
    {
        $isi['content'] = 'peminjaman/form_pinjam';
        $isi['judul'] = 'Form Peminjaman Buku';
        $isi['id_pinjam'] = $this->m_pinjam->id_pinjam();
        $isi['peminjam'] = $this->db->get('anggota')->result();
        $isi['buku'] = $this->db->get('buku')->result();
        $this->load->view('dash_view', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_pinjam' => $this->input->post('id_pinjam'),
            'id_anggota' => $this->input->post('id_anggota'),
            'id_buku' => $this->input->post('id_buku'),
            'tgl_pinjam' => $this->input->post('tgl_pinjam'),
            'tgl_kembali' => $this->input->post('tgl_kembali'),
            'status' => 'Dipinjam'
        );
        $query = $this->db->insert('peminjaman', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Transaksi berhasil disimpan');
            redirect('peminjaman');
        }
    }

    public function jumlah_buku()
    {
        $id = $this->input->post('id');
        $data = $this->m_pinjam->jumlah_buku($id);
        echo json_encode($data);
    }

    public function kembalikan($id)
    {
        $data = $this->m_pinjam->getDataById_pinjam($id);
        $kembalikan = array(
            'id_pinjam' => $data['id_pinjam'],
            'id_anggota' => $data['id_anggota'],
            'id_buku' => $data['id_buku'],
            'tgl_pinjam' => $data['tgl_pinjam'],
            'tgl_kembali' => $data['tgl_kembali'],
            'tgl_kembalikan' => date('Y-m-d')
        );
        $query = [
            $this->db->insert('pengembalian', $kembalikan),
            $this->db->set('status', 'Dikembalikan'),
            $this->db->where('id_pinjam', $id),
            $this->db->update('peminjaman'),
        ];
        if ($query = true) {
            $this->session->set_flashdata('info', 'Buku berhasil dikembalikan');
            redirect('peminjaman');
        }
    }

    public function cancel($id)
    {
        $query = $this->m_pinjam->cancel($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Peminjaman berhasil dibatalkan');
            redirect('peminjaman');
        }
    }
}
