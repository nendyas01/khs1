<?php
Class M_chart extends CI_Model
 { 
// function gangguan (){
//     $gangguan = $this->db->query("select * from tb_spj where gangguan='1'")->num_rows();
//     $nongangguan = $this->db->query("select * from tb_spj where gangguan='0'")->num_rows();


function jumlah(){
    
    $this->db->select('SPJ_NO');
    $this->db->select('gangguan'); 
    $this->db->select("count(*) as total"); 
    return $this->db->from('tb_spj')->get()->result(); 
}

function getarea(){
    $query = $this->db->query("SELECT * FROM tb_area ORDER BY AREA_NAMA ASC");
        return $query->result();
}
}
?>