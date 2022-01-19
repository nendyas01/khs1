<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  </head>
<body>
   <table>
       <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>ID</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Divisi</th>
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
           <td><?php echo $k->divisi ?></td>
           <td><?php echo $k->jabatan ?></td>
        </tr>
    <?php endforeach; ?>
   </table>

   <script type="text/javascript">
        window.print();
   </script>
</body>
</html>