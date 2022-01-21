<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontrol_fin extends CI_Controller
{ 
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_kontrol_fin'); 
    }
    function index(){ 
        $data['kontrol_fin'] = $this->m_kontrol_fin->tampil_data(); 
       $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kontrol_fin',$data);
        $this->load->view('templates/footer'); 
        //print_r($data);
    }
     function search(){
        $keyword = $this->input->post('keyword');
        $data['kontrol_fin']=$this->m_kontrol_fin->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kontrol_fin',$data);
        $this->load->view('templates/footer');
    }
}
