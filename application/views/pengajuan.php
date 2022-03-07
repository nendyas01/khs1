<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pengajuan Perizinan Baru
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengajuan Perizinan Baru</li>
        </ol>
    </section>

    <section class="content">
        <font size="2" face="Arial">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading"></header>
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
                            <form class="form-horizontal tasi-form" method="post" action="pengajuan_dok_submit.php">

                                <!-- Textbox Nomor SPJ -->
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nomor SPJ</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b-10" name="var_no_spj" id="spj_no">
                                            <option selected="0">-- NO SPJ --</option>
                                            <?php foreach ($nomorspj as $ns) : ?>
                                                <option value="<?php echo $ns->SPJ_DESKRIPSI; ?>"> <?php echo $ns->SPJ_NO; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('var_no_spj', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <!-- Tanggal Penyerahan Dokumen -->
                                <div class="form-group">
                                    <label class=" col-sm-2 col-sm-2 control-label">Tanggal Penyerahan Dokumen</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" name="var_tgl_serah" id="datepick">
                                        <?= form_error('var_tgl_serah', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <!-- Jumlah Dokumen -->
                                <div class="form-group">
                                    <label class=" col-sm-2 col-sm-2 control-label">Jumlah Dokumen yang Diserahkan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="var_jumlah_dok" id="var_jumlah_dok" placeholder="Jumlah Dokumen Yang Diserahkan">
                                        <?= form_error('var_jumlah_dok', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                                    <div class="col-sm-10"><textarea class="form-control" name="var_keterangan" id="var_keterangan" placeholder="Keterangan"></textarea>
                                        <?= form_error('var_keterangan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" id="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </section>
                </div>
            </div>
    </section><!-- /.content -->
</div>

<script>
    window.onload = () => {
        $('#spj_no').change(function() {
            var id = this.value;
            // console.log(id);
            $.ajax({
                type: "POST",
                url: "<?= base_url('pengajuan/getNilai/'); ?>",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data.nilai);
                    $('#nilai').val(data.nilai);
                }
            })
        })

        $.getJSON('get_termin', {
            'spj_no': spj_no
        }, function(data) {
            if (data == 0) //non termin
            { //alert("non termin");
                $.getJSON('get_val', {
                    'spj_no': spj_no
                }, function(data) {
                    if (data < 100) {
                        alert("Tidak Bisa Input Pembayaran, Progress Belum 100%");
                        document.getElementById("submit").disabled = true;
                    } else {
                        document.getElementById("submit").disabled = false;
                    }
                })

            }

            if (data == 1) // termin
            { //alert(" termin");
                $.getJSON('get_val', {
                    'spj_no': spj_no
                }, function(data_progress) {
                    $.getJSON('get_nilai_termin1', {
                        'spj_no': spj_no
                    }, function(data_termin) {
                        if (data_progress <= data_termin) {
                            alert("Tidak Bisa Input Pembayaran Dikarenakan Progress Belum Sesuai dengan Termin");
                            document.getElementById("submit").disabled = true;
                        } else {
                            document.getElementById("submit").disabled = false;
                        }
                    })
                })
            }

        })



    }
</script>