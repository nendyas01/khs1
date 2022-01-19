
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style>
 @import "https://code.highcharts.com/css/highcharts.css";

.highcharts-pie-series .highcharts-point {
  stroke: #ede;
  stroke-width: 2px;
}

.highcharts-pie-series .highcharts-data-label-connector {
  stroke: silver;
  stroke-dasharray: 2, 2;
  stroke-width: 2px;
}

.highcharts-figure,
.highcharts-data-table table {
  min-width: 320px;
  max-width: 600px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
.highcharts-figure,
.highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

#container {
  height: 400px;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>
<?php
  /* $keuangan = $this->db->query("select * from karyawan where divisi='Keuangan'")->num_rows();
  $sdm = $this->db->query("select * from karyawan where divisi='SDM'")->num_rows();
  $rencana = $this->db->query("select * from karyawan where divisi='Perencaan dan Operasi'")->num_rows();
  $niaga = $this->db->query("select * from karyawan where divisi='Niaga'")->num_rows();

  ini nanti disesuaikan ya mau diisi apa aja */

  $keuangan = 0;
  $sdm = 0;
  $rencana = 0;
  $niaga = 0;

?>
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
              <h3 class="box-title">Grafik pekerjaan (divisi)</h3>
            </div>
            <!-- /.box-header -->
            <div id="container"></div>

          </div>
          <!-- /.box -->

     
        <!-- general form elements -->
        <div class="box box-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik pekerjaan (perbulan)</h3>
            </div>
            <!-- /.box-header -->
            <div id="bulan"></div>

          </div>
          <!-- /.box -->

     
    </section>

</div>

<script>
 
Highcharts.chart('container', {

chart: {
  styledMode: true
},

title: {
  text: 'Data Grafik Karyawan Perdivisi'
},



series: [{
  type: 'pie',
  allowPointSelect: true,
  keys: ['name', 'y', 'selected'],
  name: "Total",
  data: [
    ['Perencaan dan Operasi',<?php echo $rencana ?>, false],
    ['Keuangan', <?php echo $keuangan ?>, false],
    ['SDM',<?php echo $sdm ?>, false],
    ['Niaga',<?php echo $niaga ?>, false],
  ],
  showInLegend: true
}]
});

// Create the chart
Highcharts.chart('bulan', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Data Penugasan Perbulan'
  },
  accessibility: {
    announceNewData: {
      enabled: true
    }
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: 'Total percent market share'
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        // format: '{point.y:.1f}'
      }
    }
  },

  series: [
      
      {
        name: "Total",
        colorByPoint: true,
        data: [
          <?php
      // $getjenis = $this->db->query("select *,count(*) as jml,DATE_FORMAT(tgl_surat,'%Y/%m/%d') AS tanggal from penugasan group by DATE_FORMAT(tanggal,'%m/%')");

      $getjenis = [
        ['tanggal' => '2022-01-18','jml' => 0]
      ];

      foreach($getjenis as $key => $row){
      ?>
          {
            name: "<?php echo date('F',strtotime($row['tanggal'])) ?>",
            y: <?php echo $row['jml'] ?>,
          },
        <?php } ?>
        ]
      }
    ],
});
</script>