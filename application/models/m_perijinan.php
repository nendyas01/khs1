<?php

class m_perijinan extends CI_Model
{
    public function survey()
    {
    }

    public function monitoring()
    {
    }

    public function pengajuan()
    {
    }

    public function retribusi()
    {
    }

    public function skrd()
    {
    }

    public function detail_data($surat_ijin_no = NULL)
    {
        $query = $this->db->get_where('tb_ijin', array('surat_ijin_no' => $surat_ijin_no))->row();
        return $query;
    }
}
