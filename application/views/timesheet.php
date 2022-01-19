<div class="content-wrapper">
<section class="content-header">
      <h1>
        Timesheet
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Timesheet</li>
      </ol>
</section>
<section class="content">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Timesheet</button>
    <a class="btn btn-danger " style="float:right; margin:5px;" href="<?php echo base_url('timesheet/print') ?>"><i class="fa fa-print"> Print</i></a>
    
    <div class="dropdown inline" style="float:right; margin:5px;  ">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-download"></i>
            Export
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url('timesheet/pdf_timesheet') ?>">PDF</a></li>
            <li><a href="<?php echo base_url('timesheet/excel') ?>">Excel</a></li>
            </ul>
        </div>
<table class="table table-striped">
            <tr>
                <th>No</th>
                <th>ID Progress</th>
                <th>Tanggal</th>
                <th>Nama Pegawai</th>
                <th>Nama Pekerjaan</th>
                <th>Rincian Kegiatan</th>
                <th>Durasi Hari</th>
                <th>Presentase Progress</th>
                <th>Upload</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
                    $no = 1;
                        foreach ($timesheet as $tm):?>
            <tr>
                <td> <?php echo $no++ ?></td>
                <td> <?php echo $tm->id_progress ?></td>
                <td> <?php echo $tm->tanggal ?></td>
                <td> <?php echo $tm->nama_pegawai ?></td>
                <td> <?php echo $tm->nama_pekerjaan ?></td>
                <td> <?php echo $tm->rincian_pekerjaan ?></td>
                <td> <?php echo $tm->durasi_hari ?></td>
                <td> <?php echo $tm->presentase ?></td>
                <td> <?php echo $tm->upload ?></td>
                <td><?php echo anchor('timesheet/detail_timesheet/'.$tm->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('timesheet/hapus/'.$tm->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>        
                <td><?php echo anchor('timesheet/edit_timesheet/'.$tm->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Tambah Data Timesheet</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'timesheet/tambah_aksi'; ?>">
            <div class="form-group">
                <label>ID Progress</label>
                <input type="text" name="id_progress" class="form-control">       
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control">       
            </div>
            <div class="form-group">
                <label>Nama Pegawai</label>
                <input type="text" name="nama_pegawai" class="form-control">       
            </div>
            <div class="form-group">
                <label>Nama Pekerjaan</label>
                <input type="text" name="nama_pekerjaan" class="form-control">       
            </div>
            <div class="form-group">
                <label>Rincian Pekerjaan</label>
                <input type="text" name="rincian_pekerjaan" class="form-control">       
            </div>
            <div class="form-group">
                <label>Durasi Hari</label>
                <input type="text" name="durasi_hari" class="form-control">       
            </div>
            <div class="form-group">
                <label>Presentase</label>
                <input type="text" name="presentase" class="form-control">       
            </div>
            <div class="form-group">
                <label>Upload</label>
                <input type="date" name="upload" class="form-control">       
            </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>