<div class="content-wrapper">
    <section class="content">
        <?php foreach($timesheet as $tm) { ?>
        <form action="<?php echo base_url().'timesheet/update'; ?>">
            <div class="form-group">
                <label>ID Progress</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $tm->id ?>">
                <input type="text" name="no_surat" class="form-control" value="<?php echo $tm->id_progress ?>">
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $tm->tanggal ?>">
            </div>

            <div class="form-group">
                <label>Nama Pegawai</label>
                <input type="text" name="nama_pegawai" class="form-control" value="<?php echo $tm->nama_pegawai ?>">
            </div>

            <div class="form-group">
                <label>Nama Pekerjaan</label>
                <input type="text" name="nama_pekerjaan" class="form-control" value="<?php echo $tm->nama_pekerjaan ?>">
            </div>

            <div class="form-group">
                <label>Rincian Kegiatan</label>
                <input type="text" name="rincian_kegiatan" class="form-control" value="<?php echo $tm->rincian_pekerjaan ?>">
            </div>

            <div class="form-group">
                <label>Durasi Hari</label>
                <input type="text" name="durasi_hari" class="form-control" value="<?php echo $tm->durasi_hari ?>">
            </div>

            <div class="form-group">
                <label>Presentase Progress</label>
                <input type="text" name="presentase" class="form-control" value="<?php echo $tm->presentase ?>">
            </div>

            <div class="form-group">
                <label>Upload</label>
                <input type="text" name="presentase" class="form-control" value="<?php echo $tm->upload ?>">
            </div>

            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>