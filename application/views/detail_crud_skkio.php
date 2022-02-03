<div div class="content-wrapper">
    <section class="content">
        <h4><strong> <p style="text-align:center"> Detail Data SKKI/O</p></strong></h4>
        
        <table class="table" >

            <tr>
                <th>No</th>
                <td><?php echo $detail_crud_skkio->SKKI_ID ?></td>
            </tr>

            <tr>
                <th>SKKI JENIS</th>
                <td><?php echo $detail_crud_skkio->SKKI_JENIS ?></td>
            </tr>
            <tr>
                <th>SKKI NO</th>
                <td><?php echo $detail_crud_skkio->SKKI_NO ?></td>
            </tr>
            <tr>
                <th>NAMA AREA</th>
                <td><?php echo $detail_crud_skkio->AREA_KODE?></td>
            </tr>
            <tr>
                <th>SKKI NILAI</th>
                <td><?php echo 'Rp ' . number_format($detail_crud_skkio->SKKI_NILAI, 0, ',', '.')?></td>
            </tr>
            <tr>
                <th>SKKI TERPAKAI</th>
                <td><?php echo 'Rp ' . number_format($detail_crud_skkio->SKKI_TERPAKAI, 0, ',', '.')?></td>
            </tr>
            <tr>
                <th>SKKI TANGGAL</th>
                <td><?php echo $detail_crud_skkio->SKKI_TANGGAL?></td>
            </tr>

        </table>
        </section>


</div>     