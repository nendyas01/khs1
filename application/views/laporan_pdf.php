<!DOCTYPE html>
<html><head>
    <title></title>
  </head><body>
      <h3 style="text-align: center">DAFTAR KARYAWAN PT.ICON PLUS</h3>
   <table>
       <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>ID</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jabatan</th>  
       </tr>

       <?php 
       $no= 1;
       foreach ($karyawan as $k): ?>

       <tr>
           <td><?php echo $no++ ?></td>
           <td><?php echo $k->nama ?></td>
           <td><?php echo $k->id_karyawan ?></td>
           <td><?php echo $k->tgl_lahir ?></td>
           <td><?php echo $k->alamat ?></td>
           <td><?php echo $k->jabatan ?></td>
        </tr>
    <?php endforeach; ?>
   </table>
</body></html>