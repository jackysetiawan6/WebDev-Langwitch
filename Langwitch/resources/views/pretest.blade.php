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
        <div class="container">
            <div id="part-start" class="panel">
                <img class="mascot" src="{{ asset('images/Mascot.svg') }}" alt="Mascot">
                <div class="panel-container">
                    <p class="title">Halo! sudah siap menjadi seorang penyihir?</p>
                    <p class="text">Untuk menjadi seorang penyihir ada beberapa tahap yang harus kamu selesaikan, namun untuk rookie seperti kalian,
                        kalian bisa mencoba untuk mengerjakan sebuah test rahasia dari kami.</p>
                    <button class="button-01">Kerjakan test rahasia</button>
                    <button class="button-02">Mulai sebagai rookie</button>
                </div>
            </div>
            <div id="part-test" class="panel">
                <img class="mascot" src="{{ asset('images/Mascot.svg') }}" alt="Mascot">
                <div class="panel-container">
                    <p class="title">Apa sih test rahasia?</p>
                    <p class="text">Di test ini para penyihir akan diberikan beberapa pertanyaan berkaitan dengan bahasanya untuk menguji seberapa
                        jauh sih kalian sudah belajar supaya kalian dapat langsung ke jenjang yang tepat!</p>
                    <button class="button-01">Mulai test rahasia</button>
                    <button class="button-02">Gamau ah, rookie aja</button>
                </div>
            </div>
            <div id="part-rookie" class="panel success">
                <img class="mascot" src="{{ asset('images/Mascot.svg') }}" alt="Mascot">
                <div class="panel-container">
                    {{-- fix ini jegen --}}
                    {{-- <p class="title">Selamat Datang di Langwitch<br>Rookie {{ $fullname }}!</p> --}}
                    <p class="title">Selamat Datang di Langwitch<br>Rookie!</p>

                    <button class="button-01">Jelajahi Langwitch!</button>
                </div>
            </div>
            <div id="part-level" class="panel success">
                <img class="mascot" src="{{ asset('images/Mascot.svg') }}" alt="Mascot">
                <div class="panel-container">
                    {{-- fix ini jegen --}}
                    {{-- <p class="title">Selamat Datang di Langwitch<br>Level {{ $fullname }}!</p> --}}
                    <p class="title">Selamat Datang di Langwitch<br>Rookie!</p>

                    <button class="button-01">Jelajahi Langwitch!</button>
                </div>
            </div>
            <div id="part-pass" class="panel question-01">
                <div class="panel-container">
                    <p class="title">Langwitch Test Pass</p>
                    <p class="text">Di test ini para penyihir akan diberikan beberapa pertanyaan berkaitan dengan bahasanya untuk menguji seberapa
                        jauh sih kalian sudah belajar supaya kalian dapat langsung ke jenjang yang tepat!</p>
                    <div class="choices">
                        <form action="{{ route('submit_answers_pretest') }}" method="post" class="choices">
                            @csrf

                            @foreach ($pretest as $p)
                                <div class="soal-course-first">
                                    {{ $p->soal }}
                                </div>
                                <div class="button-03">
                                    @foreach (['a', 'b', 'c', 'd', 'e'] as $optionKey)
                                        <label class="radio-label">
                                            <input type="radio" name="answers[{{ $p->id }}]" value="{{ $optionKey }}"
                                                class="ans-effect activator">
                                            <span class="radio-text">{{ $p->$optionKey }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            @endforeach

                            <div class="button-01">
                                <button class="answer-the-question" type="submit">Jawab</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/pretest.js') }}"></script>
    </body>

</html>
