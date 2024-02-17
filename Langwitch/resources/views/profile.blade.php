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
                    </div>
                    <div class="heart-level">
                        <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                        <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                        <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                    </div>
                </div>
                <div class="info-container">
                    <div class="panel bigger"></div>
                    <div class="info-right">
                        <div class="panel"></div>
                        <div class="panel"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
    </div>
</body>

</html>