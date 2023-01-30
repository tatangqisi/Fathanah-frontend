@extends('layout.index')
<!-- Link Swiper JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/kisahteladan.css')}}">


@section('container')

<div class="kisah-teladan">
    <a href="/muslimkidz"><img src="{{asset('icons/42.png')}}" alt="Back" class="back"></a>
    <div class="h-kt">
        <img src="{{asset('icons/40.png')}}" alt="">
        <h1>Kisah Teladan</h1>
        <img src="{{asset('icons/41.png')}}" alt="">
    </div>

    <div class="swiper MySwiper">
        <div class="swiper-wrapper">
            @foreach($Data['Data'] as $s)
            <div class="swiper-slide">
                <div class="c-kt">
                    <div class="img-ks">
                        <a href="/{{ $s['judul'] }}"><img src="https://drive.google.com/uc?export=view&id={{ $s['img']}}" alt="{{ $s['judul'] }}"></a>
                    </div>
                    <div class="h1-ks">
                        <h1>{{ $s['judul'] }}</h1>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="nav-swiper">
            <div class="swiper-button-prev kidz-arrow">
                <img src="{{asset('icons/25.png')}}" alt="prev arrow">
            </div>
            <div class="swiper-button-next kidz-arrow">
                <img src="{{asset('icons/26.png')}}" alt="next arrow">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Link Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/kisah-teladan.js"></script>

@endsection