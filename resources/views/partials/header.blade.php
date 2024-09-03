
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #1E2A5E">
        <div class="container">
            <a class="navbar-brand" href="#!">
                <img src="{{ asset('image/app_logo.png') }}" alt="Logo" style="height: 30px; margin-right: 10px;">
                <strong>BISA TUNTAS</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @if ( Route::currentRouteName() == 'home')
                    <li class="nav-item "><a class="nav-link active" href="/">Beranda</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    @endif
                     <li class="nav-item dropdown">
                         @if (Route::currentRouteName() == 'topic')
                        <a class="nav-link active dropdown-toggle" id="kategoriDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Topik
                        </a>
                           @else
                             <a class="nav-link dropdown-toggle" id="kategoriDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Topik
                        </a>
                        @endif
                        <ul class="dropdown-menu" aria-labelledby="kategoriDropdown">
                            @foreach($topics as $topic)
                               
                                    <li><a class="dropdown-item" href="/topic/{{ $topic->slug }}">{{ $topic->name }}</a></li>

                            @endforeach
                        </ul>
                        
                    </li>
                    @if ( Route::currentRouteName() == 'archive')
                    <li class="nav-item "><a class="nav-link active" href="{{ route('archive') }}">Arsip</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('archive') }}">Arsip</a></li>
                    @endif
                    @if ( Route::currentRouteName() == 'about')
                    <li class="nav-item "><a class="nav-link active" href="{{ route('about') }}">Tentang Kami</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    @endif
                   
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