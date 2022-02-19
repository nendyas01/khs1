<?php
Class M_chart extends CI_Model
 { 
    //  function jum_id_karyawan() { 
//     $this->db->group_by('id'); 
//     $this->db->select('id'); 
//     $this->db->select("count(*) as total"); 
//     return $this->db->from('idkaryawan') 
//     ->get() 
//     ->result(); 
//     }

function jumlah(){
    // $this->db->group_by('SPJ_NO, gangguan'); 
    $this->db->select('SPJ_NO');
    $this->db->select('gangguan'); 
    $this->db->select("count(*) as total"); 
    return $this->db->from('tb_spj') 
    ->get() 
    ->result(); 
}
}
?>