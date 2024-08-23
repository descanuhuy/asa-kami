<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #1E2A5E">
    <div class="container">
        <!-- <a class="navbar-brand" href="#!"><strong>ASA KITA</strong></a> -->
        <a class="navbar-brand" href="#!">
            <img src="{{ asset('image/logo_asakita.png') }}" alt="Logo" style="height: 30px; margin-right: 10px;">
            <strong>ASA KITA</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="kategoriDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Topik
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="kategoriDropdown">
                        <li><a class="dropdown-item" href="#">Kelembagaan</a></li>
                        <li><a class="dropdown-item" href="#">Kualitas Data</a></li>
                        <li><a class="dropdown-item" href="#">Prinsip SDI</a></li>
                        <li><a class="dropdown-item" href="#">Proses Bisnis Statistik</a></li>
                        <li><a class="dropdown-item" href="#">Statistik Nasional</a></li>
                        <li><a class="dropdown-item" href="#">Uncategorized</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Arsip</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                <!-- <li class="nav-item form">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 150px;">
                    </form>
                </li> -->
            </ul>
        </div>
    </div>
</nav>

<style>
    .nav-link {
        color: lightgray;
        text-decoration: none;
    }

    .nav-link:hover {
        color: white;
        text-decoration: none;
    }
</style>