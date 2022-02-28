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

                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">Nomor Sanksi</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-b-10" name="var_no_skkio">
                                        <option value>-- Nomor Sanksi --</option>


                                    </select>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">NOMOR SANKSI</label>
                                <div class="col-lg-10">
                                    <select class="form-control m-b-10" id="tgl_upload" name="tgl_upload">
                                        <option selected="0">-- Nomor Sanksi --</option>
                                        <?php foreach ($nomor_sanksi as $ns) : ?>
                                            <option value="<?php echo $ns->id_sanksi; ?>"> <?php echo $ns->tgl_upload; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <div class="col-md-5 form-group">
                                        <div class="alert alert-info" id="spjdata">
                                            <strong>Silahkan Memilih No Sanksi</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label col-lg-2">File Sanksi *</label>
                                <div class="col-lg-10">
                                    <?= $this->session->flashdata('message'); ?>
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <input type="file" name="image" class="dropify">
                                        </div>


                                        <p class="help-block">* : surat sudah bertanda tangan dan berstempel</p>
                                </div>
                            </div>
                            <input type="hidden" name="id_vendor" id="id_vendor">
                            <input type="hidden" name="no_spj" id="no_spj">

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-info" onclick="document.getElementById('submitForm').submit()">Submit</button>
                                </div>
                            </div>

                            <script src="<?= base_url('assets/bootstrap/jquery/') . 'jquery3.js'; ?>"></script>
                            <script src="<?= base_url('assets/bootstrap/js/') . 'bootstrap.js'; ?>"></script>
                            <script src="<?= base_url('assets/dropify/js/') . 'dropify.js'; ?>"></script>
                            <script>
                                $(document).ready(function() {
                                    $('.dropify').dropify({
                                        messages: {
                                            default: 'Drag and drop a file here or click',
                                            replace: 'Ganti',
                                            remove: 'Hapus',
                                            error: 'error'
                                        }
                                    });
                                });
                            </script>

                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>