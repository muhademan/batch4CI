<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pegawai.xls");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download data pegawai</title>
</head>

<body>
    <table width='100%' border="1">
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($DataPegawai as $resultPegawai) {
                $nip = $resultPegawai['Nip'];
            ?>
                <tr>
                    <td>'<?= $resultPegawai['Nip'] ?></td>
                    <td><?= $resultPegawai['Nama'] ?></td>
                    <td><?= $resultPegawai['TempatLahir'] ?></td>
                    <td><?= $resultPegawai['TanggalLahir'] ?></td>
                    <td><?= $resultPegawai['Alamat'] ?></td>
                <?php } ?>
        </tbody>
    </table>

</body>

</html>