<?php

class m_kontrol_fin extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select(
            '
                            
                            x.ZONE,
                            x.VENDOR_ID,
                            (SELECT VENDOR_NAMA FROM tb_vendor WHERE VENDOR_ID = x.VENDOR_ID) AS nama_vendor,
                            (SELECT TAHUN FROM tb_vendor WHERE VENDOR_ID = x.VENDOR_ID) AS tahun,
                            (SELECT PAKET_DESKRIPSI FROM tb_paket WHERE PAKET_JENIS = x.PAKET_JENIS) AS jenis_pekerjaan,
                            (SELECT FIN_LIMIT FROM tb_fin_vendor WHERE VENDOR_ID = x.VENDOR_ID) AS pagu_fin,
                            (SELECT FIN_CURRENT FROM tb_fin_vendor WHERE VENDOR_ID = x.VENDOR_ID) AS sisa_fin
                            '



        );
        $this->db->from('tb_mapping_vendor x');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_keyword($keyword)
    {

        $kontrol_fin = $this->db->get('tb_mapping_vendor');
        //$data=$kontrol_fin->result(); 
        $this->db->select('*');
        $this->db->from('tb_mapping_vendor');
        $this->db->like('ZONE', $keyword);
        return $this->db->get->result();
    }
}
