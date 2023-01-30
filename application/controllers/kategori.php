<?php

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
    }

    public function index()
    {
        $isi['content'] = 'kategori/kat_view';
        $isi['judul'] = 'Daftar Kategori Buku';
        $isi['data'] = $this->db->get('kategori')->result();
        $this->load->view('dash_view', $isi);
    }

    public function tambah_kategori()
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'kategori/form_kategori';
        $isi['judul'] = 'Tambah Kategori';
        $isi['id_kategori'] = $this->m_kategori->id_kategori();
        $this->load->view('dash_view', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_kategori' => $this->input->post('id_kategori'),
            'nm_kategori' => $this->input->post('nm_kategori')
        );
        $query = $this->db->insert('kategori', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Kategori berhasil ditambahkan');
            redirect('kategori');
        }
    }

    public function edit($id)
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'kategori/edit_kategori';
        $isi['judul'] = 'Form Edit Kategori';
        $isi['data'] = $this->m_kategori->edit($id);
        $this->load->view('dash_view', $isi);
    }

    public function update()
    {
        $id_kategori = $this->input->post('id_kategori');
        $data = array(
            'id_kategori' => $this->input->post('id_kategori'),
            'nm_kategori' => $this->input->post('nm_kategori')
        );
        $query = $this->m_kategori->update($id_kategori, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Kategori berhasil diupdate');
            redirect('kategori');
        }
    }

    public function delete($id)
    {
        $query = $this->m_kategori->delete($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Kategori berhasil dihapus');
            redirect('kategori');
        }
    }
}
