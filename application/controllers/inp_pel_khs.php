<?php
defined('BASEPATH') or exit('No direct script access allowed');

class inp_pel_khs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_inp_pel_khs');
    }

    function index()
    {
        //$data['spj_no'] = $this->m_inp_pel_khs->select_spj_no();
        //$data['spj_no'] = $this->m_inp_pel_khs->select_spj_no();
        //$data['SPJ_NO'] = $this->m_inp_addendum->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view(
            'inp_pel_khs', //$data
        );
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $SPJ_NO = $this->input->post('spj_no');
        $PROGRESS_VALUE = $this->input->post('var_progress');
        $REALISASI = $this->input->post('var_realisasi');
        $INPUT_PROGRESS_DATE = $this->input->post('var_tanggal');
        $PROGRESS_PENGAWAS = $this->input->post('var_nama_pengawas');
        $PROGRESS_NOTES = $this->input->post('var_deskripsi');

        $data = array();
        foreach ($SPJ_NO as $key => $a) {
            array_push($data, array(
                'SPJ_NO' => $SPJ_NO[$key],
                'PROGRESS_VALUE' => $PROGRESS_VALUE,
                'REALISASI' => $REALISASI,
                'INPUT_PROGRESS_DATE' => $INPUT_PROGRESS_DATE,
                'PROGRESS_PENGAWAS' => $PROGRESS_PENGAWAS,
                'PROGRESS_NOTES' => $PROGRESS_NOTES,
            ));

            $this->db->insert_batch('tb_progress', $data);
            redirect('inp_progress_kerja');
        }
    }

    public function select_spj_no()
    {
        $spj = $this->input->post('id');
        $data = $this->m_inp_progres_kerja->select_spj_no->result();
        echo json_encode($data);
    }
}
