<script>
    $(document).ready(function() {  

    getLineChart2();
    getTahun();
    getPaket();

    function getPaket(){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>/chart/getArea",
            data: "data",
            dataType: "JSON",
            success: function (data) {
                var html = '';
                $.each(data, function (i, val) { 
                html += '<option value="'+val.PAKET_JENIS+'">'+val.PAKET_NAMA+'</option>';
                });
                $('[name="paket_jenis"]').html(html);
            }
        });
    }

    function getTahun(){
        $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>/chart/getTahun",
          data: "data",
          dataType: "JSON",
          success: function (data) {
            var html = '';
            $.each(data, function (i, val) { 
              html += '<option value="'+val.tahun+'">'+val.tahun+'</option>';
            });
            $('[name="tahun"]').html(html);
          }
        });
      }

    function getLineChart2(tahun=null, paket=null){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>/chart/getchart",
            data: {tahun:tahun},
            dataType: "JSON",
            success: function (data) {
                var pagu = [];
                var spj = [];

                for (var i in data) {
                pagu.push(parseInt(data[i].total_pagu));
                spj.push(parseInt(data[i].total_spj));
                }

                Highcharts.chart('container3', {

                    title: {
                        text: 'Solar Employment Growth by Sector, 2010-2016'
                    },

                    subtitle: {
                        text: 'Source: thesolarfoundation.com'
                    },

                    yAxis: {
                        title: {
                            text: 'Number of Employees'
                        }
                    },

                    xAxis: {
                        accessibility: {
                            rangeDescription: 'Range: 2010 to 2017'
                        }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },
                            pointStart: 2010
                        }
                    },

                    series: [{
                    }, {
                        name: 'Project Development',
                        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
                    }, {
                        name: 'Other',
                        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
                    }],

                    responsive: {
                        rules: [{
                            condition: {
                                maxWidth: 500
                            },
                            chartOptions: {
                                legend: {
                                    layout: 'horizontal',
                                    align: 'center',
                                    verticalAlign: 'bottom'
                                }
                            }
                        }]
                    }

                });
                
            }
        });                   
</script>

<script>
    $(document).ready(function() {
      $('#PAKET_JENIS').change(function() {
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
              html += '<option value="' + data[i].PAKET_JENIS + '">' + data[i].PAKET_NAMA + '</option>';
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
      var nama_paket = $(this).data('PAKET_NAMA');
      $('#nama_paket').val(nama_paket);
      $('#modal-detail').modal('hide');
    });
</script>