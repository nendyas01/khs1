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
        </div>

        <div class="navbar-form navbar-right">
            <?php echo form_open('kontrol_fin/search') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-success">Cari</button>
            <?php echo form_close() ?>
        </div>

        <table class="table table-striped">
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

            <?php
            $no = 1;
            foreach ($kontrol_fin as $kf) {
            ?>
                <tr>

                    <td> <?php echo $kf->tahun ?></td>
                    <td> <?php echo $kf->vendor_nama ?></td>
                    <td> <?php echo $kf->paket_deskripsi ?></td>
                    <td> <?php echo $kf->zone ?></td>
                    <td> <?php echo 'Rp ' . number_format($kf->fin_limit, 0, ',', '.') ?></td>
                    <td> <?php echo 'Rp ' . number_format($kf->fin_current, 0, ',', '.') ?></td>
                    <td> <?php echo floor($kf->fin_current / $kf->fin_limit * 100) . '%' ?>
                    <td> <?php echo 'Rp ' . number_format($kf->PAGU_KONTRAK, 0, ',', '.') ?></td>
                    <td> <?php echo floor($kf->fin_limit / $kf->PAGU_KONTRAK * 100) . '%' ?>
                    <td> <?php echo $kf->jumlah_area ?></td>

                </tr>



            <?php } ?>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </table>
    </section>