<div class="content-wrapper">
    <section class="content">
        <?php foreach($rkap_tahunan as $rt) { ?>
        <form action="<?php echo base_url().'rkap_tahunan/update'; ?>"method="post">
            <div class="form-group">
                <label>ID Anggaran</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $rt->id ?>">
                <input type="text" name="id_anggaran" class="form-control" value="<?php echo $rt->id_anggaran ?>">
            </div>

            <div class="form-group">
                <label>No Surat</label>
                <input type="text" name="no_surat" class="form-control" value="<?php echo $rt->no_surat ?>">
            </div>

            <div class="form-group">
                <label>Tanggal</label>
                <input type="text" name="tanggal" class="form-control" value="<?php echo $rt->tanggal ?>">
            </div>

            <div class="form-group">
                <label>Anggaran</label>
                <input type="text" name="anggaran" class="form-control" value="<?php echo $rt->anggaran ?>">
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>