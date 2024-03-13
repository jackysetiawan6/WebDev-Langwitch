<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/translate.css') }}" />
</head>

<body>
    @if (!session()->has('loginId'))
    <script>
        window.location.href = '/login';
    </script>
    @endif
    <?php

    use App\Models\User; ?>
    @if (User::find(session('loginId'))->is_new != -1)
    <script>
        window.location.href = '/pretest';
    </script>
    @endif
    <div class="container">
        @include('sidebar')
        <div class="container-content-bg">
            <div class="translator-container">
                <h1 class="h1-mod">Terjemahan</h1>
                <div class="translator">
                    <p class="slator-mod">Indonesia <img src="./images/exchange.png" alt="" class="slator-mod-img"> English</p>
                    <input type="text" id="inputTranslate" class="input-translate-mod" placeholder="Type to Translate">
                    <button id="translateButton" class="button-translate-mod">Translate</button>
                </div>
                <div class="mplek">
                    <p class="slator-mod-secondary">Translation</p>
                    <p id="transResult" class="trans-result"></p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        {{-- to use this install composer require stichoza/google-translate-php --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                function translateText() {
                    var inputText = document.getElementById("inputTranslate").value;
                    var translatedText = performTranslation(inputText);
                    document.getElementById("transResult").innerText = translatedText;
                }

                function performTranslation(text) {
                    return text;
                }
                document.getElementById("translateButton").addEventListener("click", translateText);
            });
        </script>
        <script>
            $(document).ready(function() {
                function translateText() {
                    var inputText = $("#inputTranslate").val();
                    $.get('/translate', {
                        text: inputText
                    }, function(translatedText) {
                        $("#transResult").text(translatedText);
                    });
                }
                $("#translateButton").on("click", translateText);
            });
        </script>
    </div>
</body>

</html>