const modeToggleElements = document.querySelectorAll('.night-mode-toggle');
const darkModeElement = document.querySelector('.container-content-bg');
const darkmodesidebar = document.querySelector('.sidebar');
const borderchange = document.querySelectorAll('.list-sidebar');

const sideBar = document.querySelectorAll(".list-sidebar ul li");
const exittext = document.querySelector('.exit-sidebar li');
// console.log(sideBar)

const handleModeToggle = () => {
    darkModeElement.classList.toggle('active');
    darkmodesidebar.classList.toggle('active');
    // borderchange.classList.toggle('active');
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
