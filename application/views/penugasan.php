<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Program Kerja Direktorat
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Program Kerja Direktorat</li>
      </ol>
    </section>
    <section class="content">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Penugasan</button>
    <a class="btn btn-danger" style="float:right; margin:5px;" href="<?php echo base_url('penugasan/print') ?>"><i class="fa fa-print"> Print</i></a>
    
    <div class="dropdown inline" style="float:right; margin:5px;" >
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-download"></i>
            Export
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url('penugasan/pdf_pg') ?>">PDF</a></li>
            <li><a href="<?php echo base_url('penugasan/excel') ?>">Excel</a></li>
            </ul>
        </div>
    <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>No Surat</th>
                <th>Tanggal Surat</th>
                <th>Nama Pekerjaan</th>
                <th>Pemberi Kerja</th>
                <th>Kategori</th>
                <th>PIC</th>
                <th>Tanggal Target Penyelesaian</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
                    $no = 1;
                        foreach ($penugasan as $pg):?>
            <tr>
                <td> <?php echo $no++ ?></td>
                <td> <?php echo $pg['no_surat'] ?></td>
                <td> <?php echo $pg['tgl_surat'] ?></td>
                <td> <?php echo $pg['nama_pekerjaan'] ?></td>
                <td> <?php echo $pg['pemberi_kerja'] ?></td>
                <td> <?php echo $pg['kategori'] ?></td>
                <td> <?php echo $pg['pic'] ?></td>
                <td> <?php echo $pg['tgl_target'] ?></td>
                
<td><?php echo anchor('penugasan/detail_pg/'.$pg['id'], '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('penugasan/hapus/'.$pg['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>        
                <td><?php echo anchor('penugasan/edit_pg/'.$pg['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Tambah Data Penugasan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'penugasan/tambah_aksi'; ?>">
            <div class="form-group">
                <label>No Surat</label>
                <input type="text" name="no_surat" class="form-control">       
            </div>
            <div class="form-group">
                <label>Tanggal Surat</label>
                <input type="date" name="tgl_surat" class="form-control">       
            </div>
            <div class="form-group">
                <label>Nama Pekerjaan</label>
                <input type="text" name="nama_pekerjaan" class="form-control">       
            </div>
            <div class="form-group">
                <label>Pemberi Kerja</label>
                <input type="text" name="pemberi_kerja" class="form-control">       
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">       
            </div>
            <div class="form-group">
                <label>PIC</label>
                <input type="text" name="pic" class="form-control">       
            </div>
            <div class="form-group">
                <label>Tanggal Target Penyelesaian</label>
                <input type="date" name="tgl_target" class="form-control">       
            </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>