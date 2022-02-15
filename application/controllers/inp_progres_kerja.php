<?php
defined('BASEPATH') or exit('No direct script access allowed');

class inp_progres_kerja extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_inp_progres_kerja');
    }

    function index()
    {
        //$data['SPJ_NO'] = $this->m_inp_addendum->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('inp_progres_kerja');
        $this->load->view('templates/footer');
    }
}
