@extends('layout.index1')

@section('container1')
<div class="berita1">
    <div class="artikel-header1">
        @foreach($Data['Data'] as $s)
        <div class="artikel-path">
            <a href="/">Beranda /</a>
            <a href="/artikel">Berita /</a>
            <a href="{{ url('/artikel/'.$s['id']) }}">{{ $s['title']}}</a>
        </div>
        <div class="judul-berita">
            <h1>{{ $s['title']}}</h1>
            <span>{{ $s['time']}}</span>
        </div>
    </div>
    <div class="artikel-header2">
        <div class="berita-column1">
            <div class="gambar-berita">
                <img src="http://192.168.138.139:5000/{{ $s['path']}}/{{ $s['img']}}" alt="{{ $s['title'] }}">
            </div>
            <div class="artikel-berita">
                <article>
                    <p> {!! htmlspecialchars_decode($s['isi']) !!}</p>
                </article>
            </div>
        </div>
        @endforeach

        <div class="berita-column2">
            <div class="header-menu-berita">
                <h4>Artikel Lainnya</h4>
                <hr>
            </div>
            @foreach($Data2['Data2'] as $s)
            <div class="menu-berita">
                <a href="{{ url('artikel/'.$s['id']) }}">
                    <h3>{{ $s['title']}}</h3>
                </a>
                <span>- {{ $s['time']}}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection