<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Monitoring Perijinan
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">BA Survey</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="lokasi_ijin">Lokasi Perijinan</label>
                                <input type="text" class="form-control" placeholder="Lokasi Perijinan" name="lokasi_ijin" id="lokasi_ijin">
                            </div>
                            <div class="form-group">
                                <label for="surat_ptsp">Surat PTSP</label>
                                <input type="text" class="form-control" placeholder="Surat PTSP" name="no_surat_ptsp" id="no_surat_ptsp">
                            </div>
                            <div class="form-group">
                                <label for="surat_spj">Surat SPJ</label>
                                <input type="text" class="form-control" placeholder="Surat SPJ" name="no_spj" id="no_spj">
                            </div>

                            <button type="submit" class="btn btn-info"><a href="/khs/monitoring_perijinan.php"></a>Submit</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">Perijinan</header>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No. SPJ</th>
                                    <th>Lokasi Perijinan</th>
                                    <th>No. Surat PTSP</th>
                                    <th>Tanggal Keluar Surat PTSP</th>
                                    <th>Hasil Survey</th>
                                    <th>Tanggal Survey</th>
                                    <th>Tanggal Keluar SKRD</th>
                                    <th>Pembayaran Retribusi</th>
                                    <!--isinya dibayar tgl berapa-->
                                    <th>Izin Terbit</th>
                                </tr>
                            </thead>