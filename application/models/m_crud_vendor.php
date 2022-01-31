<?php

class m_crud_vendor extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('VENDOR_ID,
                        VENDOR_NAMA,
                        TAHUN,
                        DIREKSI_VENDOR,
                        EMAIL,
                        TELEPON,
                        STATUS,
                        EMAIL_2,
                        JABATAN');
        $this->db->from('tb_vendor ');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
