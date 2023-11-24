<html>

    <head>
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    </head>

    <body>
        <div class="night-mode">
            <a href=""><img src="{{ asset('/Images/Moon.svg') }}" alt="" class="logo-list">
            </a>
        </div>
        <div class="sidebar">
            <div class="sidebar-top">
                <img src="{{ asset('/Images/Logo.svg') }}" alt="" class="image-logo-sidebar">
            </div>
            <div class="list-sidebar">
                <ul>
                    <li>
                        <a href=""><img src="{{ asset('/Images/BookShiny.svg') }}" alt="" class="logo-list">
                            <p>Belajar</p>
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('/Images/LeaderBoardLogo.svg') }}" alt="" class="logo-list">
                            <p>Papan Skor</p>
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('/Images/Messages.svg') }}" alt="" class="logo-list">
                            <p>Diskusi</p>
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('/Images/HumanProfile.svg') }}" alt="" class="logo-list">
                            <p>Profil</p>
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="{{ asset('/Images/Translate.svg') }}" alt="" class="logo-list">
                            <p>Terjemahan</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="exit-sidebar">
                <li>
                    <a href=""><img src="{{ asset('/Images/ExitButton.svg') }}" alt="" class="logo-list">
                        <p>Keluar</p>
                    </a>
                </li>
            </div>
        </div>
    </body>

</html>
