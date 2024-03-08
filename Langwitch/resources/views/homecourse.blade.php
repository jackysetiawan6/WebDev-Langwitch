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
        @include('sidebar')
        <div class="container-content-bg">
            <div class="study-page">
                <div class="super-title">
                    <h1>Good Morning, {{ $user->fullname }}</h1>
                    <div class="heart-level">
                        @for ($i = 1; $i <= 3; $i++) @if ($i <=$user->live)
                            <img src="{{ asset('/images/heart.svg') }}" alt="" style="filter: none;">
                            @else
                            <img src="{{ asset('/images/heart.svg') }}" alt="" style="filter: grayscale(100%);">
                            @endif
                            @endfor
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
                        <p class="exp-num">{{ $weekly }}</p>
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="level-and-button">
                    <div class="level-per-level">
                        <a href="testcoursefirst" class="jekball blobby1">
                            1
                            <img src="../images/FullStar.svg" alt="">
                        </a>
                        <a href="" class="jekball blobby2 locked">
                            2
                        </a>
                        <a href="" class="jekball blobby3 locked">
                            3
                        </a>
                        <a href="" class="jekball blobby4 locked">
                            4
                        </a>
                        <a href="" class="jekball blobby5 locked">
                            5
                        </a>
                        <a href="" class="jekball blobby6 locked">
                            6
                        </a>
                        <a href="" class="jekball blobby7 locked">
                            7
                        </a>
                        <a href="" class="jekball blobby8 locked">
                            8
                        </a>
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