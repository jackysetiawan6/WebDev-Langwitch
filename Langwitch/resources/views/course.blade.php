<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/course.css') }}">

</head>

<body>
    <div class="super-container-course">
        @if (!session()->has('loginId'))
        <script>
            window.location.href = '/login';
        </script>
        @endif
        <?php

        use App\Models\User; ?>
        @if (User::find(session('loginId'))->is_new != -1)
        <script>
            window.location.href = '/pretest';
        </script>
        @endif
        @include('courseheader')
        <div class="video-ppt-test">
            <a href="videocourse" class="video-course-class">
                <div>
                    <div class="inside-box">
                        <img src="{{ asset('/Images/videoplayer.svg') }}" alt="" class="logo-list">
                        <p>Video Pembelajaran</p>
                    </div>
                </div>
            </a>
            <a href="pptcourse" class="ppt-course-class">
                <div>
                    <div class="inside-box">
                        <img src="{{ asset('/Images/videoscreen.svg') }}" alt="" class="logo-list">
                        <p>Power Point Penjelasan</p>
                    </div>
                </div>
            </a>
            <a href="testcoursefirst" class="test-course-class">
                <div>
                    <div class="inside-box">
                        <img src="{{ asset('/Images/Test.svg') }}" alt="" class="logo-list">
                        <p>Test Sekarang!</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>
<script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
<script src="{{ asset('js/testcoursefirst.js') }}"></script>

</html>