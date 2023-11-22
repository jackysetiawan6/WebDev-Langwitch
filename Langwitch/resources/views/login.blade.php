<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="middle">
            <p class="middle-title">Masuk Akun</p>
            <div class="name"></div>
            <div class="email"></div>
            <div class="password"></div>
            <div class="confirmation"></div>
            <button class="middle-button">Masuk</button>
            <div class="middle-question">
                <span>Tidak memiliki akun?</span>
                <a onclick="change_title()">Daftar</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>