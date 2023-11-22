<html>

    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap');

            * {
                padding: 0;
                margin: 0;
            }

            .nav {
                background-color: #FFFFFF;
                justify-content: space-between;
                display: flex;
                padding: 0 10%;
                height: 120px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.11),
                    0 2px 2px rgba(0, 0, 0, 0.11),
                    0 4px 4px rgba(0, 0, 0, 0.11),
                    0 8px 8px rgba(0, 0, 0, 0.11),
                    0 16px 16px rgba(0, 0, 0, 0.11),
                    0 32px 32px rgba(0, 0, 0, 0.11);
            }

            .image-logo {
                display: flex;
                align-items: center;
                justify-content: center;
            }


            .button-login {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .login-text {
                Padding: 11px 34px 11px 34px;
                border-radius: 100px;
                background: #342265;
                font-family: 'Nunito', sans-serif;
                color: #FFFFFF;
                text-decoration: none;
            }

            .image-logo {
                width: 100px;
            }
        </style>
    </head>

    <body>
        <div class="nav">
            <div class="image-logo">
                <img src="{{ asset('/Image/Logo.svg') }}" alt="" class="image-logo">
            </div>
            <div class="button-login">
                <a href="login" class="login-text">Masuk</a>
            </div>
        </div>
    </body>

</html>
