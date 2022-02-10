<?php

defined('BASEPATH') or exit('No direct script access allowed');



class mapping_vendor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mapping_vendor');
    }
    public function index()
    {
        $data['mapping_vendor'] = $this->m_mapping_vendor->tampil_data();
        $data['nama_area'] = $this->m_mapping_vendor->getdata();
       
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mapping_vendor', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $VENDOR_ID = $this->input->post('VENDOR_ID');
        $MAPPING_TAHUN = $this->input->post('MAPPING_TAHUN');
        $PAKET_JENIS = $this->input->post('PAKET_JENIS');
        $ZONE = $this->input->post('ZONE');
        $AREA_KODE = $this->input->post('SKKI_NILAI');
       

        $data = array(
            'VENDOR_ID'                  => $VENDOR_ID,
            '$MAPPING_TAHUN'               => $MAPPING_TAHUN,
            '  PAKET_JENIS'                  =>   $PAKET_JENIS,
            'ZONE '                => $ZONE,
            ' AREA_KODE'               =>  $AREA_KODE
          

        );
        $this->m_crud_skkio->input_data($data, 'tb_mapping_vendor');
        redirect('mapping_vendor/index');
    }

}

