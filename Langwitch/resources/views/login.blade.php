<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Langwitch - Learn languages by yourself</title>
        <link rel="stylesheet" href="{{ asset('css/login_register.css') }}" />
        <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    </head>

    <body>
        <div class="container">
            <img src="{{ asset('images/Logo.svg') }}" alt="Logo" class="logo" />
            <form class="middle" action="{{ route('login-success') }}" method="POST">
                @csrf
                <p class="middle-title">Masuk Akun</p>
                <div id="email">
                    <img class="input-icon" src="{{ asset('images/Email.svg') }}" />
                    <input name="email" id="email-input" type="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}" />
                </div>
                <p id="invalid-email" class="invalid-input"></p>
                <div id="password">
                    <img class="input-icon" src="{{ asset('images/Password.svg') }}" />
                    <input name="password" id="password-input" type="password" placeholder="Kata Sandi" autocomplete="off" />
                    <img id="password-eye" class="hide-password" src="{{ asset('images/EyeClosed.svg') }}" onmousedown="reveal_password('password')"
                        onmouseup="hide_password('password')" />
                </div>
                <p id="invalid-password" class="invalid-input"></p>
                <button class="middle-button" type="submit" onclick="validate()">
                    Masuk
                </button>
                <div class="middle-question">
                    <span>Belum punya akun?</span>
                    <a href="register">Daftar</a>
                </div>
            </form>
        </div>
        <script src="{{ asset('js/login.js') }}"></script>
    </body>

</html>
