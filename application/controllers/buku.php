<?php

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_buku');
    }

    public function index()
    {
        $isi['content'] = 'buku/buku_view';
        $isi['judul'] = 'Daftar Buku-Buku';
        $isi['data'] = $this->m_buku->get_data_buku();
        $this->load->view('dash_view', $isi);
    }

    public function tambah_buku()
    {
        $isi['content'] = 'buku/form_buku';
        $isi['judul'] = 'Form Data Buku';
        $isi['id_buku'] = $this->m_buku->id_buku();
        $isi['rak'] = $this->db->get('rak')->result();
        $isi['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('dash_view', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_buku' => $this->input->post('id_buku'),
            'judul_buku' => $this->input->post('judul_buku'),
            'id_rak' => $this->input->post('id_rak'),
            'id_kategori' => $this->input->post('id_kategori'),
            'thn_terbit' => $this->input->post('thn_terbit'),
            'jumlah' => $this->input->post('jumlah')
        );
        $query = $this->db->insert('buku', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Buku berhasil ditambahkan');
            redirect('buku');
        }
    }

    public function edit($id)
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'buku/edit_buku';
        $isi['judul'] = 'Form Edit Buku';
        $isi['rak'] = $this->db->get('rak')->result();
        $isi['kategori'] = $this->db->get('kategori')->result();
        $isi['data'] = $this->m_buku->edit($id);
        $this->load->view('dash_view', $isi);
    }

    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $data = array(
            'id_buku' => $this->input->post('id_buku'),
            'judul_buku' => $this->input->post('judul_buku'),
            'id_rak' => $this->input->post('id_rak'),
            'id_kategori' => $this->input->post('id_kategori'),
            'thn_terbit' => $this->input->post('thn_terbit'),
            'jumlah' => $this->input->post('jumlah')
        );
        $query = $this->m_buku->update($id_buku, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data buku berhasil diupdate');
            redirect('buku');
        }
    }

    public function delete($id)
    {
        $query = $this->m_buku->delete($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Buku berhasil dihapus');
            redirect('buku');
        }
    }
}
