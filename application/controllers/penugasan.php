<?php

class Penugasan extends CI_Controller{
    public function index()
    {
        $data['penugasan'] = $this->m_penugasan->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('penugasan',$data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $no_surat = $this->input->post('no_surat');
        $tgl_surat = $this->input->post('tgl_surat');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $pemberi_kerja = $this->input->post('pemberi_kerja');
        $kategori = $this->input->post('kategori');
        $pic = $this->input->post('pic');
        $tgl_target = $this->input->post('tgl_target');


        $data = array(
            'no_surat'              => $no_surat,
            'tgl_surat'             => $tgl_surat,
            'nama_pekerjaan'        => $nama_pekerjaan,
            'pemberi_kerja'         => $pemberi_kerja,
            'kategori'              => $kategori,
            'pic'                   => $pic,
            'tgl_target'            => $tgl_target,
        );

        $this->m_penugasan->input_data($data, 'penugasan');
        redirect('penugasan/index');
    }

    public function hapus ($id)
    {
        $where = array ('id' => $id);
        $this->m_penugasan->hapus_data($where, 'penugasan');
        redirect ('penugasan/index');
    }

    public function edit_pg ($id)
    {
        $where = array('id' =>$id);
        $data['penugasan'] = $this->m_penugasan->edit_data($where, 'penugasan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_pg', $data);
        $this->load->view('templates/footer');
    }

    public function update ()
    {
        $id = $this->input->post('id');
        $no_surat = $this->input->post('no_surat');
        $tgl_surat = $this->input->post('tgl_surat');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $pemberi_kerja = $this->input->post('pemberi_kerja');
        $kategori = $this->input->post('kategori');
        $pic = $this->input->post('pic');
        $tgl_target = $this->input->post('tgl_target');

        $data = array(
            'no_surat'              => $no_surat,
            'tgl_surat'             => $tgl_surat,
            'nama_pekerjaan'        => $nama_pekerjaan,
            'pemberi_kerja'         => $pemberi_kerja,
            'kategori'              => $kategori,
            'pic'                   => $pic,
            'tgl_target'            => $tgl_target,
        );

        $where = array('id' => $id);

        $this->m_penugasan->update_data($where,$data,'penugasan');
        redirect('penugasan/index');
    }

    public function detail_pg($id){
        $this->load->model('m_penugasan');
        $detail_pg = $this->m_penugasan->detail_data($id);
        $data['detail_pg'] = $detail_pg;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_pg', $data);
        $this->load->view('templates/footer');
    }

    public function print(){
        $data['penugasan'] = $this->m_penugasan->tampil_data('penugasan')->result();
        $this->load->view('print_pg',$data);

    }

    public function pdf_pg(){
        $this->load->library('dompdf_gen');

        $data['penugasan'] = $this->m_penugasan->tampil_data('penugasan')->result();
        
        $this->load->view('laporan_pdf_pg',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_data_penugasan.pdf", array('Attachment' =>0));
    }

    public function excel()
	{
		$data['penugasan'] = $this->m_penugasan->tampil_data('penugasan')->result();
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		$object = new PHPExcel();

		$object->getProperties()->setCreator("Kelompok 4");
		$object->getProperties()->setLastModifiedBy("Kelompok 4");
		$object->getProperties()->setTitle("Data Penugasan Pt.Icon Plus");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','NO');
		$object->getActiveSheet()->setCellValue('B1','No Surat');
		$object->getActiveSheet()->setCellValue('C1','Tanggal Surat');
		$object->getActiveSheet()->setCellValue('D1','Nama Pekerjaan');
		$object->getActiveSheet()->setCellValue('E1','Pemberi Kerja');
        $object->getActiveSheet()->setCellValue('F1','Kategori');
		$object->getActiveSheet()->setCellValue('G1','PIC');
        $object->getActiveSheet()->setCellValue('H1','Tanggal Target');

		$baris = 2;
		$no = 1;
		foreach ($data['penugasan'] as $pg) {
			# code...
			$object->getActiveSheet()->setCellValue('A'.$baris,$no++); 
			$object->getActiveSheet()->setCellValue('B'.$baris,$pg->no_surat); 
			$object->getActiveSheet()->setCellValue('C'.$baris,$pg->tgl_surat); 
			$object->getActiveSheet()->setCellValue('D'.$baris,$pg->nama_pekerjaan); 
			$object->getActiveSheet()->setCellValue('E'.$baris,$pg->pemberi_kerja); 
            $object->getActiveSheet()->setCellValue('F'.$baris,$pg->kategori); 
			$object->getActiveSheet()->setCellValue('G'.$baris,$pg->pic); 
            $object->getActiveSheet()->setCellValue('H'.$baris,$pg->tgl_target);

			$baris++;
		}
		$filename="Data_Penugasan".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Penugasan");
		header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$Writer=PHPExcel_IOFactory::createwriter($object,'Excel2007');
		$Writer->save('php://output');
		exit;
	}
}