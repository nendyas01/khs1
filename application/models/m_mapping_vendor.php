<?php 
class m_mapping_vendor extends CI_Model{
    
    public function tambah_aksi()

    {
        $this->db->select('PAKET_JENIS, 
        VENDOR_ID, AREA_KODE, MAPPING_TAHUN, ZONE');
        $this->db->from('tb_mapping_vendor');
        $query = $this->db->get();
        $result = $query->result();
    
    
} 

public function getdata()
    {
        $query = $this->db->query("SELECT * FROM tb_area ORDER BY AREA_NAMA ASC");
        return $query->result();
    }
}
?>
