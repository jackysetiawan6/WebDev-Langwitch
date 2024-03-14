<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Langwitch - Learn languages by yourself</title>
        <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/testcoursefirst.css') }}">

        {{-- <style>
            /* .active #soal-course {
                color: #fff;
            } */

            .active #title-cont {
                color: #fff;
            }
        </style> --}}
    </head>

    <body>
        <div class="super-container">
            @if (!session()->has('loginId'))
                <script>
                    window.location.href = '/login';
                </script>
            @endif
            <div class="container-course-first">
                <div class="title-container" id="title-cont">
                    Course 1: Vocabulary
                </div>

                {{ $Question->links() }}
                @php
                    use Spatie\LaravelHtml\HtmlFacade as Html;
                    $currentPage = $Question->currentPage();
                    $lastPage = $Question->lastPage();
                @endphp

                <form id="questionForm" action="{{ route('submit_answers', ['page' => $currentPage]) }}" method="post">
                    @csrf
                    @foreach ($Question as $q)
                        <div class="soal-course-first" id="soal-course">
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
                            window.location.href = 'course';
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
        </div>
        {{-- <script src="{{ asset('js/testcoursefirst.js') }}"></script> --}}

    </body>
    {{-- <script>
        // Check if dark mode is enabled
        const isDarkMode = localStorage.getItem('darkMode') === 'true';

        // Get the title container element
        const titleContainer = document.getElementById('title-cont');

        // If dark mode is enabled, add the 'active' class to the title container
        if (isDarkMode) {
            titleContainer.classList.add('active');
        }
    </script> --}}

</html>
