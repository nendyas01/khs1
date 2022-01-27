<?php 

class m_input_tagihan extends CI_Model{
    public function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_input_tagihan'); 
    }
    
    public function v_input_tagihan()
    {
    $query = $this->db->query("SELECT * FROM tb_spj ORDER BY SPJ_NO");
    return $query->result();
    }

    public function submit(){

    }
}
 ?>