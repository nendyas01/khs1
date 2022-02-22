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

// function jml(){
//     $this->db->select('AREA_KODE, COUNT(SPJ_NO) as total_spj');
//     $this->db->from('tb_spj');
//     $this->db->group_by('AREA_KODE');
//     $this->db->where('SPJ_TANGGAL_AKHIR');
// }

// function getChart()
// {
    
// }

function jumlah_gangguan($area_kode, $tahun){
    $this->db->select('MONTH(SPJ_TANGGAL_MULAI) as bulan, YEAR(SPJ_TANGGAL_MULAI) as tahun');
    $this->db->select("count(IF(gangguan = 0, 1, NULL)) as total_gangguan"); 
    $this->db->select("count(IF(gangguan = 1, 1, NULL)) as total_tidak_gangguan"); 
    $this->db->from('tb_spj');

    if (!empty($area_kode)) {
        $this->db->where('AREA_KODE', $area_kode);
    }

    if (!empty($tahun)) {
        $this->db->where('YEAR(SPJ_TANGGAL_MULAI)', $tahun);
    }

    $this->db->group_by('bulan');
    return $this->db->get()->result(); 
}
}
?>
