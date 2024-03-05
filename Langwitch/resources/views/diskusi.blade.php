<!DOCTYPE html>
<html lang="en">

@php
\Carbon\Carbon::setLocale('id');
@endphp

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/discussion.css') }}" />

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
            <div class="container-all">
                <div class="post-panel header-post">
                    <p class="title">Unggahan terbaru</p>
                    <form class="posting" method="post" action="{{ route('diskusi-store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" placeholder="Ketik teks" class="input-post" name="text" autocomplete="false">
                        <button type="submit" class="button-post">Unggah</button>
                    </form>
                </div>
                <div class="posts">
                    @foreach ($discussions as $d)
                    <div class="post-panel">
                        <div class="post-header">
                            <img class="profile-pics" src="{{ $d->user->avatar }}" alt="">
                            <div class="profile-detail">
                                <p class="profile-name">{{ $d->user->fullname }}<span class="profile-rank">[{{ $d->user->badge }}]</span></p>
                                <p class="profile-time">{{ $d->updated_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="post-content">
                            <p class="content-text">{{ $d->text }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
    </div>
</body>

</html>