@extends('layout.index')

@section('container')

<div class="home">
    <!-- slide images start -->
    <div class="myslider">
        <div class="slide-img">
            @foreach($Data1['Data1'] as $s)
            <img src="http://192.168.138.139:5000/{{ $s['path']}}/{{ $s['img']}}" class="home1-img"></a>
            @endforeach
        </div>
    </div>
    <!-- slide images end -->

    <!-- sub menu start -->
    <div class="sub-menu">
        <h1>Apa yang bisa kami bantu untukmu?</h1>
        <div class="submenu">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($Data2['Data2'] as $s)
                    <div class="subMenu swiper-slide">
                        <div class="box">
                            <a href="{{ $s['url'] }}"><img src="http://192.168.138.139:5000/{{ $s['path']}}/{{ $s['img']}}" class="home1-img"></a>
                        </div>
                        <h6>{{ $s['name'] }}</h6>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="SubmenuArrow">
            <div class="swiper-button-prev submenuarrow"><ion-icon name="arrow-back-outline"></ion-icon></div>
            <div class="swiper-button-next submenuarrow"><ion-icon name="arrow-forward-outline"></ion-icon></div>

        </div>
    </div>

    <!-- sub menu end -->

    <!-- waktu shalat start -->

    <div class="waktu-shalat">
        <div class="waktu-shalat-column1">
            <div class="jam" id="jam">
                <div class="jam1">
                    <span id="hours">00</span>
                    <span>:</span>
                    <span id="minutes">00</span>
                    <span>:</span>
                    <span id="secons">00</span>
                </div>
            </div>

            <div class="hari">
                <p id="hari">Hari</p>
                <p>&#44;</p>
                &nbsp;
                <p id="tanggal">tanggal</p>
                &nbsp;
                <p id="bulan">bulan</p>
                &nbsp;
                <p id="tahun">tahun</p>
            </div>
            <div class="waktu-shalat-content">
                <p>Jangan lupa shalat lima waktunya ya</p>
            </div>
        </div>

        <div class="waktu-shalat-column2">
            <div class="kokota">
                <div class="kota-kab">
                    <input type="text" id="input" placeholder="cari kota...">
                    <div class="kota-list hidden-list">
                        <!-- <li>
                            <p>Jakarta</p>
                        </li>
                        <li>
                            <p>Bogor</p>
                        </li>
                        <li>
                            <p>Bekasi</p>
                        </li> -->
                    </div>
                    <!-- <select name="" id="option-kota">
                        <option value="" selected>cari kota...</option>
                        @for($i = 0; $i < 10; $i++) <option value="{{$i}}">{{$i}}</option>
                            @endfor
                    </select> -->

                    <div class="nama-kota">
                        <ion-icon name="location-outline"></ion-icon>
                        <p class="judul-kota">Kota</p>
                    </div>
                </div>

                <div class="jadwal">
                    <div class="jadwalnya">
                        <p>imsak</p>
                        <span id="imsak">00.00</span>
                    </div>
                    <div class="jadwalnya">
                        <p>subuh</p>
                        <span id="subuh">00.00</span>
                    </div>
                    <div class="jadwalnya">
                        <p>terbit</p>
                        <span id="terbit">00.00</span>
                    </div>
                    <div class="jadwalnya">
                        <p>dhuzur</p>
                        <span id="dzuhur">00.00</span>
                    </div>
                    <div class="jadwalnya">
                        <p>ashar</p>
                        <span id="ashar">00.00</span>
                    </div>
                    <div class="jadwalnya">
                        <p>maghrib</p>
                        <span id="maghrib">00.00</span>
                    </div>
                    <div class="jadwalnya">
                        <p>isya'</p>
                        <span id="isya">00.00</span>
                    </div>
                </div>
            </div>
            <div class="circle-shadow"></div>
        </div>
        <!-- <div class="jadwal">
                <div class="grup nyala">
                    <h2>Jakarta</h2>
                    <div class="pagi">
                        <p>Imsak <br> 04.14</p>
                        <p>Subuh <br> 04.24</p>
                        <p>Terbit <br> 05.36</p>
                        <p>Dzuhur <br> 11.47</p>
                    </div>
                    <div class="malam">
                        <p>Ashar <br> 14.53</p>
                        <p>Maghrib <br> 17.51</p>
                        <p>Isya' <br> 18.59</p>
                    </div>
                </div>

                <div class="grup">
                    <h2>Bogor</h2>
                    <div class="pagi">
                        <p>Imsak <br> 04.14</p>
                        <p>Subuh <br> 04.24</p>
                        <p>Terbit <br> 05.36</p>
                        <p>Dzuhur <br> 11.47</p>
                    </div>
                    <div class="malam">
                        <p>Ashar <br> 14.53</p>
                        <p>Maghrib <br> 17.51</p>
                        <p>Isya' <br> 18.59</p>
                    </div>
                </div>

                <div class="grup">
                    <h2>Depok</h2>
                    <div class="pagi">
                        <p>Imsak <br> 04.14</p>
                        <p>Subuh <br> 04.24</p>
                        <p>Terbit <br> 05.36</p>
                        <p>Dzuhur <br> 11.47</p>
                    </div>
                    <div class="malam">
                        <p>Ashar <br> 14.53</p>
                        <p>Maghrib <br> 17.51</p>
                        <p>Isya' <br> 18.59</p>
                    </div>
                </div>

                <div class="grup">
                    <h2>Tanggerang</h2>
                    <div class="pagi">
                        <p>Imsak <br> 04.14</p>
                        <p>Subuh <br> 04.24</p>
                        <p>Terbit <br> 05.36</p>
                        <p>Dzuhur <br> 11.47</p>
                    </div>
                    <div class="malam">
                        <p>Ashar <br> 14.53</p>
                        <p>Maghrib <br> 17.51</p>
                        <p>Isya' <br> 18.59</p>
                    </div>
                </div>

                <div class="grup">
                    <h2>Bekasi</h2>
                    <div class="pagi">
                        <p>Imsak <br> 04.14</p>
                        <p>Subuh <br> 04.24</p>
                        <p>Terbit <br> 05.36</p>
                        <p>Dzuhur <br> 11.47</p>
                    </div>
                    <div class="malam">
                        <p>Ashar <br> 14.53</p>
                        <p>Maghrib <br> 17.51</p>
                        <p>Isya' <br> 18.59</p>
                    </div>
                </div>
            </div>

            <div class="slide-button">
                <img src="{{asset('icons/25.png')}}" alt="<" class="prev">
                <img src="{{asset('icons/26.png')}}" alt=">" class="next">
            </div> -->
    </div>

    <!-- waktu shalat end -->

    <!-- berita start -->
    <div class="news">
        <div class="h-berita">
            <h1>Artikel terbaru</h1>
        </div>

        <div class="news-c">
            <div class="swiper myswiper">
                <div class="swiper-wrapper">
                    @foreach($Data3['Data3'] as $s)
                    <div class="c-berita swiper-slide">
                        <div class="berita-img">
                            <img src="http://192.168.138.139:5000/{{ $s['path']}}/{{ $s['img']}}" alt="{{ $s['judul'] }}">
                        </div>
                        <div class="berita-content">
                            <div class="berita-title">
                                <h3>{{ $s['judul'] }}</h3>
                            </div>
                            <div class="berita-sinop">
                                <p>{{ $s['judul'] }}</p>
                                <a href="/berita/">
                                    <h6>&lt;Baca Selengkapnya&gt;</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev beritaarrow kanan"><ion-icon name="arrow-back-outline"></ion-icon></div>
                <div class="swiper-button-next beritaarrow kiri"><ion-icon name="arrow-forward-outline"></ion-icon></div>

            </div>

            <!-- <div class="c-berita">
                    <div class="berita-img">
                        <img src="{{asset('items/01.jpg')}}" alt="">
                    </div>

                    <div class="berita-content">
                        <div class="berita-title">
                            <h3>Batas Waktu Sholat Subuh dan Hukum Bangun Kesiangan hkjdjisjuiabgiusbhdui
                            </h3>
                        </div>
                        <div class="berita-sinop">
                            <p>Bagaimanakah hukum shalat subuh setelah matahari terbit bagi orang yang bangun kesiangan?</p>
                            <a href="/berita">
                                <h6>&lt;Baca Selengkapnya&gt;</h6>
                            </a>
                        </div>
                    </div>
                </div> -->
        </div>
        <!-- <a href="#"><img src="{{asset('items/02.jpg')}}" alt=""></a> -->

        <a href="/artikel" class="more">
            <p>Lihat artikel lainnya>></p>
        </a>

    </div>
    <!-- berita end -->

    <!-- Hubungi Kami start -->

    <div class="contact">
        <div class="fathanah-contact-form">
            <p>Kritik dan Saran</p>
            <div class="contact-form">
                <form action="{{ url("send") }}" method="POST" enctype="application/json">
                    {{ csrf_field() }}
                    <textarea name="message" id="message" placeholder="Ketik kritik dan saranmu disini..."></textarea>

                    <div class="contact-form-button">
                        <button type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="fathanah-contact">
            <div class="fathanah-contact-logo">
                @foreach ($Logo['Logo'] as $logo)
                <a href="/"><img src="http://192.168.138.139:5000/{{ $logo['path']}}/{{ $logo['img']}}" alt="Fathanah"></a>
                @endforeach
            </div>

            <div class="fathanah-contact-sosmed">
                <div class="contact-sosmed">
                    <a href="#">
                        <ion-icon name="logo-facebook" id="contact-icons"></ion-icon>
                        <p>Fathanah</p>
                    </a>
                </div>
                <div class="contact-sosmed">
                    <a href="#">
                        <ion-icon name="logo-instagram" id="contact-icons"></ion-icon>
                        <p>@fathanah_</p>
                    </a>
                </div>
                <div class="contact-sosmed">
                    <a href="#">
                        <ion-icon name="mail-outline" id="contact-icons"></ion-icon>
                        <p>fathanah@gmail.com</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Hubungi Kami end -->



</div>

@endsection