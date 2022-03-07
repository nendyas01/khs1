<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengajuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengajuan');
    }

    public function index()
    {
        $data['nomorspj'] = $this->m_pengajuan->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function getNilaiTermin()
    {
        $get_nilai_termin1 = $this->m_pengajuan->get_nilai_termin1();
        echo json_encode($get_nilai_termin1);
    }

    public function getTermin()
    {
        $get_termin = $this->m_pengajuan->get_termin();
        echo json_encode($get_termin);
    }

    public function get_val()
    {
        $get_val = $this->m_pengajuan->getval();
        echo json_encode($get_val);
    }
}
