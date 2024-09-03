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

    .carousel-control-next-icon , .carousel-control-prev-icon {
      /* color: #007bff; */
      background-color: #007bff;
      border-radius: 8px;
      padding: 16px
    }
  </style>

<!-- @include('partials.carousel') -->
<header class="py-5 bg-light border-bottom mb-4" style="background-image: url('image/bps_tuban.jpg'); background-size: cover; background-position: center; margin-top: 4.9em;">
    <div class="container" style="height: 17em; margin-top: 8em;">
        <div class="text-center my-5">
            <div style="background-color: rgba(0, 0, 0, 0.5); padding: 1em; border-radius: 10px; display: inline-block;">
                <h1 class="fw-bolder" style="color: white;">Selamat datang di BISA TUNTAS!</h1>
                <p class="lead mb-0" style="color: white;">Upaya Peningkatan Pembinaan Statistik Sektoral yang Berkelanjutan dan Berkualitas</p>
            </div>
        </div>
    </div>
</header> 

<div class="container my-5">

    <div class="row gx-5">
      <!-- Cards Column -->

      <div class="col-4">
        <div class="card mb-4" style="width: 100%; height: auto;">
          <div class="card-header" style="background-color: #55679C; color: white">
            <strong>Berita Lainnya</strong>
          </div>
          <ul class="list-group list-group-flush">
            @if (count($otherPosts) === 0)
              <p class="text-center text-danger fs-5">Tidak ada berita lainnya</p>
                    @else
                        @foreach ($otherPosts as $item)
                            <li class="list-group-item"><a href="{{ route('news', ['id' => $item['id']]) }}" class="news-link">{{ $item['title'] }}</a></li>
                        @endforeach
                    @endif
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

        <div class="col-8">
            <div class="row row-cols-1 row-cols-md-2 bg-light px-4 py-5 rounded-custom">
                @foreach ($mainPosts as $post)
                    <div class="col">
                        <div class="card mb-4" style="height: 100%; width: 100%;">
                            <img src="{{ $post['thumbnail'] }}" alt="Thumbnail" style="height: 180px; width: 100%; object-fit: cover;" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post['title'] }}</h5>
                                <p class="card-text">{!! Str::limit($post['content'], 15) !!}</p>
                                <a href="{{ route('news', ['id' => $post['id']]) }}" class="d-flex card-text news-link selengkapnya">Selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if (!$mainPosts)
                    <div class="alert alert-danger" role="alert">
                        Belum ada berita
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
