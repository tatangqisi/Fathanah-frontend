@extends('layout.index')

@section('container')
<div class="jumb-doa">
    <img src="{{asset('items/14.png')}}" alt="">
    <h1>Doa Harian</h1>
</div>
<div class="doa-doa2">
    <div class="head-doa-doa">
        <h1>Doa Tidur</h1>
        <hr>
    </div>
    <div class="content-doa-doa">
        <div class="isi-doa" id="something">
            <h2>Doa Sebelum Tidur</h2>
            <h1 class="arab">اَلْحَمْدُ للهِ، سُبْحَانَ الَّذِي سَخَّرَ لَنَا هَذَا وَمَا كُنَّا لَهُ مُقْرِنِينَ وَإنَّا إِلَى رَبِّنَا لَمُنْقَلبُونَ
                اَلْحَمْدُ للهِ اَلْحَمْدُ للهِ اَلْحَمْدُ للهِ اَللهُ أَكْبَرُ اَللهُ أَكْبَرُ اَللهُ أَكْبَرُ
                سُبْحَانَكَ إِنِّي ظَلَمْتُ نَفْسِيْ فَاغْفِرْلِيْ فَإِنَّهُ لاَيَغْفِرُ الذُّنُوْبَ إِلاَّ أَنْتَ

            </h1>
            <h3 class="latin">Bismika allahumma ahyaa wa bismika amuut.</h3>
            <h4 class="arti-doa">Artinya: "Dengan nama-Mu Ya Allah aku hidup dan dengan nama-Mu aku mati."</h4>
        </div>

        <div class="isi-doa" id="something">
            <h2>Doa Bangun Tidur</h2>
            <h1 class="arab">الحَمْدُ لِلهِ الًّذِيْ أَحْيَانَا بَعْدَ مَا أَمَاتَنَا وَإِلَيْهِ النُّشُوْرُ</h1>
            <h3 class="latin">Alhamdulillahil ladzi ahyana ba'da ma amatana wa ilaihin nusyur.</h3>
            <h4 class="arti-doa">Artinya: "Segala puji bagi Allah, Tuhan yang menghidupkan kami setelah Ia mematikan kami. Kepada-Nya lah kebangkitan hari Kiamat."</h4>
        </div>
    </div>
</div>
@endsection