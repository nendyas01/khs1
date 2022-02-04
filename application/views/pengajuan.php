<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pengajuan Perijinan Baru
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengajuan Perijinan Baru</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">Penyerahan Dokumen </header>
                    <div class="panel-body">
                        <form class="form-horizontal tasi-form" method="post" action="penyerahan_dok_submit.php">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">No. SPJ</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="var_no_spj">
                                        <option>- Pilih No SPJ -</option>

                                        <option value='<?php echo $current_spj_no; ?>'><?php echo $current_spj_no; ?></option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-sm-2 col-sm-2 control-label">Tanggal Penyerahan Dokumen</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="var_tgl_serah" id="datepick">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-sm-2 col-sm-2 control-label">Jumlah Dokumen yang Diserahkan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="var_jumlah_dok" id="var_jumlah_dok" placeholder="Jumlah Dokumen Yang Diserahkan">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                                <div class="col-sm-10"><textarea class="form-control" name="var_keterangan" id="var_keterangan" placeholder="Keterangan"></textarea></div>
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