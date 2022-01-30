<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pengelolaan Pelanggaran
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengelolaan Pelanggaran</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">Input Pelanggaran KHS</header>
                    <div class="panel-body">
                        <form class="form-horizontal tasi-form" method="post">

                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">Area</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-b-10" name="var_no_skkio">
                                        <option value>-- Area --</option>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">SPJ</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-b-10" name="var_no_skkio">
                                        <option value>-- SPJ --</option>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <div class="col-md-5 form-group">
                                        <div class="alert alert-info" id="spjdata">
                                            <strong>Silahkan Memilih No SPJ!</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Jenis Pelanggaran</label>
                                <div class="col-md-10 radio" form-group>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="1"> Tidak menggunakan 1 atau lebih peralatan kerja sesuai dengan ketentuan yang berlaku<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="2"> Melakukan penyimpangan terhadap hal-hal yang dipersyaratkan di perjanjian ini<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="3"> Melakukan penagihan melebihi 30 (tiga puluh) hari kalender sejak berakhirnya jangka waktu SPJ (Surat Pesanan Jasa)<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="4"> Tetap melakukan pelanggaran walaupun sudah diberi teguran tertulis II (Kedua)<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="5"> Mendapat teguran lisan dan / atau tertulis dari Pemda, Instansi pemerintah dan keluhan masyarakat yang berkaitan dengan proses dan/ atau hasil pekerjaan<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="6"> Tidak mengikuti SOP dan/ atau Standar Konstruksi sesuai ketentuan yang berlaku<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="7"> Tidak memenuhi persyaratan K2/K3
                                    <br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="8"> Tetap melakukan pelanggaran walaupun telah diberi Peringatan 1<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="9"> Tidak mengindahkan teguran Pemda, Instansi Pemerintah dan/ atau keluhan masyarakat dalam jangka waktu 2 hari kalender<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="10"> Mengalihkan sebagian dan/ atau keseluruhan pekerjaan kepada perusahaan lain
                                    <br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="11"> Menolak dan/ atau mengundurkan diri dari SPJ<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="12"> Terjadi kecelakaan kerja terhadap pekerja dan/ atau orang lain akibat pekerjaan yang berkaitan secara langsung maupun tidak langsung dengan Perjanjian
                                    <br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="13"> Terbukti terjadi tindakan kecurangan, penipuan, pencurian dan pemufakatan jahat<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="14"> Terbukti melakukan perbuatan persaingan usaha tidak sehat<br>
                                    <input type="radio" name="var_id_pelanggaran" id="var_id_pelanggaran" value="15"> Tidak ada pelanggaran<br>


                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-sm-2 col-sm-2 control-label">Tanggal Kejadian</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="tgl_kejadian" id="tgl_kejadian">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="var_keterangan" id="var_keterangan"></textarea>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">Evidence 1</label>
                                <div class="col-lg-10">
                                    <input type="file" name="var_eviden1" accept="image/x-png,image/jpeg,image/jpeg" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">Evidence 2</label>
                                <div class="col-lg-10">
                                    <input type="file" name="var_eviden2" accept="image/x-png,image/jpeg,image/jpeg">
                                </div>
                            </div>

                            <input type="hidden" name="var_paket" id="var_paket" />
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-info" onclick="document.getElementById('submitForm').submit()">Submit</button>
                                </div>
                            </div>