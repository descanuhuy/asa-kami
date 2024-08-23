@extends('layouts.guest')

@section('content')
<header class="py-5 bg-light border-bottom mb-4" style="background-image: url('image/bps_tuban.jpg'); background-size: cover; background-position: center; margin-top: -1.5em;">
    <div class="container" style="height: 17em; margin-top: 8em;">
        <div class="text-center my-5">
            <div style="background-color: rgba(0, 0, 0, 0.5); padding: 1em; border-radius: 10px; display: inline-block;">
                <h1 class="fw-bolder" style="color: white;">Selamat datang di ASA KITA!</h1>
                <p class="lead mb-0" style="color: white;">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </div>
</header>

  <style>
    .news-link {
        color: inherit;
        text-decoration: none;
    }

    .news-link:hover {
        color: #007bff;
        text-decoration: none;
    }

    .selengkapnya {
      text-decoration: underline;
    }
  </style>

<div class="row g-4">
  <!-- Cards Column -->
  <div class="col-md-8">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="card-text news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="card-text news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="card-text news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="card-text news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="card-text news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="card-text news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Sidebar Column -->
<div class="col-md-4">
  <!-- Berita Lainnya Card -->
  <div class="card mb-4" style="width: 100%; height: auto;">
    <div class="card-header">
      <strong>Lainnya!</strong>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="#" class="news-link">News Title 1</a></li>
      <li class="list-group-item"><a href="#" class="news-link">News Title 2</a></li>
      <li class="list-group-item"><a href="#" class="news-link">News Title 3</a></li>
      <li class="list-group-item"><a href="#" class="news-link">News Title 4</a></li>
      <li class="list-group-item"><a href="#" class="news-link">News Title 5</a></li>
    </ul>
  </div>

  <!-- Statistik Pengunjung Card -->
  <div class="card" style="width: 100%; height: auto;">
    <div class="card-header">
       <strong>Statistik Pengunjung</strong>
    </div>
    <div class="card-body">
      <p class="card-text">Total Pengunjung: 1200</p>
      <p class="card-text">Pengunjung Hari Ini: 150</p>
       <p class="card-text">Pengunjung Bulan Ini: 4500</p>
    </div>
</div>


@endsection