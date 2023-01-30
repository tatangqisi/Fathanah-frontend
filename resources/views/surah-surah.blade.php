@extends('layout.index')

@section('container')

<div class="surah">
    <div class="surah-header">
        <img src="{{asset('items/00.jpg')}}" alt="">
        <div class="surah-title">
            <h1>Al-Qur'an</h1>
        </div>
    </div>
    <div class="surah-cont">
        <div class="surah-search">
            <input type="text" name="" id="">
            <button></button>
        </div>
        <div class="surah-content">
            <div class="surah1">
                <h2>Arab</h2>
                <h3>Latin</h3>
                <p>Arti</p>
            </div>
            <div class="surah1">
                <h2>Arab</h2>
                <h3>Latin</h3>
                <p>Arti</p>
            </div>
            <div class="surah1">
                <h2>Arab</h2>
                <h3>Latin</h3>
                <p>Arti</p>
            </div>
        </div>
    </div>
</div>

@endsection