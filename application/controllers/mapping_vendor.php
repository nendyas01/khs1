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
        $data['nama_area'] = $this->m_mapping_vendor->getarea();
        $data['jenis_paket'] = $this->m_mapping_vendor->getpaket();
        // $data['nama_vendor'] = $this->m_mapping_vendor->getvendor();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mapping_vendor', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
       

        $AREA_KODE = $this->input->post('AREA_KODE');
        $PAKET_JENIS = $this->input->post('jns_paket');
        $ZONE = $this->input->post('ZONA');
        $MAPPING_TAHUN = $this->input->post('MAPPING_TAHUN');
        $VENDOR_ID = $this->input->post('vendor');

        $data = array();


        foreach ($VENDOR_ID as $key => $nb) {
            array_push($data, array(
               
                'AREA_KODE' => $AREA_KODE,
                'PAKET_JENIS' => $PAKET_JENIS,
                'ZONE' => $ZONE,
                'MAPPING_TAHUN' => $MAPPING_TAHUN,
                'VENDOR_ID' => $VENDOR_ID[$key],

            ));
        }
        $this->db->insert_batch('tb_mapping_vendor', $data);
        redirect('mapping_vendor/index');
    }

    public function get_vendor(){
      $jns_paket= $this->input->post('id');
      $data=$this->m_mapping_vendor->get_vendor($jns_paket);
      echo json_encode($data);


    }


    
}
