<?php

class m_inp_progres_kerja extends CI_Model
{
    function search_spj($title)
    {
        $this->db->like('SPJ_NO', $title);
        $this->db->order_by('SPJ_NO', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_spj')->result();
    }

    public function insert_pembayaran($data)
    {
        $this->db->insert('tb_progress', $data);
    }
}
