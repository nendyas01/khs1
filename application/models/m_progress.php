<?php

class m_progress extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select(
            '
                            
                            p.SPJ_NO,
                            p.ADDENDUM_NILAI,
                            p.ADDENDUM_TANGGAL_AKHIR,
                            

                            '

            /* (SELECT VENDOR_NAMA FROM tb_vendor WHERE VENDOR_ID = x.VENDOR_ID) AS nama_vendor,
                            (SELECT TAHUN FROM tb_vendor WHERE VENDOR_ID = x.VENDOR_ID) AS tahun,
                            (SELECT PAKET_DESKRIPSI FROM tb_paket WHERE PAKET_JENIS = x.PAKET_JENIS) AS jenis_pekerjaan,
                            (SELECT FIN_LIMIT FROM tb_fin_vendor WHERE VENDOR_ID = x.VENDOR_ID) AS pagu_fin,
                            (SELECT FIN_CURRENT FROM tb_fin_vendor WHERE VENDOR_ID = x.VENDOR_ID) AS sisa_fin  */

        );
        $this->db->from('tb_addendum p');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_keyword($keyword)
    {

        $kontrol_fin = $this->db->get('tb_addendum');
        //$data=$kontrol_fin->result(); 
        $this->db->select('*');
        $this->db->from('tb_addendum');
        $this->db->like('SPJ_NO', $keyword);
        $this->db->or_like('ADDENDUM_NILAI', $keyword);
        $this->db->or_like('ADDENDUM_TANGGAL_AKHIR', $keyword);
        return $this->db->get->result();
    }
}
