<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> Tambah Data Mapping Vendor</h4>
                <h4 class="modal-title" id="myModalLabel"> Edit Data Mapping Vendor</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() . 'mapping_vendor/tambah_aksi'; ?>">
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="TAHUN" id="TAHUN" class="form-control">
                            <option selected="2019">- TAHUN -</option>

                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Paket</label>
                        <select class="form-control" id="PAKET_DESKRIPSI" name="PAKET_DESKRIPSI">
                            <option selected="0">- Pilih Paket -</option>


                    </div>

                    <div class="form-group">
                        <label>Vendor </label>
                        <input type="text" name="AREA_KODE" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Area </label>
                        <select class="form-control" id="AREA_KODE" name="AREA_KODE">
                            <option selected="0">- Pilih Nama Area -</option>
                            <?php foreach ($nama_area as $area) : ?>
                                <option value="<?php echo $area->AREA_KODE; ?>"> <?php echo $area->AREA_NAMA; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Zona </label>
                        <select name="AREA_ZONE" id="AREA_ZONE" class="form-control">
                            <option selected="1">- ZONA -</option>

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>

                        </select>
                    </div>


                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>