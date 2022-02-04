<div class="content-wrapper">
    <section class="content-header">
        <h1>
            SKRD
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">SKRD</li>
        </ol>
    </section>

    <font size="2" face="Arial">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">Input SKRD</header>
                        <div class="panel-body">
                            <form class="form-horizontal tasi-form" method="post" action="skrd_input_submit.php">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">No. Surat Ke PTSP</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="var_no_surat_ptsp">
                                            <option>- Pilih No Surat Ke PTSP -</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" col-sm-2 col-sm-2 control-label">Tanggal Terbit SKRD</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="var_tgl_terbit_skrd" id="datepick">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Biaya Retribusi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="var_biaya_retribusi" placeholder="Biaya Retribusi"></input>
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