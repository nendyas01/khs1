<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Mapping Vendor
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"></li>
    </ol>
  </section>


  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <section class="panel">


          <div class="panel-body table-responsive">
            <font size="2" face="Arial">
              <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data SKKI/O</button>
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
                      <td> <?php echo $mv->PAKET_JENIS ?></td>
                      <td> <?php echo $mv->VENDOR_ID ?></td>
                      <td> <?php echo $mv->AREA_KODE ?></td>
                      <td> <?php echo $mv->ZONE  ?></td>
                      <td><?php echo anchor('crud_skkio/detail_crud_skkio/' . $mv->AREA_KODE, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                      <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('crud_skkio/hapus/' . $mv->AREA_KODE, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                      <td><?php echo anchor('crud_skkio/edit_crud_skkio/' . $mv->AREA_KODE, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>

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
          <h4 class="modal-title" id="myModalLabel"> Tambah Data mapping vendorO</h4>
        </div>

        <div class="modal-body">
          <form method="post" action="<?php echo base_url() . 'mapping_vendor/tambah_aksi'; ?>">

            <div class="form-group">
              <label>Tahun</label>
              <input type="number_format" name="MAPPING_TAHUN" class="form-control">
            </div>

            
            <div class="form-group">
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