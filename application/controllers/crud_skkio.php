<?php

class crud_skkio extends CI_Controller{
    
    public function __construct(){ 
        parent::__construct(); 
        $this->load->model('m_crud_skkio'); 
    }
    public function index()
    { 
        $data['crud_skkio'] = $this->m_crud_skkio->tampil_data();
        $data['nama_area'] = $this->m_crud_skkio->getdata();
        $data['SKKI_JENIS'] = $this->m_crud_skkio->getjenis();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('crud_skkio', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $SKKI_ID = $this->input->post('SKKI_ID');
        $SKKI_JENIS = $this->input->post('SKKI_JENIS');
        $SKKI_NO = $this->input->post('SKKI_NO');
        $AREA_KODE = $this->input->post('AREA_KODE');
        $SKKI_NILAI = $this->input->post('SKKI_NILAI');
        $SKKI_TERPAKAI = $this->input->post('SKKI_TERPAKAI');
        $SKKI_TANGGAL = $this->input->post('SKKI_TANGGAL');
       
        $data = array(
            'SKKI_ID'                  => $SKKI_ID,
            'SKKI_JENIS'               => $SKKI_JENIS,
            'SKKI_NO'                  => $SKKI_NO,
            'AREA_KODE'                 => $AREA_KODE,
            'SKKI_NILAI'               => $SKKI_NILAI,
            'SKKI_TERPAKAI'            => $SKKI_TERPAKAI,
            'SKKI_TANGGAL'             => $SKKI_TANGGAL,
           
        );
       $this->m_crud_skkio->input_data($data, 'tb_skko_i');
        redirect('crud_skkio/index'); 
    }

    public function hapus ($SKKI_ID)
    {
        $where = array ('SKKI_ID' => $SKKI_ID);
        $this->m_crud_skkio->hapus_data($where, 'tb_skko_i');
        redirect ('crud_skkio/index');
    }

    public function edit_crud_skkio ($SKKI_ID)
    {
        $where = array('SKKI_ID' =>$SKKI_ID);
        $data['crud_skkio'] = $this->m_crud_skkio->edit_data($where, 'tb_skko_i')->result();
        $data['area'] = $this->m_crud_skkio->getdata($where, 'tb_skko_i');
       
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_crud_skkio', $data);
        $this->load->view('templates/footer');
    }

    public function update ()
    {
        $SKKI_ID = $this->input->post('SKKI_ID');
        $SKKI_JENIS = $this->input->post('SKKI_JENIS');
        $SKKI_NO = $this->input->post('SKKI_NO');
        $AREA_KODE = $this->input->post('AREA_KODE');
        
        $SKKI_NILAI = $this->input->post('SKKI_NILAI');
        $SKKI_TERPAKAI = $this->input->post('SKKI_TERPAKAI');
        $SKKI_TANGGAL = $this->input->post('SKKI_TANGGAL');
     
        $data = array(
            'SKKI_ID'                  => $SKKI_ID,
            'SKKI_JENIS'               => $SKKI_JENIS,
            'SKKI_NO'                  => $SKKI_NO,
            'AREA_KODE'                => $AREA_KODE,
            'SKKI_NILAI'               => $SKKI_NILAI,
            'SKKI_TERPAKAI'            => $SKKI_TERPAKAI,
            'SKKI_TANGGAL'             => $SKKI_TANGGAL,
        );
        
        $where = array('SKKI_ID' => $SKKI_ID);
        $this->m_crud_skkio->update_data($where,$data,'tb_skko_i');
        redirect('crud_skkio/index');
    }

    public function detail_crud_skkio($SKKI_ID){
       $this->load->model('m_crud_skkio');
        $detail_crud_skkio = $this->m_crud_skkio->detail_data($SKKI_ID);
        $data['detail_crud_skkio'] = $detail_crud_skkio;
        $data['area'] = $detail_crud_skkio;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_crud_skkio', $data);
        $this->load->view('templates/footer'); 
        
    }

   
}