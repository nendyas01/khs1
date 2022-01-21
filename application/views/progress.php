<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Financial Vendor
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> progress</a></li>
            <li class="active">Progress Vendor</li>
        </ol>
    </section>
    <section class="content">
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Financial Vendor</button> -->
        <a class="btn btn-danger " style="float:right; margin:5px;" href="<?php echo base_url('progress/print') ?>"><i class="fa fa-print"> Print</i></a>

        <div class="dropdown inline" style="float:right; margin:5px;">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <i class="fa fa-download"></i>
                Export
                <span class="caret"></span>
            </button>
        </div>

        <table class="table table-striped">
            <tr>
                <th>Vendor ID</th>

            </tr>
            <?php
            $vendor_id = 1;
            foreach ($progress as $k) : ?>
                <tr>
                    <td> <?php echo $spj_no ?></td>
                    <td><?php echo anchor('progress/detail/' . $k->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>

                    <td><?php echo anchor('progress/edit/' . $k->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>