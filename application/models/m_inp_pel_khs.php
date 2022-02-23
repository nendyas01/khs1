<?php

class m_inp_pel_khs extends CI_Model
{
    /* public function sselect_spj_no()
    {
        $query = $this->db->query("SELECT DISTINCT a.spj_no 
        FROM tb_spj a, tb_skko_i b 
        WHERE a.skki_no = b.skki_no and b.area_kode = a.area_kode ORDER BY a.spj_input_date ASC");
        return $query->result(); 
    } */

    /* public function select_spj_no()
    {
        $query = $this->db->query("SELECT DISTINCT a.spj_no FROM tb_spj a, tb_skko_i b WHERE a.skki_no = b.skki_no and b.area_kode = a.area_kode");
        return $query->result();
    }
    
    public function select_spj_no()
    {
        $query = $this->db->query("SELECT DISTINCT a.spj_no FROM tb_spj a, tb_skko_i b WHERE a.skki_no = b.skki_no and b.area_kode = a.area_kode");
        return $query->result();
    } */

    function getdata()
    {
        $query = $this->db->query("SELECT DISTINCT * FROM tb_spj ORDER BY SPJ_NO ASC");
        return $query->result();
    }

    function getarea()
    {
        $query = $this->db->query("SELECT  * FROM tb_area ORDER BY AREA_NAMA ASC");
        return $query->result();
    }
}
