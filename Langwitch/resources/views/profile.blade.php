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
            <div class="container">
                <div class="profile-container">
                    <div class="profile-image">
                        <img src="{{ route('profile-image') }}" alt="Profile Image" />
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
    </div>
</body>

</html>