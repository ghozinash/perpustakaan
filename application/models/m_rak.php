<?php

class M_rak extends CI_Model
{
    public function id_rak()
    {
        $this->db->select('RIGHT(rak.id_rak,3) as kode', FALSE);
        $this->db->order_by('id_rak', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('rak');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "R" . $kodemax;
        return $kodejadi;
    }

    public function edit($id)
    {
        $this->db->where('id_rak', $id);
        return $this->db->get('rak')->row_array();
    }

    public function update($id_rak, $data)
    {
        $this->db->where('id_rak', $id_rak);
        $this->db->update('rak', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_rak', $id);
        $this->db->delete('rak');
    }
}
