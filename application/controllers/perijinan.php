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
        $data['perijinan'] = $this->m_perijinan->getdata();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perijinan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $surat_ijin_no = $this->input->post('surat_ijin_no');
        $tgl_survey = $this->input->post('tgl_survey');
        $hasil_survey = $this->input->post('hasil_survey');

        $data = array();
        foreach ($surat_ijin_no as $key => $a) {
            array_push($data, array(
                'surat_ijin_no' => $surat_ijin_no[$key],
                'tgl_survey' => $tgl_survey,
                'hasil_survey' => $hasil_survey
            ));

            $this->db->insert_batch('tb_ijin', $data);
            redirect('perijinan');
        }
    }
}
