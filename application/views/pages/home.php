<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sistem Akademik</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('index.php/login/login_v') ?>">Login</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="container">
    <!-- ini adalah jumbotron -->
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang</h1>
        <p class="lead">Dihalaman sistem akademik kampus sytem yang ada dipalembang</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="#" role="button">Join Us</a>
    </div>

    <!-- ini images -->
    <div class="row">
        <div class="col-sm">
            <div class="text-center">
                <img src="https://via.placeholder.com/150" class="rounded" alt="sydemy">
            </div>
        </div>
        <div class="col-sm">
            <div class="text-center">
                <img src="https://via.placeholder.com/150" class="rounded" alt="sydemy">
            </div>
        </div>
        <div class="col-sm">
            <div class="text-center">
                <img src="https://via.placeholder.com/150" class="rounded" alt="sydemy">
            </div>
        </div>
    </div>

    <!-- ini footer -->
    <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</div>