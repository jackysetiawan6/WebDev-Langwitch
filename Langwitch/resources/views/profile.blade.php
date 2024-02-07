<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="{{ asset('css/profile.css') }}" /> -->
</head>

<body>
    <div class="container">
        @include('sidebar')
        <div class="container-content-bg">
            <!-- <div class="profile-top">
                <div class="profile-top-left">
                    <p class="profile-name">Name</p>
                    <p class="profile-username">Username</p>
                    <p class="profile-rank">[Rank]</p>
                </div>
                <img class="profile-picture" src="{{ route('profile-image') }}" alt="Logo" class="logo" />
                <div class="heart-level">
                    <img src="http://127.0.0.1:8000/Images/heart.svg" alt="" class="logo-list">
                    <img src="http://127.0.0.1:8000/Images/heart.svg" alt="" class="logo-list">
                    <img src="http://127.0.0.1:8000/Images/heart.svg" alt="" class="logo-list">
                </div>
            </div> -->
        </div>
        <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
    </div>
</body>

</html>