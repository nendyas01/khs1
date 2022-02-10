<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> Tambah Data Mapping Vendor</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() . 'crud_user/tambah_aksi'; ?>">
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="number_format" name="USERNAME" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Paket</label>
                        <input type="text" name="role_id" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Vendor </label>
                        <input type="text" name="AREA_KODE" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Area </label>
                        <input type="text" name="AREA_KODE" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Zona </label>
                        <input type="number_format" name="AREA_KODE" class="form-control">
                    </div>


                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>