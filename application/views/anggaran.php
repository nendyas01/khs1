<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Pengelolaan Data Anggaran
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pengelolaan Data Anggaran</li>
    </ol>
  </section>

  <!-- <section class="content">
        <a class="btn btn-danger " style="float:right; margin:5px;"><i class="fa fa-print"> Print</i></a>
        <div class="dropdown inline" style="float:right; margin:5px;  ">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-download"></i>
                Export
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li>>PDF<< /li>
                <li>>Excel<< /li>
            </ul>
        </div> -->

  <!-- <div class="navbar-form navbar-right">
           echo form_open('kontrol_fin/search')
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
             echo form_close() 
        </div> -->

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <section class="panel">


          <div class="panel-body table-responsive">
            <font size="2" face="Arial">
              <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Area</th>
                    <th>No SKKO/SKKI</th>
                    <th>Nilai SKKO/I</th>
                    <th>Sisa SKKO/I</th>
                    <th>Jumlah SPJ Terbit</th>
                    <th>Total Nilai SPJ</th>
                    <th>Penyerapan SKKO/I (%)</th>
                    <th>Pembayaran SPJ (%)</th>
                    <th>Pembayaran SKKO/I (%)</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($anggaran as $a) {
                    $sisa = $a->SKKI_NILAI - $a->SKKI_TERPAKAI;
                    $pembayaran_spj = 0;
                    if ($a->total_spj * 100 > 0) {
                      $pembayaran_spj = floor($a->total_bayar / $a->total_spj * 100);
                    }

                    // $total_spj_x_100 = $a->total_spj*100;
                  ?>
                    <tr>
                      <td> <?php echo $no++ ?></td>
                      <td> <?php echo $a->nama_area ?></td>
                      <td> <?php echo $a->SKKI_NO ?></td>
                      <td> <?php echo 'Rp ' . number_format($a->SKKI_NILAI, 0, ',', '.') ?></td>
                      <td> <?php echo 'Rp ' . number_format($sisa, 0, ',', '.') ?></td>
                      <td> <?php echo $a->jml_spj ?></td>
                      <td> <?php echo 'Rp ' . number_format($a->total_spj, 0, ',', '.') ?></td>
                      <td> <?php echo floor($a->total_spj / $a->SKKI_NILAI * 100) . '%' ?>
                      <td> <?php echo $pembayaran_spj . '%' ?>
                      <td> <?php echo floor($a->total_bayar / $a->SKKI_NILAI * 100) . '%' ?>

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