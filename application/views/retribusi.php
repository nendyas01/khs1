<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Retribusi
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Retribusi</li>
        </ol>
    </section>

    <section class="content">
        <font size="2" face="Arial">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">Pembayaran Retribusi</header>
                        <div class="panel-body" onload=disableselect();>
                            <form class="form-horizontal tasi-form" method="post" action="bayar_retribusi_submit.php">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" for="inputSuccess">No Surat Ke PTSP</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="var_no_surat_ptsp">
                                            <option>- Pilih No Surat Ke PTSP -</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" col-sm-2 col-sm-2 control-label">Tanggal Bayar Retribusi</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="var_tgl_bayar_retribusi" id="datepick">
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