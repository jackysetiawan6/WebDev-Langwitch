<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Langwitch - Learn languages by yourself</title>
        <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/testcoursefirst.css') }}">
    </head>

    <body>
        @if (!session()->has('loginId'))
            <script>
                window.location.href = '/login';
            </script>
        @endif
        <div class="container-course-first">
            <div class="title-container">
                Course 1: Vocabulary
            </div>
            {{-- {{ $Question->links() }}
            @php
                use Spatie\LaravelHtml\HtmlFacade as Html;
                $currentPage = $Question->currentPage();
                $lastPage = $Question->lastPage();
            @endphp

            <form action="{{ route('submit_answers', ['page' => $currentPage]) }}" method="post">
                @csrf

                @foreach ($Question as $q)
                    <div class="soal-course-first">
                        {{ $q['soal'] }}
                    </div>
                    <div class="jawaban-course-first">
                        @foreach (['opt_a', 'opt_b', 'opt_c', 'opt_d', 'opt_e'] as $optionKey)
                            <label class="radio-label">
                                <input type="radio" name="answers[{{ $q['exercise_id'] }}]" value="{{ $optionKey }}"
                                    class="ans-effect activator">
                                <span class="radio-text">{{ $q[$optionKey] }}</span>
                            </label>
                        @endforeach
                    </div>
                @endforeach

                <div class="button-answer">
                    @if ($currentPage == $lastPage)
                        <a href="{{ url('/course') }}" class="answer-the-question">Done</a>
                    @else
                        <button class="answer-the-question" type="submit">Jawab</button>
                    @endif
                </div>
            </form> --}}

            {{ $Question->links() }}
            @php
                use Spatie\LaravelHtml\HtmlFacade as Html;
                $currentPage = $Question->currentPage();
                $lastPage = $Question->lastPage();
            @endphp

            <form id="questionForm" action="{{ route('submit_answers', ['page' => $currentPage]) }}" method="post">
                @csrf

                @foreach ($Question as $q)
                    <div class="soal-course-first">
                        {{ $q['soal'] }}
                    </div>
                    <div class="jawaban-course-first">
                        @foreach (['opt_a', 'opt_b', 'opt_c', 'opt_d', 'opt_e'] as $optionKey)
                            <label class="radio-label">
                                <input type="radio" name="answers[{{ $q['exercise_id'] }}]" value="{{ $optionKey }}"
                                    class="ans-effect activator">
                                <span class="radio-text">{{ $q[$optionKey] }}</span>
                            </label>
                        @endforeach
                    </div>
                @endforeach

                <div class="button-answer">
                    @if ($currentPage == $lastPage)
                        <button class="answer-the-question" type="button" onclick="doneButtonClicked()">Done</button>
                    @else
                        <button class="answer-the-question" type="submit">Jawab</button>
                    @endif
                </div>
            </form>

            <script>
                function doneButtonClicked() {
                    var radios = document.querySelectorAll('input[type=radio]:checked');
                    if (radios.length < {{ count($Question) }}) {
                        alert("Please answer all the questions before proceeding.");
                    } else {
                        document.getElementById('questionForm').submit();
                    }
                }
            </script>

            @if (isset($results))
                <div class="results">
                    <h2>Results:</h2>
                    @foreach ($results as $exerciseId => $result)
                        <p>Question {{ $exerciseId }}: {{ $result ? 'Correct' : 'Incorrect' }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </body>

</html>
