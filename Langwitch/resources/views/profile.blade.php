<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
</head>

<body>
    <div class="container">
        @if (!session()->has('loginId'))
        <script>
            window.location.href = '/login';
        </script>
        @endif
        @include('sidebar')
        <div class="container-content-bg">
            <div class="container-new">
                <div class="profile-container">
                    <div class="profile-detail">
                        <p class="fullname">{{ $user->fullname }}</p>
                        <p class="email">{{ $user->email }}</p>
                        <p class="badge">[{{ $user->badge }}]</p>
                    </div>
                    <div class="profile-image">
                        <img src="{{ $user->avatar }}" alt="Profile Image" />
                        <div class="editor">
                            <img src="{{ asset('/images/profile_edit.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="heart-level">
                        <img src="{{ asset('/images/heart.svg') }}" alt="" class="logo-list">
                        <img src="{{ asset('/images/heart.svg') }}" alt="" class="logo-list">
                        <img src="{{ asset('/images/heart.svg') }}" alt="" class="logo-list">
                    </div>
                </div>
                <div class="info-container">
                    <div class="panel bigger" id="chart-container">
                        {!! $chart->container() !!}
                    </div>
                    <div class="info-right">
                        <div class="panel">
                            <img src="{{ asset('/images/EXPLogo.svg') }}" alt="" class="logo-list">
                            <div class="panel-detail">
                                <p>{{ $user->exp }} exp</p>
                                <p>Total exp minggu ini</p>
                            </div>
                        </div>
                        <div class="panel">
                            <img src="{{ asset('/images/StreakLogo.svg') }}" alt="" class="logo-list">
                            <div class="panel-detail">
                                <p>{{ $user->streak }} hari!</p>
                                <p>Pertahankan runtunanmu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
    </div>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
</body>

</html>