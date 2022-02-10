<?php
defined('BASEPATH') or exit('No direct script access allowed');

class inp_addendum extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_inp_addendum');
    }
    function index()
    {
        /* $data['SPJ_NO'] = $this->m_inp_addendum->tampil_data(); */
        $data['SPJ_NO'] = $this->m_inp_addendum->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('inp_addendum');
        $this->load->view('templates/footer');
    }

    function edit($inp_addendum)
    {
        $where = array('id' => $inp_addendum);
        $data['user'] = $this->m_data->edit_data($where, 'user')->result();
        $this->load->view('inp_addendum', $data);
    }

    function tambah()
    {
        //$data['progress'] = $this->m_progress->tambah;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('inp_addendum');
        $this->load->view('templates/footer');
    }
}
