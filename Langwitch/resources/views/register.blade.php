<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="stylesheet" href="{{ asset('css/login_register.css') }}" />
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
</head>

<body>
    @if (session()->has('loginId'))
    <script>
        window.location.href = '/profile';
    </script>
    @endif
    <div class="container">
        <img src="{{ asset('images/Logo.svg') }}" alt="Logo" class="logo" />
        <form class="middle" action="{{ route('register-success') }}" method="POST">
            @csrf
            <p class="middle-title">Daftar Akun</p>
            <div id="fullname">
                <img class="input-icon" src="{{ asset('images/Fullname.svg') }}" />
                <input name="fullname" id="fullname-input" type="text" placeholder="Nama Lengkap" autocomplete="off" value="{{ old('fullname') }}" />
            </div>
            <p id="invalid-fullname" class="invalid-input"></p>
            <div id="email">
                <img class="input-icon" src="{{ asset('images/Email.svg') }}" />
                <input name="email" id="email-input" type="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}" />
            </div>
            <p id="invalid-email" class="invalid-input"></p>
            <div id="password">
                <img class="input-icon" src="{{ asset('images/Password.svg') }}" />
                <input name="password" id="password-input" type="password" placeholder="Kata Sandi" autocomplete="off" />
                <img id="password-eye" class="hide-password" src="{{ asset('images/EyeClosed.svg') }}" onmousedown="reveal_password('password')" onmouseup="hide_password('password')" />
            </div>
            <p id="invalid-password" class="invalid-input"></p>
            <div id="confirmation">
                <img class="input-icon" src="{{ asset('images/Confirmation.svg') }}" />
                <input name="confirmation" id="confirmation-input" type="password" placeholder="Konfirmasi Kata Sandi" autocomplete="off" />
                <img id="confirmation-eye" class="hide-password" src="{{ asset('images/EyeClosed.svg') }}" onmousedown="reveal_password('confirmation')" onmouseup="hide_password('confirmation')" />
            </div>
            <p id="invalid-confirmation" class="invalid-input"></p>
            <progress max="100" value="0"></progress>
            <button class="middle-button" type="submit" onclick="validate()">
                Daftar
            </button>
            <div class="middle-question">
                <span>Sudah punya akun?</span>
                <a href="login">Masuk</a>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>