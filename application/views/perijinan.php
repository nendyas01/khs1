<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Perijinan
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">PERIJINAN</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="no_spj">No. SPJ</label>
                                <input type="text" class="form-control" placeholder="No. SPJ" name="no_spj">
                            </div>
                            <button type="submit" class="btn btn-info"><a href="/khs/list_amandemen.php"></a>Submit</button>
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
                                    <th>Surat SPJ yang telah dibuat</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?
                                $no_spj = $_GET['no_spj'];





                                $nomor = 1;
                                for ($i = 0; $i < count($data); $i++) {
                                    $current_no_spj    = $data[$i][0];
                                    $jumlah_dok        = $data[$i][1];
                                    $jumlah_ijin    = $data[$i][2];

                                    if ($jumlah_ijin == '') {
                                        $jumlah_ijin = 0;
                                    }

                                    echo "<tr>";

                                    echo "<td>" . $current_no_spj . "</td>";
                                    echo "<td>" . $jumlah_dok . "</td>";
                                    echo "<td>" . $jumlah_ijin . "</td>";
                                    echo "<td>";
                                    echo "<a href='perijinan_add.php'>Add</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>

                        </table>
                    </div>
                </section>
            </div>
        </div>

</div>