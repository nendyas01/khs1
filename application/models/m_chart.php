<?php
Class M_chart extends CI_Model
 { 
function jml_total_spj(){
    $this->db->select('a.AREA_KODE, COUNT(DISTINCT SPJ_NO) AS total');
    $this->db->from('tb_spj a');
    $this->db->group_by('a.AREA_KODE');
    $total_spj = $this->db->get();
    $result = $total_spj->result();
    return $result;
}

function getarea(){
    $query = $this->db->query("SELECT * FROM tb_area ORDER BY AREA_NAMA ASC");
        return $query->result();
}

function tahun(){
    $this->db->select('YEAR(SPJ_TANGGAL_MULAI) as tahun');
    $this->db->from('tb_spj');
    $this->db->group_by('tahun');
    return $this->db->get()->result(); 
}

function getpaket(){
    $query = $this->db->query("SELECT * FROM tb_paket ORDER BY PAKET_NAMA ASC");
    return $query->result();
}
// function jml(){
//     $this->db->select('AREA_KODE, COUNT(SPJ_NO) as total_spj');
//     $this->db->from('tb_spj');
//     $this->db->group_by('AREA_KODE');
//     $this->db->where('SPJ_TANGGAL_AKHIR');
// }


function jumlah_gangguan($area_kode, $tahun){
    $this->db->select('MONTH(SPJ_TANGGAL_MULAI) as bulan, YEAR(SPJ_TANGGAL_MULAI) as tahun');
    $this->db->select("count(IF(gangguan = 0, 1, NULL)) as total_gangguan"); 
    $this->db->select("count(IF(gangguan = 1, 1, NULL)) as total_tidak_gangguan"); 
    $this->db->from('tb_spj');
    $this->db->where('YEAR(SPJ_TANGGAL_MULAI)', $tahun);

    if (!empty($area_kode)) {
        $this->db->where('AREA_KODE', $area_kode);
    }

    if (!empty($tahun)) {
        $this->db->where('YEAR(SPJ_TANGGAL_MULAI)', $tahun);
    }

    $this->db->group_by('bulan');
    return $this->db->get()->result(); 
}

function jml_paket($area_kode, $tahun){

    $hasil = $this->db->query("SELECT MONTH (s.SPJ_TANGGAL_MULAI) as bulan, YEAR (s.SPJ_TANGGAL_MULAI) as tahun, 
    s.SPJ_NILAI, count(s.SPJ_NO) as total_spj, p.PAKET_DESKRIPSI FROM
    tb_spj s join tb_paket p on p.PAKET_JENIS=s.PAKET_JENIS where p.STATUS=1 group by p.PAKET_JENIS, bulan");
    

    if (!empty($area_kode)) {
        $this->db->where('AREA_KODE', $area_kode);
    }

    if (!empty($tahun)) {
        $this->db->where('YEAR(s.SPJ_TANGGAL_MULAI)', $tahun);
    }
    return $hasil->result();
    // $this->db->group_by('bulan');
    // return $this->db->get()->result(); 

}

function jml_pagu_spj(){
    $this->db->select('YEAR(a.SPJ_TANGGAL_MULAI) AS tahun , c.VENDOR_NAMA, b.PAKET_JENIS,
    SUM(a.SPJ_NILAI) AS total_spj_nilai,SUM(b.PAGU_KONTRAK) AS total_pagu');
    $this->db->from('tb_spj a');
    $this->db->join('tb_pagu_kontrak b', 'b.PAKET_JENIS=a.PAKET_JENIS');
    $this->db->join('tb_vendor c', 'c.VENDOR_ID=a.VENDOR_ID');

    if (!empty($paket_jenis)) {
        $this->db->where('PAKET_JENIS', $paket_jenis);
    }

    if (!empty($tahun)) {
        $this->db->where('YEAR(a.SPJ_TANGGAL_MULAI)', $tahun);
    }
    $this->db->group_by('c.VENDOR_NAMA', 'b.PAKET_JENIS');
    return $this->db->get()->result(); 

}

}
?>
