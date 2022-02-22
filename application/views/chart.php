<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Chart
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Chart</li>
        </ol>
    </section>

<section class="content">
  
  <div class="col-lg-3 col-xs-6">

<div class="small-box bg-red">
<div class="inner">
  <?php foreach ($total_spj as $ts) {
    ?>
<h3><?php echo number_format($ts->total )?></h3>
<p>Total SPJ</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>
<?php } ?>

<div class="col-lg-3 col-xs-6">

<div class="small-box bg-green">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Bounce Rate</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>




</div>




</div>

</div>
</div>

</section>

</div>

</section>

<script>
              $(document).ready(function() {
                $('#AREA_KODE').change(function() {
                  var id = $(this).val();
                  $.ajax({
                    url: "<?php echo base_url(); ?>/chart/getarea",
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
                        html += '<option value="' + data[i].AREA_KODE + '">' + data[i].AREA_NAMA + '</option>';
                      }
                      $('.area').html(html);
                      $('.area').select2();

                    }
                  });
                });
              });
</script>
<script>
              $(document).on('click', '#select', function() {
                var nama_area = $(this).data('NAMA_AREA');
                $('#nama_area').val(nama_area);
                $('#modal-detail').modal('hide');
              });
  </script>