<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Input SPJ KHS
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Progress Pekerjaan</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">Progress Pekerjaan</header>
                    <div class="panel-body" onload=disableselect();>
                        <form class="form-horizontal tasi-form" method="post" action="inp_progress_kerja_submit.php">

                            <!-- no spj -->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" for="inputSuccess">Nomor SPJ</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b-10" name="var_no_spj" id="spj_no">
                                        <option value="0">- NO SPJ -</option>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label"></label>
                                <div class="col-sm-10">

                                    <div class="col-md-6 form-group">
                                        <div class="alert alert-info" id="spjdata">
                                            <strong>Silahkan Memilih No SPJ!</strong>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Progress Pekerjaan</label>
                                <div class="col-sm-10">
                                    <!--<input type="text" class="form-control" name="var_progress">-->
                                    <select class="form-control m-b-10" name="var_progress">
                                        <?php
                                        for ($i = 5; $i <= 100; $i += 5) {
                                            echo "<option value='$i'>$i%</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Realisasi</label>
                                <div class="col-sm-2">
                                    <div class="input-group m-b-10">
                                        <input type="text" class="form-control" name="var_realisasi" id="realisasi">
                                        <span class="input-group-addon" id="satuan"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-sm-2 col-sm-2 control-label">Tanggal</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="var_tanggal" id="tgl_progress">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nama Pengawas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="var_nama_pengawas">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Komentar</label>
                                <div class="col-sm-3">
                                    <textarea rows="2" cols="123" name="var_deskripsi"></textarea>
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
</div>