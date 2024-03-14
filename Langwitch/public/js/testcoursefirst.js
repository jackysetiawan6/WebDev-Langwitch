const darkModeElementquestion = document.querySelector('.super-container');
const darkModeElementcourse = document.querySelector('.super-container-course');
const darkModeElementppt = document.querySelector('.super-container-ppt');
const darkModeElementvideo = document.querySelector('.super-container-video');
if (localStorage.getItem('darkMode') === 'true') {
    if (window.location.pathname === '/testcoursefirst') {
        darkModeElementquestion.style.backgroundColor = '#1D1533';
    }
    else if (window.location.pathname === '/course') {
        darkModeElementcourse.style.backgroundColor = '#1D1533';
    }
    else if (window.location.pathname === '/videocourse') {
        darkModeElementvideo.style.backgroundColor = '#1D1533';

    }
    else if (window.location.pathname === '/pptcourse') {
        darkModeElementppt.style.backgroundColor = '#1D1533';

    }

}
