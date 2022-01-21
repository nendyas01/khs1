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

        <div style="overflow-x:auto;">

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
                        <td> <?php echo $kf->nama_vendor ?></td>
                        <td> <?php echo $kf->jenis_pekerjaan ?></td>
                        <td> <?php echo $kf->ZONE ?></td>
                        <td> <?php echo $kf->pagu_fin ?></td>
                        <td> <?php echo $kf->sisa_fin ?></td>
                    </tr>



                <?php } ?>
                <tr>

                    <!-- <td><?php echo $current_rating; ?></td> -->
                    <td align="right"><?php echo "Rp " . $pagu_fin; ?></td>
                    <td align="right"><?php echo "Rp " . $sisa_fin; ?></td>
                    <td align="right"><span class="<?php echo $class; ?>">
                            <font size="1" face="Arial"><?php echo $b; ?>%</font>

                            <?php if ($_SESSION['role'] == 1) { ?>
                    <td><a href="pagu_kontrak_edit.php?vendor_id=<?php echo $current_no_vendor ?>&paket_id=<?php echo $paket_jenis ?>">Edit</a></td>
                    <td><a href="pagu_rating_edit.php?vendor_id=<?php echo $current_no_vendor ?>">Edit</a></td>
                <?php } else if ($_SESSION['role'] == 9) { ?>
                    <td><a href="pagu_kontrak_edit.php?vendor_id=<?php echo $current_no_vendor ?>&paket_id=<?php echo $paket_jenis ?>">Edit</a></td>
                <?php } else if ($_SESSION['role'] == 10) { ?>
                    <td><a href="pagu_rating_edit.php?vendor_id=<?php echo $current_no_vendor ?>">Edit</a></td>
                <?php } ?>
                </tr>


            </table>
        </div>
    </section>