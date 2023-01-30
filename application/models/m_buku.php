<?php

class M_buku extends CI_Model
{

    public function id_buku()
    {
        $this->db->select('RIGHT(buku.id_buku,3) as kode', FALSE);
        $this->db->order_by('id_buku', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('buku');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "BK" . $kodemax;
        return $kodejadi;
    }

    public function get_data_buku()
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('rak', 'buku.id_rak = rak.id_rak');
        $this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori');
        return $this->db->get();
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('rak', 'buku.id_rak = rak.id_rak');
        $this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori');
        $this->db->where('buku.id_buku', $id);
        return $this->db->get()->row_array();
    }

    public function update($id_buku, $data)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->update('buku', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }
}
