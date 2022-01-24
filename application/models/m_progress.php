<?php

class m_progress extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select(
            '
            a.SPJ_NO, 
            g.ADDENDUM_NILAI,
            a.SPJ_TANGGAL_AKHIR, 
            f.AREA_NAMA, 
            b.VENDOR_NAMA, 
            c.PAKET_DESKRIPSI,  
            a.SPJ_DESKRIPSI 
        '
        );

        $this->db->from('tb_spj a');
        $this->db->join('tb_vendor b',  'a.VENDOR_ID=b.VENDOR_ID', 'left');
        $this->db->join('tb_paket c',  'a.PAKET_JENIS = c.PAKET_JENIS', 'left');
        $this->db->join('tb_skko_i e',  'a.SKKI_NO = e.SKKI_NO', 'left');
        $this->db->join('tb_area f',  'e.AREA_KODE = f.AREA_KODE', 'left');
        $this->db->join('tb_addendum g',  'a.SPJ_NO = g.SPJ_NO', 'left');
        $this->db->where('a.vendor_id != 106 and a.PAKET_JENIS != 0');


        /*$this->db->from('tb_addendum p'); */
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_keyword($keyword)
    {

        $progress = $this->db->get('tb_spj');
        $this->db->select('*');
        $this->db->from('tb_spj');
        $this->db->like('SPJ_NO', $keyword);
        return $this->db->get->result();
    }
}

/* a.SPJ_NO, 
g.ADDENDUM_NILAI,
a.SPJ_TANGGAL_AKHIR, 
f.AREA_NAMA, 
b.VENDOR_NAMA, 
c.PAKET_DESKRIPSI,  
a.SPJ_DESKRIPSI 
FROM tb_spj a left join tb_vendor b on a.VENDOR_ID = b.VENDOR_ID
LEFT JOIN tb_paket c on a.PAKET_JENIS = c.PAKET_JENIS
LEFT JOIN tb_skko_i e on a.SKKI_NO = e.SKKI_NO
LEFT JOIN tb_area f  ON e.AREA_KODE = f.AREA_KODE	
LEFT JOIN tb_addendum g ON a.SPJ_NO = g.SPJ_NO
where a.vendor_id != 106 and a.PAKET_JENIS != 0	 */
