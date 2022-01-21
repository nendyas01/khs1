<div class="content-wrapper">
<section class="content-header">
      <h1>
        Pengelolaan Data Anggaran
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengelolaan Data Anggaran</li>
      </ol>
</section>

<section class="content">
<a class="btn btn-danger " style="float:right; margin:5px;"><i class="fa fa-print"> Print</i></a>
    <div class="dropdown inline" style="float:right; margin:5px;  ">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-download"></i>
            Export
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li>>PDF<</li>
            <li>>Excel<</li>
            </ul>
      </div>
    
      <div class="navbar-form navbar-right">
          <?php echo form_open('anggaran/search') ?>
        <input type="text" name="keyword" class="form-control"
        placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close() ?>
      </div>

      <table class="table table-striped">
            <tr>
				<th>No</th>
				<th>Nama Area</th>
				<th>No SKKO/SKKI</th>
				<th>Nilai SKKO/I</th>
                <th>Sisa SKKO/I</th>
				<th>Jumlah SPJ Terbit</th>
				<th>Total Nilai SPJ</th>
			    <th>Penyerapan SKKO/I (%)</th>
				<th>Pembayaran SPJ (%)</th>
			    <th>Pembayaran SKKO/I (%)</th>
			</tr>
            <?php 
                 $no = 1;
                    foreach ($anggaran as $a){
                    ?>
                      <tr>
                        <td> <?php echo $no++ ?></td>
                        <td> <?php echo $a->nama_area?></td>
                        <td> <?php echo $a->SKKI_NO?></td>
                        <td> <?php echo $a->SKKI_NILAI?></td>
                        <td> <?php echo $a->SKKI_NILAI-$a->SKKI_TERPAKAI?></td>
                        <td> <?php echo $a->jml_spj?></td>
                        <td> <?php echo $a->total_spj?></td>
                      </tr>
              <?php } ?>
        
              

        </table>
    </section>