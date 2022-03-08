<div class="content-wrapper">
    <section class="content">

        <div class="row">
            <div class="col-md-12 ">
                <section class="panel">



                    <div class="panel-body">

                        <?php if ($this->session->flashdata('sukses')) : ?>
                            <div class="callout callout-success">
                                <h4>Sukses!</h4>
                                <?= $this->session->flashdata('sukses'); ?>
                            </div>
                        <?php elseif ($this->session->flashdata('gagal')) : ?>
                            <div class="callout callout-danger">
                                <h4>Warning!</h4>
                                <?= $this->session->flashdata('gagal'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= site_url('perijinan_add') ?>" class="form-horizontal tasi-form" method="post">

                            <div class="form-group">
                                <?php foreach ($perijinan_add as $pa) { ?>
                                    <label class="col-sm-2 col-sm-2 control-label">Nomor SPJ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="var_no_spj" id="var_no_spj" disabled value="<?php echo $pa->spj_no ?>">
                                        <?= form_error('var_no_spj', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                <?php } ?>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nomor Surat ke PTSP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="var_no_surat_ptsp" id="var_no_surat_ptsp" placeholder="Nomor Surat Ke PTSP">
                                    <?= form_error('var_no_surat_ptsp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-sm-2 col-sm-2 control-label">Tanggal Surat</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="var_tgl_surat" id="datepick">
                                    <?= form_error('var_tgl_surat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="var_pekerjaan" placeholder="Pekerjaan"></div>
                                <?= form_error('var_pekerjaan', '<small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Kota Administrasi</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b-10" name="var_kota_adm">
                                        <option value="">- Pilih Kota Administrasi -</option>>
                                        <option value="JAKARTA BARAT">Jakarta Barat</option>
                                        <option value="JAKARTA PUSAT">Jakarta Pusat</option>
                                        <option value="JAKARTA SELATAN">Jakarta Selatan</option>
                                        <option value="JAKARTA TIMUR">Jakarta Timur</option>
                                        <option value="JAKARTA UTARA">Jakarta Utara</option>
                                        <option value="KEP. SERIBU">Kepulauan Seribu</option>
                                    </select>
                                    <?= form_error('var_kota_adm', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="var_lokasi" placeholder="Lokasi"></textarea>
                                    <?= form_error('var_lokasi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button name="Submit" type="submit" class="btn btn-info">Submit</button>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-1 col-lg-10">
                                    <button onclick="goBack() " class="btn btn-info">Kembali</button>
                                    <script>
                                        function goBack() {
                                            window.history.back();
                                        }
                                    </script>

                                </div>
                            </div>
                        </form>
                    </div>

                </section>
            </div>
        </div>
    </section>
</div>