<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div class="content-wrapper">
  <section class="content-header">

      <h1>
        Data Chart
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Chart</li>
      </ol>
  </section>
    <section class="content">
        
        <!-- general form elements -->
        <div class="box box-dark">
            <div class="box-header with-border">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="box-title">Grafik Pencapaian</h3>
                </div>
                
              </div>
            </div>

    
            <!-- /.box-header -->
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <select name="area_kode" class="form-control area_kode"></select>
                  </div>

                  <div class="col-md-4">
                    <select name="tahun" class="form-control tahun"></select>
                  </div>

                  <div class="col-md-1">
                    <button class="btn btn-success" name="btn-filter">Filter</button>
                  </div>
                </div>

                <div class="row">
                  <div id="container"></div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
      
                    <select name="area_kode" class="form-control area_kode"></select>
                  </div>

                  <div class="col-md-4">
                    <select name="tahun" class="form-control tahun"></select>
                  </div>

                  <div class="col-md-1">
                    <button class="btn btn-success" name="btn-filter-bar-chart">Filter</button>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12"
                    <figure class="highcharts-figure">
                      <div id="container2"></div>
                    </figure>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              
            </div>

            <div class="row">
              <div class="col-md-6">
                
                <div class="row">
                  <div class="col-md-9">
                    <select name="tahun" class="form-control tahun"></select>
                  </div>
                  <div class="col-md-6">
                    <select name="paket_jenis" class="form-control paket"></select>
                  </div>
                  <div class="col-md-1">
                    <button class="btn btn-success" name="btn-filters">Filter</button>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div id="container3"></div>
                  </div>
                </div>

              </div>
            </div>

    </section>
  
</div>

<script>
    $(document).ready(function() {

      // $('[name="area_kode"]').prop('disabled', true);

      getChart();
      getArea();
      getTahun();

      $('[name="btn-filter"]').on('click', function () {
        var area_kode = $('[name="area_kode"]').val();
        var tahun = $('[name="tahun"]').val();
        getChart(tahun, area_kode); 
      });

      //MEMBUAT LINE CHART MENGGUNAKAN FILTER TAHUN PAKET
      // $('[name="tahun"]').on('change', function () {
      //   $('[name="area_kode"]').prop('disabled', false);
      // });

      function getArea() {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url(); ?>/chart/getArea",
          data: "data",
          dataType: "JSON",
          success: function (data) {
            var html = '';
            $.each(data, function (i, val) { 
              html += '<option value="'+val.AREA_KODE+'">'+val.AREA_NAMA+'</option>';
            });
            $('.area_kode').html(html);
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
            $('.tahun').html(html);
          }
        });
      }

      function getChart(tahun=null, area_kode=null) {
        $.ajax({
          url: "<?php echo base_url(); ?>/chart/getchart",
          method: "POST",
          async: false,
          data:{area_kode:area_kode, tahun:tahun},
          dataType: 'JSON',
          success: function(data) {

            var bulan = [];
            var gangguan = [];
            var non_gangguan = [];

            for (var i in data) {
              bulan.push(data[i].nama_bulan);
              gangguan.push(parseInt(data[i].total_gangguan));
              non_gangguan.push(parseInt(data[i].total_tidak_gangguan));
            }

            // console.log(gangguan);

            Highcharts.chart('container', {
              chart: {
                  type: 'spline'
              },
              title: {
                  text: 'Data Grafik gangguan dan non gangguan'
              },
              
              xAxis: {
                  categories: bulan
              },
              yAxis: {
                  
                  
              },
              tooltip: {
                  crosshairs: true,
                  shared: true
              },
              plotOptions: {
                  spline: {
                      marker: {
                          radius: 4,
                          lineColor: '#666666',
                          lineWidth: 1
                      }
                  }
              },
              series: [{
                  name: 'Gangguan',
                  marker: {
                      symbol: 'square'
                  },
                  data: gangguan
              }, {
                  name: 'non gangguan',
                  marker: {
                      symbol: 'diamond'
                  },
                  data: non_gangguan
              }]
          });
          }
        });
      }

      getBarChart();

      $('[name="btn-filter-bar-chart"]').on('click', function () {
        var area_kode = $('[name="area_kode"]').val();
        var tahun = $('[name="tahun"]').val();
        getBarChart(tahun, area_kode); 
      });


      function getBarChart(tahun=null, area_kode=null) {
      
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>/chart/getBarchart",
            data: {area_kode:area_kode, tahun:tahun},
            dataType: "JSON",
            success: function (data) {
              // console.log(data);
                var paket1 = [];
                var paket2 = [];
                var paket3 = [];
                var bulan = [];
                
                for (var i in data) {
                  bulan.push(data[i].nama_bulan);
                  paket1.push(parseInt(data[i].paket_1));
                  paket2.push(parseInt(data[i].paket_2));
                  paket3.push(parseInt(data[i].paket_3));
                }

                console.log(paket2);
                console.log(paket1);
                console.log(paket3);
            // console.log(paket1);
              Highcharts.chart('container2', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Grafik berdasarkan Paket'
                },
                xAxis: {
                    categories: bulan
                },
                yAxis: {
                    
                },
                tooltip: {
                    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b>',
                    shared: true
                },
                plotOptions: {
                    column: {
                        stacking: 'percent'
                    }
                },
                series: [
                  {
                    name: 'Paket 3',
                    data: paket3
                  }, {
                      name: 'Paket 2',
                      data: paket2
                  }, {
                      name: 'Paket 1',
                      data: paket1
                  }
                ]
              });
                            
            }
        });
      }

      getChartLine2();
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
                  $('.paket').html(html);
              }
          });
      }

      function getChartLine2(tahun=null, paket=null){
          $.ajax({
              url: "<?php echo base_url(); ?>/chart/getchart",
              method: "POST",
              async: false,
              data:{paket:paket, tahun:tahun},
              dataType: 'JSON',
              success: function(data) {     
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
                          name: 'Installation',
                          data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
                      }, {
                          name: 'Manufacturing',
                          data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
                      }, {
                          name: 'Sales & Distribution',
                          data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
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
      }
  });
  
</script>


