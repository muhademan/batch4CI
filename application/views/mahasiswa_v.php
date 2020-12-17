<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <form action="" method="get">
        <input type="search" name="keyword" placeholder="Masukan kata pencarian" size="40" autocomplete="off" id="keyword" />
        <button type="submit" name="cari" id="cari">Cari</button>
    </form>
    <br>
    <div id="container">

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
    </div>
</body>
<script src="<?= base_url('assets/script.js') ?>"></script>

</html>