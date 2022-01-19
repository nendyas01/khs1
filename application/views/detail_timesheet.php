<div class="content-wrapper">
    <section class="content">
        <h4><strong>Detail Data Penugasan PLN</strong></h4>

        <table class="table">
        <tr>
                <th>ID Progress</th>
                <td><?php echo $detail_timesheet->id_progress ?></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?php echo $detail_timesheet->tanggal ?></td>
            </tr>
            <tr>
                <th>Nama Pegawai</th>
                <td><?php echo $detail_timesheet->nama_pegawai ?></td>
            </tr>
            <tr>
                <th>Nama Pekerjaan</th>
                <td><?php echo $detail_timesheet->nama_pekerjaan ?></td>
            </tr>
            <tr>
                <th>Rincian Kegiatan</th>
                <td><?php echo $detail_timesheet->rincian_pekerjaan ?></td>
            </tr>
            <tr>
                <th>Durasi Hari</th>
                <td><?php echo $detail_timesheet->durasi_hari ?></td>
            </tr>
            <tr>
                <th>Presentase Progress</th>
                <td><?php echo $detail_timesheet->presentase ?></td>
            </tr>
            <tr>
                <th>Upload</th>
                <td><?php echo $detail_timesheet->upload ?></td>
            </tr>
        </table>
    </section>
</div>