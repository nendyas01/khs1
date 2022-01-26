<?php 

class m_input_tagihan extends CI_Model{
    public function get_no_spj()
    {
    $query = $this->db->query('SELECT * FROM tb_spj');
    return $this->db->query($query)->result();   
    }

    public function submit(){

    }
}
 ?>