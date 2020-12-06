<br>
<form action="" method="POST">
    <div class="form-group">
        <label>Nip</label>
        <!-- $tampilpegawai dari controller pegawai php -->
        <input type="text" class="form-control" required placeholder="Masukan NIP Pegawai" name="nip" readonly value="<?= $tampilpegawai['Nip'] ?>">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" required placeholder="Masukan Nama Lengkap" name="nama" value="<?= $tampilpegawai['Nama'] ?>">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" required placeholder="Masukan Tanggal Lahir" name="tanggallahir" value="<?= $tampilpegawai['TanggalLahir'] ?>">
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" required placeholder="Masukan Tempat Lahir" name="tempatlahir" value="<?= $tampilpegawai['TempatLahir'] ?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" required placeholder="Masukan Alamat" rows="3" name="alamat"><?= $tampilpegawai['Alamat'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('index.php') ?>" class="btn btn-warning">Kembali</a>
</form>