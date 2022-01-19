<?php

class rkap_pln extends CI_Controller{
    public function index()
    {
        $data['rkap_pln'] = $this->m_rkap_tahunan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rkap_pln', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $id_anggaran = $this->input->post('id_anggaran');
        $no_surat = $this->input->post('no_surat');
        $tanggal = $this->input->post('tanggal');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $pemberi_kerja = $this->input->post('pemberi_kerja');
        $pic = $this->input->post('pic');
        $anggaran = $this->input->post('anggaran');
     
        $data = array(
            'id_anggaran'               => $id_anggaran,
            'no_surat'                  => $no_surat,
            'tanggal'                   => $tanggal,
            'nama_pekerjaan'            => $nama_pekerjaan,
            'pemberi_kerja'              => $pemberi_kerja,
            'pic'                        => $pic,
            'anggaran'                   => $anggaran,
        );

        $this->m_rkap_pln->input_data($data, 'rkap_pln');
        redirect('rkap_pln/index');
    }

    public function hapus ($id)
    {
        $where = array ('id' => $id);
        $this->m_rkap_pln->hapus_data($where, 'rkap_pln');
        redirect ('rkap_pln/index');
    }

    public function edit_rkap_pln ($id)
    {
        $where = array('id' =>$id);
        $data['rkap_pln'] = $this->m_rkap_pln->edit_data($where, 'rkap_pln')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_rkap_pln', $data);
        $this->load->view('templates/footer');
    }

    public function update ()
    {
        $id_anggaran = $this->input->post('id_anggaran');
        $no_surat = $this->input->post('no_surat');
        $tanggal = $this->input->post('tanggal');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $pemberi_kerja = $this->input->post('pemberi_kerja');
        $pic = $this->input->post('pic');
        $anggaran = $this->input->post('anggaran');
     
        $data = array(
            'id_anggaran'               => $id_anggaran,
            'no_surat'                  => $no_surat,
            'tanggal'                   => $tanggal,
            'nama_pekerjaan'            => $nama_pekerjaan,
            'pemberi_kerja'              => $pemberi_kerja,
            'pic'                        => $pic,
            'anggaran'                   => $anggaran,
        );
        
        $where = array('id' => $id);

        $this->m_rkap_pln->update_data($where,$data,'rkap_pln');
        redirect('rkap_pln/index');
    }

    public function detail_rkap_pln($id){
        $this->load->model('m_rkap_pln');
        $detail_rkap_pln = $this->m_rkap_pln->detail_data($id);
        $data['detail_rkap_pln'] = $detail_rkap_pln;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_rkap_pln', $data);
        $this->load->view('templates/footer');
    }

    public function print(){
        $data['rkap_pln'] = $this->m_rkap_pln->tampil_data('rkap_pln')->result();
        $this->load->view('print_wbs',$data);

    }

    public function chart(){
        $data = ['content' => "timesheet/chart"];
        $this->load->view('pgpln',$data);
    }

    public function pdf_timesheet(){
        $this->load->library('dompdf_gen');

        $data['rkap_pln'] = $this->m_rkap_pln->tampil_data('rkap_pln')->result();
        
        $this->load->view('laporan_pdf_pln',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_rkap_pln.pdf", array('Attachment' =>0));
    }

    public function excel()
	{
		$data['rkap_pln'] = $this->m_rkap_pln->tampil_data('rkap_pln')->result();
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		$object = new PHPExcel();

		$object->getProperties()->setCreator("Kelompok 4");
		$object->getProperties()->setLastModifiedBy("Kelompok 4");
		$object->getProperties()->setTitle("Data Rkap Pln Pt.Icon Plus");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','NO');
		$object->getActiveSheet()->setCellValue('B1','ID Anggaran');
		$object->getActiveSheet()->setCellValue('C1','No Surat Penugasan');
        $object->getActiveSheet()->setCellValue('D1','Tanggal');
		$object->getActiveSheet()->setCellValue('E1','Nama Pekerjaan');
        $object->getActiveSheet()->setCellValue('F1','Pemberi Kerja');
		$object->getActiveSheet()->setCellValue('G1','PIC');
        $object->getActiveSheet()->setCellValue('H1','Anggaran');

		$baris = 2;
		$no = 1;
		foreach ($data['rkap_pln'] as $rp) {
			# code...
			$object->getActiveSheet()->setCellValue('A'.$baris,$no++); 
			$object->getActiveSheet()->setCellValue('B'.$baris,$rp->id_anggaran); 
			$object->getActiveSheet()->setCellValue('C'.$baris,$rp->no_surat); 
			$object->getActiveSheet()->setCellValue('D'.$baris,$rp->tanggal); 
            $object->getActiveSheet()->setCellValue('F'.$baris,$rp->nama_pekerjaan); 
			$object->getActiveSheet()->setCellValue('G'.$baris,$rp->pemberi_kerja); 
            $object->getActiveSheet()->setCellValue('H'.$baris,$rp->pic);
            $object->getActiveSheet()->setCellValue('I'.$baris,$rp->anggaran);

			$baris++;
		}
		$filename="Data_Anggaran_Tahunan".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Anggaran Tahunan");
		header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$Writer=PHPExcel_IOFactory::createwriter($object,'Excel2007');
		$Writer->save('php://output');
		exit;
	}

}