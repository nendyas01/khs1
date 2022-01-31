<?php

class m_crud_area extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('AREA_KODE,
                        AREA_NAMA,
                        AREA_ZONE,');
        $this->db->from('tb_area ');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
