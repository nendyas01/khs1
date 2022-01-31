<?php

class crud_skkio extends CI_Controller{
    
    public function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_crud_skkio'); 
    }
    public function index()
    { 
        $data['crud_skkio'] = $this->m_crud_skkio->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('crud_skkio', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $SKKI_JENIS = $this->input->post('SKKI_JENIS');
        $SKKI_NO = $this->input->post('SKKI_NO');
        $AREA_KODE = $this->input->post('AREA_KODE');
        $SKKI_NILAI = $this->input->post('SKKI_NILAI');
        $SKKI_TERPAKAI = $this->input->post('SKKI_TERPAKAI');
        $SKKI_TANGGAL = $this->input->post('SKKI_TANGGAL');
     
        $data = array(
            'SKKI_JENIS'               => $SKKI_JENIS,
            'SKKI_NO'                  => $SKKI_NO,
            'AREA_KODE'                   => $AREA_KODE,
            'SKKI_NILAI'            => $SKKI_NILAI,
            'SKKI_TERPAKAI'                        => $SKKI_TERPAKAI,
            'SKKI_TANGGAL'                   => $SKKI_TANGGAL,
        );

        $this->m_rkap_pln->input_data($data, 'crud_skkio');
        redirect('crud_skkio/index');
    }
}