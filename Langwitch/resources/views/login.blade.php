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
            <div style="display: none;">
                <img class="input-icon" src="{{ asset('images/Fullname.svg') }}"></img>
                <input id="fullname-input" type="text" placeholder="Nama Lengkap" required>
            </div>
            <div>
                <img class="input-icon" src="{{ asset('images/Email.svg') }}"></img>
                <input id="email-input" type="email" placeholder="Email" required>
            </div>
            <div>
                <img class="input-icon" src="{{ asset('images/Password.svg') }}"></img>
                <input id="password-input" type="password" placeholder="Kata Sandi" required>
                <img id="password-eye" class="hide-password" src="{{ asset('images/EyeClosed.svg') }}" onclick="reveal_password('password')"></img>
            </div>
            <div style="display: none;">
                <img class="input-icon" src="{{ asset('images/Confirmation.svg') }}"></img>
                <input id="confirmation-input" type="password" placeholder="Konfirmasi Kata Sandi" required>
                <img id="confirmation-eye" class="hide-password" src="{{ asset('images/EyeClosed.svg') }}" onclick="reveal_password('confirmation')"></img>
            </div>
            <progress max="100" value="0"></progress>
            <button class="middle-button" onclick="submit_data()">Masuk</button>
            {{-- href="sidebar" --}}
            <div class="middle-question">
                <span>Belum punya akun? <a onclick="change_title()">Daftar</a></span>
                {{-- href="pretest" --}}
            </div>
        </form>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>