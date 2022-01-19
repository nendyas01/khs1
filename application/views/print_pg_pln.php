<!DOCTYPE html>
<html>
<head>
    <title></title>
  </head>
<body>
    <table>
    <tr>
                <th>No</th>
                <th>ID Progress</th>
                <th>Tanggal</th>
                <th>Nama Pegawai</th>
                <th>Nama Pekerjaan</th>
                <th>Rincian Kegiatan</th>
                <th>Durasi Hari</th>
                <th>Presentase Progress</th>
                <th>Upload</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
                    $no = 1;
                        foreach ($timesheet as $tm):?>
            <tr>
                <td> <?php echo $no++ ?></td>
                <td> <?php echo $tm->id_progress ?></td>
                <td> <?php echo $tm->tanggal ?></td>
                <td> <?php echo $tm->nama_pegawai ?></td>
                <td> <?php echo $tm->nama_pekerjaan ?></td>
                <td> <?php echo $tm->rincian_pekerjaan ?></td>
                <td> <?php echo $tm->durasi_hari ?></td>
                <td> <?php echo $tm->presentase ?></td>
                <td> <?php echo $tm->upload ?></td>
            </tr>
            <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
   </script>

</body>
</html>