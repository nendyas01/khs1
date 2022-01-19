<div class="content-wrapper">
    <section class="content">
        <h4><strong>Detail Data Karyawan</strong></h4>

        <table class="table">
            <tr>
                <th>Nama Karyawan</th>
                <td><?php echo $detail->nama ?></td>
            </tr>
            <tr>
                <th>ID</th>
                <td><?php echo $detail->id_karyawan ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->tgl_lahir ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat ?></td>
            </tr>
            <tr>
                <th>Divisi</th>
                <td><?php echo $detail->divisi ?></td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td><?php echo $detail->jabatan ?></td>
            </tr>
        </table>
    </section>
</div>