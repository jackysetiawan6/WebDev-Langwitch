<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Langwitch - Learn languages by yourself</title>
        <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/review.css') }}">
        <link rel="stylesheet" href="{{ asset('css/homecourse.css') }}">
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
                <div class="study-page">
                    <div class="super-title">
                        <h1>Good Morning, {{ $user->fullname }}</h1>
                        <div class="heart-level">
                            <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                            <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                            <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                        </div>
                    </div>
                    <div class="level-exp">
                        <div class="level-stats">
                            <div style="padding: 30px">
                                <p>{{ $user->badge }}</p>
                                <p class="level-title">Last Course A1.1,
                                    <span class="level-sub">&nbsp; Course 1 : Vocabulary</span>
                                </p>
                            </div>
                        </div>
                        <div class="exp-stats">
                            {{-- <div class="only-container"> --}}
                            <p>Exp mu minggu ini</p>
                            <p class="exp-num">{{ $user->exp }}</p>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="level-and-button">
                        <div class="level-per-level">
                            <p>a</p>
                        </div>
                        <a href="review" class="jekin">
                            <div class="container-review">
                                <img src="../images/bookhome.svg" alt="" class="image-modifier-for-button">
                                <p class="review-button-modifier">Review pelajaran sebelumnya</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
        </div>
    </body>

</html>
