<?php

class Progress extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_progress');
    }

    function index()
    {
        $data['progress'] = $this->m_progress->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('progress', $data);
        $this->load->view('templates/footer');
    }
}
