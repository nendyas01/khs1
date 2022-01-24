<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Progress Vendor
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Progress Vendor</li>
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

        <div style="overflow-x:auto;">

            <table class="table table-striped">
                <tr>
                    <th>Nomor SPJ</th>
                    <th>Nilai Addendum</th>
                    <th>Tanggal Akhir</th>
                    <th>Nama Area</th>
                    <th>Nama Vendor</th>
                    <th>Jenis Pekerjaan</th>
                    <th>Deskripsi Pekerjaan</th>
                </tr>
                <?php
                $no = 1;
                foreach ($progress as $pr) {
                ?>
                    <tr>
                        <td> <?php echo $pr->SPJ_NO ?></td>
                        <td> <?php echo $pr->ADDENDUM_NILAI ?></td>
                        <td> <?php echo $pr->ADDENDUM_TANGGAL_AKHIR ?></td>
                    </tr>



                <?php } ?>

            </table>
        </div>
    </section>