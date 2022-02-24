<?php


class retribusi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_retribusi');
    }

    public function index()
    {
        $data['retri'] = $this->m_retribusi->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('retribusi', $data);
        $this->load->view('templates/footer');
    }
}
