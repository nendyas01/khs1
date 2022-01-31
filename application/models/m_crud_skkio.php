<?php

class m_crud_skkio extends CI_Model{
    public function tampil_data()
    {
        $this->db->select('SKKI_JENIS,
                        SKKI_NO,
                        AREA_KODE,
                        SKKI_NILAI,
                        SKKI_TERPAKAI,
                        SKKI_TANGGAL');
        $this->db->from('tb_skko_i ');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function input_data($data, $table)
    {
         $this->db->insert($table, $data);
    }
    
    
}