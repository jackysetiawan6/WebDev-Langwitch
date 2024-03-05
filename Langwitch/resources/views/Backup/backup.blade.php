 {{-- <form action="{{ route('submit_answers', ['page' => $currentPage]) }}" method="post">

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
            @endif --}}
