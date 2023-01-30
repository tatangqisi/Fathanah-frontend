@extends('layout.index')

@section('container')
<div class="mydiarymain">
    <a href="/beranda" style="width: 50px; height: 50px;"><img src="{{asset('icons/42.png')}}" alt="" class="back-img"></a>
    <div class="main-diary">
        <h1>MyDiary</h1>
        <img src="{{asset('icons/36.png')}}" alt="">
    </div>
    <div class="main-diary-com">
        <button type="button" class="buttondiary"><a href="/mydiary/tulis-diary">Buat Diary</a></button>
        @foreach($Data['Data'] as $s)
        <div class="cont-diarymain">
            <div class="h-cont-diarymain">
                <a href="/mydiary/{$slug}">{{ $s['subject'] }}</a>
                <h4> {{ $s['time'] }}</h4>
            </div>
            <div class="im-cont-diarymain1">
                <a href="{{ url('mydiary/'.$s['no']) }}"> <img src="{{asset('icons/edit-button.png')}}" alt=""></a>
            </div>
            <div class="im-cont-diarymain">
                <form action="{{ url("delete") }}" method="POST" enctype="application/json">
                    {{ csrf_field() }}
                    <input type="hidden" name="no" value="{{ $s['no'] }}">
                    <button class="buttondelete"><img src="{{asset('icons/2.png')}}" alt=""></button>
                    <span class="d-alert">Hapus</span>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection