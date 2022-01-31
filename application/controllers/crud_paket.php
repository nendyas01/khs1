<?php

class crud_paket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud_paket');
    }
    public function index()
    {
        $data['crud_paket'] = $this->m_crud_paket->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('crud_paket', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $PAKET_JENIS = $this->input->post('PAKET_JENIS');
        $PAKET_DESKRIPSI = $this->input->post('PAKET_DESKRIPSI');
        $SATUAN = $this->input->post('SATUAN');
        $PAKET_DESKRIPSI2 = $this->input->post('PAKET_DESKRIPSI2');
        $STATUS = $this->input->post('STATUS');

        $data = array(
            'PAKET_JENIS'               => $PAKET_JENIS,
            'PAKET_DESKRIPSI'           => $PAKET_DESKRIPSI,
            'SATUAN'                    => $SATUAN,
            'PAKET_DESKRIPSI2'          => $PAKET_DESKRIPSI2,
            'STATUS'                    => $STATUS,
        );

        $this->m_crud_paket->input_data($data, 'crud_paket');
        redirect('crud_paket/index');
    }
}
