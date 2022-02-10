<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mapping_vendor extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_mapping_vendor');
    }

    function index()
    {
        $data['v_add_mapping_vendor'] = $this->m_mapping_vendor->getpaket();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_add_mapping_vendor', $data);
        $this->load->view('templates/footer');
        //print_r($data);
    }
}
