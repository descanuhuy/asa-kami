@extends('layouts.guest')

@section('content')
<style>
    /* Importing Lora font from Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap');

    /* Styling for news links */
    .news-link {
        color: inherit;
        text-decoration: none;
    }

    .news-link:hover {
        color: #007bff;
        text-decoration: none;
    }

    /* Applying Lora font to the news title */
    .card-title {
        font-family: 'Lora', serif;
        letter-spacing: 0.5px;
        font-size: 1.8rem;
    }

    /* Styling the metadata row */
    .metadata-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        padding: 0 15px;
    }

    .metadata-row .col {
        padding: 0;
    }

    .author {
        font-weight: bold;
    }

    .date {
        font-size: 0.9rem;
        color: gray;
        text-align: right;
    }

    /* Styling badges */
    .badges {
        padding: 0 15px;
        margin-bottom: 20px;
    }
</style>

<div class="row g-4 my-5">
  <!-- Cards Column (Left Side - 2/3) -->
  <div class="col-md-8">
        <div class="col">
            <div class="card">
                <h5 class="card-title text-center" style="padding: 15px 15px 0 15px; margin-bottom: 20px;">{{ $post['title'] }}</h5>    
                <img src="{{ $post['thumbnail'] }}" alt="Thumbnail" style="height: 400px; padding: 0 15px;" class="card-img-top">
                    <!-- <img src="https://via.placeholder.com/600x180" alt="Dummy Image" style="height: 400px; padding: 0 15px;" class="card-img-top"> -->
                <div class="card-body" style="text-align: justify;"> 

                    <!-- Metadata Row -->
                    <div class="metadata-row row">
                        <div class="col-6 author">Penulis: Admin Bisa Tuntas</div>
                        <div class="col-6 date">Tanggal Berita: {{  \Carbon\Carbon::parse($post['tanggal'])->locale('id')->translatedFormat('j F Y') }}</div>
                    </div>

                    <!-- Badges -->
                    <div class="badges">
                        @foreach ($tags as $tag)
                            <span class="badge rounded-pill" style="background-color: #7C93C3;">#{{ $tag->name }}</span>
                        @endforeach
                    </div>
                    {!! 
                        $post['content']
                    !!}

                    <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae lacus non odio varius aliquam. Sed euismod, tortor id ultricies consectetur, augue nisi dictum velit, et sodales metus libero nec est. Nulla facilisi. Mauris ac libero dapibus, condimentum ligula vel, tempor lorem. Sed lacinia velit in turpis malesuada, et posuere elit dictum. Nam suscipit volutpat nisi, vel vehicula libero ornare vel. Curabitur nec tortor eget purus malesuada pharetra non sit amet justo.</p>
                    <p class="card-text">Sed ornare vehicula nulla, vitae hendrerit velit dapibus in. Quisque ultricies sapien ut augue fermentum, in feugiat libero tristique. Aenean tincidunt ex eu dui tincidunt, non pretium tortor tincidunt. Vestibulum at eros massa. Duis bibendum, magna nec lacinia facilisis, odio odio vulputate erat, ac condimentum orci enim a nulla. Donec scelerisque augue justo, non consectetur erat bibendum eget. Integer pulvinar sollicitudin dui, a placerat ligula hendrerit vel. Aenean dictum libero at felis egestas, non pharetra purus vehicula.</p>
                    <p class="card-text">Integer ut nunc vestibulum, luctus nisi vel, ultricies arcu. Vestibulum venenatis, nulla ut luctus feugiat, est lectus aliquet leo, id fringilla libero magna a sapien. Vestibulum nec augue quis mi venenatis fermentum. Aliquam erat volutpat. Ut nec ex sit amet risus tincidunt scelerisque at sit amet magna. Nullam euismod, felis ut suscipit sollicitudin, mi elit dapibus eros, vel hendrerit libero mi vel orci. Morbi sed vestibulum justo, vel suscipit sapien.</p> -->
                </div>
            </div>
        </div>
  </div>

  <!-- Sidebar Column (Right Side - 1/3) -->
  <div class="col-md-4">
    <!-- Berita Terkini Card -->
    <div class="card mb-4" style="width: 100%; height: auto;">
      <div class="card-header" style="background-color: #55679C; color: white">
        <strong>Berita Lainnya</strong>
      </div>
      <ul class="list-group list-group-flush">
            @if (count($otherPosts) > 0)

            @foreach ($otherPosts as $post)
                <li class="list-group-item">
                    <a href="{{ route('news', ['id' => $post['id']]) }}" class="news-link">{{ $post['title'] }}</a>
                </li>
            @endforeach

            @else 
             <div class="alert alert-danger" role="alert">
                Belum ada berita
            </div>
            @endif
      </ul>
    </div>
  </div>
</div>

@endsection
