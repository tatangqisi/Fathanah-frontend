@extends('layout.index')

@section('container')

<div class="quran">
    <div class="quran-head">
        <img src="{{asset('items/00.jpg')}}" alt="">
        <div class="quran-title">
            <h1>Al-Qur'an</h1>
        </div>
    </div>
    <div class="quran-cont">
        <h1>Daftar Surat</h1>
        <div class="quran-content">
            <div class="surah-surah">
                <h2>1</h2>
                <div class="nama-surah">
                    <p>Al-Fatihah</p>
                    <span>Pembukaan</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection