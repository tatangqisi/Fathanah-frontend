@extends('layout.index')
<!-- Link Swiper JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/muslimkidz.css')}}">


@section('container')
<div class="muslimkidz">
    <div class="h-kidz">
        <img src="{{asset('icons/40.png')}}" alt="Sparkling">
        <h1>Muslim Kidz</h1>
        <img src="{{asset('icons/41.png')}}" alt="Sparkling">
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="c-kidz">
                    <a href="/rukun-islam"><img src="{{asset('icons/37.png')}}" alt="Rukun Islam" id="img"></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="c-kidz">
                    <a href="/rukun-iman"><img src="{{asset('icons/38.png')}}" alt="Rukun Iman" id="img"></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="c-kidz">
                    <a href="/kisah-teladan"><img src="{{asset('icons/39.png')}}" alt="Kisah Teladan" id="img"></a>
                </div>
            </div>
        </div>
        <div class="nav-swiper">
            <div class="swiper-button-prev kidz-arrow">
                <img src="{{asset('icons/25.png')}}" alt="prev arrow">
            </div>
            <div class="swiper-button-next kidz-arrow">
                <img src="{{asset('icons/26.png')}}" alt="next arrow">
            </div>
        </div>
    </div>

    <div class="h1-kidz">



    </div>
</div>

<!-- Link Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/muslim-kidz.js"></script>

@endsection