<?php

class m_inp_addendum extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('a.SPJ_NO,
                        a.ADDENDUM_NO,
                        a.ADDENDUM_NILAI,
                        a.ADDENDUM_TANGGAL_AKHIR,
                        a.TGL_ADDENDUM,
                        a.ADDENDUM_DESKRIPSI,
                        a.ADDENDUM_INPUT_DATE,
                        a.ADDENDUM_INPUT_USER
                        ');
        $this->db->from('tb_addendum a');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM tb_addendum ORDER BY SPJ_NO ASC");
        return $query->result();
    }


    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detail_data($SPJ_NO = NULL)
    {

        $query = $this->db->get_where('tb_addendum', array('SPJ_NO' => $SPJ_NO))->row();
        return $query;
    }
}
