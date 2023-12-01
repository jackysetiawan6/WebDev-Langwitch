<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/videocourse.css') }}">
    </head>

    <body>
        @include('courseheader')
        <div class="video-styler">
            <div class="video-course-etc">
                <iframe width="880" height="480" src="https://www.youtube.com/embed/WQ3_p28fuN0?si=VrEGhqKVNilEaN5V" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>

    </body>

</html>
