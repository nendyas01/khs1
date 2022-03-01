<?php


class Perijinan_add extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perijinan_add');
    }

    public function index()
    {
        $data['perijinan_add'] = $this->m_perijinan_add;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perijinan_add', $data);
        $this->load->view('templates/footer');
    }



    public function tambah_aksi()
    {
        $AREA_KODE = $this->input->post('AREA_KODE');
        $AREA_NAMA = $this->input->post('AREA_NAMA');
        $AREA_ZONE = $this->input->post('AREA_ZONE');

        $data = array(
            'AREA_KODE'               => $AREA_KODE,
            'AREA_NAMA'               => $AREA_NAMA,
            'AREA_ZONE'               => $AREA_ZONE,
        );

        $this->m_perijinan->input_data($data, 'tb_area');
        redirect('perijinan_add/index');
    }
}
