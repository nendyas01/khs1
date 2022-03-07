<?php

class m_pengajuan extends CI_Model
{

    function getdata()
    {
        $query = $this->db->query("SELECT DISTINCT * FROM tb_spj ORDER BY SPJ_NO ASC");
        return $query->result();
    }

    function serah_dok_add($var_spj_no, $var_tgl_serah, $var_jum_dokumen, $var_keterangan, $var_status)
    {
        $query = $this->db->query("INSERT INTO * FROM tb_dokumen ORDER BY SPJ_NO ASC");
        /* `tb_dokumen`(`spj_no`, `tgl_serah`, `jumlah_dok`, `keterangan`,`info_01`)
		VALUES ('$var_spj_no', '$var_tgl_serah', '$var_jum_dokumen', '$var_keterangan', '$var_status')");	 */

        return $query->result();
    }

    public function spj_no()
    {
        $this->db->select('SPJ_NO');
        $this->db->from('tb_dokumen');
        return $this->db->get()->result();
    }

    public function insert_pembayaran($data)
    {
        $this->db->insert('tb_dokumen', $data);
    }

    public function get_termin_by_no_spj($no_spj)
    {
        $this->db->select('*');
        $this->db->from('tb_dokumen');
        $this->db->where('spj_no', $no_spj);
        return $this->db->get()->row();
    }

    public function get_progress_by_no_spj($no_spj)
    {
        $this->db->select('*');
        $this->db->from('tb_dokumen');
        $this->db->where('spj_no', $no_spj);
        return $this->db->get()->row();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
