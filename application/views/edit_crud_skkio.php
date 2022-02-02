<div class="content-wrapper">
    <section class="content">
    <?php foreach($crud_skkio as $cs) { ?>
        <form action="<?php echo base_url().'crud_skkio/update'; ?>">
            <div class="form_group">
                <label>SKKI JENIS</label>
                <input type="text" name="SKKI_JENIS" class="form-control" value="<?php echo $cs->SKKI_JENIS ?>">
            </div>
            
            <div class="form-group">
                <label>SKKI NO</label>
                <input type="text" name="SKKI_NO" class="form-control" value="<?php echo $cs->SKKI_NO ?>">
            </div>

            <div class="form-group">
                <label>SKKI NO</label>
                <input type="text" name="SKKI_NO" class="form-control" value="<?php echo $cs->SKKI_NO ?>">
            </div>

            <div class="form-group">
                <label>NAMA AREA</label>
                    <select class="form-control" id="AREA_KODE" name="AREA_KODE">
                        <option selected="0">- Pilih Nama Area -</option>
                        <?php foreach($nama_area as $area) : ?>
                        <option value="<?php echo $area->AREA_KODE;?>"> <?php echo $area->AREA_NAMA; ?></option>
                        <?php endforeach; ?>
                    </select>
            </div>

            <div class="form-group">
                <label>SKKI NILAI</label>
                <input type="number_format" name="SKKI_NILAI" class="form-control" value="<?php echo 'Rp ' . number_format($cs->SKKI_NILAI, 0, ',', '.') ?>">
            </div>

            <div class="form-group">
                <label>SKKI_TERPAKAI</label>
                <input type="number_format" name="SKKI_NILAI" class="form-control" value="<?php echo 'Rp ' . number_format($cs->SKKI_TERPAKAI, 0, ',', '.') ?>">
            </div>

            <div class="form-group">
                <label>SKKI TANGGAL</label>
                <input type="date" name="SKKI_TANGGAL" class="form-control" value="<?php echo $cs->SKKI_TANGGAL ?>">
            </div>

            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
        <?php }?>
    </section>

</div>
