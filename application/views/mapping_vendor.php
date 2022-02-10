<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah Mapping Vendor
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
                            

                            <div class="panel-body" onload=disableselect();>
                                <form class="form-horizontal tasi-form" method="post" action="inp_addendum_submit.php">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2">TAHUN</label>
                                        <div class="col-lg-10">
                                            <select class="form-control m-b-10" name="TAHUN">
                                                <option value="">-- Pilih Tahun --</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-10">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Paket</label>
                                        <div class="col-sm-10" id="no_add">
                                            <input type="text" class="form-control" name="var_no_addendum">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">VENDOR</label>
                                        <div class="col-sm-10" id="no_add">
                                            <input type="text" class="form-control" name="var_no_addendum">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">NAMA AREA</label>
                                        <div class="col-sm-10" >
                                             <select class="form-control" id="AREA_KODE" name="AREA_KODE">
                                                <option selected="0">-- Pilih Nama Area --</option>
                                                    <?php foreach ($nama_area as $area) : ?>
                                                        <option value="<?php echo $area->AREA_KODE; ?>"> <?php echo $area->AREA_NAMA; ?></option>
                                                 <?php endforeach; ?>
                                            </select>
                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2">ZONA</label>
                                        <div class="col-lg-10">
                                            <select class="form-control m-b-10" name="TAHUN">
                                                <option value="">-- Pilih Zona --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    
                                    		
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" id="submit" class="btn btn-info" onclick="document.getElementById('submitForm').submit()">Tambah Data</button>
									</div>
								</div>
                                    
                                </form>
                            </div>
                </section>
            </div>
        </div>
    </section><!-- /.content -->
    </aside><!-- /.right-side -->


</div>
</div>



           
      </div>
    </div>
  </div>
</div>

