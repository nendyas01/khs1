<?php

class m_anggaran extends CI_Model{
    public function tampil_data()
    {
        $this->db->select('
                            a.SKKI_NO,
                           a.SKKI_NILAI,
                           a.SKKI_JENIS,
                           a.AREA_KODE,
                           a.AREA_NAMA
                           (SELECT AREA_NAMA FROM tb_area WHERE AREA_KODE = a.AREA_KODE) AS nama_area,
                           (select sum(b.SPJ_ADD_NILAI) from tb_spj b where b.skki_no = a.skki_no) as total_spj, 
                           (select count(b.spj_no) from tb_spj b where b.skki_no = a.skki_no ) as jml_spj,
                           (a.SKKI_NO - (select sum(b.SPJ_ADD_NILAI) from tb_spj b where b.skki_no = a.skki_no)) as sisa_skko 
                           FROM tb_skko_i a'
                        ); 
            $this->db->from('tb_skko_i a');
            $query=$this->db->get();
            $result=$query->result();
            return $result;

           /*  $this->db->like('SKKI_JENIS');
            $this->db->or_like('SKKI_NO');
            $this->db->or_like() */
            
            
        //return $this->db->get('tb_skko_i');

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