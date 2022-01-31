<?php

class m_crud_paket extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('PAKET_JENIS,
                        PAKET_DESKRIPSI,
                        SATUAN,
                        PAKET_DESKRIPSI2,
                        STATUS');
        $this->db->from('tb_paket ');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $edit)
    {
        return $this->db->get_where($edit, $where);
    }

    function deleteDataProduk($PAKET_JENIS)
    {
        $this->db->where('PAKET_JENIS', $PAKET_JENIS);
        $this->db->delete('data_produk');
    }
}
