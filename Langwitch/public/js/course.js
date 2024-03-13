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
    const isDarkMode = darkModeElement.classList.contains('active');
    localStorage.setItem('darkMode', !isDarkMode);
    applyDarkMode(!isDarkMode);
};

const applyDarkMode = (isDarkMode) => {
    document.body.classList.add('no-transition'); // Add class to disable transition
    darkModeElement.classList.toggle('active', isDarkMode);
    darkmodesidebar.classList.toggle('active', isDarkMode);
    nightmodecourse.classList.toggle('active', isDarkMode);
    nightmodecourse2.classList.toggle('active', isDarkMode);
    nightmodecoursetext.classList.toggle('active', isDarkMode);
    nightmodecoursetext2.classList.toggle('active', isDarkMode);
    nightmodetitle.classList.toggle('active', isDarkMode);
    nightmodetitle2.classList.toggle('active', isDarkMode);
    modeToggleElements.forEach((element) => element.classList.toggle('active', isDarkMode));
    exittext.classList.toggle('active', isDarkMode);
    sideBar.forEach((el) => {
        el.classList.toggle('active', isDarkMode);
    });
    // Remove transition after a delay to allow for smooth transition during toggle
    setTimeout(() => {
        document.body.classList.remove('no-transition');
    }, 300);
};

modeToggleElements.forEach((element) => element.addEventListener('click', handleModeToggle));

// Check if dark mode is stored in localStorage
const storedDarkMode = localStorage.getItem('darkMode');
if (storedDarkMode !== null) {
    applyDarkMode(storedDarkMode === 'true');
}
