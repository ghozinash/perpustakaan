<?php

class M_kategori extends CI_Model
{
    public function id_kategori()
    {
        $this->db->select('RIGHT(kategori.id_kategori,3) as kode', FALSE);
        $this->db->order_by('id_kategori', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('kategori');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "K" . $kodemax;
        return $kodejadi;
    }

    public function edit($id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->get('kategori')->row_array();
    }

    public function update($id_kategori, $data)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }
}
