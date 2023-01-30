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
        <div class="login-container">
            <a href="/"><img src="{{asset('icons/42.png')}}" alt="Back" class="back-home"></a>
            <div class="login-cont">
                <h2>Masuk</h2>
                <form id="form" action="{{ url("login") }}" method="POST" enctype="application/json">
                    {{ csrf_field() }}
                    <div class="login-from">
                        <label>
                            <span>Email/Username</span>
                            <input type="text" name="username" id="email" required>
                        </label>
                        <label>
                            <span>Kata Sandi</span>
                            <input type="password" name="password" id="sandi" required>
                        </label>
                        <p class="forgot-pass">Lupa kata sandi? <a href="#">klik disini</a></p>
                        <div class="submit">
                            <button type="submit">Masuk</button>
                            <a href="/register">Daftar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>