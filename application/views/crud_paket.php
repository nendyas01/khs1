<div class="content-wrapper">
    <section class="content-header">
        <h1>
            DATA MASTER PAKET
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Master Paket</li>
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
                                        <th colspan="3">Aksi</th>
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

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Tambah Data Paket</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() . 'crud_skkio/tambah_aksi'; ?>">
                        <div class="form-group">
                            <label>Paket Jenis</label>
                            <input type="text" name="id_anggaran" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Paket Deskripsi</label>
                            <input type="text" name="no_surat" class="form-control">

                            <div class="form-group">
                                <label>Satuan </label>
                                <input type="text" name="nama_pekerjaan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Paket Deskripsi 2</label>
                                <input type="text" name="pemberi_kerja" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="pic" class="form-control">
                            </div>

                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>