<?php

class m_anggaran extends CI_Model{
    public function tampil_data()
    {
     
        return $this->db->get('tb_skko_i');
    }

    public function get_keyword($keyword){
        
      /*   $anggaran = $this->db->get('tb_skko_i');
        $data=$anggaran->result(); */
        $this->db->select('*');
        $this->db->from('tb_skko_i');
        $this->db->like('SKKI_JENIS',$keyword);
        $this->db->or_like('SKKI_NO',$keyword);
        $this->db->or_like('SKKI_NILAI',$keyword);
        return $this->db->get->result(); 
    }
}
?>