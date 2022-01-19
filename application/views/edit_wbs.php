<div class="content-wrapper">
    <section class="content">
        <?php foreach($wbs as $w) { ?>
        <form action="<?php echo base_url().'wbs/update'; ?>">
            <div class="form-group">
                <label>ID Kegiatan</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $w->id ?>">
                <input type="text" name="id_kegiatan" class="form-control" value="<?php echo $w->id_kegiatan?>">
            </div>

            <div class="form-group">
                <label>Nomor Surat</label>
                <input type="text" name="no_surat" class="form-control" value="<?php echo $w->no_surat ?>"> 
            </div>

            <div class="form-group">
                <label>Rincian Kegiatan</label>
                <input type="text" name="rincian_kegiatan" class="form-control" value="<?php echo $w->rincian_kegiatan ?>">
            </div>

            <div class="form-group">
                <label>Tanggal awal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo $w->tgl_awal ?>">
            </div>

            <div class="form-group">
                <label>Durasi</label>
                <input type="text" name="durasi" class="form-control" value="<?php echo $w->durasi ?>">
            </div>

            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>