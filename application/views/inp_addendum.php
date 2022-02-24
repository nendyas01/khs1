<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Addendum
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengelolaan Progress</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">SELEKSI VENDOR</header>
                    <div class="panel-body">
                        <form class="form-horizontal tasi-form" method="post">

                            <div class="panel-body" onload=disableselect();>
                                <form class="form-horizontal tasi-form" method="post" action="inp_addendum_submit.php">

                                    <!-- no spj -->
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label" for="inputSuccess">Nomor SPJ</label>
                                        <div class="col-sm-10">
                                            <select class="form-control m-b-10" name="spj_no" id="spj_no">
                                                <option selected="0">-- NO SPJ --</option>
                                                <?php foreach ($nomorspj as $n) : ?>
                                                    <option value="<?php echo $n->SPJ_DESKRIPSI; ?>"> <?php echo $n->SPJ_NO; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">

                                            <div class="col-md-6 form-group">
                                                <div class="alert alert-info" id="spj_data" name="spj_data">
                                                    <strong>Silahkan Memilih No SPJ!</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Nomor Addendum</label>
                                        <div class="col-sm-10" id="no_add">
                                            <input type="text" class="form-control" name="var_no_addendum">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Nilai Addendum (Sebelum PPN)</label>
                                        <div class="col-md-2" form-group>
                                            <input type="text" class="form-control" name="min_ppn" id="min_ppn" placeholder="nilai sebelum ppn">
                                        </div>
                                        <div class="col-md-2" form-group>
                                            <input type="text" class="form-control" name="ppn" id="ppn" placeholder="ppn 10%" readonly>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" name="var_nilai_addendum" id="nilai" placeholder="nilai setelah ppn" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-sm-2 col-sm-2 control-label">Tanggal Addendum</label>
                                        <div class="col-md-2">
                                            <input type="date" class="form-control" name="var_tanggal_add" id="tgl_amd">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class=" col-sm-2 col-sm-2 control-label">Tanggal Akhir SPJ (Jika Berubah)</label>
                                        <div class="col-md-2">
                                            <input type="date" class="form-control" name="var_tanggal_akhir" id="tgl_add">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">SKKI/O Awal</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="var_skki_awal" id="skki_awal" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2">SKKI/O Tujuan</label>
                                        <div class="col-lg-10">
                                            <select class="form-control m-b-10" name="var_skki_tujuan" id="skki_tujuan">
                                                <option value="-">- (Pilih Jika SKKI/O Tidak Berubah)</option>
                                                <?php foreach ($skkio as $skk) : ?>
                                                    <option value="<?php echo $skk->SKKI_ID; ?>"> <?php echo $skk->SKKI_NO; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                                        <div class="col-sm-3">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-info" onclick="document.getElementById('submitForm').submit()">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                </section>
            </div>
        </div>
    </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div>