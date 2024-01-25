const modeToggleElements = document.querySelectorAll('.night-mode-toggle');
const darkModeElement = document.querySelector('.container-content-bg');
const darkmodesidebar = document.querySelector('.sidebar');
const borderchange = document.querySelectorAll('.list-sidebar');

const sideBar = document.querySelectorAll(".list-sidebar ul li");
const exittext = document.querySelector('.exit-sidebar li');

const nightmodecourse = document.querySelector('.course-subtitle-1')
const nightmodecourse2 = document.querySelector('.course-subtitle-2')

const nightmodecoursetext = document.querySelector('.course-subtitle-1 p')
const nightmodecoursetext2 = document.querySelector('.course-subtitle-2 p')

const nightmodetitle = document.querySelector('.course-page p');
const nightmodetitle2 = document.querySelector('.super-title h1');
const handleModeToggle = () => {
    darkModeElement.classList.toggle('active');
    darkmodesidebar.classList.toggle('active');
    nightmodecourse.classList.toggle('active');
    nightmodecourse2.classList.toggle('active');
    nightmodecoursetext.classList.toggle('active');
    nightmodecoursetext2.classList.toggle('active');
    nightmodetitle.classList.toggle('active');
    nightmodetitle2.classList.toggle('active');
    modeToggleElements.forEach((element) => element.classList.toggle('active'));
    exittext.classList.toggle('active');
    if (!sideBar[0].classList('active')) {
        sideBar.forEach((el) => {
            el.classList.add('active');
        })
    } else {
        sideBar.forEach((el) => {
            console.log(el);
            el.classList.remove('active');
        })
    }

};

modeToggleElements.forEach((element) => element.addEventListener('click', handleModeToggle));
