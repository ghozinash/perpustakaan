<?php

class M_dashboard extends CI_Model
{
    public function countAnggota()
    {
        return $this->db->count_all('anggota');
    }

    public function countBuku()
    {
        return $this->db->count_all('buku');
    }

    public function countPinjam()
    {
        return $this->db->count_all('peminjaman');
    }

    public function countKembali()
    {
        return $this->db->count_all('pengembalian');
    }

    public function get_all_buku()
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('rak', 'buku.id_rak = rak.id_rak');
        $this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori');
        return $this->db->get();
    }
}
