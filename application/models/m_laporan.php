<?php

class M_laporan extends CI_Model
{
    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('peminjaman', 'pengembalian.id_pinjam = peminjaman.id_pinjam');
        $this->db->join('anggota', 'pengembalian.id_anggota = anggota.id_anggota');
        $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
        $this->db->order_by('pengembalian.id_pinjam', 'ASC');
        return $this->db->get()->result();
    }

    public function filterData($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('peminjaman', 'pengembalian.id_pinjam = peminjaman.id_pinjam');
        $this->db->join('anggota', 'pengembalian.id_anggota = anggota.id_anggota');
        $this->db->join('buku', 'pengembalian.id_buku = buku.id_buku');
        $this->db->where('pengembalian.tgl_pinjam >=', $tgl_awal);
        $this->db->where('pengembalian.tgl_pinjam <=', $tgl_akhir);
        return $this->db->get()->result();
    }
}
