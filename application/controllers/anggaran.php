<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggaran extends CI_Controller
{ 
    public function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_anggaran', 'm_input_tagihan'); 
    }
    public function index(){ 
        $data['anggaran'] = $this->m_anggaran->tampil_data(); 
       $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggaran',$data);
        $this->load->view('templates/footer'); 
        //print_r($data);
    }
    public function search(){
        $keyword = $this->input->post('keyword');
        $data['anggaran']=$this->m_anggaran->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggaran',$data);
        $this->load->view('templates/footer');
    }
    public function v_input_tagihan(){
        $data['var_no_spj']=$this->m_input_tagihan->v_input_tagihan();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_input_tagihan',$data );
        $this->load->view('templates/footer');

    }
    
}
