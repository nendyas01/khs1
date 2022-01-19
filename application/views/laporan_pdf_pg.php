<!DOCTYPE html>
<html><head>
    <title></title>
  </head><body>
      <h3 style="text-align: center">DATA PENUGASAN PT.ICON PLUS</h3>
      <table>
            <tr>
                <th>No</th>
                <th>No Surat</th>
                <th>Tanggal Surat</th>
                <th>Nama Pekerjaan</th>
                <th>Pemberi Kerja</th>
                <th>Kategori</th>
                <th>PIC</th>
                <th>Tanggal Target Penyelesaian</th>
            </tr>
            <?php 
                    $no = 1;
                        foreach ($penugasan as $pg):?>
            <tr>
                <td> <?php echo $no++ ?></td>
                <td> <?php echo $pg->no_surat ?></td>
                <td> <?php echo $pg->tgl_surat ?></td>
                <td> <?php echo $pg->nama_pekerjaan ?></td>
                <td> <?php echo $pg->pemberi_kerja ?></td>
                <td> <?php echo $pg->kategori ?></td>
                <td> <?php echo $pg->pic ?></td>
                <td> <?php echo $pg->tgl_target ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body></html>