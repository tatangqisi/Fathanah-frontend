@extends('layout.index')

@section('container')
<div class="mydiaryinput">
    <a href="/mydiary" style="width: 50px; height: 50px;"><img src="{{asset('icons/42.png')}}" alt="" class="back-img"></a>
    <div class="main-diary">
        <h1>MyDiary</h1>
        <img src="{{asset('icons/36.png')}}" alt="">
    </div>
    <div class="input-diary">
        <div class="mydiary-input">
            <form action="{{ url("diaryadd") }}" method="POST" enctype="application/json">
                {{ csrf_field() }}
                <input type="text" name="subject" id="diary-title" placeholder="Judul Diary...">
                <textarea type="text" name="body" id="diary" placeholder="Tulis Diary..."></textarea>
                <button type="submit" class="diary-submit">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection