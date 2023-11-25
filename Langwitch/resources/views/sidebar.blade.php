<html>

    <head>
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    </head>

    <body>
        <div class="night-mode-toggle">
        </div>
        <div class="container">
            <div class="sidebar">
                <div class="sidebar-top">
                    <img src="{{ asset('/Images/Logo.svg') }}" alt="" class="image-logo-sidebar">
                </div>
                <div class="list-sidebar">
                    <ul>
                        <li>
                            <a href=""><img src="{{ asset('/Images/BookShiny.svg') }}" alt="" class="logo-list">
                                <p class="change-dark-mode">Belajar</p>
                            </a>
                        </li>
                        <li>
                            <a href=""><img src="{{ asset('/Images/LeaderBoardLogo.svg') }}" alt="" class="logo-list">
                                <p class="change-dark-mode-1">Papan Skor</p>
                            </a>
                        </li>
                        <li>
                            <a href=""><img src="{{ asset('/Images/Messages.svg') }}" alt="" class="logo-list">
                                <p class="change-dark-mode-2">Diskusi</p>
                            </a>
                        </li>
                        <li>
                            <a href=""><img src="{{ asset('/Images/HumanProfile.svg') }}" alt="" class="logo-list">
                                <p class="change-dark-mode-3">Profil</p>
                            </a>
                        </li>
                        <li>
                            <a href=""><img src="{{ asset('/Images/Translate.svg') }}" alt="" class="logo-list">
                                <p class="change-dark-mode-4">Terjemahan</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="exit-sidebar">
                    <li>
                        <a href=""><img src="{{ asset('/Images/ExitButton.svg') }}" alt="" class="logo-list">
                            <p class="change-dark-mode-5">Keluar</p>
                        </a>
                    </li>
                </div>
            </div>
            <div class="container-content-bg">
            </div>
        </div>

        <script>
            const modeToggleElements = document.querySelectorAll('.night-mode-toggle');
            const darkModeElement = document.querySelector('.container-content-bg');
            const darkmodesidebar = document.querySelector('.sidebar');
            const darkmodetext = document.querySelector('.change-dark-mode');
            const darkmodetext2 = document.querySelector('.change-dark-mode-1');
            const darkmodetext3 = document.querySelector('.change-dark-mode-2');
            const darkmodetext4 = document.querySelector('.change-dark-mode-3');
            const darkmodetext5 = document.querySelector('.change-dark-mode-4');
            const darkmodetext6 = document.querySelector('.change-dark-mode-5');
            const borderchange = document.querySelector('.list-sidebar ul li');

            const handleModeToggle = () => {
                darkModeElement.classList.toggle('active');
                darkmodesidebar.classList.toggle('active');
                darkmodetext.classList.toggle('active');
                darkmodetext2.classList.toggle('active');
                darkmodetext3.classList.toggle('active');
                darkmodetext4.classList.toggle('active');
                darkmodetext5.classList.toggle('active');
                darkmodetext6.classList.toggle('active');
                borderchange.classList.toggle('active');



                modeToggleElements.forEach((element) => element.classList.toggle('active'));
            };

            modeToggleElements.forEach((element) => element.addEventListener('click', handleModeToggle));
        </script>
    </body>

</html>
