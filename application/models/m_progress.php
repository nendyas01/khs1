<?php

class m_progress extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_progress');
    }
}
