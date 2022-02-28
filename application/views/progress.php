<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pengelolaan Progress
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
                    <header class="panel-heading">Search Criteria</header>
                    <div class="panel-body">
                        <form role="form">

                            <!-- <div class="form-group">
                                <label for="lokasi_ijin">Lokasi Perijinan</label>
                                <input type="text" class="form-control" placeholder="Lokasi Perijinan" name="lokasi_ijin" id="lokasi_ijin">
                            </div>

                            <div class="form-group">
                                <label for="surat_ptsp">Surat PTSP</label>
                                <input type="text" class="form-control" placeholder="No Surat PTSP" name="no_surat_ptsp" id="no_surat_ptsp">
                            </div> -->

                            <div class="form-group">
                                <label for="area">Area</label>
                                <!-- <label class="col-sm-2 control-label col-lg-2">Area</label> -->
                                <!-- <div class="col-lg-10"> -->
                                <select class="form-control m-b-10" name="KODEAREA">
                                    <option value>-- Area --</option>
                                    <?php foreach ($areaspj as $na) : ?>
                                        <option value="<?php echo $na->AREA_KODE; ?>"> <?php echo $na->AREA_NAMA; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="vendor">Nama Vendor</label>
                                <!--  <label class=" col-sm-2 col-sm-2 control-label">Nama Vendor</label> -->
                                <!-- <div class="col-lg-10"> -->
                                <input type="text" class="form-control" name="vendor" id="vendor" placeholder="Nama Vendor">
                            </div>


                            <!-- <div class="form-group">
                                <label for="Vendor">Nama Vendor</label>
                                <input type="text" class="form-control" placeholder="Vendor" name="vendor">
                            </div> -->

                            <!-- <div class="form-group">
                                <div class="col-sm-2 control-label col-lg-2">
                                    <button type="submit" class="btn btn-info" onclick="document.getElementById('submitForm').submit()">Submit</button>
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-info"><a href="/khs/kecepatan_kerja.php"></a>Submit</button>

                        </form>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">Pengelolaan Progress</header>

                    <div class="panel-body table-responsive">
                        <font size="2" face="Arial">
                            <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nomor SPJ</th>
                                        <th>Nilai Addendum</th>
                                        <th>Tanggal Akhir</th>
                                        <th>Nama Area</th>
                                        <th>Nama Vendor</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Deskripsi Pekerjaan</th>
                                        <th>Progress Pekerjaan</th>
                                        <th>Target</th>
                                        <th>Realisasi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($progress as $pr) {
                                    ?>
                                        <tr>
                                            <td> <?php echo $pr->SPJ_NO ?></td>
                                            <td> <?php echo $pr->ADDENDUM_NILAI ?></td>
                                            <td> <?php echo $pr->SPJ_TANGGAL_AKHIR ?></td>
                                            <td> <?php echo $pr->AREA_NAMA ?></td>
                                            <td> <?php echo $pr->VENDOR_NAMA ?></td>
                                            <td> <?php echo $pr->PAKET_DESKRIPSI ?></td>
                                            <td> <?php echo $pr->SPJ_DESKRIPSI ?></td>
                                            <td> <?php echo 0, '%' ?></td>
                                            <td> <?php echo 0.0000, ' kms' ?></td>
                                            <td> <?php echo 0, ' kms' ?></td>
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
                                            dom: 'Bfrtip',
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
                        </font>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>