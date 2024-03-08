<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Langwitch - Learn languages by yourself</title>
        <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/review.css') }}">
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
                <div class="study-page">
                    <div class="super-title">
                        <h1>Review Pelajaran Sebelumnya</h1>
                        <div class="heart-level">
                            @for ($i = 1; $i <= 3; $i++)
                                @if ($i <= $user->live)
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
                            <p>Total exp mu</p>
                            <p class="exp-num">{{ $user->exp }}</p>
                        </div>
                    </div>
                    <div class="course-page">
                        <p class="course-title">Course 1 : Vocabulary</p>
                        <a href="videocourse" class="course-subtitle-2">
                            <div>
                                <div class="inside-box">
                                    <img src="{{ asset('/Images/videoplayer.svg') }}" alt="" class="logo-list">
                                    <p>Video Pembelajaran</p>
                                </div>
                            </div>
                        </a>
                        <a href="pptcourse" class="course-subtitle-2">
                            <div>
                                <div class="inside-box">
                                    <img src="{{ asset('/Images/videoscreen.svg') }}" alt="" class="logo-list">
                                    <p>Power Point Penjelasan</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
        </div>
    </body>

</html>
