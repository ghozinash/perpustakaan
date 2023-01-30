<?php

class Rak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rak');
    }

    public function index()
    {
        $isi['content'] = 'rak/rak_view';
        $isi['judul'] = 'Daftar Rak Buku';
        $isi['data'] = $this->db->get('rak')->result();
        $this->load->view('dash_view', $isi);
    }

    public function tambah_rak()
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'rak/form_rak';
        $isi['judul'] = 'Tambah Rak';
        $isi['id_rak'] = $this->m_rak->id_rak();
        $this->load->view('dash_view', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_rak' => $this->input->post('id_rak'),
            'nm_rak' => $this->input->post('nm_rak')
        );
        $query = $this->db->insert('rak', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Rak berhasil ditambahkan');
            redirect('rak');
        }
    }

    public function edit($id)
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'rak/edit_rak';
        $isi['judul'] = 'Form Edit Rak';
        $isi['data'] = $this->m_rak->edit($id);
        $this->load->view('dash_view', $isi);
    }

    public function update()
    {
        $id_rak = $this->input->post('id_rak');
        $data = array(
            'id_rak' => $this->input->post('id_rak'),
            'nm_rak' => $this->input->post('nm_rak')
        );
        $query = $this->m_rak->update($id_rak, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Rak berhasil diupdate');
            redirect('rak');
        }
    }

    public function delete($id)
    {
        $query = $this->m_rak->delete($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Rak berhasil dihapus');
            redirect('rak');
        }
    }
}
