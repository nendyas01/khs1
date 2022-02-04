<?php


class perijinan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perijinan');
    }

    public function index()
    {
        $data['perijinan'] = $this->m_perijinan->survey();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perijinan', $data);
        $this->load->view('templates/footer');
    }

    public function monitoring()
    {
        $data['monitoring'] = $this->m_perijinan->monitoring();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('monitoring', $data);
        $this->load->view('templates/footer');
    }

    public function pengajuan()
    {
        $data['pengajuan'] = $this->m_perijinan->pengajuan();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function retribusi()
    {
        $data['retribusi'] = $this->m_perijinan->retribusi();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('retribusi', $data);
        $this->load->view('templates/footer');
    }

    public function skrd()
    {
        $data['skrd'] = $this->m_perijinan->skrd();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('skrd', $data);
        $this->load->view('templates/footer');
    }
}
