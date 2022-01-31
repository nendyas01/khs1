<?php

class crud_vendor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud_vendor');
    }
    public function index()
    {
        $data['crud_vendor'] = $this->m_crud_vendor->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('crud_vendor', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $VENDOR_ID = $this->input->post('VENDOR_ID');
        $VENDOR_NAMA = $this->input->post('VENDOR_NAMA');
        $TAHUN = $this->input->post('TAHUN');
        $DIREKSI_VENDOR = $this->input->post('DIREKSI_VENDOR');
        $EMAIL = $this->input->post('EMAIL');
        $TELEPON = $this->input->post('TELEPON');
        $STATUS = $this->input->post('STATUS');
        $EMAIL_2 = $this->input->post('EMAIL_2');
        $JABATAN = $this->input->post('JABATAN');

        $data = array(
            'VENDOR_ID'             => $VENDOR_ID,
            'VENDOR_NAMA'           => $VENDOR_NAMA,
            'TAHUN'                 => $TAHUN,
            'DIREKSI_VENDOR'        => $DIREKSI_VENDOR,
            'EMAIL'                 => $EMAIL,
            'TELEPON'               => $TELEPON,
            'STATUS'                => $STATUS,
            'EMAIL_2'               => $EMAIL_2,
            'JABATAN'               => $JABATAN,
        );

        $this->m_crud_vendor->input_data($data, 'crud_vendor');
        redirect('crud_vendor/index');
    }
}
