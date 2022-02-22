<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chart extends CI_Controller
{ 
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_chart'); 
    }
    function index(){ 
        $data['total_spj']=$this->m_chart->jml_total_spj();  
        $data['nama_area']=$this->m_chart->getarea();
        // print_r($data);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('chart', $data);
        $this->load->view('templates/footer');
    }
}
?>