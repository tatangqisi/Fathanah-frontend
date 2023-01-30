@extends('layout.index')

@section('container')
<div class="jumb-doa">
    <img src="{{asset('items/14.png')}}" alt="Doa">
    <h1>Doa Harian</h1>
</div>
<div class="doaharian">
    @foreach ($Data['Data'] as $doa)
    <div class="doa-doa">
        <div class="kategori-doa">
            <h1>{{ $doa['katagori'] }}</h1>
        </div>
        <div class="nama-doa">
            <a href="/{{ $doa['katagori'] }}?highlight=something"><button> {{ $doa['judul']   }}</button></a>
        </div>

    </div>
    @endforeach
</div>
@endsection