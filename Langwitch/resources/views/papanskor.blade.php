<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Langwitch - Learn languages by yourself</title>
        <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/papanskor.css') }}" />
    </head>

    <body>
        @if (!session()->has('loginId'))
            <script>
                window.location.href = '/login';
            </script>
        @endif
        <div class="container">
            @include('sidebar')
            <div class="container-content-bg">
                <div class="cont-leaderboard">
                    <div class="bordering">
                        <p class="title">Papan Skor</p>
                    </div>
                    @foreach ($User as $user)
                        <div class="leaderboard">
                            <div class="id">{{ $user['id'] }}</div>
                            <div class="profile"><img src="{{ asset('/Images/profpic.svg') }}" alt=""></div>
                            <div class="listed">
                                <div class="name">{{ $user['fullname'] }}</div>
                                <div class="classes">[{{ $user['badge'] }}] <p class="experience">{{ $user['exp'] }} XP</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
        </div>
    </body>

</html>
