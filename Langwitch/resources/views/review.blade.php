<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/review.css') }}">
    </head>

    <body>
        <div class="container">
            @include('sidebar')
            <div class="container-content-bg">
                <div class="study-page">
                    <div class="super-title">
                        <h1>Review Pelajaran Sebelumnya</h1>
                        <div class="heart-level">
                            <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                            <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                            <img src="{{ asset('/Images/heart.svg') }}" alt="" class="logo-list">
                        </div>
                    </div>
                    <div class="level-exp">
                        <div class="level-stats">
                            <div style="padding: 30px">
                                <p>Rookie</p>
                                <p class="level-title">Last Course A1.1,
                                    <span class="level-sub">&nbsp; Course 1 : Vocabulary</span>
                                </p>
                            </div>
                        </div>
                        <div class="exp-stats">
                            <p>Exp mu minggu ini</p>
                            <p class="exp-num">40 XP</p>
                        </div>
                    </div>
                    <div class="course-page">
                        <p class="course-title">Course 1 : Vocabulary</p>
                        <div class="course-subtitle-1">
                            <img src="{{ asset('/Images/videoplayer.svg') }}" alt="" class="logo-list">
                            <p>&nbsp;Video Pembelajaran</p>
                        </div>
                        <div class="course-subtitle-2">
                            <img src="{{ asset('/Images/videoscreen.svg') }}" alt="" class="logo-list">
                            <p>&nbsp;Power Point Penjelasan</p>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
        </div>
    </body>

</html>
