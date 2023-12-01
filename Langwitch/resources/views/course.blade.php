<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/course.css') }}">

    </head>

    <body>

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
            <a href="" class="test-course-class">
                <div>
                    <div class="inside-box">
                        <img src="{{ asset('/Images/Test.svg') }}" alt="" class="logo-list">
                        <p>Test Sekarang!</p>
                    </div>
                </div>
            </a>
        </div>

    </body>

</html>
