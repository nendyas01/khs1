<div class="content-wrapper">
<section class="content-header">
      <h1>
        WBS
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">WBS</li>
      </ol>
</section>
<section class="content">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Timesheet</button>
    <a class="btn btn-danger " style="float:right; margin:5px;" href="<?php echo base_url('wbs/print') ?>"><i class="fa fa-print"> Print</i></a>
    <div class="dropdown inline" style="float:right; margin:5px;  ">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-download"></i>
            Export
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url('wbs/pdf_wbs') ?>">PDF</a></li>
            <li><a href="<?php echo base_url('wbs/excel') ?>">Excel</a></li>
            </ul>
        </div>
<table class="table table-striped">
            <tr>
                <th>No</th>
                <th>ID Kegiatan</th>
                <th>Nama Pekerjaan</th>
                <th>Rincian Kegiatan</th>
                <th>Tanggal Awal Kegiatan</th>
                <th>Tanggal Akhir Kegiatan</th>
                <th>PIC</th>
                <th>Durasi</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
                    $no = 1;
                        foreach ($wbs as $w):?>
            <tr>
                <td> <?php echo $no++ ?></td>
                <td> <?php echo $w->id_kegiatan ?></td>
                <td> <?php echo $w->penugasan_nama ?></td>
                <td> <?php echo $w->rincian_kegiatan?></td>
                <td> <?php echo $w->tgl_awal ?></td>
                <td> <?php echo $w->penugasan_target ?></td>
                <td> <?php echo $w->penugasan_pic ?></td>
                <td> <?php echo $w->durasi ?></td>
                <td><?php echo anchor('wbs/detail_wbs/'.$w->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('wbs/hapus/'.$w->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>        
                <td><?php echo anchor('wbs/edit_wbs/'.$w->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Tambah Data WBS</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'wbs/tambah_aksi'; ?>">
            <div class="form-group">
                <label>ID Kegiatan</label>
                <input type="text" name="id_kegiatan" class="form-control">       
            </div>
            <div class="form-group">
                <label>No Surat Penugasan</label>
                <input type="text" name="no_surat" class="form-control">       
            </div>
            <div class="form-group">
                <label>Rincian Kegiatan</label>
                <input type="text" name="rincian_kegiatan" class="form-control">       
            </div>
            <div class="form-group">
                <label>Tanggal Awal Kegiatan</label>
                <input type="date" name="tgl_awal" class="form-control">       
            </div>
            <div class="form-group">
                <label>Tanggal Akhir Kegiatan</label>
                <input type="date" name="tgl_akhir" class="form-control">       
            </div>
            <div class="form-group">
                <label>PIC</label>
                <input type="text" name="pic" class="form-control">       
            </div>
            <div class="form-group">
                <label>Durasi</label>
                <input type="text" name="durasi" class="form-control">       
            </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>