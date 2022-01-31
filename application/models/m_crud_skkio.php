<?php

class m_crud_skkio extends CI_Model{
    public function tampil_data()
    {
        $this->db->select('a.SKKI_JENIS,
                        a.SKKI_NO,
                        a.AREA_KODE,
                        a.SKKI_NILAI,
                        a.SKKI_TERPAKAI,
                        a.SKKI_TANGGAL,
                        (SELECT AREA_NAMA FROM tb_area WHERE AREA_KODE = a.AREA_KODE) AS nama_area, ');
        $this->db->from('tb_skko_i a');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function list_area(){
        $this->db->select('AREA_NAMA');
        $this->db->from('tb_area');
        $query = $this->db->get();
        $result = $query->result();
        return $result;

    }
    public function input_data($data, $table)
    {
         $this->db->insert($table, $data);
    }
    
    
}