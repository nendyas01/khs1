<?php

class crud_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud_user');
    }
    public function index()
    {
        $data['crud_user'] = $this->m_crud_user->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('crud_user', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $USERNAME = $this->input->post('USERNAME');
        $role_id = $this->input->post('role_id');
        $AREA_KODE = $this->input->post('AREA_KODE');

        $data = array(
            'USERNAME'           => $USERNAME,
            'role_id'            => $role_id,
            'AREA_KODE'          => $AREA_KODE,
        );

        $this->m_crud_user->input_data($data, 'crud_user');
        redirect('crud_user/index');
    }
}
