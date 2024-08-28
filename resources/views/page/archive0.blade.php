@extends('layouts.guest')

@section('content')
<div class="container">
    <div style="margin-top: 5em">
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Link Materi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($archives as $archive)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $archive['title'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($archive['tanggal'])->locale('id')->translatedFormat('j F Y') }}</td>
                        <td>
                            <a href="{{ url($archive['link_materi']) }}" class="btn btn-primary" target="_blank">
                                Detail <i class="bi bi-chevron-double-right"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
