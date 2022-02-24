<?php

class m_inp_spj_fin extends CI_Model
{

    public function getdata()
    {
        $query = $this->db->query("SELECT skki_no FROM tb_skko_i WHERE area_kode  AND flag=0");
        return $query->result();
    }

    public function getpaket()
    {
        $query = $this->db->query("SELECT PAKET_JENIS, PAKET_DESKRIPSI FROM tb_paket  WHERE STATUS=1");
        return $query->result();
    }
}
