<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/courseheader.css') }}">
</head>

<body>
    @if (!session()->has('loginId'))
    <script>
        window.location.href = '/login';
    </script>
    @endif
    <div class="course-header">
        <div>
            <div class="cross-close">
                <a href="course"><img src="{{ asset('/Images/close.svg') }}" alt="" class="image-book-home"></a>
            </div>
        </div>
        <div class="title-move">
            <div class="title-course">
                <p>Power Point Penjelasan</p>
                <div class="video-title-for-vids-course">Course 1 : vocabulary</div>
                {{-- course dapat berubah2 --}}
            </div>
        </div>
    </div>
    <div class="ppt-course-etc">

    </div>

</body>

</html>