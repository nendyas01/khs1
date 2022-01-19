<?php

class Wbs extends CI_Controller{
    public function index()
    {
        $data['wbs'] = $this->m_wbs->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('wbs', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $id_kegiatan = $this->input->post('id_kegiatan');
        $no_surat = $this->input->post('no_surat');
        $rincian_kegiatan = $this->input->post('rincian_kegiatan');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $pic = $this->input->post('pic');
        $durasi = $this->input->post('durasi');
     
        $data = array(
            'id_kegiatan'               => $id_kegiatan,
            'no_surat'                  => $no_surat,
            'rincian_kegiatan'          => $rincian_kegiatan,
            'tgl_awal'                  => $tgl_awal,
            'tgl_akhir'                 => $tgl_akhir,
            'pic'                       => $pic,
            'durasi'                    => $durasi,
        );

        $this->m_wbs->input_data($data, 'wbs');
        redirect('wbs/index');
    }

    public function hapus ($id)
    {
        $where = array ('id' => $id);
        $this->m_wbs->hapus_data($where, 'wbs');
        redirect ('wbs/index');
    }

    public function edit_wbs ($id)
    {
        $where = array('id' =>$id);
        $data['wbs'] = $this->m_wbs->edit_data($where, 'wbs')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_wbs', $data);
        $this->load->view('templates/footer');
    }

    public function update ()
    {
        $id = $this->input->post('id');
        $id_kegiatan = $this->input->post('id_kegiatan');
        $no_surat = $this->input->post('no_surat');
        $rincian_kegiatan = $this->input->post('rincian_kegiatan');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $pic = $this->input->post('pic');
        $durasi = $this->input->post('durasi');
    

        $data = array(
            'id_kegiatan'               => $id_kegiatan,
            'no_surat'                  => $no_surat,
            'rincian_kegiatan'          => $rincian_kegiatan,
            'tgl_awal'                  => $tgl_awal,
            'tgl_akhir'                 => $tgl_akhir,
            'pic'                       => $pic,
            'durasi'                    => $durasi,
        );

        $where = array('id' => $id);

        $this->m_wbs->update_data($where,$data,'wbs');
        redirect('wbs/index');
    }

    public function detail_wbs($id){
        $this->load->model('m_wbs');
        $detail_wbs = $this->m_wbs->detail_data($id);
        $data['detail_wbs'] = $detail_wbs;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_wbs', $data);
        $this->load->view('templates/footer');
    }

    public function print(){
        $data['wbs'] = $this->m_wbs->tampil_data('wbs')->result();
        $this->load->view('print_wbs',$data);

    }

    public function chart(){
        $data = ['content' => "timesheet/chart"];
        $this->load->view('pgpln',$data);
    }

    public function pdf_timesheet(){
        $this->load->library('dompdf_gen');

        $data['wbs'] = $this->m_wbs->tampil_data('wbs')->result();
        
        $this->load->view('laporan_pdf_pln',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_wbs_pln.pdf", array('Attachment' =>0));
    }

    public function excel()
	{
		$data['wbs'] = $this->m_timesheet->tampil_data('wbs')->result();
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		$object = new PHPExcel();

		$object->getProperties()->setCreator("Kelompok 4");
		$object->getProperties()->setLastModifiedBy("Kelompok 4");
		$object->getProperties()->setTitle("Data Wbs Pt.Icon Plus");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','NO');
		$object->getActiveSheet()->setCellValue('B1','ID Kegiatan');
		$object->getActiveSheet()->setCellValue('C1','No Surat Penugasan');
        $object->getActiveSheet()->setCellValue('D1','Rincian Kegiatan');
		$object->getActiveSheet()->setCellValue('E1','Tanggal Awal Pekerjaan');
        $object->getActiveSheet()->setCellValue('F1','Tanggal Akhir Pekerjaan');
		$object->getActiveSheet()->setCellValue('G1','PIC WBS');
        $object->getActiveSheet()->setCellValue('H1','Durasi');

		$baris = 2;
		$no = 1;
		foreach ($data['wbs'] as $w) {
			# code...
			$object->getActiveSheet()->setCellValue('A'.$baris,$no++); 
			$object->getActiveSheet()->setCellValue('B'.$baris,$w->id_kegiatan); 
			$object->getActiveSheet()->setCellValue('C'.$baris,$w->no_surat); 
			$object->getActiveSheet()->setCellValue('D'.$baris,$w->rincian_kegiatan); 
            $object->getActiveSheet()->setCellValue('F'.$baris,$w->tgl_awal); 
			$object->getActiveSheet()->setCellValue('G'.$baris,$w->tgl_akhir); 
            $object->getActiveSheet()->setCellValue('H'.$baris,$w->pic);
            $object->getActiveSheet()->setCellValue('I'.$baris,$w->durasi);

			$baris++;
		}
		$filename="Data_Wbs".'.xlsx';
		$object->getActiveSheet()->setTitle("Data WBS");
		header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$Writer=PHPExcel_IOFactory::createwriter($object,'Excel2007');
		$Writer->save('php://output');
		exit;
	}

}