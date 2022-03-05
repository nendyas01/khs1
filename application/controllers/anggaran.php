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
        // $data['var_no_spj']=$this->m_anggaran->v_input_tagihan();
        $current_spj_no['no_spj']=$this->m_anggaran->spj_no();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_input_tagihan',$current_spj_no);
        $this->load->view('templates/footer');

    }

    public function getNilai(){
        $id = $this->input->post("id");
        $nilai = $this->m_anggaran->getnominal($id);
        $data = [
            'status' => true,
            'nilai' => $nilai->nilai
        ];
        echo json_encode($data);
    }

    public function getNilaiTermin(){
        $get_nilai_termin1=$this->m_anggaran->get_nilai_termin1();
        echo json_encode($get_nilai_termin1);
    }

    public function getTermin(){
        $get_termin=$this->m_anggaran->get_termin();
        echo json_encode($get_termin);
    }

    public function get_val(){
         $get_val=$this->m_anggaran->get_val();
         echo json_encode($get_val);
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

    // public function getNoSPJ(){
    //     $get=$this->m_anggaran->tahun();
    //     echo json_encode($get);
    // }

    // public function getNominal(){
    //     $tahun = $this->input->get('tahun');
    //     $get = $this->m_anggaran->getnominal($tahun);
    //     echo json_encode($get);
    // }
    
}
