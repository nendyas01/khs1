<?php

class m_anggaran extends CI_Model
{
  public function tampil_data()
  {
    $this->db->select(
      '
        a.SKKI_NO,
        a.SKKI_NILAI,
        a.SKKI_JENIS, 
        a.SKKI_NILAI, 
        a.SKKI_ID,
        a.SKKI_TERPAKAI, 
        a.AREA_KODE, 
          (SELECT AREA_NAMA FROM tb_area WHERE AREA_KODE = a.AREA_KODE) AS nama_area, 
          (select count(b.spj_no) from tb_spj b where b.skki_id = a.skki_id ) as jml_spj, 
          (select sum(b.SPJ_ADD_NILAI) from tb_spj b where b.skki_id = a.skki_id) as total_spj,
          (select sum(b.pembayaran_nominal) from tb_pembayaran b, tb_spj c where b.spj_no = c.spj_no and c.skki_id = a.skki_id) as total_bayar,'
    );
    $this->db->from('tb_skko_i a');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function v_input_tagihan()
    {
        $query = $this->db->query("SELECT * FROM tb_SPJ ORDER BY SPJ_NO ASC");
        return $query->result();
    }


  public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

  
}
?>



