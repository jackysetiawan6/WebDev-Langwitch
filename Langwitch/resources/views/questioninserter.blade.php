<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>questioninserter</title>
    </head>

    <body>
        <form method="POST" action="{{ route('question-store') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Type a text" id="finasim" name="text">
            <button type="submit" class="button-post">Post</button>
        </form>

    </body>

</html>
