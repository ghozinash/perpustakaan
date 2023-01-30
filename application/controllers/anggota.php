<?php

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_anggota');
    }

    public function index()
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'anggota/anggota_view';
        $isi['judul'] = 'Data Anggota';
        $isi['data'] = $this->db->get('anggota')->result();
        $this->load->view('dash_view', $isi);
    }

    public function tambah_anggota()
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'anggota/form_anggota';
        $isi['judul'] = 'Tambah Anggota';
        $isi['id_anggota'] = $this->m_anggota->id_anggota();
        $this->load->view('dash_view', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'j_kel' => $this->input->post('j_kel'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
        $query = $this->db->insert('anggota', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil ditambahkan');
            redirect('anggota');
        }
    }

    public function edit($id)
    {
        $this->m_secure->getSecure();
        $isi['content'] = 'anggota/edit_anggota';
        $isi['judul'] = 'Form Edit Anggota';
        $isi['data'] = $this->m_anggota->edit($id);
        $this->load->view('dash_view', $isi);
    }

    public function update()
    {
        $id_anggota = $this->input->post('id_anggota');
        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'j_kel' => $this->input->post('j_kel'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
        $query = $this->m_anggota->update($id_anggota, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data anggota berhasil diupdate');
            redirect('anggota');
        }
    }

    public function delete($id)
    {
        $query = $this->m_anggota->delete($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data anggota berhasil dihapus');
            redirect('anggota');
        }
    }
}
