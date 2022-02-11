<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Pengelolaan Data Anggaran
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Input Data Mapping Vendor</li>
    </ol>
  </section>


  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <section class="panel">


          <div class="panel-body table-responsive">
            <font size="2" face="Arial">
              <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Mapping Vendor</button>
                <thead>
                  <tr>
                    <th>Tahun</th>
                    <th>Deskripsi Paket</th>
                    <th>Nama Vendor</th>
                    <th>Area</th>
                    <th>Zona</th>

                    <th colspan="3">Aksi</th>

                  </tr>

                </thead>

                <tbody>
                  <?php
                  //$no = 1;
                  foreach ($mapping_vendor as $mv) {


                  ?>
                    <tr>
                      <td> <?php echo $mv->MAPPING_TAHUN ?></td>
                      <td> <?php echo $mv->desc_paket ?></td>
                      <td> <?php echo $mv->nama_vendor ?></td>
                      <td> <?php echo $mv->nama_area ?></td>
                      <td> <?php echo $mv->ZONE  ?></td>
                      <td><?php echo anchor('crud_skkio/detail_crud_skkio/' . $mv->desc_paket, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                      <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('crud_skkio/hapus/' . $mv->desc_paket, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <td><?php echo anchor('crud_skkio/edit_crud_skkio/' . $mv->desc_paket, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>

                    </tr>
                  <?php } ?>

                  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
                  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

                  <!--  Button untuk copy, csv, excel -->
                  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
                  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

                  <script>
                    $(document).ready(function() {
                      $('#example').DataTable();
                    });
                  </script>


                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

                  <script type="text/javascript">
                    $('#example').DataTable({
                      dom: 'lBfrtip',
                      buttons: [{
                          extend: 'copy',
                          oriented: 'potrait',
                          download: 'open',
                          widthX: '90px'
                        },
                        'csv', 'excel', 'pdf', 'print'
                      ]
                    });
                  </script>
                </tbody>
              </table>
          </div>
        </section>
      </div>
  </section>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"> Tambah Data Mapping Vendor</h4>
        </div>

        <div class="panel-body">

          <form method="post" action="<?php echo base_url() . 'mapping_vendor/tambah_aksi'; ?>">

            <div class="form-group">
              <label>TAHUN</label>
              <select class="form-control m-b-10" name="MAPPING_TAHUN">
                <option value="">-- Pilih Tahun --</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
              </select>
            </div>

            <div class="form-group">
              <label>Paket</label>
              <select class="form-control m-b-10" name="jns_paket" id="PAKET_JENIS">
                <option selected="0">-- Paket Deskripsi --</option>
                <?php foreach ($jenis_paket as $jp) : ?>
                  <option value="<?php echo $jp->PAKET_JENIS; ?>"> <?php echo $jp->PAKET_DESKRIPSI; ?></option>
                <?php endforeach; ?>
              </select>

            </div>



            <div class="form-group">
              <label>VENDOR</label><br />
              <select class="vendor form-control m-b-10" style="width:100%;" name="vendor[]" multiple>
                <option selected="0"> -- Pilih Nama Vendor -- </option>

              </select>

            </div>

            <div class="form-group">
              <label>NAMA AREA</label>
              <select class="area form-control m-b-10" style="width:100%;" name="area[]" multiple>

                <?php foreach ($nama_area as $na) : ?>
                  <option value="<?php echo $na->AREA_KODE; ?>"> <?php echo $na->AREA_NAMA; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label>ZONA</label>
              <select class="form-control m-b-10" name="ZONA">
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
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

            <link rel="stylesheet" href="//select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
            <style>
              .select2-container--default .select2-selection--multiple .select2-selection__choice {
                background-color: blue;
                border: 1px solid hsl(0, 0%, 66.7%);

              }
            </style>
            <script>
              $(document).ready(function() {
                $('#PAKET_JENIS').change(function() {
                  var id = $(this).val();
                  $.ajax({
                    url: "<?php echo base_url(); ?>/mapping_vendor/get_vendor",
                    method: "POST",
                    data: {
                      id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                      var html = '';
                      var i;
                      for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].VENDOR_ID + '">' + data[i].VENDOR_NAMA + '</option>';
                      }
                      $('.vendor').html(html);

                    }
                  });
                });

                $('.vendor').select2();

              });
            </script>


            <script>
              $(document).ready(function() {
                $('#AREA_KODE').change(function() {
                  var id = $(this).val();
                  $.ajax({
                    url: "<?php echo base_url(); ?>/mapping_vendor/getarea",
                    method: "POST",
                    data: {
                      id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                      var html = '';
                      var i;
                      for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].AREA_KODE + '">' + data[i].AREA_NAMA + '</option>';
                      }
                      $('.area').html(html);

                    }
                  });
                });

                $('.area').select2();

              });
            </script>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>