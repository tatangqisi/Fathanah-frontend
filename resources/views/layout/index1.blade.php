<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">


    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/navbar1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/berita.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/berita-berita.css')}}">

    <title><?= $title; ?></title>
    @foreach($Icon['Icon'] as $s)
    <link rel="shortcut icon" href="http://192.168.138.139:5000/{{ $s['path']}}/{{ $s['img']}}">
    @endforeach
</head>

<style>
    .container {
        min-height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>

<body>
    <div class="container">
        @include ('nav.navbar1')

        @yield('container1')

        @include ('footer.footer')
    </div>
</body>

<!-- My JS -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="../js/navbarr.js"></script>

</html>