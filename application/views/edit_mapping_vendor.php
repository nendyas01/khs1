<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mapping_vendor as $mv) { ?>
            <form action="<?php echo base_url() . 'mapping_vendor/update'; ?>" method="post">
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number_format" name="MAPPING_TAHUN" class="form-control" value="<?php echo $mv->MAPPING_TAHUN ?>">
                </div>
                <div class="form_group">
                    <label>Deskripsi Paket</label>
                    select class="form-control m-b-10" name="jns_paket" id="PAKET_JENIS">
                <option selected="0">-- Paket Deskripsi --</option>
                <?php foreach ($jenis_paket as $jp) : ?>
                  <option value="<?php echo $jp->PAKET_JENIS; ?>"> <?php echo $jp->PAKET_DESKRIPSI; ?></option>
                <?php endforeach; ?>
              </select>
                </div>

                <div class="form-group">
                    <label>Nama Vendor</label>
                    <select class="vendor form-control m-b-10" style="width:100%;" name="vendor[]" multiple>
                    <option selected="0"></option>
                </select>
                </div>

                <div class="form-group">
                    <label>Nama Area</label>
                    <select class="form-control" id="AREA_KODE" name="AREA_KODE">
                        <option selected="0"></option>
                        <?php foreach ($area as $area) : ?>
                            <option value="<?php echo $area->AREA_KODE; ?>"> <?php echo $area->AREA_NAMA; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Zona</label>
                    <select class="form-control m-b-10" name="ZONA">
                        <option value="">-- Pilih Zona --</option>
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


                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        <?php } ?>
    </section>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

<link rel="stylesheet" href="//select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<style>
  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: blue;
    border: 1px solid hsl(0, 0%, 66.7%);

  }
</style>
<script>
  $(document).ready(function() {
    $('#PAKET_JENIS').change(function() {
      var id = $(this).val();
      $.ajax({
        url: "<?php echo base_url(); ?>/mapping_vendor/get_vendor",
        method: "POST",
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<option value="' + data[i].VENDOR_ID + '">' + data[i].VENDOR_NAMA + '</option>';
          }
          $('.vendor').html(html);

        }
      });
    });

    $('.vendor').select2();

  });
</script>

</div>