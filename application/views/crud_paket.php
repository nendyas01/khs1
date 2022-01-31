<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pengelolaan Paket
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Input Data Paket</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">


                    <div class="panel-body table-responsive">
                        <font size="2" face="Arial">
                            <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Paket</button>
                                <thead>
                                    <tr>
                                        <th>Paket Jenis</th>
                                        <th>Paket Deskripsi</th>
                                        <th>Satuan</th>
                                        <th>Paket Deskripsi 2</th>
                                        <th>Status</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($crud_paket as $cp) {
                                    ?>
                                        <tr>
                                            <td> <?php echo $cp->PAKET_JENIS ?></td>
                                            <td> <?php echo $cp->PAKET_DESKRIPSI ?></td>
                                            <td> <?php echo $cp->SATUAN ?></td>
                                            <td> <?php echo $cp->PAKET_DESKRIPSI2 ?></td>
                                            <td> <?php echo $cp->STATUS ?></td>
                                            <td><?php echo anchor('crud_paket/detail_crud_paket/' . $cp->PAKET_JENIS, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                            <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('crud_paket/hapus/' . $cp->PAKET_JENIS, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                            <td><?php echo anchor('crud_paket/edit_crud_paket/' . $cp->PAKET_JENIS, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                        </tr>
                                    <?php } ?>