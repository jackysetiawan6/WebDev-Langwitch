<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/courseheader.css') }}">

</head>

<body>
    <div class="course-header">
        <div>
            <div class="cross-close">
                <a href="{{ url()->previous() }}">
                    <img src="{{ asset('Images/close.svg') }}" alt="" class="image-book-home">
                </a>
            </div>
        </div>
        <div class="title-move">
            <div class="title-course">
                <p>Course 1 : Vocabulary</p>
            </div>
        </div>
    </div>
</body>

</html>