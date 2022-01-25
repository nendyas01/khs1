<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Input SPJ KHS
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

                            <!-- Textbox Nama Manager -->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nama Manager</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="var_nama_manager">
                                </div>
                            </div>

                            <!-- Textbox Direksi Pekerjaan -->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Direksi Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="var_dir_pkj">
                                </div>
                            </div>

                            <!-- Textbox Direksi lapangan -->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Direksi Lapangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="var_dir_lpg">
                                </div>
                            </div>

                            <!-- Textbox Nilai SPJ -->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nilai SPJ (Sebelum PPN)</label>
                                <div class="col-md-2" form-group>
                                    <input type="text" class="form-control" name="min_ppn" id="min_ppn" placeholder="nilai sebelum ppn">
                                </div>
                                <div class="col-md-2" form-group>
                                    <input type="text" class="form-control" name="ppn" id="ppn" placeholder="ppn 10%" readonly>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="var_nilai_spj" id="nilai" placeholder="nilai setelah ppn" readonly>
                                </div>
                            </div>

                            <!-- Textbox Lokasi Pekerjaan -->

                            <!-- Textbox Nomor SKKI/O -->

                            <!-- Textbox Jenis Pekerjaan -->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Jenis Pekerjaan</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="gangguan" value="0" checked="checked">Non Gangguan
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gangguan" value="1">Gangguan
                                    </label>
                                </div>
                            </div>

                            <!-- Textbox Paket Pekerjaan -->

                            <!-- tahun skarang date('Y'); -->
                            <div id="update"></div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Vendor Yang Tersedia</label>
                                <div class="col-sm-10">
                                    <table id="availablevendor" class="table table-condensed">
                                        <tr>
                                            <td>Pilih Paket Pekerjaan</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" name="var_deskripsi_pekerjaan">Deskripsi Pekerjaan</label>
                                <div class="col-sm-3">
                                    <textarea rows="3" cols="123" name="var_deskripsi_pekerjaan"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nomor SPJ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="var_no_spj">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Target Volume</label>
                                <div class="col-sm-2">
                                    <div class="input-group m-b-10">
                                        <input type="text" class="form-control" name="var_target" id="target">
                                        <span class="input-group-addon" id="satuan"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Metode Pembayaran</label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="option_bayar" id="termin" value="1" onClick="javascript:check_termin();">Termin
                                    </label>
                                </div>
                            </div>

                            <div class="form-group" id="termin_group" style="display:none;">
                                <label class="col-sm-2 col-sm-2 control-label"></label>
                                <div class="col-md-1" form-group>
                                    <input type="text" class="form-control" name="var_termin_1" id="termin1">
                                </div>
                                <div class="col-md-1" form-group>
                                    <input type="text" class="form-control" name="var_termin_2" id="termin2">
                                </div>
                                <div class="col-md-1" form-group>
                                    <input type="text" class="form-control" name="var_termin_3" id="termin3">
                                </div>
                                <div class="col-md-1" form-group>
                                    <input type="text" class="form-control" name="var_termin_4" id="termin4">
                                </div>
                                <div class="col-md-1" form-group>
                                    <input type="text" class="form-control" name="var_termin_5" id="termin5">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label"></label>
                                <div class="col-sm-2">
                                    <label class="radio-inline">
                                        <input type="radio" name="option_bayar" id="non_termin" value="0" onClick="javascript:check_termin();">Non Termin
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">SPJ Berlaku Mulai</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="var_mulai_berlaku" id="var_mulai_berlaku">
                                </div>

                                <label class=" col-sm-2 col-sm-2 control-label">Sampai Dengan</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="var_akhir_berlaku" id="var_akhir_berlaku">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-info" onClick="document.getElementById('submitForm').submit()">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </section>
            </div>

        </div>
    </section>