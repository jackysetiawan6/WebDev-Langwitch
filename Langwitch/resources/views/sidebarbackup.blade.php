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
            const borderchange = document.querySelectorAll('.list-sidebar');

            const sideBar = document.querySelectorAll(".list-sidebar ul li");
            const exittext = document.querySelector('.exit-sidebar li');
            // console.log(sideBar)

            const handleModeToggle = () => {
                darkModeElement.classList.toggle('active');
                darkmodesidebar.classList.toggle('active');
                // borderchange.classList.toggle('active');
                exittext.classList.toggle('active');
                if (!sideBar[0].classList('active')) {
                    sideBar.forEach((el) => {
                        el.classList.add('active')
                    })
                } else {
                    sideBar.forEach((el) => {
                        console.log(el)
                        el.classList.remove('active')
                    })
                }

                if (!borderchange[0].classList('active')) {
                    borderchange.forEach((element) => {
                        element.classList.add('active')
                    })
                } else {
                    borderchange.forEach((element) => {
                        console.log(element);
                        element.classList.remove('active')
                    })
                }

                modeToggleElements.forEach((element) => element.classList.toggle('active'));
            };

            modeToggleElements.forEach((element) => element.addEventListener('click', handleModeToggle));
        </script>
    </body>

</html>
