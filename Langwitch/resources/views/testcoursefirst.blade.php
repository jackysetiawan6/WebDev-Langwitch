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
        {{ $Question->links() }}
        {{-- <div class="pagination-styler">
                <p class="text-modifier text-activator">1</p>
                <p class="text-modifier text-activator">2</p>
                <p class="text-modifier text-activator">3</p>
                <p class="text-modifier text-activator">4</p>
                <p class="text-modifier text-activator">5</p>
                <p class="text-modifier text-activator">6</p>
                <p class="text-modifier text-activator">7</p>
                <p class="text-modifier text-activator">8</p>
                <p class="text-modifier text-activator">9</p>
                <p class="text-modifier text-activator">10</p>
                <p class="text-modifier text-activator">11</p>
                <p class="text-modifier text-activator">12</p>
            </div> --}}
        {{-- @foreach ($Question as $q)
                <div class="soal-course-first">
                    {{ $q['soal'] }}
    </div>
    <div class="jawaban-course-first">

        <div class="ans-effect activator">{{ $q['opt_a'] }}</div>
        <div class="ans-effect activator">{{ $q['opt_b'] }}</div>
        <div class="ans-effect activator">{{ $q['opt_c'] }}</div>
        <div class="ans-effect activator">{{ $q['opt_d'] }}</div>
        <div class="ans-effect activator">{{ $q['opt_e'] }}</div>
    </div>
    @endforeach --}}
    @php
    use Spatie\LaravelHtml\HtmlFacade as Html;
    @endphp
    <form action="{{ route('submit_answers') }}" method="post">
        @csrf

        @foreach ($Question as $q)
        <div class="soal-course-first">
            {{ $q['soal'] }}
        </div>
        <div class="jawaban-course-first">
            @foreach (['opt_a', 'opt_b', 'opt_c', 'opt_d', 'opt_e'] as $optionKey)
            <label class="radio-label">
                <input type="radio" name="answers[{{ $q['exercise_id'] }}]" value="{{ $optionKey }}" class="ans-effect activator">
                <span class="radio-text">{{ $q[$optionKey] }}</span>
            </label>
            @endforeach
        </div>
        @endforeach
        <div class="button-answer">
            <button class="answer-the-question" type="submit">Jawab</button>
        </div>
    </form>

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