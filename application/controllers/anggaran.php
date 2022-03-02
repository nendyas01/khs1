<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggaran extends CI_Controller
{ 
    public function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_anggaran'); 
        
    }
    public function index(){ 
        $data['anggaran'] = $this->m_anggaran->tampil_data(); 
       $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('anggaran',$data);
        $this->load->view('templates/footer'); 
        //print_r($data);
    }
   
    public function v_input_tagihan(){
        $data['var_no_spj']=$this->m_anggaran->v_input_tagihan();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_input_tagihan',$data );
        $this->load->view('templates/footer');

    }

    public function tambah_aksi()
    {
        $SPJ_NO = $this->input->post('SPJ_NO');
        $PEMBAYARAN_NOMINAL = $this->input->post('PEMBAYARAN_NOMINAL');
        $PEMBAYARAN_TANGGAL = $this->input->post('SKKI_NO');
        $PEMBAYARAN_BASTP = $this->input->post('AREA_KODE');
        $PEMBAYARAN_DESKRIPSI = $this->input->post('SKKI_NILAI');
       

        $data = array(
            'SPJ_NO'                  => $SPJ_NO,
            'PEMBAYARAN_NOMINAL'       =>  $PEMBAYARAN_NOMINAL,
            'PEMBAYARAN_TANGGAL'      => $PEMBAYARAN_TANGGAL,
            'PEMBAYARAN_BASTP'        => $PEMBAYARAN_BASTP,
            'PEMBAYARAN_DESKRIPSI'  =>  $PEMBAYARAN_DESKRIPSI,
        );
        $this->m_crud_skkio->input_data($data, 'tb_pembayaran');
        redirect('anggaran/v_input_tagihan');
    }
    
}
