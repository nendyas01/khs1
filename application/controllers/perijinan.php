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
        $data['perijinan'] = $this->m_perijinan->perijinan();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perijinan', $data);
        $this->load->view('templates/footer');
    }
}
