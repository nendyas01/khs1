<?php

class Timesheet extends CI_Controller{
    public function index()
    {
        $data['timesheet'] = $this->m_timesheet->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('timesheet',$data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $id_progress = $this->input->post('id_progress');
        $tanggal = $this->input->post('tanggal');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $rincian_pekerjaan = $this->input->post('rincian_pekerjaan');
        $durasi_hari = $this->input->post('durasi_hari');
        $presentase = $this->input->post('presentase');
        $upload = $this->input->post('upload');


        $data = array(
            'id_progress'               => $id_progress,
            'tanggal'                   => $tanggal,
            'nama_pegawai'              => $nama_pegawai,
            'nama_pekerjaan'            => $nama_pekerjaan,
            'rincian_pekerjaan'         => $rincian_pekerjaan,
            'durasi_hari'               => $durasi_hari,
            'presentase'                => $presentase,
            'upload'                    => $upload,
        );

        $this->m_timesheet->input_data($data, 'timesheet');
        redirect('timesheet/index');
    }

    public function hapus ($id)
    {
        $where = array ('id' => $id);
        $this->m_timesheet->hapus_data($where, 'timesheet');
        redirect ('timesheet/index');
    }

    public function edit_timesheet ($id)
    {
        $where = array('id' =>$id);
        $data['timesheet'] = $this->m_timesheet->edit_data($where, 'timesheet')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_timesheet', $data);
        $this->load->view('templates/footer');
    }

    public function update ()
    {
        $id = $this->input->post('id');
        $id_progress = $this->input->post('id_progress');
        $tanggal = $this->input->post('tanggal');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $rincian_pekerjaan = $this->input->post('rincian_pekerjaan');
        $durasi_hari = $this->input->post('durasi_hari');
        $presentase = $this->input->post('presentase');
        $upload = $this->input->post('upload');


        $data = array(
            'id_progress'               => $id_progress,
            'tanggal'                   => $tanggal,
            'nama_pegawai'              => $nama_pegawai,
            'nama_pekerjaan'            => $nama_pekerjaan,
            'rincian_pekerjaan'         => $rincian_pekerjaan,
            'durasi_hari'               => $durasi_hari,
            'presentase'                => $presentase,
            'upload'                    => $upload,
        );

        $where = array('id' => $id);

        $this->m_timesheet->update_data($where,$data,'timesheet');
        redirect('timesheet/index');
    }

    public function detail_timesheet($id){
        $this->load->model('m_timesheet');
        $detail_timesheet = $this->m_timesheet->detail_data($id);
        $data['detail_timesheet'] = $detail_timesheet;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_timesheet', $data);
        $this->load->view('templates/footer');
    }

    public function print(){
        $data['timesheet'] = $this->m_timesheet->tampil_data('timesheet')->result();
        $this->load->view('print_pg_pln',$data);

    }

    public function chart(){
        $data = ['content' => "timesheet/chart"];
        $this->load->view('pgpln',$data);
    }

    public function pdf_timesheet(){
        $this->load->library('dompdf_gen');

        $data['timesheet'] = $this->m_timesheet->tampil_data('timesheet')->result();
        
        $this->load->view('laporan_pdf_pln',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_penugasan_pln.pdf", array('Attachment' =>0));
    }

    public function excel()
	{
		$data['timesheet'] = $this->m_timesheet->tampil_data('timesheet')->result();
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		$object = new PHPExcel();

		$object->getProperties()->setCreator("Kelompok 4");
		$object->getProperties()->setLastModifiedBy("Kelompok 4");
		$object->getProperties()->setTitle("Data Timesheet Pt.Icon Plus");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','NO');
		$object->getActiveSheet()->setCellValue('B1','ID Progress');
		$object->getActiveSheet()->setCellValue('C1','Tanggal');
        $object->getActiveSheet()->setCellValue('D1','Nama Pegawai');
		$object->getActiveSheet()->setCellValue('E1','Nama Pekerjaan');
        $object->getActiveSheet()->setCellValue('F1','Rincian Pekerjaan');
		$object->getActiveSheet()->setCellValue('G1','Durasi Hari');
        $object->getActiveSheet()->setCellValue('H1','Presentase');
        $object->getActiveSheet()->setCellValue('I1','Upload');

		$baris = 2;
		$no = 1;
		foreach ($data['timesheet'] as $tm) {
			# code...
			$object->getActiveSheet()->setCellValue('A'.$baris,$no++); 
			$object->getActiveSheet()->setCellValue('B'.$baris,$tm->id_progress); 
			$object->getActiveSheet()->setCellValue('C'.$baris,$tm->tanggal); 
			$object->getActiveSheet()->setCellValue('D'.$baris,$tm->nama_pegawai); 
            $object->getActiveSheet()->setCellValue('F'.$baris,$tm->nama_pekerjaan); 
			$object->getActiveSheet()->setCellValue('G'.$baris,$tm->rincian_pekerjaan); 
            $object->getActiveSheet()->setCellValue('H'.$baris,$tm->durasi_hari);
            $object->getActiveSheet()->setCellValue('I'.$baris,$tm->presentase);
            $object->getActiveSheet()->setCellValue('J'.$baris,$tm->upload);

			$baris++;
		}
		$filename="Data_Timesheet".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Timesheet");
		header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$Writer=PHPExcel_IOFactory::createwriter($object,'Excel2007');
		$Writer->save('php://output');
		exit;
	}

}