<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
</head>

<body>
    @if (session()->has('loginId'))
    <script>
        window.location.href = '/homecourse';
    </script>
    @endif
    @if (session()->has('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
    @endif
    @if (session()->has('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif
    @include('navbar')
    <div class="home">
        <div class="home-container-1">
            <img src="{{ asset('/Images/Mascot.svg') }}" alt="" class="image-mascot-home">
            <img src="{{ asset('/Images/TitleHome.svg') }}" alt="" class="title-Home">
            <p class="text-home">Dimana pembelajaran bahasa dihadirkan dalam nuansa magis! Terjunlah dalam
                perjalanan yang memikat
                untuk menemukan keajaiban yang tidak terduga saat Anda belajar disini!</p>
            <a href="login" class="home-button-top">Mari masuk ke jalan yang magis!</a>
        </div>
        <div class="home-container-2">
            <img src="{{ asset('/Images/BookHome.svg') }}" alt="" class="image-book-home">
            <div class="text-home-container-2">
                <div class="title-home-2">
                    Belajar jadi lebih seru!
                </div>
                <div class="text-home-2">
                    Dengan konsep yang unik, langwitch akan membuat pengalaman belajar kalian menjadi lebih
                    menyenangkan dan berbeda dari yang lain
                </div>
            </div>
        </div>
        <div class="home-container-3">
            <img src="{{ asset('/Images/BottleHome.svg') }}" alt="" class="iamge-bottle-home">
            <div class="text-home-container-3">
                <div class="title-home-3">
                    Tetap produktif dan teratur
                </div>
                <div class="text-home-3">
                    Takut lupa materi? tenang! langwitch menyediakan fitur dimana kalian bisa review dan kalian juga
                    dapat melihat progress kalian juga lho
                </div>
            </div>
        </div>
        <div class="home-container-4">
            <img src="{{ asset('/Images/HandHome.svg') }}" alt="" class="iamge-hand-home">
            <div class="text-home-container-4">
                <div class="title-home-4">
                    Bersaing di papan skor!
                </div>
                <div class="text-home-4">
                    Tidak ada lagi kata malas karena sistem leaderboard membuat kalian menjadi lebih semangat untuk
                    menjadi yang nomor satu!
                </div>
            </div>
        </div>
    </div>
</body>

</html>