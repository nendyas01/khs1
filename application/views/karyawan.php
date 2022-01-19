<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Karyawan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Karyawan</li>
      </ol>
    </section>
    <section class="content">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Tambah Data Karyawan</button>
        <a class="btn btn-danger " style="float:right; margin:5px;" href="<?php echo base_url('karyawan/print') ?>"><i class="fa fa-print"> Print</i></a>
        
        <div class="dropdown inline" style="float:right; margin:5px;">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-download"></i>
            Export
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url('karyawan/pdf') ?>">PDF</a></li>
            <li><a href="<?php echo base_url('karyawan/excel') ?>">Excel</a></li>
            </ul>
        </div>
        
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>ID</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Divisi</th>
                <th>Jabatan</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
                    $no = 1;
                    foreach ($karyawan as $k): ?>
            <tr>
                <td> <?php echo $no++ ?></td>
                <td> <?php echo $k->nama ?></td>
                <td> <?php echo $k->id_karyawan ?></td>
                <td> <?php echo $k->tgl_lahir ?></td>
                <td> <?php echo $k->alamat ?></td>
                <td> <?php echo $k->divisi ?></td>
                <td> <?php echo $k->jabatan ?></td>
                <td><?php echo anchor('karyawan/detail/'.$k->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('karyawan/hapus/'.$k->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>        
                <td><?php echo anchor('karyawan/edit/'.$k->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Tambah Data Karyawan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'karyawan/tambah_aksi'; ?>">
            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" name="nama" class="form-control">       
            </div>
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id_karyawan" class="form-control">       
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control">       
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">       
            </div>
            <div class="form-group">
                <label>Divisi</label>
                <input type="text" name="divisi" class="form-control">       
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control">       
            </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>