<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
    </tr>
    <tr>
        <?php
        if (empty($getmahasiswa)) {
        ?>
    <tr>
        <td colspan="5" align="center">Data Mahasiswa tidak ditemukan</td>
    </tr>
<?php } ?>
<?php
$no = 1;
foreach ($getmahasiswa as $resultmahasiswa) {
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $resultmahasiswa['nim']++ ?></td>
        <td><?= $resultmahasiswa['nama']++ ?></td>
        <td><?= $resultmahasiswa['alamat']++ ?></td>
        <td><?= $resultmahasiswa['email']++ ?></td>
    </tr>
<?php } ?>
</tr>
</table>
</body>