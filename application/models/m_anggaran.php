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
        a.SKKI_TERPAKAI, 
        a.AREA_KODE, 
          (SELECT AREA_NAMA FROM tb_area WHERE AREA_KODE = a.AREA_KODE) AS nama_area, 
          (select count(b.spj_no) from tb_spj b where b.skki_no = a.skki_no ) as jml_spj, 
          (select sum(b.SPJ_ADD_NILAI) from tb_spj b where b.skki_no = a.skki_no) as total_spj,
          (select sum(b.pembayaran_nominal) from tb_pembayaran b, tb_spj c where b.spj_no = c.spj_no and c.skki_no = a.skki_no) as total_bayar,'


    );
    $this->db->from('tb_skko_i a');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_keyword($keyword)
  {

    $anggaran =
      //$data=$anggaran->result(); 
      $this->db->select('a.SKKI_NO,
        a.SKKI_NILAI,
        a.SKKI_JENIS, 
        a.SKKI_NILAI, 
        a.SKKI_TERPAKAI, 
        a.AREA_KODE,
        (a.SKKI_NILAI - SKKI_TERPAKAI) as sisa_skki,
          (SELECT AREA_NAMA FROM tb_area WHERE AREA_KODE = a.AREA_KODE) AS nama_area, 
          (select count(b.spj_no) from tb_spj b where b.skki_no = a.skki_no ) as jml_spj, 
          (select sum(b.SPJ_ADD_NILAI) from tb_spj b where b.skki_no = a.skki_no) as total_spj,
          (select sum(b.pembayaran_nominal) from tb_pembayaran b, tb_spj c where b.spj_no = c.spj_no and c.skki_no = a.skki_no) as total_bayar');
    $this->db->from('tb_skko_i a');
    $this->db->join('tb_area', 'tb_area.AREA_KODE = a.AREA_KODE');
    $this->db->like('SKKI_JENIS', $keyword);
    $this->db->or_like('SKKI_NO', $keyword);
    $this->db->or_like('SKKI_NILAI', $keyword);
    $this->db->or_like('(a.SKKI_NILAI - SKKI_TERPAKAI)', $keyword);
    $this->db->or_like('tb_area.AREA_NAMA', $keyword);
    return $this->db->get()->result();
  }
}
?>

<!-- (a.SKKI_NO - (select sum(b.SPJ_ADD_NILAI) from tb_spj b where b.skki_no = a.skki_no)) as sisa_skko' -->