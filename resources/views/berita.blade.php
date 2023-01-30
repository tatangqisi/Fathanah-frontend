@extends('layout.index1')

@section('container1')

<div class="berita">
    <div class="berita-search">
        <form action="{{ url("artikel") }}" method="POST" enctype="application/json">
            {{ csrf_field() }}
            <input type="text" name="title" placeholder="Cari artikel...">
            <button type="submit">Cari</button>
        </form>
    </div>
    <div class="container-berita">
        <div class="content-berita">
            @foreach($Data['Data'] as $d)
            <div class="contentBerita">
                <input type="hidden" value="{{ $d['id'] }}">
                <a href="{{ url('/artikel/'.$d['id']) }}">
                    <img src="http://192.168.138.139:5000/{{ $d['path']}}/{{ $d['img']}}" alt="{{ $d['title'] }}">
                    <p>{{ $d['title'] }}</p>
                </a>
                <span>{{ $d['time'] }}</span>
            </div>
            @endforeach

            <!-- <img src="{{asset('items/16.png')}}" alt="">
            <a href="">
                <p>Kisah Nabi Muhammad SAW dari Lahir sampai Wafat</p>
            </a>
            <span>22 Nobember 2022</span> -->
        </div>
    </div>
</div>

@endsection