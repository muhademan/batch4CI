<h2>Halaman Login</h2>
<form method="POST" action="<?= base_url("index.php/login/loginproses") ?>">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
        <small id="emailHelp" class="form-text text-muted">Username</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="javascript:history.back(-1)" class="btn btn-warning">Kembali</a>
</form>