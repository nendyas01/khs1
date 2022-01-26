<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Input Tagihan
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengelolaan Anggaran</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">Input Tagihan</header>
                    <div class="panel-body" onload=disableselect();>
                        <form class="form-horizontal tasi-form" method="post" action="v_input_tagihan.php">

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
									<label class="col-sm-2 col-sm-2 control-label">Nominal Tagihan</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="var_nominal_tagihan" id="nilai" placeholder="Nominal Tagihan">
									</div>
								</div>
										
								<div class="form-group">
									<label class=" col-sm-2 col-sm-2 control-label">Tanggal Bayar</label>
									<div class="col-md-2">
										<input type="date" class="form-control" name="var_tanggal_bayar" id="tgl_tagihan">
									</div>
								</div>
										
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Nomor BASTP</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="var_no_bastp" placeholder="Nomor BASTP">
									</div>
								</div>
										
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
									<div class="col-sm-10">
										<textarea rows="2" cols="125" name="var_deskripsi" placeholder="Nomor SAP"></textarea>
									</div>
								</div>
										
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" id="submit" class="btn btn-info" onclick="document.getElementById('submitForm').submit()">Submit</button>
									</div>
								</div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section><!-- /.content -->
</div>

<?php include("lib/footer.php"); ?>
<script>
    function dateFormat(date) {
        var d = date.getDate().toString();
        d = d.length > 1 ? d : '0' + d;
        var m = (date.getMonth() + 1).toString();
        m = m.length > 1 ? m : '0' + m;
        var y = date.getFullYear().toString();
        return d + '-' + m + '-' + y;
    }

    $("#spj_no").change(function() {
        var spj_no = $("#spj_no").val();
        var area = "<?php echo $_SESSION['area'] ?>";

        if (spj_no == 0) {
            $("#spjdata").html("<strong>Pilih No SPJ!</strong>");
        } else {
            $.getJSON('get_satuan_new.php', {
                'spj_no': spj_no
            }, function(data) {
                span = document.getElementById("satuan");
                var str = JSON.stringify(data);
                if (str == "[[null]]") {
                    var satuan_json = "-";
                } else {
                    var satuan_json = str.replace('[["', " ").replace('"]]', " ");
                }

                span.innerText = satuan_json;
            })

            $.getJSON('getspj.php', {
                'no_spj': spj_no,
                'area': area
            }, function(data) {
                var showData = "";
                $.each(data, function(index, value) {

                    var d_awal = new Date(value.SPJ_TANGGAL_MULAI);
                    var d_akhir = new Date(value.SPJ_TANGGAL_AKHIR);
                    var akhir = dateFormat(d_akhir);
                    var awal = dateFormat(d_awal);
                    var nilai_spj = numeral(value.SPJ_NILAI);
                    nilai_spj = nilai_spj.format('0,0');
                    var paket = value.PAKET_JENIS;

                    showData += "<table><tr><td>No SPJ</td><td>:</td><td>" + value.SPJ_NO + "</td></tr><tr><td>Nama Vendor</td><td>:</td><td>" + value.VENDOR_NAMA + "</td></tr><tr><td>Nilai SPJ</td><td>:</td><td>Rp." + nilai_spj + "</td></tr><tr><td>Tanggal Awal</td><td>:</td><td>" + awal + "</td></tr><tr><td>Tanggal Akhir</td><td>:</td><td>" + akhir + "</td></tr></table>";
                })
                $("#spjdata").html(showData);
            })
        }
    })