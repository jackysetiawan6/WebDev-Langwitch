const title = document.querySelector('.middle-title');
const button = document.querySelector('.middle-button');
const question = document.querySelector('.middle-question > span');
const changer = document.querySelector('.middle-question > a');
const fullname = document.querySelectorAll('.middle > div')[0];
const email = document.querySelectorAll('.middle > div')[1];
const password = document.querySelectorAll('.middle > div')[2];
const confirmation = document.querySelectorAll('.middle > div')[3];

function change_title() {
    if (title.innerHTML === 'Masuk Akun') {
        title.innerHTML = 'Daftar Akun';
        button.innerHTML = 'Daftar';
        question.innerHTML = 'Sudah punya akun? ';
        changer.innerHTML = 'Masuk';
        fullname.style.display = 'block';
        email.style.display = 'block';
        password.style.display = 'block';
        confirmation.style.display = 'block';
    } else {
        title.innerHTML = 'Masuk Akun';
        button.innerHTML = 'Masuk';
        question.innerHTML = 'Belum punya akun? ';
        changer.innerHTML = 'Daftar';
        fullname.style.display = 'none';
        email.style.display = 'block';
        password.style.display = 'block';
        confirmation.style.display = 'none';
    }
}