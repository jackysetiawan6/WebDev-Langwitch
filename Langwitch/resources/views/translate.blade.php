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
    <div class="container">
        @include('sidebar')
        <div class="container-content-bg">
            <div class="translator-container">
                <h1 class="h1-mod">terjemahan</h1>
                <div class="translator">
                    <p class="slator-mod">Indonesia <img src="./images/exchange.png" alt="" class="slator-mod-img"> English</p>
                    <input type="text" class="input-translate-mod" placeholder="Type to Translate">
                    <button class="button-translate-mod">Translate</button>
                </div>
                <div class="mplek">
                    <p class="slator-mod-secondary">Translation</p>
                    <p class="trans-result">Watch</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
    </div>
</body>

</html>