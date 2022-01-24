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
                    <th>Progress Pekerjaan</th>
                    <th>Target</th>
                    <th>Realisasi</th>
                </tr>
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
                    </tr>



                <?php } ?>

            </table>
        </div>
    </section>