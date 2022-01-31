<?php

class m_crud_user extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('USERNAME,
                        role_id,
                        AREA_KODE');
        $this->db->from('tb_user ');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
