<?php

class Karyawan extends CI_Controller{
    public function index()
    {
        $data['karyawan'] = $this->m_karyawan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('karyawan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $nama = $this->input->post('nama');
        $id_karyawan = $this->input->post('id_karyawan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $divisi = $this->input->post('divisi');
        $jabatan = $this->input->post('jabatan');

        $data = array(
            'nama'          => $nama,
            'id_karyawan'   => $id_karyawan,
            'tgl_lahir'     => $tgl_lahir,
            'alamat'        => $alamat,
            'divisi'        => $divisi,
            'jabatan'       => $jabatan,
        );

        $this->m_karyawan->input_data($data, 'karyawan');
        redirect('karyawan/index');
    }

    public function hapus ($id)
    {
        $where = array ('id' => $id);
        $this->m_karyawan->hapus_data($where, 'karyawan');
        redirect ('karyawan/index');
    }

    public function edit ($id)
    {
        $where = array('id' =>$id);
        $data['karyawan'] = $this->m_karyawan->edit_data($where, 'karyawan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
    }

    public function update ()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $id_karyawan = $this->input->post('id_karyawan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $divisi = $this->input->post('divisi');
        $jabatan = $this->input->post('jabatan');

        $data = array(
            'nama'          => $nama,
            'id_karyawan'   => $id_karyawan,
            'tgl_lahir'     => $tgl_lahir,
            'alamat'        => $alamat,
            'divisi'        => $divisi,
            'jabatan'       => $jabatan
        );

        $where = array('id' => $id);

        $this->m_karyawan->update_data($where,$data,'karyawan');
        redirect('karyawan/index');
    }

    public function detail($id){
        $this->load->model('m_karyawan');
        $detail = $this->m_karyawan->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }

    public function print(){
        $data['karyawan'] = $this->m_karyawan->tampil_data('karyawan')->result();
        $this->load->view('print_karyawan',$data);

    }

    public function pdf(){
        $this->load->library('dompdf_gen');

        $data['karyawan'] = $this->m_karyawan->tampil_data('karyawan')->result();
        
        $this->load->view('laporan_pdf',$data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size,$orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_karyawan.pdf", array('Attachment' =>0));
    }

    public function excel()
	{
		$data['karyawan'] = $this->m_karyawan->tampil_data('karyawan')->result();
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
		$object = new PHPExcel();

		$object->getProperties()->setCreator("Kelompok 4");
		$object->getProperties()->setLastModifiedBy("Kelompok 4");
		$object->getProperties()->setTitle("Data Karyawan Pt.Icon Plus");

		$object->setActiveSheetIndex(0);

		$object->getActiveSheet()->setCellValue('A1','NO');
		$object->getActiveSheet()->setCellValue('B1','Nama');
		$object->getActiveSheet()->setCellValue('C1','ID Karyawan');
		$object->getActiveSheet()->setCellValue('D1','Tgl Lahir');
		$object->getActiveSheet()->setCellValue('E1','Alamat');
        $object->getActiveSheet()->setCellValue('F1','Divisi');
		$object->getActiveSheet()->setCellValue('G1','Jabatan');

		$baris = 2;
		$no = 1;
		foreach ($data['karyawan'] as $k) {
			# code...
			$object->getActiveSheet()->setCellValue('A'.$baris,$no++); 
			$object->getActiveSheet()->setCellValue('B'.$baris,$k->nama); 
			$object->getActiveSheet()->setCellValue('C'.$baris,$k->id_karyawan); 
			$object->getActiveSheet()->setCellValue('D'.$baris,$k->tgl_lahir); 
			$object->getActiveSheet()->setCellValue('E'.$baris,$k->alamat); 
            $object->getActiveSheet()->setCellValue('F'.$baris,$k->divisi); 
			$object->getActiveSheet()->setCellValue('G'.$baris,$k->jabatan); 

			$baris++;
		}
		$filename="Data_Karyawan".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Karyawan");
		header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$Writer=PHPExcel_IOFactory::createwriter($object,'Excel2007');
		$Writer->save('php://output');
		exit;
	}
}