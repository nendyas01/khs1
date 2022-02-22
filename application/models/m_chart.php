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
}
?>
