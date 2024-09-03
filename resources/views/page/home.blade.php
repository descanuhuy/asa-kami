@extends('layouts.guest')

@section('content')

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
