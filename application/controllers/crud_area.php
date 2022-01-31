<?php

class crud_area extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud_area');
    }
    public function index()
    {
        $data['crud_area'] = $this->m_crud_area->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('crud_area', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $AREA_KODE = $this->input->post('AREA_KODE');
        $AREA_NAMA = $this->input->post('AREA_NAMA');
        $AREA_ZONE = $this->input->post('AREA_ZONE');

        $data = array(
            'AREA_KODE'               => $AREA_KODE,
            'AREA_NAMA'                  => $AREA_NAMA,
            'AREA_ZONE'                   => $AREA_ZONE,
        );

        $this->m_crud_area->input_data($data, 'crud_area');
        redirect('crud_area/index');
    }
}
