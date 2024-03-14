<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Langwitch - Learn languages by yourself</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/videocourse.css') }}">
    <link rel="stylesheet" href="{{ asset('css/courseheader.css') }}">
</head>

<body>
    <div class="super-container-video">
        <div class="super-container">

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
                        <a href="{{ url()->previous() }}"><img src="{{ asset('/Images/close.svg') }}" alt="" class="image-book-home"></a>
                    </div>
                </div>
                <div class="title-move">
                    <div class="title-course">
                        <p>Video Pembelajaran</p>
                        <div class="video-title-for-vids-course">Course 1 : vocabulary</div>
                        {{-- course dapat berubah2 --}}
                    </div>
                </div>
            </div>
            <div class="video-styler">
                <div>
                    <button class="button-next-prev prev"><img src="../images/Prev.svg" alt=""></button>
                </div>
                <div class="video-course-etc">
                    <div class="slide">
                        <video width="100%" height="100%" controls>
                            <source src="{{ asset('..\course_video\Course1.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="slide">
                        <video width="100%" height="100%" controls>
                            <source src="{{ asset('..\course_video\Course2.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="slide">
                        <video width="100%" height="100%" controls>
                            <source src="{{ asset('..\course_video\Course3.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="slide">
                        <video width="100%" height="100%" controls>
                            <source src="{{ asset('..\course_video\Course4.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="slide">
                        <video width="100%" height="100%" controls>
                            <source src="{{ asset('..\course_video\Course5.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div>
                    <button class="button-next-prev next"><img src="../images/Next.svg" alt=""></button>
                </div>
            </div>
        </div>
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
<script src="{{ asset('js/testcoursefirst.js') }}"></script>

</html>