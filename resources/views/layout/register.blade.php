<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login-register.css')}}">

    <title><?= $title; ?></title>
    @foreach($Icon['Icon'] as $s)
    <link rel="shortcut icon" href="http://192.168.138.139:5000/{{ $s['path']}}/{{ $s['img']}}">
    @endforeach
</head>

<body>
    <div class="login-register">
        <div class="register-container">
            <a href="/"><img src="{{asset('icons/42.png')}}" alt="Back" class="back-home"></a>
            <div class="register-cont">
                <h2>Daftar</h2>
                <form id="form2" action="{{ url("register") }}" method="POST" enctype="application/json">
                    {{ csrf_field() }}
                    <div class="register-from">
                        <div class="register-form2">
                            <label>
                                <span>Username</span>
                                <input type="text" name="username" id="user" required>
                            </label>
                            <label>
                                <span>Nama</span>
                                <input type="text" name="name" id="name" required>
                            </label>
                            <label>
                                <span>Email</span>
                                <input type="email" name="email" id="email2" required>
                            </label>
                            <label>
                                <span>Kata Sandi</span>
                                <input type="password" name="password" id="sandi2" required>
                            </label>
                            <label>
                                <span>Ketik Ulang Kata Sandi</span>
                                <input type="password" name="passwordconfirm" id="sandi2" required>
                            </label>
                            <div class="submit2">
                                <button class="submit" type="submit">Daftar</button>
                                <a href="/login">Masuk</a>
                            </div>
                        </div>

                        <div class="pilih-foto">
                            <img src="{{asset('items/12.jpeg')}}" alt="Foto Profil">
                            <a href="/pilih-foto-profil">Tambahkan Foto Profil</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>