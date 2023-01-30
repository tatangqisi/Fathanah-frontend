<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <!-- Link CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pilih-foto.css')}}">

    <title>{{ $title }}</title>
</head>

<body>
    <div class="bodies">
        <div class="header">
            <nav>
                <a href="/home">
                    <h1>kammi</h1>
                </a>
            </nav>
        </div>
        <div class="container">
            <div class="back">
                <img src="{{asset('icons/42.png')}}" alt="Back Button" class="back-img" onclick="window.history.back()">
            </div>
            <div class="h1">
                <h1>Pilih Foto yang Kamu Sukai</h1>
            </div>
            <div class="img">
                <img src="{{asset('items/16.png')}}" alt="Foto Profil">
                <img src="{{asset('items/16.png')}}" alt="Foto Profil">
                <img src="{{asset('items/16.png')}}" alt="Foto Profil">
                <img src="{{asset('items/16.png')}}" alt="Foto Profil">
                <img src="{{asset('items/16.png')}}" alt="Foto Profil">
                <img src="{{asset('items/16.png')}}" alt="Foto Profil">
                <img src="{{asset('items/16.png')}}" alt="Foto Profil">
                <img src="{{asset('items/16.png')}}" alt="Foto Profil">
            </div>

            <div class="buttons">
                <button type="submit">Pilih</button>
            </div>
        </div>
        <div class="footer">
            <footer>
                <p>Copyright © 2022. All Rights Reserved.</p>
            </footer>
        </div>
    </div>
</body>

</html>