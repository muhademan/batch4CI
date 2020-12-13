<br>
<a href="<?= base_url('index.php/pegawai/downloadexcelpegawai') ?>" class="btn btn-primary">Download Excel</a>
<a href="<?= base_url('index.php/login/logout') ?>" class="btn btn-danger">Logout</a>
<br><br>
<!-- peganti echo <#= -->
<table class="table" id="example">
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
                <td><?= $resultPegawai['Nip'] ?></td>
                <td><?= $resultPegawai['Nama'] ?></td>
                <td><?= $resultPegawai['TempatLahir'] ?></td>
                <td><?= $resultPegawai['TanggalLahir'] ?></td>
                <td><?= $resultPegawai['Alamat'] ?></td>
            <?php } ?>
    </tbody>
</table>