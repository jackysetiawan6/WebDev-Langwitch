<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="stylesheet" href="{{ asset('css/pretest.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon">
</head>

<body>
    @if (!$user->is_new)
    <script>
        window.location.href = '/homecourse';
    </script>
    @endif
    <div class="container">
        <div id="part-start" class="panel">
            <img class="mascot" src="{{ asset('images/Mascot.svg') }}" alt="Mascot">
            <div class="panel-container">
                <p class="title">Halo! sudah siap menjadi seorang penyihir?</p>
                <p class="text">Untuk menjadi seorang penyihir ada beberapa tahap yang harus kamu selesaikan, namun untuk rookie seperti kalian, kalian bisa mencoba untuk mengerjakan sebuah test rahasia dari kami.</p>
                <button class="button-01">Kerjakan test rahasia</button>
                <button class="button-02">Mulai sebagai rookie</button>
            </div>
        </div>
        <div id="part-test" class="panel">
            <img class="mascot" src="{{ asset('images/Mascot.svg') }}" alt="Mascot">
            <div class="panel-container">
                <p class="title">Apa sih test rahasia?</p>
                <p class="text">Di test ini para penyihir akan diberikan beberapa pertanyaan berkaitan dengan bahasanya untuk menguji seberapa jauh sih kalian sudah belajar supaya kalian dapat langsung ke jenjang yang tepat!</p>
                <button class="button-01">Mulai test rahasia</button>
                <button class="button-02">Gamau ah, rookie aja</button>
            </div>
        </div>
        <div id="part-rookie" class="panel success">
            <img class="mascot" src="{{ asset('images/Mascot.svg') }}" alt="Mascot">
            <div class="panel-container">
                <p class="title">Selamat Datang di Langwitch<br>Rookie {{ $user->fullname; }}!</p>
                <button class="button-01">Jelajahi Langwitch!</button>
            </div>
        </div>
        <div id="part-level" class="panel success">
            <img class="mascot" src="{{ asset('images/Mascot.svg') }}" alt="Mascot">
            <div class="panel-container">
                <p class="title">Selamat Datang di Langwitch<br>{{ $user->badge }} {{ $user->fullname; }}!</p>
                <button class="button-01">Jelajahi Langwitch!</button>
            </div>
        </div>
        <div id="part-pass" class="panel question-01">
            <div class="panel-container">
                <p class="title">Langwitch Test Pass</p>
                <p class="text">Di test ini para penyihir akan diberikan beberapa pertanyaan berkaitan dengan bahasanya untuk menguji seberapa jauh sih kalian sudah belajar supaya kalian dapat langsung ke jenjang yang tepat!</p>
                <div class="choices">
                    <button class="button-03">Jawaban 1</button>
                    <button class="button-03">Jawaban 2</button>
                    <button class="button-03">Jawaban 3</button>
                    <button class="button-03">Jawaban 4</button>
                    <button class="button-03">Jawaban 5</button>
                </div>
                <button class="button-01">Jawab</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/pretest.js') }}"></script>
</body>

</html>