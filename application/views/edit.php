<div class="content-wrapper">
    <section class="content">
        <?php foreach($karyawan as $k) { ?>
        <form action="<?php echo base_url().'karyawan/update'; ?>">
            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $k->id ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $k->nama ?>">
            </div>

            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id_karyawan" class="form-control" value="<?php echo $k->id_karyawan ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $k->tgl_lahir ?>">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $k->alamat ?>">
            </div>

            <div class="form-group">
                <label>Divisi</label>
                <input type="text" name="divisi" class="form-control" value="<?php echo $k->divisi ?>">
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="<?php echo $k->jabatan ?>">
            </div>
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <?php } ?>
    </section>
</div>