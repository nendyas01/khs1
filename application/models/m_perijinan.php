<?php

class m_perijinan extends CI_Model
{
    public function survey()
    {
    }

    function getdata()
    {
        $query = $this->db->query("SELECT DISTINCT * FROM tb_ijin ORDER BY surat_ijin_no ASC");
        return $query->result();
    }
}
