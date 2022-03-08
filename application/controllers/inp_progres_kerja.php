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
        //$data['nomorspj'] = $this->m_inp_progres_kerja->getdata();
        //$data['SPJ_NO'] = $this->m_inp_addendum->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('inp_progres_kerja');
        $this->load->view('templates/footer');
    }

    function get_autofill()
    {
        if (isset($_GET['term'])) {
            $result = $this->m_inp_progres_kerja->search_spj($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = $row->SPJ_NO;

                echo json_encode($arr_result);
            }
        }
    }

    public function tambah_data()
    {
        $this->form_validation->set_rules('var_no_spj', 'Nomor SPJ', 'trim|required');
        $this->form_validation->set_rules('progress_persen', 'Progres Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('realisasi', 'Realisasi', 'trim|required');
        $this->form_validation->set_rules('tanggal_spj', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('nama_pengawas', 'Nama Pengawas', 'trim|required');
        $this->form_validation->set_rules('komentar_progres', 'Komentar', 'trim|required');

        if ($this->form_validation->run()) {
            $data = array(
                'SPJ_NO'                 => $this->input->post('var_no_spj'),
                'PROGRESS_VALUE'     => $this->input->post('progress_persen'),
                'REALISASI'     => $this->input->post('realisasi'),
                'PROGRESS_DATE'       => $this->input->post('tanggal_spj'),
                'PROGRESS_PENGAWAS'     => $this->input->post('nama_pengawas'),
                'PROGRESS_NOTES'   => $this->input->post('komentar_progres'),
                'PEMBAYARAN_INPUT_USER'  => $this->session->userdata('username'),
                'INPUT_PROGRESS_DATE' => $this->session->userdata(),
                'PROGRESS_INPUT_USER' => date('Y-m-d H:i:s')
            );
            $this->m_inp_progres_kerja->insert_pembayaran($data);
            $this->session->set_flashdata('sukses', 'Data berhasil disimpan!');
            redirect('inp_progres_kerja', 'refresh');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('inp_progres_kerja');
            $this->load->view('templates/footer');
        };
    }

    public function tambah_aksi()
    {
        $SPJ_NO = $this->input->post('spj_no');
        $PROGRESS_VALUE = $this->input->post('progres_pek');
        $REALISASI = $this->input->post('realisasi_no');
        $PROGRESS_DATE = $this->input->post('tanggal_no');
        $PROGRESS_PENGAWAS = $this->input->post('n_pengawas');
        $PROGRESS_NOTES = $this->input->post('komentar_p');

        $data = array(
            'SPJ_NO' => $SPJ_NO,
            'PROGRESS_VALUE' => $PROGRESS_VALUE,
            'REALISASI' => $REALISASI,
            'PROGRESS_DATE' => $PROGRESS_DATE,
            'PROGRESS_PENGAWAS' => $PROGRESS_PENGAWAS,
            'PROGRESS_NOTES' => $PROGRESS_NOTES,
        );

        $this->db->insert_batch('tb_progress', $data);
        redirect('inp_progress_kerja');
    }
}
