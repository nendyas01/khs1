<?php 
class m_mapping_vendor extends CI_Model{
    
    public function tambah_aksi()

    {
        
} 

public function getarea()
    {
        $query = $this->db->query("SELECT * FROM tb_area ORDER BY AREA_NAMA ASC");
        return $query->result();
    }


public function getpaket()
    {
        $this->db->select(
            '
            PAKET_JENIS 
            '
        );
        $this->db->from('tb_paket');
        $this->db->where('STATUS=1');
    }
}
