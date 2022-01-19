<?php

class m_wbs extends CI_Model{
    public function tampil_data()
    {
        $this->db->select('wbs.*, penugasan.nama_pekerjaan as penugasan_nama, penugasan.pic as penugasan_pic,
                            penugasan.tgl_target as penugasan_target');
        $this->db->from('wbs');
        $this->db->join('penugasan','penugasan.no_surat = wbs.no_surat');
        
        $query = $this->db->get();
        return $query;
    }

    public function input_data($data, $table)
    {
         $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('wbs', array('id' => $id))->row();
        return $query;
    }
}