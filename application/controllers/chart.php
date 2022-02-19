<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chart extends CI_Controller
{ 
    function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_chart'); 
    }
    function index(){ 
         $data['chart']=$this->m_chart->jumlah();  
        // nanti disesuaikan aja ya , dibagian sini mau ditampilkan apa*/
        // $data['chart'] = 0; /* untuk sementara diset 0 dulu ya */
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('chart',$data);
        $this->load->view('templates/footer');
    }
}
?>