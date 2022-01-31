<?php

class crud_skkio extends CI_Controller{
    
    public function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_crud_skkio'); 
    }
    public function index()
    { 
        $data['crud_skkio'] = $this->m_crud_skkio->tampil_data();
        $area_list = $this->m_crud_skkio->list_area();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('crud_skkio', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $SKKI_JENIS = $this->input->post('SKKI_JENIS');
        $SKKI_NO = $this->input->post('SKKI_NO');
       
        $SKKI_NILAI = $this->input->post('SKKI_NILAI');
        $SKKI_TERPAKAI = $this->input->post('SKKI_TERPAKAI');
        $SKKI_TANGGAL = $this->input->post('SKKI_TANGGAL');
        $area_list = $this->m_crud_skkio->list_area();
     
        $data = array(
            'SKKI_JENIS'               => $SKKI_JENIS,
            'SKKI_NO'                  => $SKKI_NO,
           
            'SKKI_NILAI'               => $SKKI_NILAI,
            'SKKI_TERPAKAI'            => $SKKI_TERPAKAI,
            'SKKI_TANGGAL'             => $SKKI_TANGGAL,
            'AREA_LIST'                => $area_list,
        );
       $this->m_crud_skkio->input_data($data, 'tb_skko_i');
        redirect('crud_skkio/index'); 
    }
   
}