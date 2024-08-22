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

@endsection