<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggaran extends CI_Controller
{ 
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_anggaran'); 
    }
    function index(){ 
        $data['anggaran'] = $this->m_anggaran->tampil_data()->result(); /* untuk sementara diset 0 dulu ya */
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggaran',$data);
        $this->load->view('templates/footer');
        //print_r($data);
    }
     function search(){
        $keyword = $this->input->post('keyword');
        $data['anggaran']=$this->m_anggaran->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggaran',$data);
        $this->load->view('templates/footer');
    }
}
?>