<?php

class m_perijinan_add extends CI_Model
{


    public function edit($table)
    {
        return $this->db->get_where($table);
    }

    public function update_data($data, $table)
    {
        $this->db->update($table, $data);
    }

    /* dari insert_pembayaran m_anggaran */
    public function tambah_perijinan($data)
    {
        $this->db->insert('tb_ijin', $data);
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_termin_by_no_spj($no_spj)
    {
        $this->db->select('*');
        $this->db->from('tb_termin');
        $this->db->where('spj_no', $no_spj);
        return $this->db->get()->row();
    }

    public function get_progress_by_no_spj($no_spj)
    {
        $this->db->select('*');
        $this->db->from('tb_progress');
        $this->db->where('spj_no', $no_spj);
        return $this->db->get()->row();
    }
}
