<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/papanskor.css') }}" />
</head>

<body>
    <div class="container">
        @include('sidebar')
        <div class="container-content-bg" id="huge-container">
            <div class="cont-leaderboard">
                <div class="bordering">
                    <p class="title">Papan Skor</p>
                </div>
                <?php $i = 1; ?>
                @foreach ($User as $user)
                <div class="leaderboard {{$user->id == $currentUser->id ? 'current' : ''}}">
                    @if ($i == 1)
                    <div class="medal"><img src="{{ asset('images/MedalGold.svg') }}" alt=""></div>
                    @elseif ($i == 2)
                    <div class="medal"><img src="{{ asset('images/MedalSilver.svg') }}" alt=""></div>
                    @elseif ($i == 3)
                    <div class="medal"><img src="{{ asset('images/MedalBronze.svg') }}" alt=""></div>
                    @else
                    <div class="id">{{ $i }}</div>
                    @endif
                    <div class="profile"><img src="{{ $user->avatar }}" alt=""></div>
                    <div class="listed">
                        <div class="name">{{ $user['fullname'] }}</div>
                        <div class="classes">[{{ $user['badge'] }}]</div>
                    </div>
                    <p class="experience">{{ $user['exp'] }} XP</p>
                </div>
                <?php $i++; ?>
                @endforeach
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
    </div>
</body>

</html>