<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mappping_vendor extends CI_Controller
{ 
    public function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_mapping_vendor'); 
    }

    public function index(){ 
        $data['anggaran'] = $this->m_anggaran->tampil_data(); 
       $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_add_mapping_vendor',$data);
        $this->load->view('templates/footer'); 
        //print_r($data);
    }
}