<?php

class m_crud_kontrak extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('VENDOR_ID,
                        PAKET_JENIS,
                        PAGU_KONTRAK,
                        TERPAKAI,
                        RANKING,
                        NO_PJN,
                        TGL_PJN,
                        NO_RKS,
                        TGL_RKS,
                        NO_SPP,
                        TGL_SPP,
                        NO_PENAWARAN,
                        TGL_PENAWARAN,
                        sanksi_terakhir,
                        id_sanksi,
                        tgl_sanksi,
                        tgl_akhir,
                        punishment,
                        BLOCKED');
        $this->db->from('tb_skko_i ');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
