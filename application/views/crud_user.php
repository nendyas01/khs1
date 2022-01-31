<div class="content-wrapper">
    <section class="content-header">
        <h1>
            DATA MASTER USER
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Master User</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">


                    <div class="panel-body table-responsive">
                        <font size="2" face="Arial">
                            <table id="example" class="table table-striped table-bordered table-responsive" cellspacing="0">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data User</button>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>ID Role</th>
                                        <th>Kode Area</th>
                                        <th colspan="3">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($crud_user as $cu) {
                                    ?>
                                        <tr>
                                            <td> <?php echo $no++ ?></td>
                                            <td> <?php echo $cu->USERNAME ?></td>
                                            <td> <?php echo $cu->role_id ?></td>
                                            <td> <?php echo $cu->AREA_KODE ?></td>
                                            <td><?php echo anchor('crud_vendor/crud_vendor/' . $cu->USERNAME, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                            <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('crud_vendor/hapus/' . $cu->USERNAME, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                            <td><?php echo anchor('crud_vendor/crud_vendor/' . $cu->USERNAME, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
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
                    <h4 class="modal-title" id="myModalLabel"> Tambah Data User</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() . 'crud_user/tambah_aksi'; ?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="id_anggaran" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ID Role</label>
                            <input type="text" name="no_surat" class="form-control">

                            <div class="form-group">
                                <label>Kode Area </label>
                                <input type="text" name="nama_pekerjaan" class="form-control">
                            </div>

                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>