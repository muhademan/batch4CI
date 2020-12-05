<br>
<a href="<?= base_url('index.php/pegawai/add_pegawai') ?>" class="btn btn-primary">Tambah Data Pegawai</a><br><br>
<table class="table">
    <thead>
        <tr>
            <th>Nip</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($DataPegawai as $resultPegawai) {
        ?>
            <tr>
                <td><?= $resultPegawai['Nip'] ?></td>
                <td><?= $resultPegawai['Nama'] ?></td>
                <td><?= $resultPegawai['TempatLahir'] ?></td>
                <td><?= $resultPegawai['TanggalLahir'] ?></td>
                <td><?= $resultPegawai['Alamat'] ?></td>
                <td>yes</td>
            </tr>
        <?php } ?>
    </tbody>
</table>