<br>
<a href="<?= base_url('index.php/pegawai/add_pegawai') ?>" class="btn btn-primary">Tambah Data Pegawai</a>
<a href="<?= base_url('index.php/login/logout') ?>" class="btn btn-danger">Logout</a>
<br><br>
<?= $this->session->flashdata('notifikasi');  ?>
<!-- peganti echo <#= -->
<table class="table" id="example">
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
            $nip = md5($resultPegawai['Nip']);
        ?>
            <tr>
                <td><?= $resultPegawai['Nip'] ?></td>
                <td><?= $resultPegawai['Nama'] ?></td>
                <td><?= $resultPegawai['TempatLahir'] ?></td>
                <td><?= $resultPegawai['TanggalLahir'] ?></td>
                <td><?= $resultPegawai['Alamat'] ?></td>
                <td>
                    <a href="<?= base_url("index.php/pegawai/edit_pegawai/$nip") ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url("index.php/proses_pegawai/hapus_pegawai/$nip") ?>" onclick="return confirm('Anda Yakin ingin menghapus Data?')" class="btn btn-danger">Hapus</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>