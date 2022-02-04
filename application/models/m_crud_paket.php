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

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function detail_crud_paket($PAKET_JENIS = NULL)
    {
        $query = $this->db->get_where('tb_user', array('PAKET_JENIS' => $PAKET_JENIS))->row();
        return $query;
    }
}
