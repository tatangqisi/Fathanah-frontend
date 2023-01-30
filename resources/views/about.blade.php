@extends('layout.index')

@section('container')

<div class="about">
    <div class="about-h">
        <h1>TENTANG KAMMI</h1>
    </div>
    @foreach($Data1['Data1'] as $s)
    <div class="h-about">
        <article>
            {!! htmlspecialchars_decode($s['isi']) !!}
        </article>
        <img src="http://192.168.138.139:5000/{{ $s['path']}}/{{ $s['img']}}" alt="Kammi">
    </div>
    @endforeach

    <div class="about-h">
        <h1>TIM KAMI</h1>
    </div>
    <div class="f-about">
        @foreach($Data2['Data2'] as $r)
        <div class="fmn">
            <img src="http://192.168.138.139:5000/{{ $r['path']}}/{{ $r['img']}}" alt="">
            <div class="fmn-c">
                <h3>Hubungi kami</h3>
                <div class="fmn-m">
                    <a href="/hubungi-kami"><img src="{{asset('icons/7.png')}}" alt="facebook"></a>
                    <a href="/hubungi-kami"><img src="{{asset('icons/4.png')}}" alt="twitter"></a>
                    <a href="/hubungi-kami"><img src="{{asset('icons/8.png')}}" alt="instagram"></a>
                </div>
            </div>
        </div>
        @endforeach

        <div class="a-cards">
            @foreach($Data3['Data3'] as $t)
            <div class="a-card">
                <div class="a-img">
                    <img src="https://drive.google.com/uc?export=view&id={{ $t['img']}}" alt="">
                </div>

                <div class="a-content">
                    <div class="a-name">
                        <h3>{{ $t['name']}}</h3>
                    </div>
                    <div class="a-media">
                        <a href="/hubungi-kami" style="--i:1;"><img src="{{asset('icons/7.png')}}" alt=""></a>
                        <a href="/hubungi-kami" style="--i:2;"><img src="{{asset('icons/4.png')}}" alt=""></a>
                        <a href="/hubungi-kami" style="--i:3;"><img src="{{asset('icons/8.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection