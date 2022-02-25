<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Perijinan
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">PERIJINAN</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="no_spj">No. SPJ</label>
                                <input type="text" class="form-control" placeholder="No. SPJ" name="no_spj">
                            </div>
                            <button type="submit" class="btn btn-info"><a href="/khs/list_amandemen.php"></a>Submit</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">Perijinan</header>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No. SPJ</th>
                                    <th>Surat SPJ yang telah dibuat</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($crud_area as $car) {
                                ?>
                                    <tr>
                                        <td> <?php echo $no++ ?></td>
                                        <td> <?php echo $car->AREA_KODE ?></td>
                                        <td> <?php echo $car->AREA_NAMA ?></td>
                                        <td><?php echo anchor('crud_area/detail_crud_area/' . $car->AREA_KODE, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
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
        </div>

</div>