@extends('layout.index')

@section('container')

<div class="mydiaryview">
    <a href="/mydiary" style="width: 50px; height: 50px;"><img src="{{asset('icons/42.png')}}" alt="" class="back-img"></a>
    <div class="main-diary">
        <h1>MyDiary</h1>
        <img src="{{asset('icons/36.png')}}" alt="">
    </div>

    <div class="mydiary-view">
        @foreach($Data['Data'] as $s)
        <form action="{{ url("update") }}" method="POST" enctype="application/json">
            {{ csrf_field() }}
            <input type="hidden" name="no" value="{{ $s['no'] }}">
            <div class="button-mydiaryview">
                <button>Simpan</button>
            </div>
            <div class="view-diary">
                <div class="title-viewdiary">
                    <input value="{{ $s['subject'] }}" type="text" name="subject" placeholder="subject">
                    <h4>{{ $s['time'] }}</h4>
                </div>
                <textarea name="body" id="diary1">
                {{ $s['body'] }}
                </textarea>
            </div>
        </form>
        @endforeach
    </div>
</div>

@endsection