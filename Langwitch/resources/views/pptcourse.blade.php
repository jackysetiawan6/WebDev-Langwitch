<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/courseheader.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pptcourse.css') }}">
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
    <div class="course-header">
        <div>
            <div class="cross-close">
                <a href="course"><img src="{{ asset('/Images/close.svg') }}" alt="" class="image-book-home"></a>
            </div>
        </div>
        <div class="title-move">
            <div class="title-course">
                <p>Power Point Penjelasan</p>
                <div class="video-title-for-vids-course">Course 1 : vocabulary</div>
                {{-- course dapat berubah2 --}}
            </div>
        </div>
    </div>
    <div class="ppt-course">
        <div>
            <button class="button-next-prev prev"><img src="../images/Prev.svg" alt=""></button>
        </div>
        <div class="ppt-editor-placement">
            <div class="slide">
                <iframe src="https://onedrive.live.com/embed?resid=2206A51118E81577%21143&amp;authkey=!AEjlamqhQ0Qy3eE&amp;em=2&amp;wdAr=1.7777777777777777&amp;wdEaaCheck=1" width="880px" height="480px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft
                        Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
            </div>

            <div class="slide">
                <iframe src="https://onedrive.live.com/embed?resid=2206A51118E81577%21149&amp;authkey=!ADHqtrrF0P5jzLU&amp;em=2&amp;wdAr=1.7777777777777777&amp;wdEaaCheck=1" width="880px" height="480px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft
                        Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
            </div>

            <div class="slide">
                <iframe src="https://onedrive.live.com/embed?resid=2206a51118e81577%21148&amp;authkey=!AH88k0kNHPRqTpA&amp;em=2&amp;wdAr=1.7777777777777777&amp;wdEaaCheck=1" width="880px" height="480px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft
                        Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
            </div>

            <div class="slide">
                <iframe src="https://onedrive.live.com/embed?resid=2206A51118E81577%21147&amp;authkey=!AJKohFWrguqXAMY&amp;em=2&amp;wdAr=1.7777777777777777" width="880px" height="480px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft
                        Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
            </div>

            <div class="slide">
                <iframe src="https://onedrive.live.com/embed?resid=2206a51118e81577%21146&amp;authkey=!AMwUuJXSwLcq1JQ&amp;em=2&amp;wdAr=1.7777777777777777&amp;wdEaaCheck=1" width="880px" height="480px" frameborder="0">This is an embedded <a target="_blank" href="https://office.com">Microsoft
                        Office</a> presentation, powered by <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
            </div>
        </div>
        <div>
            <button class="button-next-prev next"><img src="../images/Next.svg" alt=""></button>
        </div>
    </div>
    <div class="ppt-course-etc">

    </div>

    <script>
        class SlideV {
            constructor() {
                this.slides = document.querySelectorAll('.slide')
                this.currentSlide = 0
                this.showSlide(this.currentSlide)
            }

            next() {
                this.currentSlide++
                if (this.currentSlide >= this.slides.length) {
                    this.currentSlide = 0
                }
                this.showSlide(this.currentSlide)
            }

            prev() {
                this.currentSlide--
                if (this.currentSlide < 0) {
                    this.currentSlide = this.slides.length - 1
                }
                this.showSlide(this.currentSlide)
            }

            showSlide(index) {
                this.slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.style.display = 'block'
                    } else {
                        slide.style.display = 'none'
                    }
                })
            }
        }

        const mySlideV = new SlideV()

        const next = document.querySelector('.next')
        const prev = document.querySelector('.prev')

        next.addEventListener('click', () => {
            mySlideV.next()
        })
        prev.addEventListener('click', () => {
            mySlideV.prev()
        })
    </script>

</body>

</html>