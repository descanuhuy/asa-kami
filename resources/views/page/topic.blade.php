@extends('layouts.guest')

@section('content')

<style>
    .news-link {
        color: inherit;
        text-decoration: none;
    }

    .news-link:hover {
        color: #007bff;
        text-decoration: none;
    }

    .topic {
        color: gray;
        text-decoration: none;
    }

    .topic:hover {
        color: black;
        text-decoration: none;
    }

    .card {
        height: 350px; /* Fixed height for each card */
        display: flex;
        flex-direction: column;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: flex-start; /* Aligns text at the top */
        height: 100%; /* Ensure the card-body takes full height */
        overflow: hidden; /* Prevent overflow of content */
        padding-bottom: 10px; /* Add some padding at the bottom */
    }

    .card-title {
        margin-bottom: 10px; /* Space between title and text */
    }

    .card-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Limit text to 3 lines */
        -webkit-box-orient: vertical;
        line-height: 1.5; /* Adjust line height for readability */
        margin-bottom: 10px; /* Space between text and link */
        flex-grow: 1; /* Allow the text area to grow and occupy available space */
    }

    .selengkapnya {
        margin-top: auto; /* Push link to the bottom of the card body */
        align-self: flex-start; /* Align link to the left */
        text-decoration: underline;
    }
</style>

<nav aria-label="breadcrumb" style="margin-top: 4.5em;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" class="topic">Topik</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kelembagaan</li>
  </ol>
</nav>

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
            <a href="#" class="news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('image/bps_tuban.jpg') }}" alt="Logo" style="height: 180px; margin-right: 10px;" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="news-link selengkapnya">Selengkapnya...</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sidebar Column -->
  <div class="col-md-4">
    <!-- Berita Lainnya Card -->
    <div class="card mb-4" style="width: 100%; height: auto;">
      <div class="card-header" style="background-color: #55679C; color: white">
        <strong> Berita Lainnya!</strong>
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
      <div class="card-header" style="background-color: #55679C; color: white">
        <strong>Statistik Pengunjung</strong>
      </div>
      <div class="card-body">
        <p class="card-text">Total Pengunjung: 1200</p>
        <p class="card-text">Pengunjung Hari Ini: 150</p>
        <p class="card-text">Pengunjung Bulan Ini: 4500</p>
      </div>
    </div>
  </div>
</div>

<!-- Pagination at the bottom -->
<nav aria-label="Page navigation example" style="margin-top: 2em;">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link news-link" href="#">Sebelumnya</a></li>
    <li class="page-item"><a class="page-link news-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link news-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link news-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link news-link" href="#">Selanjutnya</a></li>
  </ul>
</nav>

@endsection
