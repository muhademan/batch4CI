<br>
<?= $this->session->flashdata('notifikasi'); ?>
<form action="<?= base_url('index.php/proses_pegawai/simpan_pegawai') ?>" method="POST">
    <div class="form-group">
        <label>Nip</label>
        <input type="text" class="form-control" required placeholder="Masukan NIP Pegawai" name="nip">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" required placeholder="Masukan Nama Lengkap" name="nama">
    </div>
    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" required placeholder="Masukan Tanggal Lahir" name="tanggallahir">
    </div>
    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control" required placeholder="Masukan Tempat Lahir" name="tempatlahir">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" required placeholder="Masukan Alamat" rows="3" name="alamat"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('index.php') ?>" class="btn btn-warning">Kembali</a>
</form>