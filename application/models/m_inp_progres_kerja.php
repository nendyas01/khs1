<?php

class m_inp_progres_kerja extends CI_Model
{
    public function select_spj_no()
    {
        $query = $this->db->query("SELECT DISTINCT a.spj_no FROM tb_spj a, tb_skko_i b WHERE a.skki_no = b.skki_no and b.area_kode = a.area_kode ORDER BY a.spj_no ASC");
        return $query->result();
    }
}
