<?php


class perijinan_add extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perijinan_add');
    }

    public function index()
    {
        /* $where = array('spj_no' => $spj_no); */
        $data['perijinan_add'] = $this->m_perijinan_add->edit('tb_ijin')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perijinan_add', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {

        $spj_no = $this->input->post('spj_no', true);
        $surat_ijin_no = $this->input->post('surat_ijin_no', true);
        $tgl_surat = $this->input->post('tgl_surat', true);

        $data = array(
            'spj_no'               => $spj_no,
            'surat_ijin_no'               => $surat_ijin_no,
            'tgl_surat'               => $tgl_surat,
        );

        $where = array('spj_no' => $spj_no);
        $this->m_perijinan_add->update_data($where, $data, 'tb_ijin');
        redirect('perijinan_add/index');
    }

    public function tambah_data()
    {

        $this->form_validation->set_rules('var_no_spj', 'Nomor SPJ', 'trim|required');
        $this->form_validation->set_rules('var_no_surat_ptsp', 'Nomor Surat Ke PTSP', 'trim|required');
        $this->form_validation->set_rules('var_tgl_surat', 'Tanggal Surat', 'trim|required');
        $this->form_validation->set_rules('var_pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('var_kota_adm', 'Kota Administrasi', 'trim|required');
        $this->form_validation->set_rules('var_lokasi', 'Lokasi', 'trim|required');

        if ($this->form_validation->run()) {
            $no_spj = $this->input->post('var_no_spj');
            $termin = $this->m_perijinan_add->get_termin_by_no_spj($no_spj);
            $progress = $this->m_perijinan_add->get_progress_by_no_spj($no_spj);

            if ($termin->status == 0 && $progress->PROGRESS_VALUE < 100) {
                $this->session->set_flashdata('gagal', 'Tidak Bisa Input Pembayaran, Progress Belum 100%');
                redirect('perijinan_add', 'refresh');
            } elseif ($termin->status == 1 && $progress->PROGRESS_VALUE <= $termin->termin_1) {
                $this->session->set_flashdata('gagal', 'Tidak Bisa Input Pembayaran Dikarenakan Progress Belum Sesuai dengan Termin');
                redirect('perijinan_add', 'refresh');
            } else {
                $data = array(
                    'spj_no'                 => $this->input->post('var_no_spj'),
                    'surat_ijin_no'     => $this->input->post('var_no_surat_ptsp'),
                    'tgl_surat'     => date('Y-m-d H:i:s'),
                    'pekerjaan'       => $this->input->post('var_pekerjaan'),
                    'kota_adm'     => $this->input->post('var_pekerjaan'),
                    'lokasi'   => $this->input->post('var_kota_adm'),
                    'PEMBAYARAN_INPUT_USER'  => $this->input->post('var_lokasi'),
                );
                $this->m_perijinan_add->tambah_perijinan($data);
                $this->session->set_flashdata('sukses', 'Data berhasil disimpan!');
                redirect('perijinan_add', 'refresh');
            }
        } else {
            $current_spj_no['no_spj'] = $this->m_perijinan_add->spj_no();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('perijinan_add', $current_spj_no);
            $this->load->view('templates/footer');
        };
    }
}
