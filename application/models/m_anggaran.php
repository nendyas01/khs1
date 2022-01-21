<?php

class m_anggaran extends CI_Model{
    public function tampil_data()
    {
        /* $this->db->select('tb_area.AREA_NAMA,
                           tb_skko_i.SKKI_NO,
                           tb_skko_i.SKKI_NILAI,
                           tb_skko_i.SKKI_TERPAKAI,
                           tb_spj.SPJ_ADD_NILAI'

                        ); 
            $this->db->from('tb_area);
            $this->db->join('tb_skko_i*/
        return $this->db->get('tb_skko_i');
    }

     public function get_keyword($keyword){
        
      $anggaran = $this->db->get('tb_skko_i');
        //$data=$anggaran->result(); 
        $this->db->select('*');
        $this->db->from('tb_skko_i');
        $this->db->like('SKKI_JENIS',$keyword);
        $this->db->or_like('SKKI_NO',$keyword);
        $this->db->or_like('SKKI_NILAI',$keyword);
        return $this->db->get->result(); 
    }  
}
?>