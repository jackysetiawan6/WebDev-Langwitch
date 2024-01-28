<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Langwitch - Learn languages by yourself</title>
        <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/diskusi.css') }}" />

    </head>

    <body>

        <div class="container">
            @include('sidebar')
            <div class="container-content-bg">
                <div class="diskusi-container">
                    <p class="new-post">New Post</p>
                    <div class="text-button">
                        <div class="text">
                            <input type="text" placeholder="Type a text" id="finasim">
                            <input type="file" name="" id="file-input" accept="image/*" onchange="previewImage();">
                            <img id="preview">
                            <label for="file-input" id="file-input-label"><img src="{{ asset('images/attachment.png') }}" alt=""></label>
                        </div>
                        <button class="button-post">Post</button>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="{{ asset('js/course.js') }}"></script>
        </div>
    </body>

    <script>
        function previewImage() {
            var file = document.getElementById("file-input").files
            if (file.length > 0) {
                var fileReader = new FileReader()

                fileReader.onload = function(event) {
                    document.getElementById("preview").setAttribute("src", event.target.result)
                }

                fileReader.readAsDataURL(file[0])
            }
        }
    </script>

</html>
