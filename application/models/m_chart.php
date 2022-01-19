<?php
Class M_chart extends CI_Model
{ function jum_id_karyawan() { 
    $this->db->group_by('id'); 
    $this->db->select('id'); 
    $this->db->select("count(*) as total"); 
    return $this->db->from('idkaryawan') 
    ->get() 
    ->result(); 
    }
}
?>