@extends('layout.index')

@section('container')

<div class="jumb-asma">
    <img src="{{asset('items/13.jpg')}}" alt="">
    <div class="AsmaulHusna-Header">
        <h1>Asmaul Husna</h1>
        <div class="plays">
            <div class="play-asm"></div>
            <div class="play-as">
                <img src="{{asset('icons/27.png')}}" alt="" id="PlayIcons">
                <span class="play-al">Agar lebih mudah menghafal, lebih baik sambil mendengarkan</span>
            </div>
        </div>
    </div>
</div>

<div class="as-body">
    @foreach ($Data['Data'] as $data)
    <div class="asmaul-husna">
        <h2>{{ $data['id'] }}</h2>
        <div class="asmaul-content">
            <h4>{{ $data['latin'] }}</h4>
            <p>{{ $data['arti'] }}</p>
        </div>
        <h1>َ{{ $data['arab'] }}</h1>
    </div>
    @endforeach
</div>
<audio id="asmaulHusnaSong">
    <source src="{{asset('items/99_asmaul-husna.mp3')}}" type="audio/mp3">
</audio>

@endsection