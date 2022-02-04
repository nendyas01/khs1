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
                    <header class="panel-heading">Input Sanksi SPJ</header>
                    <div class="panel-body">
                        <form class="form-horizontal tasi-form" method="post">

                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">Area</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-b-10" name="AREA">
                                        <option value>-- Area --</option>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">SPJ</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-b-10" name="SPJ">
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
                                <label class="col-sm-2 col-sm-2 control-label">Jenis Sanksi</label>
                                <div class="col-sm-10" id="no_add">
                                    <input type="radio" name="jenis_sanksi" value="P1-SPJ" checked=""> Tidak Dapat Menyelesaikan Pekerjaan Sesuai Waktu
                                </div>

                                <div class="col-sm-10">
                                    <input type="radio" name="jenis_sanksi" value="PUTUS-SPJ"> Mendapat Denda Maksimal SPJ
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                                <div class="col-md-2" form-group>
                                    <input type="date" class="form-control" name="tanggal_sanksi_spj" id="tanggal_sanksi_spj">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-sm-2 col-sm-2 control-label">Keterangan</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="var_keterangan" id="var_keterangan">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Evidence</label>
                                <div class="col-sm-10">
                                    <input type="file" name="var_eviden" id="var_eviden">
                                </div>
                            </div>

                            <input type="hidden" name="var_paket" id="var_paket" />
                            <input type="hidden" name="var_nama_vendor" id="var_nama_vendor" />
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
    </section>
</div>