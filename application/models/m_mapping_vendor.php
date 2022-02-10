<?php
class m_mapping_vendor extends CI_Model
{

    public function getpaket()
    {
        $this->db->select('a.PAKET_JENIS, 
        b.VENDOR_ID, c.AREA_KODE');
        $this->db->from('tb_paket a');
        $this->db->from('tb_pagu_kontrak b');
        $this->db->from('tb_area c');
        $this->db->where('a.status = 1');

        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}
