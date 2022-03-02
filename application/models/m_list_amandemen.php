<?php

class m_list_amandemen extends CI_Model
{


    public function tampil_data()
    {
        $this->db->select(
            '
        
        SPJ_NO, 
        SPJ_TANGGAL_AKHIR, 
        SPJ_NILAI,

        

        '
        );

        $this->db->from('tb_spj a');

        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}
