<?php

class m_skrd extends CI_Model
{
    function getdata()
    {
        $query = $this->db->query("SELECT DISTINCT * FROM tb_ijin ORDER BY surat_ijin_no ASC");
        return $query->result();
    }

    function skrd_add($var_surat_ijin_no, $var_tgl_terbit_skrd, $var_biaya_retribusi)
    {
        $sql = "UPDATE `tb_ijin` SET `tgl_terbit_skrd`='$var_tgl_terbit_skrd',`biaya_retribusi`='$var_biaya_retribusi' WHERE surat_ijin_no='$var_surat_ijin_no' ";
        //echo $sql;
        return $sql;
    }
}
