<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Kontrol Finansial
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Kontrol Finansial</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">DATA FINANSIAL VENDOR</header>

                    <div class="panel-body table-responsive">
                        <font size="2" face="Arial">
                            <table id="example" class="table table-striped table-borderedtable-responsive" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tahun</th>
                                        <th>Vendor</th>
                                        <th>Jenis Pekerjaan</th>
                                        <th>Zona</th>
                                        <th>Pagu Finansial</th>
                                        <th>Sisa Finansial</th>
                                        <th>% Pagu Finansial</th>
                                        <th>Pagu Kontrak</th>
                                        <th>% Kontrak</th>
                                        <th>Total Area</th>
                                        <th>Actions Pagu Kontrak</th>
                                        <th>Actions Pagu Rating</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kontrol_fin as $kf) {
                                        $sisa = $kf->fin_limit - $kf->fin_current;
                                        $terpakai = 0;
                                    ?>
                                        <tr>
                                            <td> <?php echo $kf->tahun ?></td>
                                            <td> <?php echo $kf->vendor_nama ?></td>
                                            <td> <?php echo $kf->paket_deskripsi ?></td>
                                            <td> <?php echo $kf->zone ?></td>
                                            <td> <?php echo 'Rp ' . number_format($kf->fin_limit, 0, ',', '.') ?></td>
                                            <td> <?php echo 'Rp ' . number_format($sisa, 0, ',', '.') ?></td>
                                            <td> <?php echo floor($sisa / $kf->fin_limit * 100) . '%' ?> </td>
                                            <td> <?php echo 'Rp ' . number_format($kf->PAGU_KONTRAK, 0, ',', '.') ?></td>
                                            <td> <?php echo floor($kf->PERSEN_KONTRAK) . '%' ?>
                                            <td> <?php echo $kf->jumlah_area ?></td>
                                            <td> <?php echo "edit" ?></td>
                                            <td> <?php echo "edit" ?></td>
                                        </tr>

                                    <?php } ?>
                                    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
                                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                                    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('#example').DataTable();
                                        });
                                    </script>

                                </tbody>
                            </table>
                    </div>
                </section>
            </div>
        </div>
    </section>