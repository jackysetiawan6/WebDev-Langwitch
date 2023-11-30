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
        <img src="{{ asset('images/Logo.svg') }}" alt="Logo" class="logo">
        <form class="middle">
            <p class="middle-title">Masuk Akun</p>
            <div id="fullname" style="display: none;">
                <img class="input-icon" src="{{ asset('images/Fullname.svg') }}"></img>
                <input id="fullname-input" type="text" placeholder="Nama Lengkap" autocomplete="off">
            </div>
            <p id="invalid-fullname" class="invalid-input"></p>
            <div id="email">
                <img class="input-icon" src="{{ asset('images/Email.svg') }}"></img>
                <input id="email-input" type="email" placeholder="Email" autocomplete="off">
            </div>
            <p id="invalid-email" class="invalid-input"></p>
            <div id="password">
                <img class="input-icon" src="{{ asset('images/Password.svg') }}"></img>
                <input id="password-input" type="password" placeholder="Kata Sandi" autocomplete="off">
                <img id="password-eye" class="hide-password" src="{{ asset('images/EyeClosed.svg') }}" onmousedown="reveal_password('password')" onmouseup="hide_password('password')"></img>
            </div>
            <p id="invalid-password" class="invalid-input"></p>
            <div id="confirmation" style="display: none;">
                <img class="input-icon" src="{{ asset('images/Confirmation.svg') }}"></img>
                <input id="confirmation-input" type="password" placeholder="Konfirmasi Kata Sandi" autocomplete="off">
                <img id="confirmation-eye" class="hide-password" src="{{ asset('images/EyeClosed.svg') }}" onmousedown="reveal_password('confirmation')" onmouseup="hide_password('confirmation')"></img>
            </div>
            <p id="invalid-confirmation" class="invalid-input"></p>
            <progress max="100" value="0"></progress>
            <button class="middle-button" type="button" onclick="validate()">Masuk</button>
            <div class="middle-question">
                <span>Belum punya akun?</span>
                <a onclick="toggle_login_register()">Daftar</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>