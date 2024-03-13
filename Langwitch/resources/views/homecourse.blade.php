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
                        <?php $isUnlocked = true; ?>
                        @for ($i = 1; $i <= 9; $i++) <a href="testcoursefirst" class="jekball blobby{{$i}} {{ !$isUnlocked ? 'locked' : '' }}">
                            @if ($i % 5 == 0)
                            <div class="checkpoint01"></div>
                            <div class="checkpoint02"></div>
                            @else
                            {{ $i }}
                            @endif
                            @for ($j = 1; $j <= 3; $j++) <?php
                                                            $courseProperty = "course_" . str_pad($i, 2, '0', STR_PAD_LEFT);
                                                            $isUnlocked = isset($stars->$courseProperty) && $stars->$courseProperty == 3;
                                                            $isColored = isset($stars->$courseProperty) && $j <= $stars->$courseProperty;
                                                            echo '<img src="../images/FullStar.svg" alt="" style="filter: grayscale(' . ($isColored ? '0' : '1') . ')">';
                                                            ?> @endfor </a>
                                @endfor
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