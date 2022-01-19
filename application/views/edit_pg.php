<div class="content-wrapper">
    <section class="content">
        <?php foreach($penugasan as $pg) { ?>
        <form action="<?php echo base_url().'penugasan/update'; ?>">
            <div class="form-group">
                <label>No Surat</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $pg->id ?>">
                <input type="text" name="no_surat" class="form-control" value="<?php echo $pg->no_surat ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Surat</label>
                <input type="date" name="tgl_surat" class="form-control" value="<?php echo $pg->tgl_surat ?>">
            </div>

            <div class="form-group">
                <label>Nama Pekerjaan</label>
                <input type="text" name="nama_pekerjaan" class="form-control" value="<?php echo $pg->nama_pekerjaan ?>">
            </div>

            <div class="form-group">
                <label>Pemberi Kerja</label>
                <input type="text" name="pemberi_kerja" class="form-control" value="<?php echo $pg->pemberi_kerja ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $pg->kategori ?>">
            </div>

            <div class="form-group">
                <label>PIC</label>
                <input type="text" name="pic" class="form-control" value="<?php echo $pg->pic ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Target</label>
                <input type="text" name="tgl_target" class="form-control" value="<?php echo $pg->tgl_target ?>">
            </div>

            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>