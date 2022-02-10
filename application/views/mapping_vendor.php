<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Addendum
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
                    <div class="col-sm-10">
                      <select class="form-control" id="AREA_KODE" name="AREA_KODE">
                        <option selected="0">-- Pilih Nama Area --</option>
                        <?php foreach ($nama_area as $area) : ?>
                          <option value="<?php echo $area->AREA_KODE; ?>"> <?php echo $area->AREA_NAMA; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                  <div class="panel-body table-responsive">
                    <font size="2" face="Arial">
                      <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data SKKI/O</button>
                        <thead>
                          <tr>
                            <th>Tahun</th>
                            <th>Deskripsi Paket</th>
                            <th>Nama Vendor</th>
                            <th>Areaa</th>
                            <th>Zona</th>

                            <th colspan="3">Aksi</th>
                            >>>>>>> 9f549d379b831068ba59d6cd6f72520bd0e80892

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
                                <button type="submit" id="submit" class="btn btn-info" onclick="document.getElementById('submitForm').submit()">Submit</button>
                              </div>
                            </div>

<<<<<<< HEAD


           
=======
                </form>
              </div>
        </section>
>>>>>>> 4426e7d6626be4f763c562b300b56ef4f9fb2335
      </div>
    </div>
  </section><!-- /.content -->
  </aside><!-- /.right-side -->


</div>
<<<<<<< HEAD </div>

  <<<<<<< HEAD=======<div class="form-group">
    <label>Paket Desc</label>
    <input type="text" name="PAKET_JENIS" class="form-control">
    </div>

    <div class="form-group">
      <label>VENDOR</label>
      <input type="text" name="VENDOR_ID" class="form-control">
    </div>

    <div class="form-group">
      <label>AREA</label>
      <select class="form-control" id="AREA_KODE" name="AREA_KODE">
        <option selected="0">- Pilih Nama Area -</option>
        <?php foreach ($nama_area as $area) : ?>
          <option value="<?php echo $area->AREA_KODE; ?>"> <?php echo $area->AREA_NAMA; ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group">
      <label>Zona</label>
      <input type="number_format" name="ZONE" class="form-control">
    </div>



    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>