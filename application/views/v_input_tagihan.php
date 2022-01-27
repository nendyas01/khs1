<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Input Tagihan
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pengelolaan Anggaran</li>
			<li class="active">Input Tagihan</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">INPUT TAGIHAN</header>
                    <div class="panel-body">
                        <form class="form-horizontal tasi-form" method="post">

                            <!-- Textbox Nomor SPJ -->
                            <div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Nomor SPJ</label>
									<div class="col-sm-10">
									<select class="form-control m-b-10" name="var_no_spj" id="spj_no" onChange="nilai_spj_add(this.value)" >
										<?php foreach($var_no_spj as $spj): ?>
										
											<option value="<?php echo $spj->SPJ_NO?>"><?php echo $spj->SPJ_NO ?></option>
										<!-- <option value="//<?php echo $spj ['spj_no']; ?>"><?php echo $spj['spj_no'];?> </option>
										 ?>
										 -->
										<?php endforeach?>
									</select>
									</div>
                            </div>

                            <!-- Textbox Nominal Tagihan -->
                            <div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Nominal Tagihan</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="var_nominal_tagihan" id="nilai" placeholder="Nominal Tagihan">
									</div>
							</div>

                            <!-- Tanggal bayar -->
                            <div class="form-group">
									<label class=" col-sm-2 col-sm-2 control-label">Tanggal Bayar</label>
									<div class="col-md-2">
										<input type="date" class="form-control" name="var_tanggal_bayar" id="tgl_tagihan">
									</div>
							</div>

                            <!-- Textbox Nomor BASTP -->
                            <div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Nomor BASTP</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="var_no_bastp" placeholder="Nomor BASTP">
									</div>
								</div>

                            <!-- Textbox Deskripsi -->
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
    </section>
	<script>
function nilai_spj_add(value) {
	var spj_no = document.getElementById("spj_no").value;
	$.getJSON('get_nilai.php',{'spj_no' : spj_no},function(data){
	$("#nilai").val(data);
	})

	$.getJSON('get_termin.php',{'spj_no' : spj_no},function(data){
		if(data == 0) //non termin
		{//alert("non termin");
			$.getJSON('get_val.php',{'spj_no' : spj_no},function(data)
			{
				if(data < 100)
				{
				alert("Tidak Bisa Input Pembayaran, Progress Belum 100%");
				document.getElementById("submit").disabled = true;
				}
				else
				{document.getElementById("submit").disabled = false;}
			})
		}


		if(data == 1) // termin
		{//alert(" termin");
			$.getJSON('get_val.php',{'spj_no' : spj_no},function(data_progress)
			{
				$.getJSON('get_nilai_termin1.php',{'spj_no' : spj_no},function(data_termin)
				{
					if(data_progress <= data_termin)
					{
					alert("Tidak Bisa Input Pembayaran Dikarenakan Progress Belum Sesuai dengan Termin");
					document.getElementById("submit").disabled = true;
					}
					else
					{document.getElementById("submit").disabled = false;}
				})
			})
		}
		
	})		

	}
	</script>
